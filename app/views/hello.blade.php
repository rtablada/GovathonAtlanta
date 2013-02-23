<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" ng-app="app">
<!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

    <link rel="stylesheet" href="styles/main.css">
    <!--<link rel="stylesheet" href="styles/typeahead.css">-->
    <script src="scripts/vendor/modernizr.min.js"></script>
    <script src="components/angular/angular.js"></script>
    <script src="components/underscore/underscore.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCO30yN3rweCsE4wqPCUyMH-bpBgK8GYpM&sensor=false"></script>

</head>
<body>


    <div class="container">

        <div class="navbar" ng-show="showNav">
            <div class="navbar-inner">
                <ul class="nav">
                    <!--<span class="icon-home">&nbsp;</span>-->
                    <li ng-class="{active: loc=='home'}"><a ng-click="setLocation('home')" href="#/home">
                        <i class="icon-home"></i>&nbsp;Home</a></li>
                    <li ng-class="{active: loc=='find'}"><a ng-click="setLocation('find')" href="#/find">
                        <i class="icon-search"></i>&nbsp;Find</a></li>
                    <li ng-class="{active: loc=='provide'}"><a ng-click="setLocation('provide')" href="#/provide">
                        <i class="icon-hand-right"></i>&nbsp;Provide</a></li>
                    <li ng-class="{active: loc=='about'}"><a ng-click="setLocation('about')" href="#/about">
                        <i class=""></i>&nbsp;About</a></li>
                </ul>
            </div>
        </div>

        <div ng-view class="row"></div>
    </div>
    <!--[if lt IE 7]>
        <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
    <![endif]-->

    <!-- Add your site or application content here -->

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="scripts/vendor/jquery.min.js"><\/script>')</script>

    <!-- build:js scripts/plugins.js -->
    <script src="scripts/vendor/bootstrap/bootstrap-affix.js"></script>
    <script src="scripts/vendor/bootstrap/bootstrap-alert.js"></script>
    <script src="scripts/vendor/bootstrap/bootstrap-dropdown.js"></script>
    <script src="scripts/vendor/bootstrap/bootstrap-tooltip.js"></script>
    <script src="scripts/vendor/bootstrap/bootstrap-modal.js"></script>
    <script src="scripts/vendor/bootstrap/bootstrap-transition.js"></script>
    <script src="scripts/vendor/bootstrap/bootstrap-button.js"></script>
    <script src="scripts/vendor/bootstrap/bootstrap-popover.js"></script>
    <script src="scripts/vendor/bootstrap/bootstrap-typeahead.js"></script>
    <script src="scripts/vendor/bootstrap/bootstrap-carousel.js"></script>
    <script src="scripts/vendor/bootstrap/bootstrap-scrollspy.js"></script>
    <script src="scripts/vendor/bootstrap/bootstrap-collapse.js"></script>
    <script src="scripts/vendor/bootstrap/bootstrap-tab.js"></script>
    <script src="components/handlebars/handlebars.js"></script>
    <script src="components/handlebars/handlebars.runtime.js"></script>
    <!-- endbuild -->

    <script src="scripts/main.js"></script>
</body>
</html>
