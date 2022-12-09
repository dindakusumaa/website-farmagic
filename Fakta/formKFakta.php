<?php 
    include 'header.php';

    $edit = false;

    if (! empty($_GET['id_kategori'])) {
        $sql = 'SELECT * FROM kfakta WHERE id_kategori="'.$_GET['id_kategori'].'"';

        $query = mysqli_query($conn, $sql);

        if (mysqli_num_rows($query)) {
            $edit = true;
            $row = mysqli_fetch_object($query);
        }
    }
?>

<h1 class="mt-3 mb-3">Form Program Studi</h1>
<form action="saveKFakta.php" method="POST">
    <div class="mb-3">
        <label class="form-label">ID Kategori</label>
        <input type="text" class="form-control" name="id_kategori" placeholder="ID Kategori" value="<?php if ($edit) echo $row->id_kategori; ?>" required>
        <input type="hidden" name="id" value="<?php if ($edit) echo $row->id_kategori; ?>">
    </div>
    <div class="mb-3">
        <label class="form-label">Nama Kategori</label>
        <input type="text" class="form-control" name="nama_kategori" placeholder="Nama Kategori" value="<?php if ($edit) echo $row->nama_kategori; ?>" required>
    </div>
    <div class="mb-3">
        <input type="submit" value="Simpan" class="btn btn-sm btn-success">
    </div>
</form>

<?php include 'footer.php'; ?>