<div class="card">
	<div class="card-header bg-transparent">
		<a class="text-danger" href="<?=backend_url();?>/batasan/add" role="button" data-toggle="tooltip" title="klik untuk menambah data baru" ><i class="mdi mdi-plus-circle"></i> Data Baru</a>
	</div>
	<div class="card-body">
		<div class="table-responsive">
			<table class="table table-striped table-hover table-bordered table-sm" style="width: 100%" id="datatable">
				<thead>
					<tr>
						<th>No.</th>
						<th>Kode ID</th>
						<th>Nama Parameter</th>
						<th>Nilai</th>
                        <th>Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php $no=1; foreach ($data as $row): ?>
					<tr>
						<td><?=$no++;?></td>
						<td><?=$row['kode'];?></td>
						<td><?=$row['nama'];?></td>
						<td class="text-right"><?=rp($row['nilai']);?></td>
						<td>
							<div class="btn-group" role="group">
								<?=btn_edit('./batasan/edit?id='.$row['id']);?>
								<?=btn_delete('./batasan/delete?id='.$row['id']);?>
							</div>
						</td>
					</tr>	
					<?php endforeach ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
