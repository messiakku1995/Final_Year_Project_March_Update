<?php session_start(); // This line of code is used to start or continue a session on this page.

//An If condition to check if the user is logged in or not. If the SESSION variables are not set then proceed to login first.
if(!isset($_SESSION['email']) ||(!isset($_SESSION['pwd'])))

{ 
echo "<script>alert('Please Login First....');<script>";

header('location:login.php');  //Take user to login.php page.

	}

	 $email=$_SESSION['email'];

	$pwd=$_SESSION['pwd'];

 ?>

<!DOCTYPE html>

<html>

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

            <table style="height:auto; width:1050px; margin:auto;   border:0px solid #000000; background-color:#FFFFFF; ">

            <tr><td>

            <div style="height:35px; width:1050px; border:0px solid #000000; margin-top:10px; background-color:#D3D1D1; border-radius:5px; color:#1C7582;">

         <font style=" font-size:18px; margin-left:10px;"><b>My Account</b></font>

            </div>

          <div style="height:auto; width:1050px; ">

           <div style="width:200px; height:248px;background-color:#FFFFFF;border:0px #CCCCCC solid;float:left;"><?php include('left.php'); ?></div>

            

            <!--registration form--><div style="border:0px solid #999999; border-radius:5px; height:auto; width:780px; float:left; margin-left:5px; margin-top:10px;">

    

   <center>

    <form id="form2" name="form2" method="post" action="" style="margin:auto;" > <!--form to change the password and -->

              <table>

				<tr>

                    <td height="35" colspan="2"  style="font-family:Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', serif; font-size:25px; color:#960A0C;">Change Your Password</td>

                </tr>

				<tr>

				<td height="25" style=" color:#000DFC; width:120px; font-size:14px;">

				Old Password:</td>

				 <td><input type="password" name="oldpwd" ></td>

				</tr>



				<tr>

				<td height="25" style=" color:#000DFC; width:120px; font-size:14px;">New Password:</td>

				<td><input type="password" name="newpwd"></td>

				</tr>



				<tr>

				<td height="25" style=" color:#000DFC; width:120px; font-size:14px;">Confirm Password:</td>

				<td><input type="password" name="confrmpwd"></td>

				</tr>



				<tr>

				<td></td>

				<td >

				<input type="submit" name="pwdbtn" value="Submit">

				</td>

				</tr>

			</table>

       </form >
	</center>

            

            </div></div><!--registration form-->

              

              </td></tr>         

             </table>           

                       

        </div><!--slider down close-->

        <div style="height:30px; width:1050px; margin:auto; border:0px solid #000000;">

         <?php include('marquee.php');// this php code includes the marquee.php file. ?>

        

        </div>

         

       <!--footer--><div style="width:100%; background-color:#414040; height:150px; border:1px solid #000000; ">

         <?php include('footer.php'); //This php code includes the footer file for the page.?>

         </div><!--footer close-->

     </div> <!--center close-->

           </div><!--main close-->





</body>

</html>

<?php

include ('dbconnection.php'); //include a databse connection file.



if(!isset($_SESSION['email']) ||(!isset($_SESSION['pwd']))) //if the email and password variables are set in SESSION.

{ header('location:index.php'); // go to index.php after login.

	}

	else

	{

if(isset($_POST["pwdbtn"]))

{ 

$email=$_SESSION['email'];

$newpassword=$_POST["newpwd"];

$oldpassword=$_POST["oldpwd"];

$confrmpassword=$_POST["confrmpwd"];

if($newpassword==$confrmpassword)

	// Inside this function the php code and function checks the old password and the update the new password into the database.
{

$query="update user_details set password='$newpassword' where email='$email'" ;

$result=mysql_query($query);

if($result)

{

	echo "<script>alert('Password is changed');</script>";

}

}

else

{

	echo "<script>alert('Passwords not matched');</script>";

	}

	

	}

	}

?>



