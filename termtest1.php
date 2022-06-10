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
    $file = "termtest1.php";
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
                            Luv Modi's WEBD2201- Web Dev- Term Test 1 Page 
                        </h1>
                        <p>
                            This Website is for my Web Dev- Fundamentals class at <a href="http://durhamcollege.ca/">Durham College</a> which includes links to all my labs. This page includes standard Currency Conversion of multiple contries
                        </p>
                        <h4>Currency Conversion Rates</h4> 
                        <table border = "1" id = "conversion" align = "center" >

                            <caption>CONVERSION Rates</caption>
  


                            <tr>
                                <table border = "1" id = "countries" align = "center">
                                    <tr>
                                        <th>
                                            <span>Countries: Their Flags and Currencies</span>
                                        </th>
                                    </tr>
                                    
                                    <tr>
                                        <th>
                                            Country
                                        </th>
                                        <th>
                                            Flag
                                        </th>
                                        <th>
                                            Currency Symbol
                                        </th>
                                        <th>
                                            Canadian Conversion Rate
                                        </th>
                        
                                    </tr>
                        
                                    <tr>
                                        
                                        <td>
                                            Canada 
                                        </td>
                                        <td>
                                            <object data = "./images/canada.png" width = 100%>
                                            </object>
                        
                                        </td>
                                        
                                        <td>
                                            CAD &dollar;
                                        </td>
                        
                                        <td> CDN &dollar; 1.00 &equals; CDN &dollar; 1.00 </td>
                                    </tr>
                        
                                    <tr>
                                        <td>
                                            European Union
                                        </td>
                                        <td>
                                            <object data = "./images/france.png" width = 100%>
                                            </object>
                        
                                        </td>
                                        
                                        <td>
                                            Euro &dollar;
                                        </td>
                        
                                        <td> &dollar; 1.00 CAD &equals;  &euro; 0.6929 </td>
                                    </tr>
                                    
                                    <tr>
                                        <td>
                                            UK 
                                        </td>
                                        <td>
                                            <object data = "./images/uk.png" width = 100%>
                                            </object>
                        
                                        </td>
                                        
                                        <td>
                                            Pound &pound;
                                        </td>
                        
                                        <td> &dollar; 1.00 CAD &equals;  &pound; 0.5794 </td>
                                    </tr>
                        
                                    <tr>
                                        <td>
                                            USA 
                                        </td>
                                        <td>
                                            <object data = "./images/usa.png" width = 100%>
                                            </object>
                        
                                        </td>
                                        
                                        <td>
                                            USD &dollar;
                                        </td>
                        
                                        <td> &dollar; 1.00 CAD &equals;  &euro; 0.7863 USD </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            Japan 
                                        </td>
                                        <td>
                                            <object data = "./images/japan.png" width = 100%>
                                            </object>
                        
                                        </td>
                                        
                                        <td>
                                            Yen &yen;
                                        </td>
                        
                                        <td> &dollar; 1.00 CAD &equals;  &yen; 0.011 </td>
                                    </tr>
                                    
                                    <tr cellspan = "4" alight = "right">
                                        Currency conversion came from <cite www.google.com>BANK OF CANADA</cite>
                                    </tr>
                                    
                                </table>
                            </tr>

                        </table>



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