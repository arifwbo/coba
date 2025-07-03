<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<!DOCTYPE html>
<html>
<head>
	<title><?=__session('school_name')?></title>
	<meta charset="utf-8" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="keywords" content="<?=__session('meta_keywords');?>"/>
	<meta name="description" content="<?=__session('meta_description');?>"/>
	<meta name="subject" content="Situs Pendidikan">
	<meta name="copyright" content="<?=__session('school_name')?>">
	<meta name="language" content="Indonesia">
	<meta name="robots" content="index,follow" />
	<meta name="revised" content="Sunday, July 18th, 2010, 5:15 pm" />
	<meta name="Classification" content="Education">
	<meta name="author" content="Anton Sofyan, 4ntonsofyan@gmail.com">
	<meta name="designer" content="Anton Sofyan, 4ntonsofyan@gmail.com">
	<meta name="reply-to" content="4ntonsofyan@gmail.com">
	<meta name="owner" content="Anton Sofyan">
	<meta name="url" content="https://www.sekolahku.web.id">
	<meta name="identifier-URL" content="https://www.sekolahku.web.id">
	<meta name="category" content="Admission, Education">
	<meta name="coverage" content="Worldwide">
	<meta name="distribution" content="Global">
	<meta name="rating" content="General">
	<meta name="revisit-after" content="7 days">
	<meta http-equiv="Expires" content="0">
	<meta http-equiv="Pragma" content="no-cache">
	<meta http-equiv="Cache-Control" content="no-cache">
	<meta http-equiv="Copyright" content="<?=__session('school_name');?>" />
	<meta http-equiv="imagetoolbar" content="no" />
	<meta name="revisit-after" content="7" />
	<meta name="webcrawlers" content="all" />
	<meta name="rating" content="general" />
	<meta name="spiders" content="all" />
	<meta itemprop="name" content="<?=__session('school_name');?>" />
	<meta itemprop="description" content="<?=__session('meta_description');?>" />
	<meta itemprop="image" content="<?=base_url('media_library/images/'. __session('logo'));?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<link rel="icon" href="<?=base_url('media_library/images/'.__session('favicon'));?>">
	<!-- Bootstrap 5 CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
	<!-- Font Awesome 6 -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
	<!-- Legacy plugins for functionality -->
	<?=link_tag('assets/plugins/toastr/toastr.css');?>
	<?=link_tag('assets/plugins/datetimepicker/datetimepicker.css');?>
	<?=link_tag('assets/plugins/select2/select2.css');?>
	<?=link_tag('assets/plugins/jquery.tagsinput/jquery.tagsinput.min.css');?>
	<?=link_tag('assets/css/loading.css');?>
	<!-- Modern Backend CSS -->
	<?=link_tag('assets/css/modern-backend.css');?>
	<script type="text/javascript">
	const _BASE_URL = '<?=base_url();?>';
	const _CURRENT_URL = '<?=current_url();?>';
	const _SCHOOL_LEVEL = '<?=__session('school_level');?>';
	const _MAJOR_COUNT = '<?=__session('major_count');?>';
	const _ACADEMIC_YEAR = '<?=__session('_academic_year');?>';
	const _STUDENT = '<?=__session('_student');?>';
	const _IDENTITY_NUMBER = '<?=__session('_identity_number');?>';
	const _EMPLOYEE = '<?=__session('_employee');?>';
	const __EMPLOYEE = '<?=__session('__employee');?>';
	const _HEADMASTER = '<?=__session('_headmaster');?>';
	const _MAJOR = '<?=__session('_major');?>';
	const _SUBJECT = '<?=__session('_subject');?>';
	</script>
	<script src="<?=base_url('assets/plugins/shim.js?v=20210227');?>"></script>
	<script src="<?=base_url('assets/plugins/xlsx.full.min.js?v=20210227');?>"></script>
	<script src="<?=base_url('assets/plugins/Blob.js?v=20210227');?>"></script>
	<script src="<?=base_url('assets/plugins/FileSaver.js?v=20210227');?>"></script>
	<script src="<?=base_url('assets/js/backend.min.js?v=20210227');?>"></script>
