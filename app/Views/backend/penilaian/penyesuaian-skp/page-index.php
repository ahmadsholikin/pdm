<div class="card">
	<div class="card-header bg-transparent border-bottom-0 px-1">
		<div class="mail-navbar">
			<div class="d-flex align-items-center">
				<div class="tx-14 tx-color-04">
					<span>Tampilkan Periode : </span>
					<a href="" class="link-01 dropdown-toggle" type="button" id="dropdown-menu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?=$periode_range;?></a>
					<div class="dropdown-menu">
						<span class="dropdown-item-text">-- Pilihan Periode --</span>
						<?php foreach($periode as $p):?>
						<a class="dropdown-item" href="?periode=<?=$p['periode_id'];?>"><?=tanggal_dMY($p['periode_awal']).' - '.tanggal_dMY($p['periode_akhir']);?></a>
						<?php endforeach;?>
					</div>
				</div>
			</div>
			<div class="d-none d-lg-flex">
				<a href="" data-toggle="tooltip" title="klik untuk memuat ulang data"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-rotate-cw"><polyline points="23 4 23 10 17 10"></polyline><path d="M20.49 15a9 9 0 1 1-2.12-9.36L23 10"></path></svg></a>
                <a onclick="modalTK('-','-')" data-toggle="tooltip" title="klik untuk menambahkan tugas tambahan dan kreativitas" href="#" class="tx-medium"><i class="icon ion-plus-circled"></i> Tugas Tambahan dan Kreativitas </a>
			</div>
		</div>
	</div>
	<?=csrf_field();?>
	<div class="card-body border-0 p-0">
		<div class="table-responsive">
			<table class="table table-hover table-bordered table-sm mb-0" style="width: 100%;">
				<thead>
					<tr>
						<th rowspan="2" style="width:3%">NO</th>
						<th rowspan="2">I. KEGIATAN TUGAS JABATAN</th>
                        <th style="width:3%" rowspan="2">AK</th>
                        <th colspan="4" class="text-center">TARGET</th>
                        <th style="width:3%" rowspan="2">AK</th>
                        <th colspan="4" class="text-center">REALISASI</th>
                        <th style="width:3%" rowspan="2">AKSI</th>
					</tr>
                    <tr>
                        <th style="width:8%">Kuant/ Output</th>
                        <th style="width:3%">Kual/<br>Mutu</th>
                        <th style="width:5%">Waktu</th>
                        <th>Biaya</th>
                        <th style="width:8%">Kuant/ Output</th>
                        <th style="width:3%">Kual/<br>Mutu</th>
                        <th style="width:5%">Waktu</th>
                        <th>Biaya</th>
                    </tr>
                    <tr class="bg-light">
                        <?php for ($i=1; $i < 14; $i++) : ?>
                        <th><?=$i;?></th>
                        <?php endfor;?>
                    </tr>
				</thead>
				<tbody>
                    <?php $no=1; foreach($skp as $row): ?>
                        <tr>
                            <td><?=$no++;?></td>
                            <td><?=ucfirst($row['kegiatan']);?> <?php if($row['link_skp_kegiatan']<>'-'){ ?> <span class="mdi mdi-link-variant bd-highlight" data-toggle="tooltip" data-placement="bottom" title="Link : <?=$row['link_skp_kegiatan'];?>"> Link</span><?php } ?></td>
							<td><?php if(($_SESSION['jenis_jabatan']=='11')||($_SESSION['jenis_jabatan']=='90')){ echo '-'; }else{ echo number_format((float)$row['angka_kredit'], 3, '.', '');} ?></td>
                            <td>
                                <?php if(($row['fix_kuantitas']<>'')&&($row['target_kuantitas']<>$row['fix_kuantitas'])){ ?><del><?=rp($row['target_kuantitas']);?> <?=ucfirst($row['target_output']);?></del><br><?=rp($row['fix_kuantitas']);?> <?=ucfirst($row['target_output']);?><?php }else { echo $row['target_kuantitas'].' '.ucfirst($row['target_output']); } ?>
                            </td>
							<td><?=$row['target_kualitas_mutu'];?></td>
                            <td>
                                <?php if(($row['fix_waktu']<>'')&&($row['target_waktu']<>$row['fix_waktu'])){ ?><del><?=$row['target_waktu'].' '.ucfirst($row['target_satuan_waktu']);?></del><br><?=$row['fix_waktu'].' '.ucfirst($row['target_satuan_waktu']);?><?php }else { echo $row['target_waktu'].' '.ucfirst($row['target_satuan_waktu']); } ?>
                            </td>
							<td>
                                <?php if(($row['fix_biaya']<>'')&&($row['target_biaya']<>$row['fix_biaya'])){ ?><del><?=rp($row['target_biaya']);?></del><br><?=rp($row['fix_biaya']);?><?php }else { echo $row['target_biaya']==0?'-':rp($row['target_biaya']); } ?>
                            </td>
                            <td><?php if(($_SESSION['jenis_jabatan']=='11')||($_SESSION['jenis_jabatan']=='90')){ echo '-'; }else{ echo number_format((float)$row['angka_kredit'], 3, '.', '');} ?></td>
                            <td><?=$row['realisasi_kuantitas'];?> <?=ucfirst($row['realisasi_output']);?></td>
                            <td class="bg-light"><?=$row['realisasi_kualitas_mutu'];?></td>
                            <td><?=$row['realisasi_waktu'];?> <?=ucfirst($row['realisasi_satuan_waktu']);?></td>
                            <td><?=$row['realisasi_biaya']==0?'-':rp($row['realisasi_biaya']);?></td>
                            <td>
                                <?php if((int)$row['realisasi_kualitas_mutu']<=0): ?>
                                <a onclick="getSKP('<?=$row['skp_id'];?>')" data-toggle="tooltip" title="Klik untuk melakukan penyesuaian SKP" class="btn btn-dark text-light btn-sm btn-icon" style="border-radius:5px" data-original-title="Klik untuk melakukan penyesuaian SKP"><i class="fas fa-edit"></i></a>
                                <?php endif;?>
                            </td>
                        </tr>
                    <?php endforeach;?>
                    <?php if(!empty($tambahan_kreativitas)):?>
                        <tr>
                            <th></th>
                            <th>II. TUGAS TAMBAHAN DAN KREATIVITAS :</th>
                            <th></th>
                            <th colspan="4"></th>
                            <th></th>
                            <th colspan="4"></th>
                            <th></th>
                        </tr>
                        <?php $itt=1;$ik=2;$index=1;foreach($tambahan_kreativitas as $row): ?>
                            <?php if($row['kategori']=='Tugas Tambahan'):?>
                            <tr>
                                <td><?=($itt==1)?$itt:'';?></td>
                                <td><?=$row['deskripsi'];?>
                                    <code class="float-right">
                                        <?php if($row['is_approve']=='Ya'): ;?> 
                                        Disetujui
                                        <?php else: ?>
                                        Ditolak
                                        <?php endif;?>
                                    </code>
                                </td>
                                <td></td>
                                <td colspan="4"></td>
                                <td></td>
                                <td colspan="4"></td>
                                <td>
                                    <input type="hidden" name="" id="kategori-index<?=$itt;?><?=$index;?>" value="<?=$row['kategori'];?>">
                                    <input type="hidden" name="" id="deskripsi-index<?=$itt;?><?=$index;?>" value="<?=$row['deskripsi'];?>">
                                    <div class="btn-group">
                                        <?php if($row['is_approve']=='Tidak'): ;?> 
                                            <a onclick="modalTK('<?=$row['id'];?>','index<?=$itt;?><?=$index;?>')" data-toggle="tooltip" title="Klik untuk melakukan perubahan entrian" class="btn btn-outline-secondary btn-sm btn-icon"  data-original-title="Klik untuk melakukan perubahan entrian"><i class="fas fa-edit"></i></a>
                                            <?=btn_delete('./penyesuaian-skp/delete-tambahan-kreativitas?id='.$row['id']);?>
                                        <?php endif;?>
                                    </div>
                                </td>
                            </tr>
                            <?php $itt++;endif;?>
                            <?php if($row['kategori']=='Kreativitas'):?>
                            <tr>
                                <td><?=($ik==2)?$ik:'';?></td>
                                <td><?=$row['deskripsi'];?>
                                    <code class="float-right">
                                        <?php if($row['is_approve']=='Ya'): ;?> 
                                        Disetujui
                                        <?php else: ?>
                                        Ditolak
                                        <?php endif;?>
                                    </code>
                                </td>
                                <td></td>
                                <td colspan="4"></td>
                                <td></td>
                                <td colspan="4"></td>
                                <td>
                                    <input type="hidden" name="" id="kategori-index<?=$ik;?><?=$index;?>" value="<?=$row['kategori'];?>">
                                    <input type="hidden" name="" id="deskripsi-index<?=$ik;?><?=$index;?>" value="<?=$row['deskripsi'];?>">
                                    <div class="btn-group">
                                        <?php if($row['is_approve']=='Tidak'): ;?> 
                                            <a onclick="modalTK('<?=$row['id'];?>','index<?=$ik;?><?=$index;?>')" data-toggle="tooltip" title="Klik untuk melakukan perubahan entrian" class="btn btn-outline-secondary btn-sm btn-icon"  data-original-title="Klik untuk melakukan perubahan entrian"><i class="fas fa-edit"></i></a>
                                            <?=btn_delete('./penyesuaian-skp/delete-tambahan-kreativitas?id='.$row['id']);?>
                                        <?php endif;?>
                                    </div>
                                </td>
                            </tr>
                            <?php $ik++; endif;?>
                        <?php $index++;endforeach;?>
                    <?php endif;?>
				</tbody>
			</table>
		</div>
	</div>
