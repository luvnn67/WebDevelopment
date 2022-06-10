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
    $file = "Lab7.php";
    $date = "04 08 2022";
    $description = "This is LAB 7 : Intro To Database using SQL";
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
                            LAB 7 SQL and php
                        </h1>
                        <p>
                             This page outlines the basic concepts of sql in php. It provides quik links to the pages which are populated by sql files aswell as provides the sql file to refer to itself. Click <a href="./index.php">here</a> to go back to the homepage 
                        </p>
                        <td align="left">
                           <ol>
                                <li><a href="./lab7_bond_info.php">Bond Movie Info</a></li>
                                <li><a href="./lab7_auto_info.php">CAR INFO</a></li>
                                <li><a href="./lab7_bond_movies.sql">BOND MOVIES SQL FILE</a></li>
                                <li><a href="./lab7_auto_records.sql">CAR SQL FILE</a></li>
                           </ol>


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