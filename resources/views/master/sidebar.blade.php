<aside class="main-sidebar">
    <section class="sidebar">
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active treeview menu-open">
            <a href="#">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <li class="active treeview menu-open">
                    <a href="#">
                        <i class="fa fa-dashboard"></i> <span>Admin</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="{{ route('datauser') }}">Index</a></li>                       
                        <li><a href="{{ route('databarang') }}">Data Barang</a></li>                       
                        <li><a href="{{ route('datakendaraan') }}">Data Kendaraan</a></li>                       
                        <li><a href="{{ route('datalokasi') }}">Data Lokasi</a></li>                       
                        <li><a href="{{ route('createuser')}}">Data User</a></li>                                            
                    </ul>
                </li>
                <li class="active treeview menu-open">
                    <a href="#">
                        <i class="fa fa-dashboard"></i> <span>Pemesanan</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li class="treeview menu-open">
                            <a href="#">
                                <i class="fa fa-dashboard"></i><span>Data Pemesanan</span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
      </ul>
    </section>
</aside>