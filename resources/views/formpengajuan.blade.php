<x-app-layout>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Dashboard</title>
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
                        <img src="{{ asset('frontend/assets/img/1.png') }}" alt="">
                    </div>
                </div>
            </div>
    
        </section>
         <section class="main">
            <div class="sidebar">
                <ul class="sidebar--items">  
                    <li>
                        <a href="/dashboard" id="active--link">
                            <span class="icon icon-1"><i class="ri-line-chart-line"></i></span>
                            <span class="sidebar--item">Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="/formpengajuan">
                            <span class="icon icon-2"><i class="ri-layout-grid-line"></i></span>
                            <span class="sidebar--item">Pengajuan</span>
                        </a>
                    </li>
                    <li>
                        <a href="">
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
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
            <div class="main--content">
                <div class="overview">
                    <div class="title">
                       <h2 title="section--title">Tabel Pengajuan </h2>
                       <select name="date" id="date" class="dropdown">
                        <option value="today">Hari Ini</option>
                        <option value="lastmonth">Bulan lalu</option>
                        <option value="lastyaer">Tahun Ini</option>
                       </select>
                    </div>

                    <a href="/ppid/create">add</a>
                    <div class="table">
                        <table>
                            <thead>
                                    <tr>
                                    
                                    <th>NIK</th>
                                    <th>Nama Pelapor</th>
                                    <th>judul laporan</th>
                                    <th>Kategori ppid</th>
                                    <th>Tindak lanjut</th>
                                </tr>
                                @foreach ($ppid as $w)
                                <tr>
                                    <td>{{ $w->NIK }}</td>
                                    <td>{{ $w->nama_pelapor }}</td>
                                    <td>{{ $w->judul_laporan }}</td>
                                    <td>{{ $w->kategori_ppid }}</td>
                                    <td><span><a  class="ri-edit-line edit" href="/ppid/{{ $w->id }}/edit">Detail</a></span>
                                        <span><!-- Button trigger modal -->
                                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                              Hapus
                                            </button>
                                            
                                            <!-- Modal -->
                                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                              <div class="modal-dialog">
                                                <div class="modal-content">
                                                  <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Apakah anda yakin ingin menghapus data ini?</h1>
                                                  </div>
                                                  <div class="modal-body">
                                                    Dengan menghapus data  ini maka anda akan menghapus secara permanen!
                                                  </div>
                                                  <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    <span><form action="/formpengajuan/{{ $w->id }}" method="POST">
                                                        @csrf
                                                    @method('delete')
                                                    <button type="submit" class="btn btn-danger" value="delete">Hapus</button>
                                                {{-- <input type="submit" value="delete"> --}}
                                            </form></span></td>
                                                    </tr>
                                                    @endforeach
                                                  </div>
                                                </div>
                                              </div>
                                            </div></span>
                                    
                            </tbody>
                        </table>
                    </div>
                   
                </div>
        
            </div>
         
      
         </section>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.35.3/apexcharts.min.js"></script>
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
         <script src="{{ asset('frontend/assets/js/dashboard.js') }}"></script>
    </body>
    </html>
</x-app-layout>