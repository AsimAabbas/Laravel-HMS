<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Doctor;
use App\Models\Appointment;
class HomeController extends Controller
{
    public function redirect(){
        if(Auth::id())
        {
            if(Auth::user()->usertype=='0')
            {
                $doctor = doctor::all();
                return view('user.home',compact('doctor'));
            }else{
                return view('admin.home');
            }
        }else{
            return redirect()->back();
        }
    }
    public function index(){
        if(Auth::id())
        {
            return redirect('home');
        }
        else{
        // getting data from database from doctors table
        $doctor = doctor::all();
        return view('user.home',compact('doctor'));
    }
    }
    public function appointment(Request $request)
    {
        $data = new appointment;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->date = $request->date;
        $data->doctor = $request->doctor;
        $data->phone = $request->phone;
        $data->message = $request->message;
        $data->status = 'In Progress';

        if(Auth::id()){
        $data->user_id =Auth::user()->id;
        }
        $data->save();
        return redirect('myappointment')->with('message', 'Thanks Your Appiontment Has Been Sent. We Will Contact You Soon.');
    }
        public function myappointment()
    {
        if(Auth::id()){
            $userid = Auth::user()->id;
            $appoint = appointment::where('user_id', $userid)->get();
            return view('user.my_appointment',compact('appoint'));
        }
        else{
            return redirect()->back();
        }
    }
    public function doctors()
    {  
        if(Auth::id()){
        $doctor = doctor::all();
                return view('user.doctors',compact('doctor'));
            }
            else{
                return redirect()->back();
            }
    }
    public function cancel_appoint($id){
        $data = appointment::find($id);
        $data->delete();
        return redirect()->back()->with('message', 'Your Appiontment has been Deleted');
    }
}