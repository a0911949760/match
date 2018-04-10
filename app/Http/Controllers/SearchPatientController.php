<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class SearchPatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('search.searchpatient');
    }
    public function searchpatient(Request $request)
    {
        if ($request->ajax())
        {
            $output="";
            $userscares=DB::table('userscares')->where('name','LIKE','%'.$request->searchpatient.'%')
                                     ->orWhere('speciality','LIKE','%'.$request->searchpatient.'%')->get();
            if ($userscares)
            {
            foreach ($userscares as $key => $userscare){                
                $output.='<tr>'.
                         '<td>'.$userscare->id.'</td>'.
                         '<td>'.$userscare->name.'</td>'.
                         '<td>'.$userscare->city.'</td>'.
                         '<td>'.$userscare->region.'</td>'.
                         '<td>'.$userscare->zipcode.'</td>'.
                         '<td>'.$userscare->birthday.'</td>'.
                         '<td>'.$userscare->phone.'</td>'.
                         '<td>'.$userscare->speciality.'</td>'.
                         '<td>'.$userscare->email.'</td>'.
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