</head>
<!-- sidebar-collapse -->
<body class="modern-layout">
	<noscript>You need to enable javaScript to run this app</noscript>
	<div class="modern-wrapper">
		<!-- Modern Header -->
		<header class="modern-header">
			<button class="sidebar-toggle" onclick="toggleSidebar()">
				<i class="fas fa-bars"></i>
			</button>
			<a href="#" class="logo">
				<i class="fas fa-graduation-cap"></i>
				<span>CONTROL PANEL</span>
			</a>
			<nav class="header-nav">
				<div class="nav-item dropdown">
					<a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
						<i class="fas fa-question-circle"></i> BANTUAN
					</a>
					<ul class="dropdown-menu">
						<li><a class="dropdown-item" href="https://www.sekolahku.web.id" target="_blank">
							<i class="fas fa-globe"></i> Situs Resmi</a></li>
						<li><a class="dropdown-item" href="https://www.facebook.com/groups/cmssekolahku" target="_blank">
							<i class="fab fa-facebook"></i> Forum Diskusi</a></li>
						<li><hr class="dropdown-divider"></li>
						<li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#cms-info">
							<i class="fas fa-info-circle"></i> Tentang</a></li>
					</ul>
				</div>
				<?php if (__session('user_type') === 'super_user' || __session('user_type') === 'administrator') { ?>
					<a href="<?=site_url('profile');?>" class="nav-link <?=isset($user_profile) ? 'active' : '';?>">
						<i class="fas fa-user-edit"></i> PROFIL
					</a>
				<?php } ?>
				<a href="<?=site_url('change_password');?>" class="nav-link <?=isset($change_password) ? 'active' : '';?>">
					<i class="fas fa-key"></i> KATA SANDI
				</a>
				<a href="<?=site_url('logout');?>" class="nav-link text-danger">
					<i class="fas fa-sign-out-alt"></i> KELUAR
				</a>
			</nav>
		</header>

		<!-- Modern Sidebar -->
		<aside class="modern-sidebar" id="modernSidebar">
			<?php $this->load->view('backend/sidebar');?>
		</aside>

		<!-- Main Content -->
		<div class="modern-content" id="modernContent">
			<?php $this->load->view($content);?>
		</div>
		<!-- About Modal -->
		<div class="modal fade" id="cms-info" tabindex="-1">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">Tentang</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal"></button>
					</div>
					<div class="modal-body">
						<table class="table table-borderless">
							<tbody>
								<tr>
									<td width="20%">Code Name</td>
									<td width="1px">:</td>
									<td><?=config_item('apps')?></td>
								</tr>
								<tr>
									<td>Author</td>
									<td>:</td>
									<td><a href="https://www.facebook.com/antonsofyan">Anton Sofyan</a></td>
								</tr>
								<tr>
									<td>Email</td>
									<td>:</td>
									<td><?=config_item('email')?></td>
								</tr>
								<tr>
									<td>Version</td>
									<td>:</td>
									<td><?=config_item('version')?></td>
								</tr>
								<tr>
									<td>Link</td>
									<td>:</td>
									<td><a href="<?=config_item('website')?>">sekolahku.web.id</a></td>
								</tr>
								<tr>
									<td>Copyright</td>
									<td>:</td>
									<td>&copy; 2014-<?=date('Y')?></td>
								</tr>
							</tbody>
						</table>
						<div class="mt-4">
							<p><strong>SYARAT DAN KETENTUAN :</strong></p>
							<ol>
								<li>Tidak diperkenankan memperjualbelikan CMS ini tanpa seizin dari <a href="https://www.facebook.com/antonsofyan">Pengembang CMS Sekolahku</a>.</li>
								<li>Tidak diperkenankan membuat Aplikasi turunan dari CMS ini dengan nama baru.</li>
								<li>Tidak diperkenankan menghapus kode sumber aplikasi yang berada di bagian footer CMS.</li>
								<li>Tidak diperkenankan menyertakan link komersil seperti Layanan Hosting maupun domain yang menguntungkan sepihak.</li>
							</ol>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Footer -->
		<footer class="bg-light border-top py-3 mt-5">
			<div class="container-fluid">
				<div class="row align-items-center">
					<div class="col-md-6">
						<p class="mb-0 text-muted">Copyright &copy; <?=date('Y');?> <?=__session('school_name')?>. All rights reserved.</p>
					</div>
					<div class="col-md-6 text-end">
						<p class="mb-0 text-muted">Powered by <a href="<?=$this->config->item('website');?>" target="_blank"><?=$this->config->item('apps');?> <?=$this->config->item('version');?></a></p>
					</div>
				</div>
			</div>
		</footer>
	</div>

	<!-- Bootstrap 5 JS Bundle -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
	<!-- Legacy JS for functionality -->
	<script src="<?=base_url('assets/plugins/shim.js?v=20210227');?>"></script>
	<script src="<?=base_url('assets/plugins/xlsx.full.min.js?v=20210227');?>"></script>
	<script src="<?=base_url('assets/plugins/Blob.js?v=20210227');?>"></script>
	<script src="<?=base_url('assets/plugins/FileSaver.js?v=20210227');?>"></script>
	<script src="<?=base_url('assets/js/backend.min.js?v=20210227');?>"></script>
	
	<!-- Modern sidebar toggle script -->
	<script>
		function toggleSidebar() {
			const sidebar = document.getElementById('modernSidebar');
			const content = document.getElementById('modernContent');
			
			if (window.innerWidth <= 768) {
				sidebar.classList.toggle('show');
			} else {
				sidebar.classList.toggle('collapsed');
				content.classList.toggle('expanded');
			}
		}

		// Close sidebar on mobile when clicking outside
		document.addEventListener('click', function(e) {
			if (window.innerWidth <= 768) {
				const sidebar = document.getElementById('modernSidebar');
				const toggle = document.querySelector('.sidebar-toggle');
				
				if (!sidebar.contains(e.target) && !toggle.contains(e.target)) {
					sidebar.classList.remove('show');
				}
			}
		});

		// Handle window resize
		window.addEventListener('resize', function() {
			const sidebar = document.getElementById('modernSidebar');
			const content = document.getElementById('modernContent');
			
			if (window.innerWidth > 768) {
				sidebar.classList.remove('show');
				sidebar.classList.remove('collapsed');
				content.classList.remove('expanded');
			}
		});
	</script>
</body>
</html>
