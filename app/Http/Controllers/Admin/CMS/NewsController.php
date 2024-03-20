<?php

namespace App\Http\Controllers\Admin\CMS;

use App\Client\FileUpload\FileUploaderInterface;
use App\Http\Controllers\Controller;
use App\Http\Requests\News\CreateNewsRequest;
use App\Repositories\CMS\Post\PostRepository;
use App\Repositories\Media\MediaRepository;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{

    protected $postRepository;
    protected $fileUploader;
    protected $mediaRepository;

    public function __construct(
        PostRepository $postRepository,
        FileUploaderInterface $fileUploader,
        MediaRepository $mediaRepository
    ) {
        $this->postRepository = $postRepository;
        $this->fileUploader = $fileUploader;
        $this->mediaRepository = $mediaRepository;
    }


    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //
        $news = $this->postRepository->getPaginatedList($request, 'news');
        return view('admin.pages.cms.news.index', compact('news', 'request'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.pages.cms.news.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateNewsRequest $request)
    {
        //
        $data = $request->all();
        try {
            DB::beginTransaction();
            $data['type'] = 'news';
            $data['slug'] = generateSlug($data['title']);
            $news = $this->postRepository->store($data);


            if ($news == false) {
                session()->flash('danger', 'Oops! Something went wrong.');
                return redirect()->back()->withInput();
            } else if (isset($data['files']) && count($data['files']) > 0) {
                foreach ($data['files'] as $file) {
                    $response =  $this->fileUploader->upload($file, "news");
                    $response['post_id'] = $news->id;
                    $this->mediaRepository->store($response);
                }
            };
            DB::commit();
            session()->flash('success', 'News has been created successfully.');
            return redirect()->route('news.index');
        } catch (Exception $e) {
            DB::rollBack();
            session()->flash('danger', 'Oops! Something went wrong.' . $e);
            return redirect()->back()->withInput();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $news = $this->postRepository->findOrFail($id);
        return view('admin.pages.cms.news.edit', compact('news'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->all();
        try {
            DB::beginTransaction();
            $data['slug'] = generateSlug($data['title']);
            $news = $this->postRepository->update($id, $data);
            if ($news == false) {
                session()->flash('danger', 'Oops! Something went wrong.');
                return redirect()->back()->withInput();
            } else if ($data['files'] && count($data['files']) > 0) {
                foreach ($data['files'] as $file) {
                    $response =  $this->fileUploader->upload($file, "news");
                    $response['post_id'] = $id;
                    $this->mediaRepository->store($response);
                }
            };
            DB::commit();
            session()->flash('success', 'News has been updated successfully.');
            return redirect()->route('news.index');
        } catch (Exception $e) {
            DB::rollBack();
            session()->flash('danger', 'Oops! Something went wrong.' . $e);
            return redirect()->back()->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $news = $this->postRepository->delete($id);
            if ($news == false) {
                session()->flash('danger', 'Oops! Something went wrong.');
                return redirect()->back()->withInput();
            }
            session()->flash('success', 'News has been deleted successfully.');
            return redirect()->route('news.index');
        } catch (Exception $e) {
            session()->flash('danger', 'Oops! Something went wrong.' . $e);
            return redirect()->back()->withInput();
        }
    }
}
