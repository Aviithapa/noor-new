<?php

namespace App\Http\Controllers\Web;

use App\Client\FileUpload\FileUploaderInterface;
use App\Http\Requests\Depositor\StoreDepositorRequest;
use App\Models\Depositor;
use App\Models\KycDetails;
use App\Models\MembershipForm;
use App\Repositories\CMS\Post\PostRepository;

use Illuminate\Http\Request;

class HomeController extends BaseController
{
    //

    private $view_data;
    private $request, $postRepository;
    protected $fileUploader;

    public function __construct(
        Request $request,
        PostRepository $postRepository,
        FileUploaderInterface $fileUploader,
    ) {
        $this->request = $request;
        $this->postRepository = $postRepository;
        $this->fileUploader = $fileUploader;
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
                    $this->view_data['savings'] = $this->postRepository->all()->where('type', 'services');
                    break;
                case 'annual-report':
                    $this->view_data['annualReport'] = $this->postRepository->all()->where('type', 'annual_report');
                    break;
            }
            return view('website.pages.' . $slug,  $this->view_data);
        }
        return view('website.pages.404');
    }


    public function store(StoreDepositorRequest $request)
    {
        // Store the validated data
        $depositor = Depositor::create($request->validated());

        // Handle file upload if present
        if ($request->hasFile('depositor_photo')) {
            $response = $this->fileUploader->upload($request->file('depositor_photo'), 'depositor');
            $depositor->depositor_photo = $response['path'];
            $depositor->status = 'Pending';
            $depositor->save();
        }

        // Redirect to membership-form page with form values
        return redirect()->route('membership-form')->with('data', $depositor);
    }

    public function storeMember(Request $request)
    {


        // Store the form data
        $depositor =  MembershipForm::create([
            'depositor_id' => $request->user()->id,
            'name_of_member' => $request->name_of_member,
            'permanent_address' => $request->permanent_address,
            'temporary_address' => $request->temporary_address,
            'date_of_birth_nepali' => $request->date_of_birth_nepali,
            'marital_status' => $request->marital_status,
            'sex' => $request->sex,
            'name_of_father_husband' => $request->name_of_father_husband,
            'name_of_guardian' => $request->name_of_guardian,
            'resident_number' => $request->resident_number,
            'mobile_number' => $request->mobile_number,
            'office_number' => $request->office_number,
            'citizenship_number' => $request->citizenship_number,
            'passport_number' => $request->passport_number,
            'driving_license_number' => $request->driving_license_number,
            'nominee_name' => $request->nominee_name,
            'relation' => $request->relation,
            'nominee_address' => $request->nominee_address,
        ]);

        return redirect()->route('kym-form')->with('data', $depositor);
    }


    public function storeKycDetails(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'full_name' => 'required|string|max:255',
            'full_name_nepali' => 'required|string|max:255',
            'nationality' => 'nullable|string|max:255',
            'date_of_birth_nepali' => 'nullable|date',
            'date_of_birth_english' => 'nullable|date',
            'citizenship_number' => 'nullable|string|max:255',
            'place_of_issue' => 'nullable|string|max:255',
            'date_of_issue' => 'nullable|date',
            'passport_number' => 'nullable|string|max:255',
            'passport_place_of_issue' => 'nullable|string|max:255',
            'passport_date_of_issue' => 'nullable|date',
            'marital_status' => 'nullable|in:MARRIED,UNMARRIED,DIVORCED',
            'sex' => 'nullable|in:MALE,FEMALE,OTHER',
            'age' => 'nullable|integer',
            'name_of_guardian' => 'nullable|string|max:255',
            'relation' => 'nullable|string|max:255',
            'permanent_address' => 'required|string|max:255',
            'temporary_address' => 'nullable|string|max:255',

            // Relatives Information
            'spouse_name' => 'nullable|string|max:255',
            'spouse_citizenship' => 'nullable|string|max:255',
            'spouse_place_of_issue' => 'nullable|string|max:255',
            'spouse_date_of_issue' => 'nullable|date',

            'grandfather_name' => 'nullable|string|max:255',
            'grandfather_citizenship' => 'nullable|string|max:255',
            'grandfather_place_of_issue' => 'nullable|string|max:255',
            'grandfather_date_of_issue' => 'nullable|date',

            'father_name' => 'nullable|string|max:255',
            'father_citizenship' => 'nullable|string|max:255',
            'father_place_of_issue' => 'nullable|string|max:255',
            'father_date_of_issue' => 'nullable|date',

            'mother_name' => 'nullable|string|max:255',
            'mother_citizenship' => 'nullable|string|max:255',
            'mother_place_of_issue' => 'nullable|string|max:255',
            'mother_date_of_issue' => 'nullable|date',

            'son_name' => 'nullable|string|max:255',
            'son_citizenship' => 'nullable|string|max:255',
            'son_place_of_issue' => 'nullable|string|max:255',
            'son_date_of_issue' => 'nullable|date',

            'daughter_name' => 'nullable|string|max:255',
            'daughter_citizenship' => 'nullable|string|max:255',
            'daughter_place_of_issue' => 'nullable|string|max:255',
            'daughter_date_of_issue' => 'nullable|date',

            'daughter_in_law_name' => 'nullable|string|max:255',
            'daughter_in_law_citizenship' => 'nullable|string|max:255',
            'daughter_in_law_place_of_issue' => 'nullable|string|max:255',
            'daughter_in_law_date_of_issue' => 'nullable|date',
        ]);

        // Add the depositor_id to the validated data
        $validatedData['depositor_id'] = $request->user()->id;

        // Create the KycDetails record
        KycDetails::create($validatedData);

        // Redirect back with a success message
        return redirect()->back()->with('success', 'KYC details saved successfully.');
    }

}
