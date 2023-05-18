<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>

    <!-- link awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">

    <!-- Link file CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/login.css') }}">
</head>
<body>
    <div class="contanier">

        <div class="text">
            <img src="{{ asset('frontend/assets/img/kisspng-nganjuk-regency-logo-sedudo-waterfall-5b3b9825ec1874.8963461115306322299671.png') }}" alt="">
        </div>

        <div class="box-login">
            <div class="login">
                <div class="header">
                    <h2>Selamat Datang Kembali</h2>
                    <p>Mari mulai aktivitasmu kembali, selamat bekerja!</p>
                </div>

                <form action="">

                    <label for="email">Username</label>
                    <div class="inp">
                        <input type="texts" placeholder="Masukkan Username" minlength="8">
                    </div>

                    <label for="password">Password</label>
                    <div class="inp">
                        <input type="Password" placeholder="Masukkan Password" minlength="8">
                    </div>

                    <div class="check-box">
                        <div class="check">
                            <input type="checkbox">
                            <span>Ingatkan saya?</span>
                        </div>
                    </div>

                    <button>Masuk</button>
                </form>

               
            </div>
        </div>
    </div>
</body>
</html>