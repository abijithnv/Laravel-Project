<?php

namespace App\Http\Controllers;
use App\Models\people;
use Illuminate\Http\Request;

class Register extends Controller
{
    public function home(){

        return view('signup');
    }
    public function store(Request $req)
    {
        $data=new people;
        $data->name=$req->name;
        $data->email=$req->email;
        $data->phone=$req->phone;
        $data->place=$req->place;
        $data->college=$req->college;
        $data->description=$req->description;
        $data->experience=$req->experience;

        $data->save();

        return redirect('home');
    }
    public function homepage(){

        $Registers=people::all();
        return view('home',['Registers'=>$Registers]);
        
    }
    public function delete($id) {
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