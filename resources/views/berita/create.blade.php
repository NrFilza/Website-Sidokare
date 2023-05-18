<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
      </head>
        <title>Pengajuan</title>
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/styledashboard.css') }}">
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
                        <img src="{{ asset('img/1.png') }}" alt="">
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
<!-- Tab;e -->
            <div class="main--content">
                <div class="overview">
                    <h1>Tambah Berita</h1>
            
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
            
                    <form action="{{ route('berita.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
            
                        <div class="form-group">
                            <label for="judul_berita">Judul Berita</label>
                            <input type="text" class="form-control" id="judul_berita" name="judul_berita" value="{{ old('judul_berita') }}" required>
                        </div>
            
                        <div class="form-group">
                            <label for="tanggal_publikasi">Tanggal dan Jam Publikasi</label>
                            <input type="datetime-local" class="form-control" id="tanggal_publikasi" name="tanggal_publikasi" value="{{ old('tanggal_publikasi') }}" required>
                        </div>
                        
            
                        <div class="form-group">
                            <label for="id_kategori">Kategori</label>
                            <select class="form-control" id="id_kategori" name="id_kategori" required>
                                <option value="ktg_berita01">BUM Desa</option>
                                <option value="ktg_berita02">PKK</option>
                                <option value="ktg_berita03">Pemerintah Desa</option>
                                <option value="ktg_berita04">Potensi Desa</option>
                                <option value="ktg_berita05">Pembangunan Masyarakat</option>
                                <option value="ktg_berita06">Pemberdayaan Masyarakat</option>
                                <option value="ktg_berita07">Pembinaan Masyarakat</option>
                            </select>
                        </div>
            
                        <div class="form-group">
                            <label for="isi_berita">Isi Berita</label>
                            <textarea class="form-control" id="isi_berita" name="isi_berita" required>{{ old('isi_berita') }}</textarea>
                        </div>
            
                        <div class="form-group">
                            <label for="foto">Foto</label>
                            <input type="file" class="form-control-file" id="foto" name="foto">
                        </div>
            
                        {{-- <div class="form-group">
                            <label for="unggah_file_lain">Unggah File Lain</label>
                            <input type="file" class="form-control-file" id="unggah_file_lain" name="unggah_file_lain">
                        </div> --}}
            
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
            
<script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.35.3/apexcharts.min.js"></script>
<script src="{{ asset('frontend/assets/js/formulir.js') }}"></script>
<script src="{{ asset('frontend/assets/js/dashboard.js') }}"></script>
</body>
</html>

