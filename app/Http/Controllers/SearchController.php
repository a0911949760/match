<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('search.search');
    }
    public function search(Request $request)
    {
        if ($request->ajax())
        {
            $output="";
            $gender="";
            $license="";
            $users=DB::table('users')->where('name','LIKE','%'.$request->search.'%')
                                     ->orWhere('speciality','LIKE','%'.$request->search.'%')->get();
            if ($users)
            {
            foreach ($users as $key => $user){
                if ($user->gender=="1"){
                    $gender="男";
                }else{
                    $gender="女";
                }
                if ($user->license=="1"){
                    $license="有";
                }else{
                    $license="無";
                }
                $output.='<tr>'.
                         '<td>'.$user->id.'</td>'.
                         '<td>'.$user->name.'</td>'.
                         '<td>'.$gender.'</td>'.
                         '<td>'.$user->phone.'</td>'.
                         '<td>'.$user->email.'</td>'.
                         '<td>'.$user->address1.'</td>'.
                         '<td>'.$user->address2.'</td>'.
                         '<td>'.$user->address3.'</td>'.
                         '<td>'.$license.'</td>'.
                         '<td>'.$user->speciality.'</td>'.
                         '<td>'.$user->experience.'</td>'.
                         '<td>'.$user->selfintroduction.'</td>'.
                         '</tr>';
            }
                return Response($output);
            }
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
}
