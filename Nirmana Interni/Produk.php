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
    <title>Produk</title>
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

        
        .slide{
            width: 20%;
            transition: 2s;
        }

        .slide img{
            width: 100%;
            height: 100%;
        }
        .slidesecond {
            display: flex;
            justify-content: space-between;
        }

        .slidesecond img {
            max-width: 50%; /* Atur lebar maksimum agar gambar tidak saling tumpang tindih */
        }
        
        .rekomen {
            width: 1789px; /* Lebar kotak */
            height: 58px; /* Tinggi kotak */
            background: linear-gradient(to top, #8B4513, #505050);
            color: #fff; /* Warna tulisan di dalam kotak */
            text-align: left; /* Pusatkan tulisan horizontal di dalam kotak */
            line-height: 58px; /* Pusatkan tulisan vertikal di dalam kotak */
            font-size: 32px; /* Ukuran font tulisan */
            font-weight: lighter;
            border-radius: 15px;
            margin: 0 auto;
            margin-top: 50px;
            margin-bottom: 40px;
        }
        .rekomen p{
            margin-left: 40px;
            font-weight: bold;
        }

        @media screen and (max-width: 768px) {
    .rekomen {
        width: 92%; /* Adjust the width for smaller screens */
        font-size: 24px; /* Adjust the font size for smaller screens */
        margin-top: 30px; /* Adjust the top margin for smaller screens */
        margin-bottom: 20px; /* Adjust the bottom margin for smaller screens */
        margin-left: 20px;
        margin-right: 20px;
    }

    .rekomen p {
        margin-left: 20px; /* Adjust the left margin for smaller screens */
    }
}

/* For screens with a maximum width of 480px */
@media screen and (max-width: 480px) {
    .rekomen {
        width: 100%; /* Adjust the width for even smaller screens */
        font-size: 20px; /* Adjust the font size for even smaller screens */
        margin-top: 20px; /* Adjust the top margin for even smaller screens */
        margin-bottom: 15px; /* Adjust the bottom margin for even smaller screens */
    }

    .rekomen p {
        margin-left: 10px; /* Adjust the left margin for even smaller screens */
    }   
}
       /* Common styles for .card-slider-container */
.card-slider-container {
    display: flex;
    align-items: center;
    margin-top: 50px;
    margin-bottom: 20px;
    background-color: #F7E6BD;
    width: 90%; /* Adjusted width for responsiveness */
    max-width: 1789px; /* Added max-width to limit the container width on larger screens */
    height: 468px;
    border-radius: 25px;
    margin-left: auto;
    margin-right: auto;
}

/* Common styles for .card-slider */
.card-slider {
    display: flex;
    margin-left: 10px; /* Adjusted margin for responsiveness */
    margin-right: 10px; /* Adjusted margin for responsiveness */
    overflow: hidden;
    flex-grow: 1;
    width: 100%; /* Adjusted width for responsiveness */
    height: 468px;
}

/* Common styles for .card */
.card {
    flex: 0 0 calc(25% - 20px);
    margin-right: 20px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    border: 1px solid #333;
    border-radius: 20px;
    text-align: center;
    cursor: pointer;
    width: 100%; /* Adjusted width for responsiveness */
    height: 400px;
    background-color: #FFFFFF;
    margin-top: 45px;
    margin-bottom: 45px;
}

/* Common styles for .card img */
.card img {
    width: 60%; /* Adjusted width for responsiveness */
    height: auto;
    padding-top: 2rem;
    padding-left: 1.5rem;
    padding-right: 1.5rem;
}

/* Tombol Previous */
#prevCardBtn {
    background: none;
    border: none;
    font-size: 24px;
    cursor: pointer;
    display: none;
    outline: none;
}

/* Common styles for .nextCardBtn */
.nextCardBtn {
    background: none;
    border: none;
    cursor: pointer;
    font-size: 24px;
    outline: none;
}

/* Additional styles for smaller screens */
@media screen and (max-width: 768px) {
    .card-slider-container {
        flex-direction: column; /* Stack items vertically on smaller screens */
    }

    .card-slider {
        margin-left: 0;
        margin-right: 0;
    }

    .card {
        flex: 0 0 calc(50% - 20px);
        margin-right: 20px;
        margin-left: 5px;

    }
}

