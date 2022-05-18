<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\CrudController;
use App\Models\Admin;
use App\Models\LeadStage;
use DB;

class CrmController extends Controller
{
	public function __construct()
    {
        $this->crud = new CrudController;
    }
    public function index($page="index")
	{   
		$type='';
        if (!file_exists(app_path().'resources/views/theme/travel_crm/'.$page.'.php')) {
            404;
        }
		
	    $data['page_name'] = $page;
	    $data['main_page'] = 'crm';
		$data['LoggedUserInfo'] = Admin::where('id','=',session('LoggedUser'))->first();
		$data['leadstage'] = DB::table('lead_stages')->where('status',1)->get();
		$data['l2count']=	DB::table('lead_stages')->select('name','lead_type' )->where('show_on_dashboard',1)->get();
        $data['leadtype'] = DB::table('lead_stages')->where('status',1)->get();
        $data['color'] = DB::table('dashboard_colors')->get();

		//pie chart logic start
		$piechart = DB::select(DB::raw("SELECT lead_stages.name,
							COUNT(leads.lead_type) AS leadcount FROM lead_stages INNER JOIN leads ON lead_stages.lead_type=leads.lead_type GROUP BY lead_stages.name,leads.lead_type ORDER BY leadcount DESC"));
		$piedata = "";
		foreach($piechart as $list){
			$piedata.="['".ucwords($list->name)."', ".$list->leadcount."],";
		}
		$data['piedata'] = rtrim($piedata,",");
		//pie chart logic end

		//bar chart logic start	
		$month = DB::select(DB::raw("SELECT DATE_FORMAT(leads.created_at, '%M') as month,MONTH(leads.created_at) as intmonth  FROM leads  GROUP BY month,intmonth ORDER BY MONTH(leads.created_at) ASC"));
		$chartrow = array();
		$colmname = array();
            if(count($month))
			{  
				$colmname[] = "Month";
                foreach($month as $m )
				{ 
					$chars = array();
					$leadcont = DB::select(DB::raw("SELECT DATE_FORMAT(leads.created_at, '%M') as monthname, client_types.name,COUNT(leads.client_type) AS client_type_count    FROM leads JOIN client_types ON client_types.id = leads.client_type WHERE leads.lead_type = '0' GROUP BY leads.client_type , client_types.name ,monthname having monthname  = '".$m->month."'  "));    
                   if(count($leadcont))
					{
						$chars[] = "'".$m->month."'";
						foreach($leadcont as $l )
						{
                            $colmname[] = ucfirst($l->name);
							$chars[] = (int)$l->client_type_count;
                        }
						$chartrow[] = $chars;
					}
				}
			} 
		$data['colmname']= array_unique($colmname);
		$data['chartdata'] = $chartrow; 
		//bar chart logic end

		// echo '<pre>';
		// print_r($data);
		// die;
		return loadview($page,$data);

	}
    public function add_lead($page="add_lead",Request $req)
	{	
		$type='';
	   	if (!file_exists(app_path().'views/theme/travel_crm/'.$page.'.php')) {
				404;
		}
		if(isset($_POST['add_lead'])){
            $filename = '';
            if($req->hasfile('cus_img')){
				$client_img = $req->file('cus_img');
                $extension = $client_img->getClientOriginalExtension();
                $filename = time().".".$extension;
                $client_img->move('uploads/leads_client_img/',$filename);
            }
			$data = [
				'client_type' => $req->input('enquiry_type'),
				'project' => $req->input('project'),
				'cust_name' => $req->input('cus_name'),
				'cust_img' => $filename,
				'cust_email' => $req->input('cus_email'),
				'cust_mobile' => $req->input('cus_mobile'),
				'travel_location' => $req->input('location'),
				'tt_id' => json_encode($req->input('type')),
				'travel_date' => $req->input('date'),
				'budget_payment_type' => $req->input('budget_type'),
				'budget_payment_value' => $req->input('budget_value'),
				'adults' => $req->input('adults'),
				'kids' => $req->input('kids'),
				'infants' => $req->input('infants'),
				'lead_source' => json_encode($req->input('lead_source')),
				'lead_owner' => json_encode($req->input('lead_owner')),
				'requirements' => json_encode($req->input('requirement')),
			];
			if($this->crud->insert($table='leads',$data)){
				return redirect('crm/lead/all')->with('success', 'Leads details added successfully.');			
			}else{
				return back()->with('fail','Leads details cannot be added. Something Wrong.');
			}
		}

		if(isset($_POST['upd_lead'])){
			$filename = '';
            
			$data = [
				'client_type' => $req->input('enquiry_type'),
				'project' => $req->input('project'),
				'cust_name' => $req->input('cus_name'),
				'cust_email' => $req->input('cus_email'),
				'cust_mobile' => $req->input('cus_mobile'),
				'travel_location' => $req->input('location'),
				'tt_id' => json_encode($req->input('type')),
				'travel_date' => $req->input('date'),
				'budget_payment_type' => $req->input('budget_type'),
				'budget_payment_value' => $req->input('budget_value'),
				'adults' => $req->input('adults'),
				'kids' => $req->input('kids'),
				'infants' => $req->input('infants'),
				'lead_source' => json_encode($req->input('lead_source')),
				'lead_owner' => json_encode($req->input('lead_owner')),
				'requirements' => json_encode($req->input('requirement')),
			];
         
			if($req->hasfile('cl_edit_file')){
				$client_img = $req->file('cl_edit_file');
                $extension = $client_img->getClientOriginalExtension();
                $filename = time().".".$extension;
                $client_img->move('uploads/leads_client_img/',$filename);
				$data['cust_img'] = $filename;	

            }

			$id = $req->input('hide_id');
            $this->crud->update($table='leads',$id,$data);
            return back()->with('success','Leads details updated successfully.');

		}

		if(isset($_POST['delete_lead'])){
            $data = [
                'status'=> '0',
            ];
            $id = $req->input('hide_id');
            $this->crud->update($table='leads',$id,$data);
            return back()->with('success','Leads details deleted successfully.');
        }
		if(isset($_POST['mark_lead'])){
			$id = $req->input('hide_id');
            $status = $req->input('status');
            $data = [
                'lead_type'=> $status,
            ];
            $this->crud->update($table='leads',$id,$data);
            return back()->with('success','Leads details Marked successfully.');
        }
		if(isset($_POST['assign_lead'])){
			$id = $req->input('hide_id');
            $status = $req->input('assign_to');
            $data = [
                'assigned_to'=> $status,
            ];
            $this->crud->update($table='leads',$id,$data);
            return back()->with('success','Lead Assigned successfully.');
        }
		else{
			$data['page_name'] = $page;
			$data['main_page'] = 'crm';
			$data['LoggedUserInfo'] = Admin::where('id','=',session('LoggedUser'))->where('status', '=', 1)->first();
            $data['leadstage'] = DB::table('lead_stages')->where('status',1)->get();
            $data['clienttype'] = DB::table('client_types')->where('status',1)->get();
            $data['travel_types'] = DB::table('travel_types')->where('status',1)->get();
            $data['budget_currencies'] = DB::table('budget_currencies')->where('status',1)->get();
            $data['lead_sources'] = DB::table('lead_sources')->where('status',1)->get();
            $data['lead_owner'] = DB::table('admins')->where('id','=',session('LoggedUser'))->where('status', '=', 1)->get();
			$data['requirement'] = DB::table('travel_types')->where('status',1)->get();
			// return view('theme/travel_crm/'.$page, $data);
			return loadview($page,$data);

		}
	}

    //this function works as filter
    public function leadtypes($type='all')
	{	 
		$page = 'all_lead';
        if (!file_exists(app_path().'resources/views/theme/travel_crm/'.$page.'.php')) {
            404;
        }
	    $data['page_name'] = $type;
	    $data['main_page'] = 'crm';
		$data['lead_type'] = $type;
		$data['LoggedUserInfo'] = Admin::where('id','=',session('LoggedUser'))->first();
		//left sidebar menu of leads
		$data['leadstage'] = DB::table('lead_stages')->where('status',1)->get();
		//fetch dynamic data of lead form in all type lead
		$data['clienttype'] = DB::table('client_types')->where('status',1)->get();
		$data['travel_types'] = DB::table('travel_types')->where('status',1)->get();
		$data['budget_currencies'] = DB::table('budget_currencies')->where('status',1)->get();
		$data['lead_sources'] = DB::table('lead_sources')->where('status',1)->get();
		$data['lead_owner'] = DB::table('admins')->where('status',1)->get();
		$data['requirement'] = DB::table('travel_types')->where('status',1)->get();
		$data['jsondata'] = DB::select(DB::raw("select tt_id,lead_source,lead_owner,requirements from leads"));

		//shown different leads on the basis of lead type on same page
		if($type == 'all'){
			$data['title'] = 'All Leads';
			$data['leads'] = DB::select(DB::raw("SELECT client_types.name as client_type_name,budget_currencies.name as 
					budget_currency_name,leads.* FROM leads 
					JOIN client_types ON client_types.id=leads.client_type 
					JOIN budget_currencies ON budget_currencies.id=leads.budget_payment_type 
					where leads.status ='1'"));
		}
		elseif($type == 'unassigned_lead'){
			$data['leads']= DB::select(DB::raw("SELECT client_types.name as client_type_name,budget_currencies.name as 
					budget_currency_name,leads.* FROM leads 
					JOIN client_types ON client_types.id=leads.client_type 
					JOIN budget_currencies ON budget_currencies.id=leads.budget_payment_type 
					where leads.status ='1' and leads.lead_type='0'"));
			$data['title'] = 'Unassigned Leads';
		}
		elseif($type == 'assigned_lead'){
			$data['leads']= DB::select(DB::raw("SELECT client_types.name as client_type_name,budget_currencies.name as 
			budget_currency_name,leads.* FROM leads 
			JOIN client_types ON client_types.id=leads.client_type 
			JOIN budget_currencies ON budget_currencies.id=leads.budget_payment_type 
			where leads.status ='1' and leads.lead_type='1'"));
			$data['title'] = 'Assigned Leads';
		}
		elseif($type == 'follow_up_lead'){
			$data['leads']= DB::select(DB::raw("SELECT client_types.name as client_type_name,budget_currencies.name as 
			budget_currency_name,leads.* FROM leads 
			JOIN client_types ON client_types.id=leads.client_type 
			JOIN budget_currencies ON budget_currencies.id=leads.budget_payment_type 
			where leads.status ='1' and leads.lead_type='2'"));
			$data['title'] = 'Follow Up Leads';
		}
		elseif($type == 'potential_lead'){
			$data['leads']= DB::select(DB::raw("SELECT client_types.name as client_type_name,budget_currencies.name as 
			budget_currency_name,leads.* FROM leads 
			JOIN client_types ON client_types.id=leads.client_type 
			JOIN budget_currencies ON budget_currencies.id=leads.budget_payment_type 
			where leads.status ='1' and leads.lead_type='3'"));
			$data['title'] = 'Potential Leads';
		}
		elseif($type == 'positive_lead'){
			$data['leads']= DB::select(DB::raw("SELECT client_types.name as client_type_name,budget_currencies.name as 
			budget_currency_name,leads.* FROM leads 
			JOIN client_types ON client_types.id=leads.client_type 
			JOIN budget_currencies ON budget_currencies.id=leads.budget_payment_type 
			where leads.status ='1' and leads.lead_type='4'"));
			$data['title'] = 'Positive Leads';
		}
		elseif($type == 'converted_lead'){
			$data['leads']= DB::select(DB::raw("SELECT client_types.name as client_type_name,budget_currencies.name as 
			budget_currency_name,leads.* FROM leads 
			JOIN client_types ON client_types.id=leads.client_type 
			JOIN budget_currencies ON budget_currencies.id=leads.budget_payment_type 
			where leads.status ='1' and leads.lead_type='5'"));
			$data['title'] = 'Converted Leads';
		}
		elseif($type == 'close_lead'){
			$data['leads']= DB::select(DB::raw("SELECT client_types.name as client_type_name,budget_currencies.name as 
			budget_currency_name,leads.* FROM leads 
			JOIN client_types ON client_types.id=leads.client_type 
			JOIN budget_currencies ON budget_currencies.id=leads.budget_payment_type 
			where leads.status ='1' and leads.lead_type='6'"));
			$data['title'] = 'Close Leads';
		}
        return loadview($page,$data);
	}
	public function lead_report($page="lead_report")
	{
        if (!file_exists(app_path().'resources/views/theme/travel_crm/'.$page.'.php')) {
            404;
        }
	    $data['page_name'] = $page;
	    $data['main_page'] = 'crm';
		$data['LoggedUserInfo'] = Admin::where('id','=',session('LoggedUser'))->first();
		//left sidebar menu of leads
		$data['leadstage'] = DB::table('lead_stages')->where('status',1)->get();

		//bar chart logic start	
		$month = DB::select(DB::raw("SELECT DATE_FORMAT(leads.created_at, '%M') as month,MONTH(leads.created_at) as intmonth  FROM leads  GROUP BY month,intmonth ORDER BY MONTH(leads.created_at) ASC"));
        $leadType = DB::select(DB::raw("SELECT client_types.name , leads.client_type  FROM leads JOIN client_types ON client_types.id = leads.client_type GROUP BY  client_types.name, leads.client_type "));     
 
		$chartrow = array();
		$colmname = array();
		
		if(count($month) && count($leadType))
		{
			$colmname[] = "Month";	
			foreach($month as $m)
			{   
				$chars = array();
				$chars[] = "'".$m->month."'";	
				foreach($leadType as $type)
				{
					$colmname[] = $type->name;
					$ledcount = DB::select(DB::raw("SELECT DATE_FORMAT(leads.created_at, '%M') as monthname, client_types.name,COUNT(leads.client_type) AS client_type_count    FROM leads JOIN client_types ON client_types.id = leads.client_type  where client_types.name = '".$type->name."' GROUP BY leads.client_type , client_types.name ,monthname  having monthname  = '".$m->month."'   "));     	
					$chars[] = count($ledcount)?(int)$ledcount['0']->client_type_count:0;
				}	
				$chartrow[]  =$chars;
			}
		}
		$data['colmname']= array_unique($colmname);
		$data['chartdata'] = $chartrow;
		// $chartrow = array();
		// $colmname = array();
            // if(count($month))
			// {  
				
			// 	$colmname[] = "Month";
            //     foreach($month as $m )
			// 	{ 
			// 		$chars = array();
			// 		$leadcont = DB::select(DB::raw("SELECT DATE_FORMAT(leads.created_at, '%M') as monthname, client_types.name,COUNT(leads.client_type) AS client_type_count    FROM leads JOIN client_types ON client_types.id = leads.client_type GROUP BY leads.client_type , client_types.name ,monthname having monthname  = '".$m->month."'  "));     
			// 		// print_r($leadcont);
					
            //        if(count($leadcont))
			// 		{
			// 			$chars[] = "'".$m->month."'";
			// 			foreach($leadcont as $index=>$l )
			// 			{
            //                 $colmname[] = ucfirst($l->name);
			// 				// print_r($colmname);
			// 				$chars[] = (int)$l->client_type_count;
			// 				// print_r($chars);
            //             }
			// 			$chartrow[] = $chars;
			// 		}
			// 	}
			// } 

		 

		//bar chart logic end
		// echo '<pre>';
		// print_r(array_unique($colmname));
		// print_r($chartrow);
		// die;

        return loadview($page,$data);
	}
	public function bulk_lead($page="bulk_lead",Request $req)
	{
	   if (!file_exists(app_path().'resources/views/theme/travel_crm/'.$page.'.php')) {
				404;
		}
		if(isset($_POST['bulk_assign'])){

			$assigned_to = $req->input('bulkassign_to');
			$id = $req->input('hide_lead_id');
			$idarr = json_decode($id);
			$data = [
				'assigned_to' => $assigned_to,
			];
			foreach($idarr as $idarray){
				$id = $idarray;
				$this->crud->update($table='leads',$id,$data);
			}
            return back()->with('success','Bulk Leads assigned successfully.');

		}
		else{
	    $data['page_name'] = $page;
	    $data['main_page'] = 'crm';
		$data['title'] = 'Bulk Assign Leads';
		$data['LoggedUserInfo'] = Admin::where('id','=',session('LoggedUser'))->first();
		$data['leadstage'] = DB::table('lead_stages')->where('status',1)->get();

		$data['leads'] = DB::select(DB::raw("SELECT client_types.name as client_type_name,budget_currencies.name as 
					budget_currency_name,leads.* FROM leads 
					JOIN client_types ON client_types.id=leads.client_type 
					JOIN budget_currencies ON budget_currencies.id=leads.budget_payment_type 
					where leads.status ='1'"));
		//fetch dynamic data of lead form in all type lead
		$data['clienttype'] = DB::table('client_types')->where('status',1)->get();
		$data['travel_types'] = DB::table('travel_types')->where('status',1)->get();
		$data['budget_currencies'] = DB::table('budget_currencies')->where('status',1)->get();
		$data['lead_sources'] = DB::table('lead_sources')->where('status',1)->get();
		$data['lead_owner'] = DB::table('admins')->where('status',1)->get();
		$data['requirement'] = DB::table('travel_types')->where('status',1)->get();
		$data['jsondata'] = DB::select(DB::raw("select tt_id,lead_source,lead_owner,requirements from leads"));
		}
		return loadview($page,$data);
	}
	public function crm_setting($page="crm_setting")
	{
        if (!file_exists(app_path().'resources/views/theme/travel_crm/'.$page.'.php')) {
            404;
        }
	    $data['page_name'] = $page;
	    $data['main_page'] = 'crm';
		$data['LoggedUserInfo'] = Admin::where('id','=',session('LoggedUser'))->first();
		//left sidebar menu of leads
		$data['leadstage'] = DB::table('lead_stages')->where('status',1)->get();
        return loadview($page,$data);
	}
}
