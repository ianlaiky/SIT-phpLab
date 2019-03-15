<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link href="css/bootstrap.min.css" rel="stylesheet"/>
    <link href="css/css.css" rel="stylesheet"/>


</head>
<body>


<?php
include 'header.inc'
?>


<?php

require_once('../config.php');
$connection = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME);

if (mysqli_connect_errno()) {
    die(mysqli_connect_errno());
}
$sql = "Select * from attractions";


?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-4">
            <div class="list-group">
                        <span href="#" class="list-group-item list-group-item-info">
                            Account
                        </span>

                <?php

                function actClick($id,$data,$dataid)
                {
                    if ($_GET['id'] == $id) {
                        echo "<a href='topdest.php?id=" . $dataid . "'" . "class='list-group-item active'>" . $data . "</a>";
                    } else {
                        echo "<a href='topdest.php?id=" . $dataid . "'" ."class='list-group-item'>" . $data . "</a>";
                    };

                }


                ?>


                <?php

                if ($result = mysqli_query($connection, $sql)) {
                    while ($row = mysqli_fetch_assoc($result)) {
//                        echo  $row["id"];
                        echo  actClick($row["id"],$row["type"],$row["id"]);


                    }
                }


                ?>


            </div>
        </div>

    </div>


</div>


<?php

include 'footer.inc'
?>

<script
        src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js">
</script>
<script src="js/bootstrap.min.js"></script>
<!--<script>-->
<!--    (function($){ })(-->
<!--        var checking = 0;-->
<!---->
<!--    );-->
<!---->
<!--</script>-->
</body>
</html>