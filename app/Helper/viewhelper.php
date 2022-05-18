<?php

use Illuminate\Support\Facades\DB;

    function loadview($page,$data){
        return view('theme/travel_crm/'.$page,$data);
    }

    //mark provision logic dropdown
    function get_lead_types($lead)
    {
        $lea =  DB::table('lead_stages')->where('lead_type',">",$lead)->get();
        return $lea;
    }

    //lead count on crm index page
    function get_lead_count($type){
        $count = DB::table('leads')->where('lead_type','=',$type)->get()->count();
        return $count;
    }
    //monthlead count on crm index page
    function cur_month_lead_count($type){
        $m_cou = DB::table('leads')->where('lead_type','=',$type)->whereMonth('created_at', date('m'))->whereYear('created_at', date('Y'))->get()->count();
        return $m_cou;
    }
