@section('menulateral')
    <div class="menulateral spd spi col-lg-m" ng-controller="MenulateralCtrl" ng-cloak>
        <ul>
            <li>
                <a href="{{ URL::to('/') }}" class="icovescritorio">Listado de alumnos</a>
            </li>

            <li>
                <a href="{{ URL::to('/') }}" class="icovescritorio">Asignación de cursos</a>
            </li>

            <li>
                <a href="{{ URL::to('/') }}" class="icovescritorio">Cursos</a>
            </li>

            <li>
                <a href="{{ URL::to('/') }}" class="icovescritorio">Ficha de alumno</a>
            </li>
        </ul>
    </div>
@show
@push('scripts')
    <script src="/js/controller/MenulateralCtrl.js"></script>
@endpush
