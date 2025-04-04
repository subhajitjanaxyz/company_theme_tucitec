<?php get_header();?>


<div class="container-fluid mxtesf_containfonthead" style=" background-image: url(<?php echo get_theme_mod('backgd435'); ?>);">
    <!-- navmenu -->

    <?php get_template_part('template_part/menubar'); ?>
   
     <!-- heading area with 2 btn -->
      <div class="container">
        <div class="heading_1_5454 text-center text-white">
        <?php echo get_theme_mod('dffdsfdfdf454dxffd'); ?>  
        </div>
        <div class="heading_1_54gf54 text-center text-white">
        <?php echo get_theme_mod('dffdsffds33dfdfdf454dxffd'); ?>  
      </div>
        <div class="headidfdng_1_5454 justify-content-center align-items-center
 d-flex flex-column flex-lg-row">
            <a class="headidfdng_1_5454_icon" href="<?php  echo get_permalink("/portfolio");?>" > <i class="fa-solid fa-pen-to-square mx-2"></i>
            <?php echo get_theme_mod('dffdsfdsdfds33dfdfdf454dxffd'); ?>
          </a>
            <a  class="headidfdng_1fg_5454_icon" href="<?php  echo get_permalink(258);?>">
            <?php echo get_theme_mod('dffdsfdsdfdfds33dfdfdf454dxffd'); ?>  
          </a>
        </div>
      </div>

</div>

<!-- our caste studies -->
 <!-- <div class="container-fluid headidfdng_1fgfdf_5454_icon border-bottom  border-dark">
  <div class="container">
    <h1 class="text-center fw-bolder">
    <?php echo get_theme_mod('dffdsdfdfdf454dxf'); ?>  
  </h1>
    <p class="text-center">
    <?php echo get_theme_mod('dffdsdfddfdfdf454dxf'); ?>  
    </p>
  </div>
 </div> -->
<!--Our Blog -->
<!-- <div class="container-fluid headidfdng_1fgfdf_5454_icon">
  <div class="container">
    <h1 class="text-center fw-bolder">
    <?php echo get_theme_mod('dffdsdfdfddfdf454dxf'); ?>  
    </h1>
    <p class="text-center">
    <?php echo get_theme_mod('dffdsfdfdfddfdfdf454dxf'); ?>  
    </p>
  </div>
 </div>
 -->









 
<!-- card area  -->
 <!-- <div666666 class="container-fluid">
  <div class="container ctggr-dfeg7fds">

  <?php
$query = new WP_Query(array(
    'post_type'      => 'post',
    'posts_per_page' => 6, 
));

if ($query->have_posts()) :
    while ($query->have_posts()) : $query->the_post(); ?>
    
  <div class="items-card545">
      <div class="card464d5df">
      <a href="<?php the_permalink();?>" class="text-decoration-none text-black">

        <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'medium'); ?>" 
             alt="<?php the_title_attribute(); ?>" 

             
             class="heightof-img34df4">
             </a>
        <div class="class-boxyfdf0tefs">
          <p class="lasttilel-e453">Updated on <?php echo get_the_date('F j, Y'); ?> / <?php the_author(); ?></p>
        <a href="<?php the_permalink();?>" class="text-decoration-none text-black"> 
          
        
        <p class="lasttile-et54546w4"><?php the_title(); ?></p>
      
      </a>
        </div>
      </div>
    </div>

<?php endwhile;
    wp_reset_postdata();
else :
    echo '<p>No posts found.</p>';
endif;
?>


    
    
 


  </div>
 </div666666> -->
<!-- // read more  -->
<!-- <div class="container-fluid mb-5">
  <div class="container text-center">
    <a href="<?php  echo get_permalink(258);?>" class="BTN-FORVIEWALL">
      VIEW ALL BLOG 
    </a>
  </div>
</div>


 -->






 <!-- carosul  -->
