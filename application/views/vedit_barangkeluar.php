
          <h1>Edit Barang Keluar</h1>

          <div class="row">
            <div class="col-md-12">
              <form role="form" id="templatemo-preferences-form" action="<?=base_url();?>barang_keluar/edit/<?=$id_keluar;?>" method="post">

  <?php 
  foreach ($barang_keluar->result() as $hasil) {
  ?> 
                <div class="row">
                  <div class="col-md-6 margin-bottom-15">
                    <label for="id_keluar" class="control-label">Kode Keluar</label>
                    <input type="text" class="form-control" id="id_keluar" name="id_keluar" value="<?=$hasil->id_keluar;?>">
                  </div>
                </div>
                <div class="row">  
                  <div class="col-md-6 margin-bottom-15">
                    <label for="kode_barang" class="control-label">Kode Barang</label>
                    <input type="text" class="form-control" id="kode_barang" name="kode_barang" value="<?=$hasil->kode_barang;?>">
                  </div>
                  </div>
                <div class="row">  
                  <div class="col-md-6 margin-bottom-15">
                    <label for="nama_barang" class="control-label">Nama Barang</label>
                    <input type="text" class="form-control" id="nama_barang" name="nama_barang" value="<?=$hasil->nama_barang;?>">
                  </div>
                  </div>
                <div class="row">  
                  <div class="col-md-6 margin-bottom-15">
                    <label for="jumlah_barang" class="control-label">Jumlah Barang</label>
                    <input type="text" class="form-control" id="jumlah_barang" name="jumlah_barang" value="<?=$hasil->jumlah_barang;?>">
                  </div>
                  </div>
                <div class="row">  
                <div class="col-md-6 margin-bottom-15">
                  <label for="satuan">Satuan</label>
                  <select class="form-control margin-bottom-15" id="satuan" name="satuan">
                    <option><?=$hasil->satuan;?></option>
                    <option>------------------</option>
                    <option>Dus</option>
                    <option>Drum</option>
                    <option>Pail</option>
                   
                  </select>                   
                </div>
                  </div>
                <div class="row">  
                  <div class="col-md-6 margin-bottom-15">
                    <label for="nama_konsumen" class="control-label">Nama Konsumen</label>
                    <input type="text" class="form-control" id="nama_konsumen" name="nama_konsumen" value="<?=$hasil->nama_konsumen;?>">
                  </div>
                  </div>
                <div class="row">  
                  <div class="col-md-6 margin-bottom-15">
                    <label for="tanggal" class="control-label">Tanggal</label>
                    <input type="text" class="form-control" id="tanggal" name="tanggal" value="<?=$hasil->tanggal;?>">
                  </div>
              </div>  
              <div class="row templatemo-form-buttons">
                <div class="col-md-12">
                  <input type="submit" class="btn btn-primary" name="submit" value="Simpan">
                  <input type="reset" class="btn btn-default" name="reset" value="Reset">   
                </div>
              </div>
    <?php 
    }
    ?>          
            </form>
          </div>
        </div>