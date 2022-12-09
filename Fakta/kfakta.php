<?php include 'header.php'; ?>

        <h1 class="mt-3 mb-3">Fakta Menarik</h1>
        <a href="formKFakta.php" class="btn btn-sm btn-success mb-3">Tambah</a>
        <table class="table">
            <thead class="table-info">
                <tr>
                    <th>No.</th>
                    <th>ID Kategori</th>
                    <th>Nama Kategori</th>
                    <th>Operasi</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    $sql = "SELECT * FROM kfakta";
                    $query = mysqli_query($conn, $sql);
                    $i = 1;

                    while ($row = mysqli_fetch_object($query)) {
                ?> 
                <tr>
                    <td><?php echo $i++, '.';?></td>
                    <td><?php echo $row->id_kategori; ?></td>
                    <td><?php echo $row->nama_kategori; ?></td>
                    <td>
                        <a class="btn btn-sm btn-warning" href="formKFakta.php?id_kategori=<?php echo $row->id_kategori; ?>">Ubah</a>
                        <a class="btn btn-sm btn-danger" href="deleteKFakta.php?id_kategori=<?php echo $row->id_kategori; ?>" role="button" onclick="return confirm('Apakah Anda yakin akan menghapus data?');">
                            Hapus
                        </a>
                    </td>
                </tr>
                <?php
                    } if (mysqli_num_rows($query) == 0) {
                        echo '<tr><td colspan="6" class="text-center">Tidak ada data.</td></tr>';
                    }
                ?>
            </tbody>
        </table>

<?php include 'footer.php'; ?>