
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
  <!-- font awesome 5 free -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

  <!-- Poppins font from Google -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="assets/media.css">

  <link rel="stylesheet" href="<?= base_url('lending_assets/') ?>assets/app.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <title>BJMS</title>
  <!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '215446792369040');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=215446792369040&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->
</head>

<style>
  .img-hover-zoom {
    width: 100%; 
    overflow: hidden;
  }
  .img-hover-zoom img {
    transition: transform .5s ease;
      object-fit: cover;
      width: 100%;
    
  }
  .img-hover-zoom:hover img {
    transform: scale(1.5);
  }
</style>

<body style="">

  <header class="hero container-fluid border-bottom">
    <nav class="hero-nav container px-4 px-lg-0 mx-auto">
      <ul class="nav w-100 list-unstyled align-items-center p-0">
        <li class="hero-nav__item">
          <img class="hero-nav__logo" src="<?= base_url('lending_assets/') ?>assets/logo/logo2.png">
        </li>
        <li id="hero-menu" class="flex-grow-1 hero__nav-list hero__nav-list--mobile-menu ft-menu">
          <ul class="hero__menu-content nav flex-column flex-lg-row ft-menu__slider animated list-unstyled p-2 p-lg-0">
            <li class="flex-grow-1">
              <ul class="nav nav--lg-side list-unstyled align-items-center p-0">
                <li class="hero-nav__item">
                  <a href="#contact-us" class="hero-nav__link">Contact Us</a>
                </li>
                <li class="hero-nav__item">
                  <a href="#faq" class="hero-nav__link">Pricing</a>
                </li>
                <!-- <li class="hero-nav__item">
                  <a href="#pricing" class="hero-nav__link">Pricing</a>
                </li> -->
          <!--  <li class="hero-nav__item">
                  <a href="#testimonials" class="hero-nav__link">Testimonials</a>
                </li> -->
               
                <li class="hero-nav__item">
                  <a href="#features" class="hero-nav__link">Product</a>
                </li>
                 <li class="hero-nav__item">
                  <a href="#product" class="hero-nav__link">Service</a>
                </li>
                <li class="hero-nav__item">
                  <a href="#home" class="hero-nav__link">Home</a>
                </li>
                
              </ul>
            </li>
          </ul>
          <button onclick="document.querySelector('#hero-menu').classList.toggle('ft-menu--js-show')"
            class="ft-menu__close-btn animated">
            <svg class="bi bi-x" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor"
              xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M11.854 4.146a.5.5 0 010 .708l-7 7a.5.5 0 01-.708-.708l7-7a.5.5 0 01.708 0z"
                clip-rule="evenodd" />
              <path fill-rule="evenodd" d="M4.146 4.146a.5.5 0 000 .708l7 7a.5.5 0 00.708-.708l-7-7a.5.5 0 00-.708 0z"
                clip-rule="evenodd" />
            </svg>
          </button>
        </li>
        <li class="d-lg-none flex-grow-1 d-flex flex-row-reverse hero-nav__item">
          <button onclick="document.querySelector('#hero-menu').classList.toggle('ft-menu--js-show')"
            class="text-center px-2">
            <i class="fas fa-bars"></i>
          </button>
        </li>
      </ul>
    </nav>
    <div class="hero__content container mx-auto" id="home">
      <div class="row px-0 mx-0 align-items-center">
        <div class="col-lg-6 px-0" style="">
          <div class="" style="background-color: red; width: 115px;">
          <!-- <h6 class="ml-2" style="color: white;"><strong>BEST PRICE : </strong></h6> -->
          </div>
          
            <?= $utama['title'] ?>
        
          <p class="hero__paragraph mb-5">
           <!--  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
            industry's
            standard -->
          </p>
          <div class="hero__btns-container">
            <a href="<?= $utama['link_button'] ?>" target="_blank" class="hero__btn btn btn-primary mb-2 mb-lg-0" href="#">
                <?= $utama['title_button'] ?>
            </a>
           <!--  <a class="hero__btn btn btn-secondary mx-lg-3" href="#">
              Go Premium
            </a> -->
          </div>
        </div>
        <div class="col-lg-5 mt-5 mt-lg-0 mx-0">
          <div class="hero__img-container">
            <img src="<?= base_url('lending_assets/') ?>assets/produk/<?= $utama['images'] ?>" class="hero__img w-100">
          </div>
        </div>
      </div>
    </div>
  </header>

