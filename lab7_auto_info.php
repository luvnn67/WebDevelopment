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
	<title>WEBD2201 - LAB 7 BOND MOVIE INFO</title><!-- THE <title> WILL COME FROM A PHP VARIABLE TOO -->
</head>

<?php 
    $file = "lab7_bond_info.php";
    $date = "04 08 2022";
    $description = "This is LAB 7 : Intro To Database using SQL with Bond Movies";
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
                            LAB 7 CAR INFO POPULATED BY SQL DATABSE FILE
                        </h1>
                        <p>
                             This page outlines the basic concepts of sql in php. THE CAR INFO page takes an sql file in the server and populates a table Click <a href="./Lab7.php">here</a> to go back to LAB 7the homepage 
                        </p>
                        <td align="left">
							<center>
								<p>
								This page utilizes several postgreSQL method calls.  Such as pg_connect(),
								pg_query(), and pg_fetch_result().
								</p>
								<!-- setup the table -->
								<table border="1" width="75%">
									<tr>
										<th width="20%">Make</th>
										<th width="16%">Model</th>
										<th width="16%">Year</th>
                                        <th width="16%">Owner</th>
										<th width="16%">Price ($)</th>
										<th width="16%">Purchase Date</th>
									</tr>

								<?php
								$output = ""; //Set up a variable to store the output of the loop 
								//connect
								$conn = pg_connect("host=127.0.0.1 dbname=modil_db user=modil password=100657755" );  
								//N.B. replace the YOUR variables with your specific information
								//NOTE: "host=localhost..." SHOULD work, but if there is a problem with the config on opentech, use 127.0.0.1 instead

								//issue the query
								$sql = "SELECT * FROM automobile";
									$result = pg_query($conn, $sql);
									$records = pg_num_rows($result);

								//generate the table
									for($i = 0; $i < $records; $i++){  //loop through all of the retrieved records and add to the output variable
										$output .= "\n\t<tr>\n\t\t<td>".pg_fetch_result($result, $i, "make")."</td>"; 
										$output .= "\n\t\t<td>".pg_fetch_result($result, $i, "model")."</td>"; 
										$output .= "\n\t\t<td>".pg_fetch_result($result, $i, "year")."</td>";
                                        $output .= "\n\t\t<td>".pg_fetch_result($result, $i, "owner_Name")."</td>";
                                        $output .= "\n\t\t<td>".pg_fetch_result($result, $i, "price")."</td>";
                                        $output .= "\n\t\t<td>".pg_fetch_result($result, $i, "purchaseDate")."</td>\n\t</tr>";    
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





