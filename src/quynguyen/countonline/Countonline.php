<?php
namespace Quynguyen\Countonline;

class Countonline {
	public function start(){
		$ip = $_SERVER['REMOTE_ADDR'];
		$exist = Countonline::where('ip','=',$ip)->first();
		if($exist){
			if(time() - $exist->time > 1800){
				Countonline::create(['ip'=>$ip,'time'=>$time()]);
			}
		}else{
			Countonline::create(['ip'=>$ip,'time'=>$time()]);
		}
	}
}