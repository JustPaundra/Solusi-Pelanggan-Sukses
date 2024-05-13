<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Input Data</title>
    <link rel="stylesheet" href="../style/admin.css" />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />
  </head>
  <body>
    <div class="sidebar">
      <div class="logo"></div>
      <ul class="menu">
        <li>
          <a href="admin.html">
            <i class="bx bxs-dashboard"></i>
            <span>Dashboard</span>
          </a>
        </li>
        <li>
          <a href="tiket/tiket.html">
            <i class="bx bxs-calendar-plus"></i>
            <span>Manajemen Tiket</span>
          </a>
        </li>
        <li class="active">
          <a href="analisa/input.html">
            <i class="bx bx-archive-in"></i>
            <span>Input Data</span>
          </a>
        </li>
        <li>
          <a href="analisa/analisa.html">
            <i class="bx bx-bar-chart-square"></i>
            <span>Analisis</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="bx bxs-log-out"></i>
            <span>Logout</span>
          </a>
        </li>
      </ul>
    </div>
    <div class="main-content">
      <div class="header-wrapper">
        <div class="header-title">
          <span>Input Data</span>
          <span>Dashboard</span>
        </div>
        <div class="user-info">
          <div class="search">
            <i class="bx bx-search-alt"></i>
            <input type="text" placeholder="Search" />
          </div>
          <img src="../image/rating.png" alt="" />
        </div>
      </div>
      <div class="tabel-wrapper">
        <h3 class="main-title">Input Data</h3>
        <div class="form-wrapper">
          <form>
            <div class="form-group">
              <label for="id_pengaduan">ID Tiket</label>
              <input type="text" id="id_pengaduan" name="id_pengaduan" />
            </div>
            <div class="form-group">
              <label for="id_pengaduan">Pemesan</label>
              <input type="text" id="id_pengaduan" name="id_pengaduan" />
            </div>
            <div class="form-group">
              <label for="id_pengaduan">Sektor</label>
              <input type="text" id="id_pengaduan" name="id_pengaduan" />
            </div>
            <div class="form-group">
              <label for="id_pengaduan">Skor Kepuasan</label>
              <input type="text" id="id_pengaduan" name="id_pengaduan" />
            </div>
            <div class="form-group">
              <label for="id_pengaduan">Skor Customer Effort</label>
              <input type="text" id="id_pengaduan" name="id_pengaduan" />
            </div>
            <div class="form-group">
              <label for="id_pengaduan">Status</label>
              <input type="text" id="id_pengaduan" name="id_pengaduan" />
            </div>
            <div class="button-container">
              <button class="move-button">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>
