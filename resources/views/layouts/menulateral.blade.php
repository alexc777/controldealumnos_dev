@section('menulateral')
    <div class="menulateral spd spi col-lg-m" ng-controller="MenulateralCtrl" ng-cloak>
        <ul>
            <li {{{ (Request::is('/') ? 'class=active' : '') }}}>
                <a href="{{ URL::to('/') }}" class="icovescritorio">Cuentas por cobrar</a>
            </li>
            <li {{{ (Request::is('crearlote') ? 'class=active' : '') }}}>
                <a href="{{ URL::to('/crearlote') }}" class="icovtransacciones">Crear Lote</a>
            </li>
            <li {{{ (Request::is('transacciones') ? 'class=active' : '') }}}>
                <a href="{{ URL::to('/transacciones') }}" class="icovtransacciones">Transacciones</a>
            </li>
            <li {{{ (Request::is('ajustes') ? 'class=active' : '') }}}>
                <a href="{{ URL::to('/ajustes') }}" class="icovajustes">Ajustes</a>
            </li>

        </ul>
    </div>
@show
@push('scripts')
    <script src="/js/controller/MenulateralCtrl.js"></script>
@endpush
