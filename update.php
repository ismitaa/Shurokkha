
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



    <?php include 'connection.php'; 

   $ids=$_GET['id'];

   $showquery=" select * from applicant where id={$ids}";
   $showdata=mysqli_query($conn,$showquery);

   $showresult=mysqli_fetch_array($showdata);


   if(isset($_POST['submit']))
   {
  $vac_name = $_POST['vaccine_name'];
  $vac_date = $_POST['vaccine_date'];
  $card = $_POST['card'];
  $certificate = $_POST['certificate'];

  $sql = "UPDATE applicant SET vaccine_name='".$vac_name."', 
  vaccine_date='".$vac_date."', 
  card='".$card."', 
  certificate='". $certificate."' 
  WHERE id=$showresult[id]";

if(mysqli_query($conn, $sql)){
header('Location: admin_dash.php');


}

}




?>

      <div class="mb-3">
        <label for="fullName"  class="form-label">Vaccine Name:</label>
        <input type="text" name="vaccine_name" class="form-control" id="fullName" placeholder="Vaccine name" value="<?php echo $showresult['vaccine_name']; ?>" id="" required/>
      </div>
      <div class="mb-3">
        <label for="dateOfBirth"  class="form-label">Vaccine Date:</label>
        <input type="date" name="vaccine_date" class="form-control" id="dateOfBirth" value="<?php echo $showresult['vaccine_date']; ?>" id="" required/>
      </div>
      <div class="mb-3">
        <label for="fullName"  class="form-label">Card:</label>
        <input type="files" name="card" class="form-control" id="fullName" placeholder="Card" value="<?php echo $showresult['card']; ?>" id="" required/>
      </div>
      <div class="mb-3">
        <label for="fullName"  class="form-label">Certificate:</label>
        <input type="files" name="certificate" class="form-control" id="fullName" placeholder="certificate" value="<?php echo $showresult['certificate']; ?>" id="" required/>
      </div>
      
      <button type="submit" name="submit" class="btn btn-primary">Update</button>
    </form>
  </div>

  
</body>
</html>
