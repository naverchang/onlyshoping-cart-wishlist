<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class DashboardController extends Controller
{
    // 
        public function index(){
             $users=User::all();
            return view('admin-panel.user.index', compact('users'));
        }

        public function viewuser($id){

           $users= User::find($id);

           return view('admin-panel.user.view', compact('users'));

        }
    
}
