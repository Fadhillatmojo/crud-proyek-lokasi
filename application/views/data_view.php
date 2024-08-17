<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Fruits Admin</title>
	<!-- plugins:css -->
	<link rel="stylesheet" href="<?php echo base_url('assets/vendors/mdi/css/materialdesignicons.min.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/vendors/ti-icons/css/themify-icons.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/vendors/css/vendor.bundle.base.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/vendors/font-awesome/css/font-awesome.min.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/images/favicon.png'); ?>">
</head>

<body>
	<div class="container-scroller">
		<nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
			<div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
				<a class="navbar-brand brand-logo" href="../../index.html">Proyek Lokasi</a>
				<a class="navbar-brand brand-logo-mini" href="../../index.html">PL</a>
			</div>
			<div class="navbar-menu-wrapper d-flex align-items-stretch">
				<button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
					<span class="mdi mdi-menu"></span>
				</button>
				<div class="search-field d-none d-md-block">
					<form class="d-flex align-items-center h-100" action="#">
						<div class="input-group">
							<div class="input-group-prepend bg-transparent">
								<i class="input-group-text border-0 mdi mdi-magnify"></i>
							</div>
							<input type="text" class="form-control bg-transparent border-0" placeholder="Search Data">
						</div>
					</form>
				</div>
				<ul class="navbar-nav navbar-nav-right">
					<li class="nav-item nav-profile dropdown">
						<a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
							<div class="nav-profile-text">
								<p class="mb-1 text-black">Fadhill Atmojo</p>
							</div>
						</a>
						<div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
							<a class="dropdown-item" href="#">
								<i class="mdi mdi-cached me-2 text-success"></i> Activity Log </a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="#">
								<i class="mdi mdi-logout me-2 text-primary"></i> Signout </a>
						</div>
					</li>
					<li class="nav-item d-none d-lg-block full-screen-link">
						<a class="nav-link">
							<i class="mdi mdi-fullscreen" id="fullscreen-button"></i>
						</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
							<i class="mdi mdi-email-outline"></i>
							<span class="count-symbol bg-warning"></span>
						</a>
						<div class="dropdown-menu dropdown-menu-end navbar-dropdown preview-list" aria-labelledby="messageDropdown">
							<h6 class="p-3 mb-0">Messages</h6>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item preview-item">
								<div class="preview-thumbnail">
									<img src="../../assets/images/faces/face4.jpg" alt="image" class="profile-pic">
								</div>
								<div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
									<h6 class="preview-subject ellipsis mb-1 font-weight-normal">Mark send you a message</h6>
									<p class="text-gray mb-0"> 1 Minutes ago </p>
								</div>
							</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item preview-item">
								<div class="preview-thumbnail">
									<img src="../../assets/images/faces/face2.jpg" alt="image" class="profile-pic">
								</div>
								<div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
									<h6 class="preview-subject ellipsis mb-1 font-weight-normal">Cregh send you a message</h6>
									<p class="text-gray mb-0"> 15 Minutes ago </p>
								</div>
							</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item preview-item">
								<div class="preview-thumbnail">
									<img src="../../assets/images/faces/face3.jpg" alt="image" class="profile-pic">
								</div>
								<div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
									<h6 class="preview-subject ellipsis mb-1 font-weight-normal">Profile picture updated</h6>
									<p class="text-gray mb-0"> 18 Minutes ago </p>
								</div>
							</a>
							<div class="dropdown-divider"></div>
							<h6 class="p-3 mb-0 text-center">4 new messages</h6>
						</div>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-bs-toggle="dropdown">
							<i class="mdi mdi-bell-outline"></i>
							<span class="count-symbol bg-danger"></span>
						</a>
						<div class="dropdown-menu dropdown-menu-end navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
							<h6 class="p-3 mb-0">Notifications</h6>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item preview-item">
								<div class="preview-thumbnail">
									<div class="preview-icon bg-success">
										<i class="mdi mdi-calendar"></i>
									</div>
								</div>
								<div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
									<h6 class="preview-subject font-weight-normal mb-1">Event today</h6>
									<p class="text-gray ellipsis mb-0"> Just a reminder that you have an event today </p>
								</div>
							</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item preview-item">
								<div class="preview-thumbnail">
									<div class="preview-icon bg-warning">
										<i class="mdi mdi-cog"></i>
									</div>
								</div>
								<div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
									<h6 class="preview-subject font-weight-normal mb-1">Settings</h6>
									<p class="text-gray ellipsis mb-0"> Update dashboard </p>
								</div>
							</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item preview-item">
								<div class="preview-thumbnail">
									<div class="preview-icon bg-info">
										<i class="mdi mdi-link-variant"></i>
									</div>
								</div>
								<div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
									<h6 class="preview-subject font-weight-normal mb-1">Launch Admin</h6>
									<p class="text-gray ellipsis mb-0"> New admin wow! </p>
								</div>
							</a>
							<div class="dropdown-divider"></div>
							<h6 class="p-3 mb-0 text-center">See all notifications</h6>
						</div>
					</li>
					<li class="nav-item nav-logout d-none d-lg-block">
						<a class="nav-link" href="#">
							<i class="mdi mdi-power"></i>
						</a>
					</li>
					<li class="nav-item nav-settings d-none d-lg-block">
						<a class="nav-link" href="#">
							<i class="mdi mdi-format-line-spacing"></i>
						</a>
					</li>
				</ul>
				<button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
					<span class="mdi mdi-menu"></span>
				</button>
			</div>
		</nav>
		<!-- partial -->
		<div class="container-fluid page-body-wrapper">
			<nav class="sidebar sidebar-offcanvas" id="sidebar">
				<ul class="nav">
					<li class="nav-item nav-profile">
						<a href="#" class="nav-link">
							<div class="nav-profile-text d-flex flex-column">
								<span class="font-weight-bold mb-2">Fadhill Atmojo</span>
								<span class="text-secondary text-small">Software Developer</span>
							</div>
							<i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="/">
							<span class="menu-title">Proyek Lokasi</span>
							<i class="mdi mdi-home menu-icon"></i>
						</a>
					</li>
				</ul>
			</nav>
			<!-- partial -->
			<div class="main-panel">
				<div class="content-wrapper">
					<div class="page-header">
						<h3 class="page-title"> Data Proyek dan Lokasi </h3>
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item">All data</li>
							</ol>
						</nav>
					</div>
					<div class="row">
						<div class="col-lg-12 grid-margin stretch-card">
							<div class="card">
								<div class="card-body">
									<p>
										Data Proyek
									</p>
									<table class="table table-bordered">
										<thead>
											<tr>
												<th> # </th>
												<th> Nama Proyek </th>
												<th> Client </th>
												<th> Rentang Proyek </th>
												<!-- <th> Tanggal Selesai </th> -->
												<th> Lokasi </th>
												<th> Pimpinan Proyek </th>
												<th> Keterangan </th>
												<th> Action </th>
											</tr>
										</thead>
										<tbody>
											<?php $no = 1; ?>
											<?php foreach ($proyek as $item): ?>
												<tr>
													<td><?php echo $no++; ?></td>
													<td><?php echo htmlspecialchars($item['namaProyek']); ?></td>
													<td><?php echo htmlspecialchars($item['client']); ?></td>
													<td><?php echo htmlspecialchars($item['tglMulai']); ?> - <?php echo htmlspecialchars($item['tglSelesai']); ?></td>
													<td>
														<?php if (!empty($item['lokasi'])): ?>
															<ol>
																<?php foreach ($item['lokasi'] as $lokasi): ?>
																	<li>
																		<?php echo htmlspecialchars($lokasi['namaLokasi']); ?><br>
																	</li>
																<?php endforeach; ?>
															</ol>
														<?php else: ?>
															Tidak ada lokasi.
														<?php endif; ?>
													<td><?php echo htmlspecialchars($item['pimpinanProyek']); ?></td>
													<td><?php echo htmlspecialchars($item['keterangan']); ?></td>
													</td>
													<td>Button</td>
												</tr>
											<?php endforeach; ?>

										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- content-wrapper ends -->
				<!-- partial:../../partials/_footer.html -->
				<footer class="footer">
					<div class="d-sm-flex justify-content-center justify-content-sm-between">
						<span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Made by Fadhill <i class="mdi mdi-heart text-danger"></i></span>
					</div>
				</footer>
				<!-- partial -->
			</div>
			<!-- main-panel ends -->
		</div>
		<!-- page-body-wrapper ends -->
	</div>
	<!-- container-scroller -->
	<!-- plugins:js -->
	<script src="<?php echo base_url('assets/vendors/js/vendor.bundle.base.js'); ?>"></script>
	<!-- endinject -->
	<!-- Plugin js for this page -->
	<!-- End plugin js for this page -->
	<!-- inject:js -->
	<script src="<?php echo base_url('assets/js/off-canvas.js'); ?>"></script>
	<script src="<?php echo base_url('assets/js/misc.js'); ?>"></script>
	<script src="<?php echo base_url('assets/js/settings.js'); ?>"></script>
	<script src="<?php echo base_url('assets/js/todolist.js'); ?>"></script>
	<script src="<?php echo base_url('assets/js/jquery.cookie.js'); ?>"></script>
	<!-- endinject -->
	<!-- Custom js for this page -->
	<!-- End custom js for this page -->
</body>

</html>
