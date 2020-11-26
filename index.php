<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Website Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <style>
    </style>
</head>
<body>
<div class="jumbotron text-center" style="margin-bottom:0; height: 210px; background-color: lightyellow">
    <h1>BuildMore</h1>
    <p>Perfect way to start building more!</p>
</div>
<nav class="navbar navbar-inverse">
    <a class="navbar-brand" href="index.php">BuildMore</a>
    <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
            <li class="active"><a href="index.php">Main</a></li>
            <li><a href="top.html">Top</a></li>
            <li><a href="profile.html">Profile</a></li>
            <li><a href="membership.html">Membership</a></li>
            <li><a href="aboutus.html">About us </a></li>
            <li><a href="sazina.php">Sazina </a></li>
        </ul>
    </div>
</nav>
<div class="container">
    <div class="row">
        <div class="col-sm-4">
            <h3>Search</h3>
            <p>Room count:</p>
            <ul class="nav nav-pills nav-stacked"style="background: lightblue">
                <li><a href="#">1 room apartment</a></li>
                <li><a href="#">2 room apartment</a></li>
                <li><a href="#">3 room apartment</a></li>
            </ul>
        </div>
        <div class="col-sm-8">
            <h2>Apartment Nr1</h2>
            <h5>Title description</h5>
            <img src="images/dzivoklis1.JPG" width="500" height="333">
            <p>Owner Name...</p>
            <p>Description about apartment...</p>
            <br>
            <h2>Apartment Nr2</h2>
            <h5>Title description</h5>
            <img src="images/dzivoklis2.JPG" width="500" height="333">
            <p>Owner Name...</p>
            <p>Description about apartment...</p>
            <h2>Apartment Nr3</h2>
            <h5>Title description</h5>
            <img src="images/dzivoklis3.JPG" width="500" height="333">
            <p>Owner Name...</p>
            <p>Description about apartment...</p>
        </div>
    </div>
</div>
</body>
</html>