<div class="container-fluid py-5 text-uppercase">
  <div class="container text-center">
  <h1 style="color:#1F3D83;" >PORTFOLIO</h1>

   
  </div>
</div>

 <div id="carouselExampleIndicators" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>




  <div class="carousel-inner">
                                  <div class="carousel-item active">
                                  <div  class=" w-100 bg-danger caroinnterboxafds" 
                                  
                                  style="
                                 background-image: url('https://t3.ftcdn.net/jpg/02/73/11/96/360_F_273119624_DpYqxwJia1SuX06o3oo2ggIu3oCvKC7O.jpg');
                                  "
                                  >
                                    <h1 class="text-white"> 1Lorem ipsum dolor sit amet consectetur adipisicing elit.</h1>
                                    <p class="text-white">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Enim omnis sunt repudiandae facilis ipsum totam ducimus vero.</p>



                                  </div>
                                  </div>
                                  <div class="carousel-item">
                                  <div  class=" w-100 bg-danger text-center caroinnterboxafds" style="background-image:url('https://png.pngtree.com/thumb_back/fh260/background/20240224/pngtree-a-dark-office-room-in-home-image_15630921.jpg')"><h1 class="text-white"> Lorem ipsum dolor sit amet consectetur adipisicing elit.</h1>
                                    <p class="text-white">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Enim omnis sunt repudiandae facilis ipsum totam ducimus vero.</p>
</div>
                                  </div>
                                  <div class="carousel-item">
                                    <div  class=" w-100 bg-danger caroinnterboxafds" style="background-image:url('https://static.vecteezy.com/system/resources/thumbnails/032/936/610/small/dark-modern-office-illuminated-by-electric-lamp-free-photo.jpg')"><h2 class="text-white"> Lorem ipsum dolor sit amet consectetur adipisicing elit.</h2>
                                    <p class="text-white">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Enim omnis sunt repudiandae facilis ipsum totam ducimus vero.</p>
</div>
                                  </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>















 <!-- carosul  -->

 <div class="contianer-fluid py-5">
  <div class="container">
    <h1 class="text-center" style="color:#1F3D83;">OUR SERVICE</h1>
    <h2 class="text-center">What We Offer</h2>
    <p class="text-center">Comprehensive solutions designed for your success</p>
    <div class="row">
      <div class="col-md-4 col-lg-3 d-flex justify-content-center align-items-center py-2">



      <div class="card" style="width: 18rem;">
  <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSoQ4JQCNMfAk3-rvSOrdPglv2A2SORHC96Pw&s" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title text-center">WEB APP</h5>
    <p class="card-text">Lorem ipsum dolor sit amet,  error amet numquam iure provident voluptate esse quasi, veritatis </p>
  
  </div>
</div>


        
      </div>
      <div class="col-md-4 col-lg-3 d-flex justify-content-center align-items-center py-2">




      <div class="card" style="width: 18rem;">
  <img src="https://bsmedia.business-standard.com/_media/bs/img/article/2024-01/29/full/1706528122-0941.jpg?im=FitAndFill=(826,465)" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title text-center">Digital Marketing
    </h5>
    <p class="card-text">Lorem ipsum dolor sit amet,  error amet numquam iure provident voluptate esse quasi, veritatis</p>
  
  </div>
</div>






      </div>
      <div----- class="col-md-4 col-lg-3 d-flex justify-content-center align-items-center py-2">







      <div class="card" style="width: 18rem;">
  <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSoQ4JQCNMfAk3-rvSOrdPglv2A2SORHC96Pw&s" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title text-center">IT Consulting
    </h5>
    <p class="card-text">Lorem ipsum dolor sit amet,  error amet numquam iure provident voluptate esse quasi, veritatis.</p>
  
  </div>
</div>








      </div----->





      <div----- class="col-md-4 col-lg-3 d-flex justify-content-center align-items-center py-2">







