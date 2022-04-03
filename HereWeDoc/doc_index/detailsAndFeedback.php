<?php
include '../db/dbConfig.php';
session_start();
$conn=loadDB();
$id=$_GET['id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="table.css">
  <link rel="stylesheet" type='text/css' href="../navbar/navbar.css">
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
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
<body style="background-color: darkcyan";>

<?php include "../navbar/navbar.php";?>  
<br>
<br>
<br>
<br>
<div class="container-fluid text-center">    
  <div class="row content">

<div class="pricing-box-container" style=" width: 100%;">
  <div class="pricing-box text-center" >
    <ul class="features-list" >
      <?php $sql="SELECT * from patient_case inner join patient on patient_case.patient_id=patient.patient_id where case_id='$id'"; 
            foreach($conn->query($sql) as $row){
      ?>
      <li><strong  style="font-size: 35px;" > DETAILS</strong></li>
      <li style=""><strong>First Name:</strong> <strong style="color:#5CDB95;margin-left: 5px;font-weight: bold;"><?php echo $row['patient_name']?></strong></li>
      <li><strong>Last Name: <strong style="color:#5CDB95;margin-left: 5px;font-weight: bold;"> <?php echo $row['patient_lastname']?></strong> </strong></li>
      <li><strong>Birthday: <strong style="color:#5CDB95;margin-left: 5px;font-weight: bold;"><?php echo $row['birthday']?></strong></strong></li>
      <li><strong>Sex:  <strong style="color:#5CDB95;margin-left: 5px;font-weight: bold;"><?php echo $row['sex']?></strong></strong></li>
      <li><strong>Email: <strong style="color:#5CDB95;margin-left: 5px;font-weight: bold;"><?php echo $row['email']?></strong></strong></li>
      <li><strong>Hurting body part: <strong style="color:#5CDB95;margin-left: 5px;font-weight: bold;"><?php echo $row['body_part']?></strong></strong></li>
      <li><strong>Kind of Pain <br></strong><textarea readonly="" style=" text-align: center;"> <?php echo $row['problem']?>  </textarea></li>
      <li><strong>1. Do you localize your pain in your upper/side back or your pelvic area?</strong> 
        <li>Answer:<br><textarea readonly=""><?php echo $row['question1']?>   </textarea></li></li>
      <li><strong>2. Would you call your pain constantly severe or coming in waves?</strong> 
        <li>Answer:<br><textarea readonly=""> <?php echo $row['question2']?>  </textarea></li></li>
      <li><strong>3. Do you feel the urge to urinate often?</strong> 
        <li>Answer:<br><textarea readonly="">  <?php echo $row['question3']?> </textarea></li></li>
      <li><strong>4. Do you have a burning sensation while urinating?</strong> 
        <li>Answer:<br><textarea readonly="">  <?php echo $row['question4']?> </textarea></li></li>
      <li><strong>5. Does the color of your urine indicate that there is blood in there?</strong> 
        <li>Answer:<br><textarea readonly="">  <?php echo $row['question5']?> </textarea></li></li>
      <li><strong>6. Have you had fever,shaking,chills or vomiting these days?</strong> 
        <li>Answer:<br><textarea readonly=""> <?php echo $row['question6']?>  </textarea></li></li>
  </div>
  <?php } ?>
  
  <div class="pricing-box text-center" style="margin-top: -28%;">
    <ul class="features-list" >
      <li><strong style="font-size: 35px;" > FEEDBACK</strong></li>
      <form method="post">
      <textarea  rows="35" id="feedback" name="feedback" cols="80">   </textarea></li>
    </ul>
    <button class="btn-primary" type="submit" name="submit">Send FeedBack</button>
    </form>
  </div>
  <?php
    if(isset($_POST['submit'])){
      $feedback=$_POST['feedback'];
      $sql="INSERT INTO feedback(patient_id,doctor_id,app_id,feedback) VALUES('1','1','1','$feedback')";
      $conn->query($sql);
    }

  ?>

</div>


</body>
</html>
