<main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <h2>Alokasi Formasi</h2>
                <ol>
                    <li><a href="<?=base_url();?>">Helpdesk CASN 2021</a></li>
                    <li>Informasi Alokasi Formasi</li>
                </ol>
            </div>
        </div>
    </section><!-- End Breadcrumbs -->
    <section class="inner-page">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h4><?=$judul;?></h4>
                    <br>
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover table-striped" style="font-size: 0.8rem;">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Jabatan</th>
                                    <th>Kualifikasi Pendidikan</th>
                                    <th>Jumlah</th>
                                    <th>Penempatan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no=1; foreach($formasi as $row): ?>
                                <tr>
                                    <td><?=$no++;?></td>
                                    <td><?=$row['jabatan'];?></td>
                                    <td><?=$row['pendidikan'];?></td>
                                    <td><?=$row['jumlah'];?></td>
                                    <td><?=$row['ket'];?></td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main><!-- End #main -->