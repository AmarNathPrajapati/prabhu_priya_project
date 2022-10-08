    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicon-32x32.png">
    <link rel="icon"type="image/png" sizes="16x16" href="assets/images/favicon-16x16.png">
    <link rel="manifest" href="assets/images/site.webmanifest">


<style>


.marq {
    background-color: #181c39;
    color: white;
}

.w3l-about-breadcrum .breadcrum-bg p a {
    font-size: 16px;
    color: var(--primary-color);
    text-decoration: none !important;
}
.w3l-service-breadcrum .breadcrum-bg p a {
    text-decoration: none !important;
    font-size: 16px;
    color: var(--primary-color);
}
.w3l-contact-breadcrum .breadcrum-bg p a {
    font-size: 16px;
    color: var(--primary-color);
    text-decoration: none !important;
}

.whatsapp {
    right: 15px;
    position: fixed;
    z-index: 99;
    font-size: 21px;
    cursor: pointer;
    color: #000000;
    bottom: 75px;
    width: 64px;
    height: 64px;
    line-height: 62px;
    border-width: initial;
    border-style: none;
    text-align: center;
    border-color: initial;
    -o-border-image: initial;
    border-image: initial;
    outline: none;
    background: #56fd00;
    padding: 0px;
    border-radius: 4px;
    transition: all 0.5s ease-out 0s;
    border-radius: 40px;
}

</style>


<!-- <?php 
//include("config.php");
  
$output = '' ;

if (isset($_POST['search'])) {
  $searchq = $_POST['search'] ;
  $searchq = preg_replace("#[^0-9a-z]#i","",$searchq);


$query = mysqli_query("SELECT * FROM gallery WHERE h1 LIKE '%$searchq%' OR cat LIKE
 '%$searchq%' ");
$count = mysqli_num_rows($con,$query);
if ($count == 0) {
  $output = 'nothing to show' ;
}else{
  while ($row = mysql_fetch_array($query)) {
    $name = $row['h1'];
    $id = $row['cat'];

    $output .= '<div>'.$name.' '.$id.'</div>' ;
  }
}

}
?> -->


<section class="w3l-top-menu-1">
	<div class="top-hd">
		<div class="container">
	
	<header class="row top-menu-top">
	
		<div class="accounts col-md-9 col-6">
				<li class="top_li"><span class="fa fa-phone"></span><a href="tel:+919318316399">+91-93183-16399</a> </li>
				<li class="top_li1"><span class="fa fa-envelope-o"></span> <a href="mailto:feedbackprabhupriya@gmail.com" class="mail"> feedbackprabhupriya@gmail.com</a>	</li>
		</div>
		<div class="social-top col-md-3 col-6">
      <p style="color:white;"> Free Delivery across India... </p>
		</div>
		
	</header>
	
</div>
</div>
<!--	<marquee class="marq"  behavior="scroll" direction="left" scrollamount="30">Prabhu Priya</marquee>-->
</section>
<!-- //Top Menu 1 -->
<section class="w3l-bootstrap-header">
  <nav class="navbar navbar-expand-lg navbar-light py-lg-2 py-2">
    <div class="container">
<!--      <a class="navbar-brand" href="index.php"><span class="fa fa-pencil-square-o "></span> Mastery</a>-->
    <a class="navbar-brand" href="index.php">
        <img src="assets/images/logo.png" alt="Your logo" title="Your logo" style="height:35px;" />
    </a> 
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon fa fa-bars"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php">About</a>
          </li>
            <li class="nav-item">
            <a class="nav-link" href="products.php">Products</a>
          </li>
            <li class="nav-item">
            <a class="nav-link" href="request-sample.php">Request Samples</a>
          </li>  
          <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact</a>
          </li>
            <li class="nav-item">
            <a class="nav-link" target="_blank" href="https://www.amazon.in/s?me=A1BSNVF4L0NXOV&marketplaceID=A21TJRUUN4KGV"><img src="assets/images/amazon.png" style="width:24px;height:24px;"> Buy On Amazon</a>
          </li>
        </ul>

<!-- 

        <form action="pooja-samagri.php" method="post" class="form-inline position-relative my-2 my-lg-0">
          <input class="form-control search" type="search" name="search" placeholder="Search here..." aria-label="Search" required="">
          <button class="btn btn-search position-absolute" type="submit"><span class="fa fa-search" aria-hidden="true"></span></button>
        </form>

 -->


      </div>
    </div>
  </nav>
</section>

 <h3>
                 
                      <a class="whatsapp" target="_blank" href="https://api.whatsapp.com/send?phone=+919318316399&text=Hello Team Prabhu Priya, I was checking products on your website and would like to know more about it. &source=&data="><i class="fa fa-whatsapp" style="color:golden;font-size:26px !important;"></i></a>
                    </h3>
