<?php

namespace App\Http\Controllers;

use App\Models\Infomationform;
use App\Models\Log;
use Illuminate\Http\Request;
use Session;
use Auth;

class InfomationformController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    public function indexFrom()
    {
        //
        return view("form");
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.infomationform.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $input = $request->all();
     
        $validate = $this->validate($request,[
            'email'=>'required|email',
            'fnameth' => 'required|string',
            'lnameth' => 'required|string',
            'fnameen' => 'required|string',
            'lnameen' => 'required|string',
            'phone' => 'required',
            'citizenid' => 'required',
            'income' => 'required',
            'gender' => 'required',
            'address' => 'nullable|string',
          
        ]);

        if(!$validate){
        
            return redirect()->route('login')->with('error','Your Information not correct!');
        }

        //Calculate Tex
    
        $tex=$this->calculateTex($input['income']);
        
        isset($input['ip'])? $ip = $input['ip'] : $ip = $_SERVER['REMOTE_ADDR']; 
        isset($input['user_id'])? $user_id = $input['user_id'] : $user_id = $input['user_id']=""; 

        //Save Infomationform
        $infomationform = new Infomationform();
        $infomationform -> first_name_th = $input['fnameth'];
        $infomationform -> last_name_th = $input['lnameth'];
        $infomationform -> first_name_en = $input['fnameen'];
        $infomationform -> last_name_en = $input['fnameth'];
        $infomationform -> email = $input['email'];
        $infomationform -> phone = $input['phone'];
        $infomationform -> citizenid = $input['citizenid'];
        $infomationform -> income = $input['income'];
        $infomationform -> gender = $input['gender'];
        $infomationform -> address = $input['address'];
        $infomationform -> tex = $tex;
        $infomationform->save();


        //Log 
        $detail= $infomationform;
        $detal_json=json_encode($detail);

        $log = new Log();
        $log -> user_id = '' ;
        $log -> table = "infomationforms";
        $log -> ip = $ip;
        $log -> action = "create";
        $log -> detail = $detal_json;
        $log->save();

     
        //if admin go to infomation list or if user  go to home 
        if(Auth::check()) {
            return redirect()->route('admin.home');
          }else{
           
            return redirect('/thankyou');
          }

       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Infomationform  $infomationform
     * @return \Illuminate\Http\Response
     */

     public function calculateTex($income){
      
         $income=(int)$income;

         $income_year=$income*12;

          if($income_year > 5000000){
            $tex=(($income_year-5000000) *0.35)+1265000;

          }else if($income_year <= 5000000 && $income_year >= 2000001){
            $tex=(($income_year-2000000) *0.3)+365000;

         }else if($income_year <= 2000000 && $income_year >= 1000001){
            $tex=(($income_year-1000000) *0.25)+115000;
         
         }else if($income_year <= 1000000 && $income_year >= 750001){
            $tex=(($income_year-750000) *0.2)+65000;
           
         }else if($income_year <= 750000 && $income_year >= 500000){
            $tex=(($income_year-500000) *0.15)+27500;

         }else if($income_year <= 500000 && $income_year >= 300001){
            $tex=(($income_year-300000) *0.10)+7500;

         }else if($income_year <= 300000 && $income_year >= 150001){
            $tex=($income_year-150000 )*0.05;

        }else if($income_year <= 150000){
            $tex=0;
         }
       
         return $tex;
     }
    public function show($id)
    {
        $infomationform=Infomationform::findOrFail($id);
        return view('backend.infomationform.show')->with('infomationform',$infomationform);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Infomationform  $infomationform
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $infomationform=Infomationform::findOrFail($id);
        return view('backend.infomationform.edit')->with('infomationform',$infomationform);
      
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Infomationform  $infomationform
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $infomationform=Infomationform::findOrFail($id);
        $validate = $this->validate($request,[
            'email'=>'required|email',
            'fnameth' => 'required|string',
            'lnameth' => 'required|string',
            'fnameen' => 'required|string',
            'lnameen' => 'required|string',
            'phone' => 'required',
            'citizenid' => 'required',
            'income' => 'required',
            'gender' => 'required',
            'address' => 'nullable|string',
        ]);
      
        $input=$request->all();
        $tex=$this->calculateTex($input['income']);

        $infomationform -> first_name_th = $input['fnameth'];
        $infomationform -> last_name_th = $input['lnameth'];
        $infomationform -> first_name_en = $input['fnameen'];
        $infomationform -> last_name_en = $input['lnameen'];
        $infomationform -> email = $input['email'];
        $infomationform -> phone = $input['phone'];
        $infomationform -> citizenid = $input['citizenid'];
        $infomationform -> income = $input['income'];
        $infomationform -> gender = $input['gender'];
        $infomationform -> address = $input['address'];
        $infomationform -> tex = $tex;
        $status = $infomationform->save();

    isset($input['ip'])? $ip = $input['ip'] : $ip = $_SERVER['REMOTE_ADDR']; 
    isset($input['user_id'])? $user_id = $input['user_id'] : $user_id = $input['user_id']=""; 
    
    //Log 
    $detail[]= $infomationform;
    $detal_json=json_encode($detail);

    $log = new Log();
    $log -> user_id = $user_id ;
    $log -> table = "infomationforms";
    $log -> ip = $ip;
    $log -> action = "edit";
    $log -> detail = $detal_json;
    $log->save();

    if($status){
        request()->session()->flash('success','Successfully updated');
    }
    else{
        request()->session()->flash('error','Please try again!!');
    }
    return redirect()->route('admin.home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Infomationform  $infomationform
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       
        $delete=Infomationform::findorFail($id);
        $status=$delete->delete();
       
        if($status){
            request()->session()->flash('success','role Successfully deleted');
        }
        else{
            request()->session()->flash('error','There is an error while deleting role');
        }
        return redirect()->route('admin.home');

    }
}
