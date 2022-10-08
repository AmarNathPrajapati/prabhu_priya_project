<?php
session_start(); 
    include("config.php");
    if(!isset($_SESSION['isadmin'])){
		header("Location: signin.php");
	}
	
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Prabhu Priya| Product Management</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords" content="Prabhu Priya" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
		
	</script>
	<!-- Sweet Alert-->
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<!-- Optional: include a polyfill for ES6 Promises for IE11 -->
<script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>

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
.page-item.active .page-link {
    z-index: 1;
    color: #fff;
    background-color: #0b2037;
    border-color: #071625;
}
    
</style>


<body>
	<!-- header -->
	<header>
		<!-- navigation -->
		<div class="main-top py-1">
			<nav class="navbar navbar-expand-lg navbar-light fixed-navi">
				<div class="container-fluid">
					<!-- logo -->
					<a class="navbar-brand font-weight-bold" href="index.php">
						<img src="assets/images/logo.png" alt="" title="" style="width:230px;height:60px;">&nbsp;
					</a>
					<!-- //logo -->
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
					 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse text-center" id="navbarSupportedContent">
						<ul class="navbar-nav ml-lg-auto">
						
							<li class="nav-item">
								<a style="background-color:#002245;color:white"; class="reqe-button" onclick="logout()" >Logout</a>
							</li>
							&nbsp;
						</ul>
					</div>
				</div>
			</nav>
		</div>
		<!-- //navigation -->
	</header>
	<!-- //header -->

	<!-- banner -->
	
	<!-- //banner -->
	<!-- page details -->
	
	<!-- //page details -->

	<!-- contact -->
	<div class="gallery pt-5">
		<div class="container pt-xl-5 pt-lg-3" style="border: 2px solid #999999;  
        margin: auto;  
  padding: 20px;
  border-radius: 20px;box-shadow:5px 10px 15px 15px #d9d9d9;">
            <h3 style="color:#0f345c !important"; class="title-w3 mb-sm-5 mb-4 text-dark text-center font-weight-bold ">Product Management</h3>
            <h4>Add Product</h4><br>
            <form method="post" enctype="multipart/form-data" class="contact-wthree gallery_form" >
					<div class="form-group d-flex">
								
						<input id="heading" class="form-control" type="text" placeholder="Heading - This will be visible on website" name="heading" required="">
							</div>
							<div class="form-group d-flex">
								
								<input id="alt" class="form-control" type="text" placeholder="Alt Tag - Write like Best Product-Name" name="alt" required="">
							</div>
							<div class="form-group d-flex">
								
								<input id="title" class="form-control" type="text" placeholder="Title Tag - Just Write Product Name" name="title" required="">
							</div>
							<div class="form-group">
								
								<select class="form-control" id="categories" name="categories">
                                <?php
								//select category query
								$qry =$con->prepare("SELECT id,category FROM category ");
							 //$query->bind_param("i",$qty);
							 $qry->execute();
							 $qry->store_result();
							 $qry->bind_result($id,$category);
							 $count = 0;
							 while($qry->fetch()){
								 $count = $count + 1;
								?>
                                    <option value="<?php echo $id; ?>" <?php if($count == 1) echo 'selected'; ?>><?php echo $category; ?></option>
                                    <?php
							 }
							 $qry->close();
                                ?>
                                </select>
                                
							</div>
							
							<div class="form-group">
								<input class="imgInp" type="file" name="gallery_img" accept="image/*" required>
							</div>
							<div class="d-flex  justify-content-end">
								<button type="submit" style="background-color: #0a1f37 !important" type="submit" class="btn text-white btn-block w-25">Submit</button>
							</div>
                </form>
                <br>
<!--<h4>Add Product Category</h4><br>
                <form method="post" enctype="multipart/form-data" class="contact-wthree ctgry_form" >
					<div class="form-group d-flex">
								
						<input id="ctgry" class="form-control" type="text" placeholder="Product Category" name="ctgry" required="">
							</div>
							<div class="d-flex  justify-content-end">
								<button type="submit" style="background-color: #0a1f37 !important" type="submit" class="btn text-white btn-block w-25">Submit</button>
							</div>
			    </form>
