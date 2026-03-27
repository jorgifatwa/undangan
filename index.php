<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Fitri & Fahadz Wedding</title>
    <link rel="stylesheet" href="index.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta property="og:image" content="https://uo-apps.online/images/icon-link.jpg">
    <meta property="og:image:type" content="image/jpeg">
    <meta property="og:image:width" content="800">
    <meta property="og:image:height" content="800">
    <meta property="og:description" content="Ya allah, dengan segala kesucian hati, kami bersujud memohon Ridho-Mu, untuk menuju Sunnah Rasul-Mu, membentuk keluarga yang sakinah, mawaddah, warohmah">
    <meta property="og:url" content="https://uo-apps.online">
    <meta property="og:type" content="invitation" />
    <meta property="og:title" content="Wedding Invitation - Fitri & Fahadz" />
    <link rel="icon" type="image/x-icon" href="images/filter-logoo.png">
    <link rel="stylesheet" href="js/jquery.yzhanimageviewer.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://kit.fontawesome.com/088604aa90.css" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400&display=swap" rel="stylesheet"> 
  </head>
  <body>
    <div class="not-support justify-content-center" style="display: none;">
        <img src="images/dbrowser_not_support.svg" class="img-error" width="300" alt="">
        <p class="text-not-support">
          <b>
            Device Tidak Didukung!
          </b>  
        </p>
        <p class="text-not-support-dua">Silahkan buka link di handphone!</p>
    </div>
    <div class="page">
    <?php 
      if(isset($_GET['undangan'])){
        $nama_tamu = str_replace("-"," ",$_GET['undangan']);
      }else{
        $nama_tamu = "Tamu";
      }
    ?>
    <audio loop="" src="audio/lagu.mp3" id="audio"></audio>
    <div class="container-fluid pertama">
        <div class="content">
            <h4 class="text-tamu">WE INVITE YOU TO OUR WEDDING </h4>
            <h1 class="cover-title">
              Fitri & Fahadz
            </h1>
            <h4 class="text-tamu">05 April 2025 </h4>
            <div style="margin-top: 40% !important;">
              <h6 class="text-tamu">Dear : </h6>
              <h6 class="text-tamu"><?php echo $nama_tamu; ?></h6>
              <button class="btn btn-buka-undangan text-white mt-4"><i class="fa fa-envelope-open-o"></i>&nbsp;&nbsp;LET'S OPEN </button>
            </div>
          </div>
    </div>
    <!-- <div class="container-fluid-kedua">
      <div class="content-kedua">
        <h6 class="text-tamu-kedua">THE WEDDING OF</h6>
        <h1 class="cover-title-kedua">
            Fitri & Fahadz
        </h1>
        <h6 class="text-tamu-kedua">Minggu, 14 September 2024</h6>
      </div>
    </div>  -->
    <div class="container-fluid-kedua">
      <div class="col-12 p-2 m-0 title-ketiga justify-content-center">
        <p class="text-tamu-ketiga p-0 m-0 ">Hai</p>
        <p class="text-tamu-ketiga p-0 m-0 "><?php echo $nama_tamu; ?></p>
      </div>
      <div class="content-ketiga text-center reveal fade-bottom">
        <img src="images/bismillah.png" alt="" width="200">
        <h3 class="text-pengantin-ketiga">Assalamu'alaikum Wr. Wb</h3>
        <p class="text-tamu-ketiga p-3">Dengan memohon Rahmat dan Ridho Allah SWT, Kami bermaksud mengundang Bapak/ Ibu/ Saudara/ i dan sahabat sekalian untuk menghadiri acara pernikahan kami :</p>
      </div>
    </div> 
    <div class="container-fluid-ketiga">
      <div class="reveal fade-right">
        <center>
          <img src="images/profil-wanita.png" width="250" alt="">
        </center>
        <div class="content-ketiga text-center">
          <h3 class="text-nama-ketiga pt-3">Fitriani</h3>
          <p class="text-tamu-ketiga m-0">Putri dari</p> 
          <p class="text-tamu-ketiga m-0">Bapak H.Kustoni (Alm)</p>
          <p class="text-tamu-ketiga m-0">Ibu Hj. Masriah</p>
        </div>
        <center>
          <a href="https://www.instagram.com/fitridriani" target="_blank">
            <img class="gambar-ig mt-3" src="images/icon-ig.png" width="30" alt="">
          </a>
        </center>
      </div>
    </div>
    <div class="container-fluid-ketiga m-0">
      <div class="reveal fade-left">
        <center>
          <img src="images/profil-pria.png" width="250" alt="">
        </center>
        <div class="content-ketiga text-center">
          <h3 class="text-nama-ketiga pt-3">Moch Fahadz Al nasan </h3>
          <p class="text-tamu-ketiga m-0">Putra dari</p> 
          <p class="text-tamu-ketiga m-0">Bapak H. Asep komarudin</p>
          <p class="text-tamu-ketiga m-0">Ibu Hj. Yanti Rosliani</p>
        </div>
        <a href="https://www.instagram.com/rfahadz" target="_blank">
          <center>
            <img class="gambar-ig mt-3" src="images/icon-ig.png" width="30" alt="">
          </center>
        </a>
      </div>
    </div>
    <div class="container-fluid-keempat text-white text-center">

      <img src="images/1.jpg" id="bg-video">
      <br>
      <h3 class="text-pengantin-keempat reveal fade-bottom">Hari Pernikahan</h3>
      <center>
        <div class="garis-vertikal reveal fade-bottom"></div>
      </center>
      <br>
      <div class="reveal fade-bottom" id="demo"></div>
      <br>
      <button class="btn btn-outline-primary">Save The Date</button>
      <div class="card acara-1 text-white m-4">
        <div class="reveal fade-left">
          <p class="text-pengantin-kelima">
            Akad Nikah
          </p>
          <p class="text-tamu-kelima">
            Minggu, 5 April 2026
          </p>
          <p class="text-tamu-kelima">
            09:00 s.d Selesai
          </p>
          <img class="icon-ring" src="images/ring-icon.png" width="100" alt="">
          <p class="text-tamu-kelima">
            Rumah Mempelai Wanita
          </p>
          <p class="text-tamu-kelima">
            Kp.Cibarengkok, jln pangkalan ojeg warungtiwu Rt,01 Rw,05 desa sukaraharja, kec. Cibeber kab. Cianjur
          </p>
          <a href="https://maps.app.goo.gl/E9XP4v2Qcyc8SZxy8?g_st=ac" target="_blank">
            <button class="btn btn-buka-lokasi text-white mt-4"><i class="fa-solid fa-location-dot"></i> Menuju Lokasi </button>
          </a>
        </div>
        <br>
        <br>
        <br>
        <!-- <img class="reveal fade-bottom" src="images/percobaan.GIF" alt=""> -->
        <div class="gif-box">
    <!-- Ganti src dengan path foto kamu -->
          <img src="images/gif/1.png">
          <img src="images/gif/2.png">
          <img src="images/gif/3.png">
          <img src="images/gif/4.png">
          <img src="images/gif/5.png">
          <img src="images/gif/6.png">
          <img src="images/gif/7.png">
          <img src="images/gif/8.png">
        </div>
        <div class="reveal fade-right">
          <p class="text-pengantin-keenam">
            Resepsi
          </p>
          <p class="text-tamu-keenam">
            Minggu, 5 April 2026
          </p>
          <p class="text-tamu-keenam">
            11.00 - selesai
          </p>
          <img class="icon-ring" src="images/drink-icon.png" width="100" alt="">
          <p class="text-tamu-keenam mt-3">
            Rumah Mempelai Wanita
          </p>
          <p class="text-tamu-keenam">
            Kp.Cibarengkok, jln pangkalan ojeg warungtiwu Rt,01 Rw,05 desa sukaraharja, kec. Cibeber kab. Cianjur
          </p>
        </div>
      </div>
      <p class="text-pengantin-ketuju reveal fade-bottom">
        Galeri
      </p>
      <div class="example">
        <div class="col-12 d-flex reveal gallery-container fade-bottom">
          <img class="gallery-item" src="images/galeri/2.jpg" style="padding:1%" width="33.3333%" alt="">
          <img class="gallery-item" src="images/galeri/3.jpg" style="padding:1%" width="33.3333%"  alt="">
          <img class="gallery-item" src="images/galeri/4.jpg" style="padding:1%" width="33.3333%"  alt="">
        </div>
        <div class="col-12 d-flex reveal gallery-container fade-bottom">
          <img class="gallery-item" src="images/galeri/6.jpg" style="padding:1%" width="33.3333%" alt="">
          <img class="gallery-item" src="images/galeri/7.jpg" style="padding:1%" width="33.3333%"  alt="">
          <img class="gallery-item" src="images/galeri/8.jpg" style="padding:1%" width="33.3333%"  alt="">
        </div>
      </div>
      <div class="content-ketiga mt-4 text-center reveal fade-bottom">
        <h3 class="text-pengantin-keempat reveal fade-bottom">Wedding Gift</h3>
        <p class="text-tamu-ketiga p-3">Do'a restu keluarga, sahabat, serta rekan-rekan semua di pernikahan kami sudah sangat cukup
          sebagai hadiah, tetapi jika memberi merupakan tanda kasih, kami dengan senang hati menerimanya dan tentunya semakin melengkapi
          kebahagian kami
        </p>
        <div class="col-12 text-center">
            <button class="btn btn-buka-gift mb-2 mt-4 text-white" style="position:relative"><i class="fa-solid fa-gift"></i> Gift</button>
        </div>
        <div class="content-gift m-2" style="display:none;">
          <div class="card p-3 card-ucapan">
            <div class="card-body">
              <center>
                <img src="images/logo_bca.png" width="150" alt="">
                <p class="text-tamu-ketiga mt-2" id="nomorRekening">4020508421 - Moch Fahadz Al nasan (BCA)</p>
                <button class="btn btn-copy mb-2 mt-2 text-white" style="position:relative"><i class="fa fa-clone"></i>&nbsp;Copy</button>
                <br>
                <img src="images/logo_bca.png" width="150" alt="">
                <p class="text-tamu-ketiga mt-2" id="nomorDana">3480432796 - Fitriani (BCA)</p>
                <button class="btn btn-copy-dana mb-2 mt-2 text-white" style="position:relative"><i class="fa fa-clone"></i>&nbsp;Copy</button>
              </center>
            </div>
          </div>
        </div>
      </div>
      <p class="text-pengantin-keenam text-center">Doa Ucapan</p>
      <center>
        <div class="col-12 p-3 ucapan">
          <input type="text" id="nama" class="form-control col-12" placeholder="Nama">
          <textarea id="ucapan" class="form-control mt-2" cols="30" rows="5" placeholder="Ketik Ucapan & Doa"></textarea>
          <select id="hadir" class="form-control mt-2">
            <option value="">Konfirmasi Kehadiran</option>
            <option value="Hadir">Hadir</option>
            <option value="Tidak Hadir">Tidak Hadir</option>
          </select>
          <button class="btn btn-kirim col-12 text-white mt-2"> Kirim </button>
          <hr>
          <div class="card mt-3 card-ucapan">
            <div class="card-body ucapan-orang">
              <div id="ucapan-orang">
                <?php 
                    include 'config.php';
                    $query = "SELECT * FROM `ucapan` ORDER BY `id` DESC;";
                    $result = $conn->query($query);
                    if ($result->num_rows > 0) { 
                      while($row = $result->fetch_assoc()){
                ?>
                    <div class="d-flex">
                      <p class="text-tamu-kedelapan"><b><?php echo $row['nama'] ?></b></p>&nbsp;&nbsp;
                      <button class="btn-hadir text-white"><i class="fa-solid fa-circle-check"></i>&nbsp;&nbsp;<?php echo $row['status'] ?></button>
                    </div>
                    <p class="text-tamu-kedelapan"><b><?php echo $row['ucapan'] ?></b></p>&nbsp;&nbsp;
                  <?php } ?>
                <?php } ?>
              </div>
            </div>
          </div>
        </div>
      </center>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <p class="text-pengantin-ketiga mb-4 text-white">Thank You</p>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <p class="text-tamu-kedelapan">Made By</p>
      <a href="https://www.instagram.com/undanganonlinee.id/" target="_blank">
        <img src="images/logo.png" width="100" alt="">
      </a>
      <div class="d-flex justify-content-center mt-2">
          <a href="https://wa.link/q5d9fz" target="_blank">
            <img src="images/logo-wa.png" width="20" alt="">
          </a>
          &nbsp;&nbsp;
          <a href="https://www.instagram.com/undanganonlinee.id/" target="_blank">
            <img src="images/icon-ig-white.png" width="20" alt="">
          </a>
      </div>
      <br>
      <br>
    </div>
  </div>
  <div class="modal loading" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content text-center p-2">
      <center>
        <div class="spinner-border text-info" role="status">
          <span class="sr-only">Loading...</span>
        </div>
      </center>
      <span class="text-tamu-kedelapan text-black">Loading...</span>
    </div>
  </div>  
