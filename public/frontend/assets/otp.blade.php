<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/otp.css') }}">
    <title>Kode OTP</title>
</head>
    <body>
        <div class="container">
          <header><img src="{{ asset('frontend/assets/img/Group 1000004046.png') }}" alt=""></header>
          <h4>Kode OTP</h4>
          <p>Masukkan Kode OTP Yang Dikirim pada emailmu</p>
          <form action="#">
            <div class="input-field">
              <input type="number" />
              <input type="number"  />
              <input type="number" />
              <input type="number"  />
              <input type="number" />
            </div>
            <button>Verifikasi</button>
          </form>
          <p>Kode Belum Terkirim? <br> <a href="{{ url('#') }}">Kirim Ulang Kode</a></p>
        </div>
      
        <script src="{{ asset('frontend/assets/script.js') }}"></script>
      
    
</body>
</html>