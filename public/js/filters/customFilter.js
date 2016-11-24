angular.module('customFilter',[])
.filter('custom',[ function () {
    return function(objects, searchText) {
        var search = ''+searchText.toLowerCase();
        var filtered = [];
        angular.forEach(objects, function(item) {
            console.log(searchText);
            console.log(item);
          if( item.name_lastpart.toLowerCase().indexOf(searchText) >= 0 ||
                item.name_firstpart.toLowerCase().indexOf(searchText) >= 0 //||
                //item.baths.toLowerCase().indexOf(searchText) >= 0
            ) {
                filtered.push(item);
            }
        });
        return filtered;
    }
}]);
