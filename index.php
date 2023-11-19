      <?php 
      require 'header.php';
      require 'function/function.php';

      $query_siswa = tampil("SELECT * FROM siswa");
      $query_struktur = tampil("SELECT * FROM struktur");
      $query_informasi = tampil("SELECT * FROM informasi");

 
      ?>
        <!-- Start Slider  -->
        <section id="home" class="home">
             <div class="slider-overlay"></div>
            <div class="flexslider">
                <ul class="slides scroll">
                    <li class="first">
                        <div class="slider-text-wrapper">  
                            <div class="container">
                                <div class="big">Welcome to</div>          
                                <div class="small">pondok Pesantren Nurul Hidayah Sapanang</div>
                                <a href="#history" class="middle btn btn-white">Cek Selengkapnya</a>
                            </div>       
                        </div>
                        <img src="images/slider/1.jpg" alt="">
                    </li>
                    
                    <li class="secondary">
                        <div class="slider-text-wrapper"> 
                            <div class="container">                       
                                <div class="big">Welcome to</div>          
                                <div class="small">Pondok Pesantren Nurul Hidayah Sapanang</div>
                                <a href="#history" class=" middle btn btn-white">Cek Selengkapnya</a>
                            </div>
                         </div>
                        <img src="images/slider/2.jpg" alt="">
                    </li>
                    
                    <li class="third">
                        <div class="slider-text-wrapper"> 
                            <div class="container">                              
                                <div class="big">Welcome to</div>          
                                <div class="small">Pondok Pesantren Nurul Hidayah Sapanang</div>
                                <a href="#history" class="middle btn btn-white">Cek Selengkapnya</a>
                             </div>
                        </div>
                        <img src="images/slider/3.jpg" alt="">
                    </li>
                </ul>
            </div>
        </section>
          <!-- End Slider  -->

  <!--Start Materi-->
  <section  id="about" class="section">
       <div class="container">
           <div class="row">
              
              <!-- Features Icon-->
              <div class="col-md-4">
                  <div class="features-icon-box">
                  
                      <div class="features-icon">
                      <i class="fa fa-leaf"></i>
                      </div>
                      
                      <div class="features-info">
                         <h4>Tauhid</h4>
                         <p>Para siswa di ajarkan ilmu Taudid, karena tauhid merupakan ajaran dasar dalam islam 
                            sehingga bisa membentuk pondasi para siswa terkait ilmu agama islam.</p>
                      </div>
                  </div>
              </div>
 
               <!-- Features Icon-->
              <div class="col-md-4">
                  <div class="features-icon-box">
                  
                      <div class="features-icon">
                      <i class="fa fa-university"></i>
                      </div>
                      
                      <div class="features-info">
                         <h4>Fiqih</h4>
                         <p>Ilmu Fiqih juga di ajarkan untuk siswa, sebab Fiqih merupakan ilmu tentang
                            hukum yang mengatur berbagai aspek kehidupan manusia,
                            baik kehidupan pribadi, bermasyarakat maupun kehidupan manusia dengan Allah.
                        </p>
                      </div>
                  </div>
              </div>

               <!-- Features Icon-->
              <div class="col-md-4">
                  <div class="features-icon-box">
                  
                      <div class="features-icon">
                     <i class="fa fa-life-saver"></i>
                      </div>
                      
                      <div class="features-info">
                         <h4>Ushul Fiqih</h4>
                         <p>Siswa di ajarkan ilmu ini yang bertujuan untuk mengembangkan metode dan prinsip-prinsip yang dapat diterapkan untuk mendapatkan 
                            dasar hukum Islam dari sumber utama, yaitu Al-Qur'an dan Hadis, serta pemahaman tentang 
                            praktik-praktik Nabi Muhammad SAW.</p>
                      </div>
                  </div>
              </div>
 
               <!-- Features Icon-->
              <div class="col-md-4">
                  <div class="features-icon-box">
                  
                      <div class="features-icon">
                      <i class="fa fa-paint-brush"></i>
                      </div>
                      
                      <div class="features-info">
                         <h4>Hadis</h4>
                         <p>Di Pesantren ini siswa juga di ajarkan tentang hadis, yg bertujuan agar siswa dapat memahami dan mengetahui 
                            setiap perkataan dan perbuatan dari nabi muhammad SAW, dan juga hadis merupakan sumber hukum islam yang ke-2 
                            yang tidak terdapat dalam al-quran.
                         </p>
                      </div>
                  </div>
              </div>

              <!-- Features Icon-->
              <div class="col-md-4">
                  <div class="features-icon-box">
                  
                      <div class="features-icon">
                     <i class="fa fa-line-chart"></i>
                      </div>
                      
                      <div class="features-info">
                         <h4>Tafsir Al-quran</h4>
                         <p>Tafsir Al-Quran merupakan ilmu utama yang di ajarkan siswa pada Pesantren ini karena bertujuan agar
                            siswa benar-benar bisa lebih dalam memahami dan menganalisa isi dari al-quran baik ayat-perayat 
                            maupun huruf-perhuruf. 
                         </p>
                      </div>
                  </div>
              </div>
              
           </div> <!-- /.row-->
       </div> <!-- /.container-->
  </section> 
  <!--End Materi-->

 
  <!-- Start Facts-->
  <section id="facts" class="section parallax">
    <div class="overlay"></div>
       <div class="container">
           <div class="row">
                  
               <!-- Start Item-->
                <div class="col-md-3 col-sm-6 facts-box margin-bottom-30">
                    <span></i></span>
                    <h3></h3>
                    <span></span>
                </div>
                <!-- End Item-->
                
                <!-- Start Item-->
                <?php $data_siswa = mysqli_num_rows($query_siswa); ?>
                <div class="col-md-3 col-sm-6 facts-box margin-bottom-30">
                    <span><i class="icon-happy"></i></span>
                    <h3><?= $data_siswa; ?></h3>
                    <span>Siswa</span>
                </div>
                <!-- End Item-->
 
                 <!-- Start Item-->
                 <?php $data_struktur = mysqli_num_rows($query_struktur); ?>
                <div class="col-md-3 col-sm-6 facts-box margin-bottom-30">
                 <span><i class="icon-presentation"></i></span>
                    <h3><?= $data_struktur; ?></h3>
                    <span>Struktur</span>
                </div>
                <!-- End Item-->

             </div> <!-- /.row -->
       </div> <!-- /.container -->
  </section>
  <!--End Facts-->
  
  <!--Start Section-->
 <section class="section">
      <div class="container">
          <div class="row"> 
                <div class="col-md-12">
					<div class="content-tab-1">
						
                        
						<div class="tab-content-main">
								<div class="container">
									<div class="tab-content">
										<div class="tab-pane active in" id="tab-content-1">
											
                                           <!-- Features Icon-->	
                                            <div class="col-md-6 margin-bottom-30">
                                                <div class="tab1-features">
                                                    <div class="icon"> <i class="fa fa-thumb-tack"></i> </div>
                                                    <div class="info">
                                                        <h4>Profile</h4>
                                                        <p>Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet. Et netus et malesuada fames ac turpis egestas tristique senectus. </p>
                                                    </div>
                                                </div>

                                                <div class="tab1-features">
                                                    <div class="icon"> <i class="fa fa-star-o"></i> </div>
                                                    <div class="info">
                                                        <h4>Visi </h4>
                                                        <p>Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet. Et netus et malesuada fames ac turpis egestas tristique senectus. </p>
                                                    </div>
                                                </div>
                                                
                                                <div class="tab1-features">
                                                    <div class="icon"> <i class="fa fa-codepen"></i> </div>
                                                    <div class="info">
                                                        <h4>Misi</h4>
                                                        <p>Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet. Et netus et malesuada fames ac turpis egestas tristique senectus. </p>
                                                    </div>
                                                </div>
                                        
                                                
                                            </div>
                                            <!--End features Icon-->
                                            
                                           
                                          <!--  Start Carousel-->
                                          <div class="col-md-6">
                                              <div class="tab-carousel">
                                                    <div class="item"><img src="images/works/img4.jpg" alt=""></div>
                                                    <div class="item"><img src="images/works/img5.jpg" alt=""></div>
                                                    <div class="item"><img src="images/works/img6.jpg" alt=""></div>						 
                                              </div>
                                          </div>
                                          <!-- End Carousel-->                                            
                                            
										</div>
                                       <!-- End Tab content 1-->
                                        
									</div>
								</div>
						  </div>
                        <!--/.tab-content-main-->  
					</div>
				</div>
              
            </div> <!--/.row-->  
      </div> <!--/.container-->
  </section>
  <!--End Section-->
  
   
     <!--Start Sejarah-->
    <section id="history" class="section parallax">
		<div class="overlay"></div>
            <div class="container">
                
                 <div class="title-box text-center white">
                    <h2 class="title">Sejarah berdirinya Pesantren Nurul Hidayah Sapanang</h2>
                 </div>
                 
                     <!-- History Timeline -->
                    <ul class="timeline list-unstyled">
                        
                        <li class="year">2014</li>
                        
                        <!--History Item -->
                        <li class="timeline-item">
                            <h4>Lorem ipsum dolor consectetur adipisicing.</h4>
                            <p>Lorem ipsum dolor consectetur adipisicing incididunt eiusmod tempor incididunt laboredolore magna aliqua.</p>
                            <span> 16 OCT 2014</span>
                        </li>
                        <!-- End Item -->
                        
                        <!--History Item -->
                        <li class="timeline-item">
                            <h4>Lorem ipsum dolor consectetur adipisicing.</h4>
                            <p>Lorem ipsum dolor consectetur adipisicing incididunt eiusmod tempor incididunt laboredolore magna aliqua.</p>
                            <span> 18 OCT 2014</span>
                        </li>
                        <!-- End Item -->
                        
                        <!-- History Year -->
                        <li class="year">2015</li>
                        
                        
                        <!--History Item -->
                        <li class="timeline-item">
                            <h4>Lorem ipsum dolor consectetur adipisicing.</h4>
                            <p>Lorem ipsum dolor consectetur adipisicing incididunt eiusmod tempor incididunt laboredolore magna aliqua.</p>
                            <span> 10 OCT 2015</span>
                        </li>
                        <!-- End Item -->
                        
                        <!--History Item -->
                        <li class="timeline-item">
                            <h4>Lorem ipsum dolor consectetur adipisicing.</h4>
                            <p>Lorem ipsum dolor consectetur adipisicing incididunt eiusmod tempor incididunt laboredolore magna aliqua.</p>
                            <span> 11 OCT 2014</span>
                        </li>
                        <!-- End Item -->
                        
                         <!--History Item -->
                        <li class="timeline-item">
                            <h4>Lorem ipsum dolor consectetur adipisicing.</h4>
                            <p>Lorem ipsum dolor consectetur adipisicing incididunt eiusmod tempor incididunt laboredolore magna aliqua.</p>
                            <span> 18 OCT 2015</span>
                        </li>
                        <!-- End Item -->
                        
                         <li class="clear"></li>
                        
                        <li class="end-icon fa fa-bookmark"></li>
                    </ul>
                   <!-- End Sejarah Timeline -->
                   
           </div> <!--/.container-->
	</section>
   <!--End Sejarah-->
 
    
  <!--Start Struktur-->
  <section id="team" class="section">
		<div class="container">
            <div class="row">
                    
             <div class="title-box text-center">
                <h2 class="title">Struktur</h2>
             </div>
              
             </div>

                <!-- Struktur -->
				<div class="team-items team-carousel">
                <?php while($data_struktur = mysqli_fetch_assoc($query_struktur)): ?>
                      <!-- Team Member #1 -->
                      <div class="item">
                          <img src="images/struktur/<?= $data_struktur['gambar']; ?>" alt="Responsive image" class="img-fluid" width="350"  height="250" />
                          <h4><a class="upper"><?= $data_struktur['nama']; ?></a></h4>
                          <p class="upper">
                            <b><?= $data_struktur['jabatan']; ?></b>
                          </p>
                          <p>No Telepon/Wa : <?= $data_struktur['no_telepon']; ?> </p>
                          
                          <div class="socials">
                              <ul>
                               <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                               <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                               <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                               <li><a class="google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
                              </ul>
                          </div>
                      </div>
                      <!-- End Member -->
                      <?php endwhile; ?>
				</div>
                <!-- End Struktur -->
			</div>
            <!-- End Content -->
	</section>
  <!--End Struktur-->

   <!-- Start Informasi-->
   <section id="informasi" class="section">
       <div class="container">
           <div class="row">
           
                 <div class="title-box text-center">
                    <h2 class="title">Informasi</h2>
                 </div>
                
               <!-- Start Blog item #1-->
               <?php while($data_informasi = mysqli_fetch_assoc($query_informasi)): ?>
               <div class="col-md-4">
                   <div class="blog-post">
                         <div class="post-media">
							 <img src="images/informasi/<?= $data_informasi['gambar']; ?>" alt="">
                         </div>
                       <div class="post-desc">
                           <h4><?= $data_informasi['judul']; ?></h4>
                           <h5><?= $data_informasi['tgl_informasi']; ?> / 5 Comments</h5>
                           <?php $deskripsi = substr($data_informasi['deskripsi'],0,60) ?>
                           <p><?= $deskripsi; ?>. . . . . . . . . </p>
                            <a href="informasi_detail.php?id_informasi=<?= $data_informasi['id_informasi']; ?>" class="btn btn-gray-border">Read More</a>
                       </div>
                   </div>
               </div>  
               <?php endwhile; ?>          

           </div> <!--/.row-->
       </div> <!--/.container-->
   </section>
   <!-- End Informasi-->
   
<?php 
require 'footer.php';
?>
   