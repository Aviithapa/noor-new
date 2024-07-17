<?php

namespace App\Http\Controllers\Admin\CMS;

use App\Client\FileUpload\FileUploaderInterface;
use App\Http\Controllers\Controller;
use App\Http\Requests\Banner\CreateBannerRequest;
use App\Repositories\CMS\Post\PostRepository;
use App\Repositories\Media\MediaRepository;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AnnualReportController extends Controller
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
        $banner = $this->postRepository->getPaginatedList($request, 'annual_report');
        return view('admin.pages.cms.annual-report.index', compact('banner', 'request'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.pages.cms.annual-report.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateBannerRequest $request)
    {
        //
        $data = $request->all();
        try {
            DB::beginTransaction();
            $data['type'] = 'annual_report';
            $data['slug'] = generateSlug($data['title']);
            $banner = $this->postRepository->store($data);
            if ($banner == false) {
                session()->flash('danger', 'Oops! Something went wrong.');
                return redirect()->back()->withInput();
            }
            if (isset($data['file'])) {
                $response =  $this->fileUploader->upload($data['file'], "annual_report");
                $banner->image = $response['path'];
                $banner->save();
                $response['post_id'] = $banner->id;
                $this->mediaRepository->store($response);
            };
            DB::commit();
            session()->flash('success', 'Banner has been created successfully.');
            return redirect()->route('annual-report.index');
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
        $annualReport = $this->postRepository->findOrFail($id);
        return view('admin.pages.cms.annual-report.edit', compact('annualReport'));
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
            $banner = $this->postRepository->update($id, $data);
            if ($banner == false) {
                session()->flash('danger', 'Oops! Something went wrong.');
                return redirect()->back()->withInput();
            }
            if (isset($data['file'])) {
                $response =  $this->fileUploader->upload($data['file'], "annual_report");
                $banner = $this->postRepository->findOrFail($id);
                $banner->image = $response['path'];
                $banner->save();
                $response['post_id'] = $id;
                $this->mediaRepository->store($response);
            };
            DB::commit();
            session()->flash('success', 'Annual report has been updated successfully.');
            return redirect()->route('annual-report.index');
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
            $banner = $this->postRepository->delete($id);
            if ($banner == false) {
                session()->flash('danger', 'Oops! Something went wrong.');
                return redirect()->back()->withInput();
            }
            session()->flash('success', 'banner has been deleted successfully.');
            return redirect()->route('banner.index');
        } catch (Exception $e) {
            session()->flash('danger', 'Oops! Something went wrong.' . $e);
            return redirect()->back()->withInput();
        }
    }
}
