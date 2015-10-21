<?php

namespace App\Http\Controllers;

use Redirect;
use Request;
use App\Admin;


use App\Http\Requests;
use App\Http\Requests\AdminRequest;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */

    public function __construct(){

        $this->middleware('admin');
                
    }

    public function home()
    {
        //
        return view('pages.admin');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(AdminRequest $request)
    {
        //
      
        if (Admin::find($request['adminid'])) {
            return Redirect::back()->withInput();
        }
        else{
            $admin = new Admin;
            $admin->adminid = $request['adminid'];
            $admin->adminlname = $request['adminlname'];
            $admin->adminfname = $request['adminfname'];
            $admin->adminmname = $request['adminmname'];
            $admin->adminemail = $request['adminemail'];
            $admin->adminpass = $request['adminpass'];
            $admin->adminaddress = $request['adminaddress'];
            $admin->admingender = $request['admingender'];
            $admin->adminnumber = $request['adminnumber'];
            

            $admin->save();
            
        }
        return Redirect::to('pis/patient');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
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
