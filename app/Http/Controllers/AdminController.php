<?php

namespace App\Http\Controllers;
use App\Models\Login_Table;
use App\Models\FacultyModel;
use App\Models\NotficationModel;
use App\Models\CourseModel;
use App\Models\PgModel;
use App\Models\UgModel;
use App\Models\ContactModel;
use DB;


use Illuminate\Http\Request;

class AdminController extends Controller
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
        return view('admin.admindashboard');
    }

    public function addadmin()
    {
        return view('admin.addadmin');
    }

    public function cpassword()
    {
        return view('/admin/changepassword');
    }

    public function readadmin(Request $request)
    {
        $login_table=new Login_Table;
        $login_table->sname=$request->sname;
        $login_table->email=$request->email;
        $login_table->password=$request->password;
        $login_table->usertype='admin';

        $save=$login_table->save();

        return redirect('admin/admindashboard');
    }

    public function addfac()
    {
        return view('admin.addfaculty');
    }
    public function readfac(Request $request)
    {
        $facultymodel=new FacultyModel();

        $facultymodel->facname=$request->input('facname');
        $facultymodel->designation=$request->input('designation');
        $facultymodel->qualification=$request->input('qualification');
        $facultymodel->facemail=$request->input('facemail');
        $facultymodel->department=$request->input('department');

        if($request->hasfile('facphoto')){
            $file=$request->file('facphoto');
            $extension=$file->getClientOriginalExtension();
            $filename=time() . '.' . $extension;
            $file->move('uploads/facphotos/', $filename);
            $facultymodel->facphoto=$filename;
 
         } else{
             return $request;
             $facultymodel->facphoto='';
         }

         $facultymodel->save();

         return redirect('admin/admindashboard');

    }

    public function addnot()
    {
        return view('admin.addnotification');
    }

    public function readnot(Request $request)
    {
        $notificationmodel=new NotficationModel();

        $notificationmodel->scholarship=$request->input('scholarship');
        $notificationmodel->notboard=$request->input('notboard');
        $notificationmodel->acheivements=$request->input('acheivements');
        $notificationmodel->admission=$request->input('admission');
        $notificationmodel->successstory=$request->input('successstory');
        $notificationmodel->save();

        return redirect('admin/admindashboard');
    }

    public function viewnot()
    {
        $results = DB::select('select * from notfication_models');
        return view('admin/viewnotification')->with('results',$results);
    }

    public function addcour()
    {
        return view('admin.addcourse');
    }

    public function readcour(Request $request)
    {

        $coursemodel=new CourseModel();

        $coursemodel->coursename=$request->input('coursename');
        $coursemodel->depname=$request->input('depname');
        $coursemodel->graduation=$request->input('graduation');
        $coursemodel->description=$request->input('description');


        if($request->hasfile('coursephoto')){
            $file=$request->file('coursephoto');
            $extension=$file->getClientOriginalExtension();
            $filename=time() . '.' . $extension;
            $file->move('uploads/coursephotos/', $filename);
            $coursemodel->coursephoto=$filename;
 
         } else{
             return $request;
             $coursemodel->coursephoto='';
         }

         if($request->hasfile('departphoto')){
            $file=$request->file('departphoto');
            $extension=$file->getClientOriginalExtension();
            $filename=time() . '.' . $extension;
            $file->move('uploads/departphotos/', $filename);
            $coursemodel->departphoto=$filename;
 
         } else{
             return $request;
             $coursemodel->departphoto='';
         }

         $coursemodel->save();

         return redirect('admin/admindashboard');

    }

    public function addcoursereport()
    {
        return view('admin/reportcourse');
    }

    public function showcoursereport(Request $request)
    {
        $pgmodel=PgModel::all();
        $pgmodel->course=$request->input('course');
        $data=$pgmodel->course;
        $results = DB::select('select * from pg_models  where course = ?', [$data]);
        return view('admin/showcoursereport')->with('results',$results);
    }

    public function addfacultyreport()
    {
        return view('admin/reportfaculty');
    }

    public function showfacultyreport(Request $request)
    {
        $facultymodel=FacultyModel::all();
        $facultymodel->department=$request->input('department');
        $data=$facultymodel->department;
        $results = DB::select('select * from faculty_models  where department = ?', [$data]);
        return view('admin/showfacultyreport')->with('results',$results);
    }

    public function storemessage(Request $request)
    {
        $contactmodel=new ContactModel();

        $contactmodel->name=$request->input('name');
        $contactmodel->mail=$request->input('mail');
        $contactmodel->subject=$request->input('subject');
        $contactmodel->message=$request->input('message');

        $contactmodel->save();

        return view('index');

    }

    public function showcontact()
    {
        //$contactmodel=new ContactModel::all();
        $results = DB::select('select * from contact_models');
        return view('admin/showcontact')->with('results',$results);

    }

    public function viewcontact($id)
    {
        $results=ContactModel::find($id);
        $data=$results->id;
        $res = DB::select('select * from contact_models where id=?',[$id]);
        return view('admin/viewcontact',['res'=>$res]);
    }
    
    public function deletecontact($id)
    {

        $data=ContactModel::find($id);
        $data->delete();
        return redirect('admin/showcontact');
    }

    public function updatescholar(Request $request)
    {
        $sc=$request->input('scholarship');
        $n=$request->input('notboard');
        $a=$request->input('acheivements');
        $add=$request->input('admission');
        $su=$request->input('successstory');
        $res = DB::update('update notfication_models set scholarship=?,notboard=?,acheivements=?,admission=?,successstory=?  where id=?',[$sc,$n,$a,$add,$su,"1"]);
        
        return redirect('admin/admindashboard');
    }

    public function addapplicationreport()
    {
        return view('admin/reportapproveapplication');
    }

    public function showapplicationreport(Request $request)
    {
        $pgmodel=PgModel::all();
        $pgmodel->course=$request->input('course');
        $data=$pgmodel->course;
        $results = DB::select('select * from pg_models  where course = ?', [$data]);
        return view('admin/showapplicationapprove')->with('results',$results);
    }

    function approve($id)
    {
        $data=PgModel::find($id);
        //echo $data->status;
        //return view('approve',['data'=>$data]);
        DB::update('update pg_models set status = ? where id = ?',['approved',$id]);
        return view('admin/reportapproveapplication');
    }

    function reject($id)
    {
        $data=PgModel::find($id);
        $data->delete();
        return redirect('admin/admindashboard');

    }

    public function approvedapplication()
    {
        
        return view('admin/approvedapplication');
    }

    function showapprovedapp(Request $request)
    {
        $pgmodel=PgModel::all();
        $pgmodel->course=$request->input('course');
        $data=$pgmodel->course;
        $results = DB::select('select * from pg_models  where course = ? and status=?', [$data,"approved"]);
        return view('admin/showapprovedapp')->with('results',$results);
    }

    public function addugapplicationreport()
    {
        return view('admin/ugapplicationreport');
    }

    public function showugapplicationreport(Request $request)
    {
        $ugmodel=UgModel::all();
        $ugmodel->course=$request->input('course');
        $data=$ugmodel->course;
        $results = DB::select('select * from ug_models  where course = ?', [$data]);
        return view('admin/showugapplicationapprove')->with('results',$results);
    }

    function approveug($id)
    {
        $data=UgModel::find($id);
        //echo $data->status;
        //return view('approve',['data'=>$data]);
        DB::update('update ug_models set status = ? where id = ?',['approved',$id]);
        return view('admin/ugapplicationreport');
    }

    public function approvedugapplication()
    {
        
        return view('admin/approvedugapplication');
    }

    function showapprovedugapp(Request $request)
    {
        $ugmodel=UgModel::all();
        $ugmodel->course=$request->input('course');
        $data=$ugmodel->course;
        $results = DB::select('select * from ug_models  where course = ? and status=?', [$data,"approved"]);
        return view('admin/showapprovedugapp')->with('results',$results);
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
