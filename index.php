<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
     <!-- Histats.com  START  (aync)-->
<script type="text/javascript">var _Hasync= _Hasync|| [];
_Hasync.push(['Histats.start', '1,5008150,4,0,0,0,00010000']);
_Hasync.push(['Histats.fasi', '1']);
_Hasync.push(['Histats.track_hits', '']);
(function() {
var hs = document.createElement('script'); hs.type = 'text/javascript'; hs.async = true;
hs.src = ('//s10.histats.com/js15_as.js');
(document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(hs);
})();</script>
<noscript><a href="/" target="_blank"><img  src="//sstatic1.histats.com/0.gif?5008150&101" alt="web page hit counter" border="0"></a></noscript>
<!-- Histats.com  END  -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>NewsBing - Trusted News Source | Breaking News & Updates</title>
  <meta name="description" content="Your trusted source for timely, accurate, and unbiased news coverage from across the United States and around the world.">
  <meta name="keywords" content="news, USA news, breaking news, world news, business, technology, sports, entertainment, health">
  
  <!-- Open Graph -->
  <meta property="og:type" content="website">
  <meta property="og:title" content="NewsBing - Trusted News Source">
  <meta property="og:description" content="Your trusted source for timely, accurate, and unbiased news coverage from across the United States and around the world.">
  <meta property="og:image" content="https://images.unsplash.com/photo-1648966868920-9b2c85c8ce3d?w=1200&q=80">
  <meta property="og:url" content="https://newsbing.com">
  <meta property="og:site_name" content="NewsBing">
  
  <!-- Twitter Card -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="NewsBing - Trusted News Source">
  <meta name="twitter:description" content="Your trusted source for timely, accurate, and unbiased news coverage.">
  <meta name="twitter:image" content="https://images.unsplash.com/photo-1648966868920-9b2c85c8ce3d?w=1200&q=80">
  
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <!-- Header -->
  <header class="site-header">
    <div class="top-bar">
      <div class="container">
        <div class="top-bar-content">
          <span>Breaking News: Latest updates from across the USA</span>
          <span class="date-display" id="currentDate"></span>
        </div>
      </div>
    </div>
    
    <div class="main-header">
      <div class="container">
        <div class="header-content">
          <a href="index.html" class="logo">
            <div class="logo-text">NewsBing</div>
            <div class="logo-tagline">Trusted News Source</div>
          </a>
          
          <form class="search-form desktop-search" onsubmit="return handleSearch(event)">
            <input type="text" id="desktop-search-input" placeholder="Search news..." class="search-input">
            <button type="submit" class="search-button" aria-label="Search">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <circle cx="11" cy="11" r="8"></circle>
                <path d="m21 21-4.35-4.35"></path>
              </svg>
            </button>
          </form>
          
          <button class="mobile-menu-toggle" onclick="toggleMobileMenu()" aria-label="Toggle menu">
            <svg class="menu-icon" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <line x1="3" y1="12" x2="21" y2="12"></line>
              <line x1="3" y1="6" x2="21" y2="6"></line>
              <line x1="3" y1="18" x2="21" y2="18"></line>
            </svg>
            <svg class="close-icon" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="display:none;">
              <line x1="18" y1="6" x2="6" y2="18"></line>
              <line x1="6" y1="6" x2="18" y2="18"></line>
            </svg>
          </button>
        </div>
      </div>
    </div>
    
    <nav class="main-nav">
      <div class="container">
        <div class="nav-content desktop-nav">
          <a href="index.html" class="nav-link">Home</a>
          <a href="#" class="nav-link">USA News</a>
          <a href="#" class="nav-link">World</a>
          <a href="#" class="nav-link">Business</a>
          <a href="#" class="nav-link">Technology</a>
          <a href="#" class="nav-link">Sports</a>
          <a href="#" class="nav-link">Entertainment</a>
          <a href="#" class="nav-link">Health</a>
        </div>
        
        <div class="mobile-nav" id="mobileNav" style="display:none;">
          <form class="search-form mobile-search" onsubmit="return handleSearch(event)" style="margin-bottom: 1rem;">
            <input type="text" id="mobile-search-input" placeholder="Search news..." class="search-input">
            <button type="submit" class="search-button" aria-label="Search">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <circle cx="11" cy="11" r="8"></circle>
                <path d="m21 21-4.35-4.35"></path>
              </svg>
            </button>
          </form>
          
          <a href="index.html" class="nav-link" onclick="toggleMobileMenu()">Home</a>
          <a href="#" class="nav-link" onclick="toggleMobileMenu()">USA News</a>
          <a href="#" class="nav-link" onclick="toggleMobileMenu()">World</a>
          <a href="#" class="nav-link" onclick="toggleMobileMenu()">Business</a>
          <a href="#" class="nav-link" onclick="toggleMobileMenu()">Technology</a>
          <a href="#" class="nav-link" onclick="toggleMobileMenu()">Sports</a>
          <a href="#" class="nav-link" onclick="toggleMobileMenu()">Entertainment</a>
          <a href="#" class="nav-link" onclick="toggleMobileMenu()">Health</a>
        </div>
      </div>
    </nav>
  </header>

  <!-- Hero Slider Section -->
  <section class="hero-section">
    <div class="container">
      <div class="section-header">
        <h2 class="section-title">Breaking News</h2>
      </div>
      
      <div class="hero-slider">
        <div class="slider-container">
          <!-- Slide 1 -->
          <div class="slide">
            <img src="https://images.unsplash.com/photo-1648966868920-9b2c85c8ce3d?w=1200&q=80" alt="Senate Infrastructure Bill">
            <div class="slide-content">
              <div>
                <span class="slide-badge">BREAKING</span>
                <span class="slide-badge">USA NEWS</span>
              </div>
              <h3 class="slide-title">Senate Passes Landmark Infrastructure Bill with Bipartisan Support</h3>
              <p class="slide-excerpt">In a historic move, the U.S. Senate has passed a comprehensive $1.2 trillion infrastructure package aimed at modernizing roads, bridges, and digital infrastructure across the nation.</p>
              <div class="slide-meta">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="display:inline; vertical-align:middle; margin-right:4px;">
                  <circle cx="12" cy="12" r="10"></circle>
                  <polyline points="12 6 12 12 16 14"></polyline>
                </svg>
                Feb 9, 2026
              </div>
            </div>
          </div>
          
          <!-- Slide 2 -->
          <div class="slide">
            <img src="https://images.unsplash.com/photo-1697577418970-95d99b5a55cf?w=1200&q=80" alt="AI Safety Initiative">
            <div class="slide-content">
              <div>
                <span class="slide-badge">BREAKING</span>
                <span class="slide-badge">TECHNOLOGY</span>
              </div>
              <h3 class="slide-title">Major Tech Companies Announce AI Safety Initiative</h3>
              <p class="slide-excerpt">Leading technology companies including Microsoft, Google, and Meta have jointly announced a new framework for ensuring artificial intelligence safety and ethical development.</p>
              <div class="slide-meta">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="display:inline; vertical-align:middle; margin-right:4px;">
                  <circle cx="12" cy="12" r="10"></circle>
                  <polyline points="12 6 12 12 16 14"></polyline>
                </svg>
                Feb 9, 2026
              </div>
            </div>
          </div>
          
          <!-- Slide 3 -->
          <div class="slide">
            <img src="https://images.unsplash.com/photo-1427097829427-56a905bf7004?w=1200&q=80" alt="Heat Wave">
            <div class="slide-content">
              <div>
                <span class="slide-badge">USA NEWS</span>
              </div>
              <h3 class="slide-title">Record-Breaking Heat Wave Affects Southern States</h3>
              <p class="slide-excerpt">Meteorologists warn that unprecedented high temperatures are expected to persist across Texas, Louisiana, and Mississippi through the weekend.</p>
              <div class="slide-meta">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="display:inline; vertical-align:middle; margin-right:4px;">
                  <circle cx="12" cy="12" r="10"></circle>
                  <polyline points="12 6 12 12 16 14"></polyline>
                </svg>
                Feb 9, 2026
              </div>
            </div>
          </div>
        </div>
        
        <div class="slider-controls">
          <button class="slider-btn" onclick="prevSlide()" aria-label="Previous slide">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <polyline points="15 18 9 12 15 6"></polyline>
            </svg>
          </button>
          <button class="slider-btn" onclick="nextSlide()" aria-label="Next slide">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <polyline points="9 18 15 12 9 6"></polyline>
            </svg>
          </button>
        </div>
        
        <div class="slider-dots">
          <button class="dot active" onclick="goToSlide(0)" aria-label="Go to slide 1"></button>
          <button class="dot" onclick="goToSlide(1)" aria-label="Go to slide 2"></button>
          <button class="dot" onclick="goToSlide(2)" aria-label="Go to slide 3"></button>
        </div>
      </div>
    </div>
  </section>

  <!-- Latest News Section -->
  <section class="news-section">
    <div class="container">
      <div class="section-header">
        <h2 class="section-title">Latest News</h2>
        <div class="section-line"></div>
      </div>
      
      <div class="news-grid" id="newsGrid">
        <!-- News articles will be loaded dynamically via JavaScript -->
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="site-footer">
    <div class="container">
      <div class="footer-grid">
        <div class="footer-col">
          <h3 class="footer-title">NewsBing</h3>
          <p class="footer-text">
            Your trusted source for timely, accurate, and unbiased news coverage from across the United States and around the world.
          </p>
          <div class="social-links">
            <a href="#" aria-label="Facebook">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>
              </svg>
            </a>
            <a href="#" aria-label="Twitter">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                <path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path>
              </svg>
            </a>
            <a href="#" aria-label="Instagram">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
                <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
              </svg>
            </a>
            <a href="#" aria-label="YouTube">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                <path d="M22.54 6.42a2.78 2.78 0 0 0-1.94-2C18.88 4 12 4 12 4s-6.88 0-8.6.46a2.78 2.78 0 0 0-1.94 2A29 29 0 0 0 1 11.75a29 29 0 0 0 .46 5.33A2.78 2.78 0 0 0 3.4 19c1.72.46 8.6.46 8.6.46s6.88 0 8.6-.46a2.78 2.78 0 0 0 1.94-2 29 29 0 0 0 .46-5.25 29 29 0 0 0-.46-5.33z"></path>
                <polygon points="9.75 15.02 15.5 11.75 9.75 8.48 9.75 15.02"></polygon>
              </svg>
            </a>
          </div>
        </div>
        
        <div class="footer-col">
          <h4 class="footer-heading">News Categories</h4>
          <ul class="footer-links">
            <li><a href="#">USA News</a></li>
            <li><a href="#">World</a></li>
            <li><a href="#">Business</a></li>
            <li><a href="#">Technology</a></li>
          </ul>
        </div>
        
        <div class="footer-col">
          <h4 class="footer-heading">More News</h4>
          <ul class="footer-links">
            <li><a href="#">Sports</a></li>
            <li><a href="#">Entertainment</a></li>
            <li><a href="#">Health</a></li>
          </ul>
        </div>
        
        <div class="footer-col">
          <h4 class="footer-heading">Contact Us</h4>
          <ul class="footer-contact">
            <li>
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
              </svg>
              <a href="tel:+13802848332">+1-380-284-8332</a>
            </li>
            <li>
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                <polyline points="22,6 12,13 2,6"></polyline>
              </svg>
              <a href="mailto:article@newsbing.in">article@newsbing.in</a>
            </li>
          </ul>
          <ul class="footer-links">
            <li><a href="about.html">About Us</a></li>
            <li><a href="contact.html">Contact</a></li>
          </ul>
        </div>
      </div>
      
      <div class="footer-bottom">
        <p>&copy; <span id="currentYear"></span> NewsBing. All rights reserved.</p>
        <div class="footer-legal">
          <a href="terms.html">Terms & Conditions</a>
          <a href="privacy.html">Privacy Policy</a>
        </div>
      </div>
    </div>
  </footer>

  <button class="back-to-top" id="backToTop" onclick="scrollToTop()" aria-label="Back to top">
    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
      <line x1="12" y1="19" x2="12" y2="5"></line>
      <polyline points="5 12 12 5 19 12"></polyline>
    </svg>
  </button>

  <script src="js/main.js"></script>
  <script>
    // Set current date
    document.getElementById('currentDate').textContent = new Date().toLocaleDateString('en-US', { 
      weekday: 'long', 
      year: 'numeric', 
      month: 'long', 
      day: 'numeric' 
    });
    
    // Set current year in footer
    document.getElementById('currentYear').textContent = new Date().getFullYear();
    
    // Initialize slider with featured articles
    const featuredSlides = [
      { id: 1, title: 'Senate Infrastructure Bill' },
      { id: 2, title: 'AI Safety Initiative' },
      { id: 3, title: 'Heat Wave' }
    ];
    initSlider(featuredSlides);
  </script>
</body>
</html>
