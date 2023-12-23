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
    <title>Kontak Kami</title>
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
        /*ukuran tablet*/
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
/*ukuran Hp*/
@media only screen and (max-width: 480px) {
    .navbar {
        height: 60px; /* Sesuaikan tinggi navbar sesuai kebutuhan */
        padding: 0 15px; /* Sesuaikan padding navbar sesuai kebutuhan */
    }

    .menu {
        top: 60px; /* Sesuaikan jarak menu dari navbar sesuai kebutuhan */
        padding: 10px 0;
    }

    #hamburger-btn {
        margin-right: 30px; /* Sesuaikan margin-right hamburger button sesuai kebutuhan */
    }

    .menu a::after {
        bottom: -8px; /* Sesuaikan jarak antara link dan garis bawah sesuai kebutuhan */
    }

    .navbar img {
        width: 50px; /* Sesuaikan lebar logo sesuai kebutuhan */
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
    flex-direction: column; /* Susun elemen dalam kolom untuk ukuran layar kecil */
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
        width: 30%;
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

    .slider-atas {
    position: absolute;
    z-index: 999;
    top: 30%;
    left: 50%;
    transform: translate(-50%, -50%);
    text-align: center;
}

.header-content {
    text-align: center; /* Center content */
}

.header-content img {
    width: 100%;
    
    height: auto;
    display: block;
    margin: 0 auto; /* Center the image */
}

.slider-text {
    margin-top: 10px; /* Adjust the margin-top value to create space between image and text */
    font-family: 'Nothing You Could Do', cursive;
    font-size: 32px;
}
/*ukuran tablet*/
@media only screen and (max-width: 768px) {
    .slider-atas {
        top: 15%; /* Adjust the vertical position for smaller screens */
    }

    .slider-text {
        margin-top: 0px;
        font-size: 100%; /* Adjust the font size for smaller screens */
    }
}
@media only screen and (max-width: 480px) {
    .slider-atas {
        top: 7%; /* Sesuaikan posisi vertikal sesuai kebutuhan */
    }

    .slider-text {
        margin-top: 0; /* Reset margin-top jika diperlukan */
        font-size: 70%; /* Sesuaikan ukuran font sesuai kebutuhan */
    }
}
.slider {
            width: 100%;
            height: 100%;
            
            overflow: hidden;
            position: relative;
        }


        .slides{
            width: 500%;
            height: 100%;
            display: flex;

        }

        .slider input{
            display: none;
        }

        .slide{
            width: 20%;
            transition: 2s;
        }

        .slide img{
            width: 100%;
            height: 100%;
        }

        .kotak {
            width: 100%;
            height: 1195px;
            background-color: white;
            display: flex;
        }

        .container{
            position: absolute;
            z-index: 999;
            top: 100%;
            width: 1320px;
            height: 908px;
            background-color: white;
            border: 1px solid black;
            left: 50%;
            transform: translate(-50%, -50%);
    
        }

        .container img {
            max-width: 100%;
            margin-left: 100px;
            margin-top: 100px;

            height: auto;
            margin-bottom: 20px;
        }

        .line {
            position: absolute;
            z-index: 9998;
            transform: translate(-65%, -65%);
            left: 50%;
            height: 95%;
            width: 1px;
            background-color: black;

        }

        .content {
            padding: 20px;
            flex: 1;
        }

        .content img {
            max-width: 100%;
            height: auto;
            display: block;
            margin-bottom: 20px;
        }

        .content h2 {
            color: #333;
        }

        .content p {
            color: #666;
        }

        .content input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-bottom: 20px;
        }
        .lokasi {
            display: flex;
            align-items: center;
        }
        .lokasi1 {
            display: flex;
            align-items: center;
        }

        .lokasi h2 {

            margin-left: 5px;
        }
        
        .sosialIcons1 a i{
            margin-top: 200px;
            
        }
        .instagram{
            margin-left: 300px;
            color: black;
            font-size: 2em; 
            width: 35px;
            height: 35px;
        }
        .linked{
            
            margin-left: 0px;
            color: black;
            font-size: 2em; 
            width: 35px;
            height: 35px;
        }
        .kanan{
            position: absolute;
            transform: translate(0%, 0%);
            left: 70%;
            margin-top: 0px;
        }
        
        .nama textarea {
            position: absolute;
            height: auto;
            transform: translate(0%, 0%);
            left: 51%;
            margin-top: 10%;
            border: none; /* Menghilangkan garis-garis bawaan */
            border-bottom: 1px solid #000; /* Menambahkan garis bawah dengan warna hitam */
            resize: none; /* Mencegah pengguna mengubah ukuran textarea */
            outline: none; /* Menghilangkan outline focus bawaan */
            font-size: 25px;
        }
        .email textarea{
            position: absolute;
            transform: translate(0%, 0%);
            left: 51%;
            margin-top: 20%;
            border: none; /* Menghilangkan garis-garis bawaan */
            border-bottom: 1px solid #000; /* Menambahkan garis bawah dengan warna hitam */
            resize: none; /* Mencegah pengguna mengubah ukuran textarea */
            outline: none; /* Menghilangkan outline focus bawaan */
            font-size: 25px;
        }
        .pesan textarea{
            position: absolute;
            font-size: 25px;
            transform: translate(0%, 0%);
            left: 51%;
            margin-top: 30%;
            border: none; /* Menghilangkan garis-garis bawaan */
            border-bottom: 1px solid #000; /* Menambahkan garis bawah dengan warna hitam */
            resize: none; /* Mencegah pengguna mengubah ukuran textarea */
            outline: none; /* Menghilangkan outline focus bawaan */
        }
        .send{
            position: absolute;
            transform: translate(0%, 0%);
            left: 80%;
            margin-top: 40%;
            cursor: pointer;
        }
