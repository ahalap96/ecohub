
<?php
include 'connection.php';
session_start();
$idd=$_GET['eid'];
$id=$_SESSION['id'];
$query="select * from cart join products on cart.prod_id=products.prod_id where cart.prod_id='$idd'";
$dat = mysqli_query($con,$query);
$row=mysqli_fetch_assoc($dat);
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


    <!-- Blog Start -->
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-8">
                <!-- Blog Detail Start -->
                <div class="mb-5">
                    <div class="row g-5 mb-5">
                        <div class="col-md-6">
                            <img class="img-fluid w-100" src="img/<?php echo $row['image'];?>" alt=""><br><br>
                            <div><form action="">
                              <h4> Quantity </h4><input type="number" value="<?php echo $row['quantity'];?>" style="width:75px">
                              <h5>Rs.<?php echo $row['tprice'];?></h5>
                            </form></div><br>
                           <a class="btn btn-secondary" href="uprdtapproval.php?eid=<?php echo $row['prod_id'];?>">Place order</a>
                        </div>
                        <div class="col-md-6">
                            
                            <!-- <img class="img-fluid w-100" src="img/blog-2.jpg" alt=""> -->
                        </div> 
                    </div>
                </div>
                <!-- Blog Detail End -->

                <!-- Comment List Start -->
                
                <!-- Comment List End -->

                <!-- Comment Form Start -->
                
                <!-- Comment Form End -->
            </div>

            <!-- Sidebar Start -->
            
            <!-- Sidebar End -->
        </div>
    </div>
    <!-- Blog End -->


    <!-- Footer Start -->
    
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