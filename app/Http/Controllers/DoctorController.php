<?php

namespace App\Http\Controllers;

use Redirect;
use Auth;
use App\MedSpecialty;
use App\Doctor;
use Illuminate\Http\Request;
use App\Http\Requests\DoctorRequest;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(){

        $this->middleware('admin', ['except' => ['home']]);
        $this->middleware('doctor', ['only' => ['home']]);
        
    }   

    public function home()
    {   
        $patients = Doctor::findOrFail(Auth::user()->doctor_id)->patient()->get();
        return view('pages.doctor',compact('patients'));
    }

    public function index()
    {
        //
        $doctors = Doctor::all();
        return view('pages.Doctor.doctor',compact('doctors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $specialty = MedSpecialty::lists('med_specialty','id');
        return view('pages.Doctor.doctorform',compact('specialty'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DoctorRequest $request)
    {
        //  

            $doctor = new Doctor($request->all());                 
            
            $doctor->save();
            return redirect('pis/doctor');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function getDoctor(){
        
        $doc_id = Input::get('doc_id');

        $doctors = App\Doctor::where('field','=',$doc_id)->get();

        return Response::json($doctors);
    }

    public function show($id)
    {
        //
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
