<?php


function activeLinks($urinfo){

    $savedata = basename($_SERVER['REQUEST_URI'],".php");

    if($savedata==$urinfo){
        echo 'class="active"';
    }

}

?>


    <nav class="navbar navbar-default justify-content-between">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">Resorts World Sentosa</a>
        </div>
        <ul class="nav navbar-nav">
            <li <?php activeLinks("index")?>><a href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-star"></span> Favorite Attraction</a></li>
            <li <?php activeLinks("register")?>><a href="register.php"><span class="glyphicon glyphicon-lock"></span> Book Tickets</a></li>
            <li><a href="topdest.php"><span class="glyphicon glyphicon-star"></span> Top destination</a></li>

            <li><a href="#"><span class="glyphicon glyphicon-star"></span> About RWS</a></li>


        </ul>
        <div class="navbar-form pull-right">

            <form class="form-inline">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>



            </form>

        </div>
    </div>
</nav>

<div class="container-fluid">
    <div class="row">
        <div class="jumbotron">
            <h1 class="display-4">Resorts World Sentosa Singapore</h1>
            <p class="lead">We offers attractions that leave you wanting more...</p>
            <p class="lead">
                <a class="btn btn-primary btn-lg" href="#" role="button">Start Now!</a>
            </p>
        </div>


    </div>

</div>