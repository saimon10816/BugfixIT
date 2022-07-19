<?php

namespace App\Http\Controllers;

use App\Http\Services\FileManagementService;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(FileManagementService $fileManagementService)
    {
        $this->fileManagementService = $fileManagementService;
        $this->middleware('auth');

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function list(Request $request){
        $testimonialLists = Testimonial::all();
        $testimonialLists->authorName = $request->authorName;
        $testimonialLists->authorBy = $request->authorBy;
        $testimonialLists->quote = $request->quote;

        return view('layouts.testimonialList', compact('testimonialLists'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        $addTestimonial = Testimonial::last();
        return view('layouts.testimonial', compact('addTestimonial'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $this->validate($request, [

            'authorName' => 'required|string',
            'authorBy' => 'required|string',
            'quote' => 'required',

        ]);


        $addTestimonial = new Testimonial();
        $addTestimonial->authorName = $request->authorName;
        $addTestimonial->authorBy = $request->authorBy;
        $addTestimonial->quote = $request->quote;

//        if ($request->file('testimonialImage')) {
//
//            $img1 = $request->file('testimonialImage');
//            $testimonialImage = $this->fileManagementService->uploadFile($request->testimonialImage, $this->fileManagementService->testimonialImagePath());
//
//
//        }

//        $addTestimonial->testimonialImage = $testimonialImage['data'];

        $addTestimonial->save();

        return redirect()->route('admin.testimonial.list')->with('Success', 'New Testimonial item has been created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show($id)
    {
        $testimonialLists = Testimonial::find($id);
        return view('layouts.testimonialList', compact('testimonialLists'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit($id)
    {
        $testimonialLists = Testimonial::find($id);
        return view('layouts.TestimonialEdit', compact('testimonialLists'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [

            'authorName' => 'required|string',
            'authorBy' => 'required|string',
            'quote' => 'required',

        ]);


        $addTestimonial = Testimonial::find($id);
        $addTestimonial->authorName = $request->authorName;
        $addTestimonial->authorBy = $request->authorBy;
        $addTestimonial->quote = $request->quote;

//        if ($request->file('testimonialImage')) {
//
//            $img1 = $request->file('testimonialImage');
//            $testimonialImage = $this->fileManagementService->uploadFile($request->testimonialImage, $this->fileManagementService->TestimonialImagePath());
//
//
//        }
//
//        $addTestimonial->testimonialImage = $testimonialImage['data'];

        $addTestimonial->save();

        return redirect()->route('admin.testimonial.list')->with('Success', 'New Testimonial item has been created successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function delete($id)
    {
        $testimonialLists = Testimonial::find($id);
//
//        if(!isset($testimonialLists)) return redirect()->route('admin.testimonial.list')->with('Failed', 'No Testimonial Info was found');
////        if(is_null($testimonialLists->authorName)) return redirect()->route('admin.testimonial.list')->with('Failed', 'No Testimonial Info was found');
//
//        $replacementPart = 'storage/' . $this->fileManagementService->TestimonialImagePath();
//
//        $testimonialImageFile = !isset($testimonialLists) ? null : str_replace($replacementPart, '' , $testimonialLists->testimonialImage);
//        $testimonialImageDeleteFileResponse = $this->fileManagementService->deleteFile($this->fileManagementService->TestimonialImagePath(), $testimonialImageFile);
//
////        if(!$testimonialImageDeleteFileResponse) return redirect()->route('admin.testimonial.list')->with('Failed', 'No Testimonial Info was found');



        $testimonialLists->delete();

        return redirect()->route('admin.testimonial.list')->with('Success', 'Testimonial Info has been deleted successfully.');
    }
}
