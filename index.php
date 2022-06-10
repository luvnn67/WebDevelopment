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
	<title>WEBD2201 - Home Page</title><!-- THE <title> WILL COME FROM A PHP VARIABLE TOO -->
</head>
<?php 
    $file = "index.php";
    $date = "02 05 2022";
    $description = "This is the homepage of my WEBD2201 class";
    $banner = "WEBD2201--Web Development Fundamentals";


    include ("./header.php");
?>

<body>
    <table class="body">
        <tr class ="body">
            <td class ="body">
                <h1> 
                        
                    Luv Modi's WEBD2201- Web Dev- Fundamentals Home Page 
                </h1>
                <p>
                    This Website is for my Web Dev- Fundamentals class at <a href="http://durhamcollege.ca/">Durham College</a> which includes links to all my labs
                </p>
                    
            </td>
                    
                        
        </tr>
    </table>
    
    
    

            
   
        
        
</body>
</html>


<?php 
    include ("./footer.php");
?>