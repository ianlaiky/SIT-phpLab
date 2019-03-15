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
<style>
    .error {
        color: red;
    }
</style>

<?php
include 'header.inc'
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-4">
            <div class="list-group">
                        <span href="#" class="list-group-item list-group-item-info">
                            Account
                        </span>

                <a href="#" class="list-group-item">
                    Login
                </a>

                <a href="#" class="list-group-item active">
                    Register
                </a>

                <a href="#" class="list-group-item">
                    Recover Password
                </a>

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