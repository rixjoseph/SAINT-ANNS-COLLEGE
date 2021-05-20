<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\AdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/',[MainController::class,'create']);
Route::get('/about',[MainController::class,'about']);
Route::get('/icourses',[MainController::class,'icourses']);
Route::get('/contact',[MainController::class,'contact']);
Route::post('/readcontact',[AdminController::class,'storemessage'])->name('readcontact');
Route::get('/admin/showcontact',[AdminController::class,'showcontact'])->name('admin.showcontact');
Route::get('/admin/viewcontact/{id}',[AdminController::class,'viewcontact'])->name('admin.viewcontact.{id}');
Route::get('/admin/delete/{id}',[AdminController::class,'deletecontact']);


Route::get('/auth/register',[MainController::class,'register'])->name('auth.register');
Route::get('/auth/adminregister',[MainController::class,'adregister'])->name('auth.adminregister');
Route::get('/auth/login',[MainController::class,'login'])->name('auth.login');


Route::post('/auth/save',[MainController::class,'save'])->name('auth.save');
Route::post('/auth/adminsave',[MainController::class,'adsave'])->name('auth.adminsave');
Route::post('/auth/check',[MainController::class,'check'])->name('auth.check');


Route::get('/student/studentdashboard',[StudentController::class,'create']);
Route::get('/student/course',[StudentController::class,'showcourse'])->name('student.course');
Route::get('/student/changepassword',[StudentController::class,'cpassword'])->name('student.changepassword');
Route::get('/student/instructions',[StudentController::class,'showinstruct'])->name('student.instructions');
Route::post('/readpassword',[StudentController::class,'storepassword'])->name('readpassword');

Route::get('/student/mcaadmission',[StudentController::class,'showadmissionform'])->name('student.mcaadmission');
Route::post('/readmca',[StudentController::class,'storemca'])->name('readmca');
Route::get('/student/mswadmission',[StudentController::class,'showadmissionformmsw'])->name('student.mswaadmission');
Route::post('/readmsw',[StudentController::class,'storemsw'])->name('readmsw');
Route::get('/student/mbaadmission',[StudentController::class,'showadmissionformmba'])->name('student.mbaaadmission');
Route::post('/readmba',[StudentController::class,'storemba'])->name('readmba');
Route::post('/readpay',[StudentController::class,'storepay'])->name('readpay');
Route::post('/readugpay',[StudentController::class,'storeugpay'])->name('readugpay');

Route::get('/student/bcaadmission',[StudentController::class,'showadmissionformbca'])->name('student.bcaadmission');
Route::post('/readbca',[StudentController::class,'storebca'])->name('readbca');
Route::get('/student/bbaadmission',[StudentController::class,'showadmissionformbba'])->name('student.bbaadmission');
Route::post('/readbba',[StudentController::class,'storebba'])->name('readbba');
Route::get('/student/bswadmission',[StudentController::class,'showadmissionformbsw'])->name('student.bswadmission');
Route::post('/readbsw',[StudentController::class,'storebsw'])->name('readbsw');

Route::get('/student/profile',[StudentController::class,'showprofile'])->name('student.profile');

Route::get('/auth/logout',[MainController::class,'logout'])->name('auth.logout');


Route::get('/admin/admindashboard',[AdminController::class,'create']);
Route::get('/admin/addadmin',[AdminController::class,'addadmin'])->name('admin.addadmin');
Route::post('/readadmin',[AdminController::class,'readadmin'])->name('readadmin');
Route::get('/admin/changepassword',[AdminController::class,'cpassword'])->name('admin.changepassword');

Route::get('/admin/addfaculty',[AdminController::class,'addfac'])->name('admin.addfaculty');
Route::post('/readfaculty',[AdminController::class,'readfac'])->name('readfaculty');

Route::get('/admin/addnotification',[AdminController::class,'addnot'])->name('admin.addnotification');
Route::post('/readnotification',[AdminController::class,'readnot'])->name('readnotification');
Route::get('/admin/viewnotification',[AdminController::class,'viewnot'])->name('admin.viewnotification');

Route::get('/admin/addcourse',[AdminController::class,'addcour'])->name('admin.addcourse');
Route::post('/readcourse',[AdminController::class,'readcour'])->name('readcourse');

Route::get('/admin/reportcourse',[AdminController::class,'addcoursereport'])->name('admin.reportcourse');
Route::post('/readcoursereport',[AdminController::class,'showcoursereport'])->name('readcoursereport');

Route::get('/admin/reportfaculty',[AdminController::class,'addfacultyreport'])->name('admin.reportfaculty');
Route::post('/readfacultyreport',[AdminController::class,'showfacultyreport'])->name('readfacultyreport');

Route::post('/upscholar',[AdminController::class,'updatescholar'])->name('upscholar');

Route::get('/admin/reportapproveapplication',[AdminController::class,'addapplicationreport'])->name('admin.reportapproveapplication');
Route::post('/readapplicationreport',[AdminController::class,'showapplicationreport'])->name('readapplicationreport');

Route::get('/admin/ugapplicationreport',[AdminController::class,'addugapplicationreport'])->name('admin.ugapplicationreport');
Route::post('/readugapplicationreport',[AdminController::class,'showugapplicationreport'])->name('readugapplicationreport');

Route::get('/approve/{id}',[AdminController::class,'approve']);
Route::get('/approveug/{id}',[AdminController::class,'approveug']);
Route::get('/reject/{id}',[AdminController::class,'reject']);

Route::get('/admin/approvedapplication',[AdminController::class,'approvedapplication'])->name('admin.approvedapplication');
Route::post('/readapp',[AdminController::class,'showapprovedapp'])->name('readapp');

Route::get('/admin/approvedugapplication',[AdminController::class,'approvedugapplication'])->name('admin.approvedugapplication');
Route::post('/readugapp',[AdminController::class,'showapprovedugapp'])->name('readugapp');

//Route::get('/student/edudetails',[StudentController::class,'eduform'])->name('student.edudetails');
