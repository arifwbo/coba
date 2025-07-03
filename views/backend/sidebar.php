<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<nav class="sidebar-menu">
	<ul class="list-unstyled">
		
		<?php if (in_array('dashboard', __session('user_privileges'))) { ?>
			<li class="menu-item">
				<a href="<?=site_url('dashboard');?>" class="menu-link <?=isset($dashboard) ? 'active':'';?>">
					<i class="fas fa-home"></i> <span>BERANDA</span>
				</a>
			</li>
		<?php } ?>

		<li class="menu-item">
			<a href="<?=base_url();?>" target="_blank" class="menu-link">
				<i class="fas fa-rocket"></i> <span>LIHAT SITUS</span>
			</a>
		</li>

		<!-- Employee Menu -->
		<?php if (__session('user_type') === 'employee' && in_array('employee_profile', __session('user_privileges'))) { ?>
			<p class="menu-label">PEGAWAI</p>
			<li class="menu-item">
				<a href="<?=site_url('employee_profile');?>" class="menu-link <?=isset($employee_profile) ? 'active':'';?>">
					<i class="fas fa-user"></i> <span>PROFIL</span>
				</a>
			</li>
			<li class="menu-item">
				<a href="<?=site_url('posts');?>" class="menu-link <?=isset($posts) ? 'active':'';?>">
					<i class="fas fa-edit"></i> <span>TULISAN</span>
				</a>
			</li>
		<?php } ?>

		<!-- Student Menu -->
		<?php if (__session('user_type') === 'student' && in_array('student_profile', __session('user_privileges'))) { ?>
			<p class="menu-label">SISWA</p>
			<li class="menu-item">
				<a href="<?=site_url('student_profile');?>" class="menu-link <?=isset($student_profile) ? 'active':'';?>">
					<i class="fas fa-user-edit"></i> <span>PROFIL</span>
				</a>
			</li>
			<li class="menu-item">
				<a href="<?=site_url('achievements');?>" class="menu-link <?=isset($achievements) ? 'active':'';?>">
					<i class="fas fa-trophy"></i> <span>PRESTASI</span>
				</a>
			</li>
			<li class="menu-item">
				<a href="<?=site_url('scholarships');?>" class="menu-link <?=isset($scholarships) ? 'active':'';?>">
					<i class="fas fa-coins"></i> <span>BEASISWA</span>
				</a>
			</li>
			<li class="menu-item">
				<a href="<?=site_url('posts');?>" class="menu-link <?=isset($posts) ? 'active':'';?>">
					<i class="fas fa-edit"></i> <span>TULISAN</span>
				</a>
			</li>
		<?php } ?>

		<!-- Administrator Menu -->
		<?php if (__session('user_type') === 'super_user' || __session('user_type') === 'administrator') { ?>
			<p class="menu-label">KONTEN</p>
			<?php if (in_array('blog', __session('user_privileges'))) { ?>
				<li class="menu-item">
					<a href="#" class="menu-link" data-bs-toggle="collapse" data-bs-target="#blogMenu">
						<i class="fas fa-blog"></i> <span>BLOG</span> <i class="fas fa-chevron-down ms-auto"></i>
					</a>
				</li>
				<div class="collapse <?=isset($blog) ? 'show':'';?>" id="blogMenu">
					<ul class="submenu list-unstyled">
						<li><a href="<?=site_url('blog/image_sliders');?>" class="menu-link <?=isset($image_sliders) ? 'active':'';?>">
							<i class="fas fa-images"></i> Gambar Slide</a></li>
						<li><a href="<?=site_url('blog/messages');?>" class="menu-link <?=isset($messages) ? 'active':'';?>">
							<i class="fas fa-envelope"></i> Pesan Masuk</a></li>
						<li><a href="<?=site_url('blog/links');?>" class="menu-link <?=isset($links) ? 'active':'';?>">
							<i class="fas fa-link"></i> Tautan</a></li>
						<li><a href="<?=site_url('blog/pages');?>" class="menu-link <?=isset($pages) ? 'active':'';?>">
							<i class="fas fa-file"></i> Halaman</a></li>
						<li><a href="#" class="menu-link" data-bs-toggle="collapse" data-bs-target="#postsMenu">
							<i class="fas fa-edit"></i> Tulisan <i class="fas fa-chevron-down ms-auto"></i></a></li>
						<div class="collapse <?=isset($posts) ? 'show':'';?>" id="postsMenu">
							<ul class="submenu list-unstyled">
								<li><a href="<?=site_url('blog/posts');?>" class="menu-link <?=isset($all_posts) ? 'active':'';?>">
									<i class="fas fa-list"></i> Semua Tulisan</a></li>
								<li><a href="<?=site_url('blog/posts/create');?>" class="menu-link <?=isset($post_create) ? 'active':'';?>">
									<i class="fas fa-plus"></i> Tambah Baru</a></li>
								<li><a href="<?=site_url('blog/post_categories');?>" class="menu-link <?=isset($post_categories) ? 'active':'';?>">
									<i class="fas fa-tags"></i> Kategori Tulisan</a></li>
								<li><a href="<?=site_url('blog/post_comments');?>" class="menu-link <?=isset($post_comments) ? 'active':'';?>">
									<i class="fas fa-comments"></i> Komentar</a></li>
								<li><a href="<?=site_url('blog/tags');?>" class="menu-link <?=isset($tags) ? 'active':'';?>">
									<i class="fas fa-hashtag"></i> Tags</a></li>
							</ul>
						</div>
						<li><a href="<?=site_url('blog/quotes');?>" class="menu-link <?=isset($quotes) ? 'active':'';?>">
							<i class="fas fa-quote-right"></i> Kutipan</a></li>
						<li><a href="<?=site_url('blog/opening_speech');?>" class="menu-link <?=isset($opening_speech) ? 'active':'';?>">
							<i class="fas fa-microphone"></i> Sambutan <?=__session('_headmaster')?></a></li>
						<li><a href="<?=site_url('blog/subscribers');?>" class="menu-link <?=isset($subscribers) ? 'active':'';?>">
							<i class="fas fa-users"></i> Subscriber</a></li>
					</ul>
				</div>
			<?php } ?>

			<p class="menu-label">DATA</p>
			<?php if (in_array('reference', __session('user_privileges'))) { ?>
				<li class="menu-item">
					<a href="#" class="menu-link" data-bs-toggle="collapse" data-bs-target="#referenceMenu">
						<i class="fas fa-database"></i> <span>DATA INDUK</span> <i class="fas fa-chevron-down ms-auto"></i>
					</a>
				</li>
				<div class="collapse <?=isset($reference) ? 'show':'';?>" id="referenceMenu">
					<ul class="submenu list-unstyled">
						<li><a href="<?=site_url('reference/special_needs');?>" class="menu-link <?=isset($special_needs) ? 'active':'';?>">
							<i class="fas fa-heart"></i> Kebutuhan Khusus</a></li>
						<li><a href="<?=site_url('reference/educations');?>" class="menu-link <?=isset($educations) ? 'active':'';?>">
							<i class="fas fa-graduation-cap"></i> Pendidikan</a></li>
					</ul>
				</div>
			<?php } ?>
		<?php } ?>

		<p class="menu-label">AKUN</p>
		<?php if (__session('user_type') === 'super_user' || __session('user_type') === 'administrator') { ?>
			<li class="menu-item">
				<a href="<?=site_url('profile');?>" class="menu-link">
					<i class="fas fa-user-edit"></i> <span>UBAH PROFIL</span>
				</a>
			</li>
		<?php } ?>

		<li class="menu-item">
			<a href="<?=site_url('change_password');?>" class="menu-link">
				<i class="fas fa-key"></i> <span>UBAH KATA SANDI</span>
			</a>
		</li>

		<li class="menu-item">
			<a href="<?=site_url('logout');?>" class="menu-link text-danger">
				<i class="fas fa-sign-out-alt"></i> <span>KELUAR</span>
			</a>
		</li>
	</ul>
</nav>
