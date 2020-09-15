<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Utility;
use DB;

use App\Models\SysAttendance;


class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $uti = new Utility();
        $sayTo = $uti->getUser(Auth::user()->id);
        $date = date('Y-m-d', strtotime(date(now())));

        $model = DB::table('users as a')
                ->where('a.is_deleted', 0)
                ->where('a.id', Auth::user()->id)
                ->first();

        $check_attand = DB::table('sys_attendances as a')
                        ->where('a.check_in', 'like', '%' .$date. '%')
                        ->where('a.user_id', Auth::user()->id)
                        ->get();


        $news = DB::table('sys_news as a')
                ->orderBy('a.id', 'desc')
                ->skip(0)
                ->take(3)
                ->get();        
                        
        return view('home.index', compact('sayTo','model','check_attand','news'));
        // return view('base.main');
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
