<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;

use App\Models\resident_info;
use Illuminate\Http\Request;

class VerifyController extends Controller
{
   

    public function update(Request $request, $id){
        $residents =  resident_info::find($id)->update(['is_verified'=>$request->is_verified]);
        return response()->json(['success'=>'User Updated Successfully!']);
     }

  
}
