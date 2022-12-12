

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800"><?= $judul; ?></h1>

    <div class="col-md-12">
        <table class="table">
            <thead>
                <tr>
                    <td>No</td>
                    <td>Nama Prodi</td>
                    <td>Ruangan</td>
                    <td>Jurusan</td>
                    <td>Akreditasi</td>
                    <td>Nama Kapridi</td>
                    <td>Tahun Lulusan</td>
                    <td>Out Put Lulusan</td>
                    <td>Aksi</td>
            </tr>
            </thead>
            <tbody>
            <?php $i = 1; ?>
                <?php foreach ($prodi as $us) : ?>
                    
                <tr>
                    <td><?= $i; ?></td>                   
                    <td><?= $us['nama']; ?></td>
                    <td><?= $us['ruangan']; ?></td>
                    <td><?= $us['jurusan']; ?></td>
                    <td><?= $us['akreditasi']; ?></td>
                    <td><?= $us['nama_kaprodi']; ?></td>
                    <td><?= $us['tahun_lulusan']; ?></td>
                    <td><?= $us['output_lulusan']; ?></td>
                    <td>
                        <a href="<?= base_url('Prodi/hapus/') . $us['id']; ?>" class="badge badge-danger">Hapus</a>
                        <a href="<?= base_url('Prodi/edit/') . $us['id']; ?>" class="badge badge-warning">Edit</a>
                        <a href="<?= base_url('Prodi/detail/') . $us['id']; ?>" class="badge badge-info">Detail</a>
                    </td>
                </tr>
                <?php $i++; ?>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>



                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

           