-->
		</div>
	</div>
	<br>
	
	<div class="row" style="padding:20px;">
		<div class="col-md-8 col-lg-8"></div>
	<div class="col-md-4 col-lg-4">
	<form method="get"  >
					<div class="form-group d-flex">
								
						<input id="search" class="form-control" type="text" placeholder="Product Search" name="search" required="">
							</div>
			    </form>
			</div>
			</div>
	
	
<!--	<form name="form" action="" method="get">
  <input type="text" name="search1" id="search1" value="Car Loan">
</form>-->
	<div class="row rm">






                    <div class="table-responsive text-center" style="align:center;margin:40px 25px 20px 25px ;font-size: 15px; background-color: white; padding: 10px 10px;width:100%">
                        <table id="connections" class="table table-hover table-bordered">
                            <thead>
                                <tr>
                                <th class="text-center">#SNo</th>                               	
                                <th class="text-center">#SKU_ID</th>
                                <th class="text-center">Image</th>
                                <th class="text-center">Heading</th>
                                <th class="text-center">Title</th>
                                <th class="text-center">Alt</th>
                                <th class="text-center">Category</th>
                                <th class="text-center">Edit</th>
                                <th class="text-center">Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                            	<?php  

	$limit = 25;
	// $page = $_GET['page'];
	$counter = 0;
	if(isset($_GET['search'])){
    	$search = $_GET['search'];
    }
    else{
    	$search = '';	
    }
	if(isset($_GET['page'])){
    	$page = $_GET['page'];
    	$counter = ($page-1) * 25;
	}else{
    	$page = 1;
		$counter = 0;
	}


	$offset = ($page - 1)* $limit;
	$sku_count = ($page-1) * 25 ;
	$flag = 0;
 $sql ="SELECT g.id,g.image,g.alt,g.title,g.h1,c.category FROM gallery g JOIN category c ON c.id=g.cat where (g.title LIKE '%{$search}%' or g.h1 LIKE '%{$search}%' or g.alt LIKE '%{$search}%' ) and  g.deleted_at is NULL ORDER BY id DESC LIMIT {$offset},{$limit}" ;
$result = mysqli_query($con,$sql);
if (mysqli_num_rows($result)> 0) {
 	

?>
<?php while($row1 = mysqli_fetch_assoc($result)){
	 $counter = $counter + 1;

	 if(($sku_count%25) == 0 && $flag == 0){
	 	$sku_count = ($page-1) * 25 + 1;
	 	$flag = 1;	
	 }
//	 $sku_count = $sku_count + ($page-1) * 25;  ?>
							<tr>
							<td><?php echo $sku_count ; $sku_count++;?></td>
							<td><?php 
								$sku_id = "SKU-".$row1['id'];
							echo $sku_id;?></td>
							<td><img id="img<?php echo $row1['id']; ?>" src='<?php echo $row1['image']; ?>' style="width:180px;height:180px;"></td>
							<td id="heading<?php echo $row1['id']; ?>"><?php echo $row1['h1']; ?></td>
							<td id="title<?php echo $row1['id']; ?>"><?php echo $row1['title']; ?></td>
							<td id="alt<?php echo $row1['id'];?>"><?php echo $row1['alt']; ?></td>
							<td id="cat<?php echo $row1['category']; ?>"><?php echo $row1['category']; ?></td>
	<td><button style="color: white;
    background-color: #0a1f37;
    padding: 3px 23px;" onclick="edit_pdt(<?php echo $row1['id']; ?>)">Edit</button></td>
							<td><button style="color: white;
    background-color: #0a1f37;
    padding: 3px 23px;" onclick="delete_pdt(<?php echo $row1['id']; ?>)">Delete</button></td>
							</tr>
                              
                           <?php } }  ?>
                            </tbody>
                        </table>
                    </div>

                </div>
	<br><br><br>

	
	
	

<?php
	if(isset($_GET['search'])){
    	$search = $_GET['search'];
    }
    else{
    	$search = NULL;	
    }
	$sql = "SELECT * FROM gallery where (title LIKE '%{$search}%' or alt LIKE '%{$search}%' or h1 LIKE '%{$search}%' ) and deleted_at is null";

