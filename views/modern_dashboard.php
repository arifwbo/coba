<?php defined('BASEPATH') OR exit('No direct script access allowed');?>

<div class="modern-content-header mb-4">
	<div class="d-flex justify-content-between align-items-center">
		<div>
			<h1 class="h3 mb-1">Dashboard</h1>
			<p class="text-muted mb-0">Selamat datang di panel kontrol CMS Sekolahku</p>
		</div>
		<div>
			<span class="badge bg-success fs-6">
				<i class="bi bi-circle-fill"></i> Online
			</span>
		</div>
	</div>
</div>

<?php if (__session('user_type') === 'super_user' || __session('user_type') === 'administrator') { ?>
	<?php if (ENVIRONMENT == 'development') { ?>
		<div class="alert alert-warning d-flex align-items-start mb-4" role="alert">
			<i class="bi bi-exclamation-triangle-fill me-3 fs-4"></i>
			<div>
				<h5 class="alert-heading">Informasi Penting!</h5>
				<p class="mb-2">Website masih dalam mode <strong>"DEVELOPMENT"</strong>. Jika website sudah online <strong>SANGAT DISARANKAN</strong> untuk mengubahnya menjadi mode <strong>"PRODUCTION"</strong>.</p>
				<p class="mb-2">Untuk mengubah menjadi mode <strong>PRODUCTION</strong>, silahkan buka file <strong>INDEX.PHP</strong> yang berada di root direktori CMS Sekolahku. Pada baris 56, silahkan ubah tulisan <strong>development</strong> menjadi <strong>production</strong>:</p>
				<code class="text-dark">define('ENVIRONMENT', isset($_SERVER['CI_ENV']) ? $_SERVER['CI_ENV'] : '<mark>production</mark>');</code>
			</div>
		</div>
	<?php } ?>

	<?php if ($warning) { ?>
		<div class="alert alert-danger d-flex align-items-start mb-4" role="alert">
			<i class="bi bi-shield-exclamation me-3 fs-4"></i>
			<div>
				<h5 class="alert-heading">Peringatan Keamanan!</h5>
				<ul class="mb-0">
					<?php if (!$recaptcha_site_key OR !$recaptcha_secret_key) { ?>
						<li><strong>Recaptcha Site Key</strong> dan <strong>Secret Key</strong> belum diatur. Silahkan atur terlebih dahulu pada menu <a href="<?=site_url('settings/general')?>" class="alert-link"><strong>Pengaturan / Umum</strong></a>. Untuk mendapatkan <strong>Recaptcha Site Key</strong> dan <strong>Recaptcha Secret Key</strong> silahkan ikuti tutorial <a href="https://sekolahku.web.id/read/5/mengaktifkan-recaptcha" target="_blank" class="alert-link"> disini</a>.</li>
					<?php } ?>
				</ul>
			</div>
		</div>
	<?php } ?>

	<!-- Statistics Cards -->
	<div class="modern-grid modern-grid-cols-4 mb-5">
		<a href="<?=site_url('blog/messages');?>" class="modern-info-box modern-info-box-primary">
			<div class="modern-info-box-icon">
				<i class="bi bi-envelope"></i>
			</div>
			<div class="modern-info-box-content">
				<p class="modern-info-box-text">Pesan Masuk</p>
				<h3 class="modern-info-box-number"><?=$widget_box->messages;?></h3>
			</div>
		</a>

		<a href="<?=site_url('blog/post_comments');?>" class="modern-info-box modern-info-box-success">
			<div class="modern-info-box-icon">
				<i class="bi bi-chat-dots"></i>
			</div>
			<div class="modern-info-box-content">
				<p class="modern-info-box-text">Komentar</p>
				<h3 class="modern-info-box-number"><?=$widget_box->comments;?></h3>
			</div>
		</a>

		<a href="<?=site_url('blog/posts');?>" class="modern-info-box modern-info-box-warning">
			<div class="modern-info-box-icon">
				<i class="bi bi-file-post"></i>
			</div>
			<div class="modern-info-box-content">
				<p class="modern-info-box-text">Tulisan</p>
				<h3 class="modern-info-box-number"><?=$widget_box->posts;?></h3>
			</div>
		</a>

		<a href="<?=site_url('blog/pages');?>" class="modern-info-box modern-info-box-danger">
			<div class="modern-info-box-icon">
				<i class="bi bi-file-earmark-text"></i>
			</div>
			<div class="modern-info-box-content">
				<p class="modern-info-box-text">Halaman</p>
				<h3 class="modern-info-box-number"><?=$widget_box->pages;?></h3>
			</div>
		</a>
	</div>

	<!-- Secondary Statistics -->
	<div class="modern-grid modern-grid-cols-4 mb-5">
		<a href="<?=site_url('blog/post_categories');?>" class="modern-info-box modern-info-box-danger">
			<div class="modern-info-box-icon">
				<i class="bi bi-folder"></i>
			</div>
			<div class="modern-info-box-content">
				<p class="modern-info-box-text">Kategori Tulisan</p>
				<h3 class="modern-info-box-number"><?=$widget_box->categories;?></h3>
			</div>
		</a>

		<a href="<?=site_url('blog/tags');?>" class="modern-info-box modern-info-box-warning">
			<div class="modern-info-box-icon">
				<i class="bi bi-tags"></i>
			</div>
			<div class="modern-info-box-content">
				<p class="modern-info-box-text">Tags</p>
				<h3 class="modern-info-box-number"><?=$widget_box->tags;?></h3>
			</div>
		</a>

		<a href="<?=site_url('blog/links');?>" class="modern-info-box modern-info-box-success">
			<div class="modern-info-box-icon">
				<i class="bi bi-link-45deg"></i>
			</div>
			<div class="modern-info-box-content">
				<p class="modern-info-box-text">Tautan</p>
				<h3 class="modern-info-box-number"><?=$widget_box->links;?></h3>
			</div>
		</a>

		<a href="<?=site_url('blog/quotes');?>" class="modern-info-box modern-info-box-info">
			<div class="modern-info-box-icon">
				<i class="bi bi-quote"></i>
			</div>
			<div class="modern-info-box-content">
				<p class="modern-info-box-text">Kutipan</p>
				<h3 class="modern-info-box-number"><?=$widget_box->quotes;?></h3>
			</div>
		</a>
	</div>

	<!-- Admission Information -->
	<div class="modern-card mb-5">
		<div class="modern-card-header">
			<h5 class="modern-card-title">
				<i class="bi bi-door-open me-2"></i>
				Informasi Penerimaan <?=strtoupper(__session('_student'))?> Baru
			</h5>
		</div>
		<div class="modern-card-body">
			<div class="table-responsive">
				<table class="modern-table">
					<tbody>
						<tr>
							<td class="fw-semibold">
								<i class="bi bi-calendar-check text-primary me-2"></i>
								<?=__session('_academic_year')?> Aktif
							</td>
							<td>:</td>
							<td><?=__session('current_academic_year')?> / <?=__session('current_academic_semester')=='odd' ? 'Ganjil':'Genap'?></td>
							<td class="fw-semibold">
								<i class="bi bi-person-plus text-primary me-2"></i>
								Tahun Penerimaan <?=__session('_student')?> Baru
							</td>
							<td>:</td>
							<td><?=__session('admission_year')?></td>
						</tr>
						<tr>
							<td class="fw-semibold">
								<i class="bi bi-layers text-primary me-2"></i>
								Gelombang Pendaftaran
							</td>
							<td>:</td>
							<td><?=__session('admission_phase')?></td>
							<td class="fw-semibold">
								<i class="bi bi-toggle-on text-primary me-2"></i>
								Status Penerimaan
							</td>
							<td>:</td>
							<td>
								<span class="badge <?=__session('admission_status') == 'open' ? 'bg-success':'bg-danger'?>">
									<i class="bi <?=__session('admission_status') == 'open' ? 'bi-check-circle':'bi-x-circle'?> me-1"></i>
									<?=__session('admission_status') == 'open' ? 'Dibuka':'Ditutup'?>
								</span>
							</td>
						</tr>
						<tr>
							<td class="fw-semibold">
								<i class="bi bi-calendar-event text-primary me-2"></i>
								Tanggal Mulai
							</td>
							<td>:</td>
							<td><?=indo_date(__session('admission_start_date'))?></td>
							<td class="fw-semibold">
								<i class="bi bi-calendar-x text-primary me-2"></i>
								Tanggal Selesai
							</td>
							<td>:</td>
							<td><?=indo_date(__session('admission_end_date'))?></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
<?php } ?>

