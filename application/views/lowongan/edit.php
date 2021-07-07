<h1>Edit Data Lowongan Pekerjaan</h1>
<br>
<?php echo form_open('lowongan/save'); ?>
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama Perusahaan</label> 
    <div class="col-8">
      <input id="nama" name="nama" type="text" class="form-control" value="<?=$objlowongan->perusahaan?>">
    </div>
  </div>
  <br>
  <div class="form-group row">
    <label for="deskripsi" class="col-4 col-form-label">Deskripsi</label> 
    <div class="col-8">
      <textarea id="deskripsi" name="deskripsi" cols="40" rows="5" class="form-control" value="<?=$objlowongan->deskripsi?>"></textarea>
    </div>
  </div>
  <br>
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Update</button>
    </div>
  </div>
  <input type="hidden" name="idedit" value="<?=$objlowongan->id?>"/>

<?php echo form_close(); ?>