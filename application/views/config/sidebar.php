<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= base_url('assets/img/no-pict.png') ?>" class="img-circle" alt="ADMIN">
            </div>
            <div class="pull-left info">
                <p><small>Admin</small></p>
                <a href="#"  class="color-gold"><i class="glyphicon glyphicon-record text-info"></i> Online</a>
            </div>
        </div>
        <ul class="sidebar-menu">

            <li class="treeview">
                <a href="<?= base_url('home') ?>">
                    <i class="glyphicon glyphicon-home clr-icon"></i> <span>Home</span>
                </a>
            </li>

            <li class="treeview">
                <a href="<?= base_url('buku') ?>">
                    <i class="glyphicon glyphicon-book clr-icon"></i> <span>Buku</span>
                </a>
            </li> 

            <li class="treeview">
                <a href="<?= base_url('peminjaman') ?>">
                    <i class="glyphicon glyphicon-list-alt clr-icon"></i> <span>Peminjaman</span>
                </a>
            </li>
         
            <li class="treeview">
                <a href="<?= base_url('pengembalian') ?>">
                    <i class="glyphicon glyphicon-list-alt clr-icon"></i> <span>Pengembalian</span>
                </a>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="glyphicon glyphicon-cog clr-icon"></i> <span>Settings</span>
                    <span class="pull-right-container">
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <a href="#">
                            <i class="glyphicon glyphicon-list-alt clr-icon"></i> <span>Daftar Keperluan</span>
                        </a>
                    </li>
                    
                    <li>
                        <a href="#">
                            <i class="glyphicon glyphicon-cog clr-icon"></i> <span>Manage Website</span>
                        </a>
                    </li>
                </ul>
            </li>

        </ul>
    </section>
    <!-- /.sidebar -->
</aside>