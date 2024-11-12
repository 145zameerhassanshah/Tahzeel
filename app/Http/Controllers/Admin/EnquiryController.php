<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Enquiry;
use Illuminate\Http\Request;

class EnquiryController extends Controller
{
    public function index()
    {
        $enquiries = Enquiry::all();
        return view('admin.enquiry.index', compact('enquiries'));
    }

    public function add()
    {
        return view('admin.enquiry.add');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'nullable',
            'phone_no' => 'required',
            'subject' => 'nullable',
            'enquiry_message' => 'required',
            'status' => 'required',
            'followup_date' => 'nullable',
            'followup_type' => 'required',
            'remarks' => 'nullable',

        ]);

        $enquiry = new Enquiry();
        $enquiry->name = $request->name;
        $enquiry->email = $request->email;
        $enquiry->phone_no = $request->phone_no;
        $enquiry->subject = $request->subject;
        $enquiry->enquiry_message = $request->enquiry_message;
        $enquiry->status = $request->status;
        $enquiry->followup_date = $request->followup_date;
        $enquiry->followup_type = $request->followup_type;
        $enquiry->remarks = $request->remarks;

        $enquiry->save();

        $notification = array(
            'message' => 'Enquiry Added Successfully!',
            'alert' => 'success',
        );


        return redirect()->route('admin.enquiry.index')->with('notification', $notification);
    }

    public function edit($id)
    {
        $enquiry = Enquiry::findOrFail($id);
        return view('admin.enquiry.edit', compact('enquiry'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'nullable',
            'phone_no' => 'required',
            'subject' => 'nullable',
            'enquiry_message' => 'required',
            'status' => 'required',
            'followup_date' => 'nullable',
            'followup_type' => 'required',
            'remarks' => 'nullable',

        ]);

        $enquiry = Enquiry::find($id);
        $enquiry->name = $request->name;
        $enquiry->email = $request->email;
        $enquiry->phone_no = $request->phone_no;
        $enquiry->subject = $request->subject;
        $enquiry->enquiry_message = $request->enquiry_message;
        $enquiry->status = $request->status;
        $enquiry->followup_date = $request->followup_date;
        $enquiry->followup_type = $request->followup_type;
        $enquiry->remarks = $request->remarks;

        $enquiry->save();

        $notification = array(
            'message' => 'Enquiry Updated Successfully!',
            'alert' => 'success',
        );


        return redirect()->route('admin.enquiry.index')->with('notification', $notification);
    }

    public function delete($id)
    {
        $enquiry = Enquiry::find($id);

        $enquiry->delete();

        $notification = array(
            'message' => 'Enquiry Deleted Successfully!',
            'alert' => 'success',
        );

        return back()->with('notification', $notification);
    }
}
