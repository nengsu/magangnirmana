<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
    <title>Kayseri</title>
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

        
        
       /* css untuk slider gambar
*/
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
    margin-top: 20px; /* Adjust the margin-top value to create space between image and text */
    font-family: 'Nothing You Could Do', cursive;
    font-size: 32px;
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



        .navigation-manual{
            position: absolute;
            width: 100%; /* Update width to 100% */
            bottom: 20px; /* Adjust the bottom value */
            display: flex;
            justify-content: center;
        }

.manual.btn{
    border: 2px solid #40D3DC;
    padding: 5px;
    border-radius: 10px;
    cursor: pointer;
    transition: 1s;
}

.manual.btn:not(:last-child){
    margin-right: 40px;
}

manual-btn:hover{
    background: #40D3DC;
}

#radio1:checked ~ .first{
    margin-left: 0;
}

#radio2:checked ~ .first{
    margin-left: -20%;
}

#radio3:checked ~ .first{
    margin-left: -40%;
}

#radio4:checked ~ .first{
    margin-left: -60%;
}



.navigation-auto{
    position: absolute;
    display: flex;
    width: 100%; /* Update width to 100% */
    justify-content: center;
    bottom: 50px; /* Adjust the bottom value */
}

.navigation-auto div{
    border: 2px solid #40D3DC;
    padding: 5px;
    border-radius: 10px;
    transition: 1s;
}

.navigation-auto div:not(:last-child){
    margin-right: 40px;
}

        #radio1:checked ~ .navigation-auto .auto-btn1,
        #radio2:checked ~ .navigation-auto .auto-btn2,
        #radio3:checked ~ .navigation-auto .auto-btn3,
        #radio4:checked ~ .navigation-auto .auto-btn4 {
            background: #40D3DC;
        }


        .atas {
            margin-top: 50px;
            width: 100%; /* Lebar kotak */
            height: 100px; /* Tinggi kotak */
            background: #F7E6BD;
            color: black; /* Warna tulisan di dalam kotak */
            line-height: 100px; /* Pusatkan tulisan vertikal di dalam kotak */
            font-size: 64px; /* Ukuran font tulisan */
            font-weight: bold;

            
        }
        .atas p{
            position: absolute;
            top: 59%;
            left: 40%;
        }
        .atas svg{
            margin-top: 1%;
            cursor: pointer;
            margin-left: 1%;
        }
        .navbarbursa{

            width: 100%; /* Lebar navbar 1920px */
            height: 90px; /* Tinggi navbar 163px */
            color: #fff;
            display: flex;
            justify-content: center; /* Memindahkan logo ke kiri dan tautan menu ke kanan */
            align-items: center;
            font-size: 40px;
            margin-top: 62px;
        }

        .listbursa {
            
            display: flex;
            align-items: flex-end;
            gap: 100px; /* Jarak antara tautan menu */
        }

        .listbursa a {
            color: #fff;
            text-decoration: none;
            font-weight: bold;
            color: #000;
            transition: border-bottom 0.2s; 
            border-bottom: 2px solid transparent;
        }

        .listbursa a:hover,
        .listbursa a.clicked {
            border-bottom: 2px solid #000; 
        }

.kursi {
            margin-left: 50px;
            margin-top: 50px;
    position: relative;
    width: 768px;
}

.main-image {
    width: 557px;
    height: 583px;

    
}

.small-images {
    position: absolute;
    
    top: 50%;
    transform: translateY(-50%);
    display: flex;
    flex-direction: column; /* Mengatur susunan ke kolom */
    align-items: flex-end; /* Menggeser ke tepi kanan */
    right: 70px; /* Jarak dari tepi kanan */
}

.small-image {
     border: 1px solid black;
     border-radius: 30px;
    width: 141px;
    height: 127px;
    margin-bottom: 25px; /* Jarak antar gambar kecil */
    cursor: pointer;
    transition: transform 0.3s ease-in-out;
}



.bursahb h1{
    color: #000;
    margin-left: 10%;
    margin-top: 5%;
font-size: 40px;

font-style: normal;
font-weight: 600;
line-height: normal;
}
.bursamb h1{
    color: #000;
    top: 99%;
    left: 70%;
    position: absolute;
    font-size: 40px;

font-style: normal;
font-weight: 600;
line-height: normal;
}
.BursaIV h1{
    color: #000;
    margin-left: 10%;
    margin-top: 5%;
font-size: 40px;

font-style: normal;
font-weight: 600;
line-height: normal;
}


.kursimb {

            margin-left: 50px;
            margin-top: 50px;
    position: relative;
    width: 768px;
    left: 50%;
    top: 106%;
    position: absolute;

}

