<!--
	Author: Luv Modi
	Filename: lab10.php 
	Date: 17 April 2022
    WEBD 2201
	
	-->



<?php

include("header.php");
$title = "Lab 10";
$file = "Lab10.php";
$description = "Lab 10 page for my WEBD2201 Website";
$date = "April 14th, 2020";
$banner = "Lab 10 - User Registration Page";

$error ="";
$result="";
$output="";


if($_SERVER['REQUEST_METHOD'] == "POST")
{

   
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    $confirmPassword = trim($_POST['confirmPassword']);
    $firstName = trim($_POST['first_name']);
    $lastName = trim($_POST['last_name']);
    $email = trim($_POST['email']);


    $account_created = getDataEST();
    
   
  
    $register = true;


       
        
        $conn = db_connect();
        global $error;
        if($conn)
        {
            $usernameFound = pg_query($conn, "SELECT * FROM users WHERE id = '".$username."'");
            

            ////////////////////////////////////////////////////////////////////////////////////////////
            //USER VALIDATE
            if(!isset($username) || $username == "")
            {
                $error .= "Username cannot be EMPTY<br>";       
                //if input is empty
                $register = false;
            }
            else if(strlen($username) < MINIMUM_ID_LENGTH )
            {
                $error .= "Username must be GREATER then " . MINIMUM_ID_LENGTH ." characters<br>";
            
                //if the input does is less than min requirement
                $register = false;
            }
        
            else if(strlen($username) > MAXIMUM_ID_LENGTH )
            {
                $error .= "Username must be LESS then " . MAXIMUM_ID_LENGTH ." character<br>";
            
                //if the input does is more than max requirement
                $register = false;
            }
        
            else if (pg_num_rows($usernameFound))
            {
                $error .= "Username already EXISTS<br>";
                
                //if the input already exists
                $register = false;
            }



            ////////////////////////////////////////////////////////////////////////////////////////////
            //FIRST NAME VALIDATE
            if(!isset($firstName) || $firstName == "")
            {

                $error .= "First name cannot be EMPTY<br>";       
                //if input is empty
                $register = false;
            }
        
            else if(strlen($firstName) > MAX_FIRST_NAME_LENGTH )
            {
                $error .= "First name cannot be MORE then " . MAX_FIRST_NAME_LENGTH ." characters<br>";            
                //if the input does is less than max requirement
                $register = false;
            }
            else if(is_numeric($firstName))
            {
                $error .= "First name cannot be a NUMBER<br>";
                //if the input is number
                $register = false;
            }


            ////////////////////////////////////////////////////////////////////////////////////
            //LAST NAME VALIDATE
            if(!isset($lastName) || $lastName == "")
            {

                $error .= "Last name cannot be EMPTY<br>";
            
                //if the input is empty
                $register = false;
            }
        
            else if(strlen($lastName) > MAX_LAST_NAME_LENGTH )
            {
                $error .= "Last name cannot be MORE then " . MAX_LAST_NAME_LENGTH ." characters<br>";
            
                //if the input does is less than max requirement
                $register = false;
            }
        
            else if(is_numeric($lastName))
            {
                $error .= "Last name cannot be a NUMBER<br>";
            
                ////if the input does is number
                $register = false;
            }



            /////////////////////////////////////////////////////////////////////////////////////////////
            //PASSWORD VALIDATE
            if(!isset($password) || $password == "")
            {

                $error .= "Password cannot be EMPTY<br>";           
                //if the input is empty
                $register = false;
            }
        
            else if(strlen($password) > MAXIMUM_PASSWORD_LENGTH )
            {
                $error .= "Password cannot be MORE then " . MAXIMUM_PASSWORD_LENGTH ." characters<br>";            
                //if the input does is less than max requirement
                $register = false;
            }

            else if(strlen($password) < MINIMUM_PASSWORD_LENGTH )
            {
                $error .= "Password cannot be LESS then " . MINIMUM_PASSWORD_LENGTH ." characters<br>";            
                //if the input does is less than max requirement
                $register = false;
            }
        



            /////////////////////////////////////////////////////////////////////////////////////////////////
            //PASSWORD VALIDATE
            if(!isset($confirmPassword) || $confirmPassword == "")
            {

                $error .= "Confirm Password cannot be EMPTY<br>";           
                //if the input is empty
                $register = false;
            }
        
            else if($confirmPassword != $password)
            {
                $error .= "Password and Confirm Password must MATCH<br>";            
                //if the input does is less than max requirement
                $register = false;
            }


            ////////////////////////////////////////////////////////////////////////////////////////
            //VALIDATE EMAIL
            if(!isset($email) || $email == "")
            {

                $error .= "EMAIL cannot be EMPTY<br>";           
                //if the input is empty
                $register = false;
            }
        

            else if(strlen($email) > MAXIMUM_EMAIL_LENGTH)
            {
                $error .= "EMAIL cannot be MORE then " . MAXIMUM_EMAIL_LENGTH ." characters<br>";            
                //if the input does is less than max requirement
                $register = false;
            }

            else if(!filter_var($email, FILTER_VALIDATE_EMAIL))
            {
                $error .= "EMAIL must match format 'XXXXXX@XXX.COM'<br>";            
                //if the input does is less than max requirement
                $register = false;
            }







        }




   
    
 
    

    if($register == true)
    {
        $output = "Data has been successfully submitted <br/>";
        $result = pg_query($conn, "INSERT INTO users(id, password, first_name, last_name, email_address, enrol_date, last_access) 
            Values('$username', '$password', '$firstName', '$lastName', '$email', '$account_created', '$account_created')");
        

        if(!result)
        {
            $error .= "Failed to insert to database";
        }
        else
        {
            $output = "Data has been successfully submitted <br/>";
            pg_close($conn);


            ob_flush();
    
            header("Location: Lab9.php");
            
        
        }

    }

    
}


?>

<body>
    <div id="content">
        <table class="main">
            <tr class="main">
                <td class ="body">
                    <table class="body">
                        </p>
                        <td align="left">
                            <p>
                                This is the Lab 10 Webpage where I created a user registration page, that works with the user login page of lab09.
                                This webpage utalizes functions that are in a separate php file, as well as predifined functions 

                            </p>


                            <form action = "<?PHP $_SERVER['PHP_SELF']; ?>" method = "POST">

                                <h1> User Registration Form</h1>

                                <h2> <?php echo $error; ?> </h2>
                                <h2> <?php echo $result; ?> </h2>
                                <h2> <?php echo $output; ?> </h2>


                                <table>
                                    <tr>
                                        <td>
                                            Login ID:
                                        </td>
                                        <td>
                                            <input type="text" name = "username" value= "<?php echo @$username; ?>" size="15">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Password:
                                        </td>
                                        <td>
                                            <input type="password" name ="password" value = "<?php echo $password; ?>" size = "15" >
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Confirm Password:
                                        </td>
                                        <td>
                                            <input type="password" name ="confirmPassword" value = "<?php echo $confirmPassword; ?>" size = "15" >
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            First Name:
                                        </td>
                                        <td>
                                            <input type="text" name = "first_name" value= "<?php echo @$firstName; ?>" size="15">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Last Name:
                                        </td>
                                        <td>
                                            <input type="text" name = "last_name" value= "<?php echo @$lastName; ?>" size="15">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Email Address:
                                        </td>
                                        <td>
                                            <input type="text" name = "email" value= "<?php echo @$email; ?>" size="15">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="submit" value="Register">
                                        </td>
                                        <td>
                                            <input type="reset" value = "Reset" />
                                        </td>

                                    </tr>
                                </table>

                            </form>

                        </td>
                    </table>
                </td>
            <tr>
        </table>


        

        
    </div>
                                    
</body>

<?php include("footer.php"); ?>
	