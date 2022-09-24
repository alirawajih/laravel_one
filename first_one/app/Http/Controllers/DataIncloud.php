<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataIncloud extends Controller
{
private static function getdata(){
    return[
        ['id'=>1,'name'=>'Dr. Bob Brown','title'=>'GENERAL DENTIST','sub'=>'Glavi amet ritnisl libero molestie ante ut fringilla purus eros quis glavrid from dolor amet iquam lorem bibendum','imges'=>'1.jpg'],
        ['id'=>2,'name'=>'Dr. Mary Smith ','title'=>'GENERAL DENTIST','sub'=>'Glavi amet ritnisl libero molestie ante ut fringilla purus eros quis glavrid from dolor amet iquam lorem bibendum','imges'=>'2.jpg'],
        ['id'=>3,'name'=>'Dr. Nick Dark','title'=>'ORTHODONTIST','sub'=>'Glavi amet ritnisl libero molestie ante ut fringilla purus eros quis glavrid from dolor amet iquam lorem bibendum','imges'=>'1.jpg'],
        ['id'=>4,'name'=>'Dr. May Dowson','title'=>'ENDODONTIST','sub'=>'Glavi amet ritnisl libero molestie ante ut fringilla purus eros quis glavrid from dolor amet iquam lorem bibendum','imges'=>'2.jpg'],
        ['id'=>5,'name'=>'Dr. Betty Nilson','title'=>'PEDIATRIC DENTIST','sub'=>'Glavi amet ritnisl libero molestie ante ut fringilla purus eros quis glavrid from dolor amet iquam lorem bibendum','imges'=>'1.jpg'],

    ];
}
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('new/index',[
            'data'=> self::getdata()
        ]);
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
       $SingelShow =self::getdata();
       $DataSingel = array_search($id,array_column($SingelShow,'id'));
       if($DataSingel === false){
        abort(404);
       }
return view('new/show',[
    'dataOne'=>$SingelShow[$DataSingel]
]);
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
