<?php
session_start();
include 'connection.php';
if(isset($_POST['add'])){
    $worktype=$_POST['type'];
    $count=$_POST['count'];
    $image=$_FILES['image']['name'];
if($image!=""){
  $file=pathinfo($_FILES['image']['name']);
  $file1=rand();
  $file_ext=$file["extension"];
  $filenew=$file1.".".$file_ext;
  move_uploaded_file($_FILES['image']['tmp_name'],"img/".$filenew);
}
$id=$_SESSION['id'];
$query="INSERT INTO `work`( `lid`, `work_type`, `count`, `image`) VALUES ('$id','$worktype','$count','$filenew')";
mysqli_query($con,$query);
}
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
    
    <!-- Topbar End -->


    <!-- Navbar Start -->
  
    <!-- Navbar End -->


    <!-- Carousel Start -->
 
    <!-- Carousel End -->


    <!-- Banner Start -->
  
    <!-- Banner Start -->


    <!-- About Start -->
    
    <!-- About End -->


    <!-- Facts Start -->
 
    <!-- Facts End -->
    

    <!-- Services Start -->
   
    <!-- Services End -->


    <!-- Features Start -->
 
    <!-- Features Start -->


    <!-- Products Start -->
   
    <!-- Products End -->


    <!-- Testimonial Start -->
  
    <!-- Testimonial End -->


    <!-- Team Start -->
   
    <!-- Team End -->


    <!-- Blog Start -->
   
    <!-- Blog End -->
    

    <!-- Footer Start -->
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

    <div class="card mb-3">

<div class="card-body bg-secondary">

  <div class="pt-4 pb-2">
    <h5 class="card-title text-center pb-0 fs-4">Add works</h5>
  </div>

  <form class="row g-3" method="POST" enctype="multipart/form-data">
    <div class="col-12">
        <input type="text" class="form-control bg-light border-0 px-4" placeholder="work type" name="type" style="height: 55px;" required>
    </div>
    <div class="col-12">
        <input type="text" class="form-control bg-light border-0 px-4" placeholder="count" name="count" style="height: 55px;" required>
    </div>
    <div class="col-12">
        <input type="file" class="form-control bg-light border-0 px-4" placeholder="image" name="image" style="height: 55px;" required>
    </div>
    
    
    <div class="col-12">
      <button class="btn btn-primary w-100" type="submit" name="add">Add</button>
    </div>
    
  </form>

</div>
</div>
</div>
</div>
</div>
</section>
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


