<?php 
    $file = "index.php";
    $date = "xx xx xxxx";
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
                    
                    <td class ="body">
                        <table border = "1" class="body">
                            <h1> 
                                Luv Modi's WEBD2201- Web Dev- Fundamentals LAB 2 Page 
                            </h1>
                            <p>
                                This Website is for my Web Dev- Fundamentals class at <a href="http://durhamcollege.ca/">Durham College</a> which includes links to all my labs. This page includes standard Table rules as well as their attributes and tags
                            </p>
                            <h4>MOST COMMON TAGS USED IN HTML TABLE</h4>
                            <caption>HTML TAGS</caption>
                            <th width = "20%">
                                Tag
                            </th>
                            <th width = "80%">
                                Description
                            </th>
                            
                            <tr>
                                <td>
                                    &lt;table&gt;
                                </td>
                                <td>
                                    Denotes the Start of a Table
                                </td>
                            </tr>
                
                            <tr>
                                <td>
                                    &lt;tr&gt;
                                </td>
                                <td>
                                    <li>Starts a new row</li>
                                    <li>Can only exist inside &lt;table&gt;</li>
                                </td>
                            </tr>
                
                            <tr>
                                <td>
                                    &lt;td&gt;
                                </td>
                                <td>
                                    <li>Defines cell within a table with columns</li>
                                    <li>Can only exist inside &lt;tr&gt;</li>
                                    <li>Therefore -- &lt;table&gt;/&lt;tr&gt;/&lt;td&gt;</li>
                                </td>
                            </tr>
                            
                            <tr>
                                <td>
                                    &lt;th&gt;
                                </td>
                                <td>
                                    <li>Behaves similar to &lt;td&gt;</li>
                                    <li>Can only exist inside &lt;tr&gt;</li>
                                    <li>Therefore -- &lt;table&gt;/&lt;tr&gt;/&lt;td&gt;</li>
                                </td>
                            </tr>
                
                            <tr>
                                <td>
                                    &lt;td&gt;
                                </td>
                                <td>
                                    <li>Defines cell within a table with columns</li>
                                    <li>Can only exist inside &lt;tr&gt;</li>
                                    <li>Therefore -- &lt;table&gt;/&lt;tr&gt;/&lt;td&gt;</li>
                                </td>
                            </tr>
                
                        </table>
                        <br/>
                        <br/>
                        <br/>
                        <br/>
                        <hr/>
                        
                        <table border = "1" class="body">
                            <h4>Information of Luv Mod's Favourite books</h4>
                            <caption>Favourite books</caption>
                            <th width = "20%">
                                Title
                            </th>
                            <th width = "20%">
                                Author
                            </th>
                            <th width = "20%">
                                Year
                            </th>
                            <th> 
                                Description
                            </th>
                            
                            
                            <tr>
                                <td>Percy Jackson and the Olympians: The Ligthing Theif</td>
                                <td>Rick Riordan</td>
                                <td>June 5th, 2005</td>
                                <td>Fantasy novel which is centered around Greek Mytholgy and a young teen with the name of Percy Jackson. With great stakes on the line, Percy must overcome many perils and obstacles in his way in order to find the ligthing theif</td>
                            </tr>
                            
                            <tr>
                                <td>A Game of Thrones</td>
                                <td>George Martin</td>
                                <td>August 1st, 1996</td>
                                <td>Another fantasy novel which follows two powerful families as their two ideologies collide, the continent of Westeros is plunged into chaos because of their dispute. The chaos becomes a ladder for all great houses and lesser houses to contend for the Iron Throne</td>
                            </tr>
                
                            <tr>
                                <td>Rich Dad, Poor Dad</td>
                                <td>Robert Kiyosaki</td>
                                <td>August 21st, 1997</td>
                                <td>It advocates the importance of financial literacy, financial independence and building wealth through investing in assets, real estate investing, starting and owning businesses, as well as increasing one's financial intelligence</td>
                            </tr>
                
                            <tr>
                                <td>48 Laws of Power</td>
                                <td>Robert Greene</td>
                                <td>Jult 11th, 1998</td>
                                <td>In this non fiction novel, Greene encompasses 3000 years of history into 48 laws to help understand how to acquire powerand avoid being manipulated by others</td> 
                            </tr>
                
                    
                        </table>
                        <br/>
                        <br/>
                        <br/>
                        <br/>
                        <hr/>
                
                        <table border = "1" class="body"> 
                            <h4>Luv Modi's Class Schedule</h4>
                            <caption>Weekly Class Schedule</caption>
                            <th width = "4%">
                                Hour
                            </th>
                            <th width = "12%">
                                Mon
                            </th>
                            <th width = "12%">
                                Tues
                            </th>
                            <th width = "12%">
                                Wed
                            </th>
                            <th width = "12%"> 
                                Thurs
                            </th>
                            <th width = "12%">
                                Fri
                            </th>
                            <th width = "12%">
                                Sat
                            </th>
                            <th width = "12%">
                                Sun
                            </th>
                
                            <tr>
                                <td>8 AM</td>
                                <td rowspan = "3" bgcolor="red" align = "center">SPARE</td>
                                <td rowspan = "2" bgcolor="red" align = "center" colspan = "3">SPARE</td>
                                <td rowspan = "2.5" align = "center" bgcolor="lightskyblue"> WEBD 2201 <br/> 8 AM- 10 AM</td>
                                <td rowspan = "2" bgcolor="red" align = "center" colspan = "2">SPARE</td>
                            </tr>
                            <tr>
                                <td>9 AM</td>    
                            </tr>
                            <tr>
                                <td>10 AM</td>
                                <td rowspan = "2.5" align = "center" bgcolor="lightskyblue"> WEBD 2201 <br/> 10 AM- 12 PM</td>
                                <td rowspan = "2.5" align = "center" bgcolor="lightskyblue"> GNED 1462 <br/> 10 AM- 12 PM</td>
                                <td rowspan = "2.5" align = "center" bgcolor="lightskyblue"> DBAS 1207 <br/> 10 AM- 12 PM</td>
                                <td rowspan = "2.5" align = "center" bgcolor="lightskyblue"> OOP 2200 <br/> 10 AM- 12 PM</td>
                                <td rowspan = "9" bgcolor="red" align = "center" colspan = "2">SPARE</td>
                            </tr>
                            <tr>
                                <td>11 AM</td>
                                <td rowspan = "2.5" align = "center" bgcolor="lightskyblue"> NETD 2201 <br/> 11 AM- 1 PM</td>
                            </tr>
                            <tr>
                                <td>12 PM</td>
                                <td rowspan = "1" bgcolor="red" align = "center" colspan = "3">SPARE</td>
                                <td rowspan = "7" bgcolor="red" align = "center" colspan = "1">SPARE</td>
                                
                            </tr>
                            <tr>
                                <td>1 PM</td>
                                <td rowspan = "4" bgcolor="red" align = "center" colspan = "1">SPARE</td>
                                <td rowspan = "1" align = "center" bgcolor="lightskyblue"> SYDE 2203 <br/> 1 PM- 2 PM</td>
                                <td rowspan = "1" bgcolor="red" align = "center" colspan = "1">SPARE</td>
                                <td rowspan = "4" bgcolor="red" align = "center" colspan = "1">SPARE</td>
                                
                                
                            </tr>
                            <tr>
                                <td>2 PM</td>
                                <td rowspan = "1" align = "center" bgcolor="lightskyblue"> NETD 2201 <br/> 2 PM- 3 PM</td>
                                <td rowspan = "2" align = "center" bgcolor="lightskyblue"> OOP 2200 <br/> 2 PM- 4 PM</td>
                    
                
                            </tr>
                            <tr>
                                <td>3 PM</td>
                                <td rowspan = "4" bgcolor="red" align = "center" colspan = "1">SPARE</td>
                            </tr>
                            <tr>
                                <td>4 PM</td>
                                <td rowspan = "3" align = "center" bgcolor="lightskyblue"> SYDE 2203 <br/> 4 PM- 6 PM</td>
                            </tr>
                            <tr>
                                <td>5 PM</td>
                                <td rowspan = "2.5" align = "center" bgcolor="lightskyblue"> LINU 4100 <br/> 5 PM- 7 PM</td>
                                <td rowspan = "2.5" align = "center" bgcolor="lightskyblue"> LINU 4100 <br/> 5 PM- 7 PM</td>
                            </tr>
                            <tr>
                                <td>6 PM</td>
                            </tr>



                        </table>
                        <a href="./index.html"> 
                            Home Page
                        </a>
                    
                        <p class = "footer">
                            This class has a corse code of <a href="http://opentech.durhamcollege.org/pufferd/webd2201/index.php">WEBD2201</a> in it we are introduced to the basic concepts of HTML
                        </p>
                                
                    </td>
                </tr>
            </body>    


        
    </div>  


</html>
<?php 
    include ("./footer.php");
?>