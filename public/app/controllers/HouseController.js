angular.module('advertApp').controller('HouseController', ['$scope','House',
    function ($scope, House) {
        $scope.houses =
        [
            {
                'id': 1,
                'count_rooms' : 3,
                'type': 'Тип дома',
                'count_of_floors': 1,
                'living_square': 40,
                'total_square': 60,
                'kitchen_square': 10,
                'area_square': 20,
                'cost': 300000,
                'material': 'Кирпич',
                'sewage': 'Дома',
                'water': 'Вода где то там',
                'gas': 'Газ где то там',
                'electricity': 'Электричество где то там',
                'state': 'Убитая',
                'region': 'Алексеевка',
                'reference_point': 'Кулиничи',
                'street': 'Героев труда',
                'house_number': 'Героев труда 1/6'
            },
            {
                'id': 2,
                'count_rooms' : 5,
                'type': 'Тип дома1',
                'count_of_floors': 2,
                'living_square': 30,
                'total_square': 50,
                'kitchen_square': 10,
                'area_square': 9,
                'cost': 100000,
                'material': 'Панель',
                'sewage': 'Дома1',
                'water': 'Вода где то там1',
                'gas': 'Газ где то там1',
                'electricity': 'Электричество где то там1',
                'state': 'Убитая1',
                'region': 'Алексеевка1',
                'reference_point': 'Кулиничи1',
                'street': 'Героев труда1',
                'house_number': 'Героев труда 1/61'
            }
        ]
    }]);

