<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
   public function add()
   {
       return veiw('admin.profile.create');
   }
   public function create()
   {
       return view('admin.profile.create');
   }
   public function edit()
   {
       return viw('admin.profile.edit');
   }
   public function update(){
       return view('admin.profile.edit');
   }
}