<div class="card" style="width: 18rem;">
<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSoQ4JQCNMfAk3-rvSOrdPglv2A2SORHC96Pw&s" class="card-img-top" alt="...">
<div class="card-body">
<h5 class="card-title text-center">ERP APP</h5>
<p class="card-text">Lorem ipsum dolor sit amet,  error amet numquam iure provident voluptate esse quasi, veritatis</p>

</div>
</div>








</div----->






    </div>
    
  </div>
 </div>
<!-- our portfolio  -->







<div class="container-fluid mt-5">
  <div class="row d-flex justify-content-center">
    <div class="col-md-10 col-xl-8 text-center">
      <h3 class="mb-4" style="color:#1F3D83;">CLIENT REVIEW</h3>
      <p class="mb-4 pb-2 mb-md-5 pb-md-0">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit, error amet
        numquam iure provident voluptate esse quasi, veritatis totam voluptas nostrum
        quisquam eum porro a pariatur veniam.
      </p>
    </div>
  </div>

  <div class="row text-center">
    <div class="col-md-4 mb-5 mb-md-0">
      <div class="d-flex justify-content-center mb-4">
        <img src="https://yt3.googleusercontent.com/qgSeLfJk2OKnQicVDvc_VSlSISmAmWVHYtmSTckcC_iUn7hVfpURctMAqoSz0u4xfER6rlKDBA=s900-c-k-c0x00ffffff-no-rj"
          class="rounded-circle shadow-1-strong" width="150" height="150" />
      </div>
      <h5 class="mb-3">Maria Smantha</h5>
      <h6 class="text-primary mb-3">Web Development</h6>
      <p class="px-xl-3">
        <i class="fas fa-quote-left pe-2"></i>Lorem ipsum dolor sit amet, consectetur
        adipisicing elit. Quod eos id officiis hic tenetur quae quaerat ad velit ab hic
        tenetur.
      </p>
      <ul class="list-unstyled d-flex justify-content-center mb-0">
        <li>
          <i class="fas fa-star fa-sm text-warning"></i>
        </li>
        <li>
          <i class="fas fa-star fa-sm text-warning"></i>
        </li>
        <li>
          <i class="fas fa-star fa-sm text-warning"></i>
        </li>
        <li>
          <i class="fas fa-star fa-sm text-warning"></i>
        </li>
        <li>
          <i class="fas fa-star-half-alt fa-sm text-warning"></i>
        </li>
      </ul>
    </div>
    <div class="col-md-4 mb-5 mb-md-0">
      <div class="d-flex justify-content-center mb-4">
        <img src="https://yt3.googleusercontent.com/CvgBA1ypUZNxOjiCX0l1V2FbAm7oSDPZE4YkMvkpT_4iLXQ3IXWVtBgWnznHxgtcUoj50TXqZA=s900-c-k-c0x00ffffff-no-rj"
          class="rounded-circle shadow-1-strong" width="150" height="150" />
      </div>
      <h5 class="mb-3">Lisa Cudrow</h5>
      <h6 class="text-primary mb-3">Digital Marketing</h6>
      <p class="px-xl-3">
        <i class="fas fa-quote-left pe-2"></i>Ut enim ad minima veniam, quis nostrum
        exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid commodi.
      </p>
      <ul class="list-unstyled d-flex justify-content-center mb-0">
        <li>
          <i class="fas fa-star fa-sm text-warning"></i>
        </li>
        <li>
          <i class="fas fa-star fa-sm text-warning"></i>
        </li>
        <li>
          <i class="fas fa-star fa-sm text-warning"></i>
        </li>
        <li>
          <i class="fas fa-star fa-sm text-warning"></i>
        </li>
        <li>
          <i class="fas fa-star fa-sm text-warning"></i>
        </li>
      </ul>
    </div>
    <div class="col-md-4 mb-0">
      <div class="d-flex justify-content-center mb-4">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSPewQ48I9AetJLZToxDPdKNpwkE-hhLpokMA&s"
          class="rounded-circle shadow-1-strong" width="150" height="150" />
      </div>
      <h5 class="mb-3">John Smith</h5>
      <h6 class="text-primary mb-3">IOS Development</h6>
      <p class="px-xl-3">
        <i class="fas fa-quote-left pe-2"></i>At vero eos et accusamus et iusto odio
        dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti.
      </p>
      <ul class="list-unstyled d-flex justify-content-center mb-0">
        <li>
          <i class="fas fa-star fa-sm text-warning"></i>
        </li>
        <li>
          <i class="fas fa-star fa-sm text-warning"></i>
        </li>
        <li>
          <i class="fas fa-star fa-sm text-warning"></i>
        </li>
        <li>
          <i class="far fa-star fa-sm text-warning"></i>
        </li>
        <li>
          <i class="far fa-star fa-sm text-warning"></i>
        </li>
      </ul>
    </div>
  </div>
