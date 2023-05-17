<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengajuan</title>
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/styledashboard.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/formulir.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/stylesheet.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.0.0/fonts/remixicon.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
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
                    
                   <div class="container">
                    <a href="/formpengajuan">< Kembali</a>
                    <header>Keberatan Atas PPID</header>
                    <form action="{{ route('ppid.update', $ppid->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                
                        <table>
                           
                            <tr>
                                <td>Id Keberatan</td>
                                <td width="541">: {{ $ppid->id_keberatan_ppid }}</td>
                            </tr>
                            <tr>
                                <td>Alamat</td>
                                <td width="541">: {{ $ppid->alamat }}</td>
                            </tr>
                            <tr>
                                <td>Alasan</td>
                                <td width="541">: {{ $ppid->alasan  }}</td>
                            </tr>
                            <tr>
                                <td>Catatan Tambahan</td>
                                <td width="541">: {{ $ppid->catatan_tambahan  }}</td>
                            </tr>
                            <tr>
                                <td>Id PPID</td>
                                <td width="541">: {{ $ppid->id  }}</td>
                            </tr>
                            <tr>
                                <td>Tanggal</td>
                                <td width="541">: {{ $ppid->created_at  }}</td>
                            </tr>
                            
                        </table><br>
                
                <div class="form-foto">
                        @if ($ppid->upload_file_pendukung)
                            <img src="{{ asset('storage/berita/'.$ppid->upload_file_pendukung) }}" alt="{{ $ppid->upload_file_pendukung }}">
                        @endif
                        <input type="file" id="upload_file_pendukung" name="upload_file_pendukung" style="display: none;">
                    <input type="text" name="upload_file_pendukung" id="upload_file_pendukung" disabled class="form-control mt-2" value="{{ $ppid->upload_file_pendukung }}">
                </div>
               
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            
                </div>
            </section>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.35.3/apexcharts.min.js"></script>
            <script src="{{ asset('frontend/assets/js/formulir.js') }}"></script>
            <script src="{{ asset('frontend/assets/js/dashboard.js') }}"></script>
            <script src="{{ asset('frontend/assets/js/stylesheet.js') }}"></script>
            @push('js')
                <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
                <script src="{{ asset('assets/js/custom.js') }}"></script>
            @endpush
       </body>
       </html>
 