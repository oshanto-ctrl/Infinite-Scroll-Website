<?php

    // Require the connection.php file to connect with database
    include('db_connection.php');

    // Loop and get loremipsum data

    for($i = 0; $i < 101; $i++) {
        
        $content= file_get_contents("https://loripsum.net/api/short", true);
        
        $unixTime = time();
        
        $query = "INSERT INTO `posts` (`content`,`date`) VALUES ('".$content."' , $unixTime)";

        $result = mysqli_query($link, $query);

        //echo $file;
    }
   

?>