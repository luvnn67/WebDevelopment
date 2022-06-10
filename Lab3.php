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
    $file = "Lab3.php";
    $date = "02 05 2022";
    $description = "This is LAB 3 of my WEBD2201 class";
    $banner = "WEBD2201--Web Development Fundamentals";


    include ("./header.php");
?>

<body>
    <div id="content">
        <table class="main" border ="1">
            <tr class="main">
                <td class ="body">
                    <table border = "1" class="body">
                        <h1> 
                            Luv Modi's WEBD2201- Web Dev- Fundamentals LAB 3 Page 
                        </h1>
                        <p>
                            This Website is for my Web Dev- Fundamentals class at <a href="http://durhamcollege.ca/">Durham College</a> which includes links to all my labs. This page outlines all the CSS selectors used to style this website
                        </p>
                        <td valign="top" align="center">
                            <table class = "css" border = "1">
                                <caption>CSS SELECTORS</caption>
                                <th width = "20">
                                    SELECTOR 
                                </th>
                                <th width = "80%">
                                    DESCRIPTION
                                </th>
                                <tr>
                                    <td>body</td>
                                    <td>The body selector is similar to the motherboar, it controls all aspects of user interface on the webpage including text size, font, background color</td>
                                </tr>
                                <tr>
                                    <td>table</td>
                                    <td>The table selector controls all aspects of HTML tables as it organizes the webpage into certain sections, as demonstrated in the this webpage by the navigation menu</td>   
                                </tr>
                                <tr>
                                    <td>p</td>
                                    <td>The paragraph selector controls all aspects of paragraph text written by the user including font size, color, alignment and weight</td>
                                </tr>
                                <tr>
                                    <td>tr</td>
                                    <td>The row selector controls all aspects of a cell row including its alignment, color, font color, size, family aswell as background color</td>
                                </tr>
                                <tr>
                                    <td>td</td>
                                    <td>The column selector controls all aspects of its alignment, color, font color, size, family aswell as background color however it will only affect columns wihtin that row</td>
                                </tr>
                                <tr>
                                    <td>th</td>
                                    <td>The header selector is not as robust compared to the previous header selectors. They funtion similar to td as demonstrated in this HTML page</td>
                                </tr>
                                <tr>
                                    <td>caption</td>
                                    <td>The caption selector is also not as robust compared to the previous selectors and it behaves very similar to the h2 selector where its attributes can be manipulated via css</td>
                                </tr>
                                <tr>
                                    <td>p</td>
                                    <td>The paragraph selector is very unique in the sense that it defaults to standard text document however its attributes can be manipulated via css</td>
                                </tr>
                                <tr>
                                    <td>a</td>
                                    <td>The reference selector is very unique aswell because it can be attached with a property in css which will manipulate its behavior in various ways</td>
                                </tr>
                                <tr>
                                    <td>#</td>
                                    <td>Style IDs are very helpful because they allow the user to maniuplate attributes of a specific element. Therefore each style ID should be uniqe. An example of this is demonstrated on this page</td>
                                </tr>
                            </table>
                            <a href="./index.html"> 
                                Home Page
                            </a>
                
                            <p>
                                This class has a corse code of <a href="http://opentech.durhamcollege.org/pufferd/webd2201/index.php">WEBD2201</a> in it we are introduced to the basic concepts of HTML
                            </p>
                        </td>


                            
            
                    </table>
                </td>
            </tr>
        </table>
    </div>
        

</body>
</html>
<?php 
    include ("./footer.php");
?>