<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Akun Karyawan</title>
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/styledashboard.css') }}">
    <link rel="stylesheet" href="{{ asset(/'frontend/assetscss/formulir.css') }}">
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
                    <header>Formulir Daftar Akun Pegawai</header>
            
                    <form action="#">
                        <div class="form first">
                            <div class="details personal">
            
                                <div class="fields">
                                    <div class="input-field">
                                        <label>Username</label>
                                        <input type="text" placeholder="Username" required>
                                    </div>
            
                                    <div class="input-field">
                                        <label>NIK</label>
                                        <input type="number" placeholder="NIK" required>
                                    </div>
            
                                    <div class="input-field">
                                        <label>Password</label>
                                        <input type="text" placeholder="Alamat" required>
                                    </div>
            
                                <button class="sumbit">
                                    <span class="btnText">Kirim</span>
                                    <i class="uil uil-navigator"></i>
                                </button>
                                
                            </div> 
                        </div>
            
                        <div class="table">
                            <table>
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Username</th>
                                        <th>NIK</th>
                                        <th>Password</th>
                                        <th>Tindak Lanjut</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Morgan</td>
                                        <td>467889191001</td>
                                        <td>Rama123</td>
                                        <td><span><i class="ri-edit-line edit"></i><i class="ri-delete-bin-line delete"></i></span> </td>
                                    </tr>
                                    <tr><td>1</td>
                                        <td>Morgan</td>
                                        <td>467889191001</td>
                                        <td>Rama123</td>
                                        <td><span><i class="ri-edit-line edit"></i><i class="ri-delete-bin-line delete"></i></span> </td></tr>
                                        <tr>
                                            <td>1</td>
                                            <td>Morgan</td>
                                            <td>467889191001</td>
                                            <td>Rama123</td>
                                            <td><span><i class="ri-edit-line edit"></i><i class="ri-delete-bin-line delete"></i></span> </td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>Morgan</td>
                                            <td>467889191001</td>
                                            <td>Rama123</td>
                                            <td><span><i class="ri-edit-line edit"></i><i class="ri-delete-bin-line delete"></i></span> </td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>Morgan</td>
                                            <td>467889191001</td>
                                            <td>Rama123</td>
                                            <td><span><i class="ri-edit-line edit"></i><i class="ri-delete-bin-line delete"></i></span> </td>
                                        </tr>
                                    
                                    
                                </tbody>
                            </table>
                                    
                               
                    </form>
                </div>
            
                </div>
            </section>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.35.3/apexcharts.min.js"></script>
            <script src="{{ asset('frontend/assets/js/formulir.js') }}"></script>
            <script src="{{ asset('frontend/assets/js/dashboard.js') }}"></script>
       </body>
       </html>