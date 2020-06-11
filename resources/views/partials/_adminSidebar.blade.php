<ul class="sidebar navbar-nav">

  <li class="nav-item  active">
    <a class="nav-link" href="/admin">
      <i class="fas fa-fw fa-home"></i>
      <span>Dashboard</span>
    </a>
  </li>

  <li class="nav-item">
    <a class="nav-link " href="{{ url('/admin/users') }}">
       <i class="fas fa-fw fa-users"></i>
      <span>Users</span>
    </a>
  </li>

  <li class="nav-item">
    <a class="nav-link " href="{{ url('/admin/news') }}">
       <i class="fas fa-fw fa-newspaper"></i>
      <span>Berita</span>
    </a>
  </li>

  <li class="nav-item">
    <a class="nav-link " href="{{ url('/admin/facts') }}">
       <i class="fas fa-fw fa-align-left"></i>
      <span>Fakta</span>
    </a>
  </li>

  <li class="nav-item">
    <a class="nav-link " href="{{ url('/admin/messages') }}">
       <i class="fas fa-fw fa-comments"></i>
      <span>Masukan</span>
    </a>
  </li>

</ul>
