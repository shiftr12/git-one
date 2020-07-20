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
			<form action="{{url('loginOut')}}" method="post" id="user-info">
				{{ csrf_field() }}
             <div class="submit">
					<input type="submit" onclick="myFunction()" value="LlginOut" >
		            <a href="{{url('loginOut')}}"></a>

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
