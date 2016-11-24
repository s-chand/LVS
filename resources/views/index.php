<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Land Verification System</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

  <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css"> <!-- load fontawesome -->


  <script type="text/javascript" src="js/node_modules/angular/angular.min.js"></script>
  <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.5.8/angular-sanitize.js"></script>
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.28//angular-route.min.js"></script>
  <script type="text/javascript" src="js/node_modules/angular-animate/angular-animate.min.js"></script>
  <script type="text/javascript" src="js/node_modules/angular-touch/angular-touch.min.js"></script>
  <script src="js/ui-bootstrap-2.2.0.min.js"></script>
  <script src="js/ui-bootstrap-tpls-2.2.0.min.js"></script>
  <script src="js/bower_components/angular-toArrayFilter/toArrayFilter.js"></script>
  <!--script type="text/javascript" src="js/app.js"></script-->
  <script type="text/javascript" src="js/controllers/LandCtrl.js"></script>
  <!--script type="text/javascript" src="js/filters/customFilter.js"></script-->
  <script type="text/javascript" src="js/services/LandVerificationService.js"></script>
  <script type="text/javascript" src="js/application.js"></script>

</head>
<body ng-app="LandVerificationApp" ng-controller="LandVerificationController as $ctrl" ng-cloak>
  <div class="container">
    <div class="container-fluid">
      <div class="panel panel-default">
        <div class="panel-body">
          <div class="form-group">
            <h2>Online Land Verification Service</h2>

<!-- TypeAhead TEsting -->
    <pre>Model: {{asyncSelected.name_lastpart+"/"+asyncSelected.name_firstpart}}</pre>
    <input type="text" ng-model="asyncSelected" placeholder="Start typing Parcel number" uib-typeahead="parcel.name_firstpart for parcel in getParcel($viewValue)" typeahead-loading="loadingLocations" typeahead-no-results="noResults" class="form-control" typeahead-on-select="$ctrl.open($item)">
    <i ng-show="loadingLocations" class="glyphicon glyphicon-refresh"></i>
    <div ng-show="noResults">
      <i class="glyphicon glyphicon-remove"></i> No Results Found
    </div>

    <!-- Typeahead TEsting end -->
          </div>
        </div>
      </div>
      <table ng-hide="loading" class="table table-striped">
        <tr>
          <th>#</th>
          <th>Parcel Number</th>
          <th>Location</th>
          <th>Controls</th>
        </tr>
        <tr ng-repeat="data in LandData">
          <td>{{$index+1}}</td>
          <td>{{data.name_firstpart}}</td>
          <td>{{data.name_lastpart}}</td>
          <td><button type="button" class="btn btn-default" ng-click="$ctrl.open(data);">View Details</button></td>
          <!--td><a ng-click="show(data.id)">Property Details</a></td-->
          <script type="text/ng-template" id="myModalContent.html">
          <div class="modal-header">
              <h3 class="modal-title" id="modal-title">Details View</h3>
          </div>
          <div class="modal-body" id="modal-body">
            <div class="panel panel-primary">
                <div class="panel-heading">
                  <div class="panel-title"> Parcel Details for property number: <span class="badge">{{$ctrl.item.name_lastpart}}/{{$ctrl.item.name_firstpart}}</span> </div>
                </div>
                <div class="panel-body">
                  <h3>Parcel Number: <h4>{{$ctrl.item.name_lastpart}}/{{$ctrl.item.name_firstpart}}</h4></h3>

                  <div class="panel">
                    <label class="">Land Owner:</label>{{$ctrl.item.name}}
                    <br/>
                    <label class="">Property Address:</label>{{$ctrl.item.location}}

                  </div>
                </div>
            </div>
          </div>
          <div class="modal-footer">
              <button class="btn btn-primary" type="button" ng-click="$ctrl.ok()">OK</button>
              <button class="btn btn-warning" type="button" ng-click="$ctrl.cancel()">Cancel</button>
          </div>
      </script>
        </tr>
      </table>

        <!-- Button trigger modal -->

    </div>
  </div>

</body>
</html>
