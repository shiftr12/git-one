<!DOCTYPE html>
<html>
<head>
<title>Signin</title>
<link href="/blog/public/static/css/style.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="App Sign in Form,Login Forms,Sign up Forms,Registration Forms,News latter Forms,Elements"./>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
</script>
<!--webfonts-->
<!-- <link href='http://fonts.useso.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,300,600,700,800' rel='stylesheet' type='text/css'> -->
<!--//webfonts-->
</head>
<body>
	<h1>App Sign In Form</h1>
		<div class="app-cam">
			<div class="cam"><img src="/blog/public/static/images/cam.png" class="img-responsive" alt="" /></div>
			<form action="{{url('index/index')}}" method="post" id="user-info">
				{{ csrf_field() }}
				<input type="text" class="text" name="name" value="E-mail address" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'E-mail address';}" >
				<input type="password" value="Password" name="pasword" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}">
				<div class="submit"><input type="submit" onclick="myFunction()" value="Sign in" >

					<a href="{{url('index/index')}}"></a>

				</div>
				<div class="clear"></div>
				<div class="buttons">
					<ul>
						<li><a href="#" class="hvr-sweep-to-right">Sign in with Facebook</a></li>
						<li><a href="#" class="hvr-sweep-to-left">Sign in with Twitter</a></li>
						<div class="clear"></div>
					</ul>
				</div>
				<div class="new">
					<p><a href="#">Forgot Password ?</a></p>
					<p class="sign">New here ?<a href="#"> Sign Up</a></p>
					<div class="clear"></div>
				</div>
			</form>
		</div>
	<!--start-copyright-->
   		<div class="copy-right">
				<p>Copyright &copy; 2015.Company name All rights reserved.<a target="_blank" href="http://sc.chinaz.com/moban/">&#x7F51;&#x9875;&#x6A21;&#x677F;</a></p>
		</div>
	<!--//end-copyright-->
</body>
</html>
<!-- <script src="/blog/public/static/js/layer.js"></script> -->
<script src="/blog/public/static/js/jquery-1.10.1.js"></script>
<script type="text/javascript">
	
	// $('#user-info').submit(function(){
	// 	$.post("{:url('index/index')}",
	// 		$('#user-info').serialize(),
	// 		  function(res){

	// 		  },'json')
	// 	return false;
	// })


	// $(function () {
 //        // 表单提交
 //        var $form = $('#user-info');
 //        $form.submit(function(){
 //            //$.post('提交地址','携带参数','成功的回调函数','数据类型')
 //            // $.ajax({
 //            //     url:'loginAdmin',
 //            //     type:'post',
 //            //     data:{'user_name':'','password':''}
 //            //     dataType:'json',
 //            //     success:function(){
 //            //     }
 //            // })

            
 //            $.post('Loign',
 //                  {
 //                    name:$('[name="name"]').val(),
 //                    password:$('[name="password"]').val()
 //                  },
 //                  function(res){
 //                     //alert(data);
 //                     if(res.status == 200){
 //                    layer.msg(res.msg, {time: 1500, anim: 2},function(){
 //                        window.location.href=res.url;
 //                    });

 //                }else{
 //                    layer.msg(res.msg, {time: 1500, anim: 6});
 //                }

 //                  },'json')


          
 //          return false
 //         });
 //    });

</script>