<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Hash;
class LearnController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['users'] = User::all();
        return view('users',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'identitycard'=>'unique:users,identitycard',
            'phone'=>'unique:users,phone',
            'email'=>'unique:users,email'
        ]);         
        $user = [
            'name' => $request->nama,
            'gender' => $request->gender,
            'identitycard' => $request->identitycard,
            'birthday'=>$request->birthday,
            'phone'=>$request->phone,
            'email' => $request->email,
            'address1'=>$request->address1,
            'address2'=>$request->address2,
            'address3'=>$request->address3,
            'license'=>$request->license,
            'speciality'=>$request->speciality,
            'experience'=>$request->experience,
            'selfintroduction'=>$request->selfintroduction,
            'password' => Hash::make($request->nama),
        ];
        $save = User::insert($user);
        if($save)
            return redirect('users');
        else
            return redirect()->back()->withInput();
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
        $data['user'] = User::find($id);
        return view('create',$data);
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
        if($request->has('password')){
            $password = $request->password;
            $user = [
                'name' => $request->nama,
                'file' => $request->file,
                'gender' => $request->gender,
                'identitycard' => $request->identitycard,
                'birthday'=>$request->birthday,
                'phone'=>$request->phone,
                'email' => $request->email,
                'address1'=>$request->address1,
                'address2'=>$request->address2,
                'address3'=>$request->address3,
                'license'=>$request->license,
                '行動不便'=>$request->行動不便,
                '中風'=>$request->中風,
                '植物人'=>$request->植物人,
                '失智'=>$request->失智,
                '自閉症'=>$request->自閉症,
                '智能障礙'=>$request->智能障礙,
                '精神病'=>$request->精神病,
                'experience'=>$request->experience,
                'selfintroduction'=>$request->selfintroduction,
                'password' => $password,
            ];
        }            
        else{
            $user = [
                'name' => $request->nama,
                'file' => $request->file,
                'gender' => $request->gender,
                'identitycard' => $request->identitycard,
                'birthday'=>$request->birthday,
                'phone'=>$request->phone,
                'email' => $request->email,
                'address1'=>$request->address1,
                'address2'=>$request->address2,
                'address3'=>$request->address3,
                'license'=>$request->license,
                '行動不便'=>$request->行動不便,
                '中風'=>$request->中風,
                '植物人'=>$request->植物人,
                '失智'=>$request->失智,
                '自閉症'=>$request->自閉症,
                '智能障礙'=>$request->智能障礙,
                '精神病'=>$request->精神病,
                'experience'=>$request->experience,
                'selfintroduction'=>$request->selfintroduction,
            ]; 
        $update = User::find($id);
        $path = $request->file->store('public');  
        $update->file=substr($path, strpos($path, '/')+1);
        $update->save();
        if($update)
            return redirect('users');
        else
            return redirect()->back()->withInput();
    }
}
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        if($user){
            $user->destroy($id);
            $msg = '資料刪除成功';
        }else{
            $msg = '資料刪除失敗';
        }
        return redirect()
            ->back()
            ->withSuccess($msg);
    }
}
