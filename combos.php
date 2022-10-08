<?php include"config.php"; ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Prabhu Priya | Combos</title>
    <!-- web fonts -->
    <link href="//fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <!-- //web fonts -->
    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style-starter.css">
  </head>
    <style>  
  .animate_zoom{
    transition: transform 1s;
  }
  .animate_zoom:hover{
    -ms-transform: scale(1.1); /* IE 9 */
    -webkit-transform: scale(1.1); /* Safari 3-8 */
    transform: scale(1.1); 
  }
  #myImg {
  border-radius: 5px;
  cursor: pointer;
  transition: 0.3s;
}

.box{
  position: relative;
  width: 180px;
  height: 180px;
  display: inline-block;
  border-radius: 8px;
  overflow: hidden;
  margin: 15px;
  border: 2px solid #fff;
}

img{
  width: 100%;
  transition: all linear 0.7s;
}
img.hover-img{
  position: absolute;
  top: 0;
  left: 0;
  opacity: 0;
}
.box:hover img{
  opacity: 0;

}
.box:hover img.hover-img{
  opacity: 1;

}




  </style>

  <body>

  



<?php
  include("header.php");
?>
<section class="w3l-service-breadcrum">
  <div class="breadcrum-bg py-sm-5 py-4">
    <div class="container py-lg-3">
      <h2>Combos</h2>
      <p><a href="index.php">Home</a> &nbsp; / &nbsp;<a href="products.php"> Products </a>&nbsp; / &nbsp; Combos</p>
    </div>
  </div>
</section>
<section class="w3l-features-8">
       <!-- /features -->
           <div class="features py-5" id="services">
			<div class="container py-md-3">
			
			




			
				
					
			   <div class="fea-gd-vv text-center row">
                   
            		   	
				       <?php
                   	$limit = 16;
	// $page = $_GET['page'];
	if(isset($_GET['page'])){
      $page = $_GET['page'];
	}else{
       $page = 1;
	}    
    	
    $offset = ($page - 1)* $limit;
    
    
                   
    				//select category query
$qry =$con->prepare("SELECT id,cat,h1,image,image2 FROM gallery WHERE cat = '12' and deleted_at is null LIMIT {$offset},{$limit}  ");
    			 $qry->execute();
    			 $qry->store_result();
    			 $qry->bind_result($id,$cat,$h1,$image,$image2);
    			 $count = 0;
    			 $cat = 1; // global
    			 if(isset($_GET['cat'])){
    		         $cat = $_GET['cat'];
    		     }
    			 while($qry->fetch()){
    				?>
		
	  <!--      <div class="float-top col-lg-4 col-md-6 animate_zoom">   -->

<!-- <img  src="<?php echo $image; ?>" class=" img-responsive" alt="">
   <img class="hover-img" style="display: none"; src="<?php echo $image2; ?>" class=" img-responsive" alt=""> -->
                

     
              <div style="background-color: white"; class="feature-gd  col-lg-3 col-md-3"> 
                           <div style="margin: 15px"; class="box">
                            <center>     <img style="width: 180px;height: 180px;" src="<?php echo $image; ?>">
      <img style="width: 180px;height: 180px;" class="hover-img" src="<?php echo $image; ?>"></center>
 

    </div>      
          
                  <center>
                    <h3>
                      <a href="#"><?php echo $h1; ?></a> <br>
                      <!--
                      https://api.whatsapp.com/send?phone=+919318316399&text=Hi,I saw this on your website and would like to know more about <?php echo '#'.$id; echo ' name:'.$h1;?> &source=&data=
                      -->
                      <a href="https://api.whatsapp.com/send?phone=+919318316399&text=Hi,I saw this on your website and would like to know more about ProductID: <?php echo $id.", product name: "; echo $h1;?> &source=&data="><i class="fa fa-whatsapp" style="color:golden;font-size:18px !important;"> Send Enquiry</i></a>
                    </h3>
                  </center>
                  </div>





         <!--  </div> -->



          
					
			
					          <?php
    			 }
    			 $qry->close();
                    ?>
					

								</div>
		 				 
		     	</div>  
		    </div>



        
		    
		    <?php


$sql = "SELECT * FROM gallery WHERE cat = '12' and deleted_at is null";

$result = mysqli_query($con,$sql);
if (mysqli_num_rows($result)> 0) {
	$total_records = mysqli_num_rows($result);
	$limit = 16;
	$total_page = ceil($total_records/$limit);
 echo	'<div class="pagination blog-pagination justify-content-center d-flex p-5 mt-10">

  <ul class="pagination">' ;
  if($page > 1){
  	 echo '<li class="page-item"><a class="page-link" href="combos.php?page='.($page - 1).'">Prev</a></li>';
  }
 
  for ($i=1; $i <= $total_page ; $i++) { 
  	if ($i == $page) {
  		$active = "active" ;
  	}else{
  		$active = "" ;
  	}
  echo '<li class=" '.$active.' page-item"><a class="page-link" href="combos.php?page='.$i.' ">'.$i.'</a></li>';
  };

   if($total_page >  $page){
 echo '<li class="page-item"><a class="page-link" href="combos.php?page='.($page + 1).'">Next</a></li>';
  }

echo '</ul>';

}

?>
		    
		    
     
</section>
					



					

<?php
  include('footer.php');
?>
<script src="assets/js/jquery-3.3.1.min.js"></script>
<!-- //footer-28 block -->
</section>
<script>
  $(function () {
    $('.navbar-toggler').click(function () {
      $('body').toggleClass('noscroll');
    })
  });
</script>
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
  integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
  integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
  integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
</script>

<!-- Template JavaScript -->
<script src="assets/js/all.js"></script>
<!-- Smooth scrolling -->
<!-- <script src="assets/js/smoothscroll.js"></script> -->
<script src="assets/js/owl.carousel.js"></script>

<!-- script for -->
<script>
  $(document).ready(function () {
    $('.owl-one').owlCarousel({
      loop: true,
      margin: 0,
      nav: true,
      responsiveClass: true,
      autoplay: false,
      autoplayTimeout: 5000,
      autoplaySpeed: 1000,
      autoplayHoverPause: false,
      responsive: {
        0: {
          items: 1,
          nav: false
        },
        480: {
          items: 1,
          nav: false
        },
        667: {
          items: 1,
          nav: true
        },
        1000: {
          items: 1,
          nav: true
        }
      }
    })
  })
</script>




</body>

</html>
<!-- // grids block 5 -->

