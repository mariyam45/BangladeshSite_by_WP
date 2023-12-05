<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?php wp_head();  ?>
  </head>
  <body>
    <!-- header  -->
    <header class="cont">
      <div class="header_cont row">
        <div class="header_left col-sm-6">
          <p>বাংলাদেশ জাতীয় তথ্য বাতায়ন</p>
        </div>
        <div class="header_right col-sm-6 text-end">
          <p>২০ অগ্রহায়ণ, ১৪৩০</p>
          <a href="#">English</a>
        </div>
      </div>
    </header>
    <!-- header end  -->

    <!-- logo  -->
    <section class="cont">
      <div class="logo_cont row">
        <div class="col-sm-5 logo_left">
          <a href="#"><?php the_custom_logo(  )?></a>
        </div>

        <div class="col-sm-5 logo_search">
          <input type="text" placeholder="খুঁজুন " />
          <button>অনুসন্ধান</button>
        </div>

        <div class="col-sm-2 logo_right">
          <div class="logo1">
            <a href="#"
              ><img src="<?php echo get_template_directory_uri() ?>./assets/img/header/a2i-logo-footer.png" alt=""
            /></a>
          </div>
          <div class="logo2">
            <h6>সাথে থাকুন:</h6>
            <a href="#"
              ><img src="<?php echo get_template_directory_uri() ?>./assets/img/header/facebook-icon.png" alt=""
            /></a>
            <a href="#"
              ><img src="<?php echo get_template_directory_uri() ?>./assets/img/header/twitter-blue-icon.png" alt=""
            /></a>
            <a href="#"
              ><img src="<?php echo get_template_directory_uri() ?>./assets/img/header/youtube-icon.png" alt=""
            /></a>
            <a href="#"
              ><img src="<?php echo get_template_directory_uri() ?>./assets/img/header/gplus-icon.png" alt=""
            /></a>
          </div>
        </div>
      </div>
    </section>
    <!-- logo end  -->

    <!-- menu  -->
    <section class="cont1">
      <div class="menu_top">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
          <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <?php 
              wp_nav_menu( [
                'theme_location'=>'PM',
                'menu_class'=>'navbar-nav nav_text'
              ] );
              ?>
            
            </div>
          </div>
        </nav>
        <nav class="navbar navbar-expand-lg">
          <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <?php 
              wp_nav_menu( [
                'theme_location'=>'PM2',
                'menu_class'=>'navbar-nav nav_text'
              ] );
              ?>
      
            </div>
          </div>
        </nav>
      </div>
    </section>
    <!-- menu end  -->

    <!-- hero  -->
    <section class="cont1 mt-4">
      <div class="row hero_cont">
        <div class="col-sm-8 hero_left">
          <!-- slider  -->
          <div class="slider">
            <div
              id="carouselExampleFade"
              class="carousel slide carousel-fade"
              data-bs-ride="carousel"
            >
                <?php 
                $slide=new WP_Query([
                  'post_type'=>'post',
                  'category_name'=>'slider'
                ]);
                ?>
              <div class="carousel-inner">
                <?php 
                $x=0;
                while($slide->have_posts(  )){$slide->the_post(  );
                  $x++;
                ?>

                <div class="thumb carousel-item <?= ($x==1)?'active':''?> ">
                  <?php the_post_thumbnail(  ); ?>
                </div>
                <?php }?>

              </div>
              <button
                class="carousel-control-prev"
                type="button"
                data-bs-target="#carouselExampleFade"
                data-bs-slide="prev"
              >
                <span
                  class="carousel-control-prev-icon"
                  aria-hidden="true"
                ></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button
                class="carousel-control-next"
                type="button"
                data-bs-target="#carouselExampleFade"
                data-bs-slide="next"
              >
                <span
                  class="carousel-control-next-icon"
                  aria-hidden="true"
                ></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
          </div>
          <!-- slider end -->
          <!-- tab  -->
          <div class="tab mt-2 ms-2">
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
              <li class="nav-item" role="presentation">
                <button
                  class="nav-link tab_top active"
                  id="pills-home-tab"
                  data-bs-toggle="pill"
                  data-bs-target="#pills-home"
                  type="button"
                  role="tab"
                  aria-controls="pills-home"
                  aria-selected="true"
                >
                  জনপ্রিয় সেবা
                </button>
              </li>
              <li class="nav-item" role="presentation">
                <button
                  class="nav-link tab_top"
                  id="pills-profile-tab"
                  data-bs-toggle="pill"
                  data-bs-target="#pills-profile"
                  type="button"
                  role="tab"
                  aria-controls="pills-profile"
                  aria-selected="false"
                >
                  নতুন সেবা
                </button>
              </li>
              <li class="nav-item" role="presentation">
                <button
                  class="nav-link tab_top"
                  id="pills-contact-tab"
                  data-bs-toggle="pill"
                  data-bs-target="#pills-contact"
                  type="button"
                  role="tab"
                  aria-controls="pills-contact"
                  aria-selected="false"
                >
                  মোবাইল সেবা
                </button>
              </li>
              <li class="nav-item" role="presentation">
                <button
                  class="nav-link tab_top"
                  id="pills-disabled-tab"
                  data-bs-toggle="pill"
                  data-bs-target="#pills-disabled"
                  type="button"
                  role="tab"
                  aria-controls="pills-disabled"
                  aria-selected="false"
                >
                  দপ্তর ভিত্তিক সেবা
                </button>
              </li>
              <li class="nav-item" role="presentation">
                <button
                  class="nav-link tab_top"
                  id="pills-disabled2-tab"
                  data-bs-toggle="pill"
                  data-bs-target="#pills-disabled2"
                  type="button"
                  role="tab"
                  aria-controls="pills-disabled2"
                  aria-selected="false"
                >
                  সকল ই-সেবা
                </button>
              </li>
            </ul>
            <div class="tab-content tab_btm" id="pills-tabContent">
              <div
                class="tab-pane fade show active"
                id="pills-home"
                role="tabpanel"
                aria-labelledby="pills-home-tab"
                tabindex="0"
              >
                <?php
                  $tab=new WP_Query([
                    'post_type'=>'post',
                    'category_name'=>'জনপ্রিয়_সেবা'
                    ]);
                ?>

                <div class="row">
                    <?php 
                    while($tab->have_posts(  )){$tab->the_post(  );
                    ?>

                  <div class="col-sm-2 text-center">
                    <a href="#"
                      ><?php the_post_thumbnail( )?></a>
                    <p> <?php the_title( )?></p>
                  </div>
                      <?php } ?>

                  <!-- <div class="col-sm-2 text-center">
                    <a href="#"
                      ><img src="<?php echo get_template_directory_uri() ?>./assets/img/tab/business.png" alt=""
                    /></a>
                    <p>অর্থ ও বাণিজ্য</p>
                  </div>
                  <div class="col-sm-2 text-center">
                    <a href="#"
                      ><img src="<?php echo get_template_directory_uri() ?>./assets/img/tab/business.png" alt=""
                    /></a>
                    <p>অর্থ ও বাণিজ্য</p>
                  </div>
                  <div class="col-sm-2 text-center">
                    <a href="#"
                      ><img src="<?php echo get_template_directory_uri() ?>./assets/img/tab/business.png" alt=""
                    /></a>
                    <p>অর্থ ও বাণিজ্য</p>
                  </div> -->
                </div>
              </div>
              <div
                class="tab-pane fade"
                id="pills-profile"
                role="tabpanel"
                aria-labelledby="pills-profile-tab"
                tabindex="0"
              >
                <?php
                  $tab=new WP_Query([
                    'post_type'=>'post',
                    'category_name'=>'জনপ্রিয়_সেবা'
                    ]);
                ?>

                <div class="row">
                    <?php 
                    while($tab->have_posts(  )){$tab->the_post(  );
                    ?>

                  <div class="col-sm-2 text-center">
                    <a href="#"
                      ><?php the_post_thumbnail( )?></a>
                    <p> <?php the_title( )?></p>
                  </div>
                      <?php } ?>

                
                </div>
              </div>
              <div
                class="tab-pane fade"
                id="pills-contact"
                role="tabpanel"
                aria-labelledby="pills-contact-tab"
                tabindex="0"
              >
                <?php
                  $tab=new WP_Query([
                    'post_type'=>'post',
                    'category_name'=>'জনপ্রিয়_সেবা'
                    ]);
                ?>

                <div class="row">
                    <?php 
                    while($tab->have_posts(  )){$tab->the_post(  );
                    ?>

                  <div class="col-sm-2 text-center">
                    <a href="#"
                      ><?php the_post_thumbnail( )?></a>
                    <p> <?php the_title( )?></p>
                  </div>
                      <?php } ?>

                
                </div>
              </div>
              <div
                class="tab-pane fade"
                id="pills-disabled"
                role="tabpanel"
                aria-labelledby="pills-disabled-tab"
                tabindex="0"
              >
                <!-- , -->
                <div class="row tab_list">
                  <div class="col-sm-4">
                    <?php dynamic_sidebar( 'list1' )?>
                    <!-- <ul>
                      <li><a href="#">অর্থ মন্ত্রালয়আইন ও বিচার বিভাগ</a></li>
                      <li><a href="#">অর্থ মন্ত্রালয়আইন ও বিচার বিভাগ</a></li>
                      <li><a href="#">অর্থ মন্ত্রালয়আইন ও বিচার বিভাগ</a></li>
                      <li><a href="#">অর্থ মন্ত্রালয়আইন ও বিচার বিভাগ</a></li>
                      <li><a href="#">অর্থ মন্ত্রালয়আইন ও বিচার বিভাগ</a></li>
                      <li><a href="#">অর্থ মন্ত্রালয়আইন ও বিচার বিভাগ</a></li>
                    </ul> -->
                  </div>
                  <div class="col-sm-4">
                      <?php dynamic_sidebar( 'list2' )?>
                  </div>
                  <div class="col-sm-4">
                      <?php dynamic_sidebar( 'list3' )?>
                    
                  </div>
                </div>
              </div>
              <div
                class="tab-pane fade"
                id="pills-disabled2"
                role="tabpanel"
                aria-labelledby="pills-disabled2-tab"
                tabindex="0"
              >
                <?php
                  $tab=new WP_Query([
                    'post_type'=>'post',
                    'category_name'=>'জনপ্রিয়_সেবা'
                    ]);
                ?>

                <div class="row">
                    <?php 
                    while($tab->have_posts(  )){$tab->the_post(  );
                    ?>

                  <div class="col-sm-2 text-center">
                    <a href="#"
                      ><?php the_post_thumbnail( )?></a>
                    <p> <?php the_title( )?></p>
                  </div>
                      <?php } ?>

                </div>
              </div>
            </div>
          </div>
          <!-- tab end -->

          <!-- list  -->
          <div class="main_list mt-4 ms-2 ">
            <?php dynamic_sidebar( 'mainlist' )?>
                      <div class="btn_sokol text-center"><button class=' solok_btn '>সকল</button></div>
            
          </div>
          <!-- list end -->

          <!-- portal  -->
          <div class="portal mt-3 ms-2 ">
            <div class="row">
              <div class="col-sm-4">
                  <?php dynamic_sidebar( 'portal' )?>
              </div>
              <div class="col-sm-4">
                  <?php dynamic_sidebar( 'portal' )?>
              </div>
              <div class="col-sm-4">
                  <?php dynamic_sidebar( 'portal' )?>
              </div>
            </div>
            
          </div>
          <!-- portal end -->

          <!-- videos  -->
          <div class="video_cont mt-3 ms-2">
            <!-- ....... -->
            <h5>আশ্রয়ণের অধিকার শেখ হাসিনার উপহার</h5>
            <div class="row lvr1">
              <div class="col-sm-4">
                 <?php dynamic_sidebar( 'leftv1' )?>
              </div>
              <div class="col-sm-4">
                 <?php dynamic_sidebar( 'leftv2' )?>
              </div>
              <div class="col-sm-4">
                 <?php dynamic_sidebar( 'leftv3' )?>
              </div>
            </div>

              <!-- ..... -->
            <h5>অন্যান্য ভিডিও</h5>
            <div class="lvr2 row">
              <div class="col-sm-7 lvr2-inner">
                <?php dynamic_sidebar( 'leftv4' )?>
              </div>
              <div class="col-sm-5 lvr2-inner">  
                    <?php dynamic_sidebar( 'leftv5' )?>
                    
                  
                  </div>
            </div>
              <!-- ....... -->
            <!-- <h6>ডিজিটাল বাংলাদেশ এর এগিয়ে যাওয়ার ১২ বছর</h6> -->
              <div class="lvr3 row mt-3">
                <div class="col-sm-12">
                    <?php dynamic_sidebar( 'leftv6' )?>
                </div>
              </div>
              <div class="lvr4 row mt-3">
                <div class="col-sm-12" >
                    <?php dynamic_sidebar( 'leftv7' )?>
                </div>
              </div>

    
          </div>
          <!-- videos end -->
          <div class="banner">
            <?php dynamic_sidebar( 'dengu' )?>
          </div>
        </div>

        <!-- ................. -->
        <div class="col-sm-4 hero_right">
          <div class="side_img">
            <a href="#"class="d-block w-100 pe-3 ps-0 "
              ><?php dynamic_sidebar( 'rimg1' )?></a>
            <!-- <a href="#"
              ><img
                src="./assets/img/sidebar/bangladesh-portal--batton-bangla.png"
                alt=""
                class="d-block w-100 pe-3 ps-0 mb-2"
            /></a>
            <a href="#"
              ><img
                src="./assets/img/sidebar/bangladesh-portal--batton-bangla.png"
                alt=""
                class="d-block w-100 pe-3 ps-0 mb-2"
            /></a> -->
          </div>
          <div class="hotline text-center">
            <h5 class="text-start">জরুরি হটলাইন</h5>
            <a href="#"
              ><?php dynamic_sidebar( 'hotline' )?></a>
          </div>

          <div class="batayon mt-3 mb-3">
            <h5>সকল বাতায়ন</h5>
            
            <select class="">
              <option selected>ওয়েবসাইট বাছাই করুন</option>
              <option value="1">মন্ত্রণালয়</option>
              <option value="2">ঢাকা বিভাগ</option>
              <option value="3">চট্টগ্রাম বিভাগ</option>
              <option value="4">রাজশাহী বিভাগ</option>
              <option value="5">খুলনা বিভাগ</option>
              <option value="6">রংপুর বিভাগ</option>
              <option value="7">সিলেট বিভাগ</option>
              <option value="8">চট্টগ্রাম বিভাগ</option>
            </select>
            <button>চলুন</button>
          </div>

          <div class="vidu_img">
            <!-- <h5>ডিজিটাল বাংলাদেশ থেকে স্মার্ট বাংলাদেশের অভিযাত্রা</h5> -->
            <?php dynamic_sidebar( 'rimg2' )?>

          </div>
        </div>
      </div>
    </section>
    <!-- hero end  -->

    <!-- footer   -->
    <footer class="cont1">
      <div class="ft row ps-0 pe-0">
          <?php dynamic_sidebar( 'ft' )?>
      </div>
      <div class="fb row   ps-3 pe-2">
        <div class="col-sm-7 fb_left bg-body-tertiary ">
          <div class="menu_top">
            <nav class="navbar navbar-expand-lg">
              <div class="container-fluid">
                <div
                  class="collapse navbar-collapse"
                  id="navbarSupportedContent"
                >
                  <?php 
              wp_nav_menu( [
                'theme_location'=>'FM',
                'menu_class'=>'navbar-nav nav_text_f'
              ] );
              ?>
                  <!-- .... -->
                  <!-- <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    ........
                    <li class="nav-item">
                      <a class="nav-link nav_text" href="#">হোম</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link nav_text" href="#"
                        >বাংলাদেশ সম্পর্কিত</a
                      >
                    </li>
                    .......
                  </ul> -->
                </div>
              </div>
            </nav>
          </div>
          <p>সাইটটি শেষ হাল-নাগাদ করা হয়েছে: ২০২৩-১১-২৯ ০৬:৪০:৩৭</p>
        </div>
        <div class="col-sm-5 fb_right pe-1 ps-3">
          <p>
            পরিকল্পনা ও বাস্তবায়নে: এটুআই, মন্ত্রিপরিষদ বিভাগ, বিসিসি, বেসিস,
            ডিওআইসিটি
          </p>
          <div class="d-flex align-item-center">
            <p class="d-inline-block">কারিগরি সহায়তায়:</p>
          <a href="#"
            ><?php dynamic_sidebar( 'fb' )?></a>
          </div>
        </div>
      </div>
    </footer>
    <!-- footer  end -->
    <?php wp_footer(  ) ?>
  </body>
</html>
