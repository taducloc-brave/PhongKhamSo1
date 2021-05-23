<?php

namespace App\Http\Controllers;
use App\Models\medicines;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class showMedicines extends Controller
{
    public function index(Request $Request, $model)
    	{
        $adminUser = Auth::guard('admin')->user();
    		$Models = '\App\Models\\'.$model;
        $Models = new medicines;
        if($model == 'medicines'){
        $configs = $Models->listingconfigs();
    		$records = $Models::paginate(1);
        


        // var_dump($adminUser);exit;
    		
   			return view("admin.showMedicines",[
   				'user'=>$adminUser,
   				'records'=>$records,
          'configs'=>$configs
   			]);
      }
      if($model != 'medicines'){
        return view("admin.addMedicines",[
          'user'=>$adminUser,
          // 'records'=>$records,
          // 'configs'=>$configs
        ]);
      }
    	}
}