<!-- 
  <div id="pricing" class="block-17 px-4 space-between-blocks">
    <div class="container">
      <div class="block-17__header col-lg-6 col-xl-7 mx-auto text-center px-0">
       
      </div>
      <div class="block-17__card row flex-column-reverse flex-lg-row justify-content-center">
        <div class="testimonial-card-3 text-center col-lg-6 px-0 d-flex align-items-center justify-content-center">
          <div class="px-4 px-lg-5">
            <img class="person__avatar" src="assets/imgs/profile-2.png">
            <p class="testimonial-card-3__paragraph my-4">
              Lorem Ipsum is simply dummy text of the printing
              and typesetting industry. Lorem Ipsum has been the
              industry’s standard dummy text ever since the 1500s,
              when an unknown printer took a galley of type and
              scrambled it to make a type specimen book.
            </p>
            <div class="flex-grow-1 d-flex flex-column mb-3">
              <span class="person__name">Ali Boukeroui</span>
              <span class="person__info my-1">indiehackers.com</span>
              <span class="person__rating">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </span>
            </div>
          </div>
          
        </div>
        <div class="cta-card col-lg-6 px-0">
          <div class="plan-card text-center">
            <h6 class="plan-card__name mb-0">Free Shipping</h6>
            <p class="discount mt-3 mb-0 d-flex align-items-center justify-content-center">
              <span class="discount__old-price mx-2">$300</span>
              <span class="discount__percentage mx-2">50% off</span>
            </p>
            <p class="plan-card__price my-2">$149</p>
            <span class="plan-card__duration">90 Days Money Back Guarenteed</span>
            <ul class="plan-features list-unstyled mt-5 mb-0">
              <li class="plan-features__li">
                <span class="plan-features__li-icon mx-1">
                  <svg class="bi bi-check2-circle" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                      d="M15.354 2.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3-3a.5.5 0 1 1 .708-.708L8 9.293l6.646-6.647a.5.5 0 0 1 .708 0z" />
                    <path fill-rule="evenodd"
                      d="M8 2.5A5.5 5.5 0 1 0 13.5 8a.5.5 0 0 1 1 0 6.5 6.5 0 1 1-3.25-5.63.5.5 0 1 1-.5.865A5.472 5.472 0 0 0 8 2.5z" />
                  </svg>
                </span>
                <span class="mx-3">The Watch</span>
              </li>
              <li class="plan-features__li">
                <span class="plan-features__li-icon mx-1">
                  <svg class="bi bi-check2-circle" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                      d="M15.354 2.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3-3a.5.5 0 1 1 .708-.708L8 9.293l6.646-6.647a.5.5 0 0 1 .708 0z" />
                    <path fill-rule="evenodd"
                      d="M8 2.5A5.5 5.5 0 1 0 13.5 8a.5.5 0 0 1 1 0 6.5 6.5 0 1 1-3.25-5.63.5.5 0 1 1-.5.865A5.472 5.472 0 0 0 8 2.5z" />
                  </svg>
                </span>
                <span class="mx-3">+Bonus: Accessories</span>
              </li>
              <li class="plan-features__li">
                <span class="plan-features__li-icon mx-1">
                  <svg class="bi bi-check2-circle" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                      d="M15.354 2.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3-3a.5.5 0 1 1 .708-.708L8 9.293l6.646-6.647a.5.5 0 0 1 .708 0z" />
                    <path fill-rule="evenodd"
                      d="M8 2.5A5.5 5.5 0 1 0 13.5 8a.5.5 0 0 1 1 0 6.5 6.5 0 1 1-3.25-5.63.5.5 0 1 1-.5.865A5.472 5.472 0 0 0 8 2.5z" />
                  </svg>
                </span>
                <span class="mx-3">Lifetime Mobile App</span>
              </li>
              <li class="mt-5">
                <a href="#" class="d-block btn btn-primary px-5 mx-auto">
                  Buy Now
                </a>
                <small class="d-block mt-2 text-center">208 Left. Discount ends after 2 weeks</small>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div> -->

  <div class="container mt-4 mb-4">
      <div class="row">

          <?php foreach($section2 as $sc2) { ?>

            <div class="col-sm-6 mt-5 mb-5">
              <div class="card" style="">
                <div class="text ml-3" style="position: absolute;" id="card2">
                    <?= $sc2['title'] ?>
                    <a href="<?= $sc2['link_button'] ?>" target="_blank" class="btn btn-primary" style="background-color: white; color:black;"><?= $sc2['title_button'] ?></a>
                </div>
                <img class="card-img-top" src="<?= base_url('lending_assets/') ?>assets/produk/<?= $sc2['images'] ?>" alt="Card image cap">
                
              </div>
            </div>

          <?php } ?>
  
