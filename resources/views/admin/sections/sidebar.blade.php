<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion pr-0" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
      <div class="sidebar-brand-icon rotate-n-15">
        <i class="fas fa-laugh-wink"></i>
      </div>
      <div class="sidebar-brand-text mx-3"></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
      <a class="nav-link" href="{{route('main')}}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span> داشبورد </span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
      فروشگاه
    </div>


    <!-- Nav Item - Tables -->
    <li class="nav-item">
      <a class="nav-link" href="{{route('admin.brands.index')}}">
        <i class="fas fa-fw fa-store"></i>
        <span> برندها </span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{route('admin.attributes.index')}}">
          <i class="fas fa-fw fa-store"></i>
          <span> ویژگی ها </span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{route('admin.categories.index')}}">
          <i class="fas fa-fw fa-store"></i>
          <span>دسته بندی و ارائه خدمت</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{route('admin.tags.index')}}">
          <i class="fas fa-fw fa-store"></i>
          <span>تگ ها</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{route('admin.messages.index')}}">
          <i class="fas fa-fw fa-store"></i>
          <span>پیام ها</span></a>
      </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
      <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

  </ul>
