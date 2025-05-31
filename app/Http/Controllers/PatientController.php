<?php

namespace App\Http\Controllers; // BUG: wrong namespace, should be App\Http\Controllers

// BUG: missing use Patient model
use App\Models\Patient;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class PatientController
{
    public function create(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'gender' => ['required', Rule::in(['male', 'female'])],
            'birthdate' => 'required|date'
        ]);
        // BUG: undefined model reference
        Patient::create($validatedData);

        return redirect('/patients')->with('success','Patient added');
    }

    public function store()
    {
        // BUG: wrong variable name $patientsx
        $patients = Patient::select('id','name','gender','birthdate')->get();

        return view('patients.index', compact('patients'));
    }
}
