<?php

namespace App\Http\Controllers;

use App\Models\Treatment;
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

    public function treatments(){
        $treatmentlist=Treatment::limit(8)->get();

        return view('home.treatments',[
            'treatmentlist'=>$treatmentlist,
        ]);
    }

    public function treatmentDetail(treatment $treatment , $id){
        $treatmentsdetail=Treatment::find($id);

        return view('home.treatmentsDetail',[
            'treatmentsdetail'=>$treatmentsdetail,
        ]);


    }
}
