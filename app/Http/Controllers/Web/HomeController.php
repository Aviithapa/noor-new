<?php

namespace App\Http\Controllers\Web;

use App\Repositories\CMS\Post\PostRepository;

use Illuminate\Http\Request;

class HomeController extends BaseController
{
    //

    private $view_data;
    private $request, $postRepository;

    public function __construct(
        Request $request,
        PostRepository $postRepository
    ) {
        $this->request = $request;
        $this->postRepository = $postRepository;
        parent::__construct();
    }


    public function slug($slug = null)
    {
        $slug = $slug ? $slug : 'index';
        $file_path = resource_path() . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR . 'website/pages' . DIRECTORY_SEPARATOR . $slug . '.blade.php';
        $this->view_data['pageData'] = $this->postRepository->findBy('slug', $slug);
        $this->view_data['clients'] = $this->postRepository->all()->where('type', 'clients');
        $this->view_data['slug'] = $slug;

        if (file_exists($file_path) && $this->view_data['pageData']) {
            switch ($slug) {
                case 'index':
                    $this->view_data['banners'] = $this->postRepository->all()->where('type', 'homepage_banner');
                    $this->view_data['services'] = $this->postRepository->all()->where('type', 'services');
                    break;
                case 'csr':
                    $this->view_data['csr'] = $this->postRepository->all()->where('type', 'csr');
                    break;
                case 'loan':
                    $this->view_data['loan'] = $this->postRepository->all()->where('type', 'loan');

                    break;
            }
            return view('website.pages.' . $slug,  $this->view_data);
        }
        return view('website.pages.404');
    }
}