textarea:is(:focus, :valid){
    border-color:black;
    padding: 14px;
    border-width: 2px;
}
textarea::-webkit-scrollbar{
    width: 0px;
}
/* Untuk layar dengan lebar maksimum 768px */
@media only screen and (max-width: 768px) {
    .kotak {
        height: auto; 
    }
        .lokasi {
            display: flex;
            align-items: center;
            margin-top: 50%;
            z-index: 999;
        }

        

    .container {
        width: 90%; /* Atur lebar menjadi 90% untuk responsivitas */
        max-width: none; /* Hapus batas lebar maksimum */
        height: auto; /* Atur ketinggian elemen menjadi otomatis untuk responsivitas */
        left: 50%;
        transform: translate(-50%, 0); /* Ubah transformasi menjadi hanya pada sumbu horizontal */
        position: relative; /* Ganti posisi menjadi relatif */
        margin-top: 20px; /* Atur margin atas */
        border: 1px solid black;
    }

    .container img{

        position: absolute;
        margin-left: 0; /* Atur margin kiri menjadi 0 */
        margin-top: 20px; /* Atur margin atas */
        top: 0%;
        z-index: 100;
        left: 25%;
    }

    

    .sosialIcons1 a i {
        margin-top: 40%; /* Reset margin atas */
        margin-bottom: 10%;
    }

    .instagram{

        margin-left: 50%; /* Atur margin kiri menjadi 0 */
    }

    .kanan {
    position: absolute;
    z-index: 100; 
    left: 30%;

}

.nama textarea,
.email textarea,
.pesan textarea {
    position: relative; /* Ganti posisi menjadi relatif */
    transform: translate(0%, 400%); /* Reset transformasi */
    left: 0; /* Reset posisi horizontal */
    margin-top: 30px; /* Reset margin atas */
    z-index: 1; /* Set nilai z-index yang lebih rendah untuk elemen textarea */

}
        .send {

        position: relative;
        top: 300px;
        left: 50%;
        z-index: 99;
    }

    .line{
        display: none;
    }
}

/* Untuk layar dengan lebar maksimum 480px */
@media only screen and (max-width: 480px) {
    .container {
        width: 90%; /* Atur lebar menjadi 90% untuk responsivitas */
        max-width: none;
        height: auto;
        left: 50%;
        transform: translate(-50%, 0); 
        position: relative;
        margin-top: 20px;
        border: 1px solid black;
    }
    .line{
        display: none;
    }
    .nama textarea,
    .email textarea,
    .pesan textarea,
    .send {
        margin-top: 20px; /* Atur margin atas */
    }
}



        .contactmap{
            justify-content: center;
            text-align: center;
            padding: 0;  
            margin-top: -5%;
            animation-duration: 1s; animation-delay: 0.5s; animation-name: fadeInUp;
        }
        /* Untuk layar dengan lebar maksimum 768px */
@media only screen and (max-width: 768px) {
    .contactmap {
        height: 100%;
        text-align: center; /* Pusatkan teks pada layar kecil */
        padding: 0; /* Atur padding menjadi 0 */
    }
}

