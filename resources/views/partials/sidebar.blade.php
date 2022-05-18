<nav id="sidebar">
  <!-- Sidebar Header-->
  <div class="sidebar-header d-flex align-items-center p-4">
    <img class="avatar shadow-0 img-fluid rounded-circle" src="{{ asset('/img/avatar-6.jpg') }}" alt="">
    <div class="ms-3 title">
      <h1 class="h5 mb-1">{{ auth()->user()->username }}</h1>
      <p class="text-sm text-capitalize text-gray-700 mb-0 lh-1">{{ auth()->user()->role->name }}</p>
    </div>
  </div>

  <span class="text-uppercase text-gray-600 text-xs heading mb-2 mx-3 text-wrap d-block">General</span>
  <ul class="list-unstyled">

    <li class="sidebar-item {{ Request::is('/') ? 'active' : '' }}">
      <a class="sidebar-link" href="{{ url('/') }}">
        <i class="bi bi-house-door svg-icon svg-icon-sm svg-icon-heavy"></i>
        <span>Home</span>
      </a>
    </li>
  </ul>

  <span class="text-uppercase text-gray-600 text-xs heading mb-2 mx-3 text-wrap d-block">Super Admin</span>
  <ul class="list-unstyled">

    @can('viewAny', 'App\Models\Address')
      <li class="sidebar-item {{ Request::is('addresses*') ? 'active' : '' }}">
        <a class="sidebar-link" href="#addressesDropDown" data-bs-toggle="collapse">
          <i class="bi bi-cursor svg-icon svg-icon-sm svg-icon-heavy"></i>
          <span>Addresses</span>
        </a>
        <ul class="collapse list-unstyled {{ Request::is('addresses*') ? 'show' : '' }}" id="addressesDropDown">
          <li>
            <a class="sidebar-link {{ Request::is('addresses/create') ? 'text-primary' : '' }}"
              href="{{ url('/addresses/create') }}">
              Add
            </a>
          </li>
          <li>
            <a class="sidebar-link {{ Request::is('addresses') ? 'text-primary' : '' }}"
              href="{{ url('/addresses') }}">
              View
            </a>
          </li>
        </ul>
      </li>
    @endcan

    <li class="sidebar-item {{ Request::is('activities*') ? 'active' : '' }}">
      <a class="sidebar-link" href="#activitiesDropDown" data-bs-toggle="collapse">
        <i class="bi bi-list-task svg-icon svg-icon-sm svg-icon-heavy"></i>
        <span>Activities</span>
      </a>
      <ul class="collapse list-unstyled {{ Request::is('activities*') ? 'show' : '' }}" id="activitiesDropDown">
        <li>
          <a class="sidebar-link {{ Request::is('activities/create') ? 'text-primary' : '' }}"
            href="{{ url('/activities/create') }}">
            Add
          </a>
        </li>
        <li>
          <a class="sidebar-link {{ Request::is('activities') ? 'text-primary' : '' }}"
            href="{{ url('/activities') }}">
            View
          </a>
        </li>
      </ul>
    </li>

    <li class="sidebar-item {{ Request::is('people*') ? 'active' : '' }}">
      <a class="sidebar-link" href="#peopleDropDown" data-bs-toggle="collapse">
        <i class="bi bi-people-fill svg-icon svg-icon-sm svg-icon-heavy"></i>
        <span>People</span>
      </a>
      <ul class="collapse list-unstyled {{ Request::is('people*') ? 'show' : '' }}" id="peopleDropDown">
        <li>
          <a class="sidebar-link {{ Request::is('people/create') ? 'text-primary' : '' }}"
            href="{{ url('/people/create') }}">
            Add
          </a>
        </li>
        <li>
          <a class="sidebar-link {{ Request::is('people') ? 'text-primary' : '' }}" href="{{ url('/people') }}">
            View
          </a>
        </li>
      </ul>
    </li>

    <li class="sidebar-item {{ Request::is('vehicles*') ? 'active' : '' }}">
      <a class="sidebar-link" href="#vehiclesDropDown" data-bs-toggle="collapse">
        <i class="bi bi-truck svg-icon svg-icon-sm svg-icon-heavy"></i>
        <span>Vehicles</span>
      </a>
      <ul class="collapse list-unstyled {{ Request::is('vehicles*') ? 'show' : '' }}" id="vehiclesDropDown">
        <li>
          <a class="sidebar-link {{ Request::is('vehicles/create') ? 'text-primary' : '' }}"
            href="{{ url('/vehicles/create') }}">
            Add
          </a>
        </li>
        <li>
          <a class="sidebar-link {{ Request::is('vehicles') ? 'text-primary' : '' }}"
            href="{{ url('/vehicles') }}">
            View
          </a>
        </li>
      </ul>
    </li>

    <li class="sidebar-item {{ Request::is('companies*') ? 'active' : '' }}">
      <a class="sidebar-link" href="#companiesDropDown" data-bs-toggle="collapse">
        <i class="bi bi-building svg-icon svg-icon-sm svg-icon-heavy"></i>
        <span>Companies</span>
      </a>
      <ul class="collapse list-unstyled {{ Request::is('companies*') ? 'show' : '' }}" id="companiesDropDown">
        <li>
          <a class="sidebar-link {{ Request::is('companies/create') ? 'text-primary' : '' }}"
            href="{{ url('/companies/create') }}">
            Add
          </a>
        </li>
        <li>
          <a class="sidebar-link {{ Request::is('companies') ? 'text-primary' : '' }}"
            href="{{ url('/companies') }}">
            View
          </a>
        </li>
      </ul>
    </li>

    <li class="sidebar-item {{ Request::is('projects*') ? 'active' : '' }}">
      <a class="sidebar-link" href="#projectsDropDown" data-bs-toggle="collapse">
        <i class="bi bi-kanban svg-icon svg-icon-sm svg-icon-heavy"></i>
        <span>Projects</span>
      </a>
      <ul class="collapse list-unstyled {{ Request::is('projects*') ? 'show' : '' }}" id="projectsDropDown">
        <li>
          <a class="sidebar-link {{ Request::is('projects/create') ? 'text-primary' : '' }}"
            href="{{ url('/projects/create') }}">
            Add
          </a>
        </li>
        <li>
          <a class="sidebar-link {{ Request::is('projects') ? 'text-primary' : '' }}"
            href="{{ url('/projects') }}">
            View
          </a>
        </li>
      </ul>
    </li>

    <li class="sidebar-item {{ Request::is('finances*') ? 'active' : '' }}">
      <a class="sidebar-link" href="#financesDropDown" data-bs-toggle="collapse">
        <i class="bi bi-currency-dollar svg-icon svg-icon-sm svg-icon-heavy"></i>
        <span>Finance</span>
      </a>
      <ul class="collapse list-unstyled {{ Request::is('finances*') ? 'show' : '' }}" id="financesDropDown">
        <li>
          <a class="sidebar-link {{ Request::is('finances/acceptance') ? 'text-primary' : '' }}"
            href="{{ url('/finances/acceptance') }}">
            Acceptance
          </a>
        </li>
        <li>
          <a class="sidebar-link {{ Request::is('finances/payment') ? 'text-primary' : '' }}"
            href="{{ url('/finances/payment') }}">
            Payment
          </a>
        </li>
      </ul>
    </li>

  </ul>

</nav>
