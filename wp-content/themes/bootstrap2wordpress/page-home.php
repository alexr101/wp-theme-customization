<?php
/* 
  Template Name: Home Page
*/ 

// Custom Fields 
$prelaunch_price      = get_post_meta(10, prelaunch_price, true);
$launch_price         = get_post_meta(10, launch_price, true);
$final_price          = get_post_meta(10, final_price, true);
$course_url           = get_post_meta(10, course_url, true);
$button_text          = get_post_meta(10, button_text, true);
$opt_in_text          = get_post_meta(10, opt_in_text, true);
$opt_in_btn_text      = get_post_meta(10, opt_in_btn_text, true);

// Advanced Custom Fields
// Boost Your Income Section 
$income_img                   = get_field('income_feature_image');
$income_title                 = get_field('income_title');
$income_description           = get_field('income_description');
$income_reason_1_title        = get_field('income_reason_1_title');
$income_reason_1_description  = get_field('income_reason_1_description');
$income_reason_2_title        = get_field('income_reason_2_title');
$income_reason_2_description  = get_field('income_reason_2_description');

// Who Should Take This Course Section 

$take_course_title    = get_field('take_course_title');
$take_course_img    = get_field('take_course_image');
$take_course_content  = get_field('take_course_content');

get_header(); ?>

<section id="hero" data-type="background" data-speed="5">
    <article>
      <div class="container clearfix">
        <div class="row">
        
          <div class="col-sm-5">
            <img src="<?php bloginfo('stylesheet_directory')?>/assets/img/logo-badge.png" alt="Bootstrap to Wordpress" class="logo">
          </div><!-- col -->
          
          <div class="col-sm-7 hero-text">
            <h1><?php bloginfo('blog_name')?></h1>
                <p class="lead"><?php bloginfo('description') ?></p>
                
                <div id="price-timeline">
                  <div class="price active">
                    <h4>Pre-Launch Price <small>Ends soon!</small></h4>
                    <span><?php echo $prelaunch_price ?></span>
                  </div><!-- end price -->
                  <div class="price">
                    <h4>Launch Price <small>Coming soon!</small></h4>
                    <span><?php echo $launch_price ?></span>
                  </div><!-- end price -->
                  <div class="price">
                    <h4>Final Price <small>Coming soon!</small></h4>
                    <span><?php echo $final_price ?></span>
                  </div><!-- end price -->
                </div><!-- price-timeline -->

                <p><a class="btn btn-lg btn-danger" href="<?php echo $course_url ?>" role="button"><?php echo $button_text ?> &raquo;</a></p>
          </div><!-- col -->
          
        </div><!-- row -->
      </div><!-- container -->
    </article>
  </section>


<!-- OPT IN SECTION
================================================== -->
  <section id="optin">
  <div class="container">
    <div class="row">
    
      <div class="col-sm-8">
        <p class="lead"><?php echo $opt_in_text ?> </p>
      </div><!-- end col -->
      
      <div class="col-sm-4">
        <button class="btn btn-success btn-lg btn-block" data-toggle="modal" data-target="#myModal">
          <?php echo $opt_in_btn_text ?>
        </button>
      </div><!-- end col -->
      
    </div><!-- row -->
  </div><!-- container -->
  </section><!-- optin -->
  
  
  <!-- BOOST YOUR INCOME
================================================== -->
<section id="boost-income">
  <div class="container">
    
    <div class="section-header">
      <!-- If user uploads image -->
      <?php if( !empty($income_img) ): ?>

        <img src="<?php echo $income_img['url'] ?>" alt="<?php echo $income_img['alt'] ?>">

      <?php endif ?>


      <h2><?php echo $income_title ?></h2>
    </div><!-- section-header -->
    
    <p class="lead"><?php echo $income_description ?></p>
    <div class="row">
      <div class="col-sm-6">
        <h3><?php echo $income_reason_1_title ?></h3>
        <p><?php echo $income_reason_1_description ?></p>
      </div><!-- end col -->
      
      <div class="col-sm-6">
        <h3><?php echo $income_reason_2_title   ?></h3>
        <p><?php echo $income_reason_2_description ?></p>
      </div><!-- end col -->
    </div><!-- row -->
  
  </div><!-- container -->
</section><!-- boost-income -->

<!-- WHO BENEFITS
================================================== -->
<section id="who-benefits">
  <div class="container">

    <div class="section-header">
      <!-- If user uploads image -->
      <?php if(!empty($take_course_img)): ?>
        <img src="<?php echo $take_course_img['url'] ?>" alt="<?php echo $take_course_img['alt'] ?>">
      <?php endif ?>

      <h2><?php echo $take_course_title ?></h2>
    </div><!-- section-header -->
    
    <div class="row">
      <div class="col-sm-8 col-sm-offset-2">
        <?php echo $take_course_content ?>
        
      </div><!-- end col -->
    </div><!-- row -->

  </div><!-- container -->
