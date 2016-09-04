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
                        'count_floor_concrete' : $scope.query.floorCountconcrete,
                        'phone' : $scope.query.phone
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
                        'total_square' : $scope.query.total_area,
                        'living_square' : $scope.query.living_area,
                        'kitchen_square' : $scope.query.kitchen_area,
                        'price_from' : $scope.query.pricefrom,
                        'price_to' : $scope.query.priceto,
                        'region' : $scope.query.region,
                        'street' : $scope.query.street,
                        'floor_from' : $scope.query.floorfrom,
                        'floor_to' : $scope.query.floorto,
                        'floor_concrete' : $scope.query.floorconcrete,
                        'count_floor_from' : $scope.query.floorCountfrom,
                        'count_floor_to' : $scope.query.floorCountto,
                        'count_floor_concrete' : $scope.query.floorCountconcrete,
                        'phone' : $scope.query.phone
                }
            }).success(function(data){
                console.log('-------');
                console.log(data);
                $rootScope.flats = data;
            });
        }
        $scope.cancelFilter = function(){
            $scope.query.id = undefined;
            $scope.query.type = undefined;
            $scope.query.roomsfrom = undefined;
            $scope.query.roomsto = undefined;
            $scope.query.total_area = undefined;
            $scope.query.living_area = undefined;
            $scope.query.kitchen_area = undefined;
            $scope.query.pricefrom = undefined;
            $scope.query.priceto = undefined;
            $scope.query.region = undefined;
            $scope.query.street = undefined;
            $scope.query.floorfrom = undefined;
            $scope.query.floorto = undefined;
            $scope.query.floorconcrete = undefined;
            $scope.query.floorCountfrom = undefined;
            $scope.query.floorCountto = undefined;
            $scope.query.floorCountconcrete = undefined;
            $scope.query.phone = undefined;
        }
}]);