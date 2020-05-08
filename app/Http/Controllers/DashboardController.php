<?php


namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class DashboardController extends Controller{

    public function index(Request $request){
        if($request->user()->hasRole('admin')){
            return view('dashboard.admin');
        }else if($request->user()->hasRole('teacher')){
            return view('dashboard.teacher');
        }else{
            return view('dashboard.parent');
        }

    }

}
