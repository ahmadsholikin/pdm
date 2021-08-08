<main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <h2>Berita Publikasi</h2>
                <ol>
                    <li><a href="<?=base_url();?>">Helpdesk CASN 2021</a></li>
                    <li>Informasi Berita Publikasi Pengumuman</li>
                </ol>
            </div>
        </div>
    </section><!-- End Breadcrumbs -->
    <section class="inner-page">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-8">
                <h4><?=$berita['judul'];?></h4>
                <br>
                <?=$berita['isi'];?>
                </div>
            </div>
        </div>
    </section>

</main><!-- End #main -->