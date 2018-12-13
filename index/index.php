<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jq mobile app</title>

    <!-- jqmobile-->

    <!-- Bootstrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
    <!-- google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />

    <!-- Jquery Core and other libraries -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

    <!-- jqmobile-->
    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>


    <!-- my css-->
    <link rel="stylesheet" href="css/style.css" />

    <!-- Login script-->
    <script src="js/login.js"></script>

    <!-- My own scripts-->
    <script src="js/data_from_FB.js"></script>

</head>

<body>


    <div data-role="page" id="one">

        <div data-role="header">
            <div class="container">
                <div class="h2 text-center">Please use the password provided by Diamantvejsbuddhisme</div>
            </div>
        </div>
        <!-- /header -->

        <div data-role="content">
            <div class="container login">
                <div class="container text-center">

                    <div class="main"><br><br><br>
                        <form id="form_id" method="post" name="myform">
                            <label class="enter-pass">Enter password below</label><br>
                            <input type="password" name="password" id="password" class="logininputfield" /><br>
                            <input type="button" class="btn btn-primary text-center" value="Login" id="submit" onclick="validate()" />
                        </form>
                        <p class="helptext">If the password dosen´t work contact the admin<a href="#landingpage" class="herebutton" data-transition="pop"> here</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /content -->

</body>


</html>