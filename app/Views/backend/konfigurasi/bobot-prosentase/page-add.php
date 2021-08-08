<div class="card">
    <div class="card-header bg-transparent">
        Form Konfigurasi Bobot Prosentase
    </div>
    <div class="card-body">
        <form method="POST" action="<?=backend_url();?>/bobot-prosentase/insert" data-toggle="validator" role="form">
            <?= csrf_field() ?>
            <div class="form-row">
                <div class="col form-group">
                    <label>Bulan Berlaku</label>
                    <input class="form-control form-control-sm" 
                            name="bulan_berlaku" 
                            type="text" 
                            pattern="^[0-9\,/@]{1,}$"
                            data-error="Maaf, entrian hanya berupa angka dan tanda baca koma saja | Wajib diisikan"
                            required>
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="form-row">
                <div class="col form-group">
                    <label>Bobot SKP</label>
                    <input class="form-control form-control-sm" 
                            name="bobot_skp" 
                            type="number" 
                            pattern="^[0-9/@]{1,}$"
                            data-error="Maaf, entrian hanya berupa angka saja | Wajib diisikan"
                            required>
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="form-row">
                <div class="col form-group">
                    <label>Bobot Perilaku Kerja</label>
                    <input class="form-control form-control-sm" 
                            name="bobot_perilaku_kerja" 
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