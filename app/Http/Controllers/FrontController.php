<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        return view('front.home.index');
    }
    public function aboutUs()
    {
        return view('front.otherPages.aboutUs');
    }
    public function amrServices()
    {
        return view('front.otherPages.amrServices');
    }
    public function blog()
    {
        return view('front.otherPages.blog');
    }
    public function contactUs()
    {
        return view('front.otherPages.contactUs');
    }
    public function emirateId()
    {
        return view('front.otherPages.emirateId');
    }
    public function visitVisa()
    {
        return view('front.otherPages.visitVisa');
    }
    public function domesticWorkerVisa()
    {
        return view('front.otherPages.domesticWorkerVisa');
    }
    public function medicalFitnessTest()
    {
        return view('front.otherPages.medicalFitnessTest');
    }

    public function residencyVisa()
    {
        return view('front.otherPages.residencyVisa');
    }

    public function openFile()
    {
        return view('front.otherPages.openfile');
    }
}
