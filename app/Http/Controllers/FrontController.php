<?php

namespace App\Http\Controllers;

use App\Models\Enquiry;
use Illuminate\Support\Facades\Validator;
use App\Models\Service;
use Illuminate\Http\Request;
use App\Mail\InquiryEmail;
use App\Models\User;
use Illuminate\Support\Facades\Mail;

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

    public function entryPermit()
    {
        return view('front.otherPages.entryPermits');
    }

    public function visaCancellation()
    {
        return view('front.otherPages.visaCancellation');
    }

    public function test()
    {
        $service = Service::with('serviceFeatures')->where('status', 'publish')->first();




        if (isset($service)) {
            return view('front.otherPages.test', compact('service'));
        } else {
            return back();
        }
    }
    public function storeInquiry(Request $request)
    {
        // Validate the request data
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'phone' => 'required|string',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()
            ], 422);
        }
        $inquiry = new Enquiry();
        $inquiry->name = $request->name;
        $inquiry->phone_no = $request->phone;
        $inquiry->email = $request->email;
        $inquiry->enquiry_message = $request->message;
        $inquiry->save();
        $users = User::all();
        foreach ($users as $user) {
            Mail::to($user->email)->send(new InquiryEmail($inquiry));
        }
        return response()->json([
            'success' => true,
            'message' => 'Inquiry submitted successfully!',
        ]);
    }
}
