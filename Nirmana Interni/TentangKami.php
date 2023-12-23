<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nothing+You+Could+Do&display=swap" rel="stylesheet">
    <title>Tentang Kami</title>
    <style type="text/css">
        body {
            
            margin: 0;
            font-family: 'Montserrat', sans-serif;
        }

       
        .navbar {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 90px;
            color: #fff;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 40px;
            border: 1px solid #333;
            z-index: 99999;
            transition: background-color 0.3s;
        }

        .navbar.sticky {
            background-color: white;
            border-bottom: 1px solid #333; /* Atur border-bottom saat navbar menjadi sticky */
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Efek bayangan saat navbar menjadi sticky */
        }

        .menu {
            display: flex;
            gap: 40px;
            margin-right: 80px;
        }

        .menu a {
            text-decoration: none;
            font-weight: bold;
            color: black;
            position: relative;
            transition: color 0.3s;
        }

        .menu a:after {
            content: "";
            position: absolute;
            background-color: darkred;
            height: 3px;
            width: 0;
            left: 50%;
            transform: translateX(-50%);
            bottom: -10px;
            transition: 0.3s;
        }

        .menu a.clicked,
        .menu a:hover {
            color: black;
        }

        .menu a.clicked:after,
        .menu a:hover:after {
            width: 100%;
        }

        .navbar img {
            width: 100px;
            height: auto;
            display: inline;
            opacity: 300%;
        }
        #menu-toggle {
          display: none;
        }
       @media only screen and (max-width: 768px) {
        .navbar {
            height: 70px;
            padding: 0 20px;
        }

    .menu {
        display: none;
        flex-direction: column;
        position: absolute;
        top: 70px;
        left: 0;
        width: 100%;
        background: rgba(0, 0, 0, 0.7);
        padding: 10px 0;
        text-align: center;
    }

    .menu a {
        color: white;
        margin: 10px 0;
        display: inline-block; /* Display as inline block */
        position: relative;
    }

    .menu a::after {
        content: "";
            position: absolute;
            background-color: white;
            height: 3px;
            width: 0;
            left: 50%;
            transform: translateX(-50%);
            bottom: -10px;
            transition: 0.3s;
    }

    .menu a.clicked,
    .menu a:hover {

        color: white;
    }

    .menu a.clicked::after,
    .menu a:hover::after {
        width: 100%;
        
    }

    #menu-toggle:checked + #hamburger-btn + .menu {
        display: flex;
    }

    #hamburger-btn {
        display: block;
        cursor: pointer;
        padding: 10px;
        z-index: 1000;
        margin-right: 50px;

    }

    #hamburger-btn span {
        display: block;
        height: 2px;
        width: 25px;
        background-color: black;
        margin: 5px 0;
        transition: 0.3s; /* Added transition for hamburger bars */
    }

    .navbar img {
        width: 60px;
    }

    #menu-toggle:checked + #hamburger-btn .bar:nth-child(1) {
        transform: rotate(-45deg) translate(-5px, 6px);
    }

    #menu-toggle:checked + #hamburger-btn .bar:nth-child(2) {
        opacity: 0;
    }

    #menu-toggle:checked + #hamburger-btn .bar:nth-child(3) {
        transform: rotate(45deg) translate(-5px, -6px);
    }
}
        /*bawah*/
        .bawah {
            width: 100%; /* Lebar kotak */
            height: 98px; /* Tinggi kotak */
            background: linear-gradient(to top, #8B4513, #505050);
            color: #fff; /* Warna tulisan di dalam kotak */
            text-align: center; /* Pusatkan tulisan horizontal di dalam kotak */
            line-height: 100px; /* Pusatkan tulisan vertikal di dalam kotak */
            font-size: 64px; /* Ukuran font tulisan */
            font-weight: lighter;
        }
        @media only screen and (max-width: 768px) {
    .bawah {
        height: auto; /* Gunakan tinggi otomatis untuk responsivitas */
        font-size: 36px; /* Atur ukuran font yang lebih kecil */
        line-height: normal; /* Kembalikan line-height ke normal */
    }
}
@media only screen and (max-width: 480px) {
    .bawah {
        height: auto; /* Gunakan tinggi otomatis untuk responsivitas */
        font-size: 30px; /* Atur ukuran font yang lebih kecil */
        line-height: normal; /* Kembalikan line-height ke normal */
    }
}
        /*Footer*/

        #footer{

        width: 100%;
        display: flex;
        justify-content: space-between;
        background-color: #F7E6BD;
        }   
        .container-socmed{
        text-align: center;
        align-items: center;
        margin-top: 20px;
        }
        .sosialIcons a i{
        color: black;
        font-size: 2em; 
        width: 35px;
        height: 35px;
        margin-top: 16px;
        }
        .container-socmed h3{
        font-weight: lighter;
        font-size: 25px;   
        }
        .container-socmed img{
        width: 7%
        }

        .container-address img{
        width: 10%;
        }
        .container-address h3{
        font-weight: lighter;
        font-size: 25px;
        margin-top: 20px;
        margin-left: 20px;    
        }
        .alamat{
         padding-top: 26px;   
        }
        .container-address{
        width: 30%;
        }

        .container-address p{
        font-size: 14px;
        }
        .alamat{
        padding-top: 26px; 
        }

        .address-1, .address-2{
        display: flex;
        align-items: center;
        gap: 10px;
        }
        .copyrate p{
        text-align: center;
        }
        .copyrate {
            bottom: 0;
            left: 0;
            right: 0;
            text-align: center; /* Pusatkan teks secara horizontal */
            background-color: #F7E6BD; /* Atur warna latar belakang sesuai kebutuhan */
            padding: 10px 0; /* Atur padding sesuai kebutuhan */
        }
