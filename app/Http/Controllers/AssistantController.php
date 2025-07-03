<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


use App\Models\Assistant;


class AssistantController extends Controller
{

    public function create_assistant(Request $request) {
        return view('create_assistant');
    }

    public function store_assistant(Request $request) {
        $request->validate([
            'name' => 'required',
            'partner_companies' => 'required|array',
            'status' => 'required|boolean',
        ]);

        Assistant::create([
            'name' => $request->name,
            'date_created' => date('Y-m-d'),
            'partner_companies' => json_encode($request->partner_companies),
            'status' => $request->status
        ]);




        return redirect()->back()->with('success', 'Assistant created!'); //witrh

    }

}
