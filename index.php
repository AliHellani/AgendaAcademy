
<?php
	session_start();
	require 'conn.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AgendaAcademy</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
</head>
<body>
<?php include 'header.php'; ?>
<div class="container">

  <div class="swiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="pics/skills1.jpg"></div>
            <div class="swiper-slide"><img src="pics/skills2.jpeg"></div>
            <div class="swiper-slide"><img src="pics/accounting.png"></div>
            <div class="swiper-slide"><img src="pics/digital marketing.png"></div>
            <div class="swiper-slide"><img src="pics/nurse.jpg"></div>
            <div class="swiper-slide"><img src="pics/Pharmacy.jpg"></div>
            <div class="swiper-slide"><img src="pics/m office.jpg"></div>
            <div class="swiper-slide"><img src="pics/graphic design.png"></div>
            <div class="swiper-slide"><img src="pics/photography.jpg"></div>
            <div class="swiper-slide"><img src="pics/speech therapy.jpg"></div>
        </div>

     <div class="swiper-pagination"></div>

     <div class="swiper-button-prev"></div>
     <div class="swiper-button-next"></div>

     <div class="swiper-scrollbar"></div>
     </div>

</div>

<div class="team-section">
    <div class="inner-width">
        <h1>Meet Our Team</h1>
        <div class="pers">

        <div class="pe">
           <img src="team pics/owner.jpeg" alt="" >
           <div class="p-name">Alexa</div>
           <div class="p-des">Owner</div>
           <div class="p-sm">
           <a href="#"><i class="fab fa-facebook-f"></i></a>
             <a href="#"><i id="insta" class="fab fa-instagram"></i></a>
             <a href="#"><i class="fab fa-whatsapp"></i></a>
            </div>
        </div>

        <div class="pe">
           <img src="team pics/teacher1.jpeg" alt="" >
           <div class="p-name">David</div>
           <div class="p-des">Teacher</div>
           <div class="p-sm">
           <a href="#"><i class="fab fa-facebook-f"></i></a>
             <a href="#"><i id="insta" class="fab fa-instagram"></i></a>
             <a href="#"><i class="fab fa-whatsapp"></i></a>
            </div>
        </div>

        <div class="pe">
           <img src="team pics/teacher.jpeg" alt="" >
           <div class="p-name">Angelina</div>
           <div class="p-des">Teacher</div>
           <div class="p-sm">
             <a href="#"><i class="fab fa-facebook-f"></i></a>
             <a href="#"><i id="insta" class="fab fa-instagram"></i></a>
             <a href="#"><i class="fab fa-whatsapp"></i></a>
            </div>
        </div>

        </div>
    </div>
</div>

<?php include 'footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script>
        const swiper = new Swiper('.swiper', {
         autoplay: {
            delay: 3000,
            disableOnInteraction: false,
         },

            loop: true,

          pagination: {
          el: '.swiper-pagination',
         clickable: true,
          },

           navigation: {
         nextEl: '.swiper-button-next',
         prevEl: '.swiper-button-prev',
           },

       scrollbar: {
          el: '.swiper-scrollbar',
        },
        });  
    </script>

</body>
</html>