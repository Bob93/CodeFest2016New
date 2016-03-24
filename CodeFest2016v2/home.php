<?php
session_start();
if(!isset($_SESSION['login'])) {
    header("location: index.php");
}

include 'connector.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Logo Nav - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/logo-nav.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
    <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                        <li>
                            <a href="?page=verlof">Verlof</a>
                        </li>
                        <li>
                            <a href="?page=urenregistratie">Uren</a>
                        </li>
                        <li>
                            <a href="#">Overzicht</a>
                        </li>
                        <?php if($_SESSION['type_ID'] == 2) {
                        echo '
                        <li>
                            <a href="#">Werknemertoevoegen</a>
                        </li>
                        <li>
                            <a href="#">Werknemer updaten</a>
                        </li>
                        <li>
                            <a href="#">Werknemer verwijderen</a>
                        </li>
                        <li>
                            <a href="#">Overzichten</a>
                        </li>
                        <li>
                            <a href="#">Parameters</a>
                        </li>';
                    };?>'
                </ul>

            </div>
            <!-- /.navbar-collapse -->
        </div>
    </nav>
        <!-- Page Content -->


        <!-- /.container -->
        <div class="container">
            <?php
            if (isset($_GET['page'])){
                switch($_GET['page']){
                    case 'verlof':
                        include 'includes/verlof.inc.php';
                        break;
                    case 'urenregistratie':
                        include 'includes/urenregistratie.inc.php';
                        break;
                    case  'overzicht':
                        include 'includes/overzicht.inc.php';
                        break;
                    default:
                        include 'includes/verlof.inc.php';
                        break;
                }
            }
            ?>
        </div>
        <!-- jQuery -->
        <script src="js/jquery.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>
';