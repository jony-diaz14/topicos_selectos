<div class="sidebar" data-color="orange" data-background-color="white" data-image="{{ asset('material') }}/img/sidebar-1.jpg">
  <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
  <div class="logo">
    <a href="https://creative-tim.com/" class="simple-text logo-normal">
      {{ __('Topicos Selectos') }}
    </a>
  </div>
  <div class="sidebar-wrapper">
    <ul class="nav">
      <li class="nav-item{{ $activePage == 'dashboard' ? ' active' : '' }}">
        <a class="nav-link" href="#">
          <i class="material-icons">dashboard</i>
            <p>{{ __('Inicio') }}</p>
        </a>
      </li>
      </li>
        <li class="nav-item{{ $activePage == 'typography' ? ' active' : '' }}">
          <a class="nav-link" href="usuarios">
            <i class="material-icons">person</i>
              <p>{{ __('Usuarios') }}</p>
          </a>
        </li>
        <li class="nav-item{{ $activePage == 'icons' ? ' active' : '' }}">
          <a class="nav-link" href="#">
            <i class="material-icons">group</i>
            <p>{{ __('Clientes') }}</p>
          </a>
        </li>
        <li class="nav-item{{ $activePage == 'map' ? ' active' : '' }}">
          <a class="nav-link" href="#">
            <i class="material-icons">local_mall</i>
              <p>{{ __('Productos') }}</p>
          </a>
        </li>
        {{--  <li class="nav-item active-pro{{ $activePage == 'upgrade' ? ' active' : '' }}">
          <a class="nav-link text-white bg-danger" href="#">
            <i class="material-icons text-white">unarchive</i>
            <p>{{ __('Upgrade to PRO') }}</p>
          </a>
        </li>  --}}
        <li class="nav-item{{ $activePage == 'notifications' ? ' active' : '' }}">
            <a class="nav-link" href="#">
              <i class="material-icons">local_shipping</i>
              <p>{{ __('Proveedores') }}</p>
            </a>
    </ul>
    </div>
</div>
