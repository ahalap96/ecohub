<?php
include 'connection.php';
//$query="select * from products where status='1'";
$query="select * from products join rating on products.prod_id=rating.prod_id where products.status='1'";
$dat = mysqli_query($con,$query);
$qry="select * from products where status='1'";
$data=mysqli_query($con,$qry);
$rate="select * from products join rating on products.prod_id=rating.prod_id where rating.rating>='4'";
$rt=mysqli_query($con,$rate);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>FarmFresh - Organic Farm Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid px-5 d-none d-lg-block">
        <div class="row gx-5 py-3 align-items-center">
            <div class="col-lg-3">
                <div class="d-flex align-items-center justify-content-start">
                    <i class="bi bi-phone-vibrate fs-1 text-primary me-2"></i>
                    <h2 class="mb-0">+012 345 6789</h2>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="d-flex align-items-center justify-content-center">
                    <a href="index.html" class="navbar-brand ms-lg-5">
                        <h1 class="m-0 display-4 text-primary"><span class="text-secondary">Eco</span>Hub</h1>
                    </a>
                </div>
            </div>
            <!-- <div class="col-lg-3">
                <div class="d-flex align-items-center justify-content-end">
                    <a class="btn btn-primary btn-square rounded-circle me-2" href="#"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-primary btn-square rounded-circle me-2" href="#"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-primary btn-square rounded-circle me-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-primary btn-square rounded-circle" href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div> -->
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <?php
      include 'uhead.php';
   ?>
    <!-- Navbar End -->


    <!-- Hero Start -->
   
    <!-- Hero End -->


    <!-- Products Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="mx-auto text-center mb-5" style="max-width: 500px;">
                <h6 class="text-primary text-uppercase">Recently Added</h6>
                <h1 class="display-5">Our Fresh & Organic Products</h1>
            </div>
            <div class="owl-carousel product-carousel px-5">
                
                <?php
                            while($row = mysqli_fetch_assoc($dat)){
                            
                        ?>
                        <div class="pb-5">
                    <div class="product-item position-relative bg-white d-flex flex-column text-center">
                        <img class="img-fluid mb-4" src="img/<?php echo $row['image'];?>" alt="">
                        <a href="addcart.php?eid=<?php echo $row['prod_id'];?>"><h6 class="mb-3"><?php echo $row['prod_name'];?></h6></a>
                        <h5 class="text-primary mb-0"><?php echo $row['Quantity'];?></h5>
                        <h5 class="text-primary mb-0">Rs.<?php echo $row['price'];?></h5>
                        <h5 class="text-primary mb-0"><?php echo $row['categories'];?></h5>
                        <?php
                        if($row['rating']=='5'){
                            ?>
                            <img src="img\5star.png" alt="">
                        <?php
                        }
                        ?>
                        <?php
                        if($row['rating']=='4'){
                            ?>
                            <img src="img\4star.png" alt="">
                        <?php
                        }
                        ?>
                        <?php
                         if($row['rating']=='3'){
                            ?>
                            <img src="img\3star.png" alt="" height="100px">
                        <?php
                        }
                        ?>
                         <?php
                         if($row['rating']=='2'){
                            ?>
                            <img src="img\2star.png" alt="" height="50px">
                        <?php
                        }
                        ?>
                         <?php
                         if($row['rating']=='1'){
                            ?>
                            <img src="img\1star.png" alt="" height="50px">
                        <?php
                        }
                        ?>
                        
                        <div class="btn-action d-flex justify-content-center">
                            
                         </div> 
                         
                    </div>
                    
                </div>
                <?php
                            }
                 ?>
            </div>
        </div>
    </div>
    <!-- Products End -->
     <div class="container-fluid py-5">
        <div class="container">
            <div class="mx-auto text-center mb-5" style="max-width: 500px;">
                <h6 class="text-primary text-uppercase"></h6>
                <h1 class="display-5">Top Ratings</h1>
            </div>
            <div class="owl-carousel product-carousel px-5">
                
                <?php
                            while($rw = mysqli_fetch_assoc($rt)){
                            
                        ?>
                        <div class="pb-5">
                    <div class="product-item position-relative bg-white d-flex flex-column text-center">
                        <img class="img-fluid mb-4" src="img/<?php echo $rw['image'];?>" alt="">
                        <a href=""><h6 class="mb-3"><?php echo $rw['prod_name'];?></h6></a>
                        <h5 class="text-primary mb-0"><?php echo $rw['Quantity'];?></h5>
                        <h5 class="text-primary mb-0">Rs.<?php echo $rw['price'];?></h5>
                        <h5 class="text-primary mb-0"><?php echo $rw['categories'];?></h5>
                        <?php
                        if($rw['rating']=='5'){
                            ?>
                            <img src="img\5star.png" alt="">
                        <?php
                        }
                        ?>
                        <?php
                        if($rw['rating']=='4'){
                            ?>
                            <img src="img\4star.png" alt="">
                        <?php
                        }
                        ?>
                        
                        
                        <div class="btn-action d-flex justify-content-center">
                         </div> 
                         
                    </div>
                    
                </div>
                <?php
                            }
                 ?>
                
                
            </div>
        </div>
    </div>

    <!-- Features Start -->
      <div class="container-fluid py-5">
        <div class="container">
            <div class="mx-auto text-center mb-5" style="max-width: 500px;">
                <h6 class="text-primary text-uppercase"></h6>
                <h1 class="display-5">All Products</h1>
            </div>
            <div class="owl-carousel product-carousel px-5">
                
                <?php
                            while($r = mysqli_fetch_assoc($data)){
                            
                        ?>
                        <div class="pb-5">
                    <div class="product-item position-relative bg-white d-flex flex-column text-center">
                        <img class="img-fluid mb-4" src="img/<?php echo $r['image'];?>" alt="">
                        <a href=""><h6 class="mb-3"><?php echo $r['prod_name'];?></h6></a>
                        <h5 class="text-primary mb-0"><?php echo $r['Quantity'];?></h5>
                        <h5 class="text-primary mb-0">Rs.<?php echo $r['price'];?></h5>
                        <h5 class="text-primary mb-0"><?php echo $r['categories'];?></h5>
                        
                        
                        
                        
                        <div class="btn-action d-flex justify-content-center">
                         </div> 
                         
                    </div>
                    
                </div>
                <?php
                            }
                 ?>
                
                
            </div>
        </div>
    </div>
    
    <!-- Features Start -->
    

    <!-- Footer Start -->
    <div class="container-fluid bg-footer bg-primary text-white mt-5">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-8 col-md-6">
                    <div class="row gx-5">
                        <div class="col-lg-4 col-md-12 pt-5 mb-5">
                            <h4 class="text-white mb-4">Get In Touch</h4>
                            <div class="d-flex mb-2">
                                <i class="bi bi-geo-alt text-white me-2"></i>
                                <p class="text-white mb-0">123 Street, New York, USA</p>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-envelope-open text-white me-2"></i>
                                <p class="text-white mb-0">info@example.com</p>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-telephone text-white me-2"></i>
                                <p class="text-white mb-0">+012 345 67890</p>
                            </div>
                            <div class="d-flex mt-4">
                                <a class="btn btn-secondary btn-square rounded-circle me-2" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-secondary btn-square rounded-circle me-2" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-secondary btn-square rounded-circle me-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a class="btn btn-secondary btn-square rounded-circle" href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                            <h4 class="text-white mb-4">Quick Links</h4>
                            <div class="d-flex flex-column justify-content-start">
                                <a class="text-white mb-2" href="#"><i class="bi bi-arrow-right text-white me-2"></i>Home</a>
                                <a class="text-white mb-2" href="#"><i class="bi bi-arrow-right text-white me-2"></i>About Us</a>
                                <a class="text-white mb-2" href="#"><i class="bi bi-arrow-right text-white me-2"></i>Our Services</a>
                                <a class="text-white mb-2" href="#"><i class="bi bi-arrow-right text-white me-2"></i>Meet The Team</a>
                                <a class="text-white mb-2" href="#"><i class="bi bi-arrow-right text-white me-2"></i>Latest Blog</a>
                                <a class="text-white" href="#"><i class="bi bi-arrow-right text-white me-2"></i>Contact Us</a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                            <h4 class="text-white mb-4">Popular Links</h4>
                            <div class="d-flex flex-column justify-content-start">
                                <a class="text-white mb-2" href="#"><i class="bi bi-arrow-right text-white me-2"></i>Home</a>
                                <a class="text-white mb-2" href="#"><i class="bi bi-arrow-right text-white me-2"></i>About Us</a>
                                <a class="text-white mb-2" href="#"><i class="bi bi-arrow-right text-white me-2"></i>Our Services</a>
                                <a class="text-white mb-2" href="#"><i class="bi bi-arrow-right text-white me-2"></i>Meet The Team</a>
                                <a class="text-white mb-2" href="#"><i class="bi bi-arrow-right text-white me-2"></i>Latest Blog</a>
                                <a class="text-white" href="#"><i class="bi bi-arrow-right text-white me-2"></i>Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-secondary py-3 fs-4 back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>