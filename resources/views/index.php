<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="/css/font-awesome.css">
    <link rel="stylesheet" href="/css/jasny-bootstrap.min.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/fonts/BebasNeue.ttf">

    <title>Index</title>
    <script src="/components/jquery/dist/jquery.min.js"></script>
    <script src="/js/jquery.dataTables.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/dataTables.bootstrap.min.js"></script>
    <script src="/js/jasny-bootstrap.min.js"></script>
    <script src="/components/angular/angular.min.js"></script>
    <script src="/components/angular-resource/angular-resource.min.js"></script>
    <script src="/components/angular-ui-router/release/angular-ui-router.min.js"></script>
    <script src="/app/app.js"></script>

    <script src="/app/services/FlatService.js"></script>
    <script src="/app/services/MaterialService.js"></script>
    <script src="/app/services/RegionService.js"></script>
    <script src="/app/services/HouseService.js"></script>

    <script src="/app/controllers/FlatController.js"></script>
    <script src="/app/controllers/IndexController.js"></script>
    <script src="/app/controllers/HouseController.js"></script>
    <script src="/app/controllers/MaterialController.js"></script>
    <script src="/app/controllers/RegionController.js"></script>
</head>

<body ng-app="advertApp">
<script>
    $(function(){
        if (screen.height > $( document ).height()) {
            $('.max-height').css({'height':'100%'});
        }
    });
</script>



<div class="canvas max-height">
    <div class="navbar navbar-default navbar-fixed-top">
        <button type="button" class="navbar-toggle" data-toggle="offcanvas" data-recalc="false" data-target=".navmenu" data-canvas=".canvas">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
    </div>
    <div class="container-fluid main-data">
        <div class="col-md-12 head">
            <div class="logo-header">
                <img src="/img/logo.png" alt="logo">
                <p>AVERS</p>
            </div>
        </div>
        <div class="col-md-12 butts">
            <div class="page-header">
                <button type="button" class="btn btn-primary" id="call_modal" data-toggle="modal" data-target="#modal_1">Поиск</button>
                <button type="button" ng-show="isFlats" class="btn btn-primary" id="call_modal" data-toggle="modal" data-target="#modal_2">Добавить квартиру</button>
                <button type="button" ng-show="!isFlats" class="btn btn-primary" id="call_modal" data-toggle="modal" data-target="#modal_3">Добавить дом</button>
                <button type="button" class="btn btn-primary" id="call_modal" data-toggle="modal" data-target="#modal_4">Внести показ</button>
                <div class="dropdown">
                    <button class="btn dropdown-toggle" type="button" data-toggle="dropdown"></button>
                    <ul class="dropdown-menu">
                        <li><a href="#">Мой профиль</a></li>
                        <li><a href="#">Выход</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-12 data">
            <div class="datatables">
                <a href="" ng-click="isFlats = true" ui-sref="flats" class="btn btn-group">БД Квартир</a>
                <a href="" ng-click="isFlats = false" ui-sref="houses" class="btn btn-group">БД Домов</a>
                <a href="db-customers.html" ng-show="isFlats" class="btn btn-group">БД Покупателей квартир</a>
                <a href="db-house-customers.html" ng-show="!isFlats" class="btn btn-group">БД Покупателей домов</a>
                <a href="" ui-sref="material" class="btn btn-group">Materials</a>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <ui-view></ui-view>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('#layout').DataTable();
    } );
</script>
</body>
</html>