$result = mysqli_query($con,$sql);
if (mysqli_num_rows($result)> 0) {
	$total_records = mysqli_num_rows($result);
	$limit = 25;
	$total_page = ceil($total_records/$limit);
 echo	'<div class="pagination blog-pagination justify-content-center d-flex p-5 mt-10">

  <ul class="pagination">' ;
  if($page > 1){
  	 echo '<li class="page-item"><a class="page-link" href="management.php?page='.($page - 1).'&search='.$search.'">Prev</a></li>';
  }
 
  for ($i=1; $i <= $total_page ; $i++) { 
  	if ($i == $page) {
  		$active = "active" ;
  	}else{
  		$active = "" ;
  	}
  echo '<li class=" '.$active.' page-item"><a class="page-link" href="management.php?page='.$i.'&search='.$search.'">'.$i.'</a></li>';
  };

   if($total_page >  $page){
 echo '<li class="page-item"><a class="page-link" href="management.php?page='.($page + 1).'&search='.$search.'">Next</a></li>';
  }

echo '</ul>';

}

?>




				<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    
	
	<div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit Advertisement</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <form class="d-sm-inline-block form-inline mr-auto ml-md-3 mr-md-3 my-2 my-md-0 navbar-search" id="edit_ad_form">
        <div class="modal-body">
            <input type="text" id="update_pdt_id" name="update_pdt_id" hidden>                
            <div class="input-group">
                    <label>Product Heading </label>&nbsp;&nbsp;          
                    <input type="text" id="pdt_heading" name="pdt_heading" placeholder="For example: Gold Necklace" class="form-control bg-light border-0 small" aria-label="Customer Name" aria-describedby="basic-addon2">                              
                </div><br>
              <div class="input-group">
                  <label>Pdt Image</label>                
                  <input type="file" id="new_adv_file" name="new_adv_file" class="form-control-file small border-0 custom-file-input">
                  <label class="custom-file-label" for="new_adv_file">Choose file</label>
                  <div class="mt-3 text-center" style="margin-bottom: -10px;">
                    <img src="" id="ad_img_edit_preview" class="img-responsive" style="width: 80%;">
                  </div>                              
              </div>
              <br>
              <div class="input-group">        
			                      
                  <label>Pdt Title</label> &nbsp;<br>
				  <input type="text" id="pdt_title" name="pdt_title" placeholder="For example: Gold Necklace" class="form-control bg-light border-0 small" aria-label="Customer Name" aria-describedby="basic-addon2">                              
              </div>
              <br>
              <div class="input-group">        
			                      
                  <label>Pdt Alt</label> &nbsp;<br>
				  <input type="text" id="pdt_alt" name="pdt_alt" placeholder="For example: Gold Necklace" class="form-control bg-light border-0 small" aria-label="Customer Name" aria-describedby="basic-addon2">                              
              </div><br>
              <div class="input-group">        
			                      
                  <label>Current Pdt Category</label> &nbsp;<br>
                  <input type="text" id="ctggry" hidden>
                    <select class="form-control" id="categories" name="categories">
                                <?php
								//select category query
								$qry1 =$con->prepare("SELECT id,category FROM category ");
							 //$query->bind_param("i",$qty);
							 $qry1->execute();
							 $qry1->store_result();
							 $qry1->bind_result($id,$category);
							 $count = 0;
							 while($qry1->fetch()){
								 $count = $count + 1;
								?>
                                    <option value="<?php echo $id; ?>" <?php if($count == 1) echo 'selected'; ?>><?php echo $category; ?></option>
                                    <?php
							 }
							 $qry1->close();
                                ?>
                    </select>
              </div>
        </div>



        
        
        

        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <!-- Number passed in the function denotes which advertisement was requested for edit-->
          <button type="submit" class="btn btn-primary" style="color:white;">Save</a>
        </div>
        </form> 
      </div>
    </div>
  </div>
  <!-- Delete Modal-->

  <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Are you sure you want to remove this?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-footer">
          <input type="text" id="remove_ad_id" hidden>
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" onclick="remove_ad()" style="color:white;">Remove</a>
        </div>
      </div>
    </div>
  </div>

  <!-- End Delete Modal-->
  <!-- Logout Modal -->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Are you sure you want to Logout?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">No</button>
          <a class="btn btn-primary" href="logout.php" style="color:white;">Yes</a>
        </div>
      </div>
    </div>
  </div>