</div>  
  <script src="https://kit.fontawesome.com/088604aa90.js" crossorigin="anonymous"></script>
  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery.yzhanimageviewer.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
  </body>
</html>
<script>
  $(document).ready(function () {
    let width = screen.width;
    if(width > 1300){
        $('.page').hide();
        $('.not-support').show();
    }else{
        $('.page').show();
        $('.not-support').hide();
    }

    $('.gallery-container').yzhanImageViewer({
      selector: '.gallery-item', // Pilih gambar yang ingin dijadikan interaktif
      attrSelector: 'src',
      parentSelector: 'div',
      controls: {
        reverseDrag: {
          x:true,
          y:true
        },
        canChange:true
      },
    });

    $('.btn-buka-gift').on('click', function (){
      $(".content-gift").slideToggle();
    });

    $('.btn-copy').on('click', function () {
      var text = $('#nomorRekening').text().split('-')[0].trim();
      navigator.clipboard.writeText(text);
      var btn = $(this);
      btn.html("Copied ✓");
      setTimeout(() => {
        btn.html('<i class="fa fa-clone"></i>&nbsp;Copy');
      }, 1200);
    });

    $('.btn-copy-dana').on('click', function () {
      var text = $('#nomorDana').text().split('-')[0].trim();
      navigator.clipboard.writeText(text);
      var btn = $(this);
      btn.html("Copied ✓");
      setTimeout(() => {
        btn.html('<i class="fa fa-clone"></i>&nbsp;Copy');
      }, 1200);
    });

    $('.container-fluid-kedua').hide();
    $('.container-fluid-ketiga').hide();
    $('.container-fluid-keempat').hide();
    $('.container-fluid-kelima').hide();
    $('.container-fluid-keenam').hide();
    $('.container-fluid-ketuju').hide();
    $('.container-fluid-kedelapan').hide();
    $('.container-fluid-kesembilan').hide();
    $('.container-fluid-kesepuluh').hide();
    $('.cover8').hide();
    $(".btn-buka-undangan").click(function(){
      var audio = document.getElementById("audio");
      audio.play();
      $('.container-fluid-kedua').show();
      $('.container-fluid-ketiga').show();
      $('.container-fluid-keempat').show();
      $('.container-fluid-kelima').show();
      $('.container-fluid-keenam').show();
      $('.container-fluid-ketuju').show();
      $('.container-fluid-kedelapan').show();
      $('.container-fluid-kesembilan').show();
      $('.container-fluid-kesepuluh').show();
      $('.cover8').show();
      $(".container-fluid").slideUp(2000);
      setTimeout(function(){
        $('.container-fluid').hide();
      }, 2000);
    });

    function reveal() {
      var reveals = document.querySelectorAll(".reveal");

      for (var i = 0; i < reveals.length; i++) {
        var windowHeight = window.innerHeight;
        var elementTop = reveals[i].getBoundingClientRect().top;
        var elementVisible = 150;

        if (elementTop < windowHeight - elementVisible) {
          reveals[i].classList.add("active");
        } else {
          reveals[i].classList.remove("active");
        }
      }
    }

    window.addEventListener("scroll", reveal);

    $('.btn-kirim').on('click', function () {
      $(".loading").modal('show');
      var nama = $('#nama').val();
      var ucapan = $('#ucapan').val();
      var hadir = $('#hadir').val();
      if(nama!="" && ucapan!="" && hadir!=""){
        $.ajax({
          url: "save.php",
          type: "POST",
          data: {
            nama: nama,
            ucapan: ucapan,
            hadir: hadir			
          },
          cache: false,
          success: function(dataResult){
            var dataResult = JSON.parse(dataResult);
            if(dataResult.statusCode==200){
                  setTimeout(function(){
                    $( ".card-body" ).load(window.location.href + " #ucapan-orang" );
                    // $('#ucapan-orang').load('#ucapan-orang');
                    $(".loading").modal('hide');
                    $('#nama').val('');
                    $('#ucapan').val('');
                    $('#hadir').val('');
                  }, 2000);
            }
            else if(dataResult.statusCode==201){
              setTimeout(function(){
                $(".loading").modal('hide');
                alert("Silahkan Coba Lagi!");
              }, 2000);
            }
          }
        });
      }else{
        setTimeout(function(){
          $(".loading").modal('hide');
          alert('Isi semua data!');
        }, 2000);
      }
    })
    // Set the date we're counting down to
    var countDownDate = new Date("April 05, 2026 08:00:00").getTime();

    // Update the count down every 1 second
    var x = setInterval(function() {

      // Get today's date and time
      var now = new Date().getTime();

      // Find the distance between now and the count down date
      var distance = countDownDate - now;

      // Time calculations for days, hours, minutes and seconds
      var days = Math.floor(distance / (1000 * 60 * 60 * 24));
      var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
      var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
      var seconds = Math.floor((distance % (1000 * 60)) / 1000);

      // Display the result in the element with id="demo"
      document.getElementById("demo").innerHTML = days + "d : " + hours + "h : "
      + minutes + "m : " + seconds + "s";

      // If the count down is finished, write some text
        if (distance < 0) {
          clearInterval(x);
          document.getElementById("demo").innerHTML = "EXPIRED";
        }
      }, 1000);
  })
</script>