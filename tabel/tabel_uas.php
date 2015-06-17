<div class="row">
	<div class="col-md-12">		 				
		<?php 
			if (isset($_GET['create'])) {
				if ($_GET['create'] == 'UAS') {
					include('form/create_uas.php');
					require_once('core/create.php');
				}
			}elseif (isset($_GET['tampil'])) {
				if ($_GET['tampil'] == 'UAS') {
					include('form/tampil_uas.php');
					include('core/delete.php');
				}
			}elseif (isset($_GET['edit-uas'])) {
				include('core/edit.php');
				include('form/edit_nilai_uas.php');
			}else {
		?>
				<div class="col-md-3">
					<a href="?nilai=UAS&&create=UAS">
						<div class="btn btn-primary" style="height:100px;width:200px;">
							<h1><span class="fa fa-pencil"></span></h1>
							Input Nilai UAS
						</div>
					</a>
				</div>	
				<div class="col-md-3">
					<a href="?nilai=UAS&&tampil=UAS">
						<div class="btn btn-primary" style="height:100px;width:200px;">
							<h1><span class="fa fa-search"></span></h1>
							Cari Nilai UAS
						</div>
					</a>
				</div>			
		<?php
			}
		?>										
	</div>
</div>