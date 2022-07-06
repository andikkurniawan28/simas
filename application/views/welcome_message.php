<div class="container-fluid">

    <!-- <h1 class="h3 mb-4 text-gray-800">Dashboard</h1> -->

	<?=$this->session->flashdata('success');?>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">

        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Ronsel Terdaftar</h6>
        </div>
        
		<div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th><i class="fas fa-flask"></i></th>
                            <th><i class="fas fa-barcode"></i></th>
                            <th><i class="fas fa-clock"></i>  Cetak</th>
                            <th><i class="fas fa-clock"></i>  Masak</th>
                            <th><i class="fas fa-clock"></i>  Turun</th>
                            <th>Pan</th>
                            <th>Palung</th>
                            <th><i class="fas fa-user"></i></th>
                            <th><i class="fas fa-edit"></i>  Control</th>
                        </tr>
                    </thead>
					<tbody>
						<?php foreach($tabel->result() as $tabel) { ?>
						<tr>
							<td><?=$tabel->id;?></td>
							<td>
								<h5><?php
									switch($tabel->masakan)
									{
										case 'R1' 		: echo "<span class='badge badge-primary'>R1</span>"; break;
										case 'R2' 		: echo "<span class='badge badge-secondary'>R2</span>"; break;
										case 'R3' 		: echo "<span class='badge badge-success'>R3</span>"; break;
										case 'A Halus' 	: echo "<span class='badge badge-warning text-dark'>A Halus</span>"; break;
										case 'A' 		: echo "<span class='badge badge-danger'>A</span>"; break;
										case 'C' 		: echo "<span class='badge badge-info'>C</span>"; break;
										case 'D'		: echo "<span class='badge badge-dark'>D</span>"; break;
									} 
								?></h5>
							</td>
							<td><?=$tabel->kode;?></td>
							<td><?=date('H:i', strtotime($tabel->waktu));?></td>
							<td><?=date('H:i', strtotime($tabel->j_masuk));?></td>
							<td><?=date('H:i', strtotime($tabel->j_turun));?></td>
							<td><?=$tabel->pan;?></td>
							<td><?=$tabel->palung;?></td>
							<td><?=$tabel->opr;?></td>
							<td>
								<a class="btn btn-success btn-sm text-dark" href="<?=base_url('welcome/cetak_ronsel/'.$tabel->id);?>" >
									<i class="fas fa-print fa-sm fa-fw mr-2 text-dark"></i> Cetak
								</a>
								<a class="btn btn-danger btn-sm" href="#" data-toggle="modal" data-target="#deleteModal_<?=$tabel->id;?>">
									<i class="fas fa-trash fa-sm fa-fw mr-2 text-gray-400"></i> Hapus
								</a>
							</td>

							<!-- deleteModal -->
							<div class="modal fade" id="deleteModal_<?=$tabel->id;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
								<div class="modal-dialog" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title" id="exampleModalLabel">Apakah anda akan menghapus data ini ?</h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body">
											<p>Masakan : <?=$tabel->masakan;?></p>
											<p>Kode : <?=$tabel->kode;?></p>
											<p>Jam Masak : <?=$tabel->j_masuk;?></p>
											<p>Jam Turun : <?=$tabel->j_turun;?></p>
											<p>Tukang Masak : <?=$tabel->opr;?></p>
										</div>
										<div class="modal-footer">
        									<a href="<?=base_url('welcome/delete_ronsel/'.$tabel->id);?>" type="submit" class="btn btn-primary">Ya</a>
											<button type="button" class="btn btn-danger" data-dismiss="modal">Tidak</button>
										</div>
									</div>
								</div>
							</div>
						</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	
	</div>
</div>

            