</div>
  </div>




 <!--  <div class="container mb-3">
    <div class="card shadow">
      <div class="card-body">
       <div class="row">
        <div class="col-sm-4">
        </div>
        <div class="col-sm-4">
        </div>
        <div class="col-sm-4">
        </div>
        <div class="col-sm-4">
        </div>
       </div>
      </div>
    </div>
  </div>
 -->
     

  <!-- ===================================== -->



  <div id="product" class="block-5 space-between-blocks">
    <div class="container">

      <div class="card mb-5">
        <div class="card-body">
         <div class="row">


          <?php foreach($section3 as $sc3) { ?>

            <div class="col-sm-3 mt-3 col-6">
              <div class="row">
                <div class="col-sm-6">
                  <img src="<?= base_url('lending_assets/') ?>assets/produk/<?= $sc3['images'] ?>" class="img-fluid" alt="Responsive image">
                </div>
                <div class="col-sm-6">
                 <h6 class="text-center mt-2"><strong><?= $sc3['title'] ?></strong></h6>
                </div>
              </div>
            </div>

          <?php } ?>



         <!--    <div class="col-sm-3 mt-3 col-6">
              <div class="row">
                <div class="col-sm-6">
                  <img src="<?= base_url('lending_assets/') ?>assets/produk/jam.png" class="img-fluid" alt="Responsive image">
                </div>
                <div class="col-sm-6">
                 <h6 class="text-center mt-2"><strong>AVAILABLE TO YOU 24/7</strong></h6>
                </div>
              </div>
              
            </div>
            <div class="col-sm-3 mt-3 col-6">
              <div class="row">
                <div class="col-sm-6">
                  <img src="<?= base_url('lending_assets/') ?>assets/produk/settings.png" class="img-fluid" alt="Responsive image">
                </div>
                <div class="col-sm-6">
                 <h6 class="text-center mt-2"> <strong>AFTER SALES SERVICES</strong></h6>
                </div>
              </div>
              
            </div><div class="col-sm-3 mt-3 col-6">
              <div class="row">
                <div class="col-sm-6">
                  <img src="<?= base_url('lending_assets/') ?>assets/produk/set.png" class="img-fluid" alt="Responsive image">
                </div>
                <div class="col-sm-6">
                 <h6 class="text-center mt-2"><strong>QUALITY CONTROL</strong></h6>
                </div>
              </div>
              
            </div> -->
         </div>
        </div>
      </div>

      <!-- HEADER -->
     
    </div>
  </div>

  <!-- ===================================== -->

  <div id="features" class="block-11 space-between-blocks">
    <div class="container">
      <!-- HEADER -->
      <div class="block__header col-lg-8 col-xl-7 mx-auto text-center">
       
        <h1 class="block__title mb-3">Best Seller</h1>
        <p class="block__paragraph mb-0">
         <!--  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s
          standard -->
        </p>
      </div>
      <div class="row align-items-center justify-content-center flex-column-reverse flex-lg-row px-2">
        <div class="card-group">

          <?php foreach($produk as $prdk) { ?>

          <div class="card shadow">
            <div class="img-hover-zoom">
               <!-- <div class="sale" style="height: 30px; background-color: red; position: absolute; margin-right: 50px;width: 70px; text-align: center; color:white;"><label><strong>SALE 0%</strong></label></div> -->
              <img class="card-img-top" src="<?= base_url('lending_assets/') ?>assets/produk/<?= $prdk['images'] ?>" alt="Card image cap">
            </div>
            <div class="card-body shadow">
              <h5 class="card-title text-center"><strong><?= $prdk['title_product'] ?></strong></h5>
              <p class="text-center" style="color: blue;"><strike>Rp <?= number_format($prdk['harga_awal'],0,',','.'); ?></strike></p>
              <p class="text-center">Rp <?= number_format($prdk['harga_diskon'],0,',','.'); ?></p>
              <center>
              <a href="<?= $prdk['link_button'] ?>" class="btn btn-primary" target="_blank">ADD TO CART</a>
            </center>
            </div>
          </div>

           <?php } ?>


         
          

      </div>

      <!-- End best seller -->

      <div class="block__header col-lg-8 col-xl-7 mx-auto text-center mt-5">
       
        <h1 class="block__title mb-3">ON SALE</h1>
        <p class="block__paragraph mb-0">
         <!--  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s
          standard -->
        </p>
      </div>

      <div class="row align-items-center justify-content-center flex-column-reverse flex-lg-row px-2">
        <div class="card-group">

          <?php foreach($produk_salle as $prdk2) { ?>

          <div class="card">
             <!-- <div class="sale" style="height: 30px; background-color: red; position: absolute; margin-right: 50px;width: 70px; text-align: center; color:white;"><label><strong>SALE 0%</strong></label></div> -->
            <div class="img-hover-zoom">
             <img class="card-img-top" src="<?= base_url('lending_assets/') ?>assets/produk/<?= $prdk2['images'] ?>" alt="Card image cap">
           </div>
            <div class="card-body">
              <h5 class="card-title text-center"><strong><?= $prdk2['title_product'] ?></strong></h5>
              <p class="text-center" style="color:blue;"><strike>Rp <?= number_format($prdk2['harga_awal'],0,',','.'); ?></strike></p>
              <p class="text-center">Rp <?= number_format($prdk2['harga_diskon'],0,',','.'); ?></p>
              <center>
              <a href="<?= $prdk2['link_button'] ?>" class="btn btn-primary" target="_blank">SHOP NOW</a>
            </center>
            </div>
          </div>

        <?php } ?>


          
      </div>



    </div>
  </div>

