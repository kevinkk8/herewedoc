<?php include "../header/header.php"?>
<link href="css/mobiscroll.javascript.min.css" rel="stylesheet" />
<script src="js/mobiscroll.javascript.min.js"></script>
</head>


<body style="background-color: darkcyan;">
<?php include "../navbar/navbar.php"?>

<h1 id="welcome">Make an appointment </h1>
<br><br><br><br><br><br><br>

<div id="demo-timegrid" style="background-color:darkcyan; border: none; width:70%; position:relative; left:200px;"></div>


<button class="btn btn-primary" style="position:relative; left:630px; width:200px;"><a href="../profile/patientProfile.php" style="text-decoraton:none;">Submit</a></button>

<script>
    
mobiscroll.setOptions({
    theme: 'ios',
    themeVariant: 'blue'
});

mobiscroll.datepicker('#demo-timegrid', {
    controls: ['calendar', 'timegrid'],
    display: 'inline',
});    
</script>
<?php include "../footer/footer.php"?>