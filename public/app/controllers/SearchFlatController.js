angular.module('advertApp').controller('SearchFlatController', ['$scope','$rootScope', 'FlatType', 'Region','Street', 'Flat','$http',
    function ($scope, $rootScope, FlatType, Region, Street, Flat, $http) {
        $scope.types = FlatType.query();
        $scope.regions = Region.query();
        $scope.streets = Street.query();

        $scope.roomsfrom = "";
        $scope.pricefrom = "";
        $scope.floorfrom = "";
        $scope.floorCountfrom = "";

        $scope.FilterFlat = function () {
            var sendData =
                    {
                        'id' : $scope.query.id,
                        'type' : $scope.query.type,
                        'rooms_from' : $scope.query.roomsfrom,
                        'rooms_to' : $scope.query.roomsto,
                        'total_area' : $scope.query.total_area,
                        'living_area' : $scope.query.living_area,
                        'kitchen_area' : $scope.query.kitchen_area,
                        'price_from' : $scope.query.pricefrom,
                        'price_to' : $scope.query.priceto,
                        'region' : $scope.query.region,
                        'street' : $scope.query.street,
                        'floor_from' : $scope.query.floorfrom,
                        'floor_to' : $scope.query.floorto,
                        'floor_concrete' : $scope.query.floorconcrete,
                        'count_floor_from' : $scope.query.floorCountfrom,
                        'count_floor_to' : $scope.query.floorCountto,
                        'count_floor_concrete' : $scope.query.floorCountconcrete
                    };
            console.log(sendData);                
            $http({
                url: 'api/flats',
                method: 'GET',
                params: {
                    'id' : $scope.query.id,
                        'type' : $scope.query.type,
                        'rooms_from' : $scope.query.roomsfrom,
                        'rooms_to' : $scope.query.roomsto,
                        'total_area' : $scope.query.total_area,
                        'living_area' : $scope.query.living_area,
                        'kitchen_area' : $scope.query.kitchen_area,
                        'price_from' : $scope.query.pricefrom,
                        'price_to' : $scope.query.priceto,
                        'region' : $scope.query.region,
                        'street' : $scope.query.street,
                        'floor_from' : $scope.query.floorfrom,
                        'floor_to' : $scope.query.floorto,
                        'floor_concrete' : $scope.query.floorconcrete,
                        'count_floor_from' : $scope.query.floorCountfrom,
                        'count_floor_to' : $scope.query.floorCountto,
                        'count_floor_concrete' : $scope.query.floorCountconcrete
                }
            }).success(function(data){
                console.log('-------');
                console.log(data);
                $rootScope.flats = data;
            });
        }
}]);