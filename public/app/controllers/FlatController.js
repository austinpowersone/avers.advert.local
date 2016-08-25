angular.module('advertApp').controller('FlatController', ['$scope','Flat',
    function ($scope, Flat) {
        $scope.flats =
            [
                {
                    'id': 1,
                    'count_rooms' : 2,
                    'type': 'Тип квартиры',
                    'floor': 3,
                    'count_of_floors': 9,
                    'living_square': 40,
                    'total_square': 60,
                    'kitchen_square': 10,
                    'cost': 200000,
                    'schema': 'Схема',
                    'material': 'Кирпич',
                    'bathroom': 'Ванная где то',
                    'balcony': 'Балкон где то',
                    'state': 'Евроремонт',
                    'region': 'Салтовка',
                    'reference_point': 'Гаражи',
                    'street': 'Героев труда',
                    'house_number': '1/6'
                },
                {
                    'id': 2,
                    'count_rooms' : 4,
                    'type': 'Тип квартиры1',
                    'floor': 8,
                    'count_of_floors': 12,
                    'living_square': 60,
                    'total_square': 70,
                    'kitchen_square': 8,
                    'cost': 500000,
                    'schema': 'Схема1',
                    'material': 'Кирпич',
                    'bathroom': 'Ванная где то1',
                    'balcony': 'Балкон где то1',
                    'state': 'Евроремонт1',
                    'region': 'Салтовка1',
                    'reference_point': 'Гаражи1',
                    'street': 'Героев труда1',
                    'house_number': '1/61'
                }
            ]
}]);
