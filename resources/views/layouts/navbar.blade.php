<nav class="navbar-user-top full-reset">
    <ul class="list-unstyled full-reset">
        <figure>
            <img src="{{ asset('assets/img/user01.png') }}" alt="user-picture" class="img-responsive img-circle center-box">
        </figure>
        <li style="color:#fff; cursor:default;">
            {{-- <span class="all-tittles">{{ Auth::user()->role }}</span> --}}
        </li>
        <li class="tooltips-general exit-system-button" data-placement="bottom" title="Salir del sistema">
            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                @csrf
            </form>
                <i class="zmdi zmdi-power"></i>
        </li>

        {{-- <li class="tooltips-general btn-help" data-placement="bottom" title="Ayuda">
            <i class="zmdi zmdi-help-outline zmdi-hc-fw"></i>
        </li> --}}
        <li class="mobile-menu-button visible-xs" style="float: left !important;">
            <i class="zmdi zmdi-menu"></i>
        </li>
    </ul>
</nav>

<div class="modal fade" tabindex="-1" role="dialog" id="ModalHelp">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title text-center all-tittles">ayuda del sistema</h4>
            </div>
            <div class="modal-body">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="zmdi zmdi-thumb-up"></i> &nbsp; De acuerdo</button>
            </div>
        </div>
    </div>
</div>