</div>

  <!-- card -->



 <!-- end card -->
  <!-- ======================================== -->

 <!--  <div id="testimonials" class="block-20 space-between-blocks">
    <div class="container">
      <div class="block__header col-lg-8 col-xl-7 mx-auto text-center px-0">
        <h1 class="block__title mb-3">What Buyers Says About Us</h1>
        <p class="block__paragraph">
          Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s
          standard
        </p>
      </div>
      <div class="row px-2 pt-4">
        <div class="col-lg-4">
          <div class="testimonial-card-1 mb-5">
            <p class="testimonial-card-1__paragraph mb-3">
              Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
              industry’s standard

              dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a
              type specimen.
            </p>
            <div class="block-20__person">
              <div class="mb-2">
                <img class="block-20__person-avatar" src="assets/imgs/profile-2.png">
              </div>
              <div class="flex-grow-1 d-flex flex-column">
                <span class="block-20__person-rating">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                </span>
                <span class="block-20__person-name my-1">Ali Boukeroui</span>
                <span class="block-20__person-info">indiehackers.com</span>
              </div>
            </div>
            <span class="testimonial-card-1__quote-symbol">
              <i class="fas fa-quote-left"></i>
            </span>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="testimonial-card-1 mb-5">
            <p class="testimonial-card-1__paragraph mb-3">
              Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
              industry’s standard
              dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a
              type specimen.
            </p>
            <div class="block-20__person">
              <div class="mb-2">
                <img class="block-20__person-avatar" src="assets/imgs/profile-2.png">
              </div>
              <div class="flex-grow-1 d-flex flex-column">
                <span class="block-20__person-rating">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                </span>
                <span class="block-20__person-name my-1">Ali Boukeroui</span>
                <span class="block-20__person-info">indiehackers.com</span>
              </div>
            </div>
            <span class="testimonial-card-1__quote-symbol">
              <i class="fas fa-quote-left"></i>
            </span>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="testimonial-card-1 mb-5">
            <p class="testimonial-card-1__paragraph mb-3">
              Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
              industry’s standard
              dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a
              type specimen.
            </p>
            <div class="block-20__person">
              <div class="mb-2">
                <img class="block-20__person-avatar" src="assets/imgs/profile-2.png">
              </div>
              <div class="flex-grow-1 d-flex flex-column">
                <span class="block-20__person-rating">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                </span>
                <span class="block-20__person-name my-1">Ali Boukeroui</span>
                <span class="block-20__person-info">indiehackers.com</span>
              </div>
            </div>
            <span class="testimonial-card-1__quote-symbol">
              <i class="fas fa-quote-left"></i>
            </span>
          </div>
        </div>
      </div>
    </div>
  </div> -->

  <!-- =================================== -->

  <!-- <div id="pricing" class="block-17 px-4 space-between-blocks">
    <div class="container">
      <div class="block-17__header col-lg-8 col-xl-7 mx-auto text-center px-0">
        <h1 class="block__title mb-3">PRICING</h1>
        <p class="block__paragraph">
          Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s
          standard
        </p>
      </div>
      <div class="block-17__card row flex-column-reverse flex-lg-row justify-content-center">
        <div class="testimonial-card-3 text-center col-lg-6 px-0 d-flex align-items-center justify-content-center">
          <div class="px-4 px-lg-5">
            <img class="person__avatar" src="assets/imgs/profile-2.png">
            <p class="testimonial-card-3__paragraph my-4">
              Lorem Ipsum is simply dummy text of the printing
              and typesetting industry. Lorem Ipsum has been the
              industry’s standard dummy text ever since the 1500s,
              when an unknown printer took a galley of type and
              scrambled it to make a type specimen book.
            </p>
            <div class="flex-grow-1 d-flex flex-column mb-3">
              <span class="person__name">Ali Boukeroui</span>
              <span class="person__info my-1">indiehackers.com</span>
              <span class="person__rating">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </span>
            </div>
          </div>
          <span class="testimonial-card-3__quote-symbol">
            <i class="fas fa-quote-left"></i>
          </span>
        </div>
        <div class="cta-card col-lg-5 px-0">
          <div class="plan-card text-center">
            <h6 class="plan-card__name mb-0">Free Shipping</h6>
            <p class="discount mt-3 mb-0 d-flex align-items-center justify-content-center">
              <span class="discount__old-price mx-2">$300</span>
              <span class="discount__percentage mx-2">50% off</span>
            </p>
            <p class="plan-card__price my-2">$149</p>
            <span class="plan-card__duration">90 Days Money Back Guarenteed</span>
            <ul class="plan-features list-unstyled mt-5 mb-0">
              <li class="plan-features__li">
                <span class="plan-features__li-icon mx-1">
                  <svg class="bi bi-check2-circle" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                      d="M15.354 2.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3-3a.5.5 0 1 1 .708-.708L8 9.293l6.646-6.647a.5.5 0 0 1 .708 0z" />
                    <path fill-rule="evenodd"
                      d="M8 2.5A5.5 5.5 0 1 0 13.5 8a.5.5 0 0 1 1 0 6.5 6.5 0 1 1-3.25-5.63.5.5 0 1 1-.5.865A5.472 5.472 0 0 0 8 2.5z" />
                  </svg>
                </span>
                <span class="mx-3">The Watch</span>
              </li>
              <li class="plan-features__li">
                <span class="plan-features__li-icon mx-1">
                  <svg class="bi bi-check2-circle" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                      d="M15.354 2.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3-3a.5.5 0 1 1 .708-.708L8 9.293l6.646-6.647a.5.5 0 0 1 .708 0z" />
                    <path fill-rule="evenodd"
                      d="M8 2.5A5.5 5.5 0 1 0 13.5 8a.5.5 0 0 1 1 0 6.5 6.5 0 1 1-3.25-5.63.5.5 0 1 1-.5.865A5.472 5.472 0 0 0 8 2.5z" />
                  </svg>
                </span>
                <span class="mx-3">+Bonus: Accessories</span>
              </li>
              <li class="plan-features__li">
                <span class="plan-features__li-icon mx-1">
                  <svg class="bi bi-check2-circle" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                      d="M15.354 2.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3-3a.5.5 0 1 1 .708-.708L8 9.293l6.646-6.647a.5.5 0 0 1 .708 0z" />
                    <path fill-rule="evenodd"
                      d="M8 2.5A5.5 5.5 0 1 0 13.5 8a.5.5 0 0 1 1 0 6.5 6.5 0 1 1-3.25-5.63.5.5 0 1 1-.5.865A5.472 5.472 0 0 0 8 2.5z" />
                  </svg>
                </span>
                <span class="mx-3">Lifetime Mobile App</span>
              </li>
              <li class="mt-5">
                <a href="#" class="d-block btn btn-primary px-5 mx-auto">
                  Buy Now
                </a>
                <small class="d-block mt-2 text-center">208 Left. Discount ends after 2 weeks</small>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div> -->

  <!-- =================================== -->

  <div id="faq" class="block-39 space-between-blocks">
    
  </div>

  <!-- =================================== -->

