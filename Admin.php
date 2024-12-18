<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href="styleAdmin.css">

	

	<title>Admin</title>
</head>
<body>


	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="#" class="brand">
			<i class='bx bxs-smile'></i>
			<span class="text">Admin</span>
		</a>
		<ul class="side-menu top">
			<li class="active">
				<a href="#">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">Dashboard</span>
				</a>
			</li>
			<!-- <li>
				<a href="#">
					<i class='bx bxs-shopping-bag-alt' ></i>
					<span class="text">My Store</span>
				</a>
			</li>
			<li>
				<a href="#">
					<i class='bx bxs-doughnut-chart' ></i>
					<span class="text">Analytics</span>
				</a>
			</li>
			<li>
				<a href="#">
					<i class='bx bxs-message-dots' ></i>
					<span class="text">Message</span>
				</a>
			</li>
			<li>
				<a href="#">
					<i class='bx bxs-group' ></i>
					<span class="text">Team</span>
				</a>
			</li> -->
		</ul>
		<ul class="side-menu">
			<!-- <li>
				<a href="#">
					<i class='bx bxs-cog' ></i>
					<span class="text">Settings</span>
				</a>
			</li> -->
			<li>
				<a href="#" class="logout">
					<i class='bx bxs-log-out-circle' ></i>
					<span class="text">Logout</span>
				</a>
			</li>
		</ul>
	</section>
	<!-- SIDEBAR -->



	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
		<nav>
			<i class='bx bx-menu' ></i>
			<!-- <a href="#" class="nav-link">Categories</a> -->
			<form action="#">
				<div class="form-input">
					<input type="search" placeholder="Search...">
					<button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
				</div>
			</form>
			<input type="checkbox" id="switch-mode" hidden>
			<label for="switch-mode" class="switch-mode"></label>
			<!-- <a href="#" class="notification">
				<i class='bx bxs-bell' ></i>
				<span class="num">8</span>
			</a> -->
			<a href="#" class="profile">
				<img src="img/people.png">
			</a>
		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>
			<div class="head-title">
				<div class="left">
					<h1>Dashboard</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Dashboard</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="#">Home</a>
						</li>
					</ul>
				</div>
				<!-- <a href="#" class="btn-download">
					<i class='bx bxs-cloud-download' ></i>
					<span class="text">Download PDF</span>
				</a> -->
			</div>

			<!-- <ul class="box-info">
				<li>
					<i class='bx bxs-calendar-check' ></i>
					<span class="text">
						<h3>1020</h3>
						<p>New Order</p>
					</span>
				</li>
				<li>
					<i class='bx bxs-group' ></i>
					<span class="text">
						<h3>2834</h3>
						<p>Visitors</p>
					</span>
				</li>
				<li>
					<i class='bx bxs-dollar-circle' ></i>
					<span class="text">
						<h3>$2543</h3>
						<p>Total Sales</p>
					</span>
				</li>
			</ul> -->


			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Daftar Siswa Mendaftar</h3>
						<i class='bx bx-search' ></i>
						<i class='bx bx-filter' ></i>
					</div>
					<table>
						<thead>
							<tr>
								<th>User</th>
								<th>Date Order</th>
								<th>Status</th>
							</tr>
						</thead>

						<tbody>

						<?php
							include('db.php');

							$table = "users";
							$data = $database->getReference($table)->getValue();

							if ($data) {
								foreach ($data as $key => $value) {
									echo "
									<tr>
										<td>
											<img src='img/people.png'>
											<p>{$value['name']}</p>
										</td>
										<td>{$value['nisn']}</td>
										<td>
											<span class='status approve' data-id='{$key}'>Setuju</span>
											<span class='status cancel' data-id='{$key}'>Batalkan</span>
										</td>
									</tr>";
								}
							} else {
								echo "<tr><td colspan='3'>Data tidak ditemukan</td></tr>";
							}
							?>

						</tbody>
					</table>
					<!-- <tr>
						<td>
							<img src="img/people.png">
							<p>John Doe</p>
						</td>
						<td>01-10-2021</td>
						<td><span class="status completed">Completed</span></td>
					</tr> -->
				</div>
				<div class="todo">
					<div class="head">
						<h3>Jadwal Pendaftaran</h3>
						<i class='bx bx-plus' ></i>
						<i class='bx bx-filter' ></i>
					</div>
					<ul class="todo-list">
						<?php

							include('db.php');

							$table = "berita";
							$data = $database->getReference($table)->getValue();

							if ($data > 0) {
							$i = 1;
							foreach ($data as $key => $value) {
						?>

							<li class="completed">
								<p><?= $value['judul']; ?></p>
								<div class="action-wrapper">
									<a href="edit-blog.php?id=<?= $key; ?>" class="me-2 edit-trigger" data-id="<?= $key; ?>">
										<i class="bx bx-dots-vertical-rounded"></i>
									</a>
									<form action="action-destroy.php" method="post" class="delete-form">
										<button type="submit" name="delete_key" value="<?= $key; ?>" class="btn btn-danger">
											<i class="bx bx-trash"></i>
										</button>
									</form>
								</div>
							</li>

						<?php
							}
						}
						?>
						<!-- <li class="completed">
							<p>Todo List</p>
							<i class='bx bx-dots-vertical-rounded' ></i>
						</li>
						<li class="not-completed">
							<p>Todo List</p>
							<i class='bx bx-dots-vertical-rounded' ></i>
						</li>
						<li class="completed">
							<p>Todo List</p>
							<i class='bx bx-dots-vertical-rounded' ></i>
						</li>
						<li class="not-completed">
							<p>Todo List</p>
							<i class='bx bx-dots-vertical-rounded' ></i>
						</li> -->
					</ul>
				</div>
			</div>
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	
	<div id="myModal" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <h2>Tambah Data</h2>
        <form action="action-store.php" method="POST">
			<label for="input1">Judul :</label>
			<input type="text" id="input1" name="input1" placeholder="Masukkan data 1" required><br>
			
			<label for="input2">Isi :</label>
			<input type="text" id="input2" name="input2" placeholder="Masukkan data 2" required><br>
			
			<label for="input3">Lokasi :</label>
			<input type="text" id="input3" name="input3" placeholder="Masukkan data 3" required><br>
			
			<label for="input4">Tanggal :</label>
			<input type="text" id="input4" name="input4" placeholder="Masukkan data 4" required><br>
			
			<div class="modal-buttons">
				<button type="button" id="backBtn">Kembali</button>
				<button type="submit" id="submitBtn">Submit</button>
			</div>
		</form>
    </div>
	</div>

	<script src="script.js"></script>
</body>
</html>

<!-- <tr>
								<td><span class="status pending">Pending</span></td>
								<td>
									<img src="img/people.png">
									<p>John Doe</p>
								</td>
								<td>01-10-2021</td>
								<td><span class="status process">Process</span></td>
							</tr>
							<tr>
								<td>
									<img src="img/people.png">
									<p>John Doe</p>
								</td>
								<td>01-10-2021</td>
								<td><span class="status pending">Pending</span></td>
							</tr>
							<tr>
								<td>
									<img src="img/people.png">
									<p>John Doe</p>
								</td>
								<td>01-10-2021</td>
								<td><span class="status completed">Completed</span></td>
							</tr> -->