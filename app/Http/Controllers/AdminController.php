<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Appointment;
use App\Models\Speciality;

class AdminController extends Controller
{
    public function addview()
    {
        return view('admin.add_doctor');
    }
    public function add_speciality()
    {
        return view('admin.add_speciality');
    }

    // Adding Doctor
    public function upload(Request $request)
    {
        
        $doctor = new doctor;
        $image = $request->image;
        $imagename = time() . '.' . $image->getClientoriginalExtension();
        // $destinationPath = public_path('/doctorimages');
        $request->image->move( 'doctorimages', $imagename);
        $doctor->image = $imagename;
        $doctor->name=$request->name;
        $doctor->phone=$request->phone;
        $doctor->speciality=$request->speciality;
        $doctor->room=$request->room;
        $doctor->save();
        return redirect('showdoctor')->with('message', 'Doctor Added Sucessfully');

    }
    public function addspeciality(Request $request)
    {
        
        $doctor = new speciality;
        $doctor->speciality=$request->name;
        $doctor->save();
        return redirect()->back()->with('message', 'Speciality Added Sucessfully');

    }
    public function showappointment()
    {
        $data = appointment::all();
        return view('admin.showappointment',compact('data'));
    }
    public function showspeciality()
    {
        $speciality = speciality::all();
        return view('admin.add_doctor',compact('speciality'));
    }
    public function show_speciality()
    {
        $speciality = speciality::all();
        return view('admin.add_speciality',compact('speciality'));
    }

    public function doctorslist()
    {
        $data = doctor::all();
        $appointment = appointment::all();
        return view('admin.body',compact('data'),compact('appointment'));
    }
    
    
    public function approved($id)
    {
        $data = appointment::find($id);
        $data->status='Approved';
        $data->save();
        return redirect()->back()->with('message', 'Appiontment has been Approved');
    }
    public function cancel($id)
    {
        $data = appointment::find($id);
        $data->status='Canceled';
        $data->save();
        return redirect()->back()->with('message', 'Appiontment has been Canceled');
    }
    
    public function showdoctor()
    {
        $data = doctor::all();
        return view('admin.showdoctor',compact('data'));
    }
    public function deletedoctor($id){
        $data = doctor::find($id);
        $data->delete();
        return redirect()->back()->with('message', 'Doctor has been Deleted');

    }
    public function deleteappointment($id){
        $data = appointment::find($id);
        $data->delete();
        return redirect()->back()->with('message', 'Appointment has been Deleted');

    }
    public function updatedoctor($id){
        $data = doctor::find($id);

        return view('admin.update_doctor', compact('data'));

    }
    public function editdoctor(Request $request , $id){
        $doctor = doctor::find($id);
        $doctor->name=$request->name;
        $doctor->phone=$request->phone;
        $doctor->speciality=$request->speciality;
        $doctor->room=$request->room;
        $image = $request->image;
        if($image){
        $imagename = time() . '.' . $image->getClientoriginalExtension();
        $request->image->move( 'doctorimages', $imagename);
        $doctor->image = $imagename;
    }
        $doctor->save();
        return redirect('showdoctor')->with('message', 'Doctor updated Sucessfully');
    }

}

