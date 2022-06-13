<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class AdminPanelController extends Controller
{
    public function index(){
        return view('admin.index');
    }

    public function settings(){

        $data = Setting::first();
        if($data==null){
            $data=new Setting();
            $data->title='project title';
            $data->save();
            $data = Setting::first();
        }

        return view('admin.settings',[
            'data'=>$data
        ]);
    }

    public function settings_edit (){
        $data = Setting::first();
        return view('admin.settings-edit',[
            'data'=>$data
        ]);

    }

   public function settings_update(Request $request, Setting $Setting){
        $data = Setting::first();

        
        $data->title = $request->title;  

        $data->keywords = $request->keywords;

        $data->description = $request->description;
        
        $data->company = $request->company;
        $data->address = $request->address;
        $data->phone = $request->phone;
        $data->fax = $request->fax;
        $data->email = $request->email;
        $data->smtpserver = $request->smtpserver;
        $data->smtpemail = $request->smtpemail;
        $data->smtppassword = $request->smtppassword;
        $data->smtpport = $request->smtpport;
        $data->facebook = $request->facebook;
        $data->instagram = $request->instagram;
        $data->twitter = $request->twitter;
        $data->aboutus = $request->aboutus;
        $data->contact = $request->contact;
        $data->references = $request->references;
        $data->status = $request->status;
        $data->save();
        
       return redirect(route('admin.settings'));
    }

   

}
