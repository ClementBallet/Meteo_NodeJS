<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>API NODE MCU</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highcharts/5.0.6/css/highcharts.css" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container">
      <div class="row content">
        <div class="col-sm-3 sidenav">
          <h4>API NODE MCU</h4>
          <ul class="nav nav-pills nav-stacked">
            <li class="active" id="button1" style="cursor: pointer;"><a>Graphique 1</a></li>
            <li id="button2" style="cursor: pointer;"><a>Graphique 2</a></li>
          </ul><br>
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Search...">
            <span class="input-group-btn">
              <button class="btn btn-default" type="button">
                <span class="glyphicon glyphicon-search"></span>
              </button>
            </span>
          </div>
        </div>

        <div class="col-sm-9 graphic" id="graphic" style="min-width: 310px; height: 400px; margin: 0 auto"></div>

      </div><!-- row content -->
    </div><!-- container -->

    <footer class="container-fluid text-center">
      <p>API NODE MCU by Kevin Landry & Clément Ballet - Design Tech Académie</p>
    </footer>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://code.highcharts.com/highcharts.js"></script>
    <script type="text/javascript" src="https://code.highcharts.com/modules/exporting.js"></script>
    <script type="text/javascript" src="models/test-graphics.js"></script>
    <script type="text/javascript" src="models/onclick.js"></script>
  </body>
</html>
