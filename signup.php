<?php
include("conn.php");

if (isset($_POST['submit']))
{
       if(!empty($_POST['name']) && !empty($_POST['email'])&& !empty($_POST['password']) && !empty($_POST['cpassword'])  )
      { 
        $name = $_POST['name'];
        $email = $_POST['email'] ;
        $password = $_POST['password'] ;
        $cpassword = $_POST['cpassword'] ;
      

        $query = "insert into signup_form ( username ,email , password , cpassword ) values(  '$name' , '$email' ,' $password'  , '$cpassword'  )"; 
 
        $run = mysqli_query($conn , $query)or die(mysqli_error());
        if($run)
        {
       echo("<script>alert('✔️Insert success)</script>"); 
         
        }
         
        else
        {
          echo("<script>alert(' Insert unsuccessfull')</script>");
        }
      };
      ?>

      <script>
        location.replace("login.php");  
      </script>
    <?php
    
     
};
?>
<!--login code -->

<?php
include("conn.php");

if (isset($_POST['login']))
{
       if(!empty($_POST['email']) && !empty($_POST['password']) )
      {
        $password = $_POST['password'] ;
        $email = $_POST['email'] ;
      

        $query = "insert into login_form (email , Password ) values('$password' , '$email'  )";
 
        $run = mysqli_query($conn , $query)or die(mysqli_error());
        if($run)
        {
      
         
        }
        else
        {
          echo("<script>alert(' Insert unsuccessfull')</script>");
        }
      }
      else
      {
         echo("<script>alert('Some thing Requerd')</script>");
      };
      ?>

      <script>
        location.replace("workout.html");  
      </script>
    <?php 
};