/* Additional styles for smaller screens */
@media screen and (max-width: 480px) {
    .card {
        flex: 0 0 100%;
        margin-right: 0;
    }
}





    .slider-bursa {
    position: relative;
      display: flex;
      overflow-x: auto;
      height: 677px;
      margin-top: 100px;
      width: 100%;
    }

    .bursa {
      flex: 0 0 auto;
      box-sizing: border-box;
      width: 98%;
      padding: 20px;
      margin: 10px;
      
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      text-align: left; /* Text alignment to the left */
    }

    .bursa img {
        margin-top: 50px;
      width: 884px;
      height: 493px;
    }

    .bursa-text {
      margin-top: 15px;
    }

    .bursa-text h2 {
      margin-bottom: 10px;
      font-size: 1.5rem;
      font-size: 40px;
      margin-left: 150px;
    }
    .bursa-text h1 {
      margin-bottom: 10px;
      font-size: 40px;
      margin-left: 150px;
      font-weight: bold;
    }

    .bursa-text p {
      font-size: 36px;
      color: black;
      margin-left: 150px;
    }

    .slider-btn {
        position: absolute;
        left: 50%;
        top: 50%;
    background: none;  
      border: none;
      padding: 10px 15px;
      margin: 5px;
      cursor: pointer;

    }
    .slider-btn-prev{
        position: absolute;
        background: none;
        top: 45%;
        border: none;
      padding: 10px 15px;
      margin: 5px;
      cursor: pointer;

    }
    .learn-more-btn{
        width: 291px;
        height: 82px;
        margin-left: 300px;
        background: linear-gradient(to top, #8B4513, #505050);
        color: white;
        font-size: 32px;
        border-radius: 32px;
        margin-top: -20px;
        cursor: pointer;
    }
    .learn-more-btn:hover {
        background: linear-gradient(to top, #8B4513, #505050);
        transform: scale(1.05);
        cursor: pointer;
    }









    .slider-work {
  display: flex;
      overflow-x: auto;
      height: 677px;
      margin-top: 200px;
      width: 100%;
  
}

.work {
 
  flex: 0 0 auto;
      box-sizing: border-box;
      width: 98%;
      padding: 20px;
      margin: 10px;
      
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      text-align: left; /* Text alignment to the left */
}

.work img {

    margin-left: 50px;
  margin-top: 50px;
      width: 884px;
      height: 493px;
}

.work-text {
  margin-top: 15px;

}


.work-text h2 {
      margin-bottom: 10px;
      
      font-size: 40px;
      
    }
    .work-text h1 {
      margin-bottom: 10px;
      font-size: 40px;
      
      font-weight: bold;
    }

    .work-text p {
      font-size: 27px;
      color: black;


     
    }

.learn-more-btn-work {
  width: 291px;
        height: 82px;
        margin-left: 200px;
        background: linear-gradient(to top, #8B4513, #505050);
        color: white;
        font-size: 32px;
        border-radius: 32px;
        margin-top: 40px;
        cursor: pointer;
}
.learn-more-btn-work:hover {
        background: linear-gradient(to top, #8B4513, #505050);
        transform: scale(1.05);
        cursor: pointer;
    }


.btn-prev-work {
    background: none;
    border: none;
    float: left;
    position: absolute;
    left: 45%;
    cursor: pointer;
    margin-top: 15%;
}

.slider-next-work {
    background: none;
    border: none;
    position: absolute; 
    cursor: pointer;
    left: 95%;
    margin-top: 15%;
  float: right;
}

.work img {
    margin-right: 40px;
    float: right;
}


   .slider-costume {
  display: flex;
      overflow-x: auto;
      height: 677px;
      margin-top: 200px;
      width: 100%;
}

.costume {
  
  flex: 0 0 auto;
      box-sizing: border-box;
      width: 98%;
      padding: 20px;
      margin: 10px;
      
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      text-align: left; /* Text alignment to the left */
}

.costume img {
    margin-left: 50px;
   margin-top: 50px;
   margin-right: 100px;
      width: 884px;
      height: 493px;
}


    .costume-text {
      margin-top: 15px;
    }

    .costume-text h2 {
      margin-bottom: 20px;
      
      font-size: 40px;
      margin-left: 150px;
    }
    .costume-text h1 {
      margin-bottom: 20px;
      font-size: 40px;
      margin-left: 150px;
      font-weight: bold;
    }

    .costume-text p {
      font-size: 27px;
      color: black;
      margin-left: 150px;
    }



.learn-more-btn-costume {
  width: 291px;
        height: 82px;
        margin-left: 300px;
        background: linear-gradient(to top, #8B4513, #505050);
        color: white;
        font-size: 32px;
        border-radius: 32px;
        margin-top: 100px;
        cursor: pointer;
}
.learn-more-btn-costume:hover{
    background: linear-gradient(to top, #8B4513, #505050);
        transform: scale(1.05);
        cursor: pointer;
}

 .slider-btn-next-costume {
        position: absolute;
        left: 50%;
        top: 395%;
    background: none;  
      border: none;
      padding: 10px 15px;
      margin: 5px;
      cursor: pointer;

    }
    .slider-btn-prev-costume{
        position: absolute;
        background: none;
        top: 395%;
        border: none;
      padding: 10px 15px;
      margin: 5px;
      cursor: pointer;

    }


.costume img {
  float: left;
}


.slider-santai {

  display: flex;
      overflow-x: auto;
      height: 677px;
      margin-top: 200px;
      width: 100%;
  
}

.santai {
 
  flex: 0 0 auto;
      box-sizing: border-box;
      width: 98%;
      padding: 20px;
      margin: 10px;
      
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      text-align: left; /* Text alignment to the left */
}

.santai img {

    margin-left: 50px;
  margin-top: 50px;
      width: 884px;
      height: 493px;
}

.santai-text {
  margin-top: 15px;

}


.santai-text h2 {
      margin-bottom: 10px;
      
      font-size: 40px;
      
    }
    .santai-text h1 {
      margin-bottom: 10px;
      font-size: 40px;
      
      font-weight: bold;
    }

    .santai-text p {
      font-size: 27px;
      color: black;


     
    }

.learn-more-btn-santai {
  width: 291px;
        height: 82px;
        margin-left: 200px;
        background: linear-gradient(to top, #8B4513, #505050);
        color: white;
        font-size: 32px;
        border-radius: 32px;
        margin-top: 40px;
        cursor: pointer;
}
.learn-more-btn-santai:hover {
        background: linear-gradient(to top, #8B4513, #505050);
        transform: scale(1.05);
        cursor: pointer;
    }


.btn-prev-santai {
    background: none;
    border: none;
    float: left;
    position: absolute;
    left: 45%;
    cursor: pointer;
    margin-top: 15%;
}

.slider-next-santai {
    background: none;
    border: none;
    position: absolute; 
    cursor: pointer;
    left: 95%;
    margin-top: 15%;
  float: right;
}

.santai img {
    margin-right: 40px;
    float: right;
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
        <a href="Produk.php" class="clicked">Produk</a>
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
            <div class="slide first">
                <img src="asset/produk/gambaratas1.png">
            </div>
        </div>
        <div class="slidesecond">
                <img src="asset/produk/gambarprodukbawahkiri.png">
                <img src="asset/produk/gambarprodukbawahkanan.png">

            </div>
        
        </div>
    </div>
        <div class="rekomen">
                <p> Recomendation for you</p>       
        </div>

                <div class="card-slider-container">
            <button id="prevCardBtn" class="prevCardBtn" style="display: none;"><img src="asset/backbutton.png" alt="Previous"></button>
            <div class="card-slider">
                <div class="card" >
                    <img src="asset/produk/bursaproduk.png" alt="Gambar 1">
                <div class="card-text">
                    <h2>Bursa IV</h2>
            
                </div>
                </div>
                <div class="card" style="display: block;">
                   <img src="asset/produk/freestandingproduk.png" alt="Gambar 1">
                <div class="card-text">
                    <h2>Free Standing</h2>
                </div>
                </div>
                <div class="card" >
                    <img src="asset/produk/vanmbblack.png" alt="Gambar 1">
                <div class="card-text">
                    <h2>Van MB Black</h2>
                    
                </div>
                </div>
                <div class="card" >
                    <img src="asset/produk/workstation.png" alt="Gambar 1">
                    <div class="card-text">
                        <h2>Workstation</h2>
                        
                    </div>
                    
                </div>

                <div class="card" >
                    <img src="asset/produk/vanwhite.png" alt="Gambar 1">
                    <div class="card-text">
                        <h2>Van White Frame HB</h2>
                        
                    </div>
                    
                </div>
                <div class="card">
                    <img src="asset/produk/kursi ruang santai.png" alt="Gambar 1">
                    <div class="card-text">
                        <h2>Kursi Ruang Santai</h2>
                        
                    </div>
                    
                </div>
                <div class="card">
                    <img src="asset/produk/lshape.png" alt="Gambar 1">
                    <div class="card-text">
                        <h2>L Shape</h2>
                        
                    </div>
                    
                </div>
                <div class="card">
                    <img src="asset/produk/kursi ruang santai1.png" alt="Gambar 1">
                    <div class="card-text">
                        <h2>Kursi Ruang Santai</h2>
                        
                    </div>
                    
                </div>
                
               
            </div>
            
            <button id="nextCardBtn" class="nextCardBtn"><img src="asset/nextbutton.png" alt="Next"></button>
        </div>
        
        <!-- slider bursa -->
        <div class="slider-bursa">
            <button class="slider-btn-prev" onclick="prevSlide()"><img src="asset/backbutton.png"></button>
            <div class="bursa" id="bursa1">
              <img src="asset/produk/bursa.png" alt="Image 1">
              <div class="bursa-text">
                <h1>Bursa</h1>
                <h2>Value, Style and Comfort</h2>
                <p>BURSA. Keanggunan diwujudkan dalam sling back bergaya klasik, disempurnakan untuk menopang lekuk alami tulang belakang. Pilihan penuh gaya untuk tempat duduk manajerial dan ruang pertemuan. Nilai, gaya, dan kenyamanan semuanya dalam satu seri.</p>
                <button class="learn-more-btn" onclick="redirectToBursa()">Learn More ></button>
              </div>
            </div>
            <div class="bursa" id="bursa1">
              <img src="asset/produk/vanslider.png" alt="Image 1">
              <div class="bursa-text">
                <h1>Van</h1>
                <h2>Form and Function Harmonized</h2>
                <p>Sesuaikan posisi kenyamanan anda dengan penyangga pinggang yang dapat disesuaikan, serta beragam opsi kursi dan sandaran yang ergonomis.</p>
                <button class="learn-more-btn" onclick="redirectToBursa()">Learn More ></button>
              </div>
            </div>

            <div class="bursa" id="bursa1">
              <img src="asset/produk/izmirslider.png" alt="Image 1">
              <div class="bursa-text">
                <h1>Izmir</h1>
                <h2>Productivity & Performance</h2>
                <p>IZMIR memastikan produktivitas dan kinerja dengan penyesuaian pinggang yang tidak bergerak. Rangka yang sangat tahan lama mampu memenuhi tuntutan gaya hidup kantor dan kampus. Sempurna untuk menciptakan ruang interaktif yang mendorong kolaborasi.</p>
                <button class="learn-more-btn" onclick="redirectToBursa()">Learn More ></button>
              </div>
            </div>

            <div class="bursa" id="bursa1">
              <img src="asset/produk/kayseri.png" alt="Image 1">
              <div class="bursa-text">
                <h1>Kayseri</h1>
                <h2>All-purpose, Light Scaled 
Multitasker</h2>
                <p>Tempat duduk serba guna dan ringan. KAYSERI adalah kursi sempurna untuk lingkungan yang membutuhkan fleksibilitas. Multitasking dengan estetika yang menetapkan standar baru untuk tempat duduk.</p>
                <button class="learn-more-btn" onclick="redirectToBursa()">Learn More ></button>
              </div>
            </div>

            
            <button class="slider-btn" onclick="nextSlide()"><img src="asset/nextbutton.png"></button>
        </div>
        
  <!--   card slider work -->
    <div class="slider-work">
            <button class="btn-prev-work" onclick="prevWork()"><img src="asset/backbutton.png"></button>
            <div class="work" id="work1">
              <img src="asset/produk/mejakerjasliderwork.png" alt="Image 1">
              <div class="work-text">
                <h1>Workstation</h1>
                <h2>Ample Space, Better Work</h2>
                <p>Workstation kami menciptakan ruang untuk interaksi di tempat kerja dengan model ruang rapat, media, dan meja kolaboratif. Ruang yang cukup dan pembatas layar opsional disediakan untuk melakukan aktivitas kerja lebih baik.</p>
                <button class="learn-more-btn-work"onclick="redirectToWork()">Learn More ></button>
              </div>
            </div>
            <div class="work" id="work1">
              <img src="asset/produk/mejakerjasliderwork1.png" alt="Image 1">
              <div class="work-text">
                <h1>Workstation</h1>
                <h2>Ample Space, Better Work</h2>
                <p>Workstation kami menciptakan ruang untuk interaksi di tempat kerja dengan model ruang rapat, media, dan meja kolaboratif. Ruang yang cukup dan pembatas layar opsional disediakan untuk melakukan aktivitas kerja lebih baik.</p>
                <button class="learn-more-btn-work" onclick="redirectToWork()">Learn More ></button>
              </div>
            </div>

            <div class="work" id="work1">
              <img src="asset/produk/mejakerjasliderwork2.png" alt="Image 1">
              <div class="work-text">
                <h1>Workstation</h1>
                <h2>Ample Space, Better Work</h2>
                <p>Workstation kami menciptakan ruang untuk interaksi di tempat kerja dengan model ruang rapat, media, dan meja kolaboratif. Ruang yang cukup dan pembatas layar opsional disediakan untuk melakukan aktivitas kerja lebih baik.</p>
                <button class="learn-more-btn-work" onclick="redirectToWork()">Learn More ></button>
              </div>
            </div>

            

            
            <button class="slider-next-work" onclick="nextWork()"><img src="asset/nextbutton.png"></button>
        </div>
   <!--  end -->


<div class="slider-costume">
            <button class="slider-btn-prev-costume" onclick="prevCostume()"><img src="asset/backbutton.png"></button>
            <div class="costume" id="costume1">
              <img src="asset/produk/cotumeslider.png" alt="Image 1">
              <div class="costume-text">
                <h1>Furniture Custome</h1>
                <h2>Organized Set Up, Better Workplace</h2>
                <p>Nirmana menawarkan perabot kantor lainnya yang dibuat khusus. Klien bebas memilih atau meminta furnitur custom sesuai kebutuhannya. Solusi furnitur khusus kami menciptakan pengaturan yang terorganisir sehingga tempat kerja menjadi oase dengan alur kerja yang melayani para pekerjanya.</p>
                <button class="learn-more-btn-costume" onclick="redirectToCostume()">Learn More ></button>
              </div>
            </div>
            <div class="costume" id="costume1">
              <img src="asset/produk/cotumeslider1.png" alt="Image 1">
              <div class="costume-text">
                <h1>Furniture Custome</h1>
                <h2>Organized Set Up, Better Workplace</h2>
                <p>Nirmana menawarkan perabot kantor lainnya yang dibuat khusus. Klien bebas memilih atau meminta furnitur custom sesuai kebutuhannya. Solusi furnitur khusus kami menciptakan pengaturan yang terorganisir sehingga tempat kerja menjadi oase dengan alur kerja yang melayani para pekerjanya.</p>
                <button class="learn-more-btn-costume" onclick="redirectToCostume()">Learn More ></button>
              </div>
            </div>

            <div class="costume" id="costume1">
              <img src="asset/produk/cotumeslider2.png" alt="Image 1">
              <div class="costume-text">
                <h1>Furniture Custome</h1>
                <h2>Organized Set Up, Better Workplace</h2>
                <p>Nirmana menawarkan perabot kantor lainnya yang dibuat khusus. Klien bebas memilih atau meminta furnitur custom sesuai kebutuhannya. Solusi furnitur khusus kami menciptakan pengaturan yang terorganisir sehingga tempat kerja menjadi oase dengan alur kerja yang melayani para pekerjanya.</p>
                <button class="learn-more-btn-costume" onclick="redirectToCostume()">Learn More ></button>
              </div>
            </div>

            <div class="costume" id="costume1">
              <img src="asset/produk/cotumeslider3.png" alt="Image 1">
              <div class="costume-text">
                <h1>Furniture Custome</h1>
                <h2>Organized Set Up, Better Workplace</h2>
                <p>Nirmana menawarkan perabot kantor lainnya yang dibuat khusus. Klien bebas memilih atau meminta furnitur custom sesuai kebutuhannya. Solusi furnitur khusus kami menciptakan pengaturan yang terorganisir sehingga tempat kerja menjadi oase dengan alur kerja yang melayani para pekerjanya.</p>
                <button class="learn-more-btn-costume" onclick="redirectToCostume()">Learn More ></button>
              </div>
            </div>

            
            <button class="slider-btn-next-costume" onclick="nextCostume()"><img src="asset/nextbutton.png"></button>
        </div>

        <!-- end -->

        <div class="slider-santai">
            <button class="btn-prev-santai" onclick="prevSantai()"><img src="asset/backbutton.png"></button>
            <div class="santai" id="santai1">
              <img src="asset/produk/kursiruangsantai.png" alt="Image 1">
              <div class="santai-text">
                <h1>Kursi Ruang Santai</h1>
                <h2>Aesthetic, Comfort, and Detail</h2>
                <p>Sofa adalah bagian penting guna meningkatkan nilai estetika dari ruangan, furniture yang memiliki sandaran dan lapisan busa dengan pemilihan material berkualitas tinggi dan pengerjaan dengan detail terbaik. untuk memberi kenyamanan pengguna yang umumnya ditempatkan di area resepsionis, lounge, ruang direktur, dan ruang istirahat karyawan.</p>
                <button class="learn-more-btn-santai" onclick="redirectToSantai()">Learn More ></button>
              </div>
            </div>
            <div class="santai" id="santai1">
              <img src="asset/produk/kursiruangsantai1.png" alt="Image 1">
              <div class="santai-text">
                <h1>Kursi Ruang Santai</h1>
                <h2>Aesthetic, Comfort, and Detail</h2>
                <p>Sofa adalah bagian penting guna meningkatkan nilai estetika dari ruangan, furniture yang memiliki sandaran dan lapisan busa dengan pemilihan material berkualitas tinggi dan pengerjaan dengan detail terbaik. untuk memberi kenyamanan pengguna yang umumnya ditempatkan di area resepsionis, lounge, ruang direktur, dan ruang istirahat karyawan.</p>
                <button class="learn-more-btn-santai" onclick="redirectToSantai()">Learn More ></button>
              </div>
            </div>

            <div class="santai" id="santai1">
              <img src="asset/produk/kursiruangsantai2.png" alt="Image 1">
              <div class="santai-text">
                <h1>Kursi Ruang Santai</h1>
                <h2>Aesthetic, Comfort, and Detail</h2>
                <p>Sofa adalah bagian penting guna meningkatkan nilai estetika dari ruangan, furniture yang memiliki sandaran dan lapisan busa dengan pemilihan material berkualitas tinggi dan pengerjaan dengan detail terbaik. untuk memberi kenyamanan pengguna yang umumnya ditempatkan di area resepsionis, lounge, ruang direktur, dan ruang istirahat karyawan.</p>
                <button class="learn-more-btn-santai" onclick="redirectToSantai()">Learn More ></button>
              </div>
            </div>

            

            
            <button class="slider-next-santai" onclick="nextSantai()"><img src="asset/nextbutton.png"></button>
        </div>


<div class="bawah">
            Make your dream furniture now!
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
const cards = document.querySelectorAll('.card');
    let currentCardIndex = 0;

    function showCurrentCard() {
        cards.forEach((card, index) => {
            if (index >= currentCardIndex && index < currentCardIndex + 4) {
                card.style.display = 'block';
            } else {
                card.style.display = 'none';
            }
        });

        // Munculkan tombol "Previous" saat mencapai card ke-2 atau lebih
        const prevCardBtn = document.getElementById('prevCardBtn');
        prevCardBtn.style.display = currentCardIndex >= 1 ? 'block' : 'none';

        // Periksa apakah card terakhir sudah ditampilkan atau tidak
        const nextCardBtn = document.getElementById('nextCardBtn');
        if (currentCardIndex + 4 >= cards.length) {
            nextCardBtn.style.display = 'none'; // Tombol "Next" disembunyikan
        } else {
            nextCardBtn.style.display = 'block'; 
        }
    }

    showCurrentCard();

    // Tombol Next Card
    const nextCardBtn = document.getElementById('nextCardBtn');
    nextCardBtn.addEventListener('click', () => {
        currentCardIndex++;
        if (currentCardIndex + 4 > cards.length) {
            currentCardIndex = cards.length - 4; // Geser ke card terakhir
        }
        showCurrentCard();
    });

    // Tombol Previous Card
    const prevCardBtn = document.getElementById('prevCardBtn');
    prevCardBtn.addEventListener('click', () => {
        currentCardIndex--;
        if (currentCardIndex < 0) {
            currentCardIndex = 0;
        }
        showCurrentCard();
    });



/*js bursa*/
    let currentSlide = 0;
    const totalSlides = document.querySelectorAll('.bursa').length;
    function redirectToBursa() {
        window.location.href = 'Bursa.php';
    }
    function redirectToWork() {
        window.location.href = 'Workstation.php';
    }
    function redirectToCostume(){
        window.location.href = 'Costume.php';
    }
    function redirectToSantai(){
        window.location.href = 'KursiRuangSantai.php';
    }
    function showSlide(index) {
      const slides = document.querySelectorAll('.bursa');
      if (index < 0) {
        currentSlide = totalSlides - 1;
      } else if (index >= totalSlides) {
        currentSlide = 0;
      } else {
        currentSlide = index;
      }

      slides.forEach((slide, i) => {
        slide.style.display = i === currentSlide ? 'flex' : 'none';
      });
    }

    function nextSlide() {
      showSlide(currentSlide + 1);
    }

    function prevSlide() {
      showSlide(currentSlide - 1);
    }

    // Show the initial slide
    showSlide(currentSlide);


/*
js work*/
    let a = 0;
const b = document.querySelectorAll('.work');

function showCard(index) {
  b.forEach((card, i) => {
    card.style.display = i === index ? 'block' : 'none';
  });
}

function nextWork() {
  a = (a + 1) % b.length;
  showCard(a);
}

function prevWork() {
  a = (a - 1 + b.length) % b.length;
  showCard(a);
}

// Initial display
showCard(a);



/*js costuem
*/

let currentCostumeIndex = 0;
const costumes = document.querySelectorAll('.costume');

function showCostume(index) {
  costumes.forEach((costume, i) => {
    costume.style.display = i === index ? 'block' : 'none';
  });
}

function nextCostume() {
  currentCostumeIndex = (currentCostumeIndex + 1) % costumes.length;
  showCostume(currentCostumeIndex);
}

function prevCostume() {
  currentCostumeIndex = (currentCostumeIndex - 1 + costumes.length) % costumes.length;
  showCostume(currentCostumeIndex);
}

// Initial display
showCostume(currentCostumeIndex);

    /*js santai*/

    let currentSantaiIndex = 0;
const santaiCards = document.querySelectorAll('.santai');

function showSantai(index) {
  santaiCards.forEach((santaiCard, i) => {
    santaiCard.style.display = i === index ? 'block' : 'none';
  });
}

function nextSantai() {
  currentSantaiIndex = (currentSantaiIndex + 1) % santaiCards.length;
  showSantai(currentSantaiIndex);
}

function prevSantai() {
  currentSantaiIndex = (currentSantaiIndex - 1 + santaiCards.length) % santaiCards.length;
  showSantai(currentSantaiIndex);
}

// Initial display
showSantai(currentSantaiIndex);


    </script>






</body></html>