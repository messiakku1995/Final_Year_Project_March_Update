<?php // This line of code is used to start or continue a session on this page.

//An If condition to check if the user is logged in or not. If the SESSION variables are not set then proceed to login first
session_start();

if(!isset($_SESSION['email']) ||(!isset($_SESSION['pwd'])))

{ 

header('location:login.php'); 	//Take user to login.php page.

	}

	 $email=$_SESSION['email'];

	$pwd=$_SESSION['pwd'];

 ?>



<!DOCTYPE html>

<html>

<head>

<title>PHPGURUKUL Shopping/Myaccount</title>

<link href="themes/1/js-image-slider.css" rel="stylesheet" type="text/css" />

 <script src="themes/1/js-image-slider.js" type="text/javascript"></script>

 <link href="generic.css" rel="stylesheet" type="text/css" />

 <script type="text/javascript" src="clients.js"></script>



</head>

<body>



<div style="width:100%; height:auto;">



   <!--header --><div style="height:120px; width:100%; background-color:#8B8A90;border:0px solid #000000;">

  <?php include ('header.php'); // php code to include header.php file. ?> 

   </div>



  <!--menu--> <div style="height:45px; width:100%; background-color:#269FB2; border:0px solid #269FB2;">

    <?php include ('menu.php'); // php code to include the menu.php file to display the navigation menu bar on the first index page. ?>	

   </div><!--menu close-->

  

  <!--cc--><div style="height:auto; width:100%;border:0px solid #269FB2;">

    <!--sliderall--> <div style="height:328px; margin:auto; width:1050px; border:0px solid #990000;  ">

       <?php include ('slider.php');// php code to include the slider.php file to display the content slider on the page.?>	

       

                  </div><!--sliderall close-->

 

<!--slider down data-->

    <table style="height:auto; width:1050px; margin:auto;   border:0px solid #000000; background-color:#FFFFFF; ">

        <tr><td>

            <div style="height:35px; width:1050px; border:0px solid #000000; margin-top:10px; background-color:#D3D1D1; border-radius:5px; color:#1C7582;">

         <font style=" font-size:18px; margin-left:10px;"><b>My Account</b></font>

            </div>

            <div style="margin-top:5px;  border:0px solid #CC0000;">

         

           <div style="width:200px; height:248px;background-color:#FFFFFF;border:0px #CCCCCC solid;float:left;"><?php include('left.php'); ?></div>

           

            <!--registration form-->
			<div style="border:0px solid #999999; border-radius:5px; height:400px; width:700px; float:left; margin-left:50px; margin-top:20px;">

            
            </div>
			<!--registration form-->

              </div>

              </td></tr>         

        </table>           

       

        <div style="height:30px; width:1050px; margin:auto; border:0px solid #000000;">

         <?php include('marquee.php');// this php code includes the marquee.php file. ?>

        </div>

         

       <!--footer--><div style="width:100%; background-color:#414040; height:150px; border:1px solid #000000; ">

         <?php include('footer.php'); //This php code includes the footer file for the page.?>

         </div>
		 <!--footer close-->

     </div>
	 <!--center close-->

  </div>
  <!--main close-->


</body>

</html>

