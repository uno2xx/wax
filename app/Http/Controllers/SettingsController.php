<?php

namespace App\Http\Controllers;

use App\Setting;
use Illuminate\Http\Request;

class SettingsController extends Controller
{

	protected $setting;

    public function __construct(Setting $setting){
    	$this->setting = $setting;
    }

    public function index(){
    	$settings = $this->setting->all();
    	return view('page.settings')
    		->withSettings($settings);
    }

    public function update(Request $request){
    	$settings = $this->setting->all();
    	foreach($settings as $setting){
    		$this->setting->find($setting->id)->update(['settings_value'=>$request['setting_'.$setting->id]]);
    	}

    	return redirect()->back();
    }
}
