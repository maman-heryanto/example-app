<aside id="leftsidebar" class="sidebar">
    <!-- User Info -->
    <div class="user-info">
        <div class="image">
            <img src="vendor/adminbsb/images/user.png" width="48" height="48" alt="User" />
        </div>
        <div class="info-container">
            {{-- <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">John Doe</div> --}}
            <div class="email">john.doe@example.com</div>
            <div class="btn-group user-helper-dropdown">
                <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                <ul class="dropdown-menu pull-right">
                    <li><a href="javascript:void(0);"><i class="material-icons">person</i>Profile</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="javascript:void(0);"><i class="material-icons">input</i>Sign Out</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- #User Info -->
    <!-- Menu -->
    <div class="menu">
        <ul class="list">
            <li class="header">MAIN NAVIGATION</li>
            <li>
                <a href="/dashboard">
                    <i class="material-icons">home</i>
                    <span>Home</span>
                </a>
            </li>
            <li>
                <a href="javascript:void(0);" class="menu-toggle">
                    <i class="material-icons">widgets</i>
                    <span>Data Master</span>
                </a>
                <ul class="ml-menu">
                    <li>
                        <a href="/laporankegiatan">
                            <i class="material-icons">work</i>
                            <span>Laporan-Kegiatan</span>
                        </a>
                    </li>
                    <li>
                        <a href="/proyek">
                            <i class="material-icons">gavel</i>
                            <span>Proyek</span>
                        </a>
                    </li>
                </ul>
            </li> 

            {{-- <li>
                <a href="/laporan-kegiatan">
                    <i class="material-icons">widgets</i>
                    <span>Laporan-Kegiatan</span>
                </a>
            </li>
            <li>
                <a href="/karyawan">
                    <i class="material-icons">assignment_ind</i>
                    <span>Proyek</span>
                </a>
            </li> --}}
            <li>
                <a href="/karyawan">
                    <i class="material-icons">assignment_ind</i>
                    <span>Karyawan</span>
                </a>
            </li>
        
            {{-- after this delete --}}
        </ul>
    </div>
    <!-- #Menu -->
    <!-- Footer -->
    <div class="legal">
        <div class="copyright">
            &copy; 2016 - 2017 <a href="javascript:void(0);">GILANG SYSTEM MANAGEMENT</a>.
        </div>
        <div class="version">
            <b>Version: </b> 1.0.5
        </div>
    </div>
    <!-- #Footer -->
</aside>