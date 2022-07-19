<?php

namespace App\Http\Controllers;

use App\Http\Services\FileManagementService;
use App\Models\Specialization;
use Illuminate\Http\Request;

class SpecializationController extends Controller
{
//    private $fileManagementService;

    public function __construct(FileManagementService $fileManagementService)
    {
        $this->fileManagementService = $fileManagementService;
        $this->middleware('auth');

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */

    public function list(Request $request){
        $specializationLists = Specialization::all();
        $specializationLists->icon = $request->icon;
        $specializationLists->heading = $request->heading;
        $specializationLists->description = $request->description;

        return view('layouts.specializationList', compact('specializationLists'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        $addSpecialization = Specialization::last();
        return view('layouts.specialization', compact('addSpecialization'));
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

            'icon' => 'required|string',
            'heading' => 'required|string',
            'description' => 'required',

        ]);


        $addSpecialization = new Specialization();
        $addSpecialization->icon = $request->icon;
        $addSpecialization->heading = $request->heading;
        $addSpecialization->description = $request->description;



        $addSpecialization->save();

        return redirect()->route('admin.specialization.list')->with('Success', 'New Specialization item has been created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function show($id)
    {
        $specializationLists = Specialization::find($id);
        return view('layouts.specializationList', compact('specializationLists'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit($id)
    {
        $specializationLists = Specialization::find($id);
        return view('layouts.specializationEdit', compact('specializationLists'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [

            'icon' => 'required|string',
            'heading' => 'required|string',
            'description' => 'required|string',

        ]);


        $addSpecialization = Specialization::find($id);
        $addSpecialization->icon = $request->icon;
        $addSpecialization->heading = $request->heading;
        $addSpecialization->description = $request->description;



        $addSpecialization->save();

        return redirect()->route('admin.specialization.list')->with('Success', 'New Specialization item has been created successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function delete($id)
    {
        $specializationLists = Specialization::find($id);

//        if(!isset($specializationLists)) return redirect()->route('admin.icon.list')->with('Failed', 'No Specialization Info was found');
//        if(is_null($specializationLists->icon)) return redirect()->route('admin.icon.list')->with('Failed', 'No Specialization Info was found');
//
//        $replacementPart = 'storage/' . $this->fileManagementService->iconPath();
//
//        $iconFile = !isset($specializationLists) ? null : str_replace($replacementPart, '' , $specializationLists->icon);
//        $iconDeleteFileResponse = $this->fileManagementService->deleteFile($this->fileManagementService->iconPath(), $iconFile);
//
//        if(!$iconDeleteFileResponse) return redirect()->route('admin.specialization')->with('Failed', 'No Specialization Info was found');



        $specializationLists->delete();

        return redirect()->route('admin.specialization.list')->with('Success', 'Specialization Info has been deleted successfully.');
    }
}
