<?php

namespace App\Http\Controllers;

use Redirect;
// use Request;
// use Validator;
use App\Patient;
use App\Record;
use Illuminate\Http\Request;
use App\Http\Requests\PatientRequest;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function __construct(){

        $this->middleware('admin');
                
    }

    public function index()
    {
        //
        $details = Patient::all();

        return view('pages.patient.patient',compact('details'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
        return view('pages.patient.patientform');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(PatientRequest $request)
    {
        //
        // $request = Request::all();

        // $rules = [
        //     'plname' => 'required|alpha',
        //     'pfname' => 'required|alpha',
        //     'pmname' => 'alpha',
        //     'paddress' => 'alpha',
        //     'pbirth' => 'alpha',
        //     'pcontact' => 'alpha',
        //     'regdate' => 'alpha'
        // ];

        // $messages = [
            
        // ];

        // $validation = Validator::make($request,$rules);

        // if($validation->passes())
        // {
            $patient = new Patient;
            
            $patient->plname = $request['plname'];
            $patient->pfname = $request['pfname'];
            $patient->pmname = $request['pmname'];
            $patient->paddress = $request['paddress'];
            $patient->pbirth = $request['pbirth'];
            $patient->pcontact = $request['pcontact'];
          
            $patient->save();
            return Redirect::to('pis/patient');
        // }
        // else{
        //     return Redirect::back()->withInput();
        // }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {   
        $records = Record::select('*')->where('patient_id','=',$id)->get();
        $patient = Patient::findOrFail($id);
        return view('pages.patient.patientdetails',compact('patient','records'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    public function record($id,$record)
    {
        $patient = Patient::findOrFail($id);
        //$patient->getRecord($record);        
        $record = $patient->getRecord($record);
        // $bed = $record->bed()->getBed();
        // $doctor = $record->doctor()->fullName();
        //dd($doctor,$bed);
        

        return view('pages.Record.show',compact('record','patient'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
