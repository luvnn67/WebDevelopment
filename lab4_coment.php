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
	<title>WEBD2201 - LAB 4 php COMMENTING Page</title><!-- THE <title> WILL COME FROM A PHP VARIABLE TOO -->
</head>
<?php 
    $file = "comment.php";
    $date = "02 05 2022";
    $description = "This is LAB 4 for PHP code implementation of my WEBD2201 class";
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
                            COMMENTING
                        </h1>
                        <p>
                             Click <a href="./Lab4.php">here</a> to go back to Lab 4 homepage 
                        </p>
                        <td align="center">
                            <?php
                                // This is a simple PHP comment.
                                /* This is a C-style, multiline comment. You can make this as
                                long as you'd like. */
                                # Used to shells? Use this kind of comment.
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