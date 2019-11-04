

<!DOCTYPE html>
<html>
<head>
	<title>Tamil Darknet</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<script type="text/javascript" src="jquery.js"></script>

</head>



<body class="container">

	<header class="container" >
	<nav class="navbar navbar-dark bg-dark mt-2">
	  <ul class="nav justify-content-center">
		  <li class="nav-item">
		    <a class="nav-link active" href="index.php">Home</a>
		  </li>
		  <li class="nav-item">
		    <a class="nav-link" href="post.php">Posts</a>
		  </li>
		  <li class="nav-item">
		    <a class="nav-link" href="about.php">About us</a>
		  </li>
		  <li class="nav-item">
		    <a class="nav-link" href="network.php">Hardware & Networking tips</a>
		  </li>
		  
	</ul>
   </nav>

</header>
<section class="container pt-3">


	<script type="text/javascript" src="min.js"></script>
	</br><img id="slide" src="images/image1.jpg" alt="" width="100%" height="100%"/>
	
	
    
    <script>
    mySlider();
    </script>

 <script>
 	$(document).ready(function()


 		

     {
       
       alert("welcome to Tamildarknet");
 		    $(".butt").click(function(){

             $(".box").hide();


 		    });
            
            $("#panel").slideUp("fast");
        	$("#flip").click(function()
        	{

            
            //$("#panel").slideDown("fast");
            $("#panel").slideToggle("fast");

        });

    });
  </script>
<style type="text/css">
	
	.panel{
		background-color: black;
		height:300px;
		width:100px;

	}

	.flip{
		background-color: green;
		height: 30px;
		width:100px;
	}

	body{
		background-color:yellow;
	}
</style>
<br/> <p class="box"> hai this  </p>
<button class="butt">click me</button>
</section></br>

<p id="flip"><button>click flipup</button></p>

<div id="panel">
	
	<p>Tutor joes</p>
	<p>jquery</p>
</div>

<footer class="container">
   
 <p> &copy; Tamildarknet-reneshraghu <?php echo "Today Date:".date("d.m.y") ?></p>
    

</footer>

    
  
</body>
</html>