.container-contact-logo{
        display: flex;
        gap: 10px;
        }

        .container-contact-logo img{
        width: 60%;
        }
        .contact-text h2{
        font-size: 30px;
        }
        .contact-text h4{
        white-space: nowrap;
        font-weight: lighter;
        font-size: 20px;
        letter-spacing: 1px;
        margin-top: -10px;  
        }
        .contact-text{
         margin-top: 20px;
         margin-left: -30px;   
        }
        .contact-text2{
            font-size: 20px;
        margin-left: 80px;
        }

.material-symbols-outlined {
  font-variation-settings:
  'FILL' 0,
  'wght' 400,
  'GRAD' 0,
  'opsz' 24
}

@media only screen and (max-width: 768px) {
    #footer {
    flex-direction: column;
    text-align: center;
}

.container-contact-logo img {
    width: 100%; /* Lebar gambar 100% untuk responsivitas */
    max-width: 200px; /* Batasi lebar maksimum gambar */
    margin-left: 0; /* Atur margin menjadi 0 */
}

.contact-text {
    margin-left: 0; /* Atur margin menjadi 0 */
}

.contact-text2 {
    margin-left: 0; /* Atur margin menjadi 0 */
}

.container-contact,
.container-socmed,
.container-address {
    width: 100%; /* Lebar elemen menjadi 100% */
    margin-bottom: 20px; /* Atur margin bawah */
}

.address-1,
.address-2 {
    flex-direction: column;
    text-align: center;
}

.container-address img {
    width: 80%; /* Lebar gambar 80% untuk responsivitas */
    margin: 0 auto; /* Pusatkan gambar secara horizontal */
}

.container-contact-logo,
.container-socmed,
.container-address {
    margin-left: 0; /* Atur margin menjadi 0 */
    margin-right: 0; /* Atur margin menjadi 0 */
}

.container-socmed h3,
.container-address h3 {
    margin-left: 0; /* Atur margin menjadi 0 */
}

.copyrate {
    padding: 10px; /* Atur padding pada bagian bawah */
}

}

@media only screen and (max-width: 480px) {
    #footer {
        flex-direction: column;
        text-align: center;
    }

    .container-contact-logo img {
        width: 20%;
        max-width: none; /* Hapus batasan lebar maksimum gambar */
        margin-left: 0;
    }

    .contact-text,
    .contact-text2 {
        margin-left: 0;
    }

    .container-contact,
    .container-socmed,
    .container-address {
        width: 100%;
        margin-bottom: 20px;
    }

    .address-1,
    .address-2 {
        flex-direction: column;
        text-align: center;
    }

    .container-address img {
        width: 80%;
        margin: 0 auto;
    }

    .container-contact-logo,
    .container-socmed,
    .container-address {
        margin-left: 0;
        margin-right: 0;
    }

    .container-socmed h3,
    .container-address h3 {
        margin-left: 0;
    }

    .copyrate {
        padding: 10px;
    }
}





    .countainer {
            width: 100%;
            height: 100%;
        }
        .countainer-img {
            position: relative;
            top: 0px;
            height: calc(60vh - 80px);
            overflow: hidden;
            margin-bottom: 10px;
        }

        .img1 {
            width: 100%;
            height: 100%;
            object-fit: cover;
            position: absolute;
            top: 0;
            left: 0;
            z-index: -1;
        }

        

        .titleText {
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            position: absolute;
            background: rgba(255, 255, 255, 0.5);
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            opacity: 0;
            transition: 0.6s; 
        }

        .titleText:hover {
            opacity: 1;
        }
