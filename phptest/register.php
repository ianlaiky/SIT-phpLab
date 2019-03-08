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


<div class="container">
    <div class="row">

        <div class="col-md-3">


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




        <div class="col-md-9">

            <div class="panel">
                <div class="panel-body">
                    <form method="post" action="register.php">
                        <div class="form-group row">
                            <label class="col-sm-2" for="firstname">First Name:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="firstname" placeholder="Enter First Name">
                            </div>

                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2" for="lastname">Last Name: </label>

                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="lastname" placeholder="Enter Last Name">

                            </div>
                        </div>


                        <div class="form-group row">
                            <label class="col-sm-2" for="inputEmail">Email address</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="inputEmail"
                                       aria-describedby="emailHelp" placeholder="Enter email">

                            </div>

                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2" for="inputpassword">Password</label>

                            <div class="col-sm-10">
                                <input type="password" class="form-control" id="inputpassword"
                                placeholder="Password">
                            </div>

                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2" for="inputpassword">Password Confirm</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" id="inputpassword"
                                placeholder="Password">
                            </div>

                        </div>
                        <div class="form-check row">
                            <span class="col-sm-2"></span>
                            <div class="col-sm-10">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Remember me</label>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-sm-2">

                            </div>
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">Submit</button>

                            </div>

                        </div>
                    </form>


                </div>


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

</body>
</html>
