<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/font-awesome.css">
    <link rel="stylesheet" href="/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="/css/jasny-bootstrap.min.css">
    <link rel="stylesheet" href="/components/bootstrap-select/dist/css/bootstrap-select.min.css">
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
    <script src="/components/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
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
    <script src="/app/controllers/HouseDetailsController.js"></script>
    <script src="/app/controllers/FlatDetailsController.js"></script>
</head>

<body ng-app="advertApp">
<script>
    $(function(){
        if (screen.height > $( document ).height()) {
            $('.max-height').css({'height':'100%'});
        }
    });
</script>

<div class="modal fade" id="modal_1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button class="close" id="setCookie" type="button" data-dismiss="modal" onclick="document.getElementById('modal_1').style.display='none';">
                    <i class="fa fa-close"></i>
                </button>
                <h4>Фильтр рекламы квартир</h4>
            </div>
            <div class="modal-body">
                <form name="flat_filter" method="post" action="/flats" class="form form-small form-horizontal global-flat-filter" role="form">
                    <div class="row">

                        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 clear-all first">

                            <div class="form-group col-xs-6 col-sm-6 col-md-6 phone-filt no-padding">
                                <div id="tel">
                                    <label for="flat_filter_phone" class="">По телефону</label>
                                    <input type="text" ng-model="query.phone" id="flat_filter_phone" name="flat_filter[phone]" class="form-control input-sm form-phone form-control input-sm" value="">
                                </div>
                            </div>

                            <div class="form-group col-xs-6 col-sm-6 col-md-6 phone-filt no-padding">
                                <div id="numb">
                                    <label for="flat_filter_number" class="">По номеру</label>
                                    <input type="text" ng-model="query.id" id="flat_filter_number" name="flat_filter[number]" class="form-control input-sm form-control input-sm" value="">
                                </div>
                            </div>

                            <hr>
                            <div class="form-group type">
                                <div class="col-xs-12 col-sm-12">
                                    <label for="flat_filter_type" class="">Тип</label>

                                    <select id="flat_filter_type" ng-model="query.type" data-live-search="true" name="flat_filter[type]" data-search="type" class="selectpicker form-control input-sm">
                                        <option value="">Всех</option>
                                        <option value="г">Гостинка</option>
                                        <option value="п">Подселенка</option>
                                        <option value="и">Изолированная</option>
                                        <option value="н">Новострой</option>
                                        <option value="гн">Гостинка новострой</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group rooms">
                                <div class="col-sm-12">
                                    <label>Комнат</label>
                                    <div class="row">
                                        <div class="col-sm-6 col-md-6">
                                            <label for="flat_filter_roomCountFrom">от</label>
                                            <input type="text" id="flat_filter_roomCountFrom" ng-model="query.rooms.from" name="flat_filter[roomCountFrom]" class="form-control input-sm form-control input-sm">
                                        </div>
                                        <div class="col-sm-6 col-md-6">
                                            <label for="flat_filter_roomCountTo">до</label>
                                            <input type="text" id="flat_filter_roomCountTo" ng-model="query.rooms.to" name="flat_filter[roomCountTo]" class="form-control input-sm form-control input-sm">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group area">
                                <div class="col-sm-12">
                                    <label>Площадь, не менeе</label>
                                    <div class="row">
                                        <div class="col-sm-4 col-md-4 col-lg-4 area-value">
                                            <label for="flat_filter_livingArea" class="">Жилая</label>
                                            <input type="text" id="flat_filter_livingArea" ng-model="query.living_area" name="flat_filter[livingArea]" class="form-control input-sm form-control input-sm">

                                        </div>
                                        <div class="col-sm-4 col-md-4 col-lg-4 area-value">
                                            <label for="flat_filter_totalArea" class="">Общая</label>
                                            <input type="text" id="flat_filter_totalArea" ng-model="query.total_area" name="flat_filter[totalArea]" class="form-control input-sm form-control input-sm">

                                        </div>
                                        <div class="col-sm-4 col-md-4 col-lg-4 area-value">
                                            <label for="flat_filter_kitchenArea" class="">Кухня</label>
                                            <input type="text" id="flat_filter_kitchenArea" ng-model="query.kitchen_area" name="flat_filter[kitchenArea]" class="form-control input-sm form-control input-sm">

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <hr>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <label>Цена От - До:</label>
                                    <div class="row">
                                        <div class="col-sm-6 col-md-6">
                                            <input type="text" id="flat_filter_priceFrom" ng-model="query.price.from" name="flat_filter[priceFrom]" class="form-control input-sm form-control input-sm">
                                        </div>
                                        <div class="col-sm-6 col-md-6">
                                            <input type="text" id="flat_filter_priceTo" ng-model="query.price.to" name="flat_filter[priceTo]" class="form-control input-sm form-control input-sm">
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 clear-all second">

                            <div class="form-group">
                                <div class="col-sm-12">

                                    <div id="flat_filter_status" class="checkboxes-holder">
                                        <div class="status-block">
                                            <div class="block">
                                                <input type="radio" ng-model="query.actve" id="flat_filter_status_0" name="flat_filter[status]" required="required" value="active" checked="checked">
                                                <label for="flat_filter_status_0" class="required">Действующие</label>
                                            </div>
                                            <div class="block">
                                                <input type="radio" ng-model="query.deleted" id="flat_filter_status_1" name="flat_filter[status]" required="required" value="deleted">
                                                <label for="flat_filter_status_1" class="required">Удаленные</label>
                                            </div>
                                            <div class="block">
                                                <input type="radio" ng-model="query.all" id="flat_filter_status_2" name="flat_filter[status]" required="required" value="all">
                                                <label for="flat_filter_status_2" class="required">Все</label>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <hr>
                            <div class="form-group region">
                                <div class="col-xs-12 col-sm-12">
                                    <label for="flat_filter_region">Район</label>
                                    <select ng-model="query.region" id="flat_filter_region" name="flat_filter[region]" data-live-search="true" data-search="street" class="selectpicker form-control input-sm">
                                        <option value="">Алексеевка</option>
                                        <option>Северная салтовка</option>
                                        <option>606 м-р</option>
                                        <option>607 м-р</option>
                                        <option>Холодная гора</option>
                                        <option>Южный вокзал</option>
                                        <option>Чугуевский</option>
                                        <option>Краснокутский</option>
                                        <option>Барвенковский</option>
                                        <option>Изюмский</option>
                                        <option>Мерефянский</option>
                                        <option>Змиевский</option>
                                    </select>
                                </div>
                            </div>
                            <hr>
                            <div class="form-group street">
                                <div class="col-xs-12 col-sm-12">
                                    <label for="flat_filter_street">Улица</label>
                                    
                                    <select ng-model="query.street" id="flat_filter_street" name="flat_filter[street]" data-live-search="true" data-search="street" class="selectpicker form-control input-sm">
                                        <option value="">Героев труда</option>
                                        <option value="г">Блюхера улица</option>
                                        <option value="п">50 лет СССР</option>
                                        <option value="и">Третей пятилетки</option>
                                        <option value="н">Проспект ленина</option>
                                        <option value="гн">Московский проспект</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 third">
                            <div class="col-lg-12">

                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <div class="row">
                                            <div class="col-sm-12 col-md-12">
                                                <div id="flat_filter_date_type" class="checkboxes-holder">
                                                    <label for="flat_filter_title">Дата</label>
                                                    <div class="block">
                                                        <input type="radio" ng-model="query.date.create" id="flat_filter_date_type_0" name="flat_filter[date_type]" required="required" value="createdAt">
                                                        <label for="flat_filter_date_type_0" class="required">Создания</label>
                                                    </div>
                                                    <div class="block">
                                                        <input type="radio" ng-model="query.date.correct" id="flat_filter_date_type_1" name="flat_filter[date_type]" required="required" value="updatedAt" checked="checked">
                                                        <label for="flat_filter_date_type_1" class="required">Коррекции</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12 col-md-12 from" ng-show="!isToday">
                                                <label for="flat_filter_dateFrom" class="">От</label>
                                                <input type="date" id="flat_filter_dateFrom" ng-model="query.date.from" name="flat_filter[dateFrom]" class="datepicker form-control input-sm">
                                            </div>
                                            <div class="col-sm-12 col-md-12 to" ng-show="!isToday">
                                                <label for="flat_filter_dateTo" class="">До</label>
                                                <input type="date" id="flat_filter_dateTo" ng-model="query.date.to" name="flat_filter[dateTo]" class="datepicker form-control input-sm">
                                            </div>
                                            <div class="col-sm-12 col-md-12 today">
                                                <input type="checkbox" ng-model="isToday" ng-init="isToday = true" id="flat_filter_today" name="flat_filter[today]" value="today">
                                                <label for="flat_filter_today" class="">Сегодня</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 clear-all">
                                <div class="form-group">
                                    <div class="col-sm-12 floor">
                                        <label>Этаж</label>
                                        <div class="row">
                                            <div class="col-sm-3 col-md-3">
                                                <label for="flat_filter_floorFrom">от</label>
                                                <input type="text" ng-model="query.floor.from" id="flat_filter_floorFrom" name="flat_filter[floorFrom]" class="form-control input-sm form-control input-sm">
                                            </div>
                                            <div class="col-sm-3 col-md-3">
                                                <label for="flat_filter_floorfloorTo">до</label>
                                                <input type="text" ng-model="query.floor.to" id="flat_filter_floorTo" name="flat_filter[floorTo]" class="form-control input-sm form-control input-sm">
                                            </div>
                                            <div class="col-sm-6 col-md-6">
                                                <label for="flat_filter_floorValue" class="">Точный этаж</label>
                                                <input type="text" ng-model="query.floor.concrete" id="flat_filter_floorValue" name="flat_filter[floorValue]" class="form-control input-sm form-control input-sm">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-6 checkboxes-holder no-padding">
                                            <div class="block">
                                                <input type="checkbox" ng-model="query.floor.notFirst" id="flat_filter_floorNotFirst" name="flat_filter[floorNotFirst]" value="1">
                                                <label for="flat_filter_floorNotFirst" class="">Не первый</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-6 checkboxes-holder no-padding">
                                            <div class="block">
                                                <input type="checkbox" ng-model="query.floor.notLast" id="flat_filter_floorNotLast" name="flat_filter[floorNotLast]" value="1">
                                                <label for="flat_filter_floorNotLast" class="">Не последний</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 clear-all">
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <label>Этажность</label>
                                        <div class="row">
                                            <div class="col-sm-3 col-md-3">
                                                <label for="flat_filter_floorCountFrom">от</label>
                                                <input type="text" ng-model="query.floorCount.from" id="flat_filter_floorCountFrom" name="flat_filter[floorCountFrom]" class="form-control input-sm form-control input-sm">
                                            </div>
                                            <div class="col-sm-3 col-md-3">
                                                <label for="flat_filter_floorCountTo">до</label>
                                                <input type="text" ng-model="query.floorCount.to" id="flat_filter_floorCountTo" name="flat_filter[floorCountTo]" class="form-control input-sm form-control input-sm">
                                            </div>
                                            <div class="col-sm-6 col-md-6">
                                                <label for="flat_filter_floorCountValue">Точно этажей</label>
                                                <input type="text" ng-model="query.floorCount.cocnrete" id="flat_filter_floorCountValue" name="flat_filter[floorCountValue]" class="form-control input-sm form-control input-sm">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12 col-md-12 checkboxes-holder">
                                                <div class="block">
                                                    <input type="checkbox" ng-model="query.floorCount.upper" id="flat_filter_floorCountUpper" name="flat_filter[floorCountUpper]" value="1">
                                                    <label for="flat_filter_floorCountUpper">Высотный дом</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="submit" ng-click="searchByFilter" id="flat_submit" name="flat[submit]" class="btn btn-success">Применить фильтр</button>
                <button type="submit" ng-click="cancelFilter" id="flat_submit" name="flat[submit]" class="btn btn-danger">Сбросить фильтр</button>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="modal_2">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button class="close" id="setCookie" type="button" data-dismiss="modal" onclick="document.getElementById('modal_1').style.display='none';">
                    <i class="fa fa-close"></i>
                </button>
                <h4>Фильтр рекламы домов</h4>
            </div>
            <div class="modal-body">
                <form name="flat_filter" method="post" action="/flats" class="form form-small form-horizontal global-flat-filter" role="form">
                    <div class="row">

                        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 clear-all first">

                            <div class="form-group col-xs-6 col-sm-6 col-md-6 phone-filt no-padding">
                                <div id="tel">
                                    <label for="flat_filter_phone" class="">По телефону</label>
                                    <input ng-model="query.house.phone" type="text" id="flat_filter_phone" name="flat_filter[phone]" class="form-control input-sm form-phone form-control input-sm" value="">
                                </div>
                            </div>

                            <div class="form-group col-xs-6 col-sm-6 col-md-6 phone-filt no-padding">
                                <div id="numb">
                                    <label for="flat_filter_number" class="">По номеру</label>
                                    <input ng-model="query.house.id" type="text" id="flat_filter_number" name="flat_filter[number]" class="form-control input-sm form-control input-sm" value="">
                                </div>
                            </div>
                            <hr>

                            <div class="form-group type">
                                <div class="col-xs-12 col-sm-12">
                                    <label for="flat_filter_type" class="">Тип</label>

                                    <select id="flat_filter_type" ng-model="query.house.type" name="flat_filter[type]" data-live-search="true" data-search="type" class="selectpicker form-control input-sm">
                                        <option value="">Всех</option>
                                        <option value="г">Гостинка</option>
                                        <option value="п">Подселенка</option>
                                        <option value="и">Изолированная</option>
                                        <option value="н">Новострой</option>
                                        <option value="гн">Гостинка новострой</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group rooms">
                                <div class="col-sm-12">
                                    <label>Комнат</label>
                                    <div class="row">
                                        <div class="col-sm-6 col-md-6">
                                            <label for="flat_filter_roomCountFrom">от</label>
                                            <input type="text" ng-model="query.house.rooms.from" id="flat_filter_roomCountFrom" name="flat_filter[roomCountFrom]" class="form-control input-sm form-control input-sm">
                                        </div>
                                        <div class="col-sm-6 col-md-6">
                                            <label for="flat_filter_roomCountTo">до</label>
                                            <input type="text" ng-model="query.house.rooms.to" id="flat_filter_roomCountTo" name="flat_filter[roomCountTo]" class="form-control input-sm form-control input-sm">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group area">
                                <div class="col-sm-12">
                                    <label>Площадь, не менeе</label>
                                    <div class="row">
                                        <div class="col-sm-4 col-md-4 col-lg-4 area-value">
                                            <label for="flat_filter_livingArea" class="">Жилая</label>
                                            <input type="text" ng-model="query.house.living_area" id="flat_filter_livingArea" name="flat_filter[livingArea]" class="form-control input-sm form-control input-sm">

                                        </div>
                                        <div class="col-sm-4 col-md-4 col-lg-4 area-value">
                                            <label for="flat_filter_totalArea" class="">Общая</label>
                                            <input type="text" ng-model="query.house.total_area" id="flat_filter_totalArea" name="flat_filter[totalArea]" class="form-control input-sm form-control input-sm">

                                        </div>
                                        <div class="col-sm-4 col-md-4 col-lg-4 area-value">
                                            <label for="flat_filter_kitchenArea" class="">Кухня</label>
                                            <input type="text" ng-model="query.house.kitchen_area" id="flat_filter_kitchenArea" name="flat_filter[kitchenArea]" class="form-control input-sm form-control input-sm">

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <hr>

                            <div class="form-group">
                                <div class="col-sm-12">
                                    <label>Цена От - До:</label>
                                    <div class="row">
                                        <div class="col-sm-6 col-md-6">
                                            <input type="text" ng-model="query.house.price.from" id="flat_filter_priceFrom" name="flat_filter[priceFrom]" class="form-control input-sm form-control input-sm">
                                        </div>
                                        <div class="col-sm-6 col-md-6">
                                            <input type="text" ng-model="query.house.price.to" id="flat_filter_priceTo" name="flat_filter[priceTo]" class="form-control input-sm form-control input-sm">
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 clear-all second">

                            <div class="form-group">
                                <div class="col-sm-12">

                                    <div id="flat_filter_status" class="checkboxes-holder">
                                        <div class="status-block">
                                            <div class="block">
                                                <input type="radio" ng-model="query.house.active" id="flat_filter_status_0" name="flat_filter[status]" required="required" value="active" checked="checked">
                                                <label for="flat_filter_status_0" class="required">Действующие</label>
                                            </div>
                                            <div class="block">
                                                <input type="radio" ng-model="query.house.deleted" id="flat_filter_status_1" name="flat_filter[status]" required="required" value="deleted">
                                                <label for="flat_filter_status_1" class="required">Удаленные</label>
                                            </div>
                                            <div class="block">
                                                <input type="radio" ng-model="query.house.all" id="flat_filter_status_2" name="flat_filter[status]" required="required" value="all">
                                                <label for="flat_filter_status_2" class="required">Все</label>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <hr>
                            <div class="form-group region">
                                <div class="col-sm-12 col-xs-12">
                                    <label for="house_filter_region">Район</label>
                                    <select ng-model="query.house.region" id="house_filter_region" name="house_filter[region]" data-live-search="true" data-search="street" class="selectpicker form-control input-sm">
                                        <option value="">Алексеевка</option>
                                        <option>Северная салтовка</option>
                                        <option>606 м-р</option>
                                        <option>607 м-р</option>
                                        <option>Холодная гора</option>
                                        <option>Южный вокзал</option>
                                        <option>Чугуевский</option>
                                        <option>Краснокутский</option>
                                        <option>Барвенковский</option>
                                        <option>Изюмский</option>
                                        <option>Мерефянский</option>
                                        <option>Змиевский</option>
                                    </select>
                                </div>
                            </div>
                            <hr>
                            <div class="form-group street">
                                <div class="col-xs-12 col-sm-12">
                                    <label for="flat_filter_street">Улица</label>

                                    <select ng-model="query.street" id="house_filter_street" name="house_filter[street]" data-live-search="true" data-search="street" class="selectpicker form-control input-sm">
                                        <option value="">Героев труда</option>
                                        <option value="г">Блюхера улица</option>
                                        <option value="п">50 лет СССР</option>
                                        <option value="и">Третей пятилетки</option>
                                        <option value="н">Проспект ленина</option>
                                        <option value="гн">Московский проспект</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 third">
                            <div class="col-lg-12">

                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <div class="row">
                                            <div class="col-sm-12 col-md-12">
                                                <div id="flat_filter_date_type" class="checkboxes-holder">
                                                    <label for="flat_filter_title">Дата</label>
                                                    <div class="block">
                                                        <input type="radio" ng-model="query.house.date.created" id="flat_filter_date_type_0" name="flat_filter[date_type]" required="required" value="createdAt">
                                                        <label for="flat_filter_date_type_0" class="required">Создания</label>
                                                    </div>
                                                    <div class="block">
                                                        <input type="radio" ng-model="query.house.date.correct" id="flat_filter_date_type_1" name="flat_filter[date_type]" required="required" value="updatedAt" checked="checked">
                                                        <label for="flat_filter_date_type_1" class="required">Коррекции</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div ng-show="!isToday" class="col-sm-12 col-md-12 from">
                                                <label for="flat_filter_dateFrom" class="">От</label>
                                                <input type="date" ng-model="query.house.date.from" id="flat_filter_dateFrom" name="flat_filter[dateFrom]" class="datepicker form-control input-sm">
                                            </div>
                                            <div ng-show="!isToday" class="col-sm-12 col-md-12 to">
                                                <label for="flat_filter_dateTo" class="">До</label>
                                                <input type="date" ng-model="query.house.date.to" id="flat_filter_dateTo" name="flat_filter[dateTo]" class="datepicker form-control input-sm">
                                            </div>
                                            <div class="col-sm-12 col-md-12 today">
                                                <input type="checkbox" ng-model="isToday" ng-init="isToday = true" id="flat_filter_today" name="flat_filter[today]" value="today">
                                                <label for="flat_filter_today" class="">Сегодня</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 clear-all">
                                <div class="form-group">
                                    <div class="col-sm-12 floor">
                                        <label>Количество этажей</label>
                                        <div class="row">
                                            <div class="col-sm-3 col-md-3">
                                                <label for="flat_filter_floorFrom">от</label>
                                                <input type="text" ng-model="query.house.floor.from" id="flat_filter_floorFrom" name="flat_filter[floorFrom]" class="form-control input-sm form-control input-sm">
                                            </div>
                                            <div class="col-sm-3 col-md-3">
                                                <label for="flat_filter_floorfloorTo">до</label>
                                                <input type="text" ng-model="query.house.floor.to" id="flat_filter_floorTo" name="flat_filter[floorTo]" class="form-control input-sm form-control input-sm">
                                            </div>
                                            <div class="col-sm-6 col-md-6">
                                                <label for="flat_filter_floorValue" class="">Точный этаж</label>
                                                <input type="text" ng-model="query.house.floor.concrete" id="flat_filter_floorValue" name="flat_filter[floorValue]" class="form-control input-sm form-control input-sm">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-6 checkboxes-holder no-padding">
                                            <div class="block">
                                                <input type="checkbox" ng-model="query.floor.notFirst" id="flat_filter_floorNotFirst" name="flat_filter[floorNotFirst]" value="1">
                                                <label for="flat_filter_floorNotFirst" class="">Не первый</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-6 checkboxes-holder no-padding">
                                            <div class="block">
                                                <input type="checkbox" ng-model="query.house.notLast" id="flat_filter_floorNotLast" name="flat_filter[floorNotLast]" value="1">
                                                <label for="flat_filter_floorNotLast" class="">Не последний</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="submit" id="flat_submit" name="flat[submit]" class="btn btn-success">Применить фильтр</button>
                <button type="submit" id="flat_submit" name="flat[submit]" class="btn btn-danger">Сбросить фильтр</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modal_3">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button class="close" id="setCookie" type="button" data-dismiss="modal" onclick="document.getElementById('modal_1').style.display='none';">
                    <i class="fa fa-close"></i>
                </button>
                <h4>Добавить рекламу квартиры</h4>
            </div>
            <div class="modal-body">
                <form name="flat" method="post" action="/flats" class="form form-small" role="form" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 column-1">
                            <div class="row">
                                <div class="form-group">
                                    <div class="col-xs-5 col-sm-5 roomCount">
                                        <label for="flat_roomCount" class="">Комнат</label>
                                        <input ng-model="query.add.rooms.count" type="text" id="flat_roomCount" name="flat[roomCount]" class="form-control input-sm form-control input-sm">
                                    </div>
                                    <div class="col-xs-7 col-sm-7 type">
                                        <label for="flat_type" class="required">Тип</label>
                                        <select ng-model="query.add.type" id="flat_type" name="flat[type]" data-live-search="true" class="selectpicker form-control input-sm form-control input-sm">
                                            <option value="">Гостинка</option>
                                            <option">Подселенка</option>
                                            <option>Изолированная</option>
                                            <option>Новострой</option>
                                            <option>Гостинка новострой</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group">
                                    <div class="col-sm-12 floor">
                                        <label for="flat_floor" class="">Этажи</label>
                                        <div class="row">
                                            <div class="col-sm-6 col-md-6">
                                                <input placeholder="Этаж" type="text" ng-model="query.add.floor" id="flat_floor" name="flat[floor]" class="form-control input-sm form-control input-sm">
                                            </div>
                                            <div class="col-sm-6 col-md-6">
                                                <input placeholder="Этажность" type="text" ng-model="query.add.floor_count" id="flat_floorCount" name="flat[floorCount]" class="form-control input-sm form-control input-sm">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group">
                                    <div class="col-sm-12 area">
                                        <label>Площадь</label>
                                        <div class="row nopadding">
                                            <div class="col-xs-4 col-sm-3 col-md-4 col-lg-4 ">
                                                <label for="flat_livingArea" class="">Жилая</label>
                                                <input type="text" ng-model="query.add.living_area" id="flat_livingArea" name="flat[livingArea]" class="form-control input-sm form-control input-sm">
                                            </div>
                                            <div class="col-xs-4 col-sm-3 col-md-4 col-lg-4">
                                                <label for="flat_totalArea" class="">Общая</label>
                                                <input type="text" ng-model="query.add.total_area" id="flat_totalArea" name="flat[totalArea]" class="form-control input-sm form-control input-sm">
                                            </div>
                                            <div class="col-xs-4 col-sm-3 col-md-4 col-lg-4">
                                                <label for="flat_kitchenArea" class="">Кухня</label>
                                                <input type="text" ng-model="query.add.kithcen_area" id="flat_kitchenArea" name="flat[kitchenArea]" class="form-control input-sm form-control input-sm">
                                            </div>
                                        </div>
                                        <hr>
                                    </div>

                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <label for="flat_price" class="">Цена тыс. у.е.</label>
                                        <div class="input-group">
                                            <span class="input-group-addon">$</span>
                                            <input type="text" ng-model="query.add.cost" id="flat_price" name="flat[price]" class="form-control input-sm form-control input-sm">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 column-2">
                            <div class="row">
                                <div class="form-group">
                                    <div class="col-sm-12 schema">
                                        <label for="flat_flatSchema" class="">Схема</label>
                                        <select ng-model="query.add.schema" data-live-search="true" id="flat_flatSchema" name="flat[flatSchema]" class="selectpicker form-control input-sm form-control input-sm">
                                            <option value="">разд</option>
                                            <option>смеж</option>
                                            <option>2+1</option>
                                            <option>3+1</option>
                                            <option>2+2</option>
                                            <option">2+1+1</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group">
                                    <div class="col-sm-12 material">
                                        <label for="flat_wallMaterial" class="">Материал</label>
                                        <select ng-model="query.add.material" id="flat_wallMaterial" name="flat[wallMaterial]" data-live-search="true" class="selectpicker form-control input-sm form-control input-sm">
                                            <option value="">кир.</option>
                                            <option>дер.</option>
                                            <option>д+к</option>
                                            <option>шлак</option>
                                            <option>пан.</option>
                                            <option>блоч.</option>
                                            <option>саман</option>
                                            <option">монол</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group">
                                    <div class="col-sm-12 wc">
                                        <label for="flat_wc" class="">Санузел</label>
                                        <select ng-model="query.add.bathroom" data-live-search="true" id="flat_wc" name="flat[wc]" class="selectpicker form-control input-sm form-control input-sm">
                                            <option value="">1 раз</option>
                                            <option>разд.</option>
                                            <option>совм.</option>
                                            <option>2 раз.</option>
                                            <option>2 сов.</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group">
                                    <div class="col-sm-12 balkon">
                                        <label class="sc-only" for="flat_balkon">Балкон</label>
                                        <select id="flat_balkon" ng-model="query.add.balcony" data-live-search="true" name="flat[balkon]" class="selectpicker form-control input-sm form-control input-sm">
                                            <option value="">Балк. НЕТ</option>
                                            <option>1 балкон</option>
                                            <option>1 балк.заст.</option>
                                            <option>2 балкона</option>
                                            <option>3 балкона</option>
                                            <option>3 балк.заст.</option>
                                            <option>больше 3 бал</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group">
                                    <div class="col-sm-12 condition">
                                        <label for="flat_flatCondition" class="">Состояние</label>
                                        <select ng-model="query.add.state" data-live-search="true" id="flat_flatCondition" name="flat[flatCondition]" class="selectpicker form-control input-sm form-control input-sm">
                                            <option value="">жилое</option>
                                            <option">строительный</option>
                                            <option>без ремонта</option>
                                            <option">косметика</option>
                                            <option>капитальный</option>
                                            <option>евроремонт</option>
                                            <option>убитая</option>
                                            <option>средний</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 column-3">
                            <div class="row">
                                <div class="form-group">
                                    <div class="col-sm-12 district">
                                        <label for="flat_district" class="">Район</label>
                                        <select ng-model="query.add.region" id="flat_district" name="flat[district]" data-live-search="true" class="selectpicker form-control input-sm form-control input-sm">
                                            <option value="">Салтовка</option>
                                            <option value="Алексеевка">Алексеевка</option>
                                            <option value="Артема">Артема</option>
                                            <option value="Аэропорт">Аэропорт</option>
                                            <option value="Б.Даниловка">Б.Даниловка</option>
                                            <option value="Восточный">Восточный</option>
                                            <option value="Гагарина">Гагарина</option>
                                            <option value="Герцена">Герцена</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group">
                                    <div class="col-sm-12 landmark">
                                        <label for="flat_landmark" class="">Ориентир</label>
                                        <input ng-model="query.add.reference_point" type="text" id="flat_landmark" name="flat[landmark]" class="form-control input-sm autocomplete form-control input-sm ui-autocomplete-input" rel="/autocomplete/landmark" autocomplete="off">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group">
                                    <div class="col-xs-12 col-sm-12">
                                        <label for="flat_adding_street">Улица</label>
                                        <select ng-model="query.add.street" id="flat_adding_street" name="flat_adding[street]" data-live-search="true" data-search="street" class="selectpicker form-control input-sm">
                                            <option value="">Героев труда</option>
                                            <option>Блюхера улица</option>
                                            <option>50 лет СССР</option>
                                            <option>Третей пятилетки</option>
                                            <option>Проспект ленина</option>
                                            <option>Московский проспект</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="form-group">
                                    <div class="col-sm-6 houseNumber">
                                        <label for="flat_houseNumber" class="">№ дома</label>
                                        <input ng-model="query.add.house_number" type="text" id="flat_houseNumber" name="flat[houseNumber]" class="form-control input-sm form-control input-sm">
                                    </div>
                                    <div class="col-sm-6 flatNumber">
                                        <label for="flat_flatNumber" class="">№ квартиры</label>
                                        <input type="text" ng-model="query.add.flat_number" id="flat_flatNumber" name="flat[flatNumber]" class="form-control input-sm form-control input-sm">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 column-4">
                            <div class="row">
                                <div class="form-group">
                                    <div class="col-sm-12 source">
                                        <label for="flat_source" class="">Источник информации</label>
                                        <select ng-model="query.add.source" data-live-search="true" id="flat_source" name="flat[source]" class="selectpicker form-control input-sm form-control input-sm">
                                            <option value="">Печатная газета Премьер</option>
                                            <option>Сайт Премьера (premier.ua)</option>
                                            <option>База данных</option>
                                            <option>По рекомендации</option>
                                            <option>Расклейка</option>
                                            <option>Другие источники</option>
                                            <option>Olx</option>
                                            <option>dom.ria.ua</option>
                                            <option>lun.ua</option>
                                            <option>ЦентрИнформ (ci.ua)</option>
                                            <option>kharkovestate.com</option>
                                            <option>domik.ua</option>
                                            <option>est.ua</option>
                                            <option>metry.ua</option>
                                            <option>estate-in-kharkov.com</option>
                                            <option>Другие сайты</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12">
                                    <label class="sc-only" for="flat_info">Заголовок</label>
                                    <textarea ng-model="query.add.header" id="flat_header" name="flat[header]" class="form-control form-control"></textarea>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-xs-12">
                                    <label class="sc-only" for="flat_info">Дополнительная информация</label>
                                    <textarea ng-model="query.add.add_info" id="flat_info" name="flat[info]" class="form-control form-control"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="submit" id="flat_submit" name="flat[submit]" class="btn modal-btn">Сохранить</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modal_4">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button class="close" id="setCookie" type="button" data-dismiss="modal" onclick="document.getElementById('modal_1').style.display='none';">
                    <i class="fa fa-close"></i>
                </button>
                <h4>Добавить рекламу дома</h4>
            </div>
            <div class="modal-body">
                <form name="flat" method="post" action="/flats" class="form form-small" role="form" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 column-1">
                            <div class="row">
                                <div class="form-group">
                                    <div class="col-xs-5 col-sm-5 roomCount">
                                        <label for="house_roomCount" class="">Комнат</label>
                                        <input ng-model="query.addhouse.rooms.count" type="text" id="house_roomCount" name="house[roomCount]" class="form-control input-sm form-control input-sm">
                                    </div>
                                    <div class="col-xs-7 col-sm-7 type">
                                        <label for="house_type" class="required">Тип</label>
                                        <select ng-model="query.addhouse.type" id="flat_type" name="house[type]" data-live-search="true" class="selectpicker form-control input-sm form-control input-sm">
                                            <option value="">Дом</option>
                                            <option">Дача</option>
                                            <option>Дом 1/2</option>
                                            <option>Дом 1/3</option>
                                            <option>Недострой</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group">
                                    <div class="col-sm-12 floor">
                                        <label for="flat_floor" class="">Количество этажей</label>
                                        <div class="row">
                                            <div class="col-sm-6 col-md-6">
                                                <input placeholder="" type="text" ng-model="query.addhouse.floor" id="house_floor" name="house[floor]" class="form-control input-sm form-control input-sm">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group">
                                    <div class="col-sm-12 area">
                                        <label>Площадь</label>
                                        <div class="row nopadding">
                                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 ">
                                                <label for="house_livingArea" class="">Жилая</label>
                                                <input type="text" ng-model="query.addhouse.living_area" id="house_livingArea" name="house[livingArea]" class="form-control input-sm form-control input-sm">
                                            </div>
                                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                                <label for="house_totalArea" class="">Общая</label>
                                                <input type="text" ng-model="query.addhouse.total_area" id="house_totalArea" name="house[totalArea]" class="form-control input-sm form-control input-sm">
                                            </div>
                                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                                <label for="house_kitchenArea" class="">Кухня</label>
                                                <input type="text" ng-model="query.addhouse.kithcen_area" id="house_kitchenArea" name="house[kitchenArea]" class="form-control input-sm form-control input-sm">
                                            </div>
                                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                                <label for="house_kitchenArea" class="">Двора</label>
                                                <input type="text" ng-model="query.addhouse.main_area" id="house_kitchenArea" name="house[kitchenArea]" class="form-control input-sm form-control input-sm">
                                            </div>
                                        </div>
                                        <hr>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <label for="flat_price" class="">Цена тыс. у.е.</label>
                                        <div class="input-group">
                                            <span class="input-group-addon">$</span>
                                            <input type="text" ng-model="query.add.cost" id="flat_price" name="flat[price]" class="form-control input-sm form-control input-sm">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 column-2">
                            <div class="row">
                                <div class="form-group">
                                    <div class="col-sm-12 schema">
                                        <label for="house_houseSewage" class="">Водопровод</label>
                                        <select ng-model="query.addhouse.sewage" data-live-search="true" id="house_houseSewage" name="house[houseSewage]" class="selectpicker form-control input-sm form-control input-sm">
                                            <option value="">нет</option>
                                            <option>центральная</option>
                                            <option>яма</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group">
                                    <div class="col-sm-12 material">
                                        <label for="house_wallMaterial" class="">Материал</label>
                                        <select ng-model="query.addhouse.material" id="house_wallMaterial" name="house[wallMaterial]" data-live-search="true" class="selectpicker form-control input-sm form-control input-sm">
                                            <option value="">кир.</option>
                                            <option>дер.</option>
                                            <option>д+к</option>
                                            <option>шлак</option>
                                            <option>пан.</option>
                                            <option>блоч.</option>
                                            <option>саман</option>
                                            <option">монол</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group">
                                    <div class="col-sm-12 wc">
                                        <label for="flat_wc" class="">Вода</label>
                                        <select ng-model="query.addhouse.water" data-live-search="true" id="house_water" name="house[water]" class="selectpicker form-control input-sm form-control input-sm">
                                            <option value="">Дом</option>
                                            <option>Улица</option>
                                            <option>Двор</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group">
                                    <div class="col-sm-12 balkon">
                                        <label class="sc-only" for="flat_balkon">Газ</label>
                                        <select id="house_gas" ng-model="query.addhouse.gas" data-live-search="true" name="house[gas]" class="selectpicker form-control input-sm form-control input-sm">
                                            <option value="">Дом</option>
                                            <option>Улица</option>
                                            <option>Двор</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group">
                                    <div class="col-sm-12 condition">
                                        <label for="house_houseConditional" class="">Состояние</label>
                                        <select ng-model="query.addhouse.state" data-live-search="true" id="house_houseConditional" name="house[houseCondition]" class="selectpicker form-control input-sm form-control input-sm">
                                            <option value="">Под снос</option>
                                            <option">Плохое</option>
                                            <option>Жилое</option>
                                            <option">Ремонт</option>
                                            <option>Кап. ремонт</option>
                                            <option>Недострой</option>
                                            <option>Без внутр. работ</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group">
                                    <div class="col-sm-12 condition">
                                        <label for="house_houseElectricity" class="">Електричество</label>
                                        <select ng-model="query.addhouse.electricity" data-live-search="true" id="house_houseElectricity" name="house[houseElectricity]" class="selectpicker form-control input-sm form-control input-sm">
                                            <option value="">Дом</option>
                                            <option">Улица</option>
                                            <option>Двор</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 column-3">
                            <div class="row">
                                <div class="form-group">
                                    <div class="col-sm-12 district">
                                        <label for="house_district" class="">Район</label>
                                        <select ng-model="query.addhouse.region" id="house_district" name="house[district]" data-live-search="true" class="selectpicker form-control input-sm form-control input-sm">
                                            <option value="">Салтовка</option>
                                            <option value="Алексеевка">Алексеевка</option>
                                            <option value="Артема">Артема</option>
                                            <option value="Аэропорт">Аэропорт</option>
                                            <option value="Б.Даниловка">Б.Даниловка</option>
                                            <option value="Восточный">Восточный</option>
                                            <option value="Гагарина">Гагарина</option>
                                            <option value="Герцена">Герцена</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="house-group">
                                    <div class="col-sm-12 landmark">
                                        <label for="house_landmark" class="">Ориентир</label>
                                        <input ng-model="query.addhouse.reference_point" type="text" id="house_landmark" name="house[landmark]" class="form-control input-sm autocomplete form-control input-sm ui-autocomplete-input" rel="/autocomplete/landmark" autocomplete="off">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group">
                                    <div class="col-xs-12 col-sm-12">
                                        <label for="house_adding_street">Улица</label>
                                        <select ng-model="query.addhouse.street" id="house_adding_street" name="house_adding[street]" data-live-search="true" data-search="street" class="selectpicker form-control input-sm">
                                            <option value="">Героев труда</option>
                                            <option>Блюхера улица</option>
                                            <option>50 лет СССР</option>
                                            <option>Третей пятилетки</option>
                                            <option>Проспект ленина</option>
                                            <option>Московский проспект</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="form-group">
                                    <div class="col-sm-12 houseNumber">
                                        <label for="flat_houseNumber" class="">№ дома</label>
                                        <input ng-model="query.addhouse.house_number" type="text" id="house_houseNumber" name="house[houseNumber]" class="form-control input-sm form-control input-sm">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 column-4">
                            <div class="row">
                                <div class="form-group">
                                    <div class="col-sm-12 source">
                                        <label for="house_source" class="">Источник информации</label>
                                        <select ng-model="query.addhouse.source" data-live-search="true" id="house_source" name="house[source]" class="selectpicker form-control input-sm form-control input-sm">
                                            <option value="">Печатная газета Премьер</option>
                                            <option>Сайт Премьера (premier.ua)</option>
                                            <option>База данных</option>
                                            <option>По рекомендации</option>
                                            <option>Расклейка</option>
                                            <option>Другие источники</option>
                                            <option>Olx</option>
                                            <option>dom.ria.ua</option>
                                            <option>lun.ua</option>
                                            <option>ЦентрИнформ (ci.ua)</option>
                                            <option>kharkovestate.com</option>
                                            <option>domik.ua</option>
                                            <option>est.ua</option>
                                            <option>metry.ua</option>
                                            <option>estate-in-kharkov.com</option>
                                            <option>Другие сайты</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12">
                                    <label class="sc-only" for="house_info">Заголовок</label>
                                    <textarea ng-model="query.addhouse.header" id="house_header" name="house[header]" class="form-control form-control"></textarea>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-xs-12">
                                    <label class="sc-only" for="house_info">Дополнительная информация</label>
                                    <textarea ng-model="query.addhouse.add_info" id="house_info" name="house[info]" class="form-control form-control"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="submit" id="house_submit" name="house[submit]" class="btn modal-btn">Сохранить</button>
            </div>
        </div>
    </div>
</div>




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
                <button type="button" ng-show="isFlats" class="btn btn-primary" id="call_modal" data-toggle="modal" data-target="#modal_1">Поиск рекламы квартир</button>
                <button type="button" ng-show="!isFlats" class="btn btn-primary" id="call_modal" data-toggle="modal" data-target="#modal_2">Поиск рекламы домов</button>
                <button type="button" ng-show="isFlats" class="btn btn-primary" id="call_modal" data-toggle="modal" data-target="#modal_3">Добавить рекламу квартиры</button>
                <button type="button" ng-show="!isFlats" class="btn btn-primary" id="call_modal" data-toggle="modal" data-target="#modal_4">Добавить рекламу дома</button>
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
        $('tbody.rowlink').rowlink('a');
    } );
</script>
</body>
</html>