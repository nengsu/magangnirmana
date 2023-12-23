<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nothing+You+Could+Do&display=swap" rel="stylesheet">
    <title>Aruna</title>
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

       
        .left-button{
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            margin:150px 48px;
            width: 95%;
            height: 95%;
            text-align: center; 

        }
        .left-button img{
            width: 45px;
            height: 45px;
        }
        .gambaroedl img {
    height: 100%;
    margin-top: -100px;
    margin-left: 55px;
    margin-bottom: 15px;
}
        .gambaroedl1 img {
    width: auto;
    height: auto;
    margin-left: 55px;
    margin-top: 12px;
    margin-right: -25px;
    float: left;
    padding-right: 10px;
    margin-bottom: 30px;
}

@media screen and (max-width: 768px) {
    

    .gambaroedl img {
        width: 100%;
        height: auto;
        margin-top: 0;
        margin-left: 0;
        margin-bottom: 15px; /* Adjust margin for smaller screens */
    }

     .gambaroedl1 img {
        width: 100%;
        height: auto;
        margin-left: 0;
        margin-right: 0;
        float: none;
        padding-right: 0;
        margin-bottom: 15px; /* Adjust margin for smaller screens */
    }
}

/* For screens with a maximum width of 480px */
@media screen and (max-width: 480px) {
    .left-button{
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            margin:100px 48px;
            width: 95%;
            height: 95%;
            text-align: center; 

        }

    .gambaroedl img {
        margin-bottom: 10px; /* Further adjust margin for even smaller screens */
    }
    .gambaroedl1 img {
        margin-bottom: 10px; /* Further adjust margin for even smaller screens */
    }
}
.bawah {
    width: 100%;
    height: 98px;
    background: linear-gradient(to top, #8B4513, #505050);
    color: #fff;
    text-align: center;
    line-height: 98px; 
    font-size: 64px; 
    font-weight: lighter;
    clear: both; 
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
        <a href="Galeri.php"class="clicked">Galeri</a>
        <a href="Produk.php">Produk</a>
        <a href="TentangKami.php">Tentang Kami</a>
        <a href="KontakKami.php">Kontak Kami</a>
    </div>
</div>
    <div class="left-button">
        <a href="Galeri.php">
         <img src="asset/buttonbackgaleri.png">
        </a>
        <h1>Aruna</h1>
        <div></div>
    </div>
    <div class="gambaroedl">
         <img src="asset\aruna.png" alt="=Gambar Aruna">
    </div>
    <div class="gambaroedl1"> 
  <img src="asset\aruna1.png" alt="=Gambar Aruna1">
    <img src="asset\aruna2.png" alt="=Gambar Aruna2">
    <img src="asset\aruna3.png" alt="=Gambar Aruna3">
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
</body>
</html>
