<?php
/**
 * Created by PhpStorm.
 * User: Ian
 * Date: 20/3/2019
 * Time: 8:23 PM
 */

//fetch the information for the database
//if the blob data is of the content type image/gif for instance

if (isset($_GET['id'])) {
    require_once('../config.php');
    $connection = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME);

    if (mysqli_connect_errno()) {
        die(mysqli_connect_errno());
    }
    $sql = "Select * from activities where id =".$_GET['id'];
    if ($result = mysqli_query($connection, $sql)) {
        while ($row = mysqli_fetch_assoc($result)) {

            $image=$row['picture'];
            header("content-type: image/jpeg");
            echo $image;

        }


    }
    mysqli_free_result($result);
    mysqli_close($connection);

}
?>