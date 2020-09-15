<?php

namespace App\Http\Controllers;

use App\Models\SysAttendance;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SysAttendanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $ip = \Request::ip();
        // $ip = '180.244.232.198';
        $getLocation = \Location::get($ip);

        if($request->lat == "" || $request->long == ""){
            
            if($getLocation == false){
                $position = "Unknown!";
                $lat = "Unknown!";
                $long = "Unknown!";
            }else{
                $position = $getLocation->cityName." - ".$getLocation->countryName;
                $lat = $getLocation->latitude;
                $long = $getLocation->longitude;
            }

        }else{
            $position = "Unknown";
            $lat = $request->lat;
            $long = $request->long;
        }

        $data = [
            'user_id'               => Auth::user()->id,
            'check_in'              => NOW(),
            'location'              => $position,
            'ip_address'            => $ip,
            'latitude'              => $lat,
            'longitude'             => $long,
            'notes'                 => $request->notes,
            'created_by'            => Auth::user()->id,
            'updated_by'            => Auth::user()->id
        ];
        
        $model = SysAttendance::create($data);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SysAttendance  $sysAttendance
     * @return \Illuminate\Http\Response
     */
    public function show(SysAttendance $sysAttendance)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SysAttendance  $sysAttendance
     * @return \Illuminate\Http\Response
     */
    public function edit(SysAttendance $sysAttendance)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SysAttendance  $sysAttendance
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SysAttendance $sysAttendance)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SysAttendance  $sysAttendance
     * @return \Illuminate\Http\Response
     */
    public function destroy(SysAttendance $sysAttendance)
    {
        //
    }
}
