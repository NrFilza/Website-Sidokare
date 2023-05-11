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
                    <header>Formulir Pengajuan Desa Sidokare</header>
            
                    <form action="/ppid/{{ $ppid->id }}" method="POST">
                      @method ('put')
                      @csrf
                        <div class="form first">
                            <div class="details personal">
                                <span class="title">Detail Informasi</span>

            @csrf
                                <div class="fields">
                                    <div class="input-field">
                                        <label>NIK</label>
                                        <input type="text" placeholder="" value="{{ $ppid->NIK }}" required>
                                    </div>
            
                                   
            
                                    <div class="input-field">
                                        <label>Asal Pelapor</label>
                                        <input type="text" value="{{ $ppid->Alamat }}">
                                    </div>
                                <div class="fields">
                                    <div class="input-field">
                                        <label>Kategori Pengajuan</label>
                                        <input type="text" value="{{ $ppid->kategori_ppid }}">
                                    </div>
                                    <div class="input-field">
                                        <label>no Telfon</label>
                                        <input type="text" value="{{ $ppid->no_telfon }}">
                                    </div>
                                    <div class="input-field">
                                        <label>nama Pengaju</label>
                                        <input type="text" value="{{ $ppid->nama_pelapor }}">
                                    </div>
                                    <div class="input-field">
                                        <label>Judul Pengajuan</label>
                                        <input type="text"value="{{ $ppid->judul_laporan }}">
                                    </div>
            
                                    <div class="input-field">
                                        <label>Isi Pengajuan</label>
                                        <input type="text" value="{{ $ppid->isi_laporan }}">
                                    </div>
                                    <div class="input-field">
                                        <label>File Tambahan Pengaju</label>
                                        <input type="text" value="{{ $ppid->upload_file_pendukung }}" >
                                    </div>
            
                                    <div class="input-field">
                                        <label>Unggah File Pendukung</label>
                                       
                                        <input type="file" value="" class="upload-box" name="upload_file_pendukung">
                                    </div>
                                </div>
            
                                <button class="sumbit" name="submit" value="update">
                                    <span class="btnText">Kirim</span>
                                    <i class="uil uil-navigator"></i>
                                </button>
                                <button type="button" class="btn btn-success">Diterima</button>
                                <button type="button" class="btn btn-danger">Ditolak</button>
                                
                            </div> 
                        </div>
            
                        
                                    
                               
                    </form>
                </div>
            
                </div>
            </section>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.35.3/apexcharts.min.js"></script>
            <script src="{{ asset('frontend/assets/js/formulir.js') }}"></script>
            <script src="{{ asset('frontend/assets/js/dashboard.js') }}"></script>
       </body>
       </html>
 {{-- <!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>
   
    <div class="container">
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">id akun</label>
        <input type="text" class="form-control" >
      </div>
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">isi laporan</label>
        <input type="text" class="form-control"  >
      </div>
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">asal pelapor</label>
        <input type="text" class="form-control" >
      </div>
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">kategori</label>
        <input type="text" class="form-control">
      </div>
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">file pendukung</label>
        <input type="text" class="form-control">
      </div>
      <input type="submit" >
    </div>
</form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html> --}}