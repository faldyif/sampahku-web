<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mentor Education Bootstrap Theme</title>
    <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
    <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">
    
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Candal|Alegreya+Sans">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/imagehover.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- =======================================================
        Theme Name: Mentor
        Theme URL: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/
        Author: BootstrapMade.com
        Author URL: https://bootstrapmade.com
    ======================================================= -->
  </head>
  <body>
	<center>
		<div id="loading">
			<center><img id="loading-image" src="img/logo.png" ></center>
			<center><img src="img/loading.gif" "></center>
		</div>
	</center>
    <!--Navigation bar-->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
			  <span class="icon-bar"></span>
			  <span class="icon-bar"></span>
			  <span class="icon-bar"></span>
			</button>
			<!-- <a class="navbar-brand" href="#page-top"><span>Sampah</span>Ku</a> -->
			<a href="#page-top"><img src="img/logo-header.png" style="width: 200px; height: 46px; margin-top: 9px; " /></a>
		</div>
        <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#feature">Fitur</a></li>
          <li><a href="#organisations">Sampah Kita</a></li>
          <li><a href="#faculity-member">Tim</a></li>
          <li><a href="#courses">Fenomena</a></li>
		  <li><a href="#contact">Kontak</a></li>
          <!-- <li><a href="#" data-target="#login" data-toggle="modal">Sign in</a></li> -->
          <li class="btn-trial"><a href="#">Unduh App</a></li>
        </ul>
        </div>
      </div>
    </nav>
    <!--/ Navigation bar-->
    <!--Modal box-->
    <div class="modal fade" id="login" role="dialog">
      <div class="modal-dialog modal-sm">
        <!-- Modal content no 1-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title text-center form-title">Login</h4>
          </div>
          <div class="modal-body padtrbl">

            <div class="login-box-body">
              <p class="login-box-msg">Sign in to start your session</p>
              <div class="form-group">
                <form name="" id="loginForm">
                 <div class="form-group has-feedback"> <!----- username -------------->
                      <input class="form-control" placeholder="Username"  id="loginid" type="text" autocomplete="off" /> 
            <span style="display:none;font-weight:bold; position:absolute;color: red;position: absolute;padding:4px;font-size: 11px;background-color:rgba(128, 128, 128, 0.26);z-index: 17;  right: 27px; top: 5px;" id="span_loginid"></span><!---Alredy exists  ! -->
                      <span class="glyphicon glyphicon-user form-control-feedback"></span>
                  </div>
                  <div class="form-group has-feedback"><!----- password -------------->
                      <input class="form-control" placeholder="Password" id="loginpsw" type="password" autocomplete="off" />
            <span style="display:none;font-weight:bold; position:absolute;color: grey;position: absolute;padding:4px;font-size: 11px;background-color:rgba(128, 128, 128, 0.26);z-index: 17;  right: 27px; top: 5px;" id="span_loginpsw"></span><!---Alredy exists  ! -->
                      <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                  </div>
                  <div class="row">
                      <div class="col-xs-12">
                          <div class="checkbox icheck">
                              <label>
                                <input type="checkbox" id="loginrem" > Remember Me
                              </label>
                          </div>
                      </div>
                      <div class="col-xs-12">
                          <button type="button" class="btn btn-green btn-block btn-flat" onclick="userlogin()">Sign In</button>
                      </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--/ Modal box-->
    <!--Banner-->
    <div class="banner">
      <!--<div class="bg-color">
        <!--<div class="container">
          <div class="row">
            <div class="banner-text text-center">
              <!--<div class="text-border">
                <h2 class="text-dec">Bersihkan & Rasakan</h2>
              </div>
              <div class="intro-para text-center quote">
                <p class="big-text">Buang hari ini . . . Bersih di hari esok.</p>
                <p class="small-text">Buanglah sampah pada tempatnya, kembalikanlah lingkungan ini menjadi bersih<br>dan berikan bersihnya hari ini bagi hari esok</p>
                <a href="#." class="btn">SampahKu</a>
              </div>
              <a href="#feature" class="mouse-hover"><div class="mouse"></div></a>
            </div>
          </div>
        </div>
      </div>-->
	  <div id="page-top" style="width: 100%; height:55px;"></div>
	  <div id="map"></div>
	  <div id="legend"><center><h3>TANDA TEMPAT SAMPAH</h3></center></div>
	  <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.173824050776!2d110.3753111143036!3d-7.77138469439917!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a59b2d4729729%3A0xac4d7b5fcf34f8e4!2sUniversitas+Gadjah+Mada!5e0!3m2!1sid!2sid!4v1493360551284" width="100%" height="600px" frameborder="0" style="border:0" allowfullscreen></iframe> -->
    </div>
    <!--/ Banner-->
    <!--Feature-->
    <section id ="feature" class="section-padding">
      <div class="container">
        <div class="row">
          <div class="header-section text-center">
            <h2>Fitur</h2>
            <p>SampahKu mengintegrasikan user dengan tempat sampah yang berada pada Maps.<br>Sehingga user dapat dengan mudah membuang sampah pada tempatnya.</p>
            <hr class="bottom-line">
          </div>
          <div class="feature-info">
            <div class="fea">
              <div class="col-md-4">
                <div class="heading pull-right">
                  <h4>Tambah Tempat Sampah</h4>
                  <p>Menambahkan lokasi tempat sampah pada Maps. Sehingga setiap user terintegrasi kepada lokasi tempat sampah yang berada disekitarnya.</p>
                </div>
                <div class="fea-img pull-left">
                  <i class="fa fa-pencil"></i>
                </div>
              </div>
            </div>
            <div class="fea">
              <div class="col-md-4">
                <div class="heading pull-right">
                  <h4>Story Sampah</h4>
                  <p>Gunakan kameramu untuk mengambil foto saat sedang membuang sampah, dan dapatkan poinnya.</p>
                </div>
                <div class="fea-img pull-left">
                  <i class="fa fa-camera"></i>
                </div>
              </div>
            </div>
            <div class="fea">
              <div class="col-md-4">
                <div class="heading pull-right">
                  <h4>Clean and Reward</h4>
                  <p>Bersihkan dan dapatkan hadiahnya dengan menukarkan poin-poin yang didapatkan dari menggunakan fitur dalam aplikasi sampahKu.</p>
                </div>
                <div class="fea-img pull-left">
                  <i class="fa fa-trophy"></i>
                </div>
              </div>
            </div>
        </div>
        </div>
      </div>
    </section>
    <!--/ feature-->
    <!--Organisations-->
    <section id ="organisations" class="section-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">         
              <div class="orga-stru">
                <h3>45%</h3>
                <p>Rumah Tangga</p>
                <i class="fa fa-male"></i>
              </div>  
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">         
              <div class="orga-stru">
                <h3>20%</h3>
                <p>Pasar</p>
                <i class="fa fa-male"></i>
              </div>  
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">         
              <div class="orga-stru">
                <h3>35%</h3>
                <p>Lain-lain</p>
                <i class="fa fa-male"></i>
              </div>  
            </div>
          </div>
          <div class="col-md-6">
            <div class="detail-info">
              <hgroup>
                <h3 class="det-txt">siapa sih yang sering membuang sampah dinegeri kita ini?</h3>
                <h4 class="sm-txt">( Kementrian Lingkungan Hidup )</h4>
              </hgroup>
              <p class="det-p">Pulau Jawa adalah pulau terkecil diantara lima pulau besar di Indonesia tetapi menghasilkan sampah paling banyak. Hampir mencapai 21,2 juta ton per tahun. Ini berkorelasi dengan kepadatan penduduk di Pulau Jawa. (Badan Pusat Statistik, 2013).</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--/ Organisations-->
    <!--Cta-->
    <!--<section id="cta-2">
      <div class="container">
        <div class="row">
            <div class="col-lg-12">
              <h2 class="text-center">Subscribe Now</h2>
              <p class="cta-2-txt">Sign up for our free weekly software design courses, we’ll send them right to your inbox.</p>
             <div class="cta-2-form text-center">
              <form action="#" method="post" id="workshop-newsletter-form">
                    <input name="" placeholder="Enter Your Email Address" type="email">
                    <input class="cta-2-form-submit-btn" value="Subscribe" type="submit">
                </form>
             </div>   
            </div>
        </div>
      </div>
    </section>-->
    <!--/ Cta-->
    <!--work-shop-->
    <section id="work-shop" class="section-padding">
      <div class="container">
        <div class="row">
          <div class="header-section text-center">
            <h2>Teknologi SampahKu</h2>
            <p>Terintegrasi dengan Google Maps untuk mengetahui titik-titik lokasi tempat sampah.<br>Gunakan smartphone Anda dan Buanglah sampah pada tempatnya.</p>
            <hr class="bottom-line">
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="service-box text-center">
              <div class="icon-box">
                <i class="fa fa-map-marker color-green"></i>
              </div>
              <div class="icon-text">
                <h4 class="ser-text">Integrated with Google Maps</h4>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="service-box text-center">
              <div class="icon-box">
                <i class="fa fa-eye color-green"></i>
              </div>
              <div class="icon-text">
                <h4 class="ser-text">Augmented Reality</h4>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="service-box text-center">
              <div class="icon-box">
                <i class="fa fa-joomla color-green"></i>
              </div>
              <div class="icon-text">
                <h4 class="ser-text">Firebase Cloud Messaging</h4>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--/ work-shop-->
    <!--Faculity member-->
    <section id="faculity-member" class="section-padding">
      <div class="container">
        <div class="row">
          <div class="header-section text-center">
            <h2>Tim SampahKu</h2>
            <p>Sampah bukan hanya permasalahan petugas sampah ataupun pemerintah semata,<br> Namun ini adalah permasalahan masing-masing individu.</p>
            <hr class="bottom-line">
          </div>
          <div class="col-lg-4 col-md-4 col-sm-4">
            <div class="pm-staff-profile-container" >
              <div class="pm-staff-profile-image-wrapper text-center">
                <div class="pm-staff-profile-image">
                  <img src="img/faldy.png" alt="" class="img-thumbnail img-circle" />
                </div>   
              </div>                                
              <div class="pm-staff-profile-details text-center">  
                <p class="pm-staff-profile-name">Faldy Ikhwan Fadila</p>
                <p class="pm-staff-profile-title">Professional Analyst</p>
                
                <p class="pm-staff-profile-bio">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec et placerat dui. In posuere metus et elit placerat tristique. Maecenas eu est in sem ullamcorper tincidunt. </p>
              </div>     
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-4">
            <div class="pm-staff-profile-container" >
              <div class="pm-staff-profile-image-wrapper text-center">
                <div class="pm-staff-profile-image">
                  <img src="img/titi.png" alt="" class="img-thumbnail img-circle" />
                </div>   
              </div>                                
              <div class="pm-staff-profile-details text-center">  
                <p class="pm-staff-profile-name">Titi Hanifah</p>
                <p class="pm-staff-profile-title">Expert Programmer</p>
                
                <p class="pm-staff-profile-bio">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec et placerat dui. In posuere metus et elit placerat tristique. Maecenas eu est in sem ullamcorper tincidunt. </p>
              </div>     
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-4">
            <div class="pm-staff-profile-container" >
              <div class="pm-staff-profile-image-wrapper text-center">
                <div class="pm-staff-profile-image">
                    <img src="img/abdur.png" alt="" class="img-thumbnail img-circle" />
                </div>   
              </div>                                
              <div class="pm-staff-profile-details text-center">  
                <p class="pm-staff-profile-name">Abdurrahman</p>
                <p class="pm-staff-profile-title">Designer</p>
                <p class="pm-staff-profile-bio">Aplikasi SampaKu adalah solusi tepat bagi permasalahan sampah yang ada. Aplikasi ini memiliki desain yang sederhana dan memudahkan pengguna dalam menggunakan aplikasi ini.</p>
              </div>     
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--/ Faculity member-->
    <!--Testimonial-->
    <!-- <section id="testimonial" class="section-padding">
      <div class="container">
        <div class="row">
          <div class="header-section text-center">
            <h2 class="white">See What Our Customer Are Saying?</h2>
            <p class="white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem nesciunt vitae,<br> maiores, magni dolorum aliquam.</p>
            <hr class="bottom-line bg-white">
          </div>
          <div class="col-md-6 col-sm-6">
            <div class="text-comment">
              <p class="text-par">"Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, nec sagittis sem"</p>
              <p class="text-name">Abraham Doe - Creative Dırector</p>
            </div>
          </div>
          <div class="col-md-6 col-sm-6">
            <div class="text-comment">
              <p class="text-par">"Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, nec sagittis sem"</p>
              <p class="text-name">Abraham Doe - Creative Dırector</p>
            </div>
          </div>
        </div>
      </div>
    </section> -->
    <!--/ Testimonial-->
    <!--Courses-->
    <section id ="courses" class="section-padding">
      <div class="container">
        <div class="row">
          <div class="header-section text-center">
            <h2>Fenomena</h2>
            <p>Sampah yang dibuang sembarangan / tidak pada tempatnya berdampak buruk bagi lingkungan kita,<br> Mari kita buang sampah pada tempatnya!</p>
            <hr class="bottom-line">
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-sm-6 padleft-right">
            <figure class="imghvr-fold-up">
              <img src="img/sampah_jabar.jpg" class="img-responsive">
              <figcaption>
                  <h3>Jawa Barat</h3>
                  <p>Produksi sampah dari tahun 2000- 2006 tercatat mengalami peningkatan sebesar 1.13 juta ton.</p>
              </figcaption>
              <!-- <a href="#"></a> -->
            </figure>
          </div>
          <div class="col-md-4 col-sm-6 padleft-right">
            <figure class="imghvr-fold-up">
              <img src="img/sampah_jatim.jpg" class="img-responsive">
              <figcaption>
                  <h3>Jawa Timur</h3>
                  <p>Produksi sampah dari tahun 2000- 2006 tercatat mengalami peningkatan sebesar 0.26 juta ton.</p>
              </figcaption>
              <!-- <a href="#"></a> -->
            </figure>
          </div>
          <div class="col-md-4 col-sm-6 padleft-right">
            <figure class="imghvr-fold-up">
              <img src="img/sampah_jateng.jpg" class="img-responsive">
              <figcaption>
                  <h3>Jawa Tengah</h3>
                  <p>Produksi sampah dari tahun 2000- 2006 tercatat mengalami peningkatan sebesar 0.22 juta ton.</p>
              </figcaption>
              <!-- <a href="#"></a> -->
            </figure>
          </div>
          <div class="col-md-4 col-sm-6 padleft-right">
            <figure class="imghvr-fold-up">
              <img src="img/sampah_sumatera.jpg" class="img-responsive">
              <figcaption>
                  <h3>Sumatera Utara</h3>
                  <p>Produksi sampah dari tahun 2000- 2006 tercatat mengalami peningkatan sebesar 0.27 juta ton.</p>
              </figcaption>
              <!-- <a href="#"></a> -->
            </figure>
          </div>
          <div class="col-md-4 col-sm-6 padleft-right">
            <figure class="imghvr-fold-up">
              <img src="img/sampah_jakarta.jpg" class="img-responsive">
              <figcaption>
                  <h3>DKI Jakarta</h3>
                  <p>Produksi sampah dari tahun 2000- 2006 tercatat mengalami peningkatan sebesar 0.11 juta ton.</p>
              </figcaption>
              <!-- <a href="#"></a> -->
            </figure>
          </div>
          <div class="col-md-4 col-sm-6 padleft-right">
            <figure class="imghvr-fold-up">
              <img src="img/sampah_total.jpg" class="img-responsive">
              <figcaption>
                  <h3>Total Sampah</h3>
                  <p>Sampah yang dihasilkan mencapai 1,12 kg/kapita setiap harinya.</p>
              </figcaption>
              <!-- <a href="#"></a> -->
            </figure>
          </div>
        </div>
      </div>
    </section>
    <!--/ Courses-->
    <!--Pricing-->
    <!-- <section id ="pricing" class="section-padding">
      <div class="container">
        <div class="row">
          <div class="header-section text-center">
            <h2>Our Pricing</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem nesciunt vitae,<br> maiores, magni dolorum aliquam.</p>
            <hr class="bottom-line">
          </div>
          <div class="col-md-4 col-sm-4">
            <div class="price-table">
              <!-- Plan  
              <div class="pricing-head">
                <h4>Monthly Plan</h4>
                <span class="fa fa-usd curency"></span> <span class="amount">200</span> 
              </div>
          
              <!-- Plean Detail 
              <div class="price-in mart-15">
                <a href="#" class="btn btn-bg green btn-block">PURCHACE</a> 
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-4">
            <div class="price-table">
              <!-- Plan  
              <div class="pricing-head">
                <h4>Quarterly Plan</h4>
                <span class="fa fa-usd curency"></span> <span class="amount">800</span> 
              </div>
          
              <!-- Plean Detail 
              <div class="price-in mart-15">
                <a href="#" class="btn btn-bg yellow btn-block">PURCHACE</a> 
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-4">
            <div class="price-table">
              <!-- Plan 
              <div class="pricing-head">
                <h4>Year Plan</h4>
                <span class="fa fa-usd curency"></span> <span class="amount">1200</span> 
              </div>
          
              <!-- Plean Detail
              <div class="price-in mart-15">
                <a href="#" class="btn btn-bg red btn-block">PURCHACE</a> 
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->
    <!--/ Pricing-->
    <!--Contact-->
    <section id ="contact" class="section-padding">
      <div class="container">
        <div class="row">
          <div class="header-section text-center">
            <h2>Hubungi Kami</h2>
            <p>Demi hari esok yang lebih baik, Mari bersama kita menjalin kerjasama,<br> Kami selalu menunggu pesan dari Anda.</p>
            <hr class="bottom-line">
          </div>
          <div id="sendmessage">Your message has been sent. Thank you!</div>
          <div id="errormessage"></div>
          <form action="" method="post" role="form" class="contactForm">
              <div class="col-md-6 col-sm-6 col-xs-12 left">
                <div class="form-group">
                    <input type="text" name="name" class="form-control form" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                    <div class="validation"></div>
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                    <div class="validation"></div>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                    <div class="validation"></div>
                </div>
              </div>
              
              <div class="col-md-6 col-sm-6 col-xs-12 right">
                <div class="form-group">
                    <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                    <div class="validation"></div>
                </div>
              </div>
              
              <div class="col-xs-12">
                <!-- Button -->
                <button type="submit" id="submit" name="submit" class="form contact-form-button light-form-button oswald light">SEND EMAIL</button>
              </div>
          </form>
          
        </div>
      </div>
    </section>
    <!--/ Contact-->
    <!--Footer-->
    <footer id="footer" class="footer">
		<div class="container text-center">
		
			  <!-- <h3>Start Your Free Trial Now!</h3> -->
			
			  <!-- <form class="mc-trial row">
				<div class="form-group col-md-3 col-md-offset-2 col-sm-4">
				  <div class=" controls">
					<input name="name" placeholder="Enter Your Name" class="form-control" type="text">
				  </div>
				</div><!-- End email input
				<div class="form-group col-md-3 col-sm-4">
				  <div class=" controls">
					<input name="EMAIL" placeholder="Enter Your email" class="form-control" type="email">
				  </div>
				</div>-- End email input
				<div class="col-md-2 col-sm-4">
				  <p>
					<button name="submit" type="submit" class="btn btn-block btn-submit">
					Submit <i class="fa fa-arrow-right"></i></button>
				  </p>
				</div>
			  </form> End newsletter-form -->
			<ul class="social-links">
				<li><a href="#link"><i class="fa fa-twitter fa-fw"></i></a></li>
				<li><a href="#link"><i class="fa fa-facebook fa-fw"></i></a></li>
				<li><a href="#link"><i class="fa fa-google-plus fa-fw"></i></a></li>
				<li><a href="#link"><i class="fa fa-dribbble fa-fw"></i></a></li>
				<li><a href="#link"><i class="fa fa-linkedin fa-fw"></i></a></li>
			</ul>
			©2017 Universitas Gadjah Mada. All rights reserved
			<div class="credits">
				<!-- 
					All the links in the footer should remain intact. 
					You can delete the links only if you purchased the pro version.
					Licensing information: https://bootstrapmade.com/license/
					Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Mentor
				-->
				Designed by <a href="https://bootstrapmade.com/">Free Bootstrap Themes</a>
			</div>
		</div>
    </footer>
    <!--/ Footer-->
    
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="contactform/contactform.js"></script>
	<script language="javascript" type="text/javascript">
		$(document).ready(function() {
			$(window).load(function() {
				$('#loading').fadeOut(1000);
			});
		});
	</script>
	<script>
      var map;
      function initMap() {
		var myLatLng = {lat: -7.7743765, lng: 110.3735022};
		
        map = new google.maps.Map(document.getElementById('map'), {
          zoom: 18,
          center: myLatLng
        });

        var icons = {
          big: {
            name: 'TPS',
            icon: 'icon/big.png'
          },
          bignon: {
            name: 'TPS - Belum Terverifikasi',
            icon: 'icon/bignon.png'
          },
          little: {
            name: 'Tempat Sampah Portable',
            icon: 'icon/little.png'
          },
		  littlenon: {
            name: 'Tempat Sampah - Belum Terverifikasi',
            icon: 'icon/littlenon.png'
          }
        };

        function addMarker(feature) {
          var marker = new google.maps.Marker({
            position: feature.position,
            icon: icons[feature.type].icon,
            map: map
          });
		  
		  marker.addListener('click', function() {
          infowindow.open(map, marker);
		  });
        }
		
		var contentString = '<div id="content">'+
            '<div id="siteNotice">'+
            '</div>'+
            '<h1 style="font-family: calibri;">Tempat Sampah</h1>'+
            '<div id="bodyContent">'+
            '<p><b>Tempat Sampah</b>, Tempat sampah terdekat banyak terletak di ' +
            'dekat UGM lho.</p>'+
            '(@Team SampahKu, 2017).</p>'+
            '</div>'+
            '</div>';

        var infowindow = new google.maps.InfoWindow({
          content: contentString
        });

        var features = [
          {
            position: new google.maps.LatLng(-7.774531, 110.374573),
            type: 'little'
          }, {
            position: new google.maps.LatLng(-7.773874, 110.375200),
            type: 'littlenon'
          }, {
            position: new google.maps.LatLng(-7.774302, 110.374132),
            type: 'little'
          }, {
            position: new google.maps.LatLng(-7.773951, 110.373322),
            type: 'little'
          }, {
            position: new google.maps.LatLng(-7.774910, 110.373923),
            type: 'littlenon'
          }, {
            position: new google.maps.LatLng(-7.774578, 110.373145),
            type: 'littlenon'
          }, {
            position: new google.maps.LatLng(-7.774308, 110.375139),
            type: 'little'
          }, {
            position: new google.maps.LatLng(-7.775633, 110.374431),
            type: 'little'
          }, {
            position: new google.maps.LatLng(-7.776107, 110.374188),
            type: 'littlenon'
          }, {
            position: new google.maps.LatLng(-7.775480, 110.372719),
            type: 'little'
          }, {
            position: new google.maps.LatLng(-7.774698, 110.372869),
            type: 'little'
          }, {
            position: new google.maps.LatLng(-7.773130, 110.373743),
            type: 'big'
          }, {
            position: new google.maps.LatLng(-7.773299, 110.374339),
            type: 'big'
          }, {
            position: new google.maps.LatLng(-7.773343, 110.375353),
            type: 'bignon'
          }, {
            position: new google.maps.LatLng(-7.773805, 110.372986),
            type: 'bignon'
          }, {
            position: new google.maps.LatLng(-7.775239, 110.375066),
            type: 'littlenon'
          }, {
            position: new google.maps.LatLng(-7.774942, 110.372961),
            type: 'littlenon'
          }, {
            position: new google.maps.LatLng(-7.775163, 110.374259),
            type: 'little'
          }, {
            position: new google.maps.LatLng(-7.774371, 110.372314),
            type: 'little'
          }, {
            position: new google.maps.LatLng(-7.773625, 110.372612),
            type: 'little'
          }, {
            position: new google.maps.LatLng(-7.774731, 110.373239),
            type: 'little'
          }
        ];

        for (var i = 0, feature; feature = features[i]; i++) {
          addMarker(feature);
        }

        var legend = document.getElementById('legend');
        for (var key in icons) {
          var type = icons[key];
          var name = type.name;
          var icon = type.icon;
          var div = document.createElement('div');
          div.innerHTML = '<img src="' + icon + '"> ' + name;
          legend.appendChild(div);
        }

        map.controls[google.maps.ControlPosition.RIGHT_BOTTOM].push(legend);
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAWZEIxcIS3Jj5iKUACza0zVqtec-ALAw0&callback=initMap">
    </script>
    
  </body>
</html>