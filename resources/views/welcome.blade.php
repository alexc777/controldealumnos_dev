@extends('components.app')
@section('content')

@include('components.menulateral')

<div class="areacontenido col-lg-g" ng-controller="HomeCtrl" ng-cloak>
    <div class="container">
        Hola
    </div>
</div>

@endsection
@push('scripts')
    <script src="/js/controller/HomeCtrl.js"></script>
@endpush
