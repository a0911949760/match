<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\userscare;
use \Input as Input;

class CareController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //dd('index');
        $articles = userscare::latest()->paginate(5);
        return view('care.index',compact('articles'))
            ->with('i', (request()->input('page', 1) - 1) * 5);       
        
        }   

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('care.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $u = userscare::create($request->all());
             
        $path = $request->file->store('public');  
        $u->file=substr($path, strpos($path, '/')+1);
        $u->save();

        return redirect()->route('care.index');  
        
        // if ($request->hasFile('image')) {
        //     $image = $request->file('image');
        //     $name = str_slug($request->title).'.'.$image->getClientOriginalExtension();
        //     $destinationPath = public_path('/uploads/articles');
        //     $imagePath = $destinationPath. "/".  $name;
        //     $image->move($destinationPath, $name);
        //     $article->image = $name;
        //   }
    }

    //if($request->hasFile('profile_picture'));


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
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
        userscare::find($id)->delete();
        return redirect()->route('care.index');
    }

    public function upload(){
        
        if(Input::hasFile('file')){
        
         echo 'Uploaded';
         $file = Input::file('file');
         $file->move('uploads', $file->getClientOriginalName());
         echo '';
        }
    }
}
