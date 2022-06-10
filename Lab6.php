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
	<title>WEBD2201 - LAB 6 SELF REFERRING FORMS</title><!-- THE <title> WILL COME FROM A PHP VARIABLE TOO -->
</head>

<?php 
    $file = "Lab6.php";
    $date = "02 08 2022";
    $description = "This is LAB 6 : Self Referring php Forms";
    $banner = "WEBD2201--Web Development Fundamentals";





    include ("./header.php");
?>





<body>
    <div id="content">
        <table class="main">
            <tr class="main">
                <td class ="body">
                    <table class="body">
                        <h1>
                            Self Referring php Forms
                        </h1>
                        <p>
                             This page outlines the basic concepts of php forms. Click <a href="./index.php">here</a> to go back to the homepage 
                        </p>
                        <td align="left">
                            
                            <?php
                            //DECLARE VARIABLES
                            $error = "";
                            $output = "";
                            $start = "";
                            $stop = "";
                            $incr = "";
                            $checkResult = false;
                            $MAX_ITERATIONS=100;
                            ?>
                            <h2><?php echo $output; ?></h2>
                            <h3><?php echo $error; ?></h3>
                            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" >
                                Start Temperature: <input type="text" name="start_num" size="2"<?php ?>/>
                                <br/>
                                Stop Temperature: <input type="text" name="stop_num" size="2" />
                                <br/>
                                Temperature Increse by: <input type="text" name="increment_num" size="2" />
                                <br/>
                                <br/>
                                <input color = "white" type="submit" value="Create Conversion Table" name="calculate"/>
                                
                                
                                <?php
                                //php Coding
                                    error_reporting(E_ERROR | E_PARSE);
                                    try {
                                    if($_SERVER["REQUEST_METHOD"] == "GET"){
                                        $start = "";
                                        $stop = "";
                                        $incr = "";
                                    }
                                    else if($_SERVER["REQUEST_METHOD"] == "POST"){
                                        $start=(double)trim($_POST["start_num"]);
                                        $stop=(double)trim($_POST["stop_num"]);
                                        $incr=(double)trim($_POST["increment_num"]);
                                        $num = (double)($stop-$start)/$incr;
                                        if($start == "" || $stop == "" || $incr == "" || $num == "")///IF LEFT BLANK ERROR 
                                        {
                                        
                                            $error .= "FIELDS CANNONT BE BLANK.";
                                            echo $error;
                                        }
                                        else if($num>$MAX_ITERATIONS)
                                        {
                                            $error .= "CANNONT EXCEED MAXIMUM ITERATION OF 100. PLEASE ENTER A VALID INPUT"; //IF USER EXCEEDS MAX  INCREASE 
                                            echo $error;
                                        }
                                        else{  
                                            echo "<table border='1'>";//CREATE TABLE
                                            echo "<tr>";
                                            echo "<th>CELCIUS</th>";
                                            echo "<th>FARENHEIT</th>";
                                            echo "</tr>";
                                            for($i=$start; $i<=$stop; $i += $incr){
                                                echo "<tr>";
                                                echo "<td>". $i . "°</td>";
                                                echo "<td>". (($i * 9/5) + 32 ). "°</td>";//CALCULATE
                                                echo "</tr>";
                                            }
                                        }
                                        echo "</table>";
                                        }
                                        if($error == ""){
                                            $output = "";
                                        }
                                        else{
                                            $error .= "<br/>PLEASE ENTER A VALID INPUT.";
                                        }
                                        }
                                        
                                        catch(DivisionByZeroError $e)
                                        {
                                            echo "FIELDS CANNONT BE BLANK.";
                                        }
                                        catch(Exception $e) 
                                        {
                                            echo 'PLEASE ENTER A VALID INPUT';
                                        }
                                    
                                ?>
                            </form>
                            <?php
                            ?>


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