@media screen and (max-width: 768px) {
  .container-img {
    height: calc(40vh - 40px);
  }
}

/* Responsive styles for max-width: 480px */

@media screen and (max-width: 480px) {
  .container-img {
    height: calc(30vh - 20px);
  }
}


        /* Default styles */

.container-text {
  width: 100%;
  height: 42vh;
  display: flex;
  justify-content: center;
  align-items: center;
  margin: 0 auto;
}

/* Responsive styles for max-width: 768px */

@media screen and (max-width: 768px) {
  .container-text {
    height: 20vh;
  }
}

/* Responsive styles for max-width: 480px */

@media screen and (max-width: 480px) {
  .container-text {
    height: 10vh;
  }
}

       
        .countainer-visi {
            width: 90%;
            height: 50vh;
            flex-direction: row;
            align-items: flex-start; 
            justify-content: space-between;
            margin: 0 auto;
            margin-top: 100px;
        }

        .h1-visi {
            margin-bottom: 20px;
            white-space: nowrap;
            bottom: 23vh;
            font-weight: bold;
            font-size: 48px;
        }

        div.p-visi {
            width: 40%;
            height: 15vh;
            position: relative;
            margin-bottom: 20px;
            margin-right: 20vh;
            font-size: 27px;
            margin-left: 10vh;
        }

        .p1 {
            text-align: left;
            margin-right: 50px;
            margin-left: -95px;
        }

        .img2 {
            margin-left: 300px;
            width: 60%;
            height: 100%;
            position: relative;
            bottom: 26vh;
            left: 50vh;
            z-index: 1;
        }

        @media screen and (max-width: 768px) {
  .container-visi {
    flex-direction: column;
    align-items: center;
    justify-content: center;
    margin-top: 50px;
  }

  .h1-visi {

    bottom: 0;
    text-align: center;
  }

  div.p-visi {
    width: 80%;
    
    margin-left: 150px;
    text-align: center;
  }

  .img2 {
    margin-top: 20px;
    margin-left: 0;
    width: 100%;
    height: 100%;
    bottom: 0;
    left: 0;
  }
}

/* Responsive styles for max-width: 480px */

@media screen and (max-width: 480px) {
  .container-visi {
    margin-top: 30px;
  }

  .h1-visi {
    font-size: 36px;
  }

  div.p-visi {
    width: 100%;
    margin-right: 0;
    margin-left: 0;
  }

  .img2 {
    margin-left: 0;
    width: 100%;
    bottom: 0;
    left: 0;
  }
}
        /* End Gambar 2 */

        /* Ini Gambar 3 */
        .countainer-misi {
            width: 90%;
            height: 70vh;
            flex-direction: row;
            align-items: flex-start; 
            justify-content: space-between;
            margin: 0 auto;
        }

        .h1-misi {
            margin-left: 105vh;
            margin-top: 15vh;
            white-space: nowrap;
             font-weight: bold;
            font-size: 48px;
        }

        div.p-misi {
            width: 40%;
            font-size: 27px;
            height: 15vh;
            position: relative;
            margin-bottom: 20px;
            margin-left: 115vh;
        }

        .p2 {
            text-align: left;
            margin-top: 20px;
            margin-right: 50px;
            margin-left: -95px;

           
        }

        .img3 {
           
            width: 60%;
            height: 80%;
            position: relative;
            bottom: 20vh;
            right: 10vh;
           
            
        }

@media screen and (max-width: 768px) {
  .container-misi {
    flex-direction: column;
    align-items: center;
    justify-content: center;
    margin-top: 300px;
  }

  .h1-misi {
    margin-left: 0;
    margin-top: 200px;
    text-align: center;

  }

  div.p-misi {
    margin-top: 200px;
    width: 80%;
    margin-left: 0;
    margin-right: 0;

  }

  .p2 {
    margin-left: 0;
    text-align: center;
  }

  .img3 {
    width: 100%;
    bottom: 0;
    right: 0;
    margin-top: 300px;
  }
}

