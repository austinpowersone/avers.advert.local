angular.module('advertApp').controller('SearchHouseController', ['$scope','$rootScope', 'HouseType', 'Region','Street', 'House','$http',
    function ($scope, $rootScope, HouseType, Region, Street, House, $http) {
        $scope.types = HouseType.query();
        $scope.regions = Region.query();
        $scope.streets = Street.query();

        $scope.FilterHouse = function () {
            var sendData =
                    {
                        'id' : $scope.query.house.id,
                        'type' : $scope.query.house.type,
                        'rooms_from' : $scope.query.house.roomsfrom,
                        'rooms_to' : $scope.query.house.roomsto,
                        'total_square' : $scope.query.house.total_area,
                        'living_square' : $scope.query.house.living_area,
                        'kitchen_square' : $scope.query.house.kitchen_area,
                        'price_from' : $scope.query.house.pricefrom,
                        'price_to' : $scope.query.house.priceto,
                        'region' : $scope.query.house.region,
                        'street' : $scope.query.house.street,
                        'floor_from' : $scope.query.house.floorfrom,
                        'floor_to' : $scope.query.house.floorto,
                        'floor_concrete' : $scope.query.house.floorconcrete,
                    };
            console.log(sendData);            
            $http({
                url: 'api/houses',
                method: 'GET',
                params: {
                    	'id' : $scope.query.house.id,
                        'type' : $scope.query.house.type,
                        'rooms_from' : $scope.query.house.roomsfrom,
                        'rooms_to' : $scope.query.house.roomsto,
                        'total_square' : $scope.query.house.total_area,
                        'living_square' : $scope.query.house.living_area,
                        'kitchen_square' : $scope.query.house.kitchen_area,
                        'price_from' : $scope.query.house.pricefrom,
                        'price_to' : $scope.query.house.priceto,
                        'region' : $scope.query.house.region,
                        'street' : $scope.query.house.street,
                        'floor_from' : $scope.query.house.floorfrom,
                        'floor_to' : $scope.query.house.floorto,
                        'floor_concrete' : $scope.query.house.floorconcrete,
                }
            }).success(function(data){
                console.log('-------');
                console.log(data);
                $rootScope.houses = data;
            });
        }

        $scope.cancelFilter = function(){
            $scope.query.house.id = undefined;
            $scope.query.house.type = undefined;
            $scope.query.house.roomsfrom = undefined;
            $scope.query.house.roomsto = undefined;
            $scope.query.house.total_area = undefined;
            $scope.query.house.living_area = undefined;
            $scope.query.house.kitchen_area = undefined;
            $scope.query.house.pricefrom = undefined;
            $scope.query.house.priceto = undefined;
            $scope.query.house.region = undefined;
            $scope.query.house.street = undefined;
            $scope.query.house.floorfrom = undefined;
            $scope.query.house.floorto = undefined;
            $scope.query.house.floorconcrete = undefined;
        }
}]);