<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<div class="sidebar-content">
	<ul class="sidebar-menu">

		<?php if (in_array('dashboard', __session('user_privileges'))) { ?>
			<li class="<?=isset($dashboard) ? 'active':'';?>">
				<a href="<?=site_url('dashboard');?>">
					<i class="bi bi-speedometer2"></i>
					<span>Beranda</span>
				</a>
			</li>
		<?php } ?>

		<li>
			<a href="<?=base_url();?>" target="_blank">
				<i class="bi bi-rocket-takeoff"></i>
				<span>Lihat Situs</span>
			</a>
		</li>

		<!-- Employee Menu -->
		<?php if (__session('user_type') === 'employee' && in_array('employee_profile', __session('user_privileges'))) { ?>
			<li class="<?=isset($employee_profile) ? 'active':'';?>">
				<a href="<?=site_url('employee_profile');?>">
					<i class="bi bi-person"></i>
					<span>Profil</span>
				</a>
			</li>
			<li class="<?=isset($posts) ? 'active':'';?>">
				<a href="<?=site_url('posts');?>">
					<i class="bi bi-pencil-square"></i>
					<span>Tulisan</span>
				</a>
			</li>
		<?php } ?>

		<!-- Student Menu -->
		<?php if (__session('user_type') === 'student' && in_array('student_profile', __session('user_privileges'))) { ?>
			<li class="<?=isset($student_profile) ? 'active':'';?>">
				<a href="<?=site_url('student_profile');?>">
					<i class="bi bi-person-badge"></i>
					<span>Profil</span>
				</a>
			</li>
			<li class="<?=isset($achievements) ? 'active':'';?>">
				<a href="<?=site_url('achievements');?>">
					<i class="bi bi-trophy"></i>
					<span>Prestasi</span>
				</a>
			</li>
			<li class="<?=isset($scholarships) ? 'active':'';?>">
				<a href="<?=site_url('scholarships');?>">
					<i class="bi bi-currency-dollar"></i>
					<span>Beasiswa</span>
				</a>
			</li>
			<li class="<?=isset($posts) ? 'active':'';?>">
				<a href="<?=site_url('posts');?>">
					<i class="bi bi-pencil-square"></i>
					<span>Tulisan</span>
				</a>
			</li>
		<?php } ?>

		<!-- Administrator Menu -->
		<?php if (__session('user_type') === 'super_user' || __session('user_type') === 'administrator') { ?>
			<?php if (in_array('blog', __session('user_privileges'))) { ?>
				<li class="nav-section <?=isset($blog) ? 'active':'';?>">
					<a href="#" class="nav-toggle" data-bs-toggle="collapse" data-bs-target="#blogSubmenu">
						<i class="bi bi-journal-text"></i>
						<span>Blog</span>
						<i class="bi bi-chevron-down ms-auto"></i>
					</a>
					<ul class="submenu collapse <?=isset($blog) ? 'show':'';?>" id="blogSubmenu">
						<li class="<?=isset($image_sliders) ? 'active':'';?>">
							<a href="<?=site_url('blog/image_sliders');?>">
								<i class="bi bi-images"></i>
								<span>Gambar Slide</span>
							</a>
						</li>
						<li class="<?=isset($messages) ? 'active':'';?>">
							<a href="<?=site_url('blog/messages');?>">
								<i class="bi bi-envelope"></i>
								<span>Pesan Masuk</span>
							</a>
						</li>
						<li class="<?=isset($links) ? 'active':'';?>">
							<a href="<?=site_url('blog/links');?>">
								<i class="bi bi-link-45deg"></i>
								<span>Tautan</span>
							</a>
						</li>
						<li class="<?=isset($pages) ? 'active':'';?>">
							<a href="<?=site_url('blog/pages');?>">
								<i class="bi bi-file-earmark-text"></i>
								<span>Halaman</span>
							</a>
						</li>
						<li class="nav-section <?=isset($posts) ? 'active':'';?>">
							<a href="#" class="nav-toggle" data-bs-toggle="collapse" data-bs-target="#postsSubmenu">
								<i class="bi bi-file-post"></i>
								<span>Tulisan</span>
								<i class="bi bi-chevron-down ms-auto"></i>
							</a>
							<ul class="submenu collapse <?=isset($posts) ? 'show':'';?>" id="postsSubmenu">
								<li class="<?=isset($all_posts) ? 'active':'';?>">
									<a href="<?=site_url('blog/posts');?>">
										<i class="bi bi-list-ul"></i>
										<span>Semua Tulisan</span>
									</a>
								</li>
								<li class="<?=isset($post_create) ? 'active':'';?>">
									<a href="<?=site_url('blog/posts/create');?>">
										<i class="bi bi-plus-circle"></i>
										<span>Tambah Baru</span>
									</a>
								</li>
								<li class="<?=isset($post_categories) ? 'active':'';?>">
									<a href="<?=site_url('blog/post_categories');?>">
										<i class="bi bi-folder"></i>
										<span>Kategori Tulisan</span>
									</a>
								</li>
								<li class="<?=isset($post_comments) ? 'active':'';?>">
									<a href="<?=site_url('blog/post_comments');?>">
										<i class="bi bi-chat-dots"></i>
										<span>Komentar</span>
									</a>
								</li>
								<li class="<?=isset($tags) ? 'active':'';?>">
									<a href="<?=site_url('blog/tags');?>">
										<i class="bi bi-tags"></i>
										<span>Tags</span>
									</a>
								</li>
							</ul>
						</li>
						<li class="<?=isset($quotes) ? 'active':'';?>">
							<a href="<?=site_url('blog/quotes');?>">
								<i class="bi bi-quote"></i>
								<span>Kutipan</span>
							</a>
						</li>
						<li class="<?=isset($opening_speech) ? 'active':'';?>">
							<a href="<?=site_url('blog/opening_speech');?>">
								<i class="bi bi-megaphone"></i>
								<span>Sambutan <?=__session('_headmaster')?></span>
							</a>
						</li>
						<li class="<?=isset($subscribers) ? 'active':'';?>">
							<a href="<?=site_url('blog/subscribers');?>">
								<i class="bi bi-people"></i>
								<span>Subscriber</span>
							</a>
						</li>
					</ul>
				</li>
			<?php } ?>
		<?php } ?>

		<?php if (__session('user_type') === 'super_user' || __session('user_type') === 'administrator') { ?>
			<?php if (in_array('reference', __session('user_privileges'))) { ?>
				<li class="nav-section <?=isset($reference) ? 'active':'';?>">
					<a href="#" class="nav-toggle" data-bs-toggle="collapse" data-bs-target="#referenceSubmenu">
						<i class="bi bi-database"></i>
						<span>Data Induk</span>
						<i class="bi bi-chevron-down ms-auto"></i>
					</a>
					<ul class="submenu collapse <?=isset($reference) ? 'show':'';?>" id="referenceSubmenu">
						<li class="<?=isset($special_needs) ? 'active':'';?>">
							<a href="<?=site_url('reference/special_needs');?>">
								<i class="bi bi-heart"></i>
								<span>Kebutuhan Khusus</span>
							</a>
						</li>
						<li class="<?=isset($educations) ? 'active':'';?>">
							<a href="<?=site_url('reference/educations');?>">
								<i class="bi bi-mortarboard"></i>
								<span>Pendidikan</span>
							</a>
						</li>
					</ul>
				</li>
			<?php } ?>
		<?php } ?>

		<?php if (__session('user_type') === 'super_user' || __session('user_type') === 'administrator') { ?>
			<?php if (in_array('academic', __session('user_privileges'))) { ?>
				<li class="nav-section <?=isset($academic) ? 'active':'';?>">
					<a href="#" class="nav-toggle" data-bs-toggle="collapse" data-bs-target="#academicSubmenu">
						<i class="bi bi-book"></i>
						<span>Akademik</span>
						<i class="bi bi-chevron-down ms-auto"></i>
					</a>
					<ul class="submenu collapse <?=isset($academic) ? 'show':'';?>" id="academicSubmenu">
						<li class="nav-section <?=isset($academic_references) ? 'active':'';?>">
							<a href="#" class="nav-toggle" data-bs-toggle="collapse" data-bs-target="#academicReferencesSubmenu">
								<i class="bi bi-collection"></i>
								<span>Data Induk</span>
								<i class="bi bi-chevron-down ms-auto"></i>
							</a>
							<ul class="submenu collapse <?=isset($academic_references) ? 'show':'';?>" id="academicReferencesSubmenu">
								<li class="<?=isset($alumni) ? 'active':'';?>">
									<a href="<?=site_url('academic/alumni');?>">
										<i class="bi bi-graduation-cap"></i>
										<span>Alumni</span>
									</a>
								</li>
								<li class="<?=isset($majors) ? 'active':'';?>">
									<a href="<?=site_url('academic/majors');?>">
										<i class="bi bi-diagram-3"></i>
										<span><?=__session('_major')?></span>
									</a>
								</li>
								<li class="<?=isset($class_groups) ? 'active':'';?>">
									<a href="<?=site_url('academic/class_groups');?>">
										<i class="bi bi-grid-3x3-gap"></i>
										<span>Kelas</span>
									</a>
								</li>
								<li class="<?=isset($students) ? 'active':'';?>">
									<a href="<?=site_url('academic/students');?>">
										<i class="bi bi-person-lines-fill"></i>
										<span><?=__session('_student')?></span>
									</a>
								</li>
								<li class="<?=isset($academic_years) ? 'active':'';?>">
									<a href="<?=site_url('academic/academic_years');?>">
										<i class="bi bi-calendar-range"></i>
										<span><?=__session('_academic_year')?></span>
									</a>
								</li>
							</ul>
						</li>
						<li class="<?=isset($student_groups) ? 'active':'';?>">
							<a href="<?=site_url('academic/student_groups');?>">
								<i class="bi bi-people-fill"></i>
								<span>Rombongan Belajar</span>
							</a>
						</li>
					</ul>
				</li>
			<?php } ?>
		<?php } ?>

		<?php if (__session('user_type') === 'super_user' || __session('user_type') === 'administrator') { ?>
			<?php if (in_array('employees', __session('user_privileges'))) { ?>
				<li class="nav-section <?=isset($employees) ? 'active':'';?>">
					<a href="#" class="nav-toggle" data-bs-toggle="collapse" data-bs-target="#employeesSubmenu">
						<i class="bi bi-person-workspace"></i>
						<span><?=strtoupper(__session('_employee'))?></span>
						<i class="bi bi-chevron-down ms-auto"></i>
					</a>
					<ul class="submenu collapse <?=isset($employees) ? 'show':'';?>" id="employeesSubmenu">
						<li class="<?=isset($all_employees) ? 'active':'';?>">
							<a href="<?=site_url('employees/employees');?>">
								<i class="bi bi-people"></i>
								<span>Semua <?=__session('_employee')?></span>
							</a>
						</li>
						<li class="<?=isset($import_employees) ? 'active':'';?>">
							<a href="<?=site_url('employees/import');?>">
								<i class="bi bi-upload"></i>
								<span>Import <?=__session('_employee')?></span>
							</a>
						</li>
					</ul>
				</li>
			<?php } ?>
		<?php } ?>

		<?php if (__session('user_type') === 'super_user' || __session('user_type') === 'administrator') { ?>
			<?php if (in_array('admission', __session('user_privileges'))) { ?>
				<li class="nav-section <?=isset($admission) ? 'active':'';?>">
					<a href="#" class="nav-toggle" data-bs-toggle="collapse" data-bs-target="#admissionSubmenu">
						<i class="bi bi-door-open"></i>
						<span><?=__session('school_level') >= 5 ? 'PMB' : 'PPDB'?> <?=NULL !== __session('admission_year') ? __session('admission_year') : date('Y');?></span>
						<i class="bi bi-chevron-down ms-auto"></i>
					</a>
					<ul class="submenu collapse <?=isset($admission) ? 'show':'';?>" id="admissionSubmenu">
						<li class="<?=isset($admission_settings) ? 'active':'';?>">
							<a href="<?=site_url('admission/admission_settings');?>">
								<i class="bi bi-gear"></i>
								<span>Pengaturan</span>
							</a>
						</li>
						<li class="<?=isset($registrants) ? 'active':'';?>">
							<a href="<?=site_url('admission/registrants');?>">
								<i class="bi bi-person-plus"></i>
								<span>Calon <?=__session('_student')?> Baru</span>
							</a>
						</li>
					</ul>
				</li>
			<?php } ?>
		<?php } ?>

		<?php if (__session('user_type') === 'super_user' || __session('user_type') === 'administrator') { ?>
			<?php if (in_array('plugins', __session('user_privileges'))) { ?>
				<li class="nav-section <?=isset($plugins) ? 'active':'';?>">
					<a href="#" class="nav-toggle" data-bs-toggle="collapse" data-bs-target="#pluginsSubmenu">
						<i class="bi bi-plugin"></i>
						<span>Plugins</span>
						<i class="bi bi-chevron-down ms-auto"></i>
					</a>
					<ul class="submenu collapse <?=isset($plugins) ? 'show':'';?>" id="pluginsSubmenu">
						<li class="<?=isset($banners) ? 'active':'';?>">
							<a href="<?=site_url('plugins/banners');?>">
								<i class="bi bi-badge-ad"></i>
								<span>Iklan</span>
							</a>
						</li>
					</ul>
				</li>
			<?php } ?>
		<?php } ?>

		<?php if (__session('user_type') === 'super_user' || __session('user_type') === 'administrator') { ?>
			<?php if (in_array('media', __session('user_privileges'))) { ?>
				<li class="nav-section <?=isset($media) ? 'active':'';?>">
					<a href="#" class="nav-toggle" data-bs-toggle="collapse" data-bs-target="#mediaSubmenu">
						<i class="bi bi-collection-play"></i>
						<span>Media</span>
						<i class="bi bi-chevron-down ms-auto"></i>
					</a>
					<ul class="submenu collapse <?=isset($media) ? 'show':'';?>" id="mediaSubmenu">
						<li class="<?=isset($files) ? 'active':'';?>">
							<a href="<?=site_url('media/files');?>">
								<i class="bi bi-file-earmark"></i>
								<span>File</span>
							</a>
						</li>
						<li class="<?=isset($albums) ? 'active':'';?>">
							<a href="<?=site_url('media/albums');?>">
								<i class="bi bi-image"></i>
								<span>Album Foto</span>
							</a>
						</li>
						<li class="<?=isset($videos) ? 'active':'';?>">
							<a href="<?=site_url('media/videos');?>">
								<i class="bi bi-play-circle"></i>
								<span>Video</span>
							</a>
						</li>
					</ul>
				</li>
			<?php } ?>
		<?php } ?>

		<?php if (__session('user_type') === 'super_user' || __session('user_type') === 'administrator') { ?>
			<?php if (in_array('appearance', __session('user_privileges'))) { ?>
				<li class="nav-section <?=isset($appearance) ? 'active':'';?>">
					<a href="#" class="nav-toggle" data-bs-toggle="collapse" data-bs-target="#appearanceSubmenu">
						<i class="bi bi-palette"></i>
						<span>Tampilan</span>
						<i class="bi bi-chevron-down ms-auto"></i>
					</a>
					<ul class="submenu collapse <?=isset($appearance) ? 'show':'';?>" id="appearanceSubmenu">
						<li class="<?=isset($menus) ? 'active':'';?>">
							<a href="<?=site_url('appearance/menus');?>">
								<i class="bi bi-list"></i>
								<span>Menu</span>
							</a>
						</li>
						<li class="<?=isset($themes) ? 'active':'';?>">
							<a href="<?=site_url('appearance/themes');?>">
								<i class="bi bi-brush"></i>
								<span>Tema</span>
							</a>
						</li>
					</ul>
				</li>
			<?php } ?>
		<?php } ?>

		<?php if (__session('user_type') === 'super_user' || __session('user_type') === 'administrator') { ?>
			<?php if (in_array('users', __session('user_privileges'))) { ?>
				<li class="nav-section <?=isset($users) ? 'active':'';?>">
					<a href="#" class="nav-toggle" data-bs-toggle="collapse" data-bs-target="#usersSubmenu">
						<i class="bi bi-people-fill"></i>
						<span>Pengguna</span>
						<i class="bi bi-chevron-down ms-auto"></i>
					</a>
					<ul class="submenu collapse <?=isset($users) ? 'show':'';?>" id="usersSubmenu">
						<?php if (__session('user_type') == 'super_user') { ?>
							<li class="<?=isset($administrator) ? 'active':'';?>">
								<a href="<?=site_url('users/administrator');?>">
									<i class="bi bi-shield-check"></i>
									<span>Administrator</span>
								</a>
							</li>
						<?php } ?>
						<li class="<?=isset($user_students) ? 'active':'';?>">
							<a href="<?=site_url('users/students');?>">
								<i class="bi bi-person-lines-fill"></i>
								<span><?=__session('_student')?></span>
							</a>
						</li>
						<li class="<?=isset($user_employees) ? 'active':'';?>">
							<a href="<?=site_url('users/employees');?>">
								<i class="bi bi-person-workspace"></i>
								<span><?=__session('_employee')?></span>
							</a>
						</li>
					</ul>
				</li>
			<?php } ?>
		<?php } ?>

		<?php if (__session('user_type') === 'super_user' || __session('user_type') === 'administrator') { ?>
			<?php if (in_array('settings', __session('user_privileges'))) { ?>
				<li class="nav-section <?=isset($settings) ? 'active':'';?>">
					<a href="#" class="nav-toggle" data-bs-toggle="collapse" data-bs-target="#settingsSubmenu">
						<i class="bi bi-wrench"></i>
						<span>Pengaturan</span>
						<i class="bi bi-chevron-down ms-auto"></i>
					</a>
					<ul class="submenu collapse <?=isset($settings) ? 'show':'';?>" id="settingsSubmenu">
						<li class="<?=isset($school_profile_settings) ? 'active':'';?>">
							<a href="<?=site_url('settings/school_profile');?>">
								<i class="bi bi-building"></i>
								<span>Profil <?=__session('school_level') >= 5 ? 'Kampus' : 'Sekolah'?></span>
							</a>
						</li>
						<li class="<?=isset($general_settings) ? 'active':'';?>">
							<a href="<?=site_url('settings/general');?>">
								<i class="bi bi-gear"></i>
								<span>Umum</span>
							</a>
						</li>
					</ul>
				</li>
			<?php } ?>
		<?php } ?>

		<?php if (__session('user_type') === 'super_user' || __session('user_type') === 'administrator') { ?>
			<?php if (in_array('maintenance', __session('user_privileges'))) { ?>
				<li class="nav-section">
					<a href="#" class="nav-toggle" data-bs-toggle="collapse" data-bs-target="#maintenanceSubmenu">
						<i class="bi bi-tools"></i>
						<span>Pemeliharaan</span>
						<i class="bi bi-chevron-down ms-auto"></i>
					</a>
					<ul class="submenu collapse" id="maintenanceSubmenu">
						<li>
							<a href="<?=site_url('maintenance/backup_database');?>">
								<i class="bi bi-database-down"></i>
								<span>Backup Database</span>
							</a>
						</li>
						<li>
							<a href="<?=site_url('maintenance/backup_app');?>">
								<i class="bi bi-download"></i>
								<span>Backup App</span>
							</a>
						</li>
					</ul>
				</li>
			<?php } ?>
		<?php } ?>

	</ul>
</div>

<style>
/* Additional sidebar styles for collapsible menus */
.nav-section > a {
	cursor: pointer;
}

.nav-section .nav-toggle {
	display: flex;
	align-items: center;
	justify-content: space-between;
	width: 100%;
}

.nav-section .nav-toggle i.ms-auto {
	transition: transform 0.2s ease;
}

.nav-section .nav-toggle[aria-expanded="true"] i.ms-auto {
	transform: rotate(180deg);
}

.submenu {
	background-color: var(--bg-secondary);
	border-left: 2px solid var(--primary-color);
	margin-left: 1rem;
}

.submenu .nav-section {
	margin-left: 0;
}

.submenu .submenu {
	margin-left: 0.5rem;
	border-left: 1px solid var(--border-color);
}
</style>