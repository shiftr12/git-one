<?php
namespace  App\Http\Controllers\Login;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\RedirectResponse;


class LoginController extends Controller
{

	//登录
	public function Loign(Request $Request){
		// phpinfo();die;
		return view('login/index');
	}

	public function index(Request $Request){
		//接收数据
		// $data = $Request->All();
		// //var_dump($data);die;
		// //存储
		// $data_name = $data['name'];
		// $data_pwd = $data['pwd'];

		// $name = Redis::SET('name',$data_name);
		// $pwd = Redis::SET('pwd',$data_pwd);

		// $name = Redis::GET('name');
		// $pwd = Redis::GET('pwd');

		if($Request->isMethod('post')){
			return view('index/index');
		}
		
     }	

     
        //退出
    public function loginOut(){
     	// Redis::DEL('name','pwd');
        return  redirect('index');
    }

}

