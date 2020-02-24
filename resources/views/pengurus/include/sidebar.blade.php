  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->

      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MENU UTAMA</li>

        <li class=" @if(url('/pengurus/tentang') == request()->url() ) active @else '' @endif ">
          <a href="{{ URL::to('/pengurus/tentang') }}">
            <i class="fa fa-edit text-yellow"></i> <span>Tentang</span>
          </a>
        </li>
        <li class=" @if(url('/pengurus/berita') == request()->url() ) active @else '' @endif ">
          <a href="{{ URL::to('/pengurus/berita') }}">
            <i class="fa fa-newspaper-o text-blue"></i> <span>Informasi</span>
          </a>
        </li>
        <li class=" @if(url('/pengurus/warga') == request()->url() or url('/pengurus/keluarga') == request()->url() ) active @else '' @endif treeview">
          <a href="#">
            <i class="fa fa-folder text-green"></i> <span>Penduduk</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ URL::to('/pengurus/keluarga') }}"><i class="fa fa-list-alt text-yellow"></i> Keluarga</a></li>
            <li><a href="{{ URL::to('/pengurus/warga') }}"><i class="fa fa-list-alt text-lime"></i> Warga</a></li>
          </ul>
        </li>
        <li class=" @if(url('/pengurus/galeri') == request()->url() ) active @else '' @endif ">
          <a href="{{ URL::to('/pengurus/galeri') }}">
            <i class="fa fa-photo text-red"></i> <span>Galeri</span>
          </a>
        </li>
        <li class=" @if(url('/pengurus/android') == request()->url() ) active @else '' @endif treeview">
          <a href="#">
            <i class="fa fa-users text-orange"></i>
            <span>Pengguna</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ URL::to('pengurus/android') }}"><i class="fa fa-user text-blue"></i> Android</a></li>
            <li><a href="{{ URL::to('pengurus/apk') }}"><i class="fa fa-mobile-phone text-red"></i> APK</a></li>
          </ul>
        </li>
	  </ul>

    </section>
    <!-- /.sidebar -->
  </aside>