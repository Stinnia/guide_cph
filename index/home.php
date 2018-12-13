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
    <!-- my css-->
    <!-- jqmobile-->
    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
    <link rel="stylesheet" href="css/style.css" />

    <!-- adding Firebase to the project -->
    <script src="https://www.gstatic.com/firebasejs/5.7.0/firebase.js"></script>

    <script>
        // Initialize Firebase
        var config = {
            apiKey: "AIzaSyCFehxZmR7Ml3f85kHhHlFrHQd0w19A46M",
            authDomain: "guidecph-1543331288734.firebaseapp.com",
            databaseURL: "https://guidecph-1543331288734.firebaseio.com",
            projectId: "guidecph-1543331288734",
            storageBucket: "guidecph-1543331288734.appspot.com",
            messagingSenderId: "1025601520459"
        };
        firebase.initializeApp(config);
    </script>

    <!-- Login script-->
    <script src="js/login.js"></script>
    <!-- Our own scripts -->
    <script src="js/data_from_FB.js"></script>

</head>

<body>


    <!-- /landingpage -->
    <div data-role="page" id="landingpage">

        <!-- /header -->
        <div data-role="header">
            <h2>Menu</h2>
        </div>
        <!-- /header finish -->

        <div data-role="content">



            <a href="#tour" data-transition="flip">
                <img src=".\images\b12.png" class="img-fluid mb-2 rounded" alt="Responsive image">
            </a>

            <a href="#map" data-transition="flip">
                <img src=".\images\b12.png" class="img-fluid mb-2 rounded" alt="Responsive image">
            </a>

            <a href="#info" data-transition="flip">
                <img src=".\images\b12.png" class="img-fluid mb-2 rounded" alt="Responsive image">
            </a>
        </div>
    </div>
    <!-- /landingpage finish -->



    <!-- Start of tour -->
    <div data-role="page" id="tour" data-theme="a">
        <div data-role="header">
            <h2>Tour</h2>
            <a href="#landingpage" data-transition="flip">
                <span class="glyphicon glyphicon-chevron-left"></span>
            </a>

        </div>
        <!-- /header -->


        <div id="PoiList" data-role="content" data-theme="a">

        </div>
        <!-- /content -->

        <!-- /Menu -->

        <?php include 'menu.php';?>
            <!-- /navbar -->
        </div>
        <!-- /Menu finish -->
        <!-- /footer -->
    </div>
    <!-- /page tour finish -->


    <!-- Start of map -->
    <div data-role="page" id="map" data-theme="a">
        <div data-role="header">
            <h2>map</h2>
            <a href="#landingpage" data-transition="flip">
                <span class="glyphicon glyphicon-chevron-left"></span>
            </a>

        </div>
        <!-- /header -->


        <div data-role="content" data-theme="a">
            <!-- /map will go here -->


        </div>
        <!-- /content -->

        <!-- /Menu -->
        <?php include 'menu.php';?>
            <!-- /navbar -->
        </div>
        <!-- /Menu finish -->
        <!-- /footer -->
    </div>
    <!-- /page mapfinish-->



    <!-- Start of info -->
    <div data-role="page" id="info" data-theme="a">
        <div data-role="header">
            <h2>info</h2>
            <a href="#landingpage" data-transition="flip">
                <span class="glyphicon glyphicon-chevron-left"></span>
            </a>

        </div>
        <!-- /header -->


        <div data-role="content" data-theme="a">


        </div>
        <!-- /content -->

        <!-- /Menu -->
        <?php include 'menu.php';?>
            <!-- /navbar -->
        </div>
        <!-- /Menu finish -->
        <!-- /footer -->
    </div>
    <!-- /page info finish -->


    <!-- Start of #poi -->
    <div data-role="page" id="poi" data-theme="a">
        <div data-role="header">

            <a href="#one" data-transition="flip">
                <span class="glyphicon glyphicon-chevron-left"></span>
            </a>

        </div>
        <!-- /header -->


        <div data-role="content" data-theme="a">


        </div>
        <!-- /content -->

        <div data-role="footer">
        <?php include 'menu.php';?>
        </div>
        <!-- /footer -->
    </div>
    <!-- /page info poi finish -->









</body>


</html>