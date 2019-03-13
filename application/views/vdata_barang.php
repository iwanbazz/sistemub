
<h1><center><b>KELOLA DATA BARANG</b></center></h1>
<h4>
    <div class="pull-right">
        <div class="row margin-bottom-30">
            <div class="col-md-12">
              <ul class="nav nav-pills">
                <li class="active"><a href="<?=base_url();?>barang/tambah">Tambah Barang</a></li>                
              </ul>
            </div>
        </div>  
    </div>
</h4>
<div style="margin-bottom: 20xpx;">
  <form class="form-inline" action="" method="post">
    <div class="form-group">
        <input type="text" name="pencarian" class="form-control" placeholder="Pencarian">
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary"><span class="active"><a href="<?=base_url();?>barang/cari">Search</a></span></button>
    </div>
  </form>
</div>
<div class="table-responsive">
  <table class="table table-striped table-bordered table-hover">
    <thead>
      <tr>
          <th>No. </th>
          <th>Kode Barang</th>
          <th>Nama Barang</th>
          <th>Jumlah Stok</th>
          <th>Satuan</th>
          <th>Merk Barang</th>
          <th>Ubah</th>
          <th>Hapus</th>
        </tr>
    </thead>
  <tbody
  <?php 
        if(count($barang->result()) == 0) {
          echo "<tr><td colspan=7>Data Barang Masih Kosong</td></tr>";
        } else {
          $i=1;
          foreach ($barang->result() as $hasil) {
        ?>
                    <tr>
                      <td><?=$i;?></td>
                      <td><?=$hasil->kode_barang;?></td>
                      <td><?=$hasil->nama_barang;?></td>
                      <td><?=$hasil->jumlah_stok;?></td>
                      <td><?=$hasil->satuan;?></td>
                      <td><?=$hasil->merk_barang;?></td>
                      <td><a href="<?=base_url();?>barang/edit/<?=$hasil->kode_barang;?>" class="btn btn-warning btn-xs">Edit</a></td>
                      <td><a href="<?=base_url();?>barang/hapus/<?=$hasil->kode_barang;?>" onclik="return confirm('Yakin Akan Menghapus Data?')"class="btn btn-danger btn-xs">Delete</a></td>
                    </tr>
        <?php 
        $i++;
        }
      }
        ?>            
                                       
                  </tbody>
                </table>
</div>
<h5><b>PRODUK : </b></h5>
<div class="col-md-1 col-sm-1 col-xs-1">
                    <div class="dashboard-div-wrapper bk-clr-one">
                        <img src="<?=base_url();?>/template2/assets/img/ptm.jpg" id="ptmimg" alt=" ptm" />
                        <div class="progress progress-striped active">
                           
</div>
                         <h5></h5>
                    </div>
                </div>
                 <div class="col-md-1 col-sm-1 col-xs-1">
                    <div class="dashboard-div-wrapper bk-clr-two">
                        <img src="<?=base_url();?>/template2/assets/img/cst.png" id="cstimg" alt="cst" />
                        <div class="progress progress-striped active">
                           
</div>
                         <h5></h5>
                    </div>
                </div>
                 <div class="col-md-1 col-sm-1 col-xs-1">
                    <div class="dashboard-div-wrapper bk-clr-three">
                        <img src="<?=base_url();?>/template2/assets/img/sh.png" id="shimg" alt="sh" />
                        <div class="progress progress-striped active">
                             
</div>
                         <h5></h5>
                    </div>
                </div>
                <div class="col-md-1 col-sm-1 col-xs-1">
                    <div class="dashboard-div-wrapper bk-clr-four">
                        <img src="<?=base_url();?>/template2/assets/img/un.jpg" id="unimg" alt=" un" />
                        <div class="progress progress-striped active">
                             
</div>
                         <h5></h5>
                    </div>
                </div>
                <div class="col-md-1 col-sm-1 col-xs-1">
                    <div class="dashboard-div-wrapper bk-clr-three">
                        <img src="<?=base_url();?>/template2/assets/img/ty.jpg" id="tyimg" alt=" ty" />
                        <div class="progress progress-striped active">
                             
</div>
                         <h5></h5>
                    </div>
                </div>
                <div class="col-md-1 col-sm-1 col-xs-1">
                    <div class="dashboard-div-wrapper bk-clr-one">
                        <img src="<?=base_url();?>/template2/assets/img/tt.jpg" id="ttimg" alt=" tt" />
                        <div class="progress progress-striped active">
                             
</div>
                         <h5></h5>
                    </div>
                </div>
                <div class="col-md-1 col-sm-1 col-xs-1">
                    <div class="dashboard-div-wrapper bk-clr-two">
                        <img src="<?=base_url();?>/template2/assets/img/tp.jpg" id="tpimg" alt="tp" />
                        <div class="progress progress-striped active">
                             
</div>
                         <h5></h5>
                    </div>
                    </div>
                 <div class="col-md-1 col-sm-1 col-xs-1">
                    <div class="dashboard-div-wrapper bk-clr-three">
                        <img src="<?=base_url();?>/template2/assets/img/o.jpg" id="oimg" alt="o" />
                        <div class="progress progress-striped active">
                             
</div>
                         <h5></h5>
                    </div>
</div>
</div>     