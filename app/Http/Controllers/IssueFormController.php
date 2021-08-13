<?php

namespace App\Http\Controllers;

use App\Models\Issue;
use Illuminate\Http\Request;

class IssueFormController extends Controller
{
    public function createForm(Request $request)
    {
        return view('contact');
    }

    // Store Contact Form data
    public function IssueForm(Request $request)
    {

        // Form validation
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|regex:/^[0-9]*$/|min:10',
            'problem-description' => 'required',
            'steps-taken' => 'required',
            'expectation' => 'required',
        ]);

        //  Store data in database
        Issue::create($request->all());

        //
        return back()->with('success', 'We have received your message and would like to thank you for writing to us.');
    }
}