</div>
<!-- Modal -->
<div class="modal fade" id="modal-tk" tabindex="-1" role="dialog" aria-labelledby="tk" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Form Entrian Tugas Tambahan Dan Kreativitas</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="POST" action="<?=backend_url();?>/penyesuaian-skp/add-tambahan-kreativitas">
                 <?=csrf_field();?>
                 <input type="hidden" name="periode_id" value="<?=$periode_id;?>">
                 <input type="hidden" name="id" id="id">
                <div class="modal-body">
                    <div class="form-row">
                        <div class="col-sm-12 form-group">
                            <label>Pilihan Kategori</label>
                            <select class="form-control form-control-sm" id="kategori" name="kategori" required>
                                <option value="Tugas Tambahan">Tugas Tambahan</option>
                                <option value="Kreativitas">Kreativitas</option>
                            </select>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="col-sm-12 form-group">
                            <label>Deskripsi Keterangan</label>
                            <input class="form-control form-control-sm" id="deskripsi" name="deskripsi" type="text" required>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-sm btn-danger" >Simpan</button>
                    <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Batal</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Modal Penyesuaian -->
<div class="modal fade" id="modal-pskp" tabindex="-1" role="dialog" aria-labelledby="pskp" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Form Penyesuaian SKP</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="form-pskp">
                    <?=csrf_field();?>
                    <input type="hidden" id="skp_id" name="skp_id">
                    <div class="row">
                        <div class="col-6 py-3 px-1">
                            <div class="col-sm-12 form-group">
                                <label>Fix Target Kuantitas</label>
                                <input class="form-control form-control-sm" id="fix_kuantitas" name="fix_kuantitas" type="text" required>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="col-sm-12 form-group">
                                <label>Fix Target Output</label>
                                <input class="form-control form-control-sm" id="fix_output"  name="fix_output" type="text" placeholder="Dokumen, Laporan, Layanan, Kegiatan" required>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="col-sm-12 form-group">
                                <label>Fix Target Durasi Waktu</label>
                                <input class="form-control form-control-sm" id="fix_waktu" name="fix_waktu" type="text" required>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="col-sm-12 form-group">
                                <label>Fix Target Satuan Waktu</label>
                                <select class="form-control form-control-sm" id="fix_satuan_waktu" name="fix_satuan_waktu"  required>
                                    <option value="Bulan">Bulan</option>
                                    <option value="Hari">Hari</option>
                                    <option value="Tahun">Tahun</option>
                                </select>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="col-sm-12 form-group">
                                <label>Fix Target Biaya</label>
                                <input class="form-control form-control-sm thousand" id="fix_biaya" name="fix_biaya" type="text">
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="col-sm-12 form-group">
                                <label>Fix Target Kualitas / Mutu</label>
                                <input class="form-control form-control-sm" id="fix_kualitas_mutu" name="fix_kualitas_mutu" type="text" required>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-6 py-3 px-1" style="background-color:#e8f0fe;">
                            <div class="col-sm-12 form-group" >
                                <label>Realisasi Kuantitas</label>
                                <input class="form-control form-control-sm" id="realisasi_kuantitas" name="realisasi_kuantitas" type="text" required>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="col-sm-12 form-group">
                                <label>Realisasi Output</label>
                                <input class="form-control form-control-sm" id="realisasi_output" name="realisasi_output" type="text" placeholder="Dokumen, Laporan, Layanan, Kegiatan" required>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="col-sm-12 form-group">
                                <label>Realisasi Durasi Waktu</label>
                                <input class="form-control form-control-sm" id="realisasi_waktu" name="realisasi_waktu" type="text" required>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="col-sm-12 form-group">
                                <label>Realisasi Satuan Waktu</label>
                                <select class="form-control form-control-sm" id="realisasi_satuan_waktu" name="realisasi_satuan_waktu"  required>
                                    <option value="Bulan">Bulan</option>
                                    <option value="Hari">Hari</option>
                                    <option value="Tahun">Tahun</option>
                                </select>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="col-sm-12 form-group">
                                <label>Realisasi Biaya</label>
                                <input class="form-control form-control-sm thousand" id="realisasi_biaya" name="realisasi_biaya" type="text">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-danger" onclick="setSKP()">Simpan</button>
                <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Batal</button>
            </div>
        </div>
    </div>