.kursimb-awal {
    float: right;
    width: 557px;
    height: 583px;

    
}

.kursimb-awal-kecil {
    
    left: 0%;
    display: flex;
    flex-direction: column; /* Mengatur susunan ke kolom */
    align-items: flex-end; /* Menggeser ke tepi kanan */
    right: 70px; /* Jarak dari tepi kanan */
}

.kursimb-awal-kecil-kecil {

    border: 1px solid black;
    border-radius: 30px;
    width: 141px;
    height: 127px;
    margin-bottom: 25px; /* Jarak antar gambar kecil */
    cursor: pointer;
    transition: transform 0.3s ease-in-out;
}
.kursibursaiv{
    margin-left: 50px;
            margin-top: 50px;
    position: relative;
    width: 768px;
}
      .kursibursaiv-main{
    width: 557px;
    height: 583px;

    
}

.kursibursaiv-smal {
    position: absolute;
    
    top: 50%;
    transform: translateY(-50%);
    display: flex;
    flex-direction: column; /* Mengatur susunan ke kolom */
    align-items: flex-end; /* Menggeser ke tepi kanan */
    right: 70px; /* Jarak dari tepi kanan */
}

.kursibursaiv-smal-smal {
     border: 1px solid black;
     border-radius: 30px;
    width: 141px;
    height: 127px;
    margin-bottom: 25px; /* Jarak antar gambar kecil */
    cursor: pointer;
    transition: transform 0.3s ease-in-out;
}  
        .bursa-tulisan{
            position: absolute;
            top: 200%;
            left: 50%;
        }
        .bursa-tulisan h2{
            color: #000;
            font-size: 40px;
            font-style: normal;
            font-weight: 600;
            line-height: normal;
        }
        .bursa-tulisan p{
            color: #000;
            text-align: justify;
            margin-right: 100px;
            font-size: 36px;
            font-style: normal;
            font-weight: 400;
            line-height: normal;
        }
        .bursa-tulisan button{
             background: linear-gradient(to top, #8B4513, #505050);
             color: white;
             font-size: 32px;
             width: 291px;
            height: 82px;
            flex-shrink: 0;
            border-radius: 30px;
            margin-left: 250px;
            cursor: pointer;

        }
        .bursa-tulisan button:hover{
            background: linear-gradient(to top, #8B4513, #505050);
        transform: scale(1.05);
        cursor: pointer;
        }
        .bawah {
            width: 100%; /* Lebar kotak */
            height: 98px; /* Tinggi kotak */
            background: linear-gradient(to top, #8B4513, #505050);
            color: #fff; /* Warna tulisan di dalam kotak */
            text-align: center; /* Pusatkan tulisan horizontal di dalam kotak */
            line-height: 100px; /* Pusatkan tulisan vertikal di dalam kotak */
            font-size: 50px; /* Ukuran font tulisan */
            font-weight: lighter;
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
        <a href="Produk.php"class="clicked">Produk</a>
        <a href="TentangKami.php">Tentang Kami</a>
        <a href="KontakKami.php">Kontak Kami</a>
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
            <input type="radio" name="radio-btn" id="radio1">
            <input type="radio" name="radio-btn" id="radio2">
            <input type="radio" name="radio-btn" id="radio3">
            <input type="radio" name="radio-btn" id="radio4">
            <div class="slide first">
                <img src="asset/produk/bursa/bursacoro.png">
            </div>
            <div class="slide">
                <img src="asset/produk/bursa/bursacoro1.png">
            </div>
            <div class="slide">
                <img src="asset/produk/bursa/bursacoro2.png">
            </div>
            <div class="slide">
                <img src="asset/produk/bursa/bursacoro3.png">
            </div>
            <div class="navigation-auto">
                <div class="auto-btn1"></div>
                <div class="auto-btn2"></div>
                <div class="auto-btn3"></div>
                <div class="auto-btn4"></div>
            </div>
        </div>
        <div class="navigation-manual">
            <label for="radio1" class="manual-btn"></label>
            <label for="radio2" class="manual-btn"></label>
            <label for="radio3" class="manual-btn"></label>
            <label for="radio4" class="manual-btn"></label>
        </div>
        </div>
    </div>

    <div class="atas" onclick="redirectToProduk()">
    <a href="produk.php" style="text-decoration: none; color: inherit;">
        <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 60 60" fill="none">
            <path d="M13.125 28.125H50.625C51.1223 28.125 51.5992 28.3225 51.9508 28.6742C52.3025 29.0258 52.5 29.5027 52.5 30C52.5 30.4973 52.3025 30.9742 51.9508 31.3258C51.5992 31.6775 51.1223 31.875 50.625 31.875H13.125C12.6277 31.875 12.1508 31.6775 11.7992 31.3258C11.4475 30.9742 11.25 30.4973 11.25 30C11.25 29.5027 11.4475 29.0258 11.7992 28.6742C12.1508 28.3225 12.6277 28.125 13.125 28.125Z" fill="black"/>
            <path d="M13.9012 29.9999L29.4524 45.5474C29.8045 45.8995 30.0023 46.377 30.0023 46.8749C30.0023 47.3728 29.8045 47.8504 29.4524 48.2024C29.1004 48.5545 28.6228 48.7523 28.1249 48.7523C27.627 48.7523 27.1495 48.5545 26.7974 48.2024L9.92243 31.3274C9.74782 31.1533 9.60929 30.9463 9.51476 30.7186C9.42024 30.4908 9.37158 30.2466 9.37158 29.9999C9.37158 29.7533 9.42024 29.5091 9.51476 29.2813C9.60929 29.0535 9.74782 28.8466 9.92243 28.6724L26.7974 11.7974C27.1495 11.4454 27.627 11.2476 28.1249 11.2476C28.6228 11.2476 29.1004 11.4454 29.4524 11.7974C29.8045 12.1495 30.0023 12.627 30.0023 13.1249C30.0023 13.6228 29.8045 14.1004 29.4524 14.4524L13.9012 29.9999Z" fill="black"/>
        </svg>
        <p>The Chair</p>
    </a>
</div>

    <div class="navbarbursa">
       
        <div class="listbursa">
            <a href="Bursa.php" >BURSA</a>
            <a href="Van.php">VAN</a>
            <a href="Izmir.php">IZMIR</a>
            <a href="Kayseri.php" class="clicked">KAYSERI</a>
            <a href="Tarsus.php">TARSUS</a>
        </div>
    </div>

    <div class="bursahb">
        <h1>
            Kayseri White Frame
        </h1>

    </div>
    <div class="kursi">
    <img class="main-image" src="asset/produk/bursa/Kayseri White Frame.png" alt="Main Image">
    <div class="small-images">
        <img class="small-image" src="asset/produk/bursa/Kayseri White Frame1.png" alt="Small Image 1" onclick="changeMainImage('asset/produk/bursa/Kayseri White Frame1.png')">
        <img class="small-image" src="asset/produk/bursa/Kayseri White Frame2.png" alt="Small Image 2" onclick="changeMainImage('asset/produk/bursa/Kayseri White Frame2.png')">
        <img class="small-image" src="asset/produk/bursa/Kayseri White Frame3.png" alt="Small Image 3" onclick="changeMainImage('asset/produk/bursa/Kayseri White Frame3.png')">
        <img class="small-image" src="asset/produk/bursa/Kayseri White Frame4.png" alt="Small Image 4" onclick="changeMainImage('asset/produk/bursa/Kayseri White Frame4.png')">
    </div>
</div>

    
    <div class="bursamb">
        <h1>
            Kayseri  Black Frame
        </h1>
    </div>
    <div class="kursimb">
    <img class="kursimb-awal" src="asset/produk/bursa/Kayseri  Black Frame.png" alt="Main Image">
    <div class="kursimb-awal-kecil">
        <img class="kursimb-awal-kecil-kecil" src="asset/produk/bursa/Kayseri  Black Frame1.png" alt="Small Image 1" onclick="ubahKursiMb('asset/produk/bursa/Kayseri  Black Frame1.png')">
        <img class="kursimb-awal-kecil-kecil" src="asset/produk/bursa/Kayseri  Black Frame2.png" alt="Small Image 2" onclick="ubahKursiMb('asset/produk/bursa/Kayseri  Black Frame2.png')">
        <img class="kursimb-awal-kecil-kecil" src="asset/produk/bursa/Kayseri  Black Frame3.png" alt="Small Image 3" onclick="ubahKursiMb('asset/produk/bursa/Kayseri  Black Frame3.png')">
        <img class="kursimb-awal-kecil-kecil" src="asset/produk/bursa/Kayseri  Black Frame4.png" alt="Small Image 4" onclick="ubahKursiMb('asset/produk/bursa/Kayseri  Black Frame4.png')">
    </div>
</div>


<div class="BursaIV">
        <h1>
           Kayseri Chrome Frame
        </h1>

    </div>
    <div class="kursibursaiv">
    <img class="kursibursaiv-main" src="asset/produk/bursa/Kayseri Chrome Frame.png" alt="Main Image">
    <div class="kursibursaiv-smal">
        <img class="kursibursaiv-smal-smal" src="asset/produk/bursa/Kayseri Chrome Frame1.png" alt="Small Image 1" onclick="ubahkursibursaiv('asset/produk/bursa/Kayseri Chrome Frame1.png')">
        <img class="kursibursaiv-smal-smal" src="asset/produk/bursa/Kayseri Chrome Frame2.png" alt="Small Image 2" onclick="ubahkursibursaiv('asset/produk/bursa/Kayseri Chrome Frame2.png')">
        <img class="kursibursaiv-smal-smal" src="asset/produk/bursa/Kayseri Chrome Frame3.png" alt="Small Image 3" onclick="ubahkursibursaiv('asset/produk/bursa/Kayseri Chrome Frame3.png')">
        <img class="kursibursaiv-smal-smal" src="asset/produk/bursa/Kayseri Chrome Frame4.png" alt="Small Image 4" onclick="ubahkursibursaiv('asset/produk/bursa/Kayseri Chrome Frame4.png')">
    </div>
</div>

<div class="bursa-tulisan">
    <h2>
        All-purpose, Light Scaled Multitasker
    </h2>
    <p>
        Tempat duduk serba guna dan ringan. KAYSERI adalah kursi sempurna untuk lingkungan yang membutuhkan fleksibilitas. Multitasking dengan estetika yang menetapkan standar baru untuk tempat duduk.
    </p>

    <button>
        Order Here
    </button>

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

    <script type="text/javascript">
        var counter = 1;
var totalSlides = 4; // Change this to the total number of slides

setInterval(function() {
    document.getElementById('radio' + counter).checked = true;
    counter++;

    if (counter > totalSlides) {
        counter = 1;
    }
}, 3000);



    window.addEventListener('scroll', function () {
    const navbar = document.querySelector('.navbar');

    // Tambahkan class "sticky" saat scroll melebihi tinggi navbar
    if (window.scrollY > navbar.offsetHeight) {
        navbar.classList.add('sticky');
    } else {
        navbar.classList.remove('sticky');
    }
});

      function changeMainImage(newImageSrc) {
        // Get reference to the main image
        var mainImage = document.querySelector('.main-image');

        // Save the current main image source
        var currentMainImageSrc = mainImage.src;

        // Set the main image source to the clicked small image source
        mainImage.src = newImageSrc;

        // Set the clicked small image source to the previous main image source
        document.querySelector('.small-image[onclick="changeMainImage(\'' + newImageSrc + '\')"]').src = currentMainImageSrc;

        // Add a click event listener to the main image to toggle back to the original image
        mainImage.onclick = function () {
            mainImage.src = currentMainImageSrc;
            mainImage.onclick = function () {
                changeMainImage(newImageSrc);
            };
        };
    }


function ubahKursiMb(newImageSrc) {
    // Get reference to the main image
    var mainImage = document.querySelector('.kursimb .kursimb-awal');

    // Save the current main image source
    var currentMainImageSrc = mainImage.src;

    // Set the main image source to the clicked small image source
    mainImage.src = newImageSrc;

    // Set the clicked small image source to the previous main image source
    document.querySelector('.kursimb .kursimb-awal-kecil-kecil[onclick="ubahKursiMb(\'' + newImageSrc + '\')"]').src = currentMainImageSrc;

    // Add a click event listener to the main image to toggle back to the original image
    mainImage.onclick = function () {
        mainImage.src = currentMainImageSrc;
        mainImage.onclick = function () {
            ubahKursiMb(newImageSrc);
        };
    };
}


function ubahkursibursaiv(newImageSrc) {
    // Get reference to the main image
    var mainImage = document.querySelector('.kursibursaiv-main');

    // Save the current main image source
    var currentMainImageSrc = mainImage.src;

    // Set the main image source to the clicked small image source
    mainImage.src = newImageSrc;

    // Loop through each small image to find the one that was clicked
    var smallImages = document.querySelectorAll('.kursibursaiv-smal-smal');
    for (var i = 0; i < smallImages.length; i++) {
        if (smallImages[i].src === newImageSrc) {
            // Set the clicked small image source to the previous main image source
            smallImages[i].src = currentMainImageSrc;
            break;
        }
    }

    // Add a click event listener to the main image to toggle back to the original image
    mainImage.onclick = function () {
        mainImage.src = currentMainImageSrc;
        mainImage.onclick = function () {
            ubahkursibursaiv(newImageSrc);
        };
    };
}
    </script>
</body>
</html>