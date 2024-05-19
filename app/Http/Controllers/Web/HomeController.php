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
        $this->view_data['footerAbout'] = $this->postRepository->findOrFail(22);

        if (file_exists($file_path) && $this->view_data['pageData']) {
            switch ($slug) {
                case 'index':
                    $this->view_data['banners'] = $this->postRepository->all()->where('type', 'homepage_banner');
                    $this->view_data['services'] = $this->postRepository->all()->where('type', 'services');
                    $this->view_data['about'] = $this->postRepository->findOrFail(21);
                    break;
                case 'csr':
                    $this->view_data['csr'] = $this->postRepository->all()->where('type', 'csr');
                    break;
                case 'loan':
                    $this->view_data['loan'] = $this->postRepository->all()->where('type', 'loan');
                    break;
                case 'bod':
                    $this->view_data['bods'] = $this->postRepository->all()->where('type', 'bod');
                    break;
                case 'team':
                    $this->view_data['teams'] = $this->postRepository->all()->where('type', 'team');
                    break;
                case 'about':
                    $this->view_data['about'] = $this->postRepository->findOrFail(21);
                    $this->view_data['history'] = $this->postRepository->findOrFail(39);
                    $this->view_data['annual_report'] = $this->postRepository->findOrFail(40);
                    break;
                case 'mobile-banking':
                    $this->view_data['mobile_banking'] = $this->postRepository->findOrFail(42);
                    break;
                case 'saving':
                    $this->view_data['saving'] = $this->postRepository->findOrFail(30);
                    break;
            }
            return view('website.pages.' . $slug,  $this->view_data);
        }
        return view('website.pages.404');
    }
}
