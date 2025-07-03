<?php defined('BASEPATH') OR exit('No direct script access allowed');?>

<div class="page-header">
	<h1 class="page-title">Dashboard</h1>
	<p class="page-subtitle">Selamat datang di Panel Kontrol CMS Sekolahku</p>
</div>

<?php if (__session('user_type') === 'super_user' || __session('user_type') === 'administrator') { ?>
	<?php if (ENVIRONMENT == 'development') { ?>
		<div class="alert-modern alert-warning mb-4">
			<h4><i class="fas fa-exclamation-triangle"></i> INFORMASI !</h4>
			<p>Website masih dalam mode <strong>"DEVELOPMENT"</strong>. Jika website sudah online <strong>SANGAT DISARANKAN</strong> untuk mengubahnya menjadi mode <strong>"PRODUCTION"</strong>. Mode development hanya diperbolehkan jika masih dijalankan pada server offline.</p>
			<p>Untuk mengubah menjadi mode <strong>PRODUCTION</strong>, silahkan buka file <strong>INDEX.PHP</strong> yang berada di root direktori CMS Sekolahku. Pada baris 56, silahkan ubah tulisan <strong>development</strong> menjadi <strong>production</strong> seperti dibawa ini :</p>
			<code>define('ENVIRONMENT', isset($_SERVER['CI_ENV']) ? $_SERVER['CI_ENV'] : '<span class="text-warning">production</span>');</code>
		</div>
	<?php } ?>

	<?php if ($warning) { ?>
		<div class="alert-modern alert-danger mb-4">
			<h4><i class="fas fa-exclamation-circle"></i> PERINGATAN !</h4>
			<ul class="mb-0">
				<?php if (!$recaptcha_site_key OR !$recaptcha_secret_key) { ?>
					<li><strong>Recaptcha Site Key</strong> dan <strong>Secret Key</strong> belum diatur. Silahkan atur terlebih dahulu pada menu <a href="<?=site_url('settings/general')?>"><strong>Pengaturan / Umum</strong></a>. Untuk mendapatkan <strong>Recaptcha Site Key</strong> dan <strong>Recaptcha Secret Key</strong> silahkan ikuti tutorial <a href="https://sekolahku.web.id/read/5/mengaktifkan-recaptcha" target="_blank"> disini</a>.</li>
				<?php } ?>
			</ul>
		</div>
	<?php } ?>

	<div class="row-modern mb-4">
		<div class="col-modern-3">
			<div class="info-box-modern">
				<div class="info-icon primary">
					<i class="fas fa-envelope"></i>
				</div>
				<p class="info-label">Pesan Masuk</p>
				<h3 class="info-value"><?=$widget_box->messages;?></h3>
				<a href="<?=site_url('blog/messages');?>" class="btn-modern btn-outline mt-3">
					<i class="fas fa-eye"></i> Lihat Detail
				</a>
			</div>
		</div>
		<div class="col-modern-3">
			<div class="info-box-modern">
				<div class="info-icon success">
					<i class="fas fa-comments"></i>
				</div>
				<p class="info-label">Komentar</p>
				<h3 class="info-value"><?=$widget_box->comments;?></h3>
				<a href="<?=site_url('blog/post_comments');?>" class="btn-modern btn-outline mt-3">
					<i class="fas fa-eye"></i> Lihat Detail
				</a>
			</div>
		</div>
		<div class="col-modern-3">
			<div class="info-box-modern">
				<div class="info-icon warning">
					<i class="fas fa-edit"></i>
				</div>
				<p class="info-label">Tulisan</p>
				<h3 class="info-value"><?=$widget_box->posts;?></h3>
				<a href="<?=site_url('blog/posts');?>" class="btn-modern btn-outline mt-3">
					<i class="fas fa-eye"></i> Lihat Detail
				</a>
			</div>
		</div>
		<div class="col-modern-3">
			<div class="info-box-modern">
				<div class="info-icon danger">
					<i class="fas fa-file"></i>
				</div>
				<p class="info-label">Halaman</p>
				<h3 class="info-value"><?=$widget_box->pages;?></h3>
				<a href="<?=site_url('blog/pages');?>" class="btn-modern btn-outline mt-3">
					<i class="fas fa-eye"></i> Lihat Detail
				</a>
			</div>
		</div>
	</div>

	<div class="row-modern mb-4">
		<div class="col-modern-3">
			<div class="info-box-modern">
				<div class="info-icon danger">
					<i class="fas fa-list"></i>
				</div>
				<p class="info-label">Kategori Tulisan</p>
				<h3 class="info-value"><?=$widget_box->categories;?></h3>
				<a href="<?=site_url('blog/post_categories');?>" class="btn-modern btn-outline mt-3">
					<i class="fas fa-eye"></i> Lihat Detail
				</a>
			</div>
		</div>
		<div class="col-modern-3">
			<div class="info-box-modern">
				<div class="info-icon warning">
					<i class="fas fa-tags"></i>
				</div>
				<p class="info-label">Tags</p>
				<h3 class="info-value"><?=$widget_box->tags;?></h3>
				<a href="<?=site_url('blog/tags');?>" class="btn-modern btn-outline mt-3">
					<i class="fas fa-eye"></i> Lihat Detail
				</a>
			</div>
		</div>
		<div class="col-modern-3">
			<div class="info-box-modern">
				<div class="info-icon success">
					<i class="fas fa-link"></i>
				</div>
				<p class="info-label">Tautan</p>
				<h3 class="info-value"><?=$widget_box->links;?></h3>
				<a href="<?=site_url('blog/links');?>" class="btn-modern btn-outline mt-3">
					<i class="fas fa-eye"></i> Lihat Detail
				</a>
			</div>
		</div>
		<div class="col-modern-3">
			<div class="info-box-modern">
				<div class="info-icon info">
					<i class="fas fa-quote-right"></i>
				</div>
				<p class="info-label">Kutipan</p>
				<h3 class="info-value"><?=$widget_box->quotes;?></h3>
				<a href="<?=site_url('blog/quotes');?>" class="btn-modern btn-outline mt-3">
					<i class="fas fa-eye"></i> Lihat Detail
				</a>
			</div>
		</div>
	</div>

	<div class="modern-card mb-4">
		<div class="modern-card-header">
			<h3 class="modern-card-title">
				<i class="fas fa-graduation-cap text-primary"></i>
				INFORMASI PENERIMAAN <?=strtoupper(__session('_student'))?> BARU
			</h3>
		</div>
		<div class="modern-card-body">
			<div class="modern-table">
				<table class="table table-borderless">
					<tbody>
						<tr>
							<td width="20%"><i class="fas fa-calendar text-primary"></i> <?=__session('_academic_year')?> Aktif</td>
							<td width="1px">:</td>
							<td><?=__session('current_academic_year')?> / <?=__session('current_academic_semester')=='odd' ? 'Ganjil':'Genap'?></td>
							<td width="30%"><i class="fas fa-calendar text-primary"></i> Tahun Penerimaan <?=__session('_student')?> Baru</td>
							<td width="1px">:</td>
							<td><?=__session('admission_year')?></td>
						</tr>
						<tr>
							<td><i class="fas fa-wave-square text-primary"></i> Gelombang Pendaftaran</td>
							<td>:</td>
							<td><?=__session('admission_phase')?></td>
							<td><i class="fas fa-check-circle text-primary"></i> Status Penerimaan <?=__session('_student')?> Baru</td>
							<td>:</td>
							<td>
								<span class="badge <?=__session('admission_status') == 'open' ? 'bg-success':'bg-danger'?>">
									<?=__session('admission_status') == 'open' ? 'Dibuka':'Ditutup'?>
								</span>
							</td>
						</tr>
						<tr>
							<td><i class="fas fa-play-circle text-primary"></i> Tanggal Mulai Pendaftaran</td>
							<td>:</td>
							<td><?=indo_date(__session('admission_start_date'))?></td>
							<td><i class="fas fa-stop-circle text-primary"></i> Tanggal Selesai Pendaftaran</td>
							<td>:</td>
							<td><?=indo_date(__session('admission_end_date'))?></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
<?php } ?>

