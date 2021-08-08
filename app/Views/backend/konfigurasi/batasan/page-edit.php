<div class="card">
    <div class="card-header bg-transparent">
        Form Konfigurasi Batasan Paramater
    </div>
    <div class="card-body">
        <form method="POST" action="<?=backend_url();?>/batasan/update" data-toggle="validator" role="form">
            <?= csrf_field() ?>
            <input class="form-control form-control-sm" name="id" type="hidden" required value="<?=$row[0]['id'];?>">
            <div class="form-row">
                <div class="col form-group">
                    <label>Kode ID</label>
                    <input class="form-control form-control-sm" 
                            name="kode" 
                            type="text" 
                            pattern="^[A-z0-9/@]{1,}$"
                            data-error="Maaf, entrian hanya berupa huruf dan angka | Wajib diisikan"
                            required 
                            value="<?=$row[0]['kode'];?>">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="form-row">
                <div class="col form-group">
                    <label>Nama Parameter</label>
                    <input class="form-control form-control-sm" 
                            name="nama" 
                            type="text" 
                            pattern="^[A-z0-9\s/@]{1,}$"
                            data-error="Maaf, entrian hanya berupa huruf, spasi dan angka | Wajib diisikan"
                            required 
                            value="<?=$row[0]['nama'];?>">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="form-row">
                <div class="col form-group">
                    <label>Nilai</label>
                    <input class="form-control form-control-sm" 
                            name="nilai" 
                            type="number" 
                            required 
                            pattern="^[0-9/@]{1,}$"
                            data-error="Maaf, entrian hanya berupa angka saja | Wajib diisikan"
                            value="<?=$row[0]['nilai'];?>">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
            <button type="button" class="btn btn-secondary btn-sm" onclick="window.history.back();">Kembali</button>
        </form>
    </div>
</div>