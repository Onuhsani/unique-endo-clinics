<nav class="pcoded-navbar">

    <div class="nav-list">
      <div class="pcoded-inner-navbar main-menu">
        {{-- <div class="pcoded-navigation-label">Navigation</div> --}}
        <ul class="pcoded-item pcoded-left-item">

          <li class=" ">
            <a href="{{ route('dashboard.index') }}" class="waves-effect waves-dark">
              <span class="pcoded-micon">
                <i class="feather icon-home"></i>
              </span>
              <span class="pcoded-mtext">Dashboard</span>
            </a>
          </li>

          <li class=" ">
            <a href="{{ route('appointments.appointments') }}" class="waves-effect waves-dark">
              <span class="pcoded-micon">
                <i class="feather icon-edit-1"></i>
              </span>
              <span class="pcoded-mtext">Appointments</span>
              <span class="pcoded-badge label label-warning">NEW</span>
            </a>
          </li>

          <li class=" ">
            <a href="{{ route('doctors.doctors') }}" class="waves-effect waves-dark">
              <span class="pcoded-micon">
                <i class="feather icon-user"></i>
              </span>
              <span class="pcoded-mtext">Doctors</span>
            </a>
          </li>

          <li class=" ">
            <a href="{{ route('newsletter.view') }}" class="waves-effect waves-dark">
              <span class="pcoded-micon">
                <i class="feather icon-shield"></i>
              </span>
              <span class="pcoded-mtext">Newsletters</span>
            </a>
          </li>

          <li class=" ">
            <a href="{{ route('messages.view') }}" class="waves-effect waves-dark">
              <span class="pcoded-micon">
                <i class="feather icon-tv"></i>
              </span>
              <span class="pcoded-mtext">Messages</span>
            </a>
          </li>
        </ul>


      </div>
    </div>
  </nav>
