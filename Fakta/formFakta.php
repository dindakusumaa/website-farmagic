<?php 
    include 'header.php';

    $edit = false;

    if(! empty($_GET['id_fakta'])){
        $sql = 'SELECT * FROM fakta WHERE id_fakta = "'.$_GET['id_fakta'].'"';
        $query = mysqli_query($conn, $sql);
        if(mysqli_num_rows($query)){
            $edit = true;
            $data = mysqli_fetch_object($query);
        }
    }
?>

<h1 class="mt-3 mb-3">Input Fakta Menarik</h1>
<form action="saveFakta.php" method="POST">
    <div class="mb-3">
        <label class="form-label">ID Fakta Menarik</label>
        <input type="text" class="form-control" name="id_fakta" placeholder="ID Fakta Menarik">
    </div>
    <div class="mb-3">
        <label class="form-label">Judul</label>
        <input type="text" class="form-control" name="judul" placeholder="Judul">
    </div>
    <div class="mb-3">
        <label class="form-label">Kategori</label>
        <select class="form-control" name="id_kategori" required>

        <?php
            $sql = 'SELECT * FROM kfakta';

            $query = mysqli_query($conn, $sql);

            while ($row = mysqli_fetch_object($query)) {
        ?>

            <option value="<?php echo $row->id_kategori; ?>"<?php if ($edit && $row->id_kategori == $row->id_kategori) echo 'selected'; ?>><?php echo $row->nama_kategori; ?></option>
        
        <?php } ?>

        </select>
    </div>
    <div class="mb-3">
        <label class="form-label">Gambar</label>
        <input type="file" name="gambar" placeholder="Input Gambar">
    </div>
    <div class="mb-3">
        <label class="form-label">Isi</label>
        <input type="text" class="form-control" placeholder="Isi" name="isi" >
    </div>
    <div class="mb-3">
        <input type="submit" value="Simpan" class="btn btn-sm btn-success">
    </div>
</form>

<?php include 'footer.php'; ?>