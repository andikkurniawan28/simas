</div>
<!-- End of Main Content -->

    <!-- Footer -->
    <footer class="sticky-footer bg-white">
        <div class="container my-auto">
            <div class="copyright text-center my-auto">
                <span>e-Ronsel &copy; Andik Kurniawan 2023</span>
            </div>
        </div>
    </footer>
    <!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top"><i class="fas fa-angle-up"></i></a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="<?=base_url('auth/logout');?>">Logout</a>
            </div>
        </div>
    </div>
</div>

<!-- createModal -->
<div class="modal fade" id="createModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Buat Ronsel</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?=base_url('welcome/buat_ronsel');?>" method="post">

		<div class="row">

			<div class="col-md-3">
				<label class="">Masakan</label>
				<select name="jenis" class="form-control">
					<option>R1</option>
					<option>R2</option>
					<option>R3</option>
					<option>A Halus</option>
					<option>A</option>
					<option>C</option>
					<option>D</option>
				</select>
			</div>

			<div class="col-md-3">
				<label class="">Pan</label>
				<select name="pan" class="form-control">
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
					<option>5</option>
					<option>6</option>
					<option>7</option>
					<option>8</option>
					<option>9</option>
					<option>10</option>
					<option>11</option>
					<option>12</option>
					<option>13</option>
					<option>14</option>
					<option>15</option>
					<option>16</option>
					<option>17</option>
					<option>18</option>
				</select>
			</div>

			<div class="col-md-3">
				<label class="">Palung</label>
				<select name="palung" class="form-control">
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
					<option>5</option>
					<option>6</option>
					<option>7</option>
					<option>8</option>
					<option>9</option>
					<option>10</option>
				</select>
			</div>

			<div class="col-md-3">
				<label class="">Volume</label>
				<input type="number" class="form-control" name="hl" required>
			</div>

		</div>

		<hr>

		<div class="row">

			<div class="col-md-4">
				<label class="">Jam Masak</label>
				<input type="time" class="form-control" name="masak" required>
			</div>

			<div class="col-md-4">
				<label class="">Jam Turun</label>
				<input type="time" class="form-control" name="turun" required>
			</div>

			<div class="col-md-4">
				<label class="">Tukang Masak</label>
				<input type="text" class="form-control" name="tukang" required>
			</div>

		</div>

      </div>
      <div class="modal-footer">
        <!-- <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button> -->
        <button type="submit" class="btn btn-primary">Cetak</button>
		</form>
      </div>
    </div>
  </div>
</div>

<script src="<?=base_url('assets/');?>vendor/jquery/jquery.min.js"></script>
<script src="<?=base_url('assets/');?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?=base_url('assets/');?>vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="<?=base_url('assets/');?>js/sb-admin-2.min.js"></script>
<script src="<?=base_url('assets/');?>vendor/datatables/jquery.dataTables.min.js"></script>
<script src="<?=base_url('assets/');?>vendor/datatables/dataTables.bootstrap4.min.js"></script>

</body>

</html>

<!-- <script src="https://code.jquery.com/jquery-3.5.1.js"></script> -->
<!-- <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script> -->
<script src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.print.min.js"></script>
<script>
	// Call the dataTables jQuery plugin
	$(document).ready(function () 
	{
		$('#dataTable').DataTable(
			{
				order: [[0, 'desc']],
				dom: 'Bfrtip',
        		buttons: ['copy', 'csv', 'excel', 'pdf', 'print']
			}
		);
	});
</script>