<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unggah Berita</title>
    <link rel="stylesheet" href="{{ asset('frontend/assetscss/styledashboard.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/berita.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.0.0/fonts/remixicon.css" rel="stylesheet">
    
</head>
<body>
     <!--- header  -->
     <section class="header">
        <div class="logo">
            <i class="ri-menu-line icon icon-0 menu"></i>
            <h2>E- <span>Sidokare</span></h2>
        </div>
        <div class="search--notification--profile">
            <div class="search">
                <input type="text" placeholder="Cari Pengajuan">
                <button> <i class="ri-search-2-line"></i></button>
            </div>
            <div class="notification--profile">
                <div class="picon bell">
                    <i class="ri-notification-2-line"></i>
                </div>
                <div class="picon profile">
                    <img src="{{ asset('frontend/assets/img/1.png') }}" alt="">
                </div>
            </div>
        </div>

    </section>
     <section class="main">
        <div class="sidebar">
            <ul class="sidebar--items">  
                <li>
                    <a href="{{ url('') }}" >
                        <span class="icon icon-1"><i class="ri-layout-grid-line"></i></span>
                        <span class="sidebar--item">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('') }}">
                        <span class="icon icon-2"><i class="ri-line-chart-line"></i></span>
                        <span class="sidebar--item">Pengajuan</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('') }}"id="active--link">
                        <span class="icon icon-3"><i class="ri-customer-service-line"></i></span>
                        <span class="sidebar--item" style="white-space: nowrap;">Upload Berita</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('') }}">
                        <span class="icon icon-4"><i class="ri-user-2-line"></i></span>
                        <span class="sidebar--item" style="white-space: nowrap;">Profil Pengguna</span>
                    </a>
                </li> 

            </ul>
            <ul class="sidebar--bottom-items">
                <li>
                    <a href="{{ url('') }}">
                        <span class="icon icon-5"><i class="ri-logout-box-r-line"></i></span>
                        <span class="sidebar--item">Logout</span>
                    </a>
                </li> 
            </ul>

        </div>
        <div class="main--content">
            <div class="overview">
                <div class="title">
                   <!-- <h2 title="section--title">Formulir Pengajuan </h2> -->
                   <div class="container">
                     <header>Formulir Pengajuan Desa Sidokare</header>
                     <form>
                         <div class="row">
                             <div class="column">
                                 <label for="judul">Judul Berita</label>
                                 <input type="text" id="Judul Berita" placeholder="Judul Berita">
                             </div>
                             <div class="column">
                                 <label for="tanggal">Tanggal Terbit</label>
                                 <input type="date" id="Tanggal Terbit" placeholder="Tanggal Terbit">
                             </div>
                         </div>
                         <div class="row">
                             <div class="column">
                                 <label for="Kategori">Kategori Berita</label>
                                 <input type="text" id="Kategori Berita" placeholder="Kategori Berita">
                             </div>
                             <div class="column">
                                 <label for="Penulis">Penulis</label>
                                 <input type="text" id="penulis" placeholder="Penulis">
                             </div>
                         </div>
                         <div class="row">
                             <div class="column">
                                 <label for="isi">Isi Berita</label>
                                 <textarea id="isi berita" placeholder="Isi Berita" rows="3"></textarea>
                             </div>
                         </div>
                         <button>Buat Berita</button>
                     </form>
                 </div>
                 
                </div>
                <div class="table">
                  <table>
                      <thead>
                          <tr>
                              <th>No</th>
                              <th>Judul Berita</th>
                              <th>tanggal Terbit</th>
                              <th>Penulis</th>
                              <th>Tindak lanjut</th>
                          </tr>
                      </thead>
                      <tbody>
                          <tr>
                              <td>1</td>
                              <td>Desa Sidokare akan Mengadakan </td>
                              <td>23:00 2023-04-01</td>
                              <td>Morgan</td>
                              <td><span><i class="ri-edit-line edit"></i><i class="ri-delete-bin-line delete"></i></span> </td>
                          </tr>
                          <tr>
                           <td>2</td>
                           <td>Desa Sidokare akan Mengadakan </td>
                           <td>23:00 2023-04-01</td>
                           <td>Morgan</td>
                           <td><span><i class="ri-edit-line edit"></i><i class="ri-delete-bin-line delete"></i></span> </td>
                       </tr>
                       <tr>
                        <td>3</td>
                        <td>Desa Sidokare akan Mengadakan </td>
                        <td>23:00 2023-04-01</td>
                        <td>Morgan</td>
                        <td><span><i class="ri-edit-line edit"></i><i class="ri-delete-bin-line delete"></i></span> </td>
                    </tr>
                      </tbody>
                  </table>
              </div>
            </section>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.35.3/apexcharts.min.js"></script>
            <script src="{{ asset('frontend/assets/js/formulir.js') }}"></script>
            <script src="{{ asset('frontend/assets/js/dashboard.js') }}"></script>
       </body>
       </html>