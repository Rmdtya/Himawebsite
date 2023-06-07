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
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->


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
						<a href="#" type="button" class="btn btn-success addinfo" data-bs-toggle="modal" data-toggle="modal" title="Add New Informasi"><i class="material-icons">&#xE147;</i> <span>Add New Barang</span></a>				
					</div>
				</div>
			</div>
			<table id="inventory" class="table table-striped table-hover">
				<thead>
					<tr>
						<th>No</th>
						<th>Judul</th>
            <th>Kode Informasi</th>
						<th>Tanggal</th>
						<th>Topik</th>
            <th>Aksi</th>
					</tr>
				</thead>
				<tbody>
          <?php
                    $i = 1;
                    $query2 = mysqli_query($koneksi, "SELECT * FROM tbl_informasi");
                    while($data = mysqli_fetch_array($query2)) { ?>
                            
                      <tr>
                        <td hidden>
                          <?php echo $data['kode_info']; ?>
                        </td>
                        <td>
                            <?php echo $i++; ?>
                        </td>
                        <td>
                            <?php echo $data['judul']; ?>
                      </td>
                        <td>
                            <?php echo $data['kode_info']; ?>
                        </td>
                        <td>
                            <?php echo $data['tanggal']; ?>
                        </td>
                        <td>
                            <?php echo $data['topik']; ?>
                        </td>
                        <td>
                            <a href="#" type="button" class="delete deletebtn" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
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

<div class="modal fade" id="addinfo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" style="font-weight:700;" id="exampleModalLabel">5 Aplikasi Coding Terpopuler</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" data-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          <div class="card mb-12" style="max-width:100%; border: none;">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="../../Image/informasi/vscode.png" class="img-fluid rounded-start" alt="...">
              </div>
              <div class="col-md-8 align-self-center">
                <div class="card-body ">
                  <h5 class="card-title"><strong>Visual Studio Code</strong></h5>
                  <p class="card-text">Visual Studio Code adalah sebuah editor teks yang sangat populer dan serbaguna yang dikembangkan oleh Microsoft. Editor ini dirancang untuk memenuhi kebutuhan pengembangan perangkat lunak yang beragam, termasuk pengembangan web dan aplikasi lintas platform.</p>
                  <ul>
                      <li>
                        <strong>Antar-muka Pengguna yang Ramah:</strong> Visual Studio Code memiliki antar-muka pengguna yang intuitif dan ramah pengembang. Fitur ini memungkinkan pengguna untuk dengan mudah mengelola proyek, membuka file, dan menjelajahi struktur direktori.
                      </li>
                      <li>
                        <strong>Penyorotan Kode yang Kuat:</strong> Editor ini dilengkapi dengan penyorotan sintaks dan templat kode yang canggih untuk berbagai bahasa pemrograman. Ini membantu pengembang dalam memahami dan menulis kode dengan lebih efisien.
                      </li>
                    </ul>
                </div>
              </div>
            </div>
          </div>

          <div class="container mt-5">
            <form method="POST" action="../../proses/informasi_proses.php" enctype="multipart/form-data">
              <div class="mb-3">
                  <div class="card mb-12" style="max-width:100%; border: none;">
                      <div class="row g-0">
                        <div class="col-md-12 align-self-center">
                          <div class="card-body ">
                              <input type="text" class="form-control card-title"  name="title"  placeholder="Input Title">
                              <input type="text" class="form-control card-title"  name="tanggal"  placeholder="Tanggal Upload ex. 12 April 2023">
                              <input type="text" class="form-control card-title"  name="topik"  placeholder="Topik ex. Coding, Programmer, Beasiswa">
                              <input type="text" class="form-control card-title"  id="input1Text1" name="text1[]"  placeholder="Input SubTitle">
                              <textarea type="textarea" class="form-control card-text"  id="input2Text1" name="text2[]" placeholder="Input Deskripsi"></textarea>
                              <ul>
                                <li style="margin-top:5px; margin-bottom:5px;">
                                  <input type="text" id="input3Text1" name="text3[]"  placeholder="Input Poin Plus">
                                </li>
                                <textarea type="textarea" class="form-control card-text" id="input4Text1" name="text4[]" placeholder="Input Deskripsi"></textarea>
                                </ul>
                              <ul>
                                <li style="margin-top:5px; margin-bottom:5px;">
                                    <input type="text" id="input5Text1" name="text5[]"  placeholder="Input Poin Plus">
                                </li>
                                <textarea type="textarea" class="form-control card-text"  id="input6Text1" name="text6[]" placeholder="Input Deskripsi"></textarea>
                              </ul>
                                          
                              <input type="file" class="form-control card-title"  id="input7Text1" name="image[]"  placeholder="Input Title">
                            </div>
                          </div>
                        </div>
                    </div>
                <label hidden for="inputText1" class="form-label">Text 1</label>
                <input hidden type="text" class="form-control" id="inputText1" name="text[]">
              </div>
              <div id="textboxContainer"></div>
              <button type="button" class="btn btn-primary mt-3" onclick="addTextBox()">Tambah Textbox</button>
              <button type="submit" class="btn btn-success mt-3">Submit</button>
            </form>
          </div>

      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>

<!-- Delete Modal HTML -->
<div id="deleteEmployeeModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form action="proses/informasi_proses.php" method="POST">
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
					<input type="submit" class="btn btn-danger" name="deleteinformasi" value="Delete">
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

            $('.deletebtn').on('click', function () {

                $('#deleteEmployeeModal').modal('show');

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function () {
                    return $(this).text();
                }).get();

                console.log(data);

                $('#delete_kode').val(data[0]);
            });
        });
    </script>

