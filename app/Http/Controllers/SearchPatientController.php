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
            $image_path="http://127.0.0.1/GitHub/match/public/storage/";
            $userscares=DB::table('userscares')->where('name','LIKE','%'.$request->searchpatient.'%')
                                               ->orWhere('gender','LIKE','%'.$request->searchpatient.'%')
                                               ->orWhere('city','LIKE','%'.$request->searchpatient.'%')
                                               ->orWhere('region','LIKE','%'.$request->searchpatient.'%')
                                               ->orWhere('行動不便','LIKE','%'.$request->searchpatient.'%')
                                               ->orWhere('中風','LIKE','%'.$request->searchpatient.'%')
                                               ->orWhere('植物人','LIKE','%'.$request->searchpatient.'%')
                                               ->orWhere('失智','LIKE','%'.$request->searchpatient.'%')
                                               ->orWhere('自閉症','LIKE','%'.$request->searchpatient.'%')
                                               ->orWhere('智能障礙','LIKE','%'.$request->searchpatient.'%')
                                               ->orWhere('精神病','LIKE','%'.$request->searchpatient.'%')->get();
            if ($userscares)
            {
            foreach ($userscares as $key => $userscare){
                if ($userscare->行動不便=="行動不便")  {$行動不便="O";}   else{$行動不便="";}
                if ($userscare->中風=="中風")    {$中風="O";}    else{$中風="";}
                if ($userscare->植物人=="植物人")  {$植物人="O";}   else{$植物人="";}
                if ($userscare->失智=="失智")    {$失智="O";}     else{$失智="";}
                if ($userscare->自閉症=="自閉症")  {$自閉症="O";}   else{$自閉症="";}
                if ($userscare->智能障礙=="智能障礙"){$智能障礙="O";} else{$智能障礙="";}
                if ($userscare->精神病=="精神病")  {$精神病="O";}   else{$精神病="";}
                $output.='<tr>'.
                         '<td>'.$userscare->id.'</td>'.
                         '<td>'.$userscare->name.'</td>'.
                         '<td><img src='.$image_path.$userscare->file.' height=100 width=100></td>'.
                         '<td>'.$userscare->gender.'</td>'.
                         '<td>'.$userscare->birthday.'</td>'.
                         '<td>'.$userscare->phone.'</td>'.
                         '<td>'.$userscare->city.'</td>'.
                         '<td>'.$userscare->region.'</td>'.
                         '<td>'.$行動不便.'</td>'.
                         '<td>'.$中風.'</td>'.
                         '<td>'.$植物人.'</td>'.
                         '<td>'.$失智.'</td>'.
                         '<td>'.$自閉症.'</td>'.
                         '<td>'.$智能障礙.'</td>'.
                         '<td>'.$精神病.'</td>'.
                         '<td>'.$userscare->experience.'</td>'.
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
