<?php

namespace App\Http\Controllers;

use App\Models\Login_Table;
use App\Models\NotficationModel;
use DB;
use App\Mail\RegisterMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class MainController extends Controller
{
    function create()
    {
        $results = DB::select('select * from notfication_models');
        return view('index')->with('results',$results);

        //return view('index');
    
    }

    function about()
    {
        return view('about');
    }

    function icourses()
    {
        return view('courses');
    }

    function contact()
    {
        return view('contact');
    }

    function register()
    {
        return view('auth.register');
    }

    function adregister()
    {
        return view('auth.adminregister');
    }

    function login()
    {
        return view('auth.login');
    }

    function save(Request $request)
    {
        $request->validate([
            'sname'=>'required',
            'email'=>'required|email|unique:login__tables',
            'password'=>'required|min:5|max:12'
        ]);

        $login_table=new Login_Table;
        $login_table->sname=$request->sname;
        $login_table->email=$request->email;
        $login_table->password=$request->password;
        $login_table->usertype='student';

        $save=$login_table->save();

        $login_table=array(
        'name'=> $request->name,
        'email'=>$request->email,
        'password'=>$request->password
        );

        //Mail::to($login_table['email'])->send(new RegisterMail($login_table));

        return view('auth.login');

        if($save)
        {
            return back()->with('success','New user added successfully');
        }
        else
        {
            return back()->with('fail','something went wrong');
        }

        
    }

    function adsave(Request $request)
    {
        $request->validate([
            'sname'=>'required',
            'email'=>'required|email|unique:login__tables',
            'password'=>'required|min:5|max:12'
        ]);

        $login_table=new Login_Table;
        $login_table->sname=$request->sname;
        $login_table->email=$request->email;
        $login_table->password=$request->password;
        $login_table->usertype='admin';

        $save=$login_table->save();

        $login_table=array(
        'name'=> $request->name,
        'email'=>$request->email,
        'password'=>$request->password
        );


        return view('auth.login');

        if($save)
        {
            return back()->with('success','New user added successfully');
        }
        else
        {
            return back()->with('fail','something went wrong');
        }

        
    }

    function check(Request $request)
    {

        $getmail=request('email');
        $getpass=request('password');
        //$name=$request->input();
        //$request->session()->put('sname',$getmail);
        //echo session('sname');

        $userinfo=login_table::select('email')->where('email','like',"$getmail")->first();

        if(!$userinfo)
        {
           return back()->with('fail','we do not recognize your email address');
        }
        else
        {
        echo $userinfo->email;
        $p=login_table::select('password')->where('email','like',"$userinfo->email")->first();
        echo $p->password;
        
        
            if($p->password == $getpass)
            {
                $ut=login_table::select('usertype')->where('email','like',"$userinfo->email")->first();
                //echo $ut->usertype;
                if($ut->usertype == 'student')
                {
                    $i=login_table::select('email')->where('email','like',"$getmail")->first();
                    $request->session()->put('mailid',$i);
                    // echo session('sname');
                    // echo "student";
                    return redirect ('/student/studentdashboard');
                }
                else if($ut->usertype=='admin')
                {
                    echo "admin";
                    $i=login_table::select('email')->where('email','like',"$getmail")->first();
                    $request->session()->put('mailid',$i);
                    // $i=faculty::select('id')->where('mailid','like',"$getmail")->first();
                    // echo $i;
                    return redirect('/admin/admindashboard');
                
                }
                else
                {
                   
                }
            }
            else
            {
                return back()->with('fail','Incorrect Password');
            }
        }
    }

    function logout()
    {
        if(session()->has('mailid')){
            session()->pull('mailid');
            return redirect('auth/login');
        }
        
    }
        

}

