angular.module('advertApp').controller('AddingFlatController', ['$scope', 'FlatType','Material','FlatState','BathroomTypes', 'BalconyTypes', 'Site', 'Region', 'Street','Site','$http',
    function ($scope, FlatType, Material, FlatState, BathroomTypes, BalconyTypes, Site, Region, Street, Site, $http) {
    	$scope.types = FlatType.query();
    	$scope.materials = Material.query();
    	$scope.state_types = FlatState.query();
    	$scope.bathroom_types = BathroomTypes.query();
    	$scope.balcony_types = BalconyTypes.query();
    	$scope.regions = Region.query();
    	$scope.streets = Street.query();
    	$scope.sites = Site.query();
    	
    	$scope.addFlat = function(){

			var formData = new FormData();
            var fileUploader = document.getElementById('file-uploader');
            for (var i in fileUploader.files) {
                formData.append("uploadedFile[]", fileUploader.files[i]);
            }
            formData.append('_token', csrf);			
            var xhr = new XMLHttpRequest();           
            xhr.addEventListener("load", function (event) {
                console.log("load: " + event.target.responseText);
                var photos = JSON.parse(event.target.responseText);
                console.log(photos);
            }, false);
            xhr.open("POST", "/upload");
            xhr.send(formData);
			var send_data = {
        		'rooms_count': $scope.query.add.roomscount,
        		'floor': $scope.query.addfloor,
        		'count_of_floor': $scope.query.addfloor_count,
        		'living_square': $scope.query.addliving_area,
        		'total_square': $scope.query.addtotal_area,
        		'kitchen_square': $scope.query.addkithcen_area,
        		'cost': $scope.query.addcost,
        		'type': $scope.query.addtype,
        		'material': $scope.query.addmaterial,
        		'bathroom_type': $scope.query.addbathroom,
        		'baclony_type': $scope.query.addbalcony,
        		'state': $scope.query.addstate,
        		'region': $scope.query.addregion,
        		'reference_point': $scope.query.addreference_point,
        		'street': $scope.query.addstreet,
        		'house_number': $scope.query.addhouse_number,
        		'flat_number': $scope.query.addflat_number,
        		'site': $scope.query.addsite,
        		'header': $scope.query.addheader,
        		'add_info': $scope.query.addadd_info,
        		'photos': $scope.photos
        	};
        	console.log(send_data);
        	$http({
                url: 'api/flats',
                method: 'POST',
                params: {
                	send_data
                }
            }).success(function(data){
                console.log('-------');
                console.log(data);
                //$rootScope.flats = data;
            });
        }
}]);