<!-- Logout Modal Ends-->

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
			function test_swal(){
			    Swal.fire('Any fool can use a computer');
			}
          $("form.gallery_form").submit(function(e){
            e.preventDefault();
			var formData=new FormData(this);
			formData.append("action","add product");
			console.log(formData);
			$.ajax({
				type:'POST',
				url:'adv_actions.php',
				data:formData,
				cache: false,
        		contentType: false,
        		processData: false,
				success:function(data){
					$("form.gallery_form").trigger("reset");
					if(data==1){
					    Swal.fire('Product Added Successfully.');
//						alert("Product Added Successfully.");
						window.location.reload();
					}
					else{
					    Swal.fire('Oops...Seems their is some issue.');
//						alert("Oops...Seems their is some issue.");
					}
				}
			});
          }); 
          $("form.ctgry_form").submit(function(e){
               e.preventDefault();
			var formData1=new FormData(this);
			formData1.append("action","add_ctgry");
			//console.log(formData1);
			$.ajax({
				type:'POST',
				url:'adv_actions.php',
				data:formData1,
				cache: false,
        		contentType: false,
        		processData: false,
				success:function(data){
					$("form.ctgry_form").trigger("reset");
					if(data==1){
					    Swal.fire('Product Category Added Successfully.');
//						alert("Product Added Successfully.");
						window.location.reload();
					}
					else{
					    Swal.fire('Oops...Seems their is some issue.'+data);
//						alert("Oops...Seems their is some issue.");
					}
				}
			});
          });
		  $("#edit_ad_form").submit(function(e){
			e.preventDefault();
			console.log("editing");
			var pdt_id=$("#update_pdt_id").val();
			var formData=new FormData(this);
			formData.append("id",pdt_id);
			formData.append("action","update pdt");
			$.ajax({
				type:"POST",
				url:"adv_actions.php",
				data: formData,
        cache: false,
        contentType: false,
        processData: false,
		success: function(data){
          console.log(data);
          if(data == 1){
              Swal.fire('Product Details Updated Successfully.');
//            alert('Product Details Updated Successfully.');
            location.reload();
          } else {
            Swal.fire('Oops...Seems their is some issue.');
            //alert('Error: Uncaught Exception Error.');
            return false;
          }
		}
			})
		  });

		  function logout(){
			$("#logoutModal").modal('show');
		  }

		  function logout_user(){

		  }
		  function delete_pdt(id){
			$("#remove_ad_id").val(id);
			$("#deleteModal").modal('show');
		  }
		  
		  function remove_ad(){
			var id = $("#remove_ad_id").val();
			$.ajax({
				type:'POST',
				url:'adv_actions.php',
				data:{action:"delete_pdt",id},
				success:function(data){
					if(data==1){
					    Swal.fire('Product Deleted Successfully.');
						//alert("Product Deleted Successfully.");
						window.location.reload();
						//console.log("1");
					}
					else{
					    Swal.fire('Oops...Seems their is some issue.');
//						alert("Oops...Seems their is some issue.");
						//console.log("Error");
					}
				}
			});

		  }
		  function edit_pdt(id){
		console.log("spring");

			var title=document.getElementById("title"+id).innerText;
			console.log(title);
      var img_src=document.getElementById("img"+id).src;

	  var alt=document.getElementById("alt"+id).innerText;
	  var h1=document.getElementById("heading"+id).innerText;

	  console.log(img_src);
	    console.log(alt);
	      console.log(h1);

//	  var cat=document.getElementById("cat"+id).innerText;
document.getElementById("pdt_title").value=title;
document.getElementById("pdt_alt").value=alt;
document.getElementById("pdt_heading").value=h1;
document.getElementById("ad_img_edit_preview").src=img_src;
document.getElementById("pdt_heading").value=h1;
//document.getElementById("ctggry").value=cat;

			$("#update_pdt_id").val(id);
			$("#editModal").modal("show");
		  }

		  
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





