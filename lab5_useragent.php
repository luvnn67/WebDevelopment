<?php 
    $file = "lab5_useragent.php";
    $date = "02 05 2022";
    $description = "This is LAB 5 for using php to get USER AGENT";
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
                            using php Scripts to get user agent
                        </h1>
                        <p>
                             Click <a href="./Lab5.php">here</a> to go back to Lab 5 homepage 
                        </p>
                        <p>
                            <?php
                                $agent = getenv("HTTP_USER_AGENT");
                                echo " You are using $agent.";

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