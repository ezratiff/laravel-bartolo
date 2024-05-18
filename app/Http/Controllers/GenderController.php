<?php

namespace App\Http\Controllers;

use App\Models\Gender;
use Illuminate\Http\Request;

class GenderController extends Controller
{

    public function index() {
        $genders = Gender::all();
        return view('gender.index', compact('genders'));
    }

    public function show($id) {
        $gender = Gender::find($id);
        return view('gender.show', compact('gender'));
    }

    public function create() {
        return view('gender.create');
    }

    public function store(Request $request) {
        $validated = $request->validate([
            'gender' => ['required']
        ]);

        Gender::create($validated);

        return redirect('/genders')->with('message_success', 'Gender successfully saved.');
    }

    public function edit($id) {
        $gender = Gender::find($id);
        return view('gender.edit', compact('gender'));
    }

    public function update(Request $request, Gender $gender) {
        $validated = $request->validate([
            'gender' => ['required']
        ]);
        $gender->update($validated);
        return redirect('/genders')->with('message_success', 'Gender successfully updated');
    }

    public function delete($id) {
        $gender = Gender::find($id);

        return view('gender.delete', compact('gender'));
    }

    public function destroy(Request $request, Gender $gender) {
        $gender->delete($request);
        return redirect('/genders')->with('message_success', 'Gender successfully deleted.');
    }
}
