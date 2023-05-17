<div class="container">
    <form action="{{ route('ppid.export', $ppid->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <!-- HTML Codes by Quackit.com -->
<!DOCTYPE html>
<title>EXPORT FORM PPID</title>
<body>
    <center>
        <table>
            <tr>
                <td>
                    <center>
                        <font size="5"> PEMERINTAH DESA SIDOKARE </font><br>
                        <font size="4"> KECAMATAN REJOSO </font><br>
                        <font size="3"> KABUPATEN NGANJUK, JAWA TIMUR </font><br>
                        <font size="2"> Jl. Diponegoro, Kode Pos: 64453, Telp/Fax 0358331154, Sidokare, Kec. Rejoso, Kabupaten Nganjuk, Jawa Timur  </font>
                    </center>
                </td>
            </tr>
            <tr>
                <td colspan="6"><hr></td>
            </tr>
            <tr><td><center>
                <font size="4">FORMULIR PERMOHONAN INFORMASI</font>
                </center></tr></td>
            <table>
                <tr>
                    <td>.</td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td width="541">: {{ $ppid->nama_pelapor }}</td>
                </tr>
                <tr>
                    <td>Kategori</td>
                    <td width="541">: {{ $ppid->kategori_ppid }}</td>
                </tr>
                <tr>
                    <td>No Telfon</td>
                    <td width="541">: {{ $ppid->no_telfon  }}</td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td width="541">: {{ $ppid->email  }}</td>
                </tr>
                <tr>
                    <td>Tanggal</td>
                    <td width="541">: {{ $ppid->created_at  }}</td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td width="541">: {{ $ppid->Alamat }}</td>
                </tr>
                <tr>
                    <td>RT/RW</td>
                    <td width="541">: {{ $ppid->RT }}/{{ $ppid->RW }}</td>
                </tr>
                <tr>
                    <td>Judul Laporan</td>
                    <td width="541">: {{  $ppid->judul_laporan}}</td>
                </tr>
                <tr>
                    <td>Isi Laporan</td>
                    <td width="541">: {{ $ppid->isi_laporan }}</td>
                </tr>
            </table><br>
            <table >
                <tr>
                    <td>
                        <font size="3">Dengan ini bermaksud untuk mengajukan permohonan informasi, Tujuan pengajuan {{ $ppid->tujuan }}, sehingga
                        data dan informasi yang saya peroleh, akan saya gunakan sesuai dengan ketentuan perundang undangan yang berlaku</font>
                    </td>
                </tr>
            </table>
        </table>
    </center>
</body>
            <script type="text/javascript">window.print();</script>
        </body>
        </html>