</div>
<!-- 2 -->
 



<div class="container-fluid">
  <div class="row d-flex justify-content-center">
    <div class="col-md-10 col-xl-8 text-center">
      
    </div>
  </div>

  <div class="row text-center">
    <div class="col-md-4 mb-5 mb-md-0">
      <div class="d-flex justify-content-center mb-4">
        <img src="https://i.guim.co.uk/img/media/fd844c04b9bbd2a2c11efb3fc4b7091dadc646b2/0_291_5471_3283/master/5471.jpg?width=1200&height=1200&quality=85&auto=format&fit=crop&s=7d388b605474d8a6a103001cfc75986c"
          class="rounded-circle shadow-1-strong" width="150" height="150" />
      </div>
      <h5 class="mb-3">Maria Smantha</h5>
      <h6 class="text-primary mb-3">Web Development</h6>
      <p class="px-xl-3">
        <i class="fas fa-quote-left pe-2"></i>Lorem ipsum dolor sit amet, consectetur
        adipisicing elit. Quod eos id officiis hic tenetur quae quaerat ad velit ab hic
        tenetur.
      </p>
      <ul class="list-unstyled d-flex justify-content-center mb-0">
        <li>
          <i class="fas fa-star fa-sm text-warning"></i>
        </li>
        <li>
          <i class="fas fa-star fa-sm text-warning"></i>
        </li>
        <li>
          <i class="fas fa-star fa-sm text-warning"></i>
        </li>
        <li>
          <i class="fas fa-star fa-sm text-warning"></i>
        </li>
        <li>
          <i class="fas fa-star-half-alt fa-sm text-warning"></i>
        </li>
      </ul>
    </div>
    <div class="col-md-4 mb-5 mb-md-0">
      <div class="d-flex justify-content-center mb-4">
        <img src="https://akm-img-a-in.tosshub.com/indiatoday/images/story/202501/tcs-q3-results-nirmal-bang-recommended-investors-to-monitor-bfsi--hi-tech-vertical-commentary--sup-091606813-16x9.png?VersionId=xmsWVvDMUjbx.GOTsT82pg9fesHKtH.G&size=690:388"
          class="rounded-circle shadow-1-strong" width="150" height="150" />
      </div>
      <h5 class="mb-3">Lisa Cudrow</h5>
      <h6 class="text-primary mb-3">Digital Marketing</h6>
      <p class="px-xl-3">
        <i class="fas fa-quote-left pe-2"></i>Ut enim ad minima veniam, quis nostrum
        exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid commodi.
      </p>
      <ul class="list-unstyled d-flex justify-content-center mb-0">
        <li>
          <i class="fas fa-star fa-sm text-warning"></i>
        </li>
        <li>
          <i class="fas fa-star fa-sm text-warning"></i>
        </li>
        <li>
          <i class="fas fa-star fa-sm text-warning"></i>
        </li>
        <li>
          <i class="fas fa-star fa-sm text-warning"></i>
        </li>
        <li>
          <i class="fas fa-star fa-sm text-warning"></i>
        </li>
      </ul>
    </div>
    <div class="col-md-4 mb-0">
      <div class="d-flex justify-content-center mb-4">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSPewQ48I9AetJLZToxDPdKNpwkE-hhLpokMA&s"
          class="rounded-circle shadow-1-strong" width="150" height="150" />
      </div>
      <h5 class="mb-3">John Smith</h5>
      <h6 class="text-primary mb-3">IOS Development</h6>
      <p class="px-xl-3">
        <i class="fas fa-quote-left pe-2"></i>At vero eos et accusamus et iusto odio
        dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti.
      </p>
      <ul class="list-unstyled d-flex justify-content-center mb-0">
        <li>
          <i class="fas fa-star fa-sm text-warning"></i>
        </li>
        <li>
          <i class="fas fa-star fa-sm text-warning"></i>
        </li>
        <li>
          <i class="fas fa-star fa-sm text-warning"></i>
        </li>
        <li>
          <i class="far fa-star fa-sm text-warning"></i>
        </li>
        <li>
          <i class="far fa-star fa-sm text-warning"></i>
        </li>
      </ul>
    </div>
  </div>
