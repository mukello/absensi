<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $api_url = 'http://10.54.18.212:7070/getdata/Ookla_Percentile_Kabupaten_monthly/202008/artemis/Pati2019';

        // // Read JSON file
        // $json_data = file_get_contents($api_url);

        
        // // Decode JSON data into PHP array

        // // All user data exists in 'data' object
        // dd($json_data->yearmonth);

        // // Cut long data into small & select only first 10 records

        // // Print data if need to debug
        // //print_r($user_data);

        // // Traverse array and display user data
        // foreach ($json_data as $user) {
        //     echo "name: ".$user[0];
        //     echo "<br /> <br />";
        // }

        // dd(date('d.m.Y',strtotime("-1 days")));

        // $ip_address = \Request::ip();
        // set routine to add Walkthrough

        return view('index.index');
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
}
