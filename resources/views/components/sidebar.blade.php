<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">Stisla</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">St</a>
        </div>
        <ul class="sidebar-menu">
            <li><a class="nav-link @if (Request::is('admin')) active @endif" href="{{ url('admin/') }}"><i
                        class="fas fa-columns"></i> <span>Dashboard</span></a></li>
            <li><a class="nav-link @if (Request::is('admin/data-pasien')) active @endif"
                    href="{{ url('/admin/data-pasien') }}"><i class="fas fa-user"></i> <span>Data Pasien</span></a>
            </li>
            <li><a class="nav-link @if (Request::is('admin/soap')) active @endif" href="{{ url('/admin/soap') }}"><i
                        class="fas fa-digital-tachograph"></i></i> <span>SOAP</span></a>
            </li>
            <li><a class="nav-link @if (Request::is('admin/medicines')) active @endif"
                    href="{{ url('/admin/medicines') }}"><i class="fas fa-capsules"></i></i> <span>Data Obat</span></a>
            </li>
            <li><a class="nav-link @if (Request::is('admin/lab')) active @endif" href="{{ url('/admin/lab') }}"><i
                        class="fas fa-flask"></i></i> <span>Diagnosis Lab</span></a>
            </li>
            <li><a class="nav-link @if (Request::is('admin/rad')) active @endif" href="{{ url('/admin/rad') }}"><i
                        class="fas fa-x-ray"></i></i> <span>Diagnosis Rad</span></a>
            </li>
            <li><a class="nav-link @if (Request::is('admin/kontrol')) active @endif"
                    href="{{ url('/admin/kontrol') }}"><i class="fas fa-eye"></i></i> <span>Kontrol</span></a>
            </li>
            <li><a class="nav-link @if (Request::is('admin/invoice')) active @endif"
                    href="{{ url('/admin/invoice') }}"><i class="fas fa-file-invoice-dollar"></i></i>
                    <span>Invoice</span></a>
            </li>
        </ul>
        <div class="hide-sidebar-mini" style="position:fixed; bottom:3vh; width:250px;">
            <hr style="border-radius: 5px; border: 2px solid #66CDAA; margin-left:5%; margin-right:5%">
            <ul class="sidebar-menu">
                <li><a class="nav-link" href="{{ url('logout') }}"><i class="fas fa-power-off"></i> <span>Log
                            Out</span></a>
            </ul>
        </div>
    </aside>
</div>
