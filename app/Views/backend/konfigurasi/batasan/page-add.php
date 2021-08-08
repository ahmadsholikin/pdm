<div class="card">
    <div class="card-header bg-transparent">
        Form Konfigurasi Batasan Paramater
    </div>
    <div class="card-body">
        <form method="POST" action="<?=backend_url();?>/batasan/insert" data-toggle="validator" role="form">
            <?= csrf_field() ?>
            <div class="form-row">
                <div class="col form-group">
                    <label>Kode ID</label>
                    <input class="form-control form-control-sm" 
                            name="kode" 
                            pattern="^[A-z0-9/@]{1,}$"
                            data-error="Maaf, entrian hanya berupa huruf dan angka | Wajib diisikan"
                            type="text" 
                            required>
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="form-row">
                <div class="col form-group">
                    <label>Nama Parameter</label>
                    <input class="form-control form-control-sm" 
                        name="nama" 
                        pattern="^[A-z0-9\s/@]{1,}$"
                        data-error="Maaf, entrian hanya berupa huruf, spasi dan angka | Wajib diisikan"
                        type="text" 
                        required>
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="form-row">
                <div class="col form-group">
                    <label>Nilai</label>
                    <input class="form-control form-control-sm" 
                            name="nilai" 
                            type="number" 
                            pattern="^[0-9/@]{1,}$"
                            data-error="Maaf, entrian hanya berupa angka saja | Wajib diisikan"
                            required>
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
            <button type="button" class="btn btn-secondary btn-sm" onclick="window.history.back();">Kembali</button>
        </form>
    </div>
</div>