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
            'date_created' => 'required|date',
            'partner_companies' => 'required|array',
            'status' => 'required|boolean',
        ]);

        Assistant::create([
            'name' => $request->name,
            'date_created' => $request->date_created,
            'partner_companies' => json_encode($request->partner_companies),
            'is_active' => $request->is_active
        ]);





        return redirect()->back()->with('success', 'Assistant created!');

    }

}
