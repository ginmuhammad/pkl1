<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Personal Website</title>
    <link rel="stylesheet" type="text/css" href="style.css"/>
    <script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>   
</head>
 
<body background="img/g4.jpg">
    <section>
        <!--- navigation --->
        <nav>
            <!--- logo --->
            <a href="#" class="logo">Portfolio</a>
            <!--- menu --->
            <ul>
                <li><a href="#" class="active">Home</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Testimonials</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </nav>
 
     <div class="transparent">
        <div class="text-container">
            <p>Hello,</p>
            <p>I&#8217;M Gingin</p>
            <p>Web Developer</p>
            <p>An Gemini man  who loves music, watching anime and
            <br>of course writing.</p>
        </div>
    </div>
        
        
    </section>
 
    
    <div class="services">
        
        <div class="services-text ">
            <p>Services</p>
            <p>Kami dengan bangga mempersembahkan layanan unggulan dalam dunia pengembangan web. Apakah Anda memerlukan pembuatan situs web baru, perbaikan dan pembaruan pada situs yang sudah ada, atau pengoptimalan fungsionalitas, tim web developer kami siap membantu Anda mewujudkan visi dan kebutuhan online Anda.</p>
        </div>
         
        <div class="box-container">
        
            <div class="box-1">
                <span>1</span>
                <p class="heading">Technical Writing</p>
                <p class="details">Kami akan bekerja untuk meningkatkan kecepatan pemuatan situs web Anda, meningkatkan kinerja, dan mengurangi waktu penantian pengguna.</p>
                <button>Read More</button>
            </div>
        
            <div class="box-2">
                <span>2</span>
                <p class="heading">Web Design</p>
                <p class="details">Mulai dari awal, kami akan merancang dan mengembangkan situs web yang sesuai dengan tujuan Anda. Kami akan bekerja sama dengan Anda untuk menghasilkan desain yang menarik dan fungsional.</p>
                <button>Read More</button>
            </div>
        
            <div class="box-3">
                <span>3</span>
                <p class="heading">Web Development</p>
                <p class="details">Jika Anda memiliki pertanyaan atau perlu saran dalam hal pengembangan web, tim kami siap memberikan konsultasi yang informatif.</p>P
                <button>Read More</button>
            </div>
        </div>
    </div>
     
    <!--testimonials-->
    <div class="testimoni">
        <!--text-->
        <div class="testimoni-text ">
            <p>What Our Client Says..</p>
        </div>        
 
        <div class="testimoni-col">
            <div class="testimoni-1">
                <img src="img/gb.jpg">
                <div>
                    <P>"Saya ingin mengucapkan terima kasih kepada tim web developer ini atas kerja luar biasa mereka. Mereka mendengarkan dengan cermat kebutuhan dan harapan saya, dan menghasilkan situs web yang melebihi harapan saya. Pelayanan mereka setelah peluncuran juga patut diacungi jempol – setiap pertanyaan saya dijawab dengan cepat dan solusi diberikan dengan jelas." - Lisa M., Pelaku Usaha Kecil</P>
                    <h3>Client Pertama</h3>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
            </div>
 
            <div class="testimoni-2">
                <img src="img/gb1.jpg">
                <div>
                    <p>"Saya sangat puas dengan layanan yang diberikan oleh tim web developer ini. Mereka mampu menggambarkan visi saya dalam bentuk situs web yang menakjubkan. Proses kerja mereka yang kooperatif dan responsif membuat pengalaman saya sangat menyenangkan. Saya merekomendasikan mereka kepada siapa pun yang mencari solusi pengembangan web yang handal." - Sarah W., Pengusaha*</p>
                    <h3>Client Kedua</h3>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
            </div>
        </div>
    </div>
 
   
    <footer>
        <p>Interested In Using Our Services?</p>
             
       
        <p>I try to work on your project as quickly as possible. Guarantee for revision until you are satisfied with my work.</p>
       
        <div class="social-icons">
            <a href="#"><i class="fab fa-whatsapp"></i></a>
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-youtube"></i></a>
        </div>
         
       
        <p class="copyright">Copyright by Gingin 2023</p>
    </footer>
 
    <!--social-attach-bar <a href="exit.php" class="btn">exit</a>-->
    <div class="social">
        <a href="#"><i class="fab fa-whatsapp"></i></a>
        <a href="#"><i class="fab fa-facebook-f"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
        <a href="#"><i class="fab fa-youtube"></i></a>
    </div>
    <?php
        $page=(isset($_GET['page'])) ?
        $_GET['page'] : 'main';
    switch($page) {
        case 'contact':
            include 'contact.php';
            break;

    }
?>
</body>
 
</html>