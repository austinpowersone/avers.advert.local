angular.module('advertApp').controller('FlatSchemaController', ['$scope','FlatSchema',
    function ($scope, FlatSchema) {
        $scope.flatSchemas = FlatSchema.query();
    }]);
