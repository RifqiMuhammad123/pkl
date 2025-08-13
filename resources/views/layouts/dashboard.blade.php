<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Dashboard Admin</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <style>
    .small-swal {
      font-size: 12px;
      padding: 10px;
      width: 250px !important;
    }
  </style>
</head>
<body id="body">
  <!-- ✅ SIDEBAR -->
  <div class="sidebar" id="sidebar">
    <h3>Halaman Admin</h3>
    <img src="https://randomuser.me/api/portraits/men/75.jpg" alt="Foto Admin">

    @if(session('admin'))
      <p>{{ session('admin')->nama_admin }}</p>
    @elseif(session('guru'))
      <p>{{ session('guru')->nama }}</p>
    @else
      <p>User tidak dikenali</p>
    @endif

    <hr>

    <!-- ✅ Menu Dashboard -->
    <a href="{{ route('dashboard.admin') }}"
       class="{{ request()->routeIs('dashboard.admin') ? 'active' : '' }}">
       <i class="fas fa-chart-line"></i> Dashboard
    </a>

<!-- ✅ Menu Barang -->
<div class="menu-item has-submenu {{ request()->is('admin/barang*') ? 'active' : '' }}">
  <a href="#" class="menu-toggle">
    <i class="fas fa-box"></i> Barang
    <i class="fas fa-chevron-down submenu-icon"></i>
  </a>
  <div class="submenu">
    <a href="{{ route('barang.create') }}" class="{{ request()->routeIs('barang.create') ? 'active' : '' }}">Tambah Barang</a>
    <a href="{{ route('barang.baru') }}" class="{{ request()->routeIs('barang.baru') ? 'active' : '' }}">Barang Baru</a>
    <a href="{{ route('barang.stok') }}" class="{{ request()->routeIs('barang.stok') ? 'active' : '' }}">All Stok</a>
  </div>
</div>



    <!-- ✅ Menu Guru -->
<div class="menu-item has-submenu {{ request()->routeIs('guru.*') ? 'active' : '' }}">
  <a href="#" class="menu-toggle">
    <i class="fas fa-user"></i> Guru
    <i class="fas fa-chevron-down submenu-icon"></i>
  </a>
  <div class="submenu">
    <a href="{{ route('guru.create') }}" class="{{ request()->routeIs('guru.create') ? 'active' : '' }}">Tambah Guru</a>
    <a href="{{ route('guru.index') }}" class="{{ request()->routeIs('guru.index') ? 'active' : '' }}">Daftar Guru</a>
  </div>
</div>


