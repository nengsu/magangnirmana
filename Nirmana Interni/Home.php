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
    
    <title>Home</title>
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
@media only screen and (max-width: 768px) {
    
    

    .navigation-auto,
    .navigation-manual {
        bottom: 20px; /* Adjust the bottom value for smaller screens */
    }
}
@media only screen and (max-width: 480px) {
    .navigation-auto,
    .navigation-manual {
        bottom: 10px; /* Sesuaikan nilai bottom untuk layar yang lebih kecil */
    }
    .navigation-auto div:not(:last-child){
        margin-right: 20px;
    }
    .navigation-auto div{
        border: 2px solid #40D3DC;
        padding: 2px;
        border-radius: 10px;
        transition: 1s;
    }
}



        /*end slider */       

    
        .container {
            display: flex;
            justify-content: space-between;
            align-items: flex-start; 
            margin-top: 50px;
            
        }

        .gambarhome {
            flex: 1;
             text-align: right;
        
        }
        .carousel {
            flex: 1; 
            margin-left: 20px;
            
        }
        .carousel-controls {
            margin-left: 600px;
           cursor: pointer;
            margin-top: 10px; /* Sesuaikan dengan jarak yang Anda inginkan */
        }
         .carousel-controls img {
            margin-left: 50px;
        }
       
        .gambar-item img.active {
            
            width: 412px;
            height: 150px;
        }

        @media only screen and (max-width: 768px) {

            .container {
                flex-direction: row; /* Switch back to horizontal layout */
                align-items: flex-start; /* Align items to the top */
            }

            .carousel {
                margin-left: 20px; /* Restore the left margin */
            }
            .gambarhome{
                display: none;
            }
            .carousel-controls{
                margin-left: 250px;
            }
            .gambar-item img{
                width: 100px;
            }
            .carousel-controls img {
                margin-left: 20px;
            }

        }

        @media only screen and (max-width: 480px) {

    .container {
        flex-direction: row; /* Switch back to horizontal layout */
        align-items: flex-start; /* Align items to the top */
    }

    .carousel {
        margin-left: 20px; /* Restore the left margin */
    }

    .gambarhome {
        display: none;
    }

    .carousel-controls {
        margin-left: 100px; /* Adjust margin as needed */
    }

    .gambar-item img {
        width: 100px;
    }
    .carousel-controls img {
            margin-left: 10px;
    }
}

        .container1{
            flex: 1;
            margin-top: 70px;
            left: 0;
            top: 0;
            right: 0;
            bottom: 0;
            display: flex;
            align-items: center;
            justify-content: center;

        }        
        .tabs{
            display: flex;
            position: relative;
            background-color: #EEEEEE;
            padding: 0.75rem;
            border-radius: 99px;
        }
        .tabs *{
            z-index: 2;
        }
        input[type="radio"]{
            display: none;
        }
        .tab{
            display: flex;
            align-items: center;
            justify-content: center;
            height: 54px;
            width: 200px;
            font-size: 1.25rem;
            font-weight: 400;
            border-radius: 99px;
            cursor: pointer;
            transition: color 0.15s ease-in;
        }
        input[type="radio"]:checked + label{
            color: white;
        }
        input[id="radio-1"]:checked ~ .glider{
            transform: translateX(0);
        }
        input[id="radio-2"]:checked ~ .glider{
            transform: translateX(100%);
        }
        input[id="radio-3"]:checked ~ .glider{
            transform: translateX(200%);
        }
        input[id="radio-4"]:checked ~ .glider{
            transform: translateX(300%);
        }
        .glider{
            position: absolute;
            display: flex;
            height: 54px;
            width: 200px;
            background-color: #7f5a83;
            background-image: linear-gradient(315deg, #7f5a83 0%, #0d324d 74%) ;
            color: white;
            z-index: 1;
            border-radius: 99px;
            transition: 0.25s ease-out;

        }
        @media (max-width: 768px){
            .tabs{
                transform: scale(0.6);
            }
        }
        @media (max-width: 480px) {
            .tabs {
                transform: scale(0.4);
            }
        }

        .prevBtn1 {
            position: absolute;
            left: 20px; /* Atur jarak dari sisi kiri */
            top: 50%;
            transform: translateY(-50%);
            background: none;
            border: none;
            cursor: pointer;
        }

        /* Gaya tombol next */
        .nextBtn1 {
            position: absolute;
            right: 20px; /* Atur jarak dari sisi kanan */
            top: 50%;
            transform: translateY(-50%);
            background: none;
            border: none;
            cursor: pointer;
        }

        /* Gaya gambarhome1 */
        .gambarhome1 {
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
        }

        /* Gaya gambar-item1 */
        .gambar-item1 {
            margin-top: 40px;
            text-align: center;
        }
        @media (max-width: 768px){
            .gambar-item1 img{
                width: 75%;
            }
        }
        @media (max-width: 480px) {
            .gambar-item1 img {
                width: 60%; /* Sesuaikan lebar gambar sesuai kebutuhan */
            }
            .prevBtn1 {
           
            top: 60%;
            
        }

        /* Gaya tombol next */
        .nextBtn1 {
            
            top: 60%;
            
        }
            

            
        }


        /* Tampilkan gambar pertama saat halaman dimuat */
        .gambar-item1:first-child {
            display: block;
        }

        .our {
    margin-top: 50px;
    text-align: center;

}
.our img{
    margin-left: 0px;
    margin-right: 0px;

}


.methodology {
    display: flex;
    align-items: center;
    justify-content: center;
    margin-top: 20px;
}

.methodology-content {
    display: flex;
    align-items: center;
}

.methodology img {
    width: 699px;
    height: 700px;
    margin-left: 50px;
    margin-right: 50px; /* Atur jarak dari gambar ke daftar tulisan panjang */
}

.methodology ul {
    
    padding: 0;
    text-align: left;
}

.methodology li {
    text-align: justify;
    margin-left: 100px;
    letter-spacing: 0.1px;
    font-size: 32px;
    font-weight: inherit;
    margin-right: 100px;
    margin-bottom: 10px;
}
@media (max-width: 768px){
            .methodology {
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                margin-top: 20px;
            }

            .methodology-content {
                display: flex;
                flex-direction: column;
                align-items: center;
            }

            .methodology img {
                width: 70%; /* Mengisi lebar parent container */
                height: 80%;
                 margin-left: 25px;
                margin-right:25px;
            }

            .methodology ul {
                padding: 0;
                text-align: center; /* Menengahkan teks pada layar kecil */
            }

            .methodology li {
                text-align: justify; /* Menengahkan teks pada layar kecil */
                margin: 10px 0; /* Mengatur margin atas dan bawah */
                font-size: 18px; /* Mengurangi ukuran font pada layar kecil */
                margin-left: 25px;
                margin-right:25px ;
            }
        }
        @media (max-width: 480px) {
    .methodology img {
        width: 80%; /* Sesuaikan lebar gambar sesuai kebutuhan */
        height: auto; /* Sesuaikan tinggi gambar agar proporsional */
        margin-left: 10px;
        margin-right: 10px;
    }

    .methodology li {
        font-size: 16px; /* Sesuaikan ukuran font pada layar kecil */
        margin-left: 30px;
        margin-right: 20px;
    }
}

.consultation-button {
    width: 466px;
    height: 79px;
    display: flex;
    align-items: center;
    background: linear-gradient(to top, #8B4513, #505050);
    
    border-radius: 32px;
    color: white;
    text-align: center;
    text-decoration: none;
    padding: 10px 20px;
    margin-left: 100px;
    transition: background 0.3s ease, transform 0.2s ease;
    margin-top: 0px;
    font-size: 36px;
}

.consultation-button:hover {
    background: linear-gradient(to top, #8B4513, #505050);
    transform: scale(1.05);
}

.consultation-button img {
    width: 45px;
    height: 45px;
    margin-right: 10px;
    margin-left: 30px;
}
.consultation-button p{
    margin-left: 30px;
}
@media (max-width: 768px){
    .consultation-button {
        width: 40%; /* Mengisi lebar penuh dari parent container */
        
        height: 79px;
        display: flex;
        
        background: linear-gradient(to top, #8B4513, #505050);
        border-radius: 32px;
        color: white;
        text-align: center;
        text-decoration: none;
        margin-left: 20px;
        transition: background 0.3s ease, transform 0.2s ease;
        margin-top: 20px; /* Atur margin atas */
        font-size: 24px; /* Mengurangi ukuran font pada layar kecil */
    }

    .consultation-button:hover {
        background: linear-gradient(to top, #8B4513, #505050);
        transform: scale(1.05);
    }

    .consultation-button img {
        width: 25px; /* Ukuran gambar ikon dikurangi untuk layar kecil */
        height: 25px;
        margin-right: 10px;
        margin-left: 10px; /* Atur margin kiri agar tetap terlihat baik pada layar kecil */
    }

    .consultation-button p {
        margin-left: 10px; /* Atur margin kiri agar tetap terlihat baik pada layar kecil */
    }

}
@media (max-width: 480px) {
    .consultation-button {
        width: 70%; /* Sesuaikan lebar tombol sesuai kebutuhan */
        margin-left: 10px;
        font-size: 25px; /* Sesuaikan ukuran font pada layar kecil */
    }

    .consultation-button img {
        width: 20px; /* Sesuaikan ukuran gambar ikon sesuai kebutuhan */
        height: 20px;
        margin-right: 5px;
        margin-left: 5px;
    }

    .consultation-button p {
        margin-left: 5px;
    }
}


.ourservice{
    margin-top: 100px;

}
.ourservice h1{
    font-size: 48px;

}
.ourservice p{
    margin-left: 100px;
    margin-right: 100px;
    font-size: 36px;
}
@media only screen and (max-width: 768px) {
    .ourservice {
        margin-top: 50px; 
    }

    .ourservice h1 {
        font-size: 28px; /* Ukuran font lebih kecil untuk layar kecil */
    }

    .ourservice p {
        font-size: 18px; /* Ukuran font lebih kecil untuk paragraf pada layar kecil */
    }
}
@media only screen and (max-width: 480px) {
    .ourservice {
        margin-top: 30px; /* Sesuaikan margin atas sesuai kebutuhan */
    }

    .ourservice h1 {
        font-size: 24px; /* Sesuaikan ukuran font h1 sesuai kebutuhan */
    }

    .ourservice p {
        font-size: 16px; /* Sesuaikan ukuran font paragraf sesuai kebutuhan */
    }
}

    /*css card sslider*/
    .card-slider-container {
    display: flex;
    align-items: center;
    margin-top: 50px;
    margin-bottom: 20px;
}

.card-slider {

    display: flex;
    margin-left: 100px;
    margin-right: 100px;
    overflow: hidden;

    flex-grow: 1;

}

.card {
    flex: 0 0 calc(25% - 20px);
    margin-right: 20px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    border: 1px solid #333; /* Warna outline dan ketebalan */
    border-radius: 20px;
    text-align: center;
    cursor: pointer;

}

.card:last-child {
    margin-right: 0;
}

.card img {
    width: 303px;
    height: 200px;
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
    display: none; /* Tombol Previous defaultnya disembunyikan */
    outline: none;
}

.card-slider-controls {
    margin-left: 20px;
    display: flex;
    align-items: center;
    justify-content: flex-end;
    margin-top: 10px;
}

.nextCardBtn{
    background: none;
    border: none;
    cursor: pointer;
    font-size: 24px;
    outline: none;
}

@media only screen and (max-width: 768px) {
   .card-slider-container {
        display: flex;
        align-items: center;
        margin-top: 50px;
        margin-bottom: 20px;
    }
    .card-slider {
        display: flex;
        margin-left: 70px;
        margin-right: 100px;
        overflow: hidden;
        flex-grow: 1;
    }

    .card {
        flex: 0 0 calc(25% - 20px);
        margin-right: 20px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        border: 1px solid #333; /* Warna outline dan ketebalan */
        border-radius: 20px;
        text-align: center;
        cursor: pointer;

    }

    .card:last-child {
        margin-right: 0;
    }

    .card img {
        width: 303px;
        height: 200px;
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
        display: none; /* Tombol Previous defaultnya disembunyikan */
        outline: none;
    }

    .card-slider-controls {
        margin-left: 20px;
        display: flex;
        align-items: center;
        justify-content: flex-end;
        margin-top: 10px;
    }

    .nextCardBtn{
        background: none;
        border: none;
        cursor: pointer;
        font-size: 24px;
        outline: none;
    }
}
@media only screen and (max-width: 480px) {
    .card-slider-container {
        display: flex;
        align-items: center;
        margin-top: 50px;
        margin-bottom: 20px;
    }

    .card-slider {

        display: flex;
        margin-left: 70px;
        margin-right: 100px;
        overflow: hidden;
        flex-grow: 1;

    }

    .card {
        flex: 0 0 calc(25% - 20px);
        margin-right: 20px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        border: 1px solid #333; /* Warna outline dan ketebalan */
        border-radius: 20px;
        text-align: center;
        cursor: pointer;

    }

    .card:last-child {
        margin-right: 0;
    }

    .card img {
        width: 100px;
        height: 100px;
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
        display: none; /* Tombol Previous defaultnya disembunyikan */
        outline: none;
    }

    .card-slider-controls {
        margin-left: 20px;
        display: flex;
        align-items: center;
        justify-content: flex-end;
        margin-top: 10px;
    }

    .nextCardBtn{
        background: none;
        border: none;
        cursor: pointer;
        font-size: 24px;
        outline: none;
    }
}



/*containergaris
*/
.containergaris {
            display: flex;
            align-items: center;
            justify-content: center;
            
        }

        .line {
            width: 650px; /* Lebar garis horizontal */
            height: 6px; /* Tinggi garis horizontal */
            background-color: #D9D9D9; /* Warna garis horizontal */
            margin-right: 40px; /* Jarak antara garis dan tulisan */
            margin-left: 40px;
        }

        .text {
            font-size: 48px; /* Ukuran font tulisan */
        }
        @media (max-width: 768px){
            .text {
                font-size: 27px; /* Ukuran font tulisan */
            }
        }
        @media (max-width: 480px){
            .text {
                font-size: 17px; /* Ukuran font tulisan */
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
        <a href="Home.php" class="clicked">Home</a>
        <a href="Galeri.php">Galeri</a>
        <a href="Produk.php">Produk</a>
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
                <img src="asset/home/homecorosel2.png">
            </div>
            <div class="slide">
                <img src="asset/home/homecorosel1.png">
            </div>
            <div class="slide">
                <img src="asset/home/homecorosel5.png">
            </div>
            <div class="slide">
                <img src="asset/home/homecorosel4.png">
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
    
    
    <div class="container">
    
        <div class="carousel">
            <img id="carouselImage" src="asset/officechairhover.png" alt="Carousel Image 1">
         
            <div class="carousel-controls">
                <img id="prevBtn" src="asset/backbutton.png">

                <img id="nextBtn" src="asset/nextbutton.png">
            </div>
        </div>
        <div class="gambarhome">
            <div class="gambar-item">
                <img src="asset/officechairawal.png" data-hover="asset/officechairhover.png" alt="Gambar 1">
            </div>
            <div class="gambar-item">
                <img src="asset/officetable.png" data-hover="asset/officetablehover.png" alt="Gambar 2">
            </div>
            <div class="gambar-item">
                <img src="asset/furniturecustomehome.png" data-hover="asset/furniturecustomehover.png" alt="Gambar 3">
            </div>
            <div class="gambar-item">
                <img src="asset/Loungechairshome.png" data-hover="asset/loungchairhover.png" alt="Gambar 4">
            </div>

        </div>

    </div>
        
<div class="container1">
        <div class="tabs">
            <input type="radio" id="radio-1" name="tabs" checked="">
            <label class="tab" for="radio-1">Office Chair</label>
            <input type="radio" id="radio-2" name="tabs">
            <label class="tab" for="radio-2">Office Table</label>
            <input type="radio" id="radio-3" name="tabs">
            <label class="tab" for="radio-3">Custom</label>
            <input type="radio" id="radio-4" name="tabs">
            <label class="tab" for="radio-4">Lounge Chair</label>
            <span class="glider"></span>
        </div>
    </div>

    <div class="gambarhome1">
    <button id="prevBtn1" class="prevBtn1"><img src="asset/backbutton.png" alt="Previous"></button>
    <div class="gambar-item1">
        <img src="asset/officechairradio.png">
    </div>
    <div class="gambar-item1">
        <img src="asset/officetableradio.png">
    </div>
    <div class="gambar-item1">
        <img src="asset/customeradio.png">
    </div>
    <div class="gambar-item1">
        <img src="asset/loungechairradio.png">
    </div>
    <button id="nextBtn1" class="nextBtn1"><img src="asset/nextbutton.png" alt="Next"></button>
</div>


    <div class="our">
   <div class="containergaris">
        <div class="line"></div>
        <div class="text">Our Methodology</div>
        <div class="line"></div>
    </div>
    <div class="methodology">
        <div class="methodology-content">           
            <ul>
                <li>PENGUMPULAN DATA - Kami berusaha mendengarkan dan memahami konsep yang Anda inginkan dan melakukan peninjauan kambali terhadap kebutuhan Anda.</li>
                <li>PERENCANAAN - Kami berusaha untuk memberikan konsep yang tepat dengan kebutuhan dan karakter Anda melalui prinsip Fungsi dan Estetika.</li>
                <li>PENGECEKAN - Kami melakukan pengecekan ke lapangan, untuk melakukan survey, pengukuran dan memastikan bahwa lokasi sudah siap untuk peletakan dan pemasangan furniture</li>
                <li>PRODUKSI - Kami berusaha merealisasikan desain yang telah disetujui lalu produk akan melalui tahap produksi yang akan dilakukan di wokrshop kami. Tahap pelaksanan juga bisa dikerjakan langsung di lapangan.</li>
                
            </ul>
            <img src="asset/metodologi.png" alt="Metodologi">
        </div>
    </div>
    </div>

    <a href="KontakKami.php" class="consultation-button">
        <p>
            
        Konsultasi Gratis
        </p>
        <img src="asset/bttonkonsul.png" alt="Konsultasi Gratis">
    </a>

    <div class="ourservice">
        <center><h1>
            Our Services and Customers
        </h1>
        <p>
            Nirmana Interni telah dipercaya oleh banyak customers mulai dari bisnis, perkantoran, hingga korporasi besar
        </p>
    </center></div>
    <div class="projek">
         <div class="containergaris">
        <div class="line"></div>
        <div class="text">Project Reference</div>
        <div class="line"></div>
    </div>
       
    </div>

    <div class="card-slider-container">
    <button id="prevCardBtn" class="prevCardBtn" style="display: none;"><img src="asset/backbutton.png" alt="Previous"></button>
    <div class="card-slider">
        <div class="card" style="display: block;" >
            <img src="asset/Souch Quarter home.png" alt="Gambar 1">
        <div class="card-text">
            <h2>Souch Quarter</h2>
    
        </div>
        </div>
        <div class="card" style="display: block;">
           <img src="asset/webbedshome.png" alt="Gambar 1">
        <div class="card-text">
            <h2>WebBeds</h2>
        </div>
        </div>
        <div class="card" style="display: block;">
            <img src="asset/pertaminahome.png" alt="Gambar 1">
        <div class="card-text">
            <h2>Pertamina</h2>
            
        </div>
        </div>
        <div class="card" style="display: block;">
            <img src="asset/roedlhome.png" alt="Gambar 1">
            <div class="card-text">
                <h2>ROEDL</h2>
                
            </div>
            
        </div>

        <div class="card" style="display: none;">
            <img src="asset/Barielhome.png" alt="Gambar 1">
            <div class="card-text">
                <h2>Bariel Indo Global</h2>
                
            </div>
            
        </div>
        <div class="card" style="display: none;">
            <img src="asset/AHRP Counsellors At Lawhome.png" alt="Gambar 1">
            <div class="card-text">
                <h2>AHRP Counsellors At Law</h2>
                
            </div>
            
        </div>
        <div class="card" style="display: none;">
            <img src="asset/Bayer Indonesiahome.png" alt="Gambar 1">
            <div class="card-text">
                <h2>Bayer Indonesia</h2>
                
            </div>
            
        </div>
        <div class="card" style="display: none;">
            <img src="asset/arunahome.png" alt="Gambar 1">
            <div class="card-text">
                <h2>Aruna</h2>
                
            </div>
            
        </div>
        <div class="card" style="display: none;">
            <img src="asset/astrahome.png" alt="Gambar 1">
            <div class="card-text">
                <h2>Astra Otoparts</h2>
                
            </div>
            
        </div>
       
    </div>
    
    <button id="nextCardBtn" class="nextCardBtn" style="display: block;"><img src="asset/nextbutton.png" alt="Next"></button>
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
                    <span class="material-symbols-outlined">pin_drop</span>
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
        const gambarHome = document.querySelectorAll(".gambarhome .gambar-item img");
        let initialImageSrc; // Menyimpan sumber gambar awal

        gambarHome.forEach(img => {
            img.addEventListener("mouseover", function () {
                // Menyimpan sumber gambar awal saat hover dimulai
                initialImageSrc = this.getAttribute("src");

                // Mengganti gambar saat menghover dengan data-hover
                gambarHome.forEach(img => img.classList.remove("active"));
                this.classList.add("active");

                this.src = this.getAttribute("data-hover");
                
            });

            img.addEventListener("mouseout", function () {
                // Mengembalikan gambar ke gambar awal
                this.src = initialImageSrc;
            });
        });
        const carouselImage = document.getElementById("carouselImage");
        const carouselText = document.getElementById("carouselText");
        const prevButton = document.getElementById("prevBtn");
        const nextButton = document.getElementById("nextBtn");
        let currentIndex = 0;

        gambarHome.forEach((img, index) => {
            img.addEventListener("click", () => {
                currentIndex = index;
                showCurrentImage();
                updateCarouselSize();
                
            });
        });

        function showCurrentImage() {
            
            const currentImage = gambarHome[currentIndex];
            carouselImage.src = currentImage.getAttribute("data-hover");
            
        }

        function updateCarouselSize() {
    const viewportWidth = window.innerWidth;

    // Menyesuaikan ukuran carousel berdasarkan ukuran viewport
    if (viewportWidth <= 768) {
        // Untuk layar ponsel, atur lebar dan tinggi sesuai kebutuhan
        carouselImage.style.width = "100%";
        carouselImage.style.height = "auto"; // Mengatur tinggi agar disesuaikan otomatis
    } else {
        // Untuk layar yang lebih lebar, atur lebar dan tinggi sesuai kebutuhan
        carouselImage.style.width = "1420px";
        carouselImage.style.height = "600px";
    }
}
window.addEventListener("resize", updateCarouselSize);

        prevButton.addEventListener("click", () => {
            currentIndex--;
            if (currentIndex < 0) {
                currentIndex = gambarHome.length - 1;
            }
            showCurrentImage();
        });

        nextButton.addEventListener("click", () => {
            currentIndex++;
            if (currentIndex >= gambarHome.length) {
                currentIndex = 0;
            }
            showCurrentImage();
        });

        // Tampilkan gambar dan teks untuk indeks pertama saat halaman dimuat
        showCurrentImage();
        updateCarouselSize();
        // Menghubungkan radio button dengan gambar
        const radioButtons = document.querySelectorAll('.container1 input[type="radio"]');
        const gambarItems = document.querySelectorAll('.gambar-item1');

        radioButtons.forEach((radio, index) => {
            radio.addEventListener('change', () => {
                // Sembunyikan semua gambar
                gambarItems.forEach(item => {
                    item.style.display = 'none';
                });

                // Tampilkan gambar yang sesuai dengan radio button yang dipilih
                gambarItems[index].style.display = 'block';
                
            });
        });

        // Setel radio button pertama sebagai default
        radioButtons[0].checked = true;


        // Tambahkan event listener untuk tombol next/previous
        const tabs = document.querySelectorAll('.tabs input[type="radio"]');
        const prevButton1 = document.getElementById("prevBtn1");
        const nextButton1 = document.getElementById("nextBtn1");


        prevButton1.addEventListener("click", () => {
            
            currentIndex = (currentIndex - 1 + tabs.length) % tabs.length;
            tabs[currentIndex].checked = true;
            if (currentIndex < 0) {
                currentIndex = gambarItems.length - 1;
            }
            showCurrentImage1();
        });

        nextButton1.addEventListener("click", () => {
            
            currentIndex = (currentIndex + 1) % tabs.length;
            tabs[currentIndex].checked = true;
            if (currentIndex >= gambarItems.length) {
                currentIndex = 0;
            }
            showCurrentImage1();
        });

        // Fungsi untuk menampilkan gambar yang sesuai dengan indeks saat ini
        function showCurrentImage1() {
            gambarItems.forEach((item, index) => {
                if (index === currentIndex) {
                    item.style.display = "block";
                } else {
                    item.style.display = "none";
                }
            });
        }

        // Tampilkan gambar pertama saat halaman dimuat
        showCurrentImage1();


//card slider

    // JavaScript untuk slider card
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

    /*navbar*/

window.addEventListener('scroll', function () {
    const navbar = document.querySelector('.navbar');

  
    if (window.scrollY > navbar.offsetHeight) {
        navbar.classList.add('sticky');
    } else {
        navbar.classList.remove('sticky');
    }
});


//corousel utama
var counter = 1;
        setInterval(function(){
            document.getElementById('radio' + counter).checked = true;
            counter++;
            if(counter > 4){
                counter = 1;
            }
}, 3000);



    </script>



</body></html>