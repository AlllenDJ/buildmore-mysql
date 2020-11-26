<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

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
            <li><a href="kontakti.php">Contacti </a></li>
        </ul>
    </div>
</nav>
    <div class="row">
        <div class="col-md-2">
            <p></p>
        </div>
        <div class = "col-md-6">
            <form action="sazina" method="post">
                <div class="form-group">
                    <label for="name">Vārds:</label>
                    <input type="text" class="form-control" id="name" name="name">
                </div>
                <div class="form-group">
                    <label for="nane">Password:</label>
                    <input type="password" class="form-control" id="surname" name="surname">
                </div>
                <div class="form-group">
                    <label for="email">E-pasts:</label>
                    <input type="email" class="form-control" id="email" placeholder="Ievadiet savu epastu" name="email">
                </div>
                <div class="form-group">
                    <label for="name">Ages:</label>
                    <input type="number" class="form-control" id="mobile" name="mobile">
                </div>
                <div class="form-group">
                    <label for="question">Jūsu jautājums;</label>
                    <textarea class="form-control" id="question" rows="3" name="question"></textarea>
                </div>
                <button class="btn btn-success" type="submit" name="save">Nosūtīt</button>
            </form>
        </div>
        <div class="col-md-2">
            <p></p>
        </div>
    </div>
</div>
<?php
    if(isset($_POST['save'])){
        echo "<b>Vārds:</b>{$_POST['name']}";
        echo "<b>Parole:</b>{$_POST['surname']}<br/>";
        echo "<b>E-pasts:</b>{$_POST['email']}<br/>";
        echo "<b>Telefons:</b>{$_POST['mobile']}<br/>";
        echo "<b>Jūsu jautājums:</b>{$_POST['question']}";
    }

?>
</body>
</html>
