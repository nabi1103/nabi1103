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

    // Store Issue data
    public function IssueForm(Request $input)
    {

        // Form validation
        $this->validate($input, [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|regex:/^[0-9]*$/|min:10',
            'urgency' => 'required',
            'problem-description' => 'required',
            'steps-taken' => 'required',
            'expectation' => 'required',
        ]);

        //  Store data in database
        Issue::create($input->all());

        //
        return redirect()->route('confirmation');
    }
}
