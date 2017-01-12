/**
 * Created by user on 10/01/2017.
 */
var app=angular.module('landvs',[]);
app.config(function($interpolateProvider){
    $interpolateProvider.startSymbol('{[{').endSymbol('}]}');
});
app.controller('FeedbackController',function ($scope,$http,$log) {
//identify the models and set default values
    $scope.fullname='';
    $scope.email='';
    $scope.message='';
    $scope.status=false;
    $scope.result='';
    $scope.submitFeedback=function () {
        var url= 'http://localhost/lvs/public/api/submit';
        var data=$.param({
            fullname: $scope.fullname,
            email:$scope.email,
            message:$scope.message
        });
        var res=$http.post(url,data);
        res.success(function (response) {
            $log.log('Success!');
            $log.log(response);
            $scope.result='Message Sent! We will be in touch';
        });
        res.error(function (response) {
            $log.error('Failed');
            $log.error(response);
            $scope.result='Message Failed. Please try again';
        });
        $scope.email='';
        $scope.fullname='';
        $scope.message='';
        $scope.status=true;
    }
});