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
	<title>WEBD2201 - LAB 4 php start tags Page</title><!-- THE <title> WILL COME FROM A PHP VARIABLE TOO -->
</head>
<?php 
    $file = "start.php";
    $date = "02 05 2022";
    $description = "This is LAB 4 Start tags of php of my WEBD2201 class";
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
                            PHP START AND END TAGS 
                        </h1>
                        <p>
                             Click <a href="./Lab4.php">here</a> to go back to Lab 4 homepage 
                        </p>
                        <td align="center">
                            <table align="center">
                                <table border ="1">
                                    <caption>BASIC PHP END AND START TAGS</caption>

                                    <tr>
                                        <th style="width:20%">Method</th>
                                        <th style="width:40%">Opening Tag</th>
                                        <th style="width:40%">Closing Tag</th>
                                    </tr>
                                    <tr>
                                        <td align="center">1</td>
                                        <td>&lt;?php</td>
                                        <td>?&gt;</td>
                                    </tr>
                                    <tr>
                                        <td align="center">2</td>
                                        <td>&lt;?</td>
                                        <td>?&gt;</td>
                                    </tr>
                                    <tr>
                                        <td align="center">3</td>
                                        <td>&lt;script language ="php"&gt;</td>
                                        <td>&lt;/&gt;</td>
                                    </tr>
                                </table>


                            </table>
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