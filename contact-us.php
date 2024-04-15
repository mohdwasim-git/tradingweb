<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Trading & Investment</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link href="https://fonts.googleapis.com/css2?family=Sora:wght@100..800&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php include('include/header.php') ?>

<!-- Banner Section Start Here -->
<div class="normal_banner_section contact_banner">
 <div class="overlay"></div>
 <div class="banner_content">
  <div class="container">
   <div class="row">
    <div class="col-md-12">
     <div class="banner_info">
      <h1>Get In Touch</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
     </div>
    </div>
   </div>
  </div>
 </div>
</div>
<div class="clearfix"></div>
<!-- Banner Section End Here -->

<!-- Contact Us Section Start Here -->
<div class="contact_section equal_space">
 <div class="container">
  <div class="row">
   <div class="col-md-12">
    <div class="contact_inner">
     <div class="row">
      <div class="col-md-5">
       <div class="cont_info">
        <h4 class="sub_heading">Contact Us</h4>
        <h2>Feel free to <span>keep in touch</span> with us</h2>
        <p>Fringilla vulputate ac integer dui torquent penatibus cursus vehicula. Vulputate taciti velit metus ex mattis hendrerit suspendisse consectetur rhoncus</p>
        <ul>
         <li><span><i class="fas fa-map-marker-alt"></i></span> Jln Cempaka Wangi No 22, Jakarta - Indonesia</li>
         <li><span><i class="far fa-clock"></i></span> Mon - Fri : 08:00-17:00</li>
         <li><span><i class="fas fa-envelope"></i></span> <a href="mailto:hello@yourdomain.tld">hello@yourdomain.tld</a></li>
         <li><span><i class="fas fa-phone-alt"></i></span> <a href="tel:+6221 2002 2012">+6221 2002 2012</a></li>
        </ul>
       </div>
      </div>
      <div class="col-md-7">
       <div class="cont_form">
        <form action="#" target="_top" method="get">
         <div class="row">
          <div class="col-md-6">
           <div class="mb-3">
            <label for="name" class="form-label">Name*</label>
            <input type="text" class="form-control" id="name" placeholder="Your Name" required>
           </div>
          </div>
          <div class="col-md-6">
           <div class="mb-3">
            <label for="email" class="form-label">Email Id*</label>
            <input type="email" class="form-control" id="email" placeholder="Your Email Id" required>
           </div>
          </div>
          <div class="col-md-6">
           <div class="mb-3">
            <label for="phone" class="form-label">Phone*</label>
            <input type="text" class="form-control" name="phone" placeholder="Your Phone No." oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" pattern="[0-9]{10,12}" minlength="10" maxlength="10" required="">
           </div>
          </div>
          <div class="col-md-6">
           <div class="mb-3">
            <label for="company" class="form-label">Company*</label>
            <input type="text" class="form-control" id="company" placeholder="Your Company" required>
           </div>
          </div>
          <div class="col-md-12">
           <div class="mb-3">
            <label for="subject" class="form-label">Subject*</label>
            <input type="text" class="form-control" id="subject" placeholder="Your Subject" required>
           </div>
          </div>
          <div class="col-md-12">
           <div class="mb-3">
            <label for="message" class="form-label">Message*</label>
            <textarea class="form-control" id="message" rows="3" placeholder="Your Message here ..." required></textarea>
           </div>
          </div>
          <div class="col-md-12">
           <div class="mb-3">
            <button type="submit" name="submit" value="Send Message">Send Message <i class="fas fa-angle-right"></i></button>
           </div>
          </div>
         </div>
        </form>
       </div>
      </div>
     </div>
     <div class="row">
      <div class="col-md-12">
       <div class="con_map mt-5">
       <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3502.4059518496533!2d77.37620797559923!3d28.617592984758705!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ceff5641278b7%3A0xb404aa7495f8609!2s48%2C%20B%20Block%20Rd%2C%20B%20Block%2C%20Sector%2063%2C%20Noida%2C%20Uttar%20Pradesh%20201307!5e0!3m2!1sen!2sin!4v1712573944023!5m2!1sen!2sin" width="100%" height="500" style="border-radius:5px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
       </div>
      </div>
     </div>
    </div>
   </div>
  </div>
 </div>
</div>
<div class="clearfix"></div>
<!-- Contact Us Section End Here -->

<?php include('include/footer.php') ?>