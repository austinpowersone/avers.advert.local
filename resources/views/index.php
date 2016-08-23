<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Index</title>
    <script src="/components/angular/angular.min.js"></script>
    <script src="/components/angular-resource/angular-resource.min.js"></script>
    <script src="/components/angular-route/angular-route.min.js"></script>
    <script src="/components/angular-cookie/angular-cookie.min.js"></script>
    <script src="/components/jquery/dist/jquery.min.js"></script>
    <script src="/app/app.js"></script>
    <script src="/app/services/MaterialService.js"></script>
    <script src="/app/services/RegionService.js"></script>
    <script src="/app/services/FlatTypeService.js"></script>
    <script src="/app/services/StreetService.js"></script>
    <script src="/app/services/FlatSchemaService.js"></script>
    <script src="/app/controllers/FlatController.js"></script>
    <script src="/app/controllers/IndexController.js"></script>
    <script src="/app/controllers/StreetController.js"></script>
    <script src="/app/controllers/MaterialController.js"></script>
    <script src="/app/controllers/RegionController.js"></script>
    <script src="/app/controllers/FlatTypeController.js"></script>
    <script src="/app/controllers/FlatSchemaController.js"></script>

</head>

<body ng-app="advertApp">

<ng-view></ng-view>

</body>
</html>