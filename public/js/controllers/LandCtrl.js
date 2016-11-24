angular.module('LandCtrl',['LandVerificationService','ui.bootstrap','ngAnimate','ngRoute','ngSanitize','angular-toArrayFilter']);
angular.module('LandCtrl').controller('LandVerificationController',function($scope,$uibModal,$log,LandVerification){
  $scope.LandData={};//LandVerification.get();
  $scope.loading=true;

  /**
  * Get Parcel for an Individual Parcel search
  * @param  {[type]} val [description]
  * @return {[type]}     [description]
  */
  $scope.getParcel= function(val){
    return LandVerification.getLand(val).then(function(response){
      //$log.info(response.data);
      return response.data.map(function(item){
        return item;
      });
    });
  };

  LandVerification.get().success(function(result){

    $scope.LandData=result;
    $scope.loading=false;
  });

  //Call when a view details button is clicked
  $scope.show=function(id){
    var pid=id.toString();
    LandVerification.getLand(pid).then(function(result){
      //$log.log(result.data);
    });
  };


  /**
  * UI Bootstrap Modal used here
  */
  //Modal Modal Modal
  var $ctrl = this;
  $ctrl.items = $scope.LandData;

  $ctrl.animationsEnabled = true;

  $ctrl.open = function (size, parentSelector) {
    var parentElem = parentSelector ?
    angular.element($document[0].querySelector('.container ' + parentSelector)) : undefined;

    var modalInstance = $uibModal.open({
      animation: $ctrl.animationsEnabled,
      ariaLabelledBy: 'modal-title',
      ariaDescribedBy: 'modal-body',
      templateUrl: 'myModalContent.html',
      controller: 'ModalInstanceCtrl',
      controllerAs: '$ctrl',
      size: size,
      appendTo: parentElem,
      resolve: {
        items: function () {
          //$log.log($scope.items);
          return $ctrl.items;
        },
        item: function(){
          return size;
        }
      }
    });

    modalInstance.result.then(function (selectedItem) {
      $ctrl.selected = selectedItem;
    }, function () {
      //$log.warn("selectedItem next");
      //$log.info(selectedItem);
      $scope.asyncSelected='';
      $log.info('Modal dismissed at: ' + new Date());
    });
  };
  $scope.onSelect = function ($item, $model, $label) {
    $scope.$item = $item;
    $scope.$model = $model;
    $scope.$label = $label;
    // Implement other logics
    //$scope.$selected = $item;
    //$log.log($item);
    //$log.log($model);


  };
});

angular.module('LandCtrl').controller('ModalInstanceCtrl', function ($uibModalInstance,$log, items,item) {
  var $ctrl = this;
  $ctrl.items = items;
  $ctrl.LandData=items;
  $ctrl.item=item;
  $ctrl.selected = {
    item: $ctrl.items[0]
  };

  $ctrl.ok = function () {
    $uibModalInstance.close($ctrl.selected.item);
  };

  $ctrl.cancel = function () {
    $uibModalInstance.dismiss('cancel');
  };
  /**
  * OnSelect for TypeAhead
  * @param  {[type]} $item  [description]
  * @param  {[type]} $model [description]
  * @param  {[type]} $label [description]
  * @return {[type]}        [description]
  */

});
