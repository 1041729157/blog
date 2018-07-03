<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPagesController extends Controller
{
    public function index()
    {
    	return view('pages.index');
    }

    public function tour()
    {
    	return view('pages.tour');
    }

    public function gallery()
    {
    	return view('pages.gallery');
    }

    public function testimonial()
    {
    	return view('pages.testimonial');
    }

    public function blog()
    {
    	return view('pages.blog');
    }

    public function contact()
    {
    	return view('pages.contact');
    }

    public function permissionDenied()
    {
         // 如果当前用户有权限访问后台，直接跳转访问
        if (config('administrator.permission')()) {
            return redirect(url(config('administrator.uri')), 302);
        }
        // 否则使用视图
        return view('pages.permission_denied');
    } 
}
