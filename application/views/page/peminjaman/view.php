<div class="content-wrapper">
  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12 col-xs-12 col-md-12">
        <div class="col-md-10 col-lg-10 col-xs-12 col-md-offset-1">
          <div class="panel panel-default">
            <div class="panel-body">
              <h2>Peminjaman Buku</h2>
              <h4 style="color : #09f;">12 Juni 2019 - 23:54:05 WIB</h4>
              
              <hr>
              <form action="process/actions" method="GET" class="pad" name="fmember">
                <div class="form-group">
                  <p align="right">Nomor Peminjaman : <b>-00001</b> </p>
                  <input type="hidden" name="nomor_peminjaman" class="form-control" value="-00001" readonly>
                </div>
                <div class="form-group">
                  <label for="">Nim/Nama Anggota</label>
                  <input type="text" class="form-control" required="" name="keanggotaan" id="keanggotaan" placeholder="Member - Type 2 char for suggestions">
                </div>
                <div class="form-group">
                  <div class="col-md-4">
                    <input type="text" name="nim" class="form-control" id="desc" placeholder="NIM" readonly>
                    <input type="hidden" name="namaanggota" class="form-control" id="namaanggota" readonly>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-md-8">
                    <input type="email" name="email" class="form-control" id="email" placeholder="Email" readonly>
                  </div>
                </div>
                <div class="form-group">
                 <div class="col-md-4">
                   <input type="text" name="phone" class="form-control" id="phone" placeholder="Phone" readonly>
                 </div>
                </div>
                <div class="form-group">
                  <div class="col-md-8">
                    <input type="text" name="alamat" class="form-control" id="alamat" placeholder="Alamat" readonly>
                    <input type="hidden" name="nim_anggota" class="form-control" id="nim_anggota" placeholder="Phone" readonly>   
                    <input type="hidden" name="part" class="form-control" id="" value="insert" readonly>
                  </div>
                </div>
                <hr>
                <div id="buku1">
                  <div class="form-group">
                    <label for="">Pinjam Buku - 1</label>
                    <input type="text" class="form-control" required=""  name="buku1" placeholder="Books- Type 2 char for suggestions" id="buku">
                    <input type="text" class="form-control" required="" placeholder="ISBN" id="ISBN1" readonly>
                    <input type="hidden" class="form-control" required="" id="id_buku1" name="id_buku1">
                  </div>
                </div>

                <div class="form-group">
                  <label for="">Pinjam Buku - 2</label>
                  <input type="text" class="form-control" name="buku2" placeholder="Books- Type 2 char for suggestions" id="buku2">
                  <input type="text" class="form-control" required="" placeholder="ISBN" id="ISBN2" readonly>
                  <input type="hidden" class="form-control" required="" id="id_buku2" name="id_buku2">
                </div>
                
                <p style="font-size: 10pt;">
                  <b>Catatan :</b><br>
                  Jika anggota hanya meminjam satu buku, kolom dibuku kedua dikosongkan saja.
                </p>
                <hr>
                <div class="form-group">
                  <a href="#" data-toggle="modal" data-target="#confirm" class="btn btn-success"><i class="glyphicon glyphicon-ok"></i> Submit</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  <!-- /.row -->
  </section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->