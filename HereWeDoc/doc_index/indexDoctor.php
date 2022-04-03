<?php
include '../db/dbConfig.php';
session_start();
$id=1;
$conn=loadDB();
?>
<!DOCTYPE html>
<html lang="en">
<head>
 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="table.css">
  <link rel="stylesheet" type='text/css' href="../navbar/navbar.css">
  <style>
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;    
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }
  </style>
</head>
<body style="background-color: darkcyan;">

<?php include "../navbar/navbar.php";?>

 <br> 
 <br> 
 <br> 
 <br> 
<div class="container-fluid text-center">    
  <div class="row content">

<div class="pricing-box-container">
  <?php 
  $caseId;
    $sql="SELECT * from patient_case inner join patient on patient_case.patient_id=patient.patient_id where doctor_id=1";
    foreach($conn->query($sql) as $row){
      $a=$row['problem'];
      $caseId=$row['case_id'];
      $_SESSION["csId"]=$caseId;
      $_SESSION['patient1']=$row['patient_id'];
     
  ?>
  <div class="pricing-box text-center">
    <ul class="features-list">
      <li>
      <li><strong>First Name: <?php echo $row["patient_name"] ?></strong></li>
      <li><strong>Last Name: <?php echo $row["patient_lastname"] ?></strong></li>

      <li><strong>Kind of Pain <br></strong><textarea readonly=""> <?php echo htmlspecialchars($a)?>  </textarea></li>
    </ul>
    <a href="detailsAndFeedback.php?id=<?php echo $row['case_id']; ?>"><button class="btn-primary">Details & feedback</button></a>
  </div>
  <?php  } ?>
  

</div>

</body>
</html>
