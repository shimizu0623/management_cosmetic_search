<div class="sidebar" data-color="orange" data-background-color="white" data-image="{{ asset('material') }}/img/sidebar-1.jpg">
  <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
  <div class="logo">
    <div class="simple-text logo-normal">
      {{ __('Management Page') }}
    </div>
  </div>
  <div class="sidebar-wrapper">
    <ul class="nav">
      <li class="nav-item{{ $activePage == 'requests' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('requests') }}">
          <i class="material-icons">chat</i>
          <p>Requests</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'requests' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('leaveReason') }}">
          <i class="material-icons">exit_to_app</i>
          <p>Leave Reasons</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'requests' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('skin_types.index') }}">
          <i class="material-icons">list</i>
          <p>All SkinTypes</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'requests' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('skin_types.create') }}">
          <i class="material-icons">add</i>
          <p>Create SkinType</p>
        </a>
      </li>
    </ul>
  </div>
</div>