</div>

<!-- about us -->
 <div class="container-fluid  py-5">
  <h1 class="text-center" style="color:#1F3D83;">Who We Are</h1>
  <h2 class="text-center">A team of passionate professionals committed to delivering excellence.</h2>
  <div class="container">
<div class="row">
<div class="col-lg-6 d-flex justify-content-center align-items-center py-2">
  <img src="<?php echo get_theme_mod('profilechane'); ?>" alt="" class="rounded-circle m-4" width="150px" height="150px">
  <div class="">
    <h3><?php echo get_theme_mod('dffdsddfdffdfddddf454dxf'); ?></h3>
    <h3 style="color:#1F3D83;"><?php echo get_theme_mod('dffdsdDFFDdfdffdfddddf454dxf'); ?></h3>
    <p>Registered Trademark Agent​​
As a registered trademark agent, she advises clients on procedures and strategy of IP prosecution in Malaysia and overseas. She actively shares her IP knowledge through publishing journals and organizing seminars and webinars on patents, trademarks, copyrights, and other areas of IP.</p>
  </div>
</div>
<div class="col-lg-6 d-flex justify-content-center align-items-center py-2">
  <img src="https://t4.ftcdn.net/jpg/03/64/21/11/360_F_364211147_1qgLVxv1Tcq0Ohz3FawUfrtONzz8nq3e.jpg" alt="" class="rounded-circle m-4" width="150px" height="150px">
  <div class="">
    <h3>Sherleen Wan</h3>
    <h3 style="color:#1F3D83;">CO-Founder</h3>
    <p>Registered Trademark Agent​​
As a registered trademark agent, she advises clients on procedures and strategy of IP prosecution in Malaysia and overseas. She actively shares her IP knowledge through publishing journals and organizing seminars and webinars on patents, trademarks, copyrights, and other areas of IP.</p>
  </div>
</div>
<div class="col-lg-6 d-flex justify-content-center align-items-center py-2">
  <img src="https://img.freepik.com/premium-vector/avatar-profile-icon-flat-style-female-user-profile-vector-illustration-isolated-background-women-profile-sign-business-concept_157943-38866.jpg" alt="" class="rounded-circle m-4" width="150px" height="150px">
  <div class="">
    <h3>Sherleen Wan</h3>
    <h3 style="color:#1F3D83;">CEO</h3>
    <p>Registered Trademark Agent​​
As a registered trademark agent, she advises clients on procedures and strategy of IP prosecution in Malaysia and overseas. She actively shares her IP knowledge through publishing journals and organizing seminars and webinars on patents, trademarks, copyrights, and other areas of IP.</p>
  </div>
