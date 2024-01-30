<?php include 'connection.php'; 
if(isset($_POST['submit'])){
  $name = $_POST["name"];
  $nid = $_POST["nid"];
  $number = $_POST["number"];
  $pass = $_POST["pass"];
  $cpass = $_POST["cpass"];
  $category = $_POST["category"];
  $division = $_POST["division"];
  $center = $_POST["center"];
  $gender = $_POST["gender"];
  $birth_date = $_POST["birthdate"];

  if($pass == $cpass){
    $sql = "INSERT INTO applicant (full_name,phone, nid, password, category,division, center,gender, date_of_birth)
    VALUES 
    ('".$name."','".$nid."', '".$number."', '".md5($pass)."', '".$category."' , '".$division."' , '".$center."' , '".$gender."','".$birth_date."')";
    if(mysqli_query($conn, $sql)){
        header('Location: dash.php');
    }
}
else {
    echo 'Password Mismatch';
}

}




?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>সুরক্ষা : কোভিড-১৯ ভ্যাকসিনের জন্য নিবন্ধন করুন</title>
  <!-- Link to Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
  <style>
    .navbar{
    overflow: hidden;
    background: #fff;
    margin-top: -10px;
}


header .container label img {
    width: 220px; /* Adjust the width according to your image size */
    height: 80px; /* This ensures the aspect ratio is maintained */
    margin-bottom: 2px; /* Add some spacing between the image and the text */
    padding: 15px 10% 5px;
}
nav{
    
    width: 100%;
    background: #ffffff;
    position: top;
    left:0;
    right:0;
    top:0;
}
nav .logo{
    width: 20px;
    cursor: pointer;
}

nav ul{
    float: right;
    margin-right: 40px;
    align-items: center;
}
nav ul li{
    display: inline-block;
    margin: 5px 0px;
    line-height: 70px;
}
nav ul li a{
    color: #000000;
    font-size: 18px;
    border: 1px solid transparent;
    padding: 8px 22px;
    border-radius: 3px;
    transition: ease .40s;
    
}
nav ul li a.active ,a:hover{
border: 1px solid rgb(12, 19, 114);
background-color: rgb(199, 230, 219);
transition: .4s;
}
  </style>
