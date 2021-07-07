<script>
function hapusLowongan(pesan) {
 if (confirm(pesan)) {
 return true;
 }
 else {
 return false;
 }
}
</script>
<h1>Daftar Lowongan Pekerjaan</h1>
<table class="table">
    <thead>
        <tr>
            <th>No</th><th>Perusahaan</th><th>Deskripsi</th><th style="text-align:right">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $nomor=1;
        foreach($list_lowongan->result() as $lowongan){
        ?>
        <tr>
            <td><?=$nomor?></td>
            <td><?=$lowongan->perusahaan?></td>
            <td><?=$lowongan->deskripsi?></td>
            <td style="text-align:right">
            <a href="<?=base_url()?>lowongan/edit/<?=$lowongan->id?>" class="btn btn-warning">Edit</a> | 
            <a href="<?=base_url()?>lowongan/delete/<?=$lowongan->id?>" class="btn btn-danger"
            <?php echo 'onclick="return hapuLowongan(\'Data Lowongan '.$lowongan->perusahaan.' Yakin mau dihapus ?? \')"'?>
            >Delete</a></td>
        </tr>
        <?php
        $nomor++;    
        }
        ?>
    </tbody>
</table>
<a href="<?=base_url()?>lowongan/form" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Tambah Lowongan Pekerjaan</a>
