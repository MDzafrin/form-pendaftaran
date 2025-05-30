<?php

namespace App\Http\Controllers;

use App\Models\Form;
use Illuminate\Http\Request;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //Retrieve the lastest forms from the database and paginate them
        $forms = Form::latest()->paginate(5);

        //Pass the forms to the view
        return view('forms.index', compact('forms'))->with(request()->input('page'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('forms.create');
    }

    /**
     * Store a newly created resource in storage.
     * 
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response 
     */
    public function store(Request $request)
    {
        //check if the file is uploaded
        // return $request->file('image')->store('post-images');


        //validate the input
        $request->validate([
            'name' => 'required',
            'gender'=> 'required',
            'prodi'=> 'required',
            'tingkat'=> 'required',
            'email' => 'required',
            'phone' => 'required',
            'lomba' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',    
        ]);

        $image_form = time().'.'.$request->image->extension();
        $request->image->move(public_path('post-images'), $image_form);

        //create a new form in the database
        Form::create([
            'name' => $request->name,
            'gender' => $request->gender,
            'prodi' => $request->prodi,
            'tingkat' => $request->tingkat,
            'email' => $request->email,
            'phone' => $request->phone,
            'lomba' => $request->lomba,
            'image' => $image_form,
        ]);

        //redirect to the form index page with a success message
        return redirect()->route('forms.index')->with('success', 'Form submitted successfully!');


    }

    /**
     * Display the specified resource.
     */
    public function show(Form $form)
    {
        return view('forms.show', compact('form'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Form $form)
    {
        return view('forms.edit', compact('form'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Form $form)
    {
        //validate the input
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'gender' => 'required',
            'prodi' => 'required',
        ]);
        //update the form in the database
        $form->update($request->all());
        //redirect to the form index page with a success message
        return redirect()->route('forms.index')->with('success', 'Form updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Form $form)
    {
        //delete the product
        $form->delete();

        //redirect the user and display success message
        return redirect()->route('forms.index')->with('success','Form deleted successfully');

    }
}