</section><!-- who-benefits -->
  

<!-- COURSE FEATURES
================================================== -->
<section id="course-features">
  <div class="container">
  
    <div class="section-header">
      <img src="<?php bloginfo('stylesheet_directory')?>/assets/img/icon-rocket.png" alt="Rocket">
      <h2>Course Features</h2>
    </div><!-- section-header -->
    
    <div class="row">
      
      <div class="col-sm-2">
        <i class="ci ci-computer"></i>
        <h4>Lifetime access to 80+ lectures</h4>
      </div><!-- end col -->
      
      <div class="col-sm-2">
        <i class="ci ci-watch"></i>
        <h4>10+ hours of HD video content</h4>
      </div><!-- end col -->
      
      <div class="col-sm-2">
        <i class="ci ci-calendar"></i>
        <h4>30-day money back guarantee</h4>
      </div><!-- end col -->
      
      <div class="col-sm-2">
        <i class="ci ci-community"></i>
        <h4>Access to a community of like-minded students</h4>
      </div><!-- end col -->
      
      <div class="col-sm-2">
        <i class="ci ci-instructor"></i>
        <h4>Direct access to the instructor</h4>
      </div><!-- end col -->
      
      <div class="col-sm-2">
        <i class="ci ci-device"></i>
        <h4>Accessible content on your mobile devices</h4>
      </div><!-- end col -->
      
    </div><!-- row -->
  </div><!-- container -->
</section><!-- course-features -->


<!-- PROJECT FEATURES
================================================== -->
<section id="project-features">
  <div class="container">
  
    <h2>Final Project Features</h2>
    <p class="lead">Throughout this entire course, you work towards building an incredibly beautiful website. Want to see the website <strong>you</strong> are going to build? <em>You're looking at it!</em> The website you're using right now is the website you will have built entirely by yourself, by the end of this course.</p>
    
    <div class="row">
      <div class="col-sm-4">
        <img src="<?php bloginfo('stylesheet_directory')?>/assets/img/icon-design.png" alt="Design">
        <h3>Sexy &amp; Modern Design</h3>
        <p>You get to work with a modern, professional quality design &amp; layout.</p>
      </div><!-- col -->
      <div class="col-sm-4">
        <img src="<?php bloginfo('stylesheet_directory')?>/assets/img/icon-code.png" alt="Code">
        <h3>Quality HTML5 &amp; CSS3</h3>
        <p>You'll learn how hand-craft a stunning website with valid, semantic and beautiful HTML5 &amp; CSS3.</p>
      </div><!-- col -->
      <div class="col-sm-4">
        <img src="<?php bloginfo('stylesheet_directory')?>/assets/img/icon-cms.png" alt="CMS">
        <h3>Easy-to-use CMS</h3>
        <p>Allow your clients to easily update their websites by converting your static websites to dynamic websites, using WordPress.</p>
      </div><!-- col -->
      
    </div><!-- row -->
    
  </div><!-- container -->
</section><!-- project-features -->


<!-- VIDEO FEATURETTE
================================================== -->
<section id="featurette">
  <div class="container">
    <div class="row">
      <div class="col-sm-8 col-sm-offset-2">
        <h2>Watch the Course Introduction</h2>
        <iframe width="100%" height="415" src="//www.youtube.com/embed/q-mJJsnOHew" frameborder="0" allowfullscreen></iframe>
      </div><!-- end col -->
    </div><!-- row -->			
  </div><!-- container -->
</section><!-- featurette -->


