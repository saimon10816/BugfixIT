<?php

namespace App\Http\Controllers;

use App\Http\Services\FileManagementService;
use App\Models\Partner;
use Illuminate\Http\Request;

class PartnersController extends Controller
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
        $partnerLists = Partner::all();
        $partnerLists->partnerIcon = $request->partnerIcon;


        return view('layouts.partnerList', compact('partnerLists'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        $addPartner = Partner::last();
        return view('layouts.partner', compact('addPartner'));
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


            'partnerIcon' => 'required|file',


        ]);


        $addPartner = new Partner();
//        $addPartner->partnerIcon = $request->partnerIcon;


        if ($request->file('partnerIcon')) {

            $img1 = $request->file('partnerIcon');
            $partnerIcon = $this->fileManagementService->uploadFile($request->partnerIcon, $this->fileManagementService->partnerIconPath());


        }

        $addPartner->partnerIcon = $partnerIcon['data'];

        $addPartner->save();

        return redirect()->route('admin.partner.list')->with('Success', 'New Partner item has been created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show($id)
    {
        $partnerLists = Partner::find($id);
        return view('layouts.partnerList', compact('partnerLists'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit($id)
    {
        $partnerLists = Partner::find($id);
        return view('layouts.partnerEdit', compact('partnerLists'));
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


            'partnerIcon' => 'required|file',

        ]);


        $addPartner = Partner::find($id);
//        $addPartner->partnerIcon = $request->partnerIcon;


        if ($request->file('partnerIcon')) {

            $img1 = $request->file('partnerIcon');
            $partnerIcon = $this->fileManagementService->uploadFile($request->partnerIcon, $this->fileManagementService->partnerIconPath());


        }

        $addPartner->partnerIcon = $partnerIcon['data'];

        $addPartner->save();

        return redirect()->route('admin.partner.list')->with('Success', 'New Partner item has been created successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function delete($id)
    {
        $partnerLists = Partner::find($id);

        if(!isset($partnerLists)) return redirect()->route('admin.partner.list')->with('Failed', 'No Partner Info was found');
//        if(is_null($partnerLists->partnerName)) return redirect()->route('admin.partner.list')->with('Failed', 'No Partner Info was found');

        $replacementPart = 'storage/' . $this->fileManagementService->partnerIconPath();

        $partnerIconFile = !isset($partnerLists) ? null : str_replace($replacementPart, '' , $partnerLists->partnerIcon);
        $partnerIconDeleteFileResponse = $this->fileManagementService->deleteFile($this->fileManagementService->partnerIconPath(), $partnerIconFile);

//        if(!$partnerIconDeleteFileResponse) return redirect()->route('admin.partner.list')->with('Failed', 'No Partner Info was found');



        $partnerLists->delete();

        return redirect()->route('admin.partner.list')->with('Success', 'Partner Info has been deleted successfully.');
    }
}
