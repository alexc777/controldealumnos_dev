@section('menulateral')
    <div class="menulateral spd spi col-lg-m" ng-controller="MenulateralCtrl" ng-cloak>
        <ul>
            <li>
                <a href="{{ URL::to('/') }}">Listado de alumnos</a>
            </li>

            <li>
                <a href="{{ URL::to('/cursos') }}">Cursos</a>
            </li>

            <li>
                <a href="{{ URL::to('/catedraticos') }}">Catedraticos</a>
            </li>

            <li>
                <a href="{{ URL::to('/fichas') }}">Ficha de alumno</a>
            </li>
        </ul>
    </div>
@show
@push('scripts')
    <script src="/js/controller/MenulateralCtrl.js"></script>
@endpush
