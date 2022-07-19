<?php

namespace App\Http\Controllers;

use App\Http\Services\FileManagementService;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectsController extends Controller
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
        $projectLists = Project::all();
        $projectLists->projectImage = $request->projectImage;
        $projectLists->projectName = $request->projectName;
        $projectLists->projectBy = $request->projectBy;
        $projectLists->projectBrief = $request->projectBrief;

        return view('layouts.projectList', compact('projectLists'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        $addProject = Project::last();
        return view('layouts.project', compact('addProject'));
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

            'projectName' => 'required|string',
            'projectImage' => 'required|file',
            'projectBy' => 'required|string',
            'projectBrief' => 'required',

        ]);


        $addProject = new Project();
        $addProject->projectImage = $request->projectImage;
        $addProject->projectName = $request->projectName;
        $addProject->projectBy = $request->projectBy;
        $addProject->projectBrief = $request->projectBrief;

        if ($request->file('projectImage')) {

            $img1 = $request->file('projectImage');
            $projectImage = $this->fileManagementService->uploadFile($request->projectImage, $this->fileManagementService->projectImagePath());


        }

        $addProject->projectImage = $projectImage['data'];

        $addProject->save();

        return redirect()->route('admin.project.list')->with('Success', 'New Project item has been created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show($id)
    {
        $projectLists = Project::find($id);
        return view('layouts.projectList', compact('projectLists'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit($id)
    {
        $projectLists = Project::find($id);
        return view('layouts.projectEdit', compact('projectLists'));
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

            'projectName' => 'required|string',
            'projectImage' => 'required|file',
            'projectBy' => 'required|string',
            'projectBrief' => 'required|string',

        ]);


        $addProject = Project::find($id);
        $addProject->projectName = $request->projectName;
        $addProject->projectImage = $request->projectImage;
        $addProject->projectBy = $request->projectBy;
        $addProject->projectBrief = $request->projectBrief;

        if ($request->file('projectImage')) {

            $img1 = $request->file('projectImage');
            $projectImage = $this->fileManagementService->uploadFile($request->projectImage, $this->fileManagementService->ProjectImagePath());


        }

        $addProject->projectImage = $projectImage['data'];

        $addProject->save();

        return redirect()->route('admin.project.list')->with('Success', 'New Project item has been created successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function delete($id)
    {
        $projectLists = Project::find($id);

        if(!isset($projectLists)) return redirect()->route('admin.project.list')->with('Failed', 'No Project Info was found');
//        if(is_null($projectLists->projectName)) return redirect()->route('admin.project.list')->with('Failed', 'No Project Info was found');

        $replacementPart = 'storage/' . $this->fileManagementService->ProjectImagePath();

        $projectImageFile = !isset($projectLists) ? null : str_replace($replacementPart, '' , $projectLists->projectImage);
        $projectImageDeleteFileResponse = $this->fileManagementService->deleteFile($this->fileManagementService->ProjectImagePath(), $projectImageFile);

//        if(!$projectImageDeleteFileResponse) return redirect()->route('admin.project.list')->with('Failed', 'No Project Info was found');



        $projectLists->delete();

        return redirect()->route('admin.project.list')->with('Success', 'Project Info has been deleted successfully.');
    }
}
