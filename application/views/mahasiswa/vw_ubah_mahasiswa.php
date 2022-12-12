<!-- Begin Page Content -->
<div class="container-fluid">

    <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>

    <div class="row justify-content-center">
        <div class="col-md-8 ">
            <div class="card">
                <div class="card-header justify-content-center">
                Form Edit Data Mahasiswa
                </div>
                    <div class="card-body">
                        <form action="<?php base_url(); ?>update" method="POST">

                        <input type="hidden" value="<?php echo $mahasiswa['id']; ?>">
                        

                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" value="<?php echo $mahasiswa['nama']; ?>" name="nama" class="form-control" id="nama">
                            </div>
                                <div class="form-group">
                                <label for="nim">NIM</label>
                                <input type="text" value="<?php echo $mahasiswa['nim']; ?>" name="nim" class="form-control" id="nim" placeholder="NIM">
                            </div>

                            <div class="form-group">
                                <label for="jenis_kelamin">Jenis Kelamin</label>
                                <select name="jenis_kelamin" value="" id="jenis_kelamin" class="form-control">
                                    <option value=""><?php echo $mahasiswa['jenis_kelamin']; ?></option>
                                    <option value="Laki-laki">Laki-laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" value="<?php echo $mahasiswa['email']; ?>" name="email" class="form-control" id="email"
                                placeholder="Email">
                            </div>

                            <div class="form-group">
                                <label for="prodi">Prodi</label>
                                <select name="prodi" value="" id="prodi" class="form-control">
                                    <option value=""><?php echo $mahasiswa['prodi']; ?></option>
                                    <option value="Teknik Informatika">Teknik Informatika</option>
                                    <option value="Sistem Informasi">Sistem Informasi</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="asal_sekolah">Asal Sekolah</label>
                                <input type="text" value="<?php echo $mahasiswa['asal_sekolah']; ?>" name="asal_sekolah" class="form-control" id="asal_sekolah"
                                placeholder="Asal Sekolah">
                            </div>

                            <div class="form-group">
                                <label for="no_hp">No HP</label>
                                <input type="text" value="<?php echo $mahasiswa['no_hp']; ?>" name="no_hp" class="form-control" id="asal_sekolah"
                                placeholder="No HP">
                            </div>

                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <input type="text" value="<?php echo $mahasiswa['alamat']; ?>" name="alamat" class="form-control" id="alamat"
                                placeholder="Alamat">
                            </div>
                            
                            <a href="<?= base_url('Mahasiswa/') ?>" class="btn btn-danger">Tutup</a>
                            <button type="submit" name="update" class="btn btn-primary float-right">Edit
                            Mahasiswa</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>