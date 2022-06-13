<?php

namespace App\Http\Controllers\AdminPanel;

use App\Models\treatment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;

class adminTreatmentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(){

        $data = treatment::all();
        return view('admin.treatment.index' , [
            'data'=>$data
        ]);
    }
   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.treatment.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new treatment();

        $data->title = $request->title; 

        $data->keywords = $request->keywords;

        $data->description = $request->description;

        


        if($request->file('image')){
            $data->image=$request->file('image')->store('images');
        }
        $data->categoryid = 0;//$request->categoryid;

        $data->detail = $request->detail;

        $data->price = $request->price;

        $data->userid = 0;//$request->userid;

        $data->status = $request->status;
        $data->save();
        
       return redirect(route('admin.treatment.index'));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\treatment  $treatment
     * @return \Illuminate\Http\Response
     */
    public function show(treatment $treatment , $id)
    {
        $data = treatment::find($id);
        return view('admin.treatment.show' , [
            'data'=>$data
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\treatment  $treatment
     * @return \Illuminate\Http\Response
     */
    public function edit(treatment $treatment , $id)
    {
        $data = treatment::find($id);
        return view('admin.treatment.edit' , [
            'data'=>$data
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\treatment  $treatment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, treatment $treatment, Category $Category, $id  )
    {
        $data = treatment::find($id);

        $data->title = $request->title; 

        $data->keywords = $request->keywords;

        $data->description = $request->description;

        


        if($request->file('image')){
            $data->image=$request->file('image')->store('images');
        }
        $data->categoryid = $id;

        $data->detail = $request->detail;

        $data->price = $request->price;

        $data->userid = 0;//$request->userid;

        $data->status = $request->status;

       
        $data->save();
        
       return redirect('admin/treatment');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\treatment  $treatment
     * @return \Illuminate\Http\Response
     */
    public function destroy(treatment $treatment, $id)
    {
        $data = treatment::find($id);
        $data->delete();
        return redirect('admin/treatment');
    }
}