</div>
<div class="col-lg-6 d-flex justify-content-center align-items-center py-2">
  <img src="https://img.freepik.com/premium-vector/avatar-profile-icon-flat-style-female-user-profile-vector-illustration-isolated-background-women-profile-sign-business-concept_157943-38866.jpg" alt="" class="rounded-circle m-4"  width="150px" height="150px">
  <div class="">
    <h3>Sherleen Wan</h3>
    <h3 style="color:#1F3D83;">PROJECT MANAGER</h3>
    <p>Registered Trademark Agent​​
As a registered trademark agent, she advises clients on procedures and strategy of IP prosecution in Malaysia and overseas. She actively shares her IP knowledge through publishing journals and organizing seminars and webinars on patents, trademarks, copyrights, and other areas of IP.</p>
  </div>
</div>
<div class="col-lg-6 d-flex justify-content-center align-items-center py-2">
  <img src="https://img.freepik.com/premium-vector/avatar-profile-icon-flat-style-female-user-profile-vector-illustration-isolated-background-women-profile-sign-business-concept_157943-38866.jpg" alt="" class="rounded-circle m-4" width="150px" height="150px">
  <div class="">
    <h3>Sherleen Wan</h3>
    <h3 style="color:#1F3D83;">TEAM LEAD</h3>
    <p>Registered Trademark Agent​​
As a registered trademark agent, she advises clients on procedures and strategy of IP prosecution in Malaysia and overseas. She actively shares her IP knowledge through publishing journals and organizing seminars and webinars on patents, trademarks, copyrights, and other areas of IP.</p>
  </div>
</div>
<div class="col-lg-6 d-flex justify-content-center align-items-center py-2">
  <img src="https://img.freepik.com/premium-vector/avatar-profile-icon-flat-style-female-user-profile-vector-illustration-isolated-background-women-profile-sign-business-concept_157943-38866.jpg" alt="" class="rounded-circle m-4"  width="150px" height="150px">
  <div class="">
    <h3>Sherleen Wan</h3>
    <h3 style="color:#1F3D83;">SUPPORT MANAGER</h3>
    <p>Registered Trademark Agent​​
As a registered trademark agent, she advises clients on procedures and strategy of IP prosecution in Malaysia and overseas. She actively shares her IP knowledge through publishing journals and organizing seminars and webinars on patents, trademarks, copyrights, and other areas of IP.</p>
  </div>
</div>
</div>
  </div>
 </div>


<!-- carer option -->
<div class="container-fluid   py-5">
  <div class="container text-uppercase text-center">
   <h1 style="color:#1F3D83;" > Carrer opportunity</h1>
   <h2 style="background-color:#1F3D83; " class="d-inline-block text-white px-5 my-3 rounded-5">join us</h2>
   <P class="">As a global company with unparalleled scale, a track record of pioneering innovation, and a huge and influential client base, we offer associates a chance to drive change and improve the lives of millions of people around the world</P>
    <h2 style="color:#1F3D83;" class="py-3">We're Looking for</h2>
  </div>

  <div--- class="row">
  <!-- carrer card col -->
  <div class="col col-md-6 col-lg-3 d-flex justify-content-center align-items-center py-3">
    <div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title text-center fw-bolder" style="color:#1F3D83;">IT Executive INTERN</h5>
    <p class="card-text text-center">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
<div class="text-center">
<a href="#" class=" btn  fw-bolder newcolorx">JOIN US <i class="fa-solid fa-arrow-right-long"></i></a>

</div>  </div>
</div>
    </div>
  <!-- carrer card col -->

    <!-- carrer card col -->
    <div class="col col-md-6 col-lg-3 d-flex justify-content-center align-items-center py-3">
    <div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title text-center fw-bolder" style="color:#1F3D83;">IT  INTERN</h5>
    <p class="card-text text-center">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
<div class="text-center">
<a href="#" class=" btn newcolorx fw-bolder">JOIN US <i class="fa-solid fa-arrow-right-long"></i></a>

