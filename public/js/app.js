'use strict';

// console.log('success...')


var ngLara = angular.module("ngLara", ['ngRoute', 'mgcrea.ngStrap', 'ngAnimate']);

ngLara.config(function ($routeProvider, $locationProvider) {

    $routeProvider.
        when('/', {
            templateUrl: 'templates/index.html',
            controller: 'UserCtrl'
        }).
        when('/users', {
            templateUrl: 'templates/users.html',
            controller: 'UserCtrl'
        }).
        otherwise({
            redirectTo: '/'
        });

    // $locationProvider.html5Mode(true);

});