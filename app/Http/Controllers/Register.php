<?php

namespace App\Http\Controllers;

use App\Models\people;
use Illuminate\Http\Request;

class Register extends Controller
{
    public function home()
    {

        return view('signup');
    }
    public function store(Request $req)
    {
        $data = new people;
        $data->name = $req->name;
        $data->email = $req->email;
        $data->phone = $req->phone;
        $data->place = $req->place;
        $data->college = $req->college;
        $data->description = $req->description;
        $data->experience = $req->experience;

        $data->save();

        return back()->withSuccess('Signup success!!!!');
    }
    public function homepage()
    {

        $Registers = people::all();
        return view('home', ['Registers' => $Registers]);
    }


    public function edit($id)
    {
        $Register = people::find($id); // Assuming your model is "people"
        return view('editpage', compact('Register'));
    }

    public function update(Request $request, $id)
    {
        $Register = people::find($id); // Assuming your model is "people"
        if (!$Register) {
            // Handle the case where the user is not found
            return redirect()->back()->with('error', 'User not found');
        }

        // Update the user data based on the form input
        $Register->name = $request->input('name');
        $Register->email = $request->input('email');
        $Register->phone = $request->input('phone');
        $Register->place = $request->input('place');
        $Register->college = $request->input('college');
        $Register->description = $request->input('description');
        $Register->experience = $request->input('experience');
        
        // Update other user attributes similarly

        $Register->save();

        return redirect('home')->with('success', 'Register updated successfully');
    }







    public function delete($id)
    {
        $Register = people::find($id);
        if ($Register) {
            $Register->delete();
            // Redirect back or to a different page after deletion
            return redirect('home');
        }
        // Handle the case where the record with the given ID is not found
        return redirect()->back()->with('error', 'Record not found');
    }
}
