<?php 

$conn = mysqli_connect('localhost','root','','contact_db') or die('connection failed');

if(isset($_POST["Kirim"])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $number = mysqli_real_escape_string($conn, $_POST['number']);
   $msg = mysqli_real_escape_string($conn, $_POST['message']);

   $select_message = mysqli_query($conn, "SELECT * FROM `contact_form` WHERE name = '$name' AND email = '$email' AND number = '$number' AND message = '$msg'") or die('query failed');
   
   if(mysqli_num_rows($select_message) > 0){
      $message[] = 'Pesan terkirim!';
   }else{
      mysqli_query($conn, "INSERT INTO `contact_form`(name, email, number, message) VALUES('$name', '$email', '$number', '$msg')") or die('query failed');
      $message[] = 'Pesan berhasil di kirim!';
   }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portoflio</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!--- AOS css link ---->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">

    <!---custom css file---->
    <link rel="stylesheet" href="style.css">

    
</head>
<body>

<?php

if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message" data-aos="zoom-out">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}

?>
    

<!-- header section starts -->

<header class="header">

<div id="menu-btn" class="fas fa-bars"></div>

    <a href="#home" class="logo">Portofolio</a>

    <nav class="navbar">
        <a href="#home" class="active">home</a>
        <a href="#about">about</a>
        <a href="#service">service</a>
        <a href="#portofolio">portofolio</a>
        <a href="#contact">contact</a>
    </nav>

    <div class="follow">
        <a href="https://www.facebook.com/andrian.dwiputra.98" class="fab fa-facebook-f"></a>
        <a href="https://www.instagram.com/riyan_antv29/?hl=id" class="fab fa-instagram"></a>
        <a href="https://twitter.com/andrianwibowo17" class="fab fa-twitter"></a>
        <a href="https://www.youtube.com/channel/UCgsNE7VS9EPquWNesBI1Nlg" class="fab fa-youtube"></a>
        
        
        
    </div>
</header>

<!---- page utama ---->

<section class="home" id="home">

   <div class="image" data-aos="fade-right">
      <img src="Aku.jpeg" alt="">
   </div>

   <div class="content">
      <h3 data-aos="fade-up">hi, Saya Andrian Dwiputra</h3>
      <span data-aos="fade-up">Web developer</span>
      <p data-aos="fade-up">Saya sebagai seorang yang bergerak di bagian website dan saya bisa di sebut sebagai
     Web Developer karena divisi yang saya ambil itu bagian website di organisasi Unit produksi</p>
      <a data-aos="fade-up" href="#about" class="btn">about me</a>
   </div>

</section>

<!-- about  -->
<!-- about section starts  -->

<section class="about" id="about">

   <h1 class="heading" data-aos="fade-up"> <span>biography</span> </h1>

   <div class="biografi">

      <p data-aos="fade-up">data tentang diri saya dan personal saya</p>

      <div class="bio">
         <h3 data-aos="zoom-in"> <span>name : </span> Andrian Dwiputra </h3>
         <h3 data-aos="zoom-in"> <span>email : </span> anrianwibowo06@gmail.com</h3>
         <h3 data-aos="zoom-in"> <span>Agama : </span> Islam </h3>
         <h3 data-aos="zoom-in"> <span>Umur : </span> 16 tahun </h3>
         <h3 data-aos="zoom-in"> <span>Status : </span> Belum menikah </h3>
      </div>

      <a href="#" class="btn" data-aos="fade-up">Profile</a>

   </div>
   
   <div class="skills" data-aos="fade-up">

      <h1 class="heading"> <span>skills</span> </h1>

      <div class="progress">
         <div class="bar" data-aos="fade-left"> <h3><span>HTML</span> <span>95%</span></h3> </div>
         <div class="bar" data-aos="fade-right"> <h3><span>CSS</span> <span>85%</span></h3> </div>
         <div class="bar" data-aos="fade-left"> <h3><span>JavaScript</span> <span>50%</span></h3> </div>
         <div class="bar" data-aos="fade-right"> <h3><span>PHP</span> <span>87%</span></h3></div>
         <div class="bar" data-aos="fade-left"> <h3><span>Python</span> <span>60%</span></h3></div>
      </div>

   </div>

   <!--- Education & experience ---->

   <div class="edu-exp">

      <h1 class="heading" data-aos="fade-up"> <span>Edukasi & Pengalaman</span> </h1>

      <div class="row">

         <div class="box-container">

            <h3 class="title" data-aos="fade-right">Education</h3>

            <div class="box" data-aos="fade-right">
               <span>( 2020 - 2022 )</span>
               <h3>web designer</h3>
               <p>Web designer bertanggung jawab untuk merancang tampilan visual sebuah website. <br>Mereka fokus pada elemen-elemen seperti layout, warna, tipografi, <br>dan elemen desain lainnya.</br></br></p>
            </div>

            <div class="box" data-aos="fade-right">
               <span>( 2019 - 2023 )</span>
               <h3>web developer</h3>
               <p>Web developer bertanggung jawab untuk mengkodekan website berdasarkan desain yang telah dibuat oleh web designer. <br>Mereka bekerja dengan bahasa pemrograman seperti HTML, CSS, dan JavaScript untuk membangun komponen interaktif dalam website.</br></p>
            </div>


         </div>

         <div class="box-container">

            <h3 class="title" data-aos="fade-left">Pengalaman</h3>

            <div class="box" data-aos="fade-left">
               <span>( 2020 - 2023 )</span>
               <h3>front-end developer</h3>
               <p>Selama menjadi front-end developer, saya lebih banyak berkontribusi dengan Bahasa pemrograman HMTL,CSS,JS untuk membuat tampilan dan animasi yang ada di bagian tampilan halaman website<br>Termasuk pembuatan portofolio website ini.</br></p>
            </div>

            <div class="box" data-aos="fade-left">
               <span>( 2022 - 2023 )</span>
               <h3>back-end developer</h3>
               <p>Selama menjadi back-end developer, saya baru menguasai PHP dan Python untuk saat ini, saya masih perlu banyak belajar di bagian back end<br>seperti pemrograman python yang dimana saya harus menguasai lebih dalam lagi karena itu lah yang dibutuhkan oleh</br>berbagai perusahaan.</p>
            </div>

         </div>

      </div>

   </div>

</section>


<!--- Services ---->
<!-- about section ends  -->

<section class="service" id="service">

   <h1 class="heading" data-aos="fade-up"><span>Services</span></h1>

   <div class="box-container">

   <div class="box" data-aos="zoom-in">
      <i class="fas fa-database "></i>
      <h3>Mysql</h3>
      <p>sistem manajemen database yang bersifat open-source yang menggunakan perintah dasar atau bahasa pemrograman yang berupa structured query language (SQL). MySQL berguna sebagai database. </p>
   </div>

   <div class="box" data-aos="zoom-in">
      <i class="fas fa-paint-brush"></i>
      <h3>bootstrap</h3>
      <p>Framework ini berisi templat desain berbasis HTML dan CSS untuk tipografi, formulir, tombol, navigasi, dan komponen antarmuka lainnya, serta juga ekstensi opsional JavaScript.</p>
   </div>

   <div class="box" data-aos="zoom-in">
      <i class="fab fa-laravel"></i>
      <h3>Laravel</h3>
      <p>Penggunaan Laravel sangat cocok untuk bagian dalam framework php agar berjalan maksimal</p>
   </div>
</section>


<!--- Portofolio section ----->

<section class="portfolio " id="portofolio">


   <h1 class="heading" data-aos="fade-up"><span>Portofolio</span></h1>

   <div class="box-container">
      <div class="box" data-aos="zoom-in">
         <img src="Diriku.png" alt="">
         <h3>Web development</h3>
         <span> (2019 - 2023) </span>
      </div>


      <div class="box"data-aos="zoom-in">
         <img src="Web backend.png" alt="">
         <h3>Web backend</h3>
         <span>(2022 - 2023)</span>
      </div>
   </div>
</section>


<!--- My project ----->

<section class="project" id="project">
   <h1 class="heading" data-aos="fade-up"><span>My project</span></h1>
   <div class="box-container">
   <div class="box" data-aos="zoom-in">
   <img src="Login.png" alt="">
   <h2>Project login</h2>
   </div>

   <div class="box" data-aos="zoom-in">
      <img src="Crud.png" alt="">
      <h2>Crud sederhana</h2>
   </div>
   </div>
   
   
</section>

<!--- contact ---->

<section class="contact" id="contact">
   <h1 class="heading" data-aos="fade-up"><span>Contact</span></h1>

   <form action="" method="post">
      <div class="flex">
         <input data-aos="fade-right"type="text" name="name" placeholder="Masukkan nama mu kawan" class="box" required>
         <input data-aos="fade-left"type="email" name="email" placeholder="Masukkan email mu kawan" class="box" required>
      </div>
      <input data-aos="fade-up"type="number" min="0" name="number" placeholder="Masukkan nomor telpon mu kawan" class="box" required>
      <textarea data-aos="fade-up"name="message" class="box" required placeholder="Masukkan pesan mu" cols="30" rows="10"></textarea>
      <input type="submit" data-aos="zoom-in"value="Kirim pesan" name="kirim" class="btn">
   </form>
   <div class="box-container">

      <div class="box" data-aos="zoom-in">
         <i class="fa fa-phone"></i>
         <h3> <a href="tel:081348779566">Call phone</a></h3>
         <span>+62 813-4877-9566</span>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fa fa-envelope"></i>
         <h3>email</h3>
         <span>anrianwibowo06@gmail.com</span>
      </div>
   </div>
   </div>
</section>

<!----Contact-->

<div class="credit"> &copy; copyright 2023 ; by<span> riyan_antv29</div>




<!---- custom js file ----->
<script src="julianto.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

<script>

   AOS.init({
      duration:800,
      delay:300
   });

</script>
   
</body>
</html>