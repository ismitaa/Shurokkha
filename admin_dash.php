

<!DOCTYPE html>
<html>
<head>
	<title></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
      *{margin: 0; padding: 0; box-sizing: border-box;
    font-family: sans-serif;}
    .main-div{
        width: 100%;
    height: 100vh;
    display: flex;
  align-items: center;
  flex-direction: column;
  justify-content: center;
    }
    .center-div{
        position: relative;
    width: 90%;
    height: 80vh;
    background: -webkit-linear-gradient(left, #5DADE2, #00c6ff);
    padding: 20px 0 0 0;
    box-shadow: 0 10px 20px 0 rgba(0,0,0,.03);
    border-radius: 10px;
    }
    h1{
        font-size: 18px;
        color: #000;
        text-align: center;
        margin-top: -20px;
        margin-bottom: 20px;
    }
    table{
        border-collapse: collapse;
        background-color: #fff;
        box-shadow: 0 10px 20px 0 rgba(0,0,0,.03);
        border-radius: 10px;
        margin: auto;
    }
    th,td{
        border: 1px solid #f2f2f2;
        padding: 8px 30px;
        text-align: center;
        color: gray;
    }
    th{
        text-transform: uppercase;
        font-weight: 500;
    }
    td{
        font-size: 13px;
    }
    .fa{
        font-size: 18px;
    }
    .fa-edit{
        color: #63c76a;
    }
    .fa-edit{
        color: #ff0000;
    }
    a{
        text-decoration: none; display: flex;
        justify-content: center;
        text-align: center;
    }

    </style>
</head>
<body>
 <div class="main-div">
   <h1>Vaccine Applicants</h1>
   <div class="center-div">
        <div class="table-responsive">
            <table>
               <thead>
                 <tr>
                    <th>ID</th>
                    <th>Full Name</th>
                    <th>NID</th>
                    <th>Phone</th>
                    <th>Division</th>
                    <th>Center</th>
                    <th>Vaccine Name</th>
                    <th>Vaccine Date</th>
                    <th>Card</th>
                    <th>Certificate</th>
                    <th colspan="2">Operation</th>
                 </tr>
               </thead>
               <tbody>

               <?php
include 'connection.php';

$sql = "select * from applicant ";
$query=mysqli_query($conn,$sql);
$nums=mysqli_num_rows($query);

while($result=mysqli_fetch_array($query)){
    ?>
    <tr>
    <td><?php echo $result['id']; ?></td>
    <td><?php echo $result['full_name']; ?></td>
    <td><?php echo $result['nid']; ?></td>
    <td><?php echo $result['phone']; ?></td>
    <td><?php echo $result['division']; ?></td>
    <td><?php echo $result['center']; ?></td>
    <td><?php echo $result['vaccine_name']; ?></td>
    <td><?php echo $result['vaccine_date']; ?></td>
    <td><?php echo $result['card']; ?></td>
    <td><?php echo $result['certificate']; ?></td>
    <td> <a href="update.php?id=<?php echo $result['id'];  ?>" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Update"> <i class="fa fa-edit" aria-hidden="true"></i> </a></td>
    <td> <a class="btn btn-secondary" data-toggle="modal" data-target="#myModal<?php echo $result['id']; ?>" >Delete</a>

    <div class="modal" id="myModal<?php echo $result['id']; ?>">
                                    <div class="modal-dialog">
                                        <div class="modal-content">

                                        <!-- Modal Header -->
                                        <div class="modal-header">
                                            <h4 class="modal-title">Delete Confirmation</h4>
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>

                                        <!-- Modal body -->
                                        <div class="modal-body">
                                            Are you sure you want to delete <?php echo $result['phone']; ?> ?
                                        </div>

                                        <!-- Modal footer -->
                                        <div class="modal-footer">
                                            <a class="btn btn-danger" href="delete.php?ids=<?php echo $r['id'] ?>">Yes</a>
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        </div>

                                        </div>
                                    </div>
                                </div>
</td>
</tr>
<?php
}
?>
                
               </tbody>
            </table>

        </div>
   </div>
 </div>
</body>
</html>