<!-- Main Dashboard Content -->
<div class="modern-grid modern-grid-cols-2">
	<!-- School Profile -->
	<div class="modern-card">
		<div class="modern-card-header">
			<h5 class="modern-card-title">
				<i class="bi bi-building me-2"></i>
				Profil <?=__session('school_level') >= 5 ? 'Kampus' : 'Sekolah'?>
			</h5>
		</div>
		<div class="modern-card-body">
			<div class="row g-3">
				<div class="col-12">
					<div class="d-flex align-items-center">
						<i class="bi bi-building-fill text-primary me-3 fs-4"></i>
						<div>
							<h6 class="mb-1 fw-semibold"><?=__session('school_name')?></h6>
							<small class="text-muted">Nama <?=__session('school_level') >= 5 ? 'Kampus' : 'Sekolah'?></small>
						</div>
					</div>
				</div>
				<div class="col-12">
					<div class="d-flex align-items-center">
						<i class="bi bi-credit-card text-primary me-3 fs-4"></i>
						<div>
							<h6 class="mb-1 fw-semibold"><?=__session('npsn')?></h6>
							<small class="text-muted">NPSN</small>
						</div>
					</div>
				</div>
				<div class="col-12">
					<div class="d-flex align-items-center">
						<i class="bi bi-person-badge text-primary me-3 fs-4"></i>
						<div>
							<h6 class="mb-1 fw-semibold"><?=__session('headmaster')?></h6>
							<small class="text-muted"><?=__session('_headmaster')?></small>
						</div>
					</div>
				</div>
				<div class="col-12">
					<div class="d-flex align-items-start">
						<i class="bi bi-geo-alt text-primary me-3 fs-4"></i>
						<div>
							<h6 class="mb-1 fw-semibold"><?=__session('street_address')?></h6>
							<small class="text-muted d-block"><?=__session('village')?>, <?=__session('sub_district')?></small>
							<small class="text-muted"><?=__session('district')?> - <?=__session('postal_code')?></small>
						</div>
					</div>
				</div>
				<div class="col-6">
					<div class="d-flex align-items-center">
						<i class="bi bi-telephone text-primary me-3"></i>
						<div>
							<h6 class="mb-1 fw-semibold"><?=__session('phone')?></h6>
							<small class="text-muted">Telepon</small>
						</div>
					</div>
				</div>
				<div class="col-6">
					<div class="d-flex align-items-center">
						<i class="bi bi-envelope text-primary me-3"></i>
						<div>
							<h6 class="mb-1 fw-semibold"><?=__session('email')?></h6>
							<small class="text-muted">Email</small>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Right Column -->
	<div>
		<!-- System Information -->
		<div class="modern-card mb-4">
			<div class="modern-card-header">
				<h5 class="modern-card-title">
					<i class="bi bi-info-circle me-2"></i>
					Informasi Sistem
				</h5>
			</div>
			<div class="modern-card-body">
				<div class="row g-3">
					<div class="col-6">
						<div class="d-flex align-items-center">
							<i class="bi bi-display text-success me-2"></i>
							<div>
								<small class="text-muted d-block">Sistem Operasi</small>
								<span class="fw-semibold"><?=$this->agent->platform();?></span>
							</div>
						</div>
					</div>
					<div class="col-6">
						<div class="d-flex align-items-center">
							<i class="bi bi-browser-chrome text-info me-2"></i>
							<div>
								<small class="text-muted d-block">Browser</small>
								<span class="fw-semibold"><?=$this->agent->browser();?></span>
							</div>
						</div>
					</div>
					<div class="col-6">
						<div class="d-flex align-items-center">
							<i class="bi bi-code-slash text-warning me-2"></i>
							<div>
								<small class="text-muted d-block">PHP</small>
								<span class="fw-semibold"><?=phpversion();?></span>
							</div>
						</div>
					</div>
					<div class="col-6">
						<div class="d-flex align-items-center">
							<i class="bi bi-database text-primary me-2"></i>
							<div>
								<small class="text-muted d-block">Database</small>
								<span class="fw-semibold"><?=ucwords($this->db->platform()).' '.$this->db->version();?></span>
							</div>
						</div>
					</div>
					<div class="col-6">
						<div class="d-flex align-items-center">
							<i class="bi bi-calendar-date text-danger me-2"></i>
							<div>
								<small class="text-muted d-block">Tanggal</small>
								<span class="fw-semibold"><?=indo_date(date('Y-m-d'));?></span>
							</div>
						</div>
					</div>
					<div class="col-6">
						<div class="d-flex align-items-center">
							<i class="bi bi-clock text-secondary me-2"></i>
							<div>
								<small class="text-muted d-block">Waktu</small>
								<span class="fw-semibold"><?=date('H:i:s');?></span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Recent Login Users -->
		<div class="modern-card mb-4">
			<div class="modern-card-header">
				<h5 class="modern-card-title">
					<i class="bi bi-people me-2"></i>
					Pengguna Terkini
				</h5>
			</div>
			<div class="modern-card-body p-0">
				<div class="list-group list-group-flush">
					<?php foreach($last_logged_in->result() as $row) { ?>
						<div class="list-group-item d-flex align-items-center">
							<div class="avatar-circle bg-primary text-white rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 40px; height: 40px;">
								<i class="bi bi-person"></i>
							</div>
							<div class="flex-grow-1">
								<h6 class="mb-1"><?=$row->full_name;?></h6>
								<small class="text-muted">
									<i class="bi bi-clock me-1"></i>
									<?=$row->last_logged_in;?>
								</small>
							</div>
						</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Recent Content Section -->
<div class="modern-grid modern-grid-cols-2 mt-5">
	<!-- Latest Posts -->
	<div class="modern-card">
		<div class="modern-card-header">
			<h5 class="modern-card-title">
				<i class="bi bi-file-post me-2"></i>
				Tulisan Terbaru
			</h5>
		</div>
		<div class="modern-card-body p-0">
			<div class="list-group list-group-flush">
				<?php $posts = get_latest_posts(10); foreach($posts->result() as $row) { ?>
					<div class="list-group-item">
						<div class="d-flex w-100 justify-content-between align-items-start">
							<div class="flex-grow-1">
								<h6 class="mb-1">
									<a href="<?=site_url('read/'.$row->id.'/'.$row->post_slug)?>" target="_blank" class="text-decoration-none">
										<?=$row->post_title;?>
									</a>
								</h6>
								<p class="mb-2 text-muted small">
									<i class="bi bi-person me-1"></i>
									<?=$row->post_author?> • 
									<i class="bi bi-calendar me-1"></i>
									<?=date('d/m/Y H:i', strtotime($row->created_at))?> • 
									<i class="bi bi-eye me-1"></i>
									<?=$row->post_counter?> views
								</p>
							</div>
						</div>
					</div>
				<?php } ?>
			</div>
		</div>
	</div>

	<!-- Recent Comments -->
	<div class="modern-card">
		<div class="modern-card-header">
			<h5 class="modern-card-title">
				<i class="bi bi-chat-dots me-2"></i>
				Komentar Terbaru
			</h5>
		</div>
		<div class="modern-card-body p-0">
			<div class="list-group list-group-flush">
				<?php foreach($recent_comments->result() as $row) { ?>
					<div class="list-group-item">
						<div class="d-flex w-100 justify-content-between align-items-start">
							<div class="flex-grow-1">
								<h6 class="mb-1">
									<a href="<?=$row->comment_url;?>" target="_blank" class="text-decoration-none">
										<?=$row->comment_author;?>
									</a>
								</h6>
								<p class="mb-2 text-muted small">
									Pada: <a href="<?=site_url('read/'.$row->comment_post_id.'/'.$row->post_slug);?>" target="_blank" class="text-decoration-none"><?=$row->post_title;?></a>
								</p>
								<p class="mb-0 small"><?=strip_tags($row->comment_content);?></p>
							</div>
						</div>
					</div>
				<?php } ?>
			</div>
		</div>
	</div>
</div>