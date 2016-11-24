<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Land Verification System</title>
  <link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/angular_material/0.8.3/angular-material.min.css">
  <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css"> <!-- load bootstrap via cdn -->

  <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css"> <!-- load fontawesome -->
  <script type="text/javascript" src="js/node_modules/angular/angular.min.js"></script>
    <script src="js/node_modules/angular-aria/angular-aria.min.js"></script>
  <script src="js/node_modules/angular-animate/angular-animate.min.js"></script>

  <!-- Angular Material Library -->
  <script src="js/node_modules/angular-material/angular-material.min.js"></script>
  <!--script type="text/javascript" src="js/app.js"></script-->
  <script type="text/javascript" src="js/controllers/LandCtrl.js"></script>
  <script type="text/javascript" src="js/services/LandVerificationService.js"></script>
  <script type="text/javascript" src="js/application.js"></script>

</head>
<body  ng-app="LandVerificationApp" ng-cloak>
  <div class="container" ng-controller="LandVerificationController as ctrl">
    <div class="container-fluid">
      <div class="panel panel-default">
        <div class="panel-body">
          <div class="form-group">
            <h2>Online Land Verification Service</h2>
            <input type="text" name="search" placeholder="Start typing parcel number" ng-model="searchText" class="form-control">
          </div>
        </div>
      </div>
      @yield("content");
    </div>
  </div>
</body>
</html>
