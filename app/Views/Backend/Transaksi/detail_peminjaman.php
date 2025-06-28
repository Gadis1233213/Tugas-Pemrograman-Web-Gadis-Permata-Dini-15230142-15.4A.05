<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="<?= base_url('admin') ?>"><span class="glyphicon glyphicon-home"></span></a></li>
            <li><a href="<?= base_url('admin/transaksi-peminjaman') ?>">Transaksi Peminjaman</a></li>
            <li class="active">Detail Peminjaman</li>
        </ol>
    </div><!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h3>Detail Transaksi Peminjaman</h3>
                    <hr />

                    <div class="row">
                        <div class="col-md-6">
                            <table class="table table-striped">
                                <tr><th>No Peminjaman</th><td><?= $peminjaman['no_peminjaman']; ?></td></tr>
                                <tr><th>Nama Anggota</th><td><?= $peminjaman['nama_anggota']; ?></td></tr>
                                <tr><th>Tanggal Pinjam</th><td><?= $peminjaman['tgl_pinjam']; ?></td></tr>
                                <tr><th>Status Transaksi</th>
                                    <td>
                                        <?php if ($peminjaman['status_transaksi'] === "Berjalan") : ?>
                                            <span class="label label-warning"><?= $peminjaman['status_transaksi']; ?></span>
                                        <?php else : ?>
                                            <span class="label label-success"><?= $peminjaman['status_transaksi']; ?></span>
                                        <?php endif; ?>
                                    </td>
                                </tr>
                                <tr><th>Status Ambil Buku</th><td><?= $peminjaman['status_ambil_buku']; ?></td></tr>
                            </table>
                        </div>
                        <div class="col-md-6 text-center">
                            <img src="https://api.qrserver.com/v1/create-qr-code/?size=160x160&data=<?= $peminjaman['no_peminjaman']; ?>" alt="QR Code">
                            <p><small>Scan untuk melihat No. Peminjaman</small></p>
                        </div>
                    </div>

                    <hr />
                    <h4>Daftar Buku yang Dipinjam</h4>
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>ID Buku</th>
                                <th>Judul Buku</th>
                                <th>Status Pinjam</th>
                                <th>Perpanjangan</th>
                                <th>Tanggal Kembali</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($detail as $d) : ?>
                                <tr>
                                    <td><?= $d['id_buku']; ?></td>
                                    <td><?= $d['judul_buku']; ?></td>
                                    <td><?= $d['status_pinjam']; ?></td>
                                    <td><?= $d['perpanjangan']; ?>x</td>
                                    <td><?= $d['tgl_kembali']; ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>

                    <a href="<?= base_url('/admin/data-transaksi-peminjaman') ?>" class="btn btn-default">
                        <i class="glyphicon glyphicon-arrow-left"></i> Kembali
                    </a>
                </div>
            </div>
        </div>
    </div><!--/.row-->
</div><!--/.main-->