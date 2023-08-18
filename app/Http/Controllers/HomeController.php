<?php

namespace App\Http\Controllers;

use App\Models\Slide;


class HomeController extends Controller
{
    public function index()
    {
        $data['slides']=Slide::all();
//        dd($data['slides']);
        return view('home.index',$data);
    }
    public function about()
    {
        return view('about.index_about');
    }
    public function blog()
    {
        return view('blog.index_blog');
    }
    public function contact()
    {
        return view('contact.index_contact');
    }
    public function courses()
    {
        return view('course.index_courses');
    }
    public function event()
    {
        return view('event.index_event');
    }
    public function teacher()
    {
        return view('teacher.index_teacher');
    }
    public function gallery()
    {
        return view('gallery.index_gallery');
    }
    public function login()
    {
        return view('login.index_login');
    }
    public function register()
    {
        return view('register.index_register');
    }
    public function notice()
    {
        return view('notice.index_notice');
    }
}
