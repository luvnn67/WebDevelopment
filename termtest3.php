<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
   		"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"> 
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="./css/style.css" /> 
	<!-- CHANGE THE HREF ABOVE TO webd2201.css AFTER YOU HAVE COPY AND PASTED THE CONTENTS OF style.css INTO IT -->
	<!--
	Author: YOUR NAME HERE 
	Filename: YOUR_FILE_NAME_HERE.php this will be echo'ed using a PHP variable eventually
	Date: 0X February 20XX
	Description: This page is the CSS layout demo, this description will be replaced with a PHP variable
	-->
	<title><?php echo $title?></title><!-- THE <title> WILL COME FROM A PHP VARIABLE TOO -->
</head>

<?php 
	$title = "TERM TEST 3";
    $file = "termtest3.php";
    $date = "04 08 2022";
    $description = "This is the practical portion of my TERM TEST 3";
    $banner = "WEBD2201--Web Development Fundamentals";


    define("COURSE_CODE_LENGTH", 8);
    define("MAX_COURSE_TITLE_LENGTH", 64);
    define("MIN_GPA", 0);
    define("MAX_GPA", 5);

    $error = "";
    $output = "";
    $msg = "";
    $id = "";
   



    include ("./header.php");



if($_SERVER['REQUEST_METHOD'] == "POST")
{

   
    $courseName = trim($_POST['Title']);
    $codeNum = trim($_POST['Code']);
    $Weighting = trim($_POST['Weighting']);
    $id = trim($_POST['id']);

    $register = true;

    $conn = db_connect();
        global $error;
        if($conn)
        {
            

            ////////////////////////////////////////////////////////////////////////////////////////////
            //course VALIDATE
            if(!isset($courseName) || $courseName == "")
            {
                $error .= "Course cannot be EMPTY<br>";       
                //if input is empty
                $register = false;
            }
            else if(strlen($courseName) > MAX_COURSE_TITLE_LENGTH )
            {
                $error .= "Course cannot be GREATER then " . MAX_COURSE_TITLE_LENGTH ." characters<br>";
            
                //if the input does is less than min requirement
                $register = false;
            }

            ////////////////////
            //Code Validations

            if(!isset($codeNum) || $codeNum == "")
            {
                $error .= "Course cannot be EMPTY<br>";       
                //if input is empty
                $register = false;
            }
            else if(strlen($codeNum) > COURSE_CODE_LENGTH )
            {
                $error .= "Course CODE cannot be GREATER then " . COURSE_CODE_LENGTH ." characters<br>";
            
                //if the input does is less than min requirement
                $register = false;
            }

            ////////////////////////////////////////
            if(!isset($Weighting) || $Weighting == "")
            {
                $error .= "GPA cannot be EMPTY<br>";       
                //if input is empty
                $register = false;
            }
            else if(strlen($Weighting) > MAX_GPA )
            {
                $error .= "GPA cannot be GREATER then " . MAX_GPA ." characters<br>";
            
                //if the input does is less than min requirement
                $register = false;
            }

            else if(strlen($Weighting) < MIN_GPA )
            {
                $error .= "GPA cannot be LESS then " . MAX_GPA ." characters<br>";
            
                //if the input does is less than min requirement
                $register = false;
            }
        }
        
        if($register == true)
        {
            $msg = "Data has been successfully submitted <br/>";
            $insert = pg_query($conn, "INSERT INTO courses(id, Title, Code, Weighting) 
                Values('$id','$courseName', '$codeNum', '$Weighting')");
        }


        pg_close($conn);


        ob_flush();

        header("Location: termtest3.php");
}
        
  

?>



<body>
    <div id="content">
        <table class="main">
            <tr class="main">
                <td class ="body">
                    <table class="body">
                        <h1>
                            TERM TEST 3
                        </h1>
                        <p>
                             TEST
                        <td align="left">
							<center>
								<p>
								This page utilizes several postgreSQL method calls.  Such as pg_connect(),
								pg_query(), and pg_fetch_result().
								</p>

                                <form action = "<?PHP $_SERVER['PHP_SELF']; ?>" method = "POST">

                                <h1> User Registration Form</h1>

                                <h2> <?php echo $error; ?> </h2>
                                <h2> <?php echo $msg; ?> </h2>
                                <h2> <?php echo $output; ?> </h2>


                                <table>
                                    <tr>
                                        <td>
                                            Course Title:
                                        </td>
                                        <td>
                                            <input type="text" name = "Title" value= "<?php echo @$courseName; ?>" size="15">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            CODE:
                                        </td>
                                        <td>
                                            <input type="text" name ="Code" value = "<?php echo $codeNum; ?>" size = "15" >
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            WEIGHT:
                                        </td>
                                        <td>
                                            <input type="text" name ="Weighting" value = "<?php echo $Weighting; ?>" size = "15" >
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            ID MUST BE DIFFERENT NUMBER GREATER THAN 6:
                                        </td>
                                        <td>
                                            <input type="text" name ="id" value = "<?php echo $id; ?>" size = "15" >
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <input type="submit" value="Submit">
                                        </td>
                                        <td>
                                            <input type="reset" value = "Reset" />
                                        </td>

                                    </tr>


								
                                
                                <!-- setup the table -->
								<table border="1" width="75%">
									<tr>
										<th width="50%">Courses</th>
										<th width="15%">CODE</th>
										<th width="35%">Weight</th>
									</tr>

								<?php
								$output = ""; //Set up a variable to store the output of the loop 
								//connect
								$conn = pg_connect("host=127.0.0.1 dbname=modil_db user=modil password=100657755" );  
								//N.B. replace the YOUR variables with your specific information
								//NOTE: "host=localhost..." SHOULD work, but if there is a problem with the config on opentech, use 127.0.0.1 instead

								//issue the query
								$sql = "SELECT * FROM courses
                                        ORDER BY courses.Code DESC";
									$result = pg_query($conn, $sql);
									$records = pg_num_rows($result);
                                    


								//generate the table
									for($i = 0; $i < $records; $i++){  //loop through all of the retrieved records and add to the output variable
										$output .= "\n\t<tr>\n\t\t<td>".pg_fetch_result($result, $i, "title")."</td>"; 
										$output .= "\n\t\t<td>".pg_fetch_result($result, $i, "Code")."</td>"; 
										$output .= "\n\t\t<td>".pg_fetch_result($result, $i, "Weighting")."</td>\n\t</tr>"; 
									}

									echo $output; //display the output
								?>
								</table>
								<!-- end the table -->
							</center>

                        </td>
                    </table>
                </td>
            <tr>
        </table>


        

        
    </div>
                                    
</body>





<?php 
    include ("./footer.php");
?>
