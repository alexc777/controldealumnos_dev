/*AngularJS*/
var app= angular.module('app', [
  'ngRoute',
  'ngCookies',
  'ngAnimate',
  'ngResource',
  'ngSanitize',
  'ui.bootstrap',
  'angularMoment',
  'nya.bootstrap.select',
  'highcharts-ng',
  'infinite-scroll',
  'ngclipboard',
  'ngPrint',
  'ngMask'
]);

app.config(function ($locationProvider) {
  $locationProvider.html5Mode({
    enabled: true,
    requireBase: false
  });
});