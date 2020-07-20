<?php
namespace  App\Http\Controllers\Index;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\RedirectResponse;



class IndexController extends Controller
{

	//登录
	public function index(Request $Request){
		// die;
		return view('index/index');
	}

	
}
