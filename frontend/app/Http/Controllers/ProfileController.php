<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\SysUserModel;
use App\Models\SysParents;
use DB;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $model = DB::table('users as a')
                ->join('sys_class as b', 'b.id', '=', 'a.class_id')
                ->select('a.*', 'b.class')
                ->where('a.is_deleted', 0)
                ->where('a.id', Auth::user()->id)
                ->first();


        $parents = DB::table('sys_parents as a')
                ->where('a.user_id', Auth::user()->id)
                ->get();

        return view('profile.index',compact('model','parents'));
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
        $id = Auth::user()->id;
        $model = SysUserModel::findOrFail($id);

        $this->validate($request, [
            'email'             => 'required|string|unique:users,email,'.$id.',id',
            'phone_number'      => 'nullable|string|unique:users,phone_number,'.$id.',id',
            'ktp_number'        => 'unique:sys_parents,ktp_number,'.$id.',user_id',
            'kk_number'         => 'unique:sys_parents,kk_number,'.$id.',user_id',
        ]);

        if ($request->photo != "") {
            $data = [
                'name' => $request->name,
                'birth_place' => $request->birth_place,
                'birth_date' => $request->birth_date,
                'gender' => $request->gender,
                'religion' => $request->religion,
                'address' => $request->address,
                'email' => $request->email,
                'phone_number' => $request->phone_number,
                'photo' => $request->photo,
                'updated_by' => $id,
            ];
            # code...
        }else{
            $data = [
                'name' => $request->name,
                'birth_place' => $request->birth_place,
                'birth_date' => $request->birth_date,
                'gender' => $request->gender,
                'religion' => $request->religion,
                'address' => $request->address,
                'email' => $request->email,
                'phone_number' => $request->phone_number,
                'updated_by' => $id,
            ];
        }

     
            

            $dataParent = [
                'user_id'           => $id,
                'name'              => $request->parent_name,
                'relationship'      => $request->parent_relationship,
                'address'           => $request->parent_address,
                'phone_number'      => $request->parent_phone_number,
                'occupation'        => $request->parent_occupation,
                'ktp_number'        => $request->ktp_number,
                // 'ktp_file'          => $ktp_file,
                'kk_number'         => $request->kk_number,
                // 'kk_file'           => $kk_file,
                'updated_at'        => date(now()),
            ];

            $model->update($data);

            $parentModel = DB::table('sys_parents as a')
                        ->where('a.user_id', $id)
                        ->update($dataParent);

            if($parentModel){

                if($request->ktp_file != ""){
                    $updateKTP = DB::table('sys_parents as a')
                        ->where('a.user_id', $id)
                        ->update(['ktp_file' => $request->ktp_file]);
                }

                if($request->kk_file != ""){
                    $updateKK = DB::table('sys_parents as a')
                        ->where('a.user_id', $id)
                        ->update(['kk_file' => $request->kk_file]);
                }
            }
        

        return response()->json(['message' => "Sukses"]);


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

    /* =========================================
        KK UPLOAD
    ========================================= */
    public function kkUpload(Request $request)
    {
        $file = $request->img;
        $filename = "img_".date('Ymd_His')."_".$file->getClientOriginalName();
        $move_path = 'images/kk/';

        $file->move($move_path,$filename);
        return $move_path.$filename;
    }

    public function showKK(Request $request)
    {
        $result = DB::table('sys_parents as a')
                    ->where('a.user_id', $request->id)
                    ->get();

        $imgs = [];
        if($result != null){
            foreach ($result as $key) {
                $img['nama'] = substr($key->kk_file, 25);
                $img['size'] = filesize(public_path() ."/". $key->kk_file);
                $img['url'] = $key->kk_file;
                $imgs[] = $img;
            }
        }

        return response()->json(['imgs' => $imgs]);
    }

    /* =========================================
        KTP UPLOAD
    ========================================= */
    public function ktpUpload(Request $request)
    {
        $file = $request->img;
        $filename = "img_".date('Ymd_His')."_".$file->getClientOriginalName();
        $move_path = 'images/ktp/';

        $file->move($move_path,$filename);
        return $move_path.$filename;
    }

    public function showKTP(Request $request)
    {
        $result = DB::table('sys_parents as a')
                    ->where('a.user_id', $request->id)
                    ->get();

        $imgs = [];
        if($result != null){
            foreach ($result as $key) {
                $img['nama'] = substr($key->ktp_file, 25);
                $img['size'] = filesize(public_path() ."/". $key->ktp_file);
                $img['url'] = $key->ktp_file;
                $imgs[] = $img;
            }
        }

        return response()->json(['imgs' => $imgs]);
    }

    /* =========================================
        PHOTO UPLOAD
    ========================================= */
    public function imageUpload(Request $request)
    {
        $file = $request->img;
        $filename = "img_".date('Ymd_His')."_".$file->getClientOriginalName();
        $move_path = 'images/photo/';

        $file->move($move_path,$filename);
        return $move_path.$filename;
    }

    public function showImage(Request $request)
    {
        $result = DB::table('users as a')
                    ->where('a.id', $request->id)
                    ->get();

        $imgs = [];
        if($result != null){
            foreach ($result as $key) {
                $img['nama'] = substr($key->photo, 25);
                $img['size'] = filesize(public_path() ."/". $key->photo);
                $img['url'] = $key->photo;
                $imgs[] = $img;
            }
        }


        return response()->json(['imgs' => $imgs]);
    }

    /* =========================================
        Change Password
    ========================================= */
    public function checkPassword(Request $request)
    {
        $model = DB::table('users as a')
                ->where('a.id', Auth::user()->id)
                ->where('a.password', Hash::make($request->Cpassword))
                ->count();

        if(Hash::check($request->Cpassword, Auth::user()->password)){
            return response()->json(['message' => "success"]);
        }else{
            return response()->json(['message' => "error"]);
        }

    }
    public function changePassword()
    {
        return view('profile.change_password');        
    }

    public function actionPassword(Request $request)
    {
        
        $data = [
            'password' => Hash::make($request->Npassword)
        ];

        $model = SysUserModel::findOrFail(Auth::user()->id);

        if($model->update($data)){
            return response()->json(['message' => "success"]);
        }else{
            return response()->json(['message' => "error"]);
        }
        
    }
}
