<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>SUKRIBOOK - Perpustakaan Buku</title>
    <link rel="icon" type="image/x-icon" href="https://cdn-icons-png.flaticon.com/512/201/201614.png?w=740&t=st=1690524988~exp=1690525588~hmac=aeb754baa84f0ba37dbb21c606b188976b50ec929750afdc8214d52600411c16" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,1,0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Bagel+Fat+One&family=Josefin+Sans:wght@700&family=Lexend+Deca:wght@300&family=Oswald:wght@500&family=Rubik:wght@500&family=Tilt+Warp&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous" />
    <link rel="stylesheet" type="text/css" href="../css/akunmenu.css" />
    <link rel="stylesheet" href="../css/font.css" />
  </head>
  <body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg bg-success shadow fixed-top" data-bs-theme="dark">
      <div class="container">
        <a class="navbar-brand fs-3 fw-bold font-bagel brand-text" href="#"> SUKRIBOOK </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link fw-semibold me-1" aria-current="page" href="landingPage.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link fw-semibold me-1" href="menubuku.php">Book</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active fw-semibold" href="akunmenu.php">Account</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- content -->
    <!-- profile -->
    <div class="profile turun">
      <div class="foto-profile">
        <div class="fotoprofile">
          <img src="https://img.freepik.com/free-photo/smiling-asian-woman_23-2147766303.jpg?w=740&t=st=1690699880~exp=1690700480~hmac=37510987f6b97f691f5f42c916db375b3c7b87a95be8fcf1128a82bd8a6c2acc" alt="" />
        </div>
      </div>
      <div class="kanan-profile">
        <div class="nama-profile"><span class="text-light font-tilt-wrap fs-5">Nama Pelanggan</span></div>
        <div class="akun-name-profile"><span class="text-secondary">@namapelanggan123</span></div>
        <div class="edit-profile">
          <a href=""><button type="button" class="btn btn-danger fw-semibold">Edit Profile</button></a>
        </div>
      </div>
    </div>
    <!-- main content -->
    <main class="main-content my-3 pb-3 border-bottom">
      <div class="container">
        <div class="row">
          <div class="col-12 font-josesif-sans fs-3 fw-semibold">Pesanan Anda ></div>
        </div>
        <div class="row justify-content-evenly column-gap-1 row-gap-4 text-center m-1">
          <div class="col-md-3 border border-1 p-3 shadow fs-5 font-josesif-sans fw-semibold">
            Belum Bayar <br />
            <img src="https://cdn-icons-png.flaticon.com/512/126/126230.png?w=740&t=st=1690708497~exp=1690709097~hmac=6a6250e25f7895ae1ac8647948743bb169eb26b248cc5f904b7f8e1b21e5c7be" alt="" class="my-2" /><br />
            <a href=""><button type="button" class="btn btn-primary fontrubik">View Order</button></a>
          </div>
          <div class="col-md-3 border border-1 p-3 shadow fs-5 font-josesif-sans fw-semibold">
            Dikemas <br />
            <img src="https://cdn-icons-png.flaticon.com/512/65/65998.png?w=740&t=st=1690708381~exp=1690708981~hmac=15373a66f6204edb8b3fb350b5bd88332d3f063b95b0faafbc600b8fc8d2a970" alt="" class="my-2" /><br />
            <a href=""><button type="button" class="btn btn-primary fontrubik">View Order</button></a>
          </div>
          <div class="col-md-3 border border-1 p-3 shadow fs-5 font-josesif-sans fw-semibold">
            Dikirim <br />
            <img src="https://cdn-icons-png.flaticon.com/512/709/709790.png?w=740&t=st=1690707443~exp=1690708043~hmac=6588f369f5bc82ead0ce87165676e5399b5dd506104f15961917775950e10b27" alt="" class="my-2" /><br />
            <a href=""><button type="button" class="btn btn-primary fontrubik">View Order</button></a>
          </div>
          <div class="col-md-3 border border-1 p-3 shadow fs-5 font-josesif-sans fw-semibold">
            Beri Penilaian <br />
            <img src="https://cdn-icons-png.flaticon.com/512/1239/1239383.png?w=740&t=st=1690708613~exp=1690709213~hmac=d62cb097a240eac2f9b958ce5e49da5b1292badf09f64333db871f061135237d" alt="" class="my-2" /><br />
            <a href=""><button type="button" class="btn btn-primary fontrubik">View Order</button></a>
          </div>
          <div class="col-md-3 border border-1 p-3 shadow fs-5 font-josesif-sans fw-semibold">
            Dibatalkan <br />
            <img src="https://cdn-icons-png.flaticon.com/512/1250/1250573.png?w=740&t=st=1690708652~exp=1690709252~hmac=64e3fd8e832d4fc5f3d88adaa3f7f8e332f234c81e079e67cdcd780196b39c46" alt="" class="my-2" /><br />
            <a href=""><button type="button" class="btn btn-primary fontrubik">View Order</button></a>
          </div>
          <div class="col-md-3 border border-1 p-3 shadow fs-5 font-josesif-sans fw-semibold">
            Pengembalian <br />
            <img src="https://cdn-icons-png.flaticon.com/512/631/631200.png?w=740&t=st=1690708684~exp=1690709284~hmac=18d0163b05184d8cfa5a384e6799d92f049e434281acf952da4afb8f80c52319" alt="" class="my-2" /><br />
            <a href=""><button type="button" class="btn btn-primary fontrubik">View Order</button></a>
          </div>
        </div>
      </div>
    </main>
    <!-- second content -->
    <main class="second-content my-4">
      <div class="container">
        <h4 class="font-josesif-sans fs-3 fw-semibold">Bantuan ></h4>
        <ul class="list-group list-group-flush">
          <li class="list-group-item font-josesif-sans">Pengaturan</li>
          <li class="list-group-item font-josesif-sans">Kebijakan</li>
          <li class="list-group-item font-josesif-sans">FAQ</li>
          <li class="list-group-item font-josesif-sans">Chat Admin 24/7</li>
        </ul>
      </div>
    </main>
    <!-- footer -->
    <footer class="footer bg-success">
      <div class="footer-left">
        <h5 class="font-josesif-sans">About The Store</h5>
        <p class="font-lexand">Toko ini menjual buku dari yang terlama sampai terbaru, dan yang terpupuler sampai tidak populer.</p>
        <div class="icon">
          <div class="fb">
            <a href=""> <img src="https://cdn-icons-png.flaticon.com/512/20/20673.png?w=740&t=st=1690522176~exp=1690522776~hmac=d315eef3870dde13957c5fbdcc388c1bb2dee3a091f8f88e26e8c77f7392e6ed" alt="" /></a>
          </div>
          <div class="ig">
            <a href=""><img src="https://cdn-icons-png.flaticon.com/512/747/747393.png?w=740&t=st=1690510791~exp=1690511391~hmac=69af4349d87b3c444607865ed2a261faad2ac62f7816de3367f31b4b2c2ad1db" alt="" /></a>
          </div>
          <div class="twit">
            <a href=""><img src="https://cdn-icons-png.flaticon.com/512/1051/1051331.png?w=740&t=st=1690510902~exp=1690511502~hmac=023fe63ac7a9a8c09beb510e47c2601180dc93e044ac1efc9400a884451f663e" alt="" /></a>
          </div>
        </div>
      </div>
      <div class="footer-right">
        <h5 class="font-josesif-sans">Send Feedback</h5>
        <a class="btn btn-danger fw-bold" href="https://mail.google.com/mail/?view=cm&fs=1&to=sukribalor@gmail.com&su=SUBJECT&body=BODY&bcc=sukribalor@gmail.com" role="button" target="_blank"
          ><img src="https://cdn-icons-png.flaticon.com/512/281/281786.png?w=740&t=st=1690522339~exp=1690522939~hmac=0ff72059963244f06b0bd7e84d77f257335100db62ff9a808db58ad24db8570b" alt="" />Gmail</a
        >
        <a class="btn btn-success fw-bold" href="https://wa.me/6283139744994" role="button" target="_blank">
          <img src="https://cdn-icons-png.flaticon.com/512/220/220236.png?w=740&t=st=1690522689~exp=1690523289~hmac=536bc4bf9e388dd7e578115f9debb9f43891090be921498e8a45c60c87da5562" alt="" />WhatsApp</a
        >
      </div>
    </footer>
    <!-- script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>
