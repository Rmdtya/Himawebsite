<?php
session_start();
if(!isset($_SESSION["session"])){
	header("location:../Login.php");
}

if($_SESSION["session_admin"] == true){

}else{
	header("location:../../../index.php");
}

include "../../proses/koneksi_db.php";
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Tabel Pemilu </title>
    <link rel="stylesheet" href="../../css/admin.css">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <!-- Boxiocns CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
<div class="sidebar close">
    <div class="logo-details">
      <i class='bx bxs-data'></i>
      <span class="logo_name">HIMA RPL</span>
    </div>
    <ul class="nav-links">
      <li>
        <a href="dashboard.php">
          <i class='bx bx-grid-alt' ></i>
          <span class="link_name">Dashboard</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Table</a></li>
        </ul>
      </li>
      <li>
        <div class="iocn-link">
          <a href="#">
            <i class='bx bx-collection' ></i>
            <span class="link_name">Table</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Table</a></li>
          <li><a href="tbl_user.php">User Account</a></li>
          <li><a href="tbl_inventory.php">Inventory</a></li>
          <li><a href="tbl_peminjaman.php">Peminjaman</a></li>
          <li><a href="tbl_antrianpeminjaman.php">Antrian Peminjaman</a></li>
          <li><a href="tbl_historypeminjaman.php">History Peminjaman</a></li>
          <li><a href="tbl_pemilu.php">Pemilu</a></li>
          <li><a href="tbl_informasi.php">Informasi</a></li>
          <li><a href="tbl_subscriber.php">Subscriber</a></li>
        </ul>
      </li>
      <li>
        <div class="iocn-link">
          <a href="#">
            <i class='bx bx-book-alt' ></i>
            <span class="link_name">Page</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Page</a></li>
          <li><a href="../../../index.php">Home</a></li>
          <li><a href="../informasi.php">Informasi</a></li>
          <li><a href="../kabinet.php">Kabinet</a></li>
          <li><a href="../Peminjaman.php">Peminjaman</a></li>
          <li><a href="../Pemilu.php">Pemilu</a></li>
          <li><a href="../About.php">About</a></li>
        </ul>
      </li>
      <li>
        <a href="tbl_suara.php">
          <i class='bx bx-pie-chart-alt-2' ></i>
          <span class="link_name">Pemilu</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="tbl_suara.php">Pemilu</a></li>
        </ul>
      </li>
    <div class="profile-details">
      <div class="profile-content">
        <img src="../../Image/Ramaditya.png" alt="profileImg">
      </div>
      <div class="name-job">
        <div class="profile_name">Synthesis Thirty</div>
        <div class="job">Admistrator</div>
      </div>
      <i class='bx bx-log-out' ></i>
      <i class='bx bx-log-out' ></i>
    </div>
  </li>
</ul>
</div>


  <section class="home-section">
    <div class="home-content">
      <i class='bx bx-menu' ></i>
      <span class="text">Database Information</span>
    </div>

    <div class="container-xxl">
	<div class="table-responsive">
		<div class="table-wrapper">
			<div class="table-title">
				<div class="row">
					<div class="col-sm-6">
						<h2>Manage <b>Pemilu</b></h2>
					</div>
					<div class="col-sm-6">
											
					</div>
				</div>
			</div>
			<table id="pemilu" class="table table-striped table-hover">
				<thead>
					<tr>
            <th>No</th>
						<th>NIM</th>
						<th>Nama</th>
						<th>Email</th>
						<th>Voting</th>
            <th>Tanggal</th>
            <th>Aksi</th>
					</tr>
				</thead>
				<tbody>
          <?php
                    $i = 1;
                    $query2 = mysqli_query($koneksi, "SELECT * FROM tbl_pemilu");
                    while($data = mysqli_fetch_array($query2)) { ?>
          
                      <tr>
                        <td>
                            <?php echo $i++; ?>
                        </td>
                        <td>
                            <?php echo $data['nim']; ?>
                        </td>
                        <td>
                            <?php echo $data['nama']; ?>
                        </td>
                        <td>
                            <?php echo $data['email']; ?>
                        </td>
                        <td>
                            <?php echo $data['voting_calon']; ?>
                        </td>
                        <td>
                            <?php echo $data['tanggal']; ?>
                        </td>
                        <td>
                            No Action
                        </td>
                      </tr>

                    <?php
                    }
                    ?>
				</tbody>
			</table>
		</div>
	</div>        
</div>
</section>

  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>

  <script>
  let arrow = document.querySelectorAll(".arrow");
  for (var i = 0; i < arrow.length; i++) {
    arrow[i].addEventListener("click", (e)=>{
   let arrowParent = e.target.parentElement.parentElement;//selecting main parent of arrow
   arrowParent.classList.toggle("showMenu");
    });
  }
  let sidebar = document.querySelector(".sidebar");
  let sidebarBtn = document.querySelector(".bx-menu");
  console.log(sidebarBtn);
  sidebarBtn.addEventListener("click", ()=>{
    sidebar.classList.toggle("close");
  });
  </script>

<script>
        $(document).ready(function () {

            $('.permissions').on('click', function () {

                $('#pemiluEmployeeModal').modal('show');

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function () {
                    return $(this).text();
                }).get();

                console.log(data);

                $('#nim_target').val(data[1]);
                $('#email_target').val(data[2]);
                $('#nama_target').val(data[3]);
                // $('#stok').val(data[3]);
                // $('#filter').val(data[4]);
                // $('#image').val(data[5]);
            });
        });
    </script>

<script>
        $(document).ready(function () {
          $('#pemilu').DataTable({
            "columns": [
                   {"data": "No"},
                   {"data": "NIM"},
                   {"data": "Nama"},
                   {"data": "Email", orderable: false},
                   {"data": "Voting"},
                   {"data": "Tanggal" , orderable: false},
                   {"data": "Aksi" , orderable: false}
                  ],
                  aoColumnDefs: [
                    {
                       bSortable: false,
                       aTargets: [ -1 ]
                    }
                 ]
          });
        });
    </script>
</body>
</html>