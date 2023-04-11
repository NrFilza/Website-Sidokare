<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/lupapw.css') }}">
    <title>Lupa Password</title>
</head>
    <body>
        <div class="container">
          <header><img src="{{ asset('frontend/assets/img/Group 1000004046.png') }}" alt=""></header>
          <h4>Lupa Password</h4>
          <p>Masukkan Emailmu untuk dikirim Kode OTP</p>
          <form action="#">
            <div class="input-field">
              <input type="mail" />
            </div>
            <button>Kirim</button>
          </form>
          <p>Kode Belum Terkirim? <br> <a href="{{ url('#') }}">Kirim Ulang Kode</a></p>
        </div>
      
        <script src="{{ asset('frontend/assets/script.js') }}"></script>
      
    
</body>
</html>