<?php

namespace App\Http\Controllers;

use App\JobApply;
use Illuminate\Http\Request;
use App\Job;
use App\Mail\jobApplyMailToUser;
use App\Mail\jobApplyMailToCustomer;
use App\Mail\jobApplyMailToAdmin;
use DB;
class JobApplyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            // $jobapplies = JobApply::all()->toArray();
            // return $jobapplies;
            // $sql = "SELECT job_applies.* from job_applies INNER JOIN jobs ON job_applies.job_id= jobs.id";
            // $jobapplies = DB::select($sql);
            // return $jobapplies;

    }

    public function getJobapplies($jobs_id){
        $sql = "SELECT job_applies.* from job_applies INNER JOIN jobs ON job_applies.job_id= jobs.id WHERE job_applies.job_id = $jobs_id";
        $jobapply = DB::select($sql);
        return $jobapply;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
                $string = '';
                $count = count($request->skills);

                for($i = 0;$i< $count ;$i++)
                {

                    if($i == $count-1)
                    {
                        $string .= $request->skills[$i];
                    }else{
                        $string .= $request->skills[$i].',';
                    }

                }
            $jobapply = new JobApply;
            $jobapply->job_id = $request->job_id;
            $jobapply->first_name = $request->first_name;
            $jobapply->last_name = $request->last_name;
            $jobapply->birthday = $request->birthday;
            $jobapply->gender = $request->gender;
            $jobapply->postal = $request->postal;
            $jobapply->city_id = $request->city_id;
            $jobapply->street_address = $request->str_address;
            $jobapply->home_address = $request->home_address;
            $jobapply->phone = $request->phone;
            $jobapply->email = $request->email;
            $jobapply->skill = $string;
            $jobapply->remark = $request->remark;
          
           
           
            //  return $jobapply;
            // $infos = DB::table('jobs')
            //                 ->join('customers', 'customers.id', '=', 'jobs.customer_id')
            //                 ->join('townships','townships.customer_id','=','customers.id')
            //                 ->join('cities','cities.id','=','townships.city_id')
            //                 ->select('jobs.*','customers.email', 'customer.id')
            //                 ->where('jobs.id', '=', $jobapply->job_id)
            //                 ->get();



             $query = "SELECT j.*,c.email,c.name as cus_name,ci.city_name as city_name,(CASE c.type_id WHEN '2' THEN CONCAT((500000+j.id),'-',LPAD(j.id, 4, '0')) ELSE CONCAT((200000+j.id),'-',LPAD(j.id, 4, '0')) END) as jobnum
                        from customers as c join jobs as j on c.id = j.customer_id join townships as t on t.id = c.townships_id join cities as ci on ci.id = t.city_id 
                        where j.id = " . $jobapply->job_id;

            $infos = DB::select($query);    
          

            foreach($infos as $info) {
                $job_title = $info->title;
                $job_description = $info->description;
                $job_location = $info->location;
                $job_nearest_station = $info->nearest_station;
                $job_employment_status = $info->employment_status;
                $job_salary = $info->salary;
                $job_working_hours = $info->working_hours;
                $customer_mail = $info->email;
                $customer_name = $info->cus_name;
                $jobnum = $info->jobnum;
                $city_name = $info->city_name;
            }

            $admin_email = 'thuzar.ts92@gmail.com';
            // $admin_email = 'management.partner87@gmail.com ';
             $jobapply->save();
             $jobapply->job_title = $job_title;
             $jobapply->job_description = $job_description;
             $jobapply->job_location = $job_location;
             $jobapply->job_nearest_station = $job_nearest_station;
             $jobapply->job_employment_status = $job_employment_status;
             $jobapply->job_salary = $job_salary;
             $jobapply->job_working_hours = $job_working_hours;
             $jobapply->cus_name = $customer_name;
             $jobapply->jobnum = $jobnum;
             $jobapply->city_name = $city_name;
             \Mail::to($customer_mail)->send(new jobApplyMailToCustomer($jobapply));
             \Mail::to($jobapply->email)->send(new jobApplyMailToUser($jobapply));
             \Mail::to($admin_email)->send(new jobApplyMailToAdmin($jobapply));
             return response()->json('Apply successfully ');

    }

    public function getSkills()
    {

        $skill = Job::select('skills')->value('skills');
         $array =explode(',',$skill);
            return ($array);

        }


    /**
     * Display the specified resource.
     *
     * @param  \App\JobApply  $jobApply
     * @return \Illuminate\Http\Response
     */
        public function show(JobApply $jobApply)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\JobApply  $jobApply
     * @return \Illuminate\Http\Response
     */
    public function edit(JobApply $jobApply)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\JobApply  $jobApply
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, JobApply $jobApply)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\JobApply  $jobApply
     * @return \Illuminate\Http\Response
     */
    public function destroy(JobApply $jobApply)
    {
        //
    }
}
