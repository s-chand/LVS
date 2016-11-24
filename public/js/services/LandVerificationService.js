angular.module('LandVerificationService',[])
.factory('LandVerification',function($http){
  return{
    //Invoke all data! abracadabra
    get: function(){
      return $http.get('/api/land');
    },
    getLand: function(id){
      return $http.get('api/land/show/'+id+'%');
    }
  }
});
