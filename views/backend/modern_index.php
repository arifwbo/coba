<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<!DOCTYPE html>
<html lang="id">
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
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="icon" href="<?=base_url('media_library/images/'.__session('favicon'));?>">
	
	<!-- Bootstrap 5 CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
	
	<!-- Bootstrap Icons -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css" rel="stylesheet">
	
	<!-- Modern Theme CSS -->
	<?=link_tag('assets/css/modern-theme.css');?>
	
	<!-- Legacy CSS for compatibility -->
	<?=link_tag('assets/plugins/toastr/toastr.css');?>
	<?=link_tag('assets/plugins/datetimepicker/datetimepicker.css');?>
	<?=link_tag('assets/plugins/select2/select2.css');?>
	<?=link_tag('assets/plugins/jquery.tagsinput/jquery.tagsinput.min.css');?>
	<?=link_tag('assets/css/loading.css');?>
	
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
	
	<!-- Legacy JS for compatibility -->
	<script src="<?=base_url('assets/plugins/shim.js?v=20210227');?>"></script>
	<script src="<?=base_url('assets/plugins/xlsx.full.min.js?v=20210227');?>"></script>
	<script src="<?=base_url('assets/plugins/Blob.js?v=20210227');?>"></script>
	<script src="<?=base_url('assets/plugins/FileSaver.js?v=20210227');?>"></script>
	<script src="<?=base_url('assets/js/backend.min.js?v=20210227');?>"></script>
</head>

