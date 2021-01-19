<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('dashboard') }}">
    <div class="sidebar-brand-icon rotate-n-15">
        <i class="fas fa-user-shield"></i>
    </div>
    <div class="sidebar-brand-text mx-3">PW Admin</div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item">
    <a class="nav-link" href="{{ route('dashboard') }}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
    <span>Dashboard</span></a>
</li>

<li class="nav-item">
    <a class="nav-link" href="{{ route('staff.index') }}">
        <i class="fas fa-user-circle"></i>
    <span>Staff</span></a>
</li>

<li class="nav-item">
    <a class="nav-link" href="{{ route('staffpicture.index') }}">
        <i class="fas fa-user-circle"></i>
    <span>Gambar Staff</span></a>
</li>

<li class="nav-item">
    <a class="nav-link" href="{{ route('gallery.index') }}">
        <i class="fas fa-fw fa-images"></i>
    <span>Gallery</span></a>
</li>
<li class="nav-item">
    <a class="nav-link" href="{{ route('picture.index') }}">
        <i class="fas fa-fw fa-images"></i>
    <span>Gambar Gallery</span></a>
</li>

<hr class="sidebar-divider">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

</ul>
<!-- End of Sidebar -->