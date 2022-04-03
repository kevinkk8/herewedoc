<?php include "../header/header.php"; ?>

</head>


<body style="background-color: darkcyan;">

<?php include "../navbar/navbar.php"; ?>


<h1 id="welcome">Welcome </h1>

<div class="flex-container">
      <div class="card" style="width: 500px;">
            <div class="row no-gutters">
                <div class="col-sm-5">
                    <img class="card-img" src="../images/doc.png" alt="Book Doctor">
                </div>
                <div class="col-sm-7">
                    <div class="card-body">
                        <h5 class="card-title" style="font-size: 30px; ">Book a Doctor</h5>
                        <p class="card-text" style="font-size: 20px; ">I need to arrange a Doctor visit</p>
                        <a href="../body_part/body_part.php" class="btn btn-primary">Book Now</a>
                    </div>
                </div>
            </div>
        </div>
  
        <div class="card" style="width: 500px;">
            <div class="row no-gutters">
                <div class="col-sm-5">
                    <img class="card-img" src="../images/test.jpg" alt="Book Test" style="border-radius: 40%; ">
                </div>
                <div class="col-sm-7">
                    <div class="card-body">
                        <h5 class="card-title" style="font-size: 30px; ">Lab Test</h5>
                        <p class="card-text" style="font-size: 20px; ">I need to arrange a Lab Test</p>
                        <a href="#" class="btn btn-primary">Book Now</a>
                    </div>
                </div>
            </div>
        </div> 
    </div>
    
    
<?php include "../footer/footer.php"; ?>