/* Responsive styles for max-width: 480px */

@media screen and (max-width: 480px) {
  .container-misi {
    height: 50vh;
  }

  .h1-misi {
    font-size: 36px;
  }

  div.p-misi {
    width: 100%;
    margin-left: 0;
    margin-right: 0;
  }

  .p2 {
    margin-left: 0;
    text-align: center;
  }

  .img3 {
    width: 100%;
    bottom: 0;
    right: 0;
  }
}

        /* End Gambar 3 */
        
        .p3{
            padding-left: 15vh;
            width: 85%;
            height: 30px;
            font-weight: bold;
            font-size: 36px;
            text-align: center;
            
        }

        .p4 {
            padding-left: 15vh;
            width: 85%;
            height: 14vh;
            font-size: 30px;
            text-align: center;
            font-weight: lighter;
        }
        
        /* Ini galeri */
        .container-galeri {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding-left: 20px;
        }

        .gallery-item {
            flex: 1;
            padding: 20px;
            text-align: right;
        }

        .bayerimg, .webbedsimg {
            max-width: 100%;
            height: auto;
        }

        .side-images {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }

        .side-images img {
            max-width: 45%;
            height: auto;
        }

        .gallery-item h1 {
            margin-top: 10px;
            padding-bottom: 15px;
            text-align: left;
            margin-left: 100px;
             font-weight: bold;
            font-size: 48px;
        }

        .text-kanan1 {
            text-align: right; /* Untuk mengatur teks ke kanan */
            float: right; /* Untuk mengatur posisi elemen di sebelah kanan */
            margin-top: 10px;
            padding-bottom: 15px;
        }

        .text-kanan2 {
            text-align: right; /* Untuk mengatur teks ke kanan */
            float: right; /* Untuk mengatur posisi elemen di sebelah kanan */
            margin-top: 10px;
            padding-bottom: 15px;
        }
        /* End galeri */
        .text-who{
            font-size: 30px;
            text-align: center;
            margin-top: 50px;
            margin-right: 50px;
            margin-left: 50px;

        }



    </style>
</head>
<body>
    <div class="navbar">
    <img src="asset/logo.png" alt="Logo">
    <input type="checkbox" id="menu-toggle">
    <label for="menu-toggle" id="hamburger-btn">
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>
    </label>
    <div class="menu">
        <a href="Home.php" >Home</a>
        <a href="Galeri.php">Galeri</a>
        <a href="Produk.php">Produk</a>
        <a href="TentangKami.php"class="clicked">Tentang Kami</a>
        <a href="KontakKami.php">Kontak Kami</a>
    </div>
