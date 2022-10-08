<?php
include("config.php");
session_start(); 

    
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Prabhu Priya | Product Management</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords" content="Best Jeweller in Moradabad, Top Jeweller in Moradabad" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
		
	</script>
	<!-- //Meta tag Keywords -->

	<!-- Custom-Files -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Bootstrap-Core-CSS -->
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<!-- Style-CSS -->
	<link rel="stylesheet" href="css/font-awesome.css">
	<!-- Font-Awesome-Icons-CSS -->
	<!-- //Custom-Files -->
<link rel="icon" href="images/l1.png" type="image/png" sizes="16x16">

	<!-- Web-Fonts -->
	<link href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i&amp;subset=latin-ext"
	 rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"
	 rel="stylesheet">
	<!-- //Web-Fonts -->
		<!-- Wicked CSS-->
<link rel="stylesheet" href="css/wickedcss.min.css">
<!-- DataTable -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap.min.css">
</head>
<style>
h3.title-w3:before {
    content: "";
    background: #ffc107;
    width: 100px;
    height: 2px;
    position: absolute;
    bottom: -18px;
    left: 503px;
    right: 0;
}    
    
</style>
<body>

    <br><br><br><br>
	<!-- //header -->

	<!-- banner -->
	
	<!-- //banner -->
	<!-- page details -->
	
	<!-- //page details -->

	<!-- contact -->
	<div class="gallery pt-50" >
        <br>
		<div class="container pt-xl-5 pt-lg-3" style="border: 1px solid #ffc107;  
        margin: auto;  
  padding: 20px;
  border-radius: 0px;box-shadow:5px 10px 15px 20px #d9d9d9;">
                        <center><img src="assets/images/logo.png" alt="Best Diamond and Gold Ornament Jeweller in Muradabad" title="Jain Abhushan Bhandar" style="width:250px;height:75px;"></center>
                        
            <h3 style="color:#0f345c !important"; class="title-w3 mb-sm-5 mb-4 text-dark text-center font-weight-bold">Admin Login</h3>
            <form method="post" enctype="multipart/form-data" class="signin_form" >
					
							<div class="form-group d-flex">
								
								<input id="username" class="form-control" type="text" name="username" placeholder="Username" required="">
							</div>
							<div class="form-group d-flex">
								
								<input id="password" class="form-control" type="password" name="password" placeholder="Password" required="">
							</div>
                			<div class="d-flex  justify-content-end">
								<button type="submit" style="background-color: #0f345c !important"; type="submit" class="btn text-white btn-block w-25">Login</button>
							</div>
                        
                </form>
                <br>

                

		</div>
	</div>
	<!-- //gallery -->
	<!-- JavaScript -->
	<script src="js/jquery-2.2.3.min.js"></script>
	<!-- Default-JavaScript-File -->
	<script src="js/bootstrap.js"></script>
	<!-- Necessary-JavaScript-File-For-Bootstrap -->

	<!-- fixed navigation -->
	<script src="js/fixed-nav.js"></script>
	<!-- //fixed navigation -->
	<!-- dropdown smooth -->
	<script>
			
          $("form.signin_form").submit(function(e){
            e.preventDefault();
			console.log("form data");
            var formData=new FormData(this);
			formData.append("action","check");
			console.log(formData);
				var uname = document.getElementById('username').value;
			var pass = document.getElementById('password').value;
			console.log(uname+" "+pass+"<br> ");
			$.ajax({
				type:'POST',
				url:'check_login.php',
				data:formData,
                cache: false,
        		contentType: false,
        		processData: false,
				success:function(data){
					if(data==1){
                        //alert("logged in");
						window.location.href="management.php";
					}
					else if(data==0){
						alert("Oops...Seems username or password is incorrect...");
                    }
                    else{
						alert("Oops...Seems their is some issue...");
					}
				}
			});
          }); 
		  
		</script>
	<!-- //dropdown smooth -->

	<!-- search plugin -->
	<!-- pop-up-box -->
	<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
	<script src="js/jquery.magnific-popup.js"></script>
	<!-- //pop-up-box -->
	<!-- search script -->
	
	<!-- //search script -->
	<!-- //search plugin -->

	<!-- gallery -->
	<script src="js/jquery.picEyes.js"></script>
	<!-- //gallery -->

	<!-- smooth scrolling -->
	<script src="js/SmoothScroll.min.js"></script>
	<!-- move-top -->
	<script src="js/move-top.js"></script>
	<!-- easing -->
	<script src="js/easing.js"></script>
	<!--  necessary snippets for few javascript files -->
	<script src="js/inside.js"></script>

	<script src="js/bootstrap.js"></script>
	<!-- Necessary-JavaScript-File-For-Bootstrap -->
	<!-- //Js files -->


</body>

</html>
