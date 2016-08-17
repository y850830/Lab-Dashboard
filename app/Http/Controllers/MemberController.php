<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Input;

use Illuminate\Support\Facades\Redirect; 

use App\Http\Requests;

use App\Models\member;

use App\Models\log;

class MemberController extends Controller
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

        if($ldata[0]['logstatus'] == 1){
            $post = member::all();
            return view('layout.member',['post' => $post,'status' => $status]);
        }
        else{
            return Redirect::route('/');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $input = Input::get();
        $Nuser = member::create(array('name' => $input['Nname'],'cellphone' => $input['Ncellphone'],'ID' => $input['NID']));
        return Redirect::route('member');
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {   

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $input = Input::get();
        $id = $input['ID'];
        $up = member::where('ID', '=', $id)->update(array('name' => $input['name'],'cellphone' => $input['cellphone'],'ID' => $input['ID']));
        return Redirect::route('member');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delData = member::where('ID', '=', $id)->delete();
        return Redirect::route('member');
    }
}