</div>  </div>
</div>
    </div>
  <!-- carrer card col -->

    <!-- carrer card col -->
    <div class="col col-md-6 col-lg-3 d-flex justify-content-center align-items-center py-3">
    <div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title text-center  fw-bolder" style="color:#1F3D83;">IT Executive INTERN</h5>
    <p class="card-text text-center">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
<div class="text-center">
<a href="#" class=" btn newcolorx fw-bolder">JOIN US <i class="fa-solid fa-arrow-right-long"></i></a>

</div>  </div>
</div>
    </div>
  <!-- carrer card col -->


    <!-- carrer card col -->
    <div class="col col-md-6 col-lg-3 d-flex justify-content-center align-items-center py-3">
    <div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title text-center fw-bolder" style="color:#1F3D83;">IT Executive INTERN</h5>
    <p class="card-text text-center">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
<div class="text-center">
<a href="#" class=" btn newcolorx fw-bolder">JOIN US <i class="fa-solid fa-arrow-right-long"></i></a>

</div>  </div>
</div>
    </div>
  <!-- carrer card col -->

      <!-- carrer card col -->
      <div class="col col-md-6 col-lg-3 d-flex justify-content-center align-items-center py-3">
    <div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title text-center fw-bolder" style="color:#1F3D83;">IT Executive INTERN</h5>
    <p class="card-text text-center">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
<div class="text-center">
<a href="#" class=" btn newcolorx fw-bolder">JOIN US <i class="fa-solid fa-arrow-right-long"></i></a>

</div>  </div>
</div>
    </div>
  <!-- carrer card col -->


      <!-- carrer card col -->
      <div class="col col-md-6 col-lg-3 d-flex justify-content-center align-items-center py-3">
    <div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title text-center fw-bolder" style="color:#1F3D83;">IT Executive INTERN</h5>
    <p class="card-text text-center">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
<div class="text-center">
<a href="#" class=" btn newcolorx fw-bolder">JOIN US <i class="fa-solid fa-arrow-right-long"></i></a>

</div>  </div>
</div>
    </div>
  <!-- carrer card col -->


      <!-- carrer card col -->
      <div class="col col-md-6 col-lg-3 d-flex justify-content-center align-items-center py-3">
    <div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title text-center fw-bolder" style="color:#1F3D83;">IT Executive INTERN</h5>
    <p class="card-text text-center">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
<div class="text-center">
<a href="#" class=" btn newcolorx fw-bolder">JOIN US <i class="fa-solid fa-arrow-right-long"></i></a>

</div>  </div>
</div>
    </div>
  <!-- carrer card col -->


      <!-- carrer card col -->
      <div class="col col-md-6 col-lg-3 d-flex justify-content-center align-items-center py-3">
    <div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title text-center fw-bolder" style="color:#1F3D83;">IT Executive INTERN</h5>
    <p class="card-text text-center">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
<div class="text-center">
<a href="#" class=" btn newcolorx fw-bolder">JOIN US <i class="fa-solid fa-arrow-right-long"></i></a>

</div>  </div>
</div>
    </div>
  <!-- carrer card col -->

  </div--->

 </div>





<!-- contact us -->
<form class=" px-5 py-3" style="background-color:#1F3D83;">
  <h1 class="text-center text-white mt-3">CONTACT US</h1>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label text-white">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label text-white">Name</label>
    <input type="text" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword12" class="form-label text-white">Massage</label>
    <!-- <input type="textarea"  id="exampleInputPassword12"> -->
    <textarea name="" class="form-control" id="exampleInputPassword12"></textarea>
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label text-white" for="exampleCheck1">Check me out</label>
  </div>
 <div class="text-center">
 <button type="submit" class="btn btn-primary text-black bg-white ">SEND MASSAGE</button>
 </div>
</form>
<?php  comments_template()?>
<?the_content();?>














<?php get_footer();?>





    
 