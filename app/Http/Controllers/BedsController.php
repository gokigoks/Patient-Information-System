<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\CreateBedRequest;

use App\Http\Controllers\Controller;
use App\Bed;
use App\Visit;

class BedsController extends Controller
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
        $beds = Bed::all();

        return view('pages.beds.beds',compact('beds'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $bed_type = array('public' => 'public', 'private' => 'private');
        $section = array('east wing' => 'east wing', 'west wing' => 'west wing',
         'new building' => 'new building');
        return view('pages.beds.create',compact('bed_type','section'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateBedRequest $request)
    {
        //dd($request->all());
        $bed = new Bed($request->all());
        if(!$bed->save()){
            abort(500,'error');
        }
        flash()->overlay('new Bed successfully added','alert');

        return redirect('beds');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $bed = Bed::findOrFail($id);
        $vacant = Visit::select('id')->where('bed_id','>',$id)->exists();
        if($vacant){
            $vacant = 'available';
        }
        else{
            $vacant = 'occupied';
        }
        return view('pages.beds.show',compact('bed','vacant'));
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
