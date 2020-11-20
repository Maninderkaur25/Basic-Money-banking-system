<?php

include 'send money.php';



if(isset($_POST['done'])){
    $To =$_POST['To'];
    $From =$_POST['From'];
    $Amount =$_POST['Amount'];

   

    $q="INSERT INTO `form`(`To`, `From`, `Amount`) VALUES ('$To','$From','$Amount')";

    $res = mysqli_query($conn,$q);
    if($res){
      echo "<script type='text/javascript'>
               alert('Transaction Successfull!');
               window.location='transaction.php';
           </script>";
   }
      
      
    

    
}

?>




<!DOCTYPE html>
<html>
<head>

	</style>
  <title>Send Monye</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>



<nav class="navbar navbar-expand-sm bg-dark navbar-dark">

<a class="navbar-brand" href="#">Banking System</a>
  <ul class="navbar-nav ml-auto">
    <li class="nav-item active">
      <a class="nav-link" href="Home.html">Home</a>
    </li>
    <li class="nav-item active">
      <a class="nav-link" href="transaction.php">View Transactions</a>
    </li>
    
    
  </ul>
  
</nav>



<div class="col-lg-6 m-auto">
  
  <form method="post">
    <br><br><br><br><div class="card">
      <div class="card-header bg-dark">
        <h1 class="text-white text-center">Send Money</h1>
            </div><br>
            <label> To </label>
            <input type="text" name="To" class="form-control"  required/><br> 

            <label> From </label>
      <input type="text" name="From" class="form-control" required/><br> 

    <label> Amount </label>
    <input type="text" name="Amount" class="form-control" required/><br> 

      <button id="submit" onclick="sweetclick()" class="btn btn-success"  name="done"> Transfer </button><br>
      
      </script>
    </div>
   
  </form>
  
</div>




</body>
</html>