<div class="card bg-dark text-white mb-5" id="hero">
  <img class="card-img" src="<?= base_url('lending_assets/') ?>assets/produk/bener-bawah3.png" alt="Card image">
  <div class="card-img-overlay float-sm-right" id="bg-al" style="background-color: rgba(0, 0, 0, 0.5);">
    <div  id="card3">
     <!--  <div class="bulat rounded-circle" style="height: 200px; width: 200px; background-color: white; border-radius: 100px; position: absolute; margin-left: 500px;"><h1 style="margin-top: 30px; text-align:center; color: red; font-size: 60px;"><strong>Disc<br>10 %</strong></h1></div> -->
    <?= $section4['title'] ?>
    <p style="font-size: 4vw"><strong> Special Offers </strong></h1>
    <p style="font-size: 2vw"></p>
     <a href="<?= $section4['link_button'] ?>" target="_blank" class="btn btn-danger  mb-5" id="btn-gbr"><i class="fas fa-shopping-bag"></i> Shop</a>
    </div>
  </div>
</div>





 




  <!-- =================================== -->

  <!-- <div class="block-32 space-between-blocks">
    <div class="container">
    
      <div class="col-lg-8 col-xl-7 mx-auto text-center mb-5">
        <h1 class="block__title mb-3">Buy Now And Save 50%</h1>
        <p class="block__paragraph mb-0">
          Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s
          standard
        </p>
      </div>
      <div class="text-center">
        <a href="#" class="btn btn-primary">Buy Now</a>
      </div>
    </div>
  </div> -->

  <!-- =================================== -->

  

  <div class="block-44 py-5" id="contact-us">
    <div class="container">
      <div class="row px-0 mx-0 justify-content-center align-items-center">
        <div class="block-44__logo-container">
          <img class="block-44__logo" src="<?= base_url('lending_assets/') ?>assets/produk/logo3.png">
        </div>
            <form class="form-inline" method="post" action="aksi.php">
              <div class="form-group mx-sm-3 mb-2" style="display:none">
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" required="">
              </div>
            <!--   <button type="submit" name="kirim" class="btn btn-primary mb-2">Subcribe</button> -->
            <input type="submit" name="kirim"  value="Subcribe" class="btn btn-primary" style="display:none;">
            </form> 



        <div class="row mt-5">
          <div class="col-sm-6">
            <p><strong>Jakarta Office</strong></p>
            <label>Jl. Daan Mogot KM. 18 Green Sedayu Bizpark DM 5 No. 2 Jakarta Barat 11840 - Indonesia.</label><br>
            <label>Telp. (021) 22522441.</label><br>
            <label>Fax. (021) 22522442.</label>
              
          </div>

          <div class="col-sm-6">
            <p><strong>MEDAN OFFICE & WAREHOUSE</strong></p>
            <label>Jln Sangir Talaud I KIM IV Desa Pematang Johar, Labuhan Deli Sumatera Utara 20373 - Indonesia.</label><br>
            <label>Telp. (061) 7862299.</label><br>
            <label>Fax. (061) 7874188.</label>
              
          </div>

         <!--  <div class="col-sm-4">
             <p><strong>Contact Us</strong></p>
             <small><li class="fas fa-phone"></li> Telephone: (061) 7862299</small><br>
             <small><li class="fab fa-whatsapp"></li> WA: +62821 6030 7043</small><br>
             <small><li class="fas fa-fax"></li> Fax: (061) 7874188</small><br>
             <small><li class="fas fa-envelope"></li> E-mail: seller@bjmsgroup.com</small><br>

          </div> -->
          <!-- <div class="col-sm-4">
             <p><strong>Social Media</strong></p>
              <h6><a href="https://www.facebook.com/bjmsonline/" target="_blank"><li class="fab fa-facebook"></li></a> Facebook</h6>
              <h6><a href="https://www.instagram.com/bjmsonline/" target="_blank"><li class="fab fa-instagram"></li></a> Instagram</h6>
              <h6><a href="https://id.linkedin.com/company/pt-budijaya-makmursentosa" target="_blank"><li class="fab fa-linkedin"></li></a> linkedin</h6>

          </div> -->
        </div>

           


      </div>
    </div>
    <hr class="block-44__divider">
    <div class="container">
       <center>
            <strong>Copyright &copy; 2021 <a href="https://bjmsgroup.com/">bjmsgroup.com</a>.</strong>
            All rights reserved.
           </center>
      
        <div class="row">

          <!-- <div class="col-sm-6">
            <p><strong>Jakarta Office</strong></p>
            <label>Jl. Daan Mogot KM. 18 Green Sedayu Bizpark DM 5 No. 2 Jakarta Barat 11840 - Indonesia.</label><br>
            <label>Telp. (021) 22522441.</label><br>
            <label>Fax. (021) 22522442.</label>
              
          </div>

          <div class="col-sm-6">
            <p><strong>MEDAN OFFICE & WAREHOUSE</strong></p>
            <label>Jln Sangir Talaud I KIM IV Desa Pematang Johar, Labuhan Deli Sumatera Utara 20373 - Indonesia.</label><br>
            <label>Telp. (061) 7862299.</label><br>
            <label>Fax. (061) 7874188.</label>
              
          </div> -->

         <!--  <div class="col-sm-4">
             <p><strong>Contact Us</strong></p>
             <small><li class="fas fa-phone"></li> Telephone: (061) 7862299</small><br>
             <small><li class="fab fa-whatsapp"></li> WA: +62821 6030 7043</small><br>
             <small><li class="fas fa-fax"></li> Fax: (061) 7874188</small><br>
             <small><li class="fas fa-envelope"></li> E-mail: seller@bjmsgroup.com</small><br>

          </div> -->
          <!-- <div class="col-sm-4">
             <p><strong>Social Media</strong></p>
              <h6><a href="https://www.facebook.com/bjmsonline/" target="_blank"><li class="fab fa-facebook"></li></a> Facebook</h6>
              <h6><a href="https://www.instagram.com/bjmsonline/" target="_blank"><li class="fab fa-instagram"></li></a> Instagram</h6>
              <h6><a href="https://id.linkedin.com/company/pt-budijaya-makmursentosa" target="_blank"><li class="fab fa-linkedin"></li></a> linkedin</h6>

          </div> -->
        </div>
    </div>
  </div>

  <!-- =================================== -->

  <script src="<?= base_url('lending_assets/') ?>assets/app.js"></script>

  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
    crossorigin="anonymous"></script>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>

      $(document).ready(function(){

        var status = "<?= $_SESSION['status'] ?>";
        if (status == 'berhasil') {
          Swal.fire(
          'Good job!',
          'Data sent successfully',
          'success'
        )
        <?php unset($_SESSION['status']); ?>
        }

      })
     
    </script>

</body>


<style>
  @media (min-width: 1280px) {

    #bg-al{

      width: 600px;
    }

  }
</style>

<style>
  @media (max-width: 1270px) {

    .bulat{

     display: none;
    }

  }
</style>


</html>