</head>
<body>
  <header>
    <div class="container">
      <!-- Navigation bar -->
      <nav class="navbar">
        <label>
        <img src="image/logo.png" class="logo">
      </label>
        <ul>
        <li><a class="active" href="index.php">Home</a></li>
        <li><a href="#">Registration</a></li>
        <li><a href="login.php">Login</a></li>
        <li><a href="#">Certificate</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <div class="container">
    <h1 class="mt-5">Registration Form</h1>
    <form action="" method="post">
      <div class="mb-3">
        <label for="fullName"  class="form-label">Full Name:</label>
        <input type="text" name="name" class="form-control" id="fullName" placeholder="Enter your full name" required>
      </div>
      <div class="mb-3">
        <label for="id"  class="form-label">National Identity Card Number:</label>
        <input type="id" name="nid" class="form-control" id="id" placeholder="Example- 19825624603112948" required>
      </div>
      <div class="mb-3">
        <label for="number"  class="form-label">Phone Number:</label>
        <input type="text" name="number" class="form-control" id="number" placeholder="Enter your Number" required>
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Password:</label>
        <input type="password" name="pass" class="form-control" id="password" placeholder="Enter your password" required>
      </div>
      <div class="mb-3">
        <label for="cpass" class="form-label">Confirm Password:</label>
        <input type="password" name="cpass" class="form-control" id="confirmPassword" placeholder="Confirm your password" required>
      </div>

      

      <div class="mb-3">
        <label class="form-label" for="selecttype">Select type:</label>
        <select class="form-select" name="category" id="selecttype" required>
          <option value="" disabled selected>Select type:</option>
          <option value="Citizen Registration (18 years & above)">Citizen Registration (18 years & above)</option>
          <option value="Foreign nationals">Foreign nationals</option>
          <option value="All officers and employees of the government health and family planning department">All officers and employees of the government health and family planning department </option>
          <option value="Approved private health and family planning officers-employees">Approved private health and family planning officers-employees</option>
          <option value="Bangladeshi Students">Bangladeshi Students</option>
          <option value="Bangladeshi workers">Bangladeshi workers</option>
          <option value="Military and paramilitary defense forces">Military and paramilitary defense forces</option>
          <option value="Civilian Aircraft">Civilian Aircraft</option>
          <option value="Essential Offices for governance the state">Essential Offices for governance the state</option>
          <option value="Bar Council Register Attorney">Bar Council Register Attorney</option>
          <option value="Educational Institutions">Educational Institutions</option>
          <option value="Front-line media workers">Front-line media workers</option>
          <option value="Elected Public representative">Elected Public representative</option>
          <option value="Front-line officers and employees of City Corporation and the municipality">Front-line officers and employees of City Corporation and the municipality</option>
          <option value="Religious Representative (of all religions)">Religious Representative (of all religions)</option>
          <option value="Engaged in burial">Engaged in burial</option>
          <option value="Government officials and employees at the forefront of emergency">Government officials and employees at the forefront of emergency </option>
          <option value="Electricity,water,gas,sewerage and fire services">Electricity,water,gas,sewerage and fire services</option>
          <option value="Government officials and employees of railway stations,airports,land ports and seaports">Government officials and employees of railway stations,airports,land ports and seaports</option>
          <option value="Government officials and employees Involved in emergency public service in districts and upazilas">Government officials and employees Involved in emergency public service in districts and upazilas</option>
          <option value="Bank officer-employee">Bank officer-employee</option>
          <option value="Farmer">Farmer</option>
          <option value="Workers">Workers </option>
          <option value="cat24">National players</option>
          <option value="Students in medical education related subjects">Students in medical education related subjects</option>
          <option value="Student 18 years and above">Student 18 years and above </option>
          <option value="Person with disability">Person with disability</option>
        </select>
      </div>

      <div class="mb-3">
        <label class="form-label" for="selecttype">Division :</label>
        <select class="form-select" name="division" id="selecttype" required>
          <option value="" disabled selected>Select division:</option>
          <option value="Chittagong">Chittagong</option>
          <option value="Dhaka">Dhaka</option>
          <option value="Sylhet">Sylhet</option>
          <option value="Mymensingh">Mymensingh</option>
          <option value="Khulna">Khulna</option>
          <option value="Rajshahi">Rajshahi</option>
          <option value="Rangpur">Rangpur</option>
          <option value="Barishal">Barishal</option>
        </select>
      </div>
      <div class="mb-3">
        <label class="form-label" for="selecttype">Center :</label>
        <select class="form-select" name="center" id="selecttype" required>
          <option value="" disabled selected>Select center:</option>
          <option value="med1">Shahid Suhrawardy Medical College Hospital</option>
          <option value="Dhaka Medical College Hospital">Dhaka Medical College Hospital</option>
          <option value="Chittagong Medical College Hospital">Chittagong Medical College Hospital</option>
          <option value="med4">Rajshahi Medical College Hospital</option>
          <option value="med5">MAG osmani Medical College, Sylhet, Bangladesh</option>
          <option value="med6">Sher-e-Bangla Medical College Hospital (SBMC)</option>
          <option value="med7">Mymensingh Medical College Hospital</option>
          <option value="med8">Rangpur Medical College Hospital</option>
          <option value="med9">Shahid Ziaur Rahman Medical College Hospital</option>
          <option value="med10">Comilla Medical College Hospital</option>
          <option value="med11">Khulna Medical College Hospital</option>
          <option value="med12">Faridpur Medical College Hospital</option>
          <option value="med13">Dinajpur Medical College Hospital</option>
          <option value="med14">Noakhali Medical College</option>
          <option value="med15">Barguna District Hospital</option>
          <option value="med16">Jhalokathi District Hospital</option>
          <option value="med17">Bhola District Hospital</option>
          <option value="med18">Pirojpur District Hospital</option>
          <option value="med19">Patuakhali 250 bed Sadar Hospital</option>
          <option value="med20">Cox's Bazar 250 Bed District Sadar Hospital</option>
          <option value="med21">Gopalganj 250 bed General Hospital</option>
          <option value="med22">Kishoreganj 250 Bed District Sadar Hospital </option>
          <option value="med23"> Narsingdi District Hospital</option>
          <option value="med24">Jessore 250 bed General Hospital</option>
          <option value="med25">Jhenaidah District Hospital</option>
          <option value="med26">Nilphamari District Hospital</option>
          <option value="med27">Habiganj District Hospita</option>
        </select>
      </div>
      <div class="mb-3">
        <label class="form-label" name="gender">Gender</label>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="gender" id="male" value="Male" required>
          <label class="form-check-label" for="male">Male</label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="gender" id="female" value="Female" required>
          <label class="form-check-label" for="female">Female</label>
        </div>
      </div>
      <div class="mb-3">
        <label for="dateOfBirth"  class="form-label">Date of birth (according to national identity card):</label>
        <input type="date" name="birthdate" class="form-control" id="dateOfBirth" required>
      </div>
      <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="agreeTerms" required>
        <label class="form-check-label" name="agree" for="agreeTerms">I agree to the terms and conditions</label>
      </div>
      <button type="submit" name="submit" class="btn btn-primary">Register</button>
    </form>
  </div>

  
</body>
</html>
