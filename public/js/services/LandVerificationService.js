angular.module('LandVerificationService',[])
.factory('LandVerification',function($http){
  return{
    //Invoke all data! abracadabra
    get: function(){
      return $http.get('index.php/api/land');
    },
    getLand: function(id){
      return $http.get('index.php/api/land/show/'+id+'%25');
    }
  }
});
