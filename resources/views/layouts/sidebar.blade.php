<!-- Sidebar -->
<div class="sidebar">
    <!-- Profile Section -->
    <div class="user-profile text-center mt-3 mb-3">
        <img src="{{ asset('adminlte/dist/img/profile-picture.jpg') }}" alt="Profile Picture" class="img-circle elevation-2" style="width: 50px; height: 50px;">
        <p class="user-name" style="color: #ffffff; font-weight: bold;">Nama Pengguna</p>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Dashboard Menu -->
            <li class="nav-item">
                <a href="{{ url('/') }}" class="nav-link {{ ($activeMenu == 'dashboard') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>Dashboard</p>
                </a>
            </li>

            <!-- User Management Menu -->
            <li class="nav-item has-treeview">
                <a href="#" class="nav-link {{ ($activeMenu == '') ? 'active' : '' }}" onclick="toggleSubmenu('kelolaPenggunaSubmenu')">
                    <i class="nav-icon fas fa-users-cog"></i>
                    <p>Pengguna<i class="right fas fa-angle-left"></i></p>
                </a>
                <ul class="nav nav-treeview" id="kelolaPenggunaSubmenu" style="display: none;">
                    <li class="nav-item">
                        <a href="{{ url('/user') }}" class="nav-link {{ ($activeMenu == 'user') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-user-tag"></i>
                            <p>Kelola Pengguna</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('/level') }}" class="nav-link {{ ($activeMenu == 'level') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-user-tag"></i>
                            <p>Level Pengguna</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('/profiledosen') }}" class="nav-link {{ ($activeMenu == 'profile_dosen') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-user-tag"></i>
                            <p>Profile Pengguna</p>
                        </a>
                    </li>
                </ul>
            </li>

            <!-- Kegiatan Menu -->
            <li class="nav-item has-treeview">
                <a href="#" class="nav-link {{ ($activeMenu == '') ? 'active' : '' }}" onclick="toggleSubmenu('kegiatanSubmenu')">
                    <i class="nav-icon fas fa-layer-group"></i>
                    <p>Kegiatan<i class="right fas fa-angle-left"></i></p>
                </a>
                <ul class="nav nav-treeview" id="kegiatanSubmenu" style="display: none;">
                    <li class="nav-item">
                        <a href="{{ url('/kegiatan') }}" class="nav-link {{ ($activeMenu == 'kegiatan') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-tags"></i>
                            <p>Kelola Kegiatan</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('/jeniskegiatan') }}" class="nav-link {{ ($activeMenu == 'jeniskegiatan') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-tags"></i>
                            <p>Jenis Kegiatan</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('/anggotakegiatan') }}" class="nav-link {{ ($activeMenu == 'anggota_kegiatan') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-user-plus"></i>
                            <p>Kelola Anggota Kegiatan</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('/jabatan') }}" class="nav-link {{ ($activeMenu == 'jabatan') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-briefcase"></i>
                            <p>Jenis Jabatan Anggota</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('/progresskegiatan') }}" class="nav-link {{ ($activeMenu == 'progress') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-chart-line"></i>
                            <p>Progress Kegiatan</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('/dokumen') }}" class="nav-link {{ ($activeMenu == 'dokumen') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-file-alt"></i>
                            <p>Dokumen</p>
                        </a>
                    </li>
                </ul>
            </li>

            {{-- <!-- Activity Member Management Menu -->
            <li class="nav-item has-treeview">
                <a href="#" class="nav-link {{ ($activeMenu == '') ? 'active' : '' }}" onclick="toggleSubmenu('KelolaAnggotaKegiatanSubmenu')">
                    <i class="nav-icon fas fa-users"></i>
                    <p>Anggota Kegiatan<i class="right fas fa-angle-left"></i></p>
                </a>
                <ul class="nav nav-treeview" id="KelolaAnggotaKegiatanSubmenu" style="display: none;">
                    <li class="nav-item">
                        <a href="{{ url('/anggotakegiatan') }}" class="nav-link {{ ($activeMenu == 'anggota') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-user-plus"></i>
                            <p>Kelola Anggota Kegiatan</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('/jabatan') }}" class="nav-link {{ ($activeMenu == 'jabatan') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-briefcase"></i>
                            <p>Jenis Jabatan Anggota</p>
                        </a>
                    </li>
                </ul>
            </li> --}}

            <!-- Statistik Menu -->
            <li class="nav-item">
                <a href="{{ url('/statistik') }}" class="nav-link {{ ($activeMenu == 'statistik') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-chart-bar"></i>
                    <p>Statistik</p>
                </a>
            </li>

            <!-- Logout Menu -->
            <li class="nav-item logout-item mt-auto">
                <a href="{{ url('/logout') }}" class="nav-link logout-link {{ ($activeMenu == 'logout') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-sign-out-alt"></i>
                    <p>Logout</p>
                </a>
            </li>
        </ul>
    </nav>
</div>

<script>
    function toggleSubmenu(submenuId) {
        const submenu = document.getElementById(submenuId);
        submenu.style.display = submenu.style.display === 'none' ? 'block' : 'none';
    }
</script>