<div class="row-modern">
	<div class="col-modern-6">
		<div class="modern-card">
			<div class="modern-card-header">
				<h3 class="modern-card-title">
					<i class="fas fa-school text-primary"></i>
					PROFIL <?=__session('school_level') >= 5 ? 'KAMPUS' : 'SEKOLAH'?>
				</h3>
			</div>
			<div class="modern-card-body">
				<div class="row g-3">
					<div class="col-12">
						<div class="form-group-modern">
							<label class="form-label-modern">Nama <?=__session('school_level') >= 5 ? 'Kampus' : 'Sekolah'?></label>
							<p class="text-muted"><?=__session('school_name')?></p>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group-modern">
							<label class="form-label-modern">NPSN</label>
							<p class="text-muted"><?=__session('npsn')?></p>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group-modern">
							<label class="form-label-modern"><?=__session('_headmaster')?></label>
							<p class="text-muted"><?=__session('headmaster')?></p>
						</div>
					</div>
					<div class="col-12">
						<div class="form-group-modern">
							<label class="form-label-modern">Alamat Lengkap</label>
							<p class="text-muted">
								<?=__session('street_address')?><br>
								<?=__session('sub_village') ? __session('sub_village') . ', ' : ''?>
								<?=__session('village')?>, <?=__session('sub_district')?><br>
								<?=__session('district')?> <?=__session('postal_code')?>
							</p>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group-modern">
							<label class="form-label-modern">Telepon</label>
							<p class="text-muted"><?=__session('phone')?></p>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group-modern">
							<label class="form-label-modern">Email</label>
							<p class="text-muted"><?=__session('email')?></p>
						</div>
					</div>
					<div class="col-12">
						<div class="form-group-modern">
							<label class="form-label-modern">Website</label>
							<p class="text-muted"><?=__session('website')?></p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="modern-card">
			<div class="modern-card-header">
				<h3 class="modern-card-title">
					<i class="fas fa-info-circle text-primary"></i>
					INFORMASI SISTEM
				</h3>
			</div>
			<div class="modern-card-body">
				<div class="row g-3">
					<div class="col-md-6">
						<div class="form-group-modern">
							<label class="form-label-modern">Sistem Operasi</label>
							<p class="text-muted"><?=$this->agent->platform();?></p>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group-modern">
							<label class="form-label-modern">Browser</label>
							<p class="text-muted"><?=$this->agent->browser();?></p>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group-modern">
							<label class="form-label-modern">Versi PHP</label>
							<p class="text-muted"><?=phpversion();?></p>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group-modern">
							<label class="form-label-modern">Database</label>
							<p class="text-muted"><?=ucwords($this->db->platform()).' '.$this->db->version();?></p>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group-modern">
							<label class="form-label-modern">Tanggal Server</label>
							<p class="text-muted"><?=indo_date(date('Y-m-d'));?></p>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group-modern">
							<label class="form-label-modern">Jam Server</label>
							<p class="text-muted"><?=date('H:i:s');?></p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="modern-card">
			<div class="modern-card-header">
				<h3 class="modern-card-title">
					<i class="fas fa-users text-primary"></i>
					LOGIN PENGGUNA TERAKHIR
				</h3>
			</div>
			<div class="modern-card-body p-0">
				<div class="modern-table">
					<table class="table table-borderless mb-0">
						<tbody>
							<?php foreach($last_logged_in->result() as $row) { ?>
								<tr>
									<td>
										<div class="d-flex align-items-center">
											<div class="me-3">
												<div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
													<i class="fas fa-user"></i>
												</div>
											</div>
											<div>
												<h6 class="mb-0"><?=$row->full_name;?></h6>
												<small class="text-muted">
													<i class="fas fa-clock"></i> <?=$row->last_logged_in;?>
												</small>
											</div>
										</div>
									</td>
								</tr>
							<?php } ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>

	<div class="col-modern-6">
		<div class="modern-card">
			<div class="modern-card-header">
				<h3 class="modern-card-title">
					<i class="fas fa-newspaper text-primary"></i>
					TULISAN TERBARU
				</h3>
			</div>
			<div class="modern-card-body">
				<?php $posts = get_latest_posts(10); foreach($posts->result() as $row) { ?>
					<div class="border-bottom pb-3 mb-3">
						<h6 class="mb-2">
							<a href="<?=site_url('read/'.$row->id.'/'.$row->post_slug)?>" target="_blank" class="text-decoration-none">
								<?=$row->post_title;?>
							</a>
						</h6>
						<small class="text-muted">
							<i class="fas fa-user"></i> <?=$row->post_author?> &bullet; 
							<i class="fas fa-clock"></i> <?=date('d/m/Y H:i', strtotime($row->created_at))?> &bullet; 
							<i class="fas fa-eye"></i> <?=$row->post_counter?> kali
						</small>
					</div>
				<?php } ?>
			</div>
		</div>

		<div class="modern-card">
			<div class="modern-card-header">
				<h3 class="modern-card-title">
					<i class="fas fa-comments text-primary"></i>
					KOMENTAR TERBARU
				</h3>
			</div>
			<div class="modern-card-body">
				<?php foreach($recent_comments->result() as $row) { ?>
					<div class="border-bottom pb-3 mb-3">
						<small class="text-muted">
							Pengirim: <a href="<?=$row->comment_url;?>" target="_blank" class="text-decoration-none"><?=$row->comment_author;?></a> 
							pada <a href="<?=site_url('read/'.$row->comment_post_id.'/'.$row->post_slug);?>" target="_blank" class="text-decoration-none"><?=$row->post_title;?></a>
						</small>
						<p class="mt-1 mb-0"><?=strip_tags($row->comment_content);?></p>
					</div>
				<?php } ?>
			</div>
		</div>
	</div>
</div>
