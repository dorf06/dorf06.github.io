<?php
    if ($_GET)
    {
        header ( 'http://api-public.guidebox.com/v1.43/us/4g6MVVniY6wpIzlrAtv8uT4IKekIkg/search/title/' + $_GET['searchTerm']);
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>
        Streaming Search
    </title>

    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

      <!-- Stylesheets -->
      <link href="css/master.css" rel="stylesheet">
</head>

<body>

    <div id="searchBox" class="row">
        <form enctype="text/plain" action="streamingSearch.php" method="get">
        <div class="col-md-5 col-offset-1">
            <input type="text" name="searchTerm" id="searchTerm">
        </div>
        <div class="col-md-5 col-md-offset">
            <input type="submit" name="searchSubmit" value="Search">
        </div>
        </form>
    </div>

</body>
</html>
