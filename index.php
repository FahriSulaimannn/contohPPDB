<?php

session_start();
include('app.php');

?>

<section class="header-section d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-12">
                    <div class="header-details">
                        <h6>Are you ready to Learn?</h6>
                        <h1>Learn With fun <br> on <span>any schedule</span></h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Varius blandit facilisis quam netus.</p>
                        <button class="get-btn">Get Started</button>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 ml-auto">
                    <div class="header-image">
                        <img src="images/picture/header-image.png" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>  
    <!--
    ==============
        Cards 
    ==============
    -->  
    <section class="cards-section sec-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-3 col-sm-6">
                    <div class="cards-inner">
                        <img src="images/icon/book.png" alt="" class="img-fluid">
                        <h5>1500+ Topic</h5>
                        <p>Learn Anythings</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 col-sm-6">
                    <div class="cards-inner">
                        <img src="images/icon/students-icon-2.png" alt="" class="img-fluid">
                        <h5>1800+ Students</h5>
                        <p>Learn Anythings</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 col-sm-6">
                    <div class="cards-inner">
                        <img src="images/icon/paper.png" alt="" class="img-fluid">
                        <h5>9K+ Test Token</h5>
                        <p>Learn Anythings</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 col-sm-6">
                    <div class="cards-inner">
                        <img src="images/icon/student-icon.png" alt="" class="img-fluid">
                        <h5>2000+ Student</h5>
                        <p>Learn Anythings</p>
                    </div>
                </div>                                                
            </div>
        </div>
    </section> 
    <!--
    ==============
        Course 
    ==============
    -->  
    <section class="course-section sec-padding" id="course">      
        <div class="container">
            <h2 class="text-center title-text">Jadwal Pendaftaran</h2>
            <div class="card-deck">
            <?php
                include('db.php');

                $table = "berita";
                $data = $database->getReference($table)->getValue();

                if ($data > 0) {
                    $i = 1;
                    foreach ($data as $key => $value) {
                ?>
                <div class="card">
                    <!-- <img src="images/picture/card-1.png" class="card-img-top" alt="..."> -->
                    <div class="card-body">
                        <h5 class="card-title"><?= $value['judul']; ?></h5>
                        <p class="card-text"><?= $value['lokasi']; ?></p>
                        <p class="card-text"><?= $value['isi']; ?></p>
                        <!-- <button class="buy-btn">Buy Course</button>                   -->
                    </div>
                    <div class="card-footer">
                        <div class="d-flex justify-content-between">
                            <div class="date d-flex">
                                <img src="images/icon/calendar.png" alt="">
                                <h6>Start <?= $value['tanggal']; ?></h6>
                            </div>
                            <!-- <div class="date d-flex">
                                <img src="images/icon/people.png" alt="">
                                <h6>60 seats</h6>
                            </div>                             -->
                        </div>
                    </div>                
                </div>
                <?php
                }
            }
            ?>
            </div>
        </div>
    </section> 
    <!--
    ==============
        Video 
    ==============
    -->  
    <section class="video-section sec-padding" id="others">      
        <div class="container">
            <div class="row">
                <div class="col-md-5 d-flex align-items-center">
                    <div class="video-details">
                        <h2>Helping people grow their careers, every day!</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis sunt aspernatur explicabo deserunt error rem cumque quos autem quo temporibus eos fugiat reprehenderit, cum laboriosam?</p>
                        <button class="get-btn">Start Learning</button> 
                    </div>
                </div>
                <div class="col-md-6 ml-auto">
                    <div class="video-image">
                        <img src="images/picture/stuednt-video.jpg" alt="" class="img-fluid">
                        <a href="https://www.youtube.com/embed/b6FdqRrrMlQ" target="_blank">
                            <div class="video-icon">
                                <img src="images/icon/play.png" alt="">
                            </div>                            
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>       
    <!--
    ==============
        Testimonial 
    ==============
    -->  
    <section class="testimonial-section sec-padding">      
        <div class="container">
            <h2 class="text-center title-text">Testimonial</h2>  
            <div class="row">
                <div class="col-md-9 mx-auto">
                    <div class="testimonial-inner d-lg-flex justify-content-between">
                        <img src="images/picture/man.png" alt="" class="img-fluid">
                        <p>There are many variations of passages of Lorem Ipsum available, but the
                            majority have suffered alteration in some form, by injected humour, 
                           or randomised words which don't look even slightly believable.</p>
                    </div>
                </div>
            </div>
        </div>
    </section> 
    <!--
    ==============
        Subscribe 
    ==============
    -->  
    <section class="subscribe-section" id="subscribe">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-9 mx-auto">
                    <div class="subscribe-inner text-center">
                        <h2>Do you want to be an instructor?</h2>
                        <a href="mailto:mohammadsaidul2k19@gmail.com" class="get-btn">Join With Us</a>                        
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php include('footer.php'); ?>