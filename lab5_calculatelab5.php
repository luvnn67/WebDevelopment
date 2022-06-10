<?php
// define variables and set to empty values
$value1 = "";
$value2 = "";
$data = "";
$total = "";



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $value1 = $_POST["value1"];
    $value2 = $_POST["value2"];
  

}
if (($value1 == "") || ($value2 == "")) {
    header("Refresh:0; url=lab5_calc.php");
}

if (($value1!="") || ($value2!="")) {
    if (isset($_POST["result"])) {
        if(isset($_POST["operation"]))
        {
            if ($_POST["operation"] == "MULTIPLY"){
               $total = multiply($_POST["value1"], $_POST["value2"]);
            };  //  Displaying Selected Value
            
            if ($_POST["operation"] == "ADD"){
               $total = add($_POST["value1"], $_POST["value2"]);
            };  //  Displaying Selected Value
    
            if ($_POST["operation"] == "SUBTRACT"){
               $total = subtract($_POST["value1"], $_POST["value2"]);
            };  //  Displaying Selected Value
            
            if ($_POST["operation"] == "DIVIDE"){
                $total = divide($_POST["value1"], $_POST["value2"]);
             };  //  Displaying Selected Value
        }
    }
}


//DEFINING OPERATION FUNCTIONS

function multiply($val1, $val2) {
    $data = $val1 * $val2;
    return $data;
    
}

function add($val1, $val2) {
    $data = $val1 + $val2;
    return $data;
    
}

function subtract($val1, $val2) {
    $data = $val1 - $val2;
    return $data;
    
}

function divide($val1, $val2) {
    $data = $val1 / $val2;
    return $data;
    
}

?> 

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
	<title>WEBD2201 - LAB 5 php using Scrpiting Calulations RESULTS PAGE</title><!-- THE <title> WILL COME FROM A PHP VARIABLE TOO -->
</head>
<?php 
    $file = "Lab.php";
    $date = "02 05 2022";
    $description = "This is LAB 5 for using php Calculate Operations RESULTS";
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
                            using php Scripts with Calculations RESULTS
                        </h1>
                        <p>
                             Click <a href="./Lab5.php">here</a> to go back to Lab 5 homepage 
                        </p>
                        <p>
                            <?php
                                echo $value1; 
                                echo $_POST["operation"];
                                echo $value2;
                                echo "=";
                                echo $total;

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