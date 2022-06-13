<?php

namespace App\Http\Controllers;

use App\Models\Randevu;
use App\Models\Setting;
use App\Models\Treatment;
use App\Models\Comment;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $sliderdata=Treatment::limit(4)->get();
        
       return view('home.index',[
        'sliderdata'=>$sliderdata,
        
       ]);
    }

  

    public function services(){
        return view('home.servivePage');
    }

    public function about(){
        return view('home.about');
    }

    public function contact(){
        $data = Setting::first()->contact;
        return view('home.contact',[
            'data'=>$data
        ]);
    }

    public function references(){

        $data = Setting::first()->references;
        return view('home.references',[
            'data'=>$data
        ]);
    }



    public function treatments(){
        $treatmentlist=Treatment::limit(8)->get();

        return view('home.treatments',[
            'treatmentlist'=>$treatmentlist,
        ]);
    }

    public function treatmentDetail(treatment $treatment , $id){
        $commentdata=Comment::all();
        $treatmentsdetail=Treatment::find($id);

        return view('home.treatmentsDetail',[
            'treatmentsdetail'=>$treatmentsdetail,
            'commentdata'=>$commentdata
        ]);


    }

    public function randevu(){
        $randevulist=Randevu::where('status', 1)->get();

        return view('home.randevu',[
            'randevulist'=>$randevulist,
        ]);
    }

    public function randevu_form(randevu $randevu , $id){
        $data = randevu::find($id);

        return view('home.randevu-form',[
            'data'=>$data,
        ]);
    }

    public function randevu_accept(Request $request,randevu $randevu , $id){
        $data = randevu::find($id);

        $data->status = 2;
        $data->save();
        return redirect()->back();
        


    }

  
   
}
