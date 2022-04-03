<!DOCTYPE html>
<html>
<head>
	<script type="module" src="https://unpkg.com/@google/model-viewer/dist/model-viewer.min.js
"></script>
    <script nomodule src="https://unpkg.com/@google/model-viewer/dist/model-viewer-legacy.js
"></script>
	<style type="text/css">
		/* This styles the aside container */
#aSide {
    height: 400px;
    width: 100%;
    position: absolute;
    top: calc(50% - 250px);
    right: 7%;
}

/* This styles the 3D object inserted in the aside container */
#aSide model-viewer {
    height: 600px;
    width: 600px;
    position: absolute;
    top: 0;
    left: 0;
    border: none;
    margin-left: auto;
    margin-right: auto;
    margin-left: 40%;
}
.dot{
    display: block;
    width: 12px;
    height: 12px;
    border-radius: 50%;
    
    opacity: 0;
  }
        
        
     #welcome{
  box-sizing: border-box;
  height: 50px;
  padding: 10px;
  font-family: 'Bigelow Rules', cursive;
  font-weight: 400px;
  font-size: 30px;
  text-align: center;
  color: black;
  position: relative;
	display: block;
	background-color: aquamarine;
  animation: heading;
  animation-duration: 3s;
  animation-fill-mode: forwards;
}

@keyframes heading {
  0%{top: -50px;}
  100%{top: 20px}
}

@media only screen and (max-width: 700px) {
  #welcome{
    box-sizing: border-box;
    height: 170px;
    padding: 25px;
    font-family: 'Alatsi', sans-serif;
    font-weight: 400px;
    font-size: 50px;
    text-align: center;
    color: white;
    position: relative;
    top:83px;
  	display: block;
  	background-color: #6603AE;
  }
  .responsive{
    padding: 0 10px
    width:50%;
  }

}   
        
        
	</style>

</head>
<body style="background-color: #379683;">

<h2 id="welcome">Please select the body part that is causing pain. </h2>

<div id="aSide">
	<model-viewer src="scene.gltf" alt="VR Headset" auto-rotate camera-controls ar ios-src="scene.gltf">
		<button slot="hotspot-dot+X-Y+Z" class="dot" data-position="1 -1 1" data-normal="1 0 0" onclick="testing()"></button>
	</model-viewer>
</div>
<script type="text/javascript">
	function testing(){
		alert("You have selected lower back");
        window.location.href = '../../herewedoc/questions/index.php';
	}
</script>
</body>
</html>