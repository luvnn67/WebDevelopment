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
	<title>WEBD2201 - LAB 5 php using Scrpiting Calulations</title><!-- THE <title> WILL COME FROM A PHP VARIABLE TOO -->
</head>
<?php 
    $file = "lab5_calc.php";
    $date = "02 05 2022";
    $description = "This is LAB 5 for using php Calculate Operations";
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
                            using php Scripts with Calculations
                        </h1>
                        <p>
                             Click <a href="./Lab5.php">here</a> to go back to Lab 5 homepage 
                        </p>
                        
                        <form method="post" action="lab5_calculatelab5.php">
                            Value 1: <input type="text" name="value1">
                            Value 2: <input type="text" name="value2">
                            </br>
                            <input type="radio" name="operation" value="ADD">ADD          
                            <input type="radio" name="operation" value="SUBTRACT">SUBTRACT 
                            <input type="radio" name="operation" value="MULTIPLY">MULTIPLY 
                            <input type="radio" name="operation" value="DIVIDE">DIVIDE
                            </br>

                            <input type="submit" name="result" value="result">

                        </form>
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