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




        return redirect()->back()->with('success', 'Assistant created!');

    }

//$id is passed from the url
    public function edit_assistant(Request $request, $id) {
        $assistant = Assistant::findOrFail($id);
        return view('edit_assistant', compact('assistant'));
    }


    public function update_assistant(Request $request, $id) {
        $validated = $request->validate([
            'name' => 'required',
            'partner_companies' => 'required|array',
            'status' => 'required|boolean',
        ]);

        Assistant::findOrFail($id)->update($validated);
        return redirect()->back()->with('success', 'Assistant updated!');

    }





    public function select_all() {
        $assistants = Assistant::all();
        return view('main', compact('assistants'));
    }

}
