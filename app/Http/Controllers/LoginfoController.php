<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Redirect;

use Illuminate\Support\Facades\Input; 

use App\Http\Requests;

use App\Models\loginfo;

use App\Models\log;

class LoginfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $i=0;
        $status = log::all();
        $ldata = null;
        foreach ($status as $key => $data) {
            $ldata[$i] = $data;
            $i++;
        }
        if($ldata[0]['logstatus'] == 0){
            return view('layout.wellcom');
        }
        else{
            return Redirect::route('forum');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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

    public function login(){
        $input = Input::get();
        $email = $input['email'];
        $password = $input['password'];
        if($email == '40343236@gmail.com' && $password == 'v32165490'){
            $loginfo = loginfo::create(array('account'=>$input['email'],'IP'=>'127.0.0.1'));
            $status = log::where('email', '=', '40343236@gmail.com')->update(array('logstatus' => 1));
            return Redirect::route('forum');
        }
        else
        {
            return Redirect::route('/');
        }
    }

    public function loginfo(){

        $i=0;
        $status = log::all();
        $ldata = null;
        foreach ($status as $key => $data) {
            $ldata[$i] = $data;
            $i++;
        }
               
        if($ldata[0]['logstatus'] == 1){
            $loginfo = loginfo::all();
            return view('layout.loginfo',['loginfo' => $loginfo]);
        }
        else{
            return Redirect::route('/');
        }       
    }

    public function logout(){
        $status = log::where('email', '=', '40343236@gmail.com')->update(array('logstatus' => 0));
        return Redirect::route('/');
    }
}
