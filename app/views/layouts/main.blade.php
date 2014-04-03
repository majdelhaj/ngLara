<!DOCTYPE html>
<html lang="en" ng-app="ngLara">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- angular-motion css -->
    <link rel="stylesheet" href="css/angular-motion/dist/angular-motion.min.css">

    <!-- your css files here -->
    <link rel="stylesheet" type="text/css" href="css/ng-strap-modal.css">

    <title>ngLara</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body style="width: 1024px; margin: auto;">

    <div class="page-header">
      <h1>ngLara <small>Bootstrap + Angular + Laravel</small></h1>
    </div>
    

    <nav class="navbar navbar-default" role="navigation">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <a href="#/" class="navbar-brand">Home</a>
          <a href="#/users" class="navbar-brand">Users</a>
        </div>
      </div><!-- /.container-fluid -->
    </nav>


    <div ng-view>
        <!-- angular templates will loaded here -->   
    </div>
    

    <!-- Footer -->
    <br/><br/><br/><br/>
    <div class="panel-footer">
        ngLara © 2014 - <a href="https://www.facebook.com/majd.latif"> Majd Alhaj</a> - <a href="mailto:majdelhaj@gmail.com">majdelhaj@gmail.com</a>
    </div>
    


    <!-- IMPORTANT !! -->
    <!-- MUST BE IN LAYOUT FILE -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/include/angular.min.js"></script>
    <script src="js/include/angular-route/angular-route.min.js"></script>
    <script src="js/include/angular-strap/dist/angular-strap.min.js"></script>
    <script src="js/include/angular-strap/dist/angular-strap.tpl.min.js"></script>
    <script src="js/include/angular-animate/angular-animate.min.js"></script>
    <script src="js/app.js"></script>
    <!-- =================================== -->

    <!-- Your Angular Services Include Here -->
    <script src="js/services/UserService.js"></script>
    <!-- Your Angular Controllers Include Here -->
    <script src="js/controllers/UserController.js"></script>
    <!-- Your scripts here -->
    <!-- Your scripts here -->

  </body>
</html>