/* Untuk layar dengan lebar maksimum 480px */
@media only screen and (max-width: 480px) {
    .contactmap {
        height: 100%;
        text-align: center; /* Pusatkan teks pada layar kecil */
        padding: 0; /* Atur padding menjadi 0 */
    }
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
        <a href="Galeri.php" >Galeri</a>
        <a href="Produk.php">Produk</a>
        <a href="TentangKami.php">Tentang Kami</a>
        <a href="KontakKami.php" class="clicked">Kontak Kami</a>
    </div>
</div>



    <div class="slider-atas">
        
        <div class="header-content">
            <img src="asset/home/tulisan nirmana 4.png" alt="Your Image">
            <div class="slider-text">
                <h2>Organized Work Space</h2>
                
            </div>
        </div>
    
    </div>
    <div class="slider">
        <div class="slider">
            <div class="slides">
            
            <div class="slide first">
                <img src="asset/kontak kami/gambarkontak.png">
            </div>
            
            
        </div>
        
        </div>
    </div>
       <div class="kotak">
        
    </div>
     <div class="container">
        <div class="content">
            <div class="kanan">
                <h2>
                    Send Us a Message
                </h2>
              
            </div>

            <div class="nama" id="nama">
                <form>                
                <textarea rows="1" cols="40" placeholder="Masukkan Nama"></textarea>
                </form>
            </div>

           
            <div class="email" id="email">
                <form>
                
                <textarea rows="1" cols="40" placeholder="Masukkan Email"></textarea>

                </form>  
            </div>
             <div class="Subject" id="Subject">
                <form>                
                <textarea rows="1" cols="40" placeholder="Masukkan Subject"></textarea>
                </form>
            </div>
            <div class="pesan" id="pesan">
                <form>
                
                <textarea rows="1" cols="40" placeholder="Masukkan Pesan"></textarea>

                </form>
            </div>
            <div class="send" id="send" onclick="sendEMail();">
                <img src="asset/kontak kami/send.png">
            </div>
            
            <img src="asset/kontak kami/pesan.png" alt="Your Image">
            
                <div class="lokasi">
                    <span class="material-symbols-outlined">location_on</span>
                    <h2>Jl. Warung Jati Barat No 39, Kalibata</h2>
                    
                </div>
                <div class="lokasi1">
                    <span class="material-symbols-outlined">location_on</span>
                    <h2>JI. Bengkong Raya Mustika Jaya VIII</h2>
                </div>

            
        </div>
        <div class="line"></div>
        <div class="sosialIcons1">
          
            <a class="instagram" href="https://instagram.com/nirmana.interni.indonesia?igshid=MzRlODBiNWFlZA=="><i class="fa-brands fa-instagram"></i></a>
            <a class="linked" href="https://www.linkedin.com/company/nirmana-interni-indonesia/?fbclid=PAAaYJIO3-a8y-UVZdHrv4LCUx6n3NOO4r-bS2OVWsxDH0sz4DWZRGSQobm-o"><i class="fa-brands fa-linkedin"></i></a>         
        </div>
            
        
    </div>
    <div class="contactmap">
    <iframe 
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d920.0730291762377!2d107.00647137696683!3d-6.307650357143363!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6993dca33116b3%3A0x466f0d40021cda15!2sPT%20Nirmana%20Interni%20Indonesia!5e0!3m2!1sid!2sid!4v1697790041615!5m2!1sid!2sid" 
        style="border:0; width:100%; height:500px; margin-top: -450px; " 
        allowfullscreen="" 
        loading="lazy" 
        referrerpolicy="no-referrer-when-downgrade">
    </iframe>
    
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
    <script src="https://smtpjs.com/v3/smtp.js">
</script>
    <script>

        /*var kirim = document.getElementById('send');
        kirim.addEventListener('click',function(e){
            e.preventDefault()
            var name = document.getElementById('nama').value;
            var email = document.getElementById('email').value;
            var subjek = document.getElementById('Subject').value;
            var pesan = document.getElementById('pesan').value;
            var body = 'name: ' + name + '<br/> email: ' + email + '<br/> subjek: ' + subjek + '<br/> message: ' + pesan;

            Email.send({
    SecureToken : "cc8b9255-9ca2-46f4-ab34-54324e782aea",
    To : 'arifsyaiful182@gmail.com',
    From : email,
   Subject : "This is the subject",
    Body : body
}).then(
  message => alert(message)
);

        })*/

        function sendEMail() {
    var senderEmail = document.getElementById("email").value;

    Email.send({
        SecureToken: "cc8b9255-9ca2-46f4-ab34-54324e782aea",
        To: 'arifsyaiful182@gmail.com',
        From: 'arifsyaiful182@gmail.com',
        Subject: "New Contact From Enquiry",
        Body: "Name: " + document.getElementById("nama").value +
            "<br> Email: " + "senderEmail" +
            "<br> Subject: " + document.getElementById("Subject").value +
            "<br> Message: " + document.getElementById("pesan").value
    }).then(
        function (message) {
            alert(message);
        }
    );
}



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


    const textarea = document.querySelector("textarea");
        textarea.addEventListener("keyup", e =>{
            textarea.style.height = "63px";
            let scHeight = e.target.scrollHeight;
            textarea.style.height = '${scHeight}px';
        });



    </script>



</body></html>