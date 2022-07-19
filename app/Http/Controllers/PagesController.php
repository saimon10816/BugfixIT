<?php

namespace App\Http\Controllers;

use App\Models\ContactForm;
use App\Models\home;
use App\Models\Message;
use App\Models\Partner;
use App\Models\Project;
use App\Models\Specialization;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $home = Home::first();
        $addSpecialization = Specialization::all();
        $specializationLists = Specialization::orderBy('id', 'ASC')->get();
        $addMessage = Message::all();
        $messageLists = Message::orderBY('id', 'ASC')->get();
        $addProject = Project::all();
        $projectLists = Project::orderBY('id', 'ASC')->get();
        $addPartner = Partner::all();
        $partnerLists = Partner::orderBY('id', 'ASC')->get();
        $addTestimonial = Testimonial::all();
        $testimonialLists = Testimonial::orderBY('id', 'ASC')->get();
        $contact = ContactForm::all();
//        $lists = AddBooks::all();
//        $addAward = AddAward::all();
//        $listAwards = AddAward::all();
//        $addMedia = Media::all();
//        $mediaLists = Media::orderBy('id', 'DESC')->get();
        return view('index', compact('home', 'addSpecialization', 'specializationLists', 'addMessage', 'messageLists', 'addProject', 'projectLists', 'addPartner', 'partnerLists', 'addTestimonial', 'testimonialLists', 'contact'));
    }

}
