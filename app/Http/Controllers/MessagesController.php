<?php

namespace App\Http\Controllers;

use App\Http\Services\FileManagementService;
use App\Models\Message;
use Illuminate\Http\Request;

class MessagesController extends Controller
{
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
        $messageLists = Message::all();
        $messageLists->image = $request->image;
        $messageLists->name = $request->name;
        $messageLists->designation = $request->designation;
        $messageLists->message = $request->message;

        return view('layouts.messageList', compact('messageLists'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        $addMessage = Message::last();
        return view('layouts.message', compact('addMessage'));
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

            'name' => 'required|string',
            'image' => 'required|file',
            'designation' => 'required|string',
            'message' => 'required',

        ]);


        $addMessage = new Message();
        $addMessage->image = $request->image;
        $addMessage->name = $request->name;
        $addMessage->designation = $request->designation;
        $addMessage->message = $request->message;

        if ($request->file('image')) {

            $img1 = $request->file('image');
            $image = $this->fileManagementService->uploadFile($request->image, $this->fileManagementService->imagePath());


        }

        $addMessage->image = $image['data'];

        $addMessage->save();

        return redirect()->route('admin.message.list')->with('Success', 'New Message item has been created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show($id)
    {
        $messageLists = Message::find($id);
        return view('layouts.messageList', compact('messageLists'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit($id)
    {
        $messageLists = Message::find($id);
        return view('layouts.messageEdit', compact('messageLists'));
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

            'name' => 'required|string',
            'image' => 'required|file',
            'designation' => 'required|string',
            'message' => 'required|string',

        ]);


        $addMessage = Message::find($id);
        $addMessage->name = $request->name;
        $addMessage->image = $request->image;
        $addMessage->designation = $request->designation;
        $addMessage->message = $request->message;

        if ($request->file('image')) {

            $img1 = $request->file('image');
            $image = $this->fileManagementService->uploadFile($request->image, $this->fileManagementService->imagePath());


        }

        $addMessage->image = $image['data'];

        $addMessage->save();

        return redirect()->route('admin.message.list')->with('Success', 'New Message item has been created successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function delete($id)
    {
        $messageLists = Message::find($id);

        if(!isset($messageLists)) return redirect()->route('admin.message.list')->with('Failed', 'No Message Info was found');
//        if(is_null($messageLists->name)) return redirect()->route('admin.message.list')->with('Failed', 'No Message Info was found');

        $replacementPart = 'storage/' . $this->fileManagementService->imagePath();

        $imageFile = !isset($messageLists) ? null : str_replace($replacementPart, '' , $messageLists->image);
        $imageDeleteFileResponse = $this->fileManagementService->deleteFile($this->fileManagementService->imagePath(), $imageFile);

//        if(!$imageDeleteFileResponse) return redirect()->route('admin.message.list')->with('Failed', 'No Message Info was found');



        $messageLists->delete();

        return redirect()->route('admin.message.list')->with('Success', 'Message Info has been deleted successfully.');
    }
}
