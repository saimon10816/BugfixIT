<?php

namespace App\Http\Controllers;

use App\Http\Services\FileManagementService;
use App\Models\home;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(FileManagementService $fileManagementService)
    {
        $this->fileManagementService = $fileManagementService;
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $home = Home::first();
        return view('layouts.home', compact('home'));
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|string',
            'subtitle' => 'required|string',
            'link' => 'required|string',
        ]);

        $home = Home::first();
        if(is_null($home->title)) return redirect()->route('admin.main')->with('Failed', 'No title was found');
        if(is_null($home->subtitle)) return redirect()->route('admin.main')->with('Failed', 'No subtitle was found');
        if(is_null($home->link)) return redirect()->route('admin.main')->with('Failed', 'No link was found');
        $home->title = $request->title;
        $home->subtitle = $request->subtitle;
        $home->link = $request->link;



        $home->save();



        return redirect()->route('admin.home')->with('success', "Home Page data has been updated successfully");
    }


}
