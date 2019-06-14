<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Buku
        </h1>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12 col-xs-12 col-md-12">
                <p align="right">
                    <a href="#" data-toggle="modal" data-target="#modalTambah" class="btn btn-info"><i class="	glyphicon glyphicon-plus"></i> Tambah</a>
                </p>
                <div class="table-responsive">
                    <table class="table table-striped" id="dataTable">
                        <thead>
                            <tr>
                                <th class="tengah">Kode Buku</th>
                                <th class="tengah">Judul</th>
                                <th class="tengah">Kategori</th>
                                <th class="tengah">Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php foreach ($buku as $getData) : ?>
                                <tr>
                                    <td><?= $getData->kode_buku; ?></td>
                                    <td><?= $getData->judul; ?></td>
                                    <td><?= $getData->kode_kategori; ?></td>
                                    <td>
                                        <a href="#" data-toggle="modal" data-target="#modalUbah" class="btn btn-info"><i class="glyphicon glyphicon-pencil"></i> </a>
                                        <a href="#" data-toggle="modal" data-target="#modalHapus" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i> </a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->