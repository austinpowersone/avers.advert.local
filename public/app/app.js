var advertApp = angular.module('advertApp', ['ngResource','ui.router']);

advertApp.config(['$resourceProvider','$stateProvider', function ($resourceProvider, $stateProvider) {
    $stateProvider
        .state('flats',{
            url: "/flats",
            templateUrl: 'app/views/flats.html',
            controller: 'FlatController'
        })
        .state('houses',{
            url: "/houses",
            templateUrl: 'app/views/house.html',
            controller: 'HouseController'
        })
    $resourceProvider.defaults.stripTrailingSlashes = false;

}]);