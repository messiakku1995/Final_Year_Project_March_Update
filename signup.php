<!-- The purpose of this page is to allow user to get registered with the Website. 
		To register the User need to fooloe the required instructions and needs to fill up the new User Registration form.-->
<?php

session_start();	 // This line of code is used to start or continue a session on this page.

 include('dbconnection.php');	//include dbconnection.php to connect to the database.

 

 if(isset($_POST['continue']))

{
	//When the User fills the form and click on submit, then all the value fields of the form are delivered to this page with the help of PHP POST.

 $name=$_POST['name'];	//variable for name field.

  $email=$_POST['email'];	//variable for Email field.

   $contact=$_POST['contact'];	//variable for Contact field.

    $password=$_POST['pwd'];	//variable for Password field.

	 $cpassword=$_POST['cpwd'];	//variable for Confirm Password field.

	$res1=mysql_query("select * from user_details where email='$email'");

	$count=mysql_num_rows($res1);

	

	if($count!=0) //If condition to check whether the user has already been registered.

	{

					 echo "<script>alert('You Have Already Registered Please Login..');</script>";			//Message 

	}

 	 else

	 {

				 $query="insert into user_details values('','$name','$email','$contact','$password')";

		 $result=mysql_query($query);

		 if($result)

 		{

			 

			 header('location:login.php');  //Take user to login.php page.


 		}

 	}



}

 ?>



<!DOCTYPE html>

<html>

<head>

<title>PHPGURUKUL Shopping/newuser</title>

<link href="themes/1/js-image-slider.css" rel="stylesheet" type="text/css" />

 <script src="themes/1/js-image-slider.js" type="text/javascript"></script>

 <link href="generic.css" rel="stylesheet" type="text/css" />



  

  <script type="text/javascript">


  <!-- The below is a javascript function named as validate() which is used to check the genuinity and validity of all the form input fields. It checks for all the data input by the user and returns proper error when some validations are not fulfilled.  -->

function validate()

{

	if (document.form1.name.value=="")

	

	{

		alert("Name Is Required!");

		document.form1.name.focus();

		return false;

		}

		if(document.form1.email.value=="")

		{ alert("Email Is Required");

		document.form1.email.focus();

		return false;

		}

		if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(form1.email.value))  

  {  

  }  

   else

   {

	    alert("Invalid email address!")  

		document.form1.email.focus();

    	return (false);

 	}

	
		if(document.form1.contact.value=="")

		{ alert("Contact No Is Required");

		document.form1.contact.focus();

		return false;

		}

	

		if(  /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/.test(form1.contact.value))

		{

		}

		else

		{

		 alert("Invalid Contact number")  

		document.form1.contact.focus();

    	return (false);

		}

		
					if(document.form1.pwd.value=="")

					{

						alert("Password Is Required");

						document.form1.pwd.focus();

						return false;

						}

						

						if(document.form1.cpwd.value != document.form1.pwd.value )

						{

							alert("password doesnot match!!");

							document.form1.cpwd.focus();

							return false;

							}


	}

	 </script>

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

       <?php include ('slider.php'); 	// php code to include the slider.php file to display the content slider on the page.?>	

       

                  </div><!--sliderall close-->

 

 

<!--slider down data-->            

            <div style="height:500px;; width:1050px;  margin-top:20px; margin:auto; border:0px solid #000000; background-color:#FFFFFF;  ">

            <div style="height:35px; width:1050px; border:0px solid #000000; margin-top:10px; background-color:#F1F0F0; border-radius:5px; color:#1C7582;">

         <font style=" font-size:18px;"><b>Account Information</b></font>

            </div>

            <!--registration form--><div style="border:1px solid #999999; border-radius:5px; height:400px; width:600px; float:left; margin-left:200px; margin-top:20px;">

            <form name="form1" method="post" onSubmit="return validate();">

            <table border="0" style="width:600px;" cellspacing="8">

            <tr style="background-color:#CDEFF3; color:#828282;; height:30px;"><td colspan="2"><b>Contact Information</b></td></tr>

            <tr><td>Name*</td><td><input type="text" name="name" style="width:300px; height:25px;"></td></tr>

            <tr><td>E-Mail Id*</td><td><input type="text" name="email" style="width:300px; height:25px;"></td></tr>

            

            <tr><td>Contact Number*</td><td><input type="text" name="contact" style="width:300px; height:25px;"></td></tr>

          <tr style="background-color:#CDEFF3; color:#828282;height:30px;"><td colspan="2"><b>Password</b></td></tr>

            <tr><td>Password*</td><td><input type="password" name="pwd" style="width:300px; height:25px;"></td></tr>

            <tr><td>Password Confirmation*</td><td><input type="password" name="cpwd" style="width:300px; height:25px;"></td></tr>

           

            <tr><td colspan="2" align="right"><input type="submit" name="continue" value="Continue" style="border:1px solid #999999; border-radius:5px; height:35px; width:80px; font-size:16px; margin-right:25px;" align="middle"></td></tr>

            

            

            </table></form>

            

            </div><!--registration form-->

           

      </div><!--slider down close-->

            

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