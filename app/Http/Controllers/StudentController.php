<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PgModel;
use App\Models\UgModel;
use DB;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/student/studentdashboard');
    }

    public function showadmissionform()
    {
        return view('/student/mcaadmission');
    }


    public function showcourse()
    {
        return view('/student/course');
    }

    public function cpassword()
    {
        return view('/student/changepassword');
    }

    public function storepassword()
    {
        return view('/student/studentdashboard');
    }

    public function showinstruct()
    {
        return view('/student/instructions');
    }

    public function storemca(Request $request)
    {

        $pgmodel=new PgModel();

        $pgmodel->fname=$request->input('fname');
        $pgmodel->lname=$request->input('lname');
        $pgmodel->fathername=$request->input('fathername');
        $pgmodel->mothername=$request->input('mothername');
        $pgmodel->gender=$request->input('gender');
        $pgmodel->dob=$request->input('dob');
        $pgmodel->hname=$request->input('hname');
        $pgmodel->street=$request->input('street');
        $pgmodel->district=$request->input('district');
        $pgmodel->state=$request->input('state');
        $pgmodel->mobileno=$request->input('mobileno');
        $pgmodel->email=$request->input('email');
        $pgmodel->sslcboard=$request->input('sslcboard');
        $pgmodel->sslcmarks=$request->input('sslcmarks');
        $pgmodel->sslcyear=$request->input('sslcyear');
        $pgmodel->hsboard=$request->input('hsboard');
        $pgmodel->hsmarks=$request->input('hsmarks');
        $pgmodel->hsyear=$request->input('hsyear');
        $pgmodel->ugboard=$request->input('ugboard');
        $pgmodel->ugmarks=$request->input('ugmarks');
        $pgmodel->ugyear=$request->input('ugyear');
        $pgmodel->course='MCA';
        $pgmodel->status='Submitted';
        $pgmodel->paystatus='notdone';

        if($request->hasfile('photo')){
            $file=$request->file('photo');
            $extension=$file->getClientOriginalExtension();
            $filename=time() . '.' . $extension;
            $file->move('uploads/photos/', $filename);
            $pgmodel->photo=$filename;
 
         } else{
             return $request;
             $pgmodel->photo='';
         }

         if($request->hasfile('sslc')){
            $file=$request->file('sslc');
            $extension=$file->getClientOriginalExtension();
            $filename=time() . '.' . $extension;
            $file->move('uploads/sslc/', $filename);
            $pgmodel->sslc=$filename;
 
         } else{
             return $request;
             $pgmodel->sslc='';
         }

         if($request->hasfile('hs')){
            $file=$request->file('hs');
            $extension=$file->getClientOriginalExtension();
            $filename=time() . '.' . $extension;
            $file->move('uploads/hs/', $filename);
            $pgmodel->hs=$filename;
 
         } else{
             return $request;
             $pgmodel->hs='';
         }

         if($request->hasfile('ug')){
            $file=$request->file('ug');
            $extension=$file->getClientOriginalExtension();
            $filename=time() . '.' . $extension;
            $file->move('uploads/ug/', $filename);
            $pgmodel->ug=$filename;
 
         } else{
             return $request;
             $pgmodel->ug='';
         }

         $pgmodel->save();

         return view('student.payment');

    }

    public function showadmissionformmsw()
    {
        return view('/student/mswadmission');
    }

    public function storemsw(Request $request)
    {

        $pgmodel=new PgModel();

        $pgmodel->fname=$request->input('fname');
        $pgmodel->lname=$request->input('lname');
        $pgmodel->fathername=$request->input('fathername');
        $pgmodel->mothername=$request->input('mothername');
        $pgmodel->gender=$request->input('gender');
        $pgmodel->dob=$request->input('dob');
        $pgmodel->hname=$request->input('hname');
        $pgmodel->street=$request->input('street');
        $pgmodel->district=$request->input('district');
        $pgmodel->state=$request->input('state');
        $pgmodel->mobileno=$request->input('mobileno');
        $pgmodel->email=$request->input('email');
        $pgmodel->sslcboard=$request->input('sslcboard');
        $pgmodel->sslcmarks=$request->input('sslcmarks');
        $pgmodel->sslcyear=$request->input('sslcyear');
        $pgmodel->hsboard=$request->input('hsboard');
        $pgmodel->hsmarks=$request->input('hsmarks');
        $pgmodel->hsyear=$request->input('hsyear');
        $pgmodel->ugboard=$request->input('ugboard');
        $pgmodel->ugmarks=$request->input('ugmarks');
        $pgmodel->ugyear=$request->input('ugyear');
        $pgmodel->course='MSW';
        $pgmodel->status='Submitted';
        $pgmodel->paystatus='notdone';

        if($request->hasfile('photo')){
            $file=$request->file('photo');
            $extension=$file->getClientOriginalExtension();
            $filename=time() . '.' . $extension;
            $file->move('uploads/photos/', $filename);
            $pgmodel->photo=$filename;
 
         } else{
             return $request;
             $pgmodel->photo='';
         }

         if($request->hasfile('sslc')){
            $file=$request->file('sslc');
            $extension=$file->getClientOriginalExtension();
            $filename=time() . '.' . $extension;
            $file->move('uploads/sslc/', $filename);
            $pgmodel->sslc=$filename;
 
         } else{
             return $request;
             $pgmodel->sslc='';
         }

         if($request->hasfile('hs')){
            $file=$request->file('hs');
            $extension=$file->getClientOriginalExtension();
            $filename=time() . '.' . $extension;
            $file->move('uploads/hs/', $filename);
            $pgmodel->hs=$filename;
 
         } else{
             return $request;
             $pgmodel->hs='';
         }

         if($request->hasfile('ug')){
            $file=$request->file('ug');
            $extension=$file->getClientOriginalExtension();
            $filename=time() . '.' . $extension;
            $file->move('uploads/ug/', $filename);
            $pgmodel->ug=$filename;
 
         } else{
             return $request;
             $pgmodel->ug='';
         }

         $pgmodel->save();
         return view('student.payment');

    }

    public function showadmissionformmba()
    {
        return view('/student/mbaadmission');
    }

    public function storemba(Request $request)
    {

        $pgmodel=new PgModel();

        $pgmodel->fname=$request->input('fname');
        $pgmodel->lname=$request->input('lname');
        $pgmodel->fathername=$request->input('fathername');
        $pgmodel->mothername=$request->input('mothername');
        $pgmodel->gender=$request->input('gender');
        $pgmodel->dob=$request->input('dob');
        $pgmodel->hname=$request->input('hname');
        $pgmodel->street=$request->input('street');
        $pgmodel->district=$request->input('district');
        $pgmodel->state=$request->input('state');
        $pgmodel->mobileno=$request->input('mobileno');
        $pgmodel->email=$request->input('email');
        $pgmodel->sslcboard=$request->input('sslcboard');
        $pgmodel->sslcmarks=$request->input('sslcmarks');
        $pgmodel->sslcyear=$request->input('sslcyear');
        $pgmodel->hsboard=$request->input('hsboard');
        $pgmodel->hsmarks=$request->input('hsmarks');
        $pgmodel->hsyear=$request->input('hsyear');
        $pgmodel->ugboard=$request->input('ugboard');
        $pgmodel->ugmarks=$request->input('ugmarks');
        $pgmodel->ugyear=$request->input('ugyear');
        $pgmodel->course='MBA';
        $pgmodel->status='Submitted';
        $pgmodel->paystatus='notdone';

        if($request->hasfile('photo')){
            $file=$request->file('photo');
            $extension=$file->getClientOriginalExtension();
            $filename=time() . '.' . $extension;
            $file->move('uploads/photos/', $filename);
            $pgmodel->photo=$filename;
 
         } else{
             return $request;
             $pgmodel->photo='';
         }

         if($request->hasfile('sslc')){
            $file=$request->file('sslc');
            $extension=$file->getClientOriginalExtension();
            $filename=time() . '.' . $extension;
            $file->move('uploads/sslc/', $filename);
            $pgmodel->sslc=$filename;
 
         } else{
             return $request;
             $pgmodel->sslc='';
         }

         if($request->hasfile('hs')){
            $file=$request->file('hs');
            $extension=$file->getClientOriginalExtension();
            $filename=time() . '.' . $extension;
            $file->move('uploads/hs/', $filename);
            $pgmodel->hs=$filename;
 
         } else{
             return $request;
             $pgmodel->hs='';
         }

         if($request->hasfile('ug')){
            $file=$request->file('ug');
            $extension=$file->getClientOriginalExtension();
            $filename=time() . '.' . $extension;
            $file->move('uploads/ug/', $filename);
            $pgmodel->ug=$filename;
 
         } else{
             return $request;
             $pgmodel->ug='';
         }

         $pgmodel->save();

         return view('student.payment');

    }


    function showadmissionformbca()
    {
        return view('/student/bcaadmission');
    }

    public function storebca(Request $request)
    {

        $ugmodel=new UgModel();

        $ugmodel->fname=$request->input('fname');
        $ugmodel->lname=$request->input('lname');
        $ugmodel->fathername=$request->input('fathername');
        $ugmodel->mothername=$request->input('mothername');
        $ugmodel->gender=$request->input('gender');
        $ugmodel->dob=$request->input('dob');
        $ugmodel->hname=$request->input('hname');
        $ugmodel->street=$request->input('street');
        $ugmodel->district=$request->input('district');
        $ugmodel->state=$request->input('state');
        $ugmodel->mobileno=$request->input('mobileno');
        $ugmodel->email=$request->input('email');
        $ugmodel->sslcboard=$request->input('sslcboard');
        $ugmodel->sslcmarks=$request->input('sslcmarks');
        $ugmodel->sslcyear=$request->input('sslcyear');
        $ugmodel->hsboard=$request->input('hsboard');
        $ugmodel->hsmarks=$request->input('hsmarks');
        $ugmodel->hsyear=$request->input('hsyear');
        $ugmodel->course='BCA';
        $ugmodel->status='Submitted';
        $ugmodel->paystatus='notdone';

        if($request->hasfile('photo')){
            $file=$request->file('photo');
            $extension=$file->getClientOriginalExtension();
            $filename=time() . '.' . $extension;
            $file->move('uploads/photos/', $filename);
            $ugmodel->photo=$filename;
 
         } else{
             return $request;
             $ugmodel->photo='';
         }

         if($request->hasfile('sslc')){
            $file=$request->file('sslc');
            $extension=$file->getClientOriginalExtension();
            $filename=time() . '.' . $extension;
            $file->move('uploads/sslc/', $filename);
            $ugmodel->sslc=$filename;
 
         } else{
             return $request;
             $ugmodel->sslc='';
         }

         if($request->hasfile('hs')){
            $file=$request->file('hs');
            $extension=$file->getClientOriginalExtension();
            $filename=time() . '.' . $extension;
            $file->move('uploads/hs/', $filename);
            $ugmodel->hs=$filename;
 
         } else{
             return $request;
             $ugmodel->hs='';
         }


         $ugmodel->save();

         return view('student.ugpayment');

    }

    function showadmissionformbba()
    {
        return view('/student/bbaadmission');
    }

    public function storebba(Request $request)
    {

        $ugmodel=new UgModel();

        $ugmodel->fname=$request->input('fname');
        $ugmodel->lname=$request->input('lname');
        $ugmodel->fathername=$request->input('fathername');
        $ugmodel->mothername=$request->input('mothername');
        $ugmodel->gender=$request->input('gender');
        $ugmodel->dob=$request->input('dob');
        $ugmodel->hname=$request->input('hname');
        $ugmodel->street=$request->input('street');
        $ugmodel->district=$request->input('district');
        $ugmodel->state=$request->input('state');
        $ugmodel->mobileno=$request->input('mobileno');
        $ugmodel->email=$request->input('email');
        $ugmodel->sslcboard=$request->input('sslcboard');
        $ugmodel->sslcmarks=$request->input('sslcmarks');
        $ugmodel->sslcyear=$request->input('sslcyear');
        $ugmodel->hsboard=$request->input('hsboard');
        $ugmodel->hsmarks=$request->input('hsmarks');
        $ugmodel->hsyear=$request->input('hsyear');
        $ugmodel->course='BBA';
        $ugmodel->status='Submitted';
        $ugmodel->paystatus='notdone';

        if($request->hasfile('photo')){
            $file=$request->file('photo');
            $extension=$file->getClientOriginalExtension();
            $filename=time() . '.' . $extension;
            $file->move('uploads/photos/', $filename);
            $ugmodel->photo=$filename;
 
         } else{
             return $request;
             $ugmodel->photo='';
         }

         if($request->hasfile('sslc')){
            $file=$request->file('sslc');
            $extension=$file->getClientOriginalExtension();
            $filename=time() . '.' . $extension;
            $file->move('uploads/sslc/', $filename);
            $ugmodel->sslc=$filename;
 
         } else{
             return $request;
             $ugmodel->sslc='';
         }

         if($request->hasfile('hs')){
            $file=$request->file('hs');
            $extension=$file->getClientOriginalExtension();
            $filename=time() . '.' . $extension;
            $file->move('uploads/hs/', $filename);
            $ugmodel->hs=$filename;
 
         } else{
             return $request;
             $ugmodel->hs='';
         }


         $ugmodel->save();

         return view('student.ugpayment');

    }

    function showadmissionformbsw()
    {
        return view('/student/bswadmission');
    }

    public function storebsw(Request $request)
    {

        $ugmodel=new UgModel();

        $ugmodel->fname=$request->input('fname');
        $ugmodel->lname=$request->input('lname');
        $ugmodel->fathername=$request->input('fathername');
        $ugmodel->mothername=$request->input('mothername');
        $ugmodel->gender=$request->input('gender');
        $ugmodel->dob=$request->input('dob');
        $ugmodel->hname=$request->input('hname');
        $ugmodel->street=$request->input('street');
        $ugmodel->district=$request->input('district');
        $ugmodel->state=$request->input('state');
        $ugmodel->mobileno=$request->input('mobileno');
        $ugmodel->email=$request->input('email');
        $ugmodel->sslcboard=$request->input('sslcboard');
        $ugmodel->sslcmarks=$request->input('sslcmarks');
        $ugmodel->sslcyear=$request->input('sslcyear');
        $ugmodel->hsboard=$request->input('hsboard');
        $ugmodel->hsmarks=$request->input('hsmarks');
        $ugmodel->hsyear=$request->input('hsyear');
        $ugmodel->course='BSW';
        $ugmodel->status='Submitted';
        $ugmodel->paystatus='notdone';

        if($request->hasfile('photo')){
            $file=$request->file('photo');
            $extension=$file->getClientOriginalExtension();
            $filename=time() . '.' . $extension;
            $file->move('uploads/photos/', $filename);
            $ugmodel->photo=$filename;
 
         } else{
             return $request;
             $ugmodel->photo='';
         }

         if($request->hasfile('sslc')){
            $file=$request->file('sslc');
            $extension=$file->getClientOriginalExtension();
            $filename=time() . '.' . $extension;
            $file->move('uploads/sslc/', $filename);
            $ugmodel->sslc=$filename;
 
         } else{
             return $request;
             $ugmodel->sslc='';
         }

         if($request->hasfile('hs')){
            $file=$request->file('hs');
            $extension=$file->getClientOriginalExtension();
            $filename=time() . '.' . $extension;
            $file->move('uploads/hs/', $filename);
            $ugmodel->hs=$filename;
 
         } else{
             return $request;
             $ugmodel->hs='';
         }


         $ugmodel->save();

         return view('student.ugpayment');

    }

    public function showprofile()
    {
        $email=session('mailid')->email;
        
        $co=ugmodel::select('course')->where('email','like',"$email")->first();
        if($co=='')
        {
            $data=DB::select('select * from pg_models where email=?',[$email]);
            return view('/student/profile',['data'=>$data]);
        }
        else
        {
            $data=DB::select('select * from ug_models where email=?',[$email]);
            return view('/student/profile',['data'=>$data]);
        }

    }
        
        
        
    

    public function storepay()
    {
        $email=session('mailid')->email;
        
        $payup=DB::update('update pg_models set paystatus=? where email=? ',['done',$email]);

        $data = DB::select('select * from pg_models where email=?',[$email]);

        return view('/student/printprofile',['data'=>$data]);
    }

    public function storeugpay()
    {
        $email=session('mailid')->email;
        
        $payup=DB::update('update ug_models set paystatus=? where email=? ',['done',$email]);

        $data = DB::select('select * from ug_models where email=?',[$email]);

        return view('/student/printugprofile',['data'=>$data]);
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