</div>
<script>
    var obj;
    function getSKP(id)
    {  
        $('#skp_id').val(id);
        $('#modal-pskp').modal('show');
        $.get( "<?=base_url();?>/backend/penyesuaian-skp/get-skp?id="+id, function( data ) {
            obj = JSON.parse(data);
            $('#fix_kuantitas').val(obj.fix_kuantitas);
            $('#fix_output').val(obj.fix_output);
            $('#fix_kualitas_mutu').val(obj.fix_kualitas_mutu);
            $('#fix_waktu').val(obj.fix_waktu);
            $('#fix_satuan_waktu').val(obj.fix_satuan_waktu);
            $('#fix_biaya').val(obj.fix_biaya);
            
            $('#realisasi_kuantitas').val(obj.realisasi_kuantitas);
            $('#realisasi_output').val(obj.realisasi_output);
            $('#realisasi_waktu').val(obj.realisasi_waktu);
            $('#realisasi_satuan_waktu').val(obj.realisasi_satuan_waktu);
            $('#realisasi_biaya').val(obj.realisasi_biaya);
        });
    }

    function modalTK(id,index)
    {
        $('#modal-tk').modal('show');
        if(id=='0')
        {
            $('#id').val('');
            $('#deskripsi').val('');
        }
        else
        {
            $('#id').val(id);
            $('#kategori').val($('#kategori-'+index).val());
            $('#deskripsi').val($('#deskripsi-'+index).val());
        }
    }

    function setSKP()
    {
        $.ajax({
            url : "<?=base_url();?>/backend/penyesuaian-skp/set-skp",
            type: "POST",
            data : $('#form-pskp').serialize(),
        }).done(function(response){
           location.reload();
        });
        $('#modal-pskp').modal('hide');
    }
</script>