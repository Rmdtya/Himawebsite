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
    <title> Tabel Inventory </title>
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

    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css"> -->

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
						<h2>Manage <b>HIMA Inventory Barang</b></h2>
					</div>
					<div class="col-sm-6">
						<a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Add New Barang</span></a>				
					</div>
				</div>
			</div>
			<table id="inventory" class="table table-striped table-hover">
				<thead>
					<tr>
						<th>No</th>
						<th>Kode Barang</th>
						<th>Nama Barang</th>
						<th>Deskripsi</th>
						<th>Stok</th>
            <th>Image</th>
            <th>Aksi</th>
					</tr>
				</thead>
				<tbody>
          <?php
                    $i = 1;
                    $query2 = mysqli_query($koneksi, "SELECT * FROM tbl_inventory");
                    while($data = mysqli_fetch_array($query2)) { ?>
                    
          
                      <tr>
                        <td>
                            <?php echo $i++; ?>
                        </td>
                        <td>
                            <?php echo $data['kode_barang']; ?>
                        </td>
                        <td>
                            <?php echo $data['nama_barang']; ?>
                        </td>
                        <td>
                            <?php echo $data['deskripsi']; ?>
                        </td>
                        <td>
                            <?php echo $data['stok']; ?>
                        </td>
                        <td>
                            <?php echo $data['image']; ?>
                        </td>

                        <td>
                            <a href="#" type="button" class="edit editbtn" data-bs-toggle="modal" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>   
                            <a href="#" type="button" class="delete deletebtn" data-bs-toggle="modal" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
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
<!-- add Modal HTML -->
<div id="addEmployeeModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form action="proses/inventory_proses.php" method="POST" enctype="multipart/form-data">
				<div class="modal-header">						
					<h4 class="modal-title">Add New Barang</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
					<div class="form-group">
						<label>Kode Barang</label>
						<input type="text" name="kode_barang" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Nama Barang</label>
						<input type="text" name="nama_barang" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Deskripsi</label>
						<textarea class="form-control" name="deskripsi" required></textarea>
					</div>
					<div class="form-group">
						<label>Stok</label>
						<input type="number" name="stok" class="form-control" required>
					</div>		
          <div class="form-group">
						<input type="file" name="image" required>
					</div>
          <div class="form-group">
						<td> <input type="radio" name="filter" value="app"> Elektronik <input type="radio" name="filter" value="app"> Alat-alat <input type="radio" name="filter" value="web"> Lain-lain</td>
					</div>
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
					<input type="submit" class="btn btn-success" name="addbarang" value="Add">
				</div>
			</form>
		</div>
	</div>
</div>

<!-- Edit Modal HTML -->
<div id="editEmployeeModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
    <form action="proses/inventory_proses.php" method="POST" enctype="multipart/form-data">
				<div class="modal-header">						
					<h4 class="modal-title">Edit Barang</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">
          <input type="hidden" name="update_kode" id="update_kode" value="#update_kode">					
					<div class="form-group">
						<label>Kode Barang</label>
						<input type="text" name="kode_barang" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Nama Barang</label>
						<input type="text" name="nama_barang" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Deskripsi</label>
						<textarea class="form-control" name="deskripsi" required></textarea>
					</div>
					<div class="form-group">
						<label>Stok</label>
						<input type="number" name="stok" class="form-control" required>
					</div>		
          <div class="form-group">
						<input type="file" name="image" required>
					</div>
          <div class="form-group">
						<td> <input type="radio" name="filter" value="app"> Elektronik <input class="spasi-radio" type="radio" name="filter" value="app"> Alat <input class="spasi-radio" type="radio" name="filter" value="web"> Lain -Lain</td>
					</div>
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
					<input type="submit" class="btn btn-success" name="editbarang" value="edit">
				</div>
			</form>
		</div>
	</div>
</div>

<!-- Delete Modal HTML -->
<div id="deleteEmployeeModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form action="proses/inventory_proses.php" method="POST">
        <input type="hidden" name="delete_kode" id="delete_kode" value="#delete_kode">			
				<div class="modal-header">						
					<h4 class="modal-title">Delete Barang</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
					<p>Are you sure you want to delete these Records?</p>
					<p class="text-warning"><small>This action cannot be undone.</small></p>
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
					<input type="submit" class="btn btn-danger" name="deletebarang" value="Delete">
				</div>
			</form>
		</div>
	</div>
</div>
  </section>

  <!-- <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script> -->


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

            $('.editbtn').on('click', function () {

                $('#editEmployeeModal').modal('show');

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function () {
                    return $(this).text();
                }).get();

                console.log(data);

                $('#update_kode').val(data[1]);
                // $('#nama_barang').val(data[1]);
                // $('#deskripsi').val(data[2]);
                // $('#stok').val(data[3]);
                // $('#filter').val(data[4]);
                // $('#image').val(data[5]);
            });
        });
    </script>

<script>
        $(document).ready(function () {

            $('.deletebtn').on('click', function () {

                $('#deleteEmployeeModal').modal('show');

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function () {
                    return $(this).text();
                }).get();

                console.log(data);

                $('#delete_kode').val(data[1]);
            });
        });
    </script>

<script>
        $(document).ready(function () {
          $('#inventory').DataTable({
            "columns": [
                   {"data": "No"},
                   {"data": "Kode Barang", orderable: false},
                   {"data": "Nama Barang"},
                   {"data": "Deskripsi", orderable: false},
                   {"data": "Stok"},
                   {"data": "Image" , orderable: false},
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