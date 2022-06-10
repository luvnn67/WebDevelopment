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
	<title>WEBD2201 - LAB 3 Page</title><!-- THE <title> WILL COME FROM A PHP VARIABLE TOO -->
</head>
<?php 
    $file = "Lab4.php";
    $date = "02 05 2022";
    $description = "This is LAB 4 of my WEBD2201 class";
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
                            Luv Modi's WEBD2201- Web Dev- Fundamentals LAB 4 Page 
                        </h1>
                        <p>
                            This Website is for my Web Dev- Fundamentals class at <a href="http://durhamcollege.ca/">Durham College</a> This page outlines the basic use of php
                        </p>
                        <td valign="top" align="left">
                            <li><a href="./lab4_startphp.php">PHP Start and End Tags</a></li>
                            <li><a href="./lab4_code.php">Code Implementation</a></li> 
                            <li><a href="./lab4_escape.php">How To Escape Code</a></li>          
                            <li><a href="./lab4_coment.php">Commenting Your Code</a></li>			
                            <li><a href="./lab4_variable.php">PHP Variable and Value Types</a></li>
                            <li><a href="./lab4_constants.php">Using Constants</a></li>
                            <li><a href="./lab4_constants2.php">Using Constants 2</a></li>
                            <li><a href="./lab4_assignment.php">Assignment Operator</a></li>
                            <li><a href="./lab4_arithmatic.php">Arithmetic Operator</a></li>
                            <li><a href="./lab4_comparison.php">Comparsion Operator</a></li>
                            <li><a href="./lab4_logical.php">Logical Operator</a></li>	
                            
                        </td>
                    </table>
                </td>
            <tr>
        </table>


        

        
    </div>
                                    
</body>

