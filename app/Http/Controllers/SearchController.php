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
            $image_path="http://127.0.0.1/GitHub/match/public/storage/";
            $users=DB::table('users')->where('name','LIKE','%'.$request->search.'%')
                                     ->orWhere('gender','LIKE','%'.$request->search.'%')
                                     ->orWhere('address1','LIKE','%'.$request->search.'%')
                                     ->orWhere('address2','LIKE','%'.$request->search.'%')
                                     ->orWhere('license','LIKE','%'.$request->search.'%')
                                     ->orWhere('行動不便','LIKE','%'.$request->search.'%')
                                     ->orWhere('中風','LIKE','%'.$request->search.'%')
                                     ->orWhere('植物人','LIKE','%'.$request->search.'%')
                                     ->orWhere('失智','LIKE','%'.$request->search.'%')
                                     ->orWhere('自閉症','LIKE','%'.$request->search.'%')
                                     ->orWhere('智能障礙','LIKE','%'.$request->search.'%')
                                     ->orWhere('精神病','LIKE','%'.$request->search.'%')->get();
            if ($users)
            {
            foreach ($users as $key => $user){
                if ($user->行動不便=="行動不便")  {$行動不便="O";}   else{$行動不便="";}
                if ($user->中風=="中風")    {$中風="O";}    else{$中風="";}
                if ($user->植物人=="植物人")  {$植物人="O";}   else{$植物人="";}
                if ($user->失智=="失智")    {$失智="O";}     else{$失智="";}
                if ($user->自閉症=="自閉症")  {$自閉症="O";}   else{$自閉症="";}
                if ($user->智能障礙=="智能障礙"){$智能障礙="O";} else{$智能障礙="";}
                if ($user->精神病=="精神病")  {$精神病="O";}   else{$精神病="";}
                $output.='<tr>'.
                         '<td>'.$user->id.'</td>'.
                         '<td>'.$user->name.'</td>'.
                         '<td><img src='.$image_path.$user->file.' height=100 width=100></td>'.
                         '<td>'.$user->gender.'</td>'.
                         '<td>'.$user->phone.'</td>'.
                         '<td>'.$user->email.'</td>'.
                         '<td>'.$user->address1.'</td>'.
                         '<td>'.$user->address2.'</td>'.
                         '<td>'.$user->license.'</td>'.
                         '<td>'.$行動不便.'</td>'.
                         '<td>'.$中風.'</td>'.
                         '<td>'.$植物人.'</td>'.
                         '<td>'.$失智.'</td>'.
                         '<td>'.$自閉症.'</td>'.
                         '<td>'.$智能障礙.'</td>'.
                         '<td>'.$精神病.'</td>'.
                         '<td style="word-break: break-all">'.$user->experience.'</td>'.
                         '<td style="word-break: break-all">'.$user->selfintroduction.'</td>'.
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
