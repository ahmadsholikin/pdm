<div class="card">
	<div class="card-header bg-transparent">
		<a class="text-danger" href="<?=backend_url();?>/bobot-prosentase/add" role="button" data-toggle="tooltip" title="klik untuk menambah data baru" ><i class="mdi mdi-plus-circle"></i> Data Baru</a>
	</div>
	<div class="card-body">
		<div class="table-responsive">
			<table class="table table-striped table-hover table-bordered table-sm" style="width: 100%" id="datatable">
				<thead>
					<tr>
						<th>No.</th>
						<th>Bulan Berlaku</th>
						<th>Bobot SKP</th>
						<th>Bobot Perilaku Kerja</th>
                        <th>Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php $no=1; foreach ($data as $row): ?>
					<tr>
						<td><?=$no++;?></td>
						<td><?=$row['bulan_berlaku'];?></td>
						<td><?=$row['bobot_skp'];?></td>
						<td><?=$row['bobot_perilaku_kerja'];?></td>
						<td>
							<div class="btn-group" role="group">
								<?=btn_edit('./bobot-prosentase/edit?id='.$row['id']);?>
								<?=btn_delete('./bobot-prosentase/delete?id='.$row['id']);?>
							</div>
						</td>
					</tr>	
					<?php endforeach ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