<!-- INSTRUCTOR
================================================== -->
<section id="instructor">
  <div class="container">
    <div class="row">
      <div class="col-sm-8 col-md-6">
        <div class="row">
          <div class="col-lg-8">
            <h2>Your Instructor <small>Brad Hussey</small></h2>
          </div><!-- end col -->
          <div class="col-lg-4">
            <a href="https://twitter.com/bradhussey" class="badge social twitter" target="_blank"><i class="fa fa-twitter"></i></a>
            <a href="https://facebook.com/bradhussey" class="badge social facebook" target="_blank"><i class="fa fa-facebook"></i></a>
            <a href="https://plus.google.com/+BradHussey" class="badge social gplus" target="_blank"><i class="fa fa-google-plus"></i></a>
          </div><!-- end col -->
        
        </div><!-- row -->
        
        <p class="lead">A highly skilled professional, Brad Hussey is a passionate and experienced web designer, developer, blogger and digital entrepreneur.<p>
        
        <p>Hailing from North Of The Wall (Yellowknife, Canada), Brad made the trek to the Wet Coast (Vancouver, Canada) to educate and equip himself with the necessary skills to become a spearhead in his trade of solving problems on the web, crafting design solutions, and speaking in code.</p>
        
        <p>Brad's determination and love for what he does has landed him in some pretty interesting places with some neat people. He's had the privilege of working with, and providing solutions for, numerous businesses, big &amp; small, across the Americas.</p>
        
        <p>Brad builds custom websites, and provides design solutions for a wide-array of clientele at his company, Brightside Studios. He regularly blogs about passive income, living your life to the fullest, and provides premium quality web design tutorials and courses for tens of thousands of amazing people desiring to master their craft.</p>
        
        <hr>
        
        <h3>The Numbers <small>They Don't Lie</small></h3>
        <div class="row">
          <div class="col-xs-4">
            <div class="num">
              <div class="num-content">
                41,000+ <span>students</span>
              </div><!-- num-content -->
            </div><!-- num -->
          </div><!-- end col -->
          
          <div class="col-xs-4">
            <div class="num">
              <div class="num-content">
                568 <span>reviews</span>
              </div><!-- num-content -->
            </div><!-- num -->
          </div><!-- end col -->
          
          <div class="col-xs-4">
            <div class="num">
              <div class="num-content">
                8 <span>courses</span>
              </div><!-- num-content -->
            </div><!-- num -->
          </div><!-- end col -->
        </div><!-- row -->
        
      </div><!-- end col -->
    </div><!-- row -->
  </div><!-- container -->
</section><!-- instructor -->


<!-- TESTIMONIALS
================================================== -->
<section id="kudos">
  <div class="container">
    <div class="row">
    
      <div class="col-sm-8 col-sm-offset-2">
        <h2>What People Are Saying About Brad</h2>
        
        <!-- TESTIMONIAL -->
        <div class="row testimonial">
          <div class="col-sm-4">
            <img src="<?php bloginfo('stylesheet_directory')?>/assets/img/brennan.jpg" alt="Brennan">
          </div><!-- end col -->
          <div class="col-sm-8">
            <blockquote>
              These videos are well created, concise, fast-paced, easy to follow, and just funny enough to keep you chuckling as you're slamming out lines of code. I've taken 3 courses from this instructor. Whenever I have questions he is right there with a simple solution or a helpful suggestion to keep me going forward with the course work.
              <cite>&mdash; Brennan, graduate of all of Brad's courses</cite>
            </blockquote>
          </div><!-- end col -->
        </div><!-- row -->
        
        <!-- TESTIMONIAL -->
        <div class="row testimonial">
          <div class="col-sm-4">
            <img src="<?php bloginfo('stylesheet_directory')?>/assets/img/ben.png" alt="Illustration of a man with a moustache">
          </div><!-- end col -->
          <div class="col-sm-8">
            <blockquote>
              I found Brad to be a great teacher, and a very inspiring person. It's clear he is very passionate about helping designers learn to code, and I look forward to more courses from him!
              <cite>&mdash; Ben, graduate of Build a Website from Scratch with HTML &amp; CSS</cite>
            </blockquote>
          </div><!-- end col -->
        </div><!-- row -->
        
        <!-- TESTIMONIAL -->
        <div class="row testimonial">
          <div class="col-sm-4">
            <img src="<?php bloginfo('stylesheet_directory')?>/assets/img/aj.png" alt="Illustration of a man with a beard">
          </div><!-- end col -->
          <div class="col-sm-8">
            <blockquote>
              Brad is amazing and I honestly think he's the best tutor of all the courses I have taken on Udemy. Will definitely be following him in the future. Thanks Brad!
              <cite>&mdash; AJ, graduate of Code a Responsive Website with Bootstrap 3</cite>
            </blockquote>
          </div><!-- end col -->
        </div><!-- row -->

        <!-- TESTIMONIAL -->
        <div class="row testimonial">
          <div class="col-sm-4">
            <img src="<?php bloginfo('stylesheet_directory')?>/assets/img/ernest.png" alt="Illustration of a man with a goatee">
          </div><!-- end col -->
          <div class="col-sm-8">
            <blockquote>
              Brad is an excellent instructor. His content is super high quality, and you can see the love and care put into every section. The tutorials are the perfect length, and you feel like your doing something right out the gate! I really can't believe this is free. I highly recommend taking advantage of this course.
              <cite>&mdash; Ernest, graduate of Code Dynamic Websites with PHP</cite>
            </blockquote>
          </div><!-- end col -->
        </div><!-- row -->
        
      </div><!-- end col -->
      
    </div><!-- row -->
  </div><!-- container -->
</section><!-- kudos -->


<?php
get_footer();
?>