<body class="modern-wrapper" data-theme="light">
	<noscript>You need to enable javaScript to run this app</noscript>
	
	<!-- Modern Header -->
	<header class="modern-header">
		<div class="header-left">
			<button class="sidebar-toggle" id="sidebarToggle" type="button">
				<i class="bi bi-list"></i>
			</button>
			<a href="<?=site_url('dashboard');?>" class="modern-logo">
				<i class="bi bi-gear-fill"></i>
				<span class="d-none d-md-inline"><strong>CONTROL</strong> PANEL</span>
			</a>
		</div>
		
		<div class="header-right">
			<nav class="modern-nav">
				<div class="modern-dropdown">
					<a href="#" class="modern-nav-link">
						<i class="bi bi-question-circle"></i>
						<span class="d-none d-lg-inline">Bantuan</span>
						<i class="bi bi-chevron-down"></i>
					</a>
					<div class="modern-dropdown-menu">
						<a href="https://www.sekolahku.web.id" target="_blank" class="modern-dropdown-item">
							<i class="bi bi-globe"></i> Situs Resmi
						</a>
						<a href="https://www.facebook.com/groups/cmssekolahku" target="_blank" class="modern-dropdown-item">
							<i class="bi bi-facebook"></i> Forum Diskusi
						</a>
						<a href="#" data-bs-toggle="modal" data-bs-target="#cmsInfoModal" class="modern-dropdown-item">
							<i class="bi bi-info-circle"></i> Tentang
						</a>
					</div>
				</div>
				
				<?php if (__session('user_type') === 'super_user' || __session('user_type') === 'administrator') { ?>
					<a href="<?=site_url('profile');?>" class="modern-nav-link <?=isset($user_profile) ? 'active' : '';?>">
						<i class="bi bi-person-circle"></i>
						<span class="d-none d-lg-inline">Profil</span>
					</a>
				<?php } ?>
				
				<a href="<?=site_url('change_password');?>" class="modern-nav-link <?=isset($change_password) ? 'active' : '';?>">
					<i class="bi bi-key"></i>
					<span class="d-none d-lg-inline">Kata Sandi</span>
				</a>
				
				<button class="dark-mode-toggle" id="darkModeToggle" type="button" title="Toggle Dark Mode">
					<i class="bi bi-moon-fill"></i>
				</button>
				
				<a href="<?=site_url('logout');?>" class="modern-nav-link text-danger">
					<i class="bi bi-power"></i>
					<span class="d-none d-lg-inline">Keluar</span>
				</a>
			</nav>
		</div>
	</header>

	<!-- Modern Sidebar -->
	<aside class="modern-sidebar" id="modernSidebar">
		<?php $this->load->view('backend/modern_sidebar');?>
	</aside>

	<!-- Main Content -->
	<main class="modern-content" id="modernContent">
		<?php $this->load->view($content);?>
	</main>

	<!-- Modern Footer -->
	<footer class="modern-footer" id="modernFooter">
		<div class="d-flex justify-content-between align-items-center">
			<div>
				<p class="mb-0">Copyright &copy; <?=date('Y');?> <?=__session('school_name')?>. All rights reserved.</p>
			</div>
			<div class="d-none d-md-block">
				<p class="mb-0">Powered by <a href="<?=$this->config->item('website');?>" target="_blank" class="text-decoration-none"><?=$this->config->item('apps');?> <?=$this->config->item('version');?></a></p>
			</div>
		</div>
	</footer>

	<!-- CMS Info Modal -->
	<div class="modal fade" id="cmsInfoModal" tabindex="-1" aria-labelledby="cmsInfoModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="cmsInfoModalLabel">Tentang CMS Sekolahku</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<div class="table-responsive">
						<table class="table table-borderless">
							<tbody>
								<tr>
									<td width="20%" class="fw-semibold">Code Name</td>
									<td width="1px">:</td>
									<td><?=config_item('apps')?></td>
								</tr>
								<tr>
									<td class="fw-semibold">Author</td>
									<td>:</td>
									<td><a href="https://www.facebook.com/antonsofyan" class="text-decoration-none">Anton Sofyan</a></td>
								</tr>
								<tr>
									<td class="fw-semibold">Email</td>
									<td>:</td>
									<td><?=config_item('email')?></td>
								</tr>
								<tr>
									<td class="fw-semibold">Version</td>
									<td>:</td>
									<td><?=config_item('version')?></td>
								</tr>
								<tr>
									<td class="fw-semibold">Link</td>
									<td>:</td>
									<td><a href="<?=config_item('website')?>" class="text-decoration-none">sekolahku.web.id</a></td>
								</tr>
								<tr>
									<td class="fw-semibold">Copyright</td>
									<td>:</td>
									<td>&copy; 2014-<?=date('Y')?></td>
								</tr>
							</tbody>
						</table>
					</div>
					
					<div class="alert alert-info mt-4">
						<h6 class="alert-heading"><i class="bi bi-info-circle"></i> Syarat dan Ketentuan:</h6>
						<ol class="mb-0">
							<li>Tidak diperkenankan memperjualbelikan CMS ini tanpa seizin dari <a href="https://www.facebook.com/antonsofyan" class="text-decoration-none">Pengembang CMS Sekolahku</a>.</li>
							<li>Tidak diperkenankan membuat Aplikasi turunan dari CMS ini dengan nama baru.</li>
							<li>Tidak diperkenankan menghapus kode sumber aplikasi yang berada di bagian footer CMS.</li>
							<li>Tidak diperkenankan menyertakan link komersil seperti Layanan Hosting maupun domain yang menguntungkan sepihak.</li>
						</ol>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Bootstrap 5 JS -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

	<!-- Modern Theme JavaScript -->
	<script>
		// Dark Mode Toggle
		const darkModeToggle = document.getElementById('darkModeToggle');
		const body = document.body;
		const icon = darkModeToggle.querySelector('i');
		
		// Check for saved dark mode preference
		const savedTheme = localStorage.getItem('theme') || 'light';
		body.setAttribute('data-theme', savedTheme);
		updateDarkModeIcon(savedTheme);
		
		darkModeToggle.addEventListener('click', () => {
			const currentTheme = body.getAttribute('data-theme');
			const newTheme = currentTheme === 'dark' ? 'light' : 'dark';
			
			body.setAttribute('data-theme', newTheme);
			localStorage.setItem('theme', newTheme);
			updateDarkModeIcon(newTheme);
		});
		
		function updateDarkModeIcon(theme) {
			if (theme === 'dark') {
				icon.className = 'bi bi-sun-fill';
			} else {
				icon.className = 'bi bi-moon-fill';
			}
		}
		
		// Sidebar Toggle
		const sidebarToggle = document.getElementById('sidebarToggle');
		const modernSidebar = document.getElementById('modernSidebar');
		const modernContent = document.getElementById('modernContent');
		const modernFooter = document.getElementById('modernFooter');
		
		sidebarToggle.addEventListener('click', () => {
			if (window.innerWidth <= 1024) {
				modernSidebar.classList.toggle('open');
			} else {
				modernSidebar.classList.toggle('collapsed');
				modernContent.classList.toggle('expanded');
				modernFooter.classList.toggle('expanded');
			}
		});
		
		// Close sidebar on mobile when clicking outside
		document.addEventListener('click', (e) => {
			if (window.innerWidth <= 1024 && 
				!modernSidebar.contains(e.target) && 
				!sidebarToggle.contains(e.target) &&
				modernSidebar.classList.contains('open')) {
				modernSidebar.classList.remove('open');
			}
		});
		
		// Handle window resize
		window.addEventListener('resize', () => {
			if (window.innerWidth > 1024) {
				modernSidebar.classList.remove('open');
			}
		});
		
		// Legacy compatibility for existing JavaScript
		if (typeof _H !== 'undefined' && _H.SidebarCollapse) {
			const originalSidebarCollapse = _H.SidebarCollapse;
			_H.SidebarCollapse = function() {
				sidebarToggle.click();
				return originalSidebarCollapse.apply(this, arguments);
			};
		}
	</script>

	<!-- Return to top button -->
	<a href="javascript:" id="return-to-top" style="position: fixed; bottom: 20px; right: 20px; background: var(--primary-color); color: white; padding: 12px; border-radius: 50%; text-decoration: none; box-shadow: var(--shadow-md); display: none; z-index: 1000;">
		<i class="bi bi-arrow-up"></i>
	</a>

	<script>
		// Return to top functionality
		const returnToTop = document.getElementById('return-to-top');
		
		window.addEventListener('scroll', () => {
			if (window.pageYOffset > 300) {
				returnToTop.style.display = 'block';
			} else {
				returnToTop.style.display = 'none';
			}
		});
		
		returnToTop.addEventListener('click', () => {
			window.scrollTo({ top: 0, behavior: 'smooth' });
		});
	</script>
</body>
</html>