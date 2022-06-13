<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use App\Models\Randevu;
use App\Models\Treatment;
use Illuminate\Http\Request;

class RandevuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {    $data = Randevu::all();
        $data1 = Randevu::where('status', 2)->get();
        $data2 = Randevu::where('status', 3)->get();
       // dd($data1);
        return view('admin.randevu.index' , [
            'data'=>$data,
            'data1'=>$data1,
            'data2'=>$data2



        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.randevu.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new randevu();
        $data->user_id =0; //$request->user_id;

        $data->treatmentid = 0;//$request->treatmentid;
        $data->date = $request->date;
        $data->time = $request->time;
        $data->dentist_id = 0;//$request->dentist_id;
        $data->ip = $request->ip;
        $data->note = $request->note;
        $data->status = $request->status;
        $data->save();

        return redirect(route('admin.randevu.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Randevu  $randevu
     * @return \Illuminate\Http\Response
     */
    public function show(Randevu $randevu, $id)
    {
        $data = Randevu::find($id);
        return view('admin.randevu.show' , [
            'data'=>$data
        ]);
    }
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Randevu  $randevu
     * @return \Illuminate\Http\Response
     */
    public function edit(Randevu $randevu, $id)
    {
        $data = Randevu::find($id);
        return view('admin.randevu.edit' , [
            'data'=>$data
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Randevu  $randevu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Randevu $randevu, $id)
    {
        $data = Randevu::find($id);

        $data->user_id =0; //$request->user_id;

        $data->treatmentid = 0;// Treatment::find($id);
        $data->date = $request->date;
        $data->time = $request->time;
        $data->dentist_id = 0;//$request->dentist_id;
        $data->ip = $request->ip;
        $data->note = $request->note;
        $data->status = $request->status;
        $data->save();

        return redirect(route('admin.randevu.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Randevu  $randevu
     * @return \Illuminate\Http\Response
     */
    public function destroy(Randevu $randevu, $id)
    {
        $data = Randevu::find($id);
        $data->delete();
        return redirect('admin/randevu');
    }
}
