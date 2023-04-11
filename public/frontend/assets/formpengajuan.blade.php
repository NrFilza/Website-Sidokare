<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengajuan</title>
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/styledashboard.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/formulir.css') }}">
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
                    <a href="{{ url('') }}"id="active--link">
                        <span class="icon icon-2"><i class="ri-line-chart-line"></i></span>
                        <span class="sidebar--item">Pengajuan</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('') }}">
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
            
                    <form action="#">
                        <div class="form first">
                            <div class="details personal">
                                <span class="title">Informasi Pengaju</span>
            
                                <div class="fields">
                                    <div class="input-field">
                                        <label>Nama Lengkap</label>
                                        <input type="text" placeholder="Nama Lengkap" required>
                                    </div>
            
                                    <div class="input-field">
                                        <label>NIK</label>
                                        <input type="number" placeholder="NIK" required>
                                    </div>
            
                                    <div class="input-field">
                                        <label>Asal Pelapor</label>
                                        <input type="text" placeholder="Alamat" required>
                                    </div>
            
                            <div class="details ID">
                                <span class="title">Detail Pengajuan</span>
            
                                <div class="fields">
                                    <div class="input-field">
                                        <label>Kategori Pengajuan</label>
                                        <input type="text" placeholder="Kategori Pengajuan" required>
                                    </div>
            
                                    <div class="input-field">
                                        <label>Judul Pengajuan</label>
                                        <input type="text" placeholder="Judul Pengajuan" required>
                                    </div>
            
                                    <div class="input-field">
                                        <label>Isi Pengajuan</label>
                                        <input type="text" placeholder="Isi Pengajuan" required>
                                    </div>
            
                                    <div class="input-field">
                                        <label>Tanggal Pengajuan</label>
                                        <input type="date" placeholder="Tanggal Pengajuan" required>
                                    </div>
            
                                    <div class="input-field">
                                        <label>File Tambahan Pengaju</label>
                                        <input type="text" placeholder="File Tambahan Pengaju" required>
                                    </div>
            
                                    <div class="input-field">
                                        <label>Unggah File Pendukung</label>
                                       
                                        <input type="file" placeholder=" Unggah File Pendukung"  class="upload-box"required>
                                    </div>
                                </div>
            
                                <button class="sumbit">
                                    <span class="btnText">Kirim</span>
                                    <i class="uil uil-navigator"></i>
                                </button>
                            </div> 
                        </div>
            
                        
                                    
                               
                    </form>
                </div>
            
                </div>
            </section>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.35.3/apexcharts.min.js"></script>
            <script src="{{ asset('frontend/assets/js/formulir.js') }}"></script>
            <script src="{{ asset('frontend/assets/js/dashboard.js') }}"></script>
       </body>
       </html>