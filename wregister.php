<?php
include 'connection.php';
if(isset($_POST['register'])){
    $name=$_POST['name']; 
    $worktype=$_POST['worktype'];
    $mobile=$_POST['mobile'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $worker="worker";
    mysqli_query($con,"insert into login(username,password,type)values('$username','$password','$worker')");
    $var= mysqli_insert_id($con);
 $query="INSERT INTO `workers`(`lid`,`name`, `mobile`,`work_type`) VALUES ('$var','$name','$mobile','$worktype')";
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
    <h5 class="card-title text-center pb-0 fs-4">Worker Registration</h5>
  </div>

  <form class="row g-3" method="POST">
    <div class="col-12">
        <input type="text" class="form-control bg-light border-0 px-4" placeholder="Name" name="name" style="height: 55px;" required>
    </div>
    <div class="col-12">
        <input type="text" class="form-control bg-light border-0 px-4" placeholder="Mobile" name="mobile" style="height: 55px;" id="yourmobile" onkeyup="clearerror('mobile')">
        <span id="mobile" style="color:red"></span>
    </div>
    <div class="col-12">
        <input type="text" class="form-control bg-light border-0 px-4" placeholder="Work type" name="worktype" style="height: 55px;" required>
    </div>
    <div class="col-12">
        <input type="text" class="form-control bg-light border-0 px-4" placeholder="Username" name="username" style="height: 55px;" required>
    </div>
    <div class="col-12">
        <input type="text" class="form-control bg-light border-0 px-4" placeholder="Password" name="password" style="height: 55px;" id="yourpassword" onkeyup="clearerror('password')">
        <span id="password" style="color:red"></span>
    </div>
    
    <div class="col-12">
      <button class="btn btn-primary w-100" type="submit" name="register" onclick="return validate()">Register</button>
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

    
    <script >
        function validate(){
            var mbl=document.getElementById("yourmobile").value;
            var pswd=document.getElementById("yourpassword").value;
            if(mbl!=10){
                document.getElementById("mobile").innerHTML="*mobile number should be 10 digits";
                // return false;
            }
        
        if (pswd.match(/[a-z]/g) && pswd.match(
                    /[A-Z]/g) && pswd.match(
                    /[0-9]/g) && pswd.length >= 8){
                        // return false;
                    }
                    else{
                        document.getElementById("password").innerHTML="*password must contain atleast 8 with uppercase,lowercase and numbers";
                        return false;

                        // alert('mismatch password');
                    }
    }
        function clearerror(e){
            document.getElementById(e).innerHTML="";
        }
    </script>
</body>

</html>


