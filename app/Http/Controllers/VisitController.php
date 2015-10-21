<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Patient;
use App\Visit;
use App\Bed;
use App\Doctor;
use App\Http\Requests\NewVisitRequest;
use App\Http\Requests\DischargeRequest;
use DB;
use App\Record;

class VisitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct(){

        $this->middleware('admin');
                
    }

    public function index()
    {   
        $visits = \App\Visit::all();
        return view('pages.Visit.visit',compact('visits'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $doctors = Doctor::select(
        DB::raw("CONCAT(doctor_fname,' ', doctor_mname,' ',doctor_lname,' - ',(select med_specialty from medspecialties where id = medspecialty_id) ) AS full_name, id")
        )->lists('full_name', 'id');
        
        $beds = Bed::vacant();

        $visit_type = array('in_patient' => 'in patient', 'out_patient' => 'out patient');

        //dd($doctors,$beds);

        return view('pages.Visit.admit',compact('doctors','beds','visit_type'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NewVisitRequest $request)
    {
        $visit = new Visit($request->all());



        $visit->save();
        flash()->overlay('new visit record added!','notice');
        return redirect('visit');
    }

    public function discharge(DischargeRequest $request,$id){

        $visit = Visit::findOrFail($id)->toArray();

        $record = new Record($visit);
        Visit::findOrFail($id)->delete();
        $record->visit_date = $visit['created_at'];
        $record->discharge_date = \Carbon\Carbon::now();
        $record->findings = $request->findings;
        $record->save();

        flash()->overlay('patient discharged','notice');

        return redirect('visit');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $visit = Visit::findOrFail($id);

        $patient = $visit->patient->fullname($visit->doctor->id);
        $doctor = $visit->doctor->fullname($visit->doctor->id);
        if($visit->bed)
        {   
            $bed = $visit->bed->getBed($visit->bed->id);
        }
        
        

        return view('pages.Visit.discharge',compact('visit','doctor','bed','patient'));
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