</div>

    <div class="countainer">
    <div class="countainer-img">
        <img class="img1" src="asset/tentangkami/aboutimg.jpg">
        <div class="titleText">
            <h1>This Is Nirmana Interni</h1>

        </div>
    </div>

    <div class="countainer-text">
        <div class="text-who">
            <p>Nirmana lnterni Indonesia, perusahaan yang berlokasi di Jakarta terbentuk untuk memberikan inovasi 
            dalam menciptakan furniture kantor yang terdiri dari kursi, meja, sofa dan furniture yang berkaitan 
            dengan ruang kerja. PemiIihan furniture yang baik sangat penting dalam membentuk ruang kerja yang baik 
            serta menghasilkan produktifitas kerja yang maksimal.</p>

            <p>
            Dengan pemikiran tersebut Nirmana memberikan solusi dengan menyediakan furniture kerja berkualitas, 
            mengutamakan fungsi dan kenyamanan yang baik bagi pengguna. Kami menyediakan furniture kantor dengan 
            harga yang terjangkau dengan kualitas dan servis terbaik.
            </p>
            <p>
            Tim kami terdiri dari individual berpengalaman yang berkomitmen untuk memenuhi kebutuhan klien. 
            Kami fokus untuk selalu menyediakan furniture terbaik untuk menciptakan sebuah ruang kerja yang 
            dapat meningkatkan produktifitas dan efisiensi penggunanya.
            </p>
        </div>
    </div>

    <div class="countainer-visi">
        <h1 class="h1-visi">Visi Perusahaan</h1>
        <div class="p-visi">
            <p class="p1">“Menjadi Perusahaan Furniture Kantor yang terdepan, 
                Bekerja dengan Nilai Professional, Intergritas, Terbuka, Dan Inovatif”.
            </p>
        </div>
        <img class="img2" src="asset/tentangkami/visiimg.png">
    </div>

    <div class="countainer-misi">
        <h1 class="h1-misi">Misi Perusahaan</h1>
        <div class="p-misi">
            <p class="p2">
            “Berkomitmen Untuk Berkontribusi aktif untuk dunia furniture kantor di Indonesia dengan menghasilkan 
            furniture bermutu, ramah lingkungan dan berorientrasi kepada kepuasan pelanggan”.
            </p>
        </div>
        <img class="img3" src="asset/tentangkami/misiimg.png">
    </div>

    <div class="text-our">
        <h3 class="p3">Our Work and Clients</h3>
        <h3 class="p4">
        Nirmana Interni telah dipercaya oleh banyak customers mulai dari 
        bisnis, perkantoran, hingga korporasi besar
        </h3>
    </div>

    <div class="container-galeri">
        <div class="gallery-item">
            <h1>Bayer Indonesia</h1>
            <img class="bayerimg" src="asset\tentangkami\bayer.png">
        </div>

        <div class="gallery-item">
            <h1 class="text-kanan1">WebBeds</h1>
            <img class="webbedsimg" src="asset\tentangkami\webbeds.png">
        </div>
    </div>

    <div class="container-galeri">
        <div class="gallery-item">
            <h1>Lintas Bahari Nusantara</h1>
            <img src="asset\tentangkami\lintasbahari.png">
        </div>

        <div class="gallery-item">
            <h1 class="text-kanan2">Bariel Indo Global</h1>
            <img src="asset\tentangkami\bariel.png">
        </div>
    </div>


</div>   
 
    <div class="bawah">
        
            Nirmana Interni
        
    </div>


    <div id="footer">
        <div class="container-contact">
            <div class="container-contact-logo">
                <img src="asset/logo.png">
                <div class="contact-text">
                    <h2>Nirmana Interni</h2>
                    <h4>Organized Office Furniture</h4>
                </div>
            </div>
            <div class="contact-text2">
                <p>Email: nirmanainterni@gmail.com</p>
                <p>Whatsapp: 081377177172</p>
            </div>
        </div>

        <div class="container-socmed">
            <h3>Ikuti Kami</h3>
        <div class="sosialIcons">
          
            <a href="https://instagram.com/nirmana.interni.indonesia?igshid=MzRlODBiNWFlZA=="><i class="fa-brands fa-instagram"></i></a>
            <a href="https://www.linkedin.com/company/nirmana-interni-indonesia/?fbclid=PAAaYJIO3-a8y-UVZdHrv4LCUx6n3NOO4r-bS2OVWsxDH0sz4DWZRGSQobm-o"><i class="fa-brands fa-linkedin"></i></a>         
        </div>
        </div>

        <div class="container-address">
            <h3 class="alamat">Alamat</h3>
                <div class="address-1">
                    <span class="material-symbols-outlined">
pin_drop
</span>
                    
                    <p>ALDEOZ BUILDING - Lt 6. Jl. Warung Jati Barat No 39, Kalibata, Pancoran, Jakarta Selatan - 12740, DKI JAKARTA - INDONESIA</p>
                </div>
                <div class="address-2">
                    <span class="material-symbols-outlined">
pin_drop
</span>
                  
                    <p>Workshop - JI. Bengkong Raya Mustika Jaya VIII, RT.004/RW.003, Pandurenan, Mustika Jayo, Bekasi - 17143, BEKASI – INDONESIA </p>
            </div>
        </div>
    </div>
        <div class="copyrate">
            <p>© NIRMANA INTERNI 2023 ALL RIGHTS RESERVED.</p>
        </div>
    
    <script>
        /*navbar*/

window.addEventListener('scroll', function () {
    const navbar = document.querySelector('.navbar');

    // Tambahkan class "sticky" saat scroll melebihi tinggi navbar
    if (window.scrollY > navbar.offsetHeight) {
        navbar.classList.add('sticky');
    } else {
        navbar.classList.remove('sticky');
    }
});



    </script>



</body></html>