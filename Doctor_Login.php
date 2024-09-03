<?php
session_start();
include('Login_header.php');
include ('connect.php'); 
if(isset($_POST['btnlogin']))
{
     $Email= $_POST['txtemail'];
     $Password= $_POST['txtpassword'];
     $select2=mysqli_query($connection,"SELECT * FROM Doctor WHERE Email='$Email'");
        $count2=mysqli_num_rows($select2);
        for($i=0; $i < $count2; $i++)
        {
            $data=mysqli_fetch_array($select2);
            $did=$data['DoctorID'];
        }

     $select=" SELECT * FROM Doctor 
               where Email='$Email' 
               AND Password='$Password'
               AND DoctorID='$did'";

     $run=mysqli_query($connection,$select);
     $count=mysqli_num_rows($run);
    
     if ($count==0) 
     {
        $select="SELECT * FROM Doctor 
                Where Email='$Email' 
                AND Password='$Password'
                AND DoctorID='$did'";

        $Doctor_run=mysqli_query($connection,$select) ;
        $Doctor_count=mysqli_num_rows($Doctor_run);
        if ($Doctor_run>0) 
        {
            echo "<script>window.alert('Doctor Has Been Successful Logged In.')</script>";
            echo "<script>window.location='Doctor_Home.php?did=$did'</script>";
                
        }
        else
        {
            if(isset($_SESSION['count']))

           {
            $_SESSION['count']=1;
           }
        else
        {
            $_SESSION['count']+=1;
        }

        if($_SESSION['count']>=3)
        {
            echo "<script>window.alert('Login failed three time.Try again after 3min')</script>";
        }
            echo "<script>window.alert('Incorrect Data')</script>";
        }
     }
     else
     {
            $row = mysqli_fetch_array($run);
            $_SESSION['DoctorID']=$row['DoctorID'];
            echo "<script>window.alert('Doctor Has Been Successfully Logged In.')
            
            window.location='Doctor_Home.php?did=$did'</script>";
            
     }
}

  if (isset($_SESSION['check']))
  {
    echo "<p><time id='countdown'>3:00</time></p>";
    echo "<p style='font-size:50px;'>You will be able to access the Website after 3 minutes</p>";
    unset($_SESSION['check']); 
  }
  else
  {

?>

              
        <form action="" method="POST" class="row contact_form" novalidate ="novalidate">
        <table align="center">
            <tr>
                 <td>Email:</td>
                 <td><input type="text" class="form-control" name="txtemail" placeholder="Enter Email"></td>

            </tr>
            <tr>
                 <td>Password:</td>
                 <td><input type="password" class="form-control" name="txtpassword" placeholder="Enter Password"></td>

            </tr>
            <tr>
                 <td></td>
                 <td>
                    <input type="submit" name="btnlogin" class="btn submit_btn" value="Login">
                    <input type="reset" name="btncancel"  class="btn submit_btn" value="Cancel">
                </td>

            </tr>
        </table>
        </form>
                    </div>
                </div>
            </div>
        </section>
        <br><br><br><br><br><br><br><br><br><br><br><br>
 <?php 
}
include('Login_footer.php');
  ?> 
