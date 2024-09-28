<?php

    include("db_connection.php");

    // Post array
    $posts = array();
    $helper = array();

    // Check the iload value
    if(empty($_POST['iload'])) {
        $vlimit = 1;
    } else {
        $vlimit = $_POST['iload'];
    }
    // Check the offset value
    if(empty($_POST['offset'])) {
        $offset = 1;
    } else {
        $offset = $_POST['offset'];
    }

    $posts['vlimit'] = $vlimit;
    $posts['offset'] = $offset;

    $query = "SELECT * FROM `posts` ORDER BY `id` ASC LIMIT ".$vlimit." OFFSET ".$offset."";

    $result = $link -> query($query);

    while($row = $result->fetch_array()) {

        $helper[] = array(
            "id" => $row['id'],
            "content" => $row['content'],
            "date" => $row['date']
        );
    }

    $posts['content'] = $helper;

    echo json_encode($posts); 


?>