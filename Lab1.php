<?php 
    $file = "Lab1.php";
    $date = "02 05 2022";
    $description = "This is the homepage of my WEBD2201 class";
    $banner = "WEBD2201--Web Development Fundamentals";


    include ("./header.php");
?>


<html>
    <head>
        <title> 
            Lab 1: Basic XHTML Pages
        </title>
        <!----
        modiL
        lab1.html
        Feb 6th 2021
        This is the first lab page for my WEBD2201 class which deals with XHTML and special chracters
        -->
        <link rel="stylesheet" href="style.css">
        
    </head>
    <div id="content">
        <body>
            <table class="main" border ="1">
                <tr class="main">


                        
                    </td>
                    <td class ="body">
                        <h1> 
                            Luv Modi's WEBD2201- Web Dev- Fundamentals LAB 1 Page 
                        </h1>
                        <p>
                            This Website is for my Web Dev- Fundamentals class at <a href="http://durhamcollege.ca/">Durham College</a> which includes links to all my labs. This page outlines the use of specail characters in HTML 
                        </p>
                        <table border = "1" class="body">
                            <tr>
                                <td>
                                    <h2>Working With HTML TABLES</h2>
                        
                                    <h3>
                                        Einsteins Theory of Relativity
                                    </h3>
                                    <p>
                                        The Above is a header for the Einstein Theory of Relativity and practice of text formating in HTML
                                    </p>
                                    <h2>
                                        <i>E=mc<sup>2</sup></i>
                                    </h2>
                                    <hr/>
                
                
                                    <h3>
                                        Currency Conversion with use of special chracters
                                    </h3>
                                    <p>
                                        This header outlines the use of special chracters within HTML with currency conversions exercise
                                    </p>
                                    <h2>
                                        $1.00CAD = $0.7USD = &pound;0.4877 = &euro;0.6435 = &yen;82.77
                                    </h2>
                                    <hr/>
                
                
                                    <h3 align = "left">
                                        CODE SNIPPIT
                                    </h3>
                                    <p align="left">
                                        This segment shows how to implement code into HTML using nbsp and &lt;br&gt;
                                    </p>
                                    <h2 align = "left">
                                        <code>
                                            #include &lt;iostream.h&gt; <br/>
                                            <br/>
                                            int main() <br/>
                                            {<br/>
                                                &nbsp;&nbsp;&nbsp;&nbsp;cout<< "Hello world"<< endl; <br/>
                                                &nbsp;&nbsp;&nbsp;&nbsp;return 0;<br/>
                                            }<br/>
                                        </code>
                                    </h2>
                                    <hr/>
                
                
                                    <h3>
                                        Chemistry Conversion
                                    </h3>
                                    <p> 
                                        This segment outlines how to implement HTML code with subscripts via &lt;sub&gt;
                                    </p>
                                    <h2> 
                                        2H<sub>2</sub>+O<sub>2</sub> = H<sub>2</sub>O + Heat
                                    </h2>
                                    <hr/>
                
                
                                    <h3> 
                                        LIST EXAMPLE ORDER IMPORTANT
                                    </h3>
                                    <p> 
                                        This Segment Practices ordering lists via &lt;ol&gt; and &lt;li&gt;
                                    </p>
                                    <h2 align="left"> 
                                        How To Start a Car
                                        <ol> 
                                            <li>Place key in ignition</li>
                                            <li>Press break pedal</li>
                                            <li>Turn the ignition</li>
                                        </ol>
                                    </h2>
                                    <hr/>
                    
                                    <h3> 
                                        LIST EXAMPLE ORDER NOT IMPORTANT
                                    </h3>
                                    <p>
                                        This Segment is like the last but order is not important
                                    </p>
                                    <h2 align="left">
                                        Things to do before trip
                                        <ul>
                                            <li>Renew passport</li>
                                            <li>Convert currency</li>
                                            <li>Confirm Tickets and Reservations</li>
                                            <li>Meet all travel &amp; health guidelines</li>
                                        </ul>
                                    </h2>
                                    <hr/>
                                    <p class = "footer">
                                        This class has a corse code of <a href="http://opentech.durhamcollege.org/pufferd/webd2201/index.php">WEBD2201</a> in it we are introduced to the basic concepts of HTML
                                        <a href="./index.html"> 
                                        Home Page
                                    </a>
                                    </p>
                                </td>
                            </tr>
                        </table>
            
                    </td>
                </tr>
                <td></td>


            



            </table>
            
                

            









            


    

        </body>
    </div>
</html>
<?php 
    include ("./footer.php");
?>