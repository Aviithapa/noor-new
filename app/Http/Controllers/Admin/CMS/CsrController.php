<?php

namespace App\Http\Controllers\Admin\CMS;

use App\Client\FileUpload\FileUploaderInterface;
use App\Http\Controllers\Controller;
use App\Repositories\CMS\Post\PostRepository;
use App\Repositories\Media\MediaRepository;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CsrController extends Controller
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
        $csr = $this->postRepository->getPaginatedList($request, 'csr');
        return view('admin.pages.cms.csr.index', compact('csr', 'request'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.pages.cms.csr.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $data = $request->all();
        try {
            DB::beginTransaction();
            $data['type'] = 'csr';
            $data['slug'] = generateSlug($data['title']);
            $news = $this->postRepository->store($data);

            if ($news == false) {
                session()->flash('danger', 'Oops! Something went wrong.');
                return redirect()->back()->withInput();
            }
            if (isset($data['file'])) {
                $response =  $this->fileUploader->upload($data['file'], "csr");
                $news->image = $response['path'];
                $news->save();
                $response['post_id'] = $news->id;
                $this->mediaRepository->store($response);
            };

            DB::commit();
            session()->flash('success', 'csr has been created successfully.');
            return redirect()->route('csr.index');
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
        //
        $csr = $this->postRepository->findOrFail($id);
        return view('admin.pages.cms.csr.edit', compact('csr'));
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
            }

            if (isset($data['file'])) {
                $response =  $this->fileUploader->upload($data['file'], "csr");
                $post = $this->postRepository->findOrFail($id);
                $post->image = $response['path'];
                $post->save();
                $response['post_id'] = $post->id;
                $this->mediaRepository->store($response);
            };
            DB::commit();
            session()->flash('success', 'Csr has been updated successfully.');
            return redirect()->route('csr.index');
        } catch (Exception $e) {
            dd($e);
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
            $page = $this->postRepository->delete($id);
            if ($page == false) {
                session()->flash('danger', 'Oops! Something went wrong.');
                return redirect()->back()->withInput();
            }
            session()->flash('success', 'Csr has been deleted successfully.');
            return redirect()->route('csr.index');
        } catch (Exception $e) {
            session()->flash('danger', 'Oops! Something went wrong.' . $e);
            return redirect()->back()->withInput();
        }
    }
}