<script>
    var counter = 0;
    var textboxCount = 1;

    function addTextBox() {
      if (counter < 2) {
      var container = document.getElementById('textboxContainer');
      var newTextBox = document.createElement('div');
      newTextBox.innerHTML = `
        <div class="mb-3">
                    <div class="card mb-12" style="max-width:100%; border: none;">
                      <div class="row g-0">
                        <div class="col-md-12 align-self-center">
                          <div class="card-body ">
                              <input type="text" class="form-control card-title"  id="input1Text${textboxCount + 1}" name="text1[]"  placeholder="Input Sub Title">
                              <textarea type="textarea" class="form-control card-text"  id="input2Text${textboxCount + 1}" name="text2[]" placeholder="Input Deskripsi"></textarea>
                              <ul>
                                <li style="margin-top:5px; margin-bottom:5px;">
                                  <input type="text" id="input3Text${textboxCount + 1}" name="text3[]"  placeholder="Input Poin Plus">
                                </li>
                                <textarea type="textarea" class="form-control card-text" id="input4Text${textboxCount + 1}" name="text4[]" placeholder="Input Deskripsi"></textarea>
                                </ul>
                              <ul>
                                <li style="margin-top:5px; margin-bottom:5px;">
                                    <input type="text" id="input5Text${textboxCount + 1}" name="text5[]"  placeholder="Input Poin Plus">
                                </li>
                                <textarea type="textarea" class="form-control card-text"  id="input6Text${textboxCount + 1}" name="text6[]" placeholder="Input Deskripsi"></textarea>
                              </ul>
                                          
                              <input type="file" class="form-control card-title"  id="input7Text${textboxCount + 1}" name="image[]"  placeholder="Input Title">
                            </div>
                          </div>
                        </div>
                    </div>
          <label hidden for="inputText${textboxCount + 1}" class="form-label">Text ${textboxCount + 1}</label>
          <input hidden type="text" class="form-control" name="text[]" id="inputText${textboxCount + 1}">
        </div>
      `;
      container.appendChild(newTextBox);
      textboxCount++;
      counter++;
      }
      else {
    console.log("Batas maksimum tercapai");
  }
    }
  </script>

<script>
        $(document).ready(function () {

            $('.addinfo').on('click', function () {

                $('#addinfo').modal('show');

                $tr = $(this).closest('div');

                var data = $tr.children("p").map(function () {
                    return $(this).text();
                }).get();

                console.log(data);

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