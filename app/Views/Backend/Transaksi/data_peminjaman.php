<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
            <li class="active">Transaksi Peminjaman</li>
        </ol>
    </div><!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h3>Data Transaksi Peminjaman
                        <!-- tombol lain bisa ditambahkan di sini -->
                    </h3>
                    <hr />
                    <table
                        data-toggle="table"
                        data-show-refresh="true"
                        data-show-toggle="true"
                        data-show-columns="true"
                        data-search="true"
                        data-select-item-name="toolbar1"
                        data-pagination="true"
                        data-sort-name="name"
                        data-sort-order="desc"
                        class="table table-bordered">
                        <thead>
                            <tr>
                                <th data-sortable="true">No Peminjaman</th>
                                <th data-sortable="true">Nama Anggota</th>
                                <th data-sortable="true">Tanggal Peminjaman</th>
                                <th data-sortable="true">Total Buku Dipinjam</th>
                                <th data-sortable="true">Status Transaksi</th>
                                <th data-sortable="true">Status Ambil Buku</th>
                                <th data-sortable="true">Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($dataTransaksi as $row): ?>
                                <tr>
                                    <td><?= $row['no_peminjaman']; ?></td>
                                    <td><?= $row['nama_anggota']; ?></td>
                                    <td><?= $row['tgl_pinjam']; ?></td>
                                    <td><?= $row['total_pinjam']; ?></td>
                                    <td>
                                        <?php if ($row['status_transaksi'] === "Berjalan") : ?>
                                            <span class="label label-warning"><?= $row['status_transaksi']; ?></span>
                                        <?php else : ?>
                                            <span class="label label-success"><?= $row['status_transaksi']; ?></span>
                                        <?php endif; ?>
                                    </td>
                                    <td><?= $row['status_ambil_buku']; ?></td>
                                    <td>
                                        <a href="<?= base_url('admin/detail-peminjaman/' . sha1($row['no_peminjaman'])) ?>">
                                            <button type="button" class="btn btn-sm btn-primary">
                                                <i class="glyphicon glyphicon-search"></i> Detail
                                            </button>
                                        </a>

                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div><!-- /.panel-body -->
            </div><!-- /.panel -->
        </div>
    </div><!-- /.row -->
</div><!-- /.main -->