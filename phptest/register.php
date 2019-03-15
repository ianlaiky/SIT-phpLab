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

<?php

$checkbox = "no";

$firstname = $lastname = $email = $password = $cPassword = $checkbox = "";
$firstnameErr = $lastnameErr = $emailErr = $passwordErr = $cPasswordErr = $checkboxErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {



    if (empty($_POST["firstname"])) {
        $firstnameErr = "*firstname is Required";

    } else {
        if (!preg_match("/^[a-zA-Z ]*$/", $_POST["firstname"])) {
            $firstnameErr = "Only letters and white space allowed";
        } else {
            $firstname = test_input($_POST["firstname"]);

        }
    }

    if (empty($_POST["lastname"])) {
        $lastnameErr = "*lastname is Required";

    } else {

        if (!preg_match("/^[a-zA-Z ]*$/", $_POST["lastname"])) {
            $lastnameErr = "Only letters and white space allowed";
        } else {
            $lastname = test_input($_POST["lastname"]);

        }

    }

    if (empty($_POST["inputEmail"])) {
        $emailErr = "*Please enter email";
    } else {
        if (!filter_var($_POST["inputEmail"], FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        } else {
            $email = test_input($_POST["inputEmail"]);

        }
    }


    if (empty($_POST["inputpassword"])) {
        $passwordErr = "*Please enter password";
    } else {
        if (!preg_match("/\w{8,}/", $_POST["inputpassword"])) {
            $passwordErr = "Min 8 character";
        } else {
            $password = test_input($_POST["inputpassword"]);

        }


    }

    if (empty($_POST["confirmpassword"])) {

        $cPasswordErr = "*Please confirm your password";

    } else {
        if ($_POST["confirmpassword"] != $_POST["inputpassword"]) {
            $cPasswordErr = "*Password do not match";
        } else {
            $cPassword = test_input($_POST["confirmpassword"]);

        }

    }

    if (!isset($_POST["checkbox"])) {
        $checkboxErr = "*Please check the checkbox";
    } else {
        $checkbox = $_POST["checkbox"];

    }


    echo $firstname;
    echo $lastname;
    echo $email;
    echo $password;
    echo $cPassword;
    echo $checkbox;


}

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}


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
                    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                        <div class="form-group row">
                            <label class="col-sm-2" for="firstname">First Name:</label>
                            <div class="col-sm-10">
                                <input name="firstname" type="text" class="form-control" id="firstname"
                                       placeholder="Enter First Name" value="<?php echo $firstname; ?>">
                                <span class="error"><?php echo $firstnameErr; ?></span>
                            </div>

                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2" for="lastname">Last Name: </label>

                            <div class="col-sm-10">
                                <input name="lastname" type="text" class="form-control" id="lastname"
                                       placeholder="Enter Last Name" value="<?php echo $lastname; ?>">
                                <span class="error"><?php echo $lastnameErr; ?></span>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label class="col-sm-2" for="inputEmail">Email address</label>
                            <div class="col-sm-10">
                                <input name="inputEmail" type="email" class="form-control" id="inputEmail"
                                       aria-describedby="emailHelp" placeholder="Enter email"
                                       value="<?php echo $email; ?>">
                                <span class="error"><?php echo $emailErr; ?></span>
                            </div>

                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2" for="inputpassword">Password</label>

                            <div class="col-sm-10">
                                <input name="inputpassword" type="password" class="form-control" id="inputpassword"
                                       placeholder="Password">
                                <span class="error"><?php echo $passwordErr; ?></span>
                            </div>

                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2" for="confirmpassword">Password Confirm</label>
                            <div class="col-sm-10">
                                <input name="confirmpassword" type="password" class="form-control" id="confirmpassword"
                                       placeholder="Password">
                                <span class="error"><?php echo $cPasswordErr; ?></span>
                            </div>

                        </div>
                        <div class="form-check row">
                            <span class="col-sm-2"></span>
                            <div class="col-sm-10">
                                <input name="checkbox" type="checkbox" class="form-check-input" id="exampleCheck1"
                                       value="select">
                                <label class="form-check-label" for="exampleCheck1">Remember me</label>
                                <span class="error"><?php echo $checkboxErr; ?></span>
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
<!--<script>-->
<!--    (function($){ })(-->
<!--        var checking = 0;-->
<!---->
<!--    );-->
<!---->
<!--</script>-->
</body>
</html>
