<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- render all elemnts normaly -->
   
    <link rel="stylesheet" href="">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Welcome</title>
    
    <!-- CSS Files -->
    <link rel="stylesheet" href="{{ asset('css/normalize.css') }}">
    <!-- fontawesome -->
<link rel="stylesheet" href="{{ asset('css/all.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/styles.css') }}">
<link rel="stylesheet" href="{{ asset('css/navwe.css') }}">
<!-- Web Fonts Example -->
<link rel="stylesheet" href="{{ asset('webfonts/fontawesome-webfont.woff2') }}">
</head>
<body>
    @include('user.navwe')
    <!-- landing -->
     <div class="landing">
        <div class="intro-txt">
            <h1>Welcome to Anjedni!🚀</h1>
            <p> Your all-in-one solution for hassle-free home services. Fast, reliable, and professional—because your comfort matters!</p>
        </div>
        
     </div>
   <!-- Features Section -->
<div class="features">
    <div class="container">
        <div class="feat">
            <i class="fas fa-lightbulb fa-3x"></i>
            <h3>Share Your Needs</h3>
            <p>Tell us what home service you require, and we’ll tailor the best solution just for you!</p>
        </div>
        <div class="feat">
            <i class="fas fa-tools fa-3x"></i>
            <h3>We Handle Everything</h3>
            <p>From cleaning to carpentry, plumbing to electrical work – our professionals take care of every detail.</p>
        </div>
        <div class="feat">
            <i class="fas fa-thumbs-up fa-3x"></i>
            <h3>Enjoy Hassle-Free Service</h3>
            <p>Relax and let our experts transform your home with high-quality, reliable service you can trust.</p>
        </div>
    </div>
</div>

      <!-- Services -->
      <div class="services" id="services">
        <div class="container">
            <h2 class="spatial-heading">Services</h2>
            <p>Don't be busy be productive</p>
            <div class="services-content">
                 <div class="col">
                    <div class="srv">
                        <!-- <i class="fas fa-broom fa-2x"></i> -->
                        <div class="text">
                            <h3>🏠 Cleaning Services</h3>
                            <p>Anjedni - Spotless Homes, Effortless Cleaning! 🧹✨
                                Book professional cleaners for a sparkling home—quick, reliable, and stress-free!</p>
                        </div>
                    </div> 
                    <div class="srv">
                        <!-- <i class="fas fa-wrench fa-2x"></i> -->
                        <div class="text">
                            <h3>🔧 Plumbing Services </h3>
                            <p>Anjedni - Leak-Free, Worry-Free! 🚰🔩
                                From pipe repairs to installations, our expert plumbers have got you covered—fast and efficient!</p>
                        </div>
                    </div> 
                 </div>
                 <div class="col">
                    <div class="srv">
                        <!-- <i class="fas fa-bolt fa-2x"></i> -->
                        <div class="text">
                            <h3>⚡ Electrician Services</h3>
                            <p>Anjedni - Powering Your Home Safely! 💡🔌
                                Need electrical repairs or installations? Our skilled electricians ensure safe and reliable solutions!</p>
                        </div>
                    </div> 
                    <div class="srv">
                        <!-- <i class="fas fa-tools fa-2x"></i> -->
                        <div class="text">
                            <h3>🪵 Carpentry Services</h3>
                            <p>Anjedni - Precision & Craftsmanship in Every Cut! 🔨🪵
                                From furniture repairs to door installations and custom woodwork, our skilled carpenters are ready to help!</p>
                        </div>
                    </div> 
                 </div>
                 <div class="col">
                    <div class="image img-col">
                        <img src="images/OIG2.eK3YM_UoSlwf3XhD-768x768.webp" alt="">
                    </div>
                 </div>
            </div>
        </div>
      </div>
   <!-- Portfolio Section -->
<div class="portfolio" id="portfolio">
    <div class="container">
        <div>
            <h3 class="spatial-heading">Our Work</h3>
            <p>Take a look at our past projects. We turn challenges into solutions with top-notch service.</p>
        </div>
        <div class="portfolio-content">
            
            <!-- Cleaning Service Showcase -->
            <div class="card">
                <img src="images/cleaning-project.jpeg" alt="Cleaning Project">
                <div class="info">
                    <h3>Deep Home Cleaning</h3>
                    <p>A complete deep-cleaning service for a 5-bedroom home, leaving every corner shining.</p>
                </div>
            </div>

            <!-- Plumbing Project -->
            <div class="card">
                <img src="images/plumbing-project.webp" alt="Plumbing Work">
                <div class="info">
                    <h3>Bathroom Plumbing Fix</h3>
                    <p>Replaced old pipes and fixed leaks in a client's bathroom, ensuring a smooth water flow.</p>
                </div>
            </div>

            <!-- Electrical Work -->
            <div class="card">
                <img src="images/electrical-project.jpg" alt="Electrical Service">
                <div class="info">
                    <h3>Complete Home Rewiring</h3>
                    <p>Installed safe and energy-efficient wiring for a newly renovated house.</p>
                </div>
            </div>

            <!-- Carpentry Showcase -->
            <div class="card">
                <img src="images/carpentry-project.webp" alt="Carpentry Work">
                <div class="info">
                    <h3>Custom Wooden Shelves</h3>
                    <p>Designed and built high-quality wooden shelves tailored to a client's specifications.</p>
                </div>
            </div>

        </div>
    </div>
</div>
       <!-- about -->
       <div class="about" id="about">
        <div class="container">
               <h2 class="spatial-heading">About</h2>
               <p> Who We Are? 🏡🔧</p>
           <div class="about-content">
               <div class="image">
                <img src="images/أفضل-شركات-خدمات-منزلية-بالرياض.jpg" alt="">
                </div>
                <div class="text">
                    <p>
                        We are a passionate team dedicated to providing top-quality home services with speed and reliability. Our vision is to make life easier for our customers by offering a one-stop platform connecting them with skilled professionals in various fields—cleaning, maintenance, plumbing, electrical work, carpentry, and more.                    </p>
                    <hr>
                    <p>Our goal is to make "Anjedni" the go-to choice for anyone in need of trusted home services—fair pricing, hassle-free experience, and guaranteed quality! 💡✨</p>
                </div>
           </div>
        </div>
      </div>
      <!-- Contact -->
      <div class="contact" id="contact">
        <div class="container">
            <h2 class="spatial-heading">Get in Touch</h2>
            <p>We’re here to help with all your home service needs!</p>
            
            <div class="contact-info">
                <p class="label">Have a question or need assistance? Reach out to us:</p>
                
                <p><strong>📍 Address:</strong> <i class="fas fa-map-marker-alt"></i> New Assuit City</p>
                <p><strong>📞 Phone:</strong> <a href="tel:+123456789">+201011111111</a></p>
                <p><strong>📧 Email:</strong> 
                    <a href="mailto:contact@anjedni.com?subject=Customer Inquiry" class="link">
                        contact@anjedni.com
                    </a>
                </p>
                
                <div class="social">
                    <p>Follow Us on Social Media:</p>
                    <a href="https://facebook.com/yourpage" target="_blank"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://twitter.com/yourhandle" target="_blank"><i class="fab fa-twitter"></i></a>
                    <a href="https://youtube.com/yourchannel" target="_blank"><i class="fab fa-youtube"></i></a>
                    <a href="https://instagram.com/yourhandle" target="_blank"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
    
      <div class="footer" >
        &copy; 2023 <span>Leon</span> All Right Reserved
        </div>
      </div>
</body>
</html>