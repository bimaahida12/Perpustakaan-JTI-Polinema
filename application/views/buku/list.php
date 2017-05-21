<section id="main-content">
        <section class="wrapper">
            <h3><i class="fa fa-angle-right"></i> buku</h3>
		  		<div class="row mt">
			  		<div class="col-lg-12">
                      <div class="content-panel" style="padding: 10px;">
                      <h4><i class="fa fa-angle-right"></i> Data buku</h4>
                          <?php if ($this->session->flashdata('pesan')): ?>
							<div class="alert alert-success">
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
								<?php echo  $this->session->flashdata('pesan') ?>
							</div>	
						<?php endif ?>  
						<div class="table-responsive">
							<table class="table table-hover" id='example'>
								<thead>
									<tr>
										<th>Judul</th>
										<th>Pengarang</th>
										<th>terbit</th>
                                        <th>Jumlah</th>
                                        <th>Aksi</th>
									</tr>
								</thead>
								<tbody>
								<?php foreach ($data as $key) { ?>
									<tr>
										<td><?php echo $key->judul ?></td>
										<td><?php echo $key->pengarang ?></td>
                                        <td><?php echo $key->tahun_terbit ?></td>
                                        <td><?php echo $key->jumlah ?></td>
										<td>
											<a href="<?php echo site_url('buku/detail/').$key->id ?>" type="button" class="btn btn-info">Detail</a>
											<a href="<?php echo site_url('buku/update/').$key->id ?>" type="button" class="btn btn-warning">Edit</a>
											<a href="<?php echo site_url('buku/delete/').$key->id ?>" type="button" class="btn btn-danger" onClick="return confirm('Data <?php echo $key->judul ?> akan dihapus ?');">Delete</a>
										</td>
									</tr>
								<?php } ?>
								</tbody>
							</table>
                  </div><!-- /content-panel -->
               </div><!-- /col-lg-4 -->			
		  	</div><!-- /row -->
        </section>
</section>
<script>
	$(document).ready(function(){
		$('.table').DataTable();
	});
</script>
