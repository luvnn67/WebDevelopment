<?php


include("header.php");

$login="";
$error="";


if($_SERVER['REQUEST_METHOD'] == "POST"){


$username = trim($_POST['username']);
$password = trim($_POST['password']);

   
$conn = pg_connect("host=127.0.0.1 dbname=modil_db user=modil password=100657755" );

if($conn){
    $result = pg_query($conn, "SELECT * FROM users WHERE id = '$username' AND password = '$password'");
    $usernameFound = pg_query($conn, "SELECT * FROM users WHERE id = '".$username."'");


   if(pg_num_rows($result)){
       $lastLogin = pg_query($conn, "UPDATE users SET last_access = current_timestamp WHERE id ='".$username."'");
       $user_details = pg_fetch_assoc($result);
       $firstName=$user_details['first_name'];
       $lastName=$user_details['last_name'];
       $email=$user_details['email_address'];
       $lastLog=$user_details['last_access'];
       $login.="Welcome back " . $firstName . " " . $lastName . "<br/> Our records show that your<br/>email address is: " . $email . "<br/>and you last accessed our system: " . $lastLog . "<br/>";
       $username = "";
       $password = "";
       pg_close($conn);
       }
       
       else if(pg_num_rows($usernameFound))
       {
           $error .= "Login/Password not found in the database. Please try again. <br><br> ";
           $password = "";
       }
        else
        {
                $error.="Incorrect username or password<br/>";
                $username = "";
                $password = "";
        }
    }
else
{
    $error.="Unable to connect to database";
}


}


   $title = "Lab 9";
   $file = "Lab9.php";
   $description = "Lab 09 page for my WEBD2201 Website";
   $date = "April 9th, 2020";
   $banner = "Lab 9 - User Login Page";
 
?>

<body>
    <div id="content">
        <table class="main">
            <tr class="main">
                <td class ="body">
                    <table class="body">
                        </p>
                        <td align="left">
							<center>
                                <p>
                                    This is the lab9 Webpage where I created a user login page. This webpage utalizes functions
                                    that are in a separate php file, as well as predifined functions such like pg_connect(), pg_close(), pg_num_rows() and pg_query.
                                    <br/><br/>
                                    my users SQL file: <a href="./lab9_users.sql">lab9_users.sql</a>
                                </p>

                                <h1> User Login Form </h1>

                                    <form action="<?PHP $_SERVER['PHP_SELF']; ?>" method = "POST" class="center">

                                        <h2> <?php echo $error; ?> </h2>
                                        <h2> <?php echo $login; ?> </h2>
                                    

                                        <table border = "1">
                                            <tr>
                                                <td>
                                                    Username:
                                                </td>
                                                <td>
                                                    <input type="text" name = "username" value= "<?php echo $username; ?>" size="10">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Password:
                                                </td>
                                                <td>
                                                    <input type="password" name ="password" value = "<?php echo $password; ?>" size = "10" >
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <input type="submit" value="Login">
                                                </td>
                                                <td>
                                                    <input type="reset" value = "Reset" />
                                                </td>
                                                

                                            </tr>
                                        </table>
                                    </form>
							</center>

                        </td>
                    </table>
                </td>
            <tr>
        </table>


        

        
    </div>
                                    
</body>

<?php include("footer.php"); ?>