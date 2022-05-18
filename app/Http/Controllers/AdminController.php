<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use DB;

class AdminController extends Controller
{
    public function index($page='index'){
		$data['page_name'] = $page;
		$data['main_page'] = 'crm';
        $data['LoggedUserInfo'] = Admin::where('id','=',session('LoggedUser'))->first();
		return view('travel_crm/'.$page,$data);
	}
    public function show(){
        if(session()->has('LoggedUser')){
            // The user is logged in...
            return redirect('/travel_management');
        }
        return view('login');

    }
    public function logincheck(Request $request){
        $request->validate([
            'email'=>'required|email',
            'password'=>'required|min:5|max:12'
        ]);
        $userinfo = Admin::where('email','=',$request->email)->first();
        
        if(!$userinfo){
            return back()->with('fail','We do not recognize your email address.');
        }else{
            if(Hash::check($request->password,$userinfo->password)){
                $request->session()->put('LoggedUser',$userinfo->id);
                return redirect('/crm');
            }else{
                return back()->with('fail','Incorrect password');
            }
        }
    }

    public function logout(){
        if(session()->has('LoggedUser')){
            session()->pull('LoggedUser');
            return redirect('login');
        }
        return redirect('login');
    }
	
	public function forgot_password(){
        $data['LoggedUserInfo'] = Admin::where('id','=',session('LoggedUser'))->first();
		return view('forgot_password');
	}
	public function page_setting(){
        $data['LoggedUserInfo'] = Admin::where('id','=',session('LoggedUser'))->first();
		return view('page_setting');
	}


    public function general($page="general"){
        $data['page_name'] = $page;
	    $data['main_page'] = 'crm';
        $data['LoggedUserInfo'] = Admin::where('id','=',session('LoggedUser'))->first();
		return view($page, $data);
	}
	public function admin_profile($page="admin_profile"){
    	$data['page_name'] = $page;
	    $data['main_page'] = 'crm';
        $data['LoggedUserInfo'] = Admin::where('id','=',session('LoggedUser'))->first();
		return view($page, $data);
    }

	//function to upload profile picture
	public function upload_pic(Request $request){
        $data['LoggedUserInfo'] = Admin::where('id','=',session('LoggedUser'))->first();
        $adminid= $data['LoggedUserInfo']->id;
        $file = $request->file('propic');
        $extension = $file->getClientOriginalExtension();
        $filename = time().".".$extension;
        $file->move('uploads/profile_img/',$filename);
        DB::table('admins')
              ->where('id', $adminid)
              ->update(['profile_img' =>$filename ]);
		return redirect()->back();

	}
    //change password function
    public function change_pass(Request $request){
        $current_pass= $request->input('current_pass');
        $new_pass= $request->input('new_pass');
        $confirm_pass= $request->input('confirm_pass');
        $data['LoggedUserInfo'] = Admin::where('id','=',session('LoggedUser'))->first();
        $dbpass= $data['LoggedUserInfo']->password;
        $adminid= $data['LoggedUserInfo']->id;

        if(Hash::check($current_pass,$dbpass)){
            if($new_pass == $confirm_pass){
                $new_pass = Hash::make($new_pass);
                DB::table('admins')
                ->where('id', $adminid)
                ->update(['password' =>$new_pass ]);
                return back()->with('success','Password changed successfully');
            }else{
                return back()->with('fail','New Password does not matches with your confirm password.');
            }
        }else{
            return back()->with('fail','Your Password does not matches saved password.');
        }
    }

    public function update_personal_info(Request $request){
        $data['LoggedUserInfo'] = Admin::where('id','=',session('LoggedUser'))->first();
        $adminid= $data['LoggedUserInfo']->id;
        $name= $request->name;
        $mobile= $request->mobile;
        $age= $request->age;
        $address= $request->address;
        DB::table('admins')
                ->where('id', $adminid)
                ->update(['name' =>$name ,'mobile' =>$mobile,'age' =>$age,'address' =>$address]);
                return true;
    }


}
