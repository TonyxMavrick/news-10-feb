// NewsBing - Main JavaScript

// Mobile Menu Toggle
function toggleMobileMenu() {
  const mobileNav = document.getElementById('mobileNav');
  const menuIcon = document.querySelector('.menu-icon');
  const closeIcon = document.querySelector('.close-icon');
  
  if (mobileNav.style.display === 'none' || mobileNav.style.display === '') {
    mobileNav.style.display = 'block';
    menuIcon.style.display = 'none';
    closeIcon.style.display = 'block';
  } else {
    mobileNav.style.display = 'none';
    menuIcon.style.display = 'block';
    closeIcon.style.display = 'none';
  }
}

// Search Functionality
function handleSearch(event) {
  event.preventDefault();
  const desktopInput = document.getElementById('desktop-search-input');
  const mobileInput = document.getElementById('mobile-search-input');
  const query = desktopInput ? desktopInput.value : mobileInput.value;
  
  if (query.trim()) {
    alert('Search functionality: ' + query + '\n\nIn production, this would redirect to: search.html?q=' + encodeURIComponent(query));
    // For production: window.location.href = 'search.html?q=' + encodeURIComponent(query);
  }
  
  return false;
}

// Hero Slider
let currentSlide = 0;
const slides = [];

function initSlider(slidesData) {
  slides.push(...slidesData);
  showSlide(0);
}

function showSlide(index) {
  const sliderContainer = document.querySelector('.slider-container');
  const dots = document.querySelectorAll('.dot');
  
  if (!sliderContainer) return;
  
  currentSlide = index;
  if (currentSlide >= slides.length) currentSlide = 0;
  if (currentSlide < 0) currentSlide = slides.length - 1;
  
  sliderContainer.style.transform = `translateX(-${currentSlide * 100}%)`;
  
  dots.forEach((dot, i) => {
    if (i === currentSlide) {
      dot.classList.add('active');
    } else {
      dot.classList.remove('active');
    }
  });
}

function nextSlide() {
  showSlide(currentSlide + 1);
}

function prevSlide() {
  showSlide(currentSlide - 1);
}

function goToSlide(index) {
  showSlide(index);
}

// Auto-advance slider
let sliderInterval;
function startSliderAutoPlay() {
  sliderInterval = setInterval(() => {
    nextSlide();
  }, 5000);
}

function stopSliderAutoPlay() {
  if (sliderInterval) {
    clearInterval(sliderInterval);
  }
}

// Back to Top Button
function scrollToTop() {
  window.scrollTo({
    top: 0,
    behavior: 'smooth'
  });
}

// Show/hide back to top button on scroll
window.addEventListener('scroll', function() {
  const backToTopBtn = document.getElementById('backToTop');
  if (backToTopBtn) {
    if (window.pageYOffset > 300) {
      backToTopBtn.classList.add('show');
    } else {
      backToTopBtn.classList.remove('show');
    }
  }
});

// Form Submission (Contact Page)
function handleContactSubmit(event) {
  event.preventDefault();
  
  const name = document.getElementById('name').value;
  const email = document.getElementById('email').value;
  const subject = document.getElementById('subject').value;
  const message = document.getElementById('message').value;
  
  // In production, this would send the form data to a server
  alert('Contact Form Submitted!\n\nName: ' + name + '\nEmail: ' + email + '\nSubject: ' + subject + '\n\nThank you for contacting NewsBing!');
  
  // Reset form
  event.target.reset();
  
  return false;
}

// Format Date
function formatDate(dateString) {
  const date = new Date(dateString);
  return date.toLocaleDateString('en-US', { 
    month: 'short', 
    day: 'numeric', 
    year: 'numeric' 
  });
}

function formatLongDate(dateString) {
  const date = new Date(dateString);
  return date.toLocaleDateString('en-US', { 
    weekday: 'long',
    year: 'numeric', 
    month: 'long', 
    day: 'numeric' 
  });
}

// Social Sharing Functions
function shareOnFacebook(url, title) {
  const shareUrl = `https://www.facebook.com/sharer/sharer.php?u=${encodeURIComponent(url)}`;
  window.open(shareUrl, 'facebook-share', 'width=580,height=400');
  return false;
}

function shareOnTwitter(url, title) {
  const shareUrl = `https://twitter.com/intent/tweet?url=${encodeURIComponent(url)}&text=${encodeURIComponent(title)}`;
  window.open(shareUrl, 'twitter-share', 'width=580,height=400');
  return false;
}

function shareOnLinkedIn(url, title) {
  const shareUrl = `https://www.linkedin.com/shareArticle?mini=true&url=${encodeURIComponent(url)}&title=${encodeURIComponent(title)}`;
  window.open(shareUrl, 'linkedin-share', 'width=580,height=400');
  return false;
}

// Load News Data Dynamically (for homepage)
function loadNewsArticles() {
  // Sample news data - in production, this would be loaded from an API or database
  const newsArticles = [
    {
      id: '1',
      title: 'Senate Passes Landmark Infrastructure Bill with Bipartisan Support',
      excerpt: 'In a historic move, the U.S. Senate has passed a comprehensive $1.2 trillion infrastructure package aimed at modernizing roads, bridges, and digital infrastructure across the nation.',
      category: 'USA News',
      author: 'Sarah Mitchell',
      publishDate: '2026-02-09',
      imageUrl: 'https://images.unsplash.com/photo-1648966868920-9b2c85c8ce3d?w=800&q=80'
    },
    {
      id: '2',
      title: 'Major Tech Companies Announce AI Safety Initiative',
      excerpt: 'Leading technology companies including Microsoft, Google, and Meta have jointly announced a new framework for ensuring artificial intelligence safety.',
      category: 'Technology',
      author: 'James Chen',
      publishDate: '2026-02-09',
      imageUrl: 'https://images.unsplash.com/photo-1697577418970-95d99b5a55cf?w=800&q=80'
    },
    {
      id: '3',
      title: 'Record-Breaking Heat Wave Affects Southern States',
      excerpt: 'Meteorologists warn that unprecedented high temperatures are expected to persist across Texas, Louisiana, and Mississippi.',
      category: 'USA News',
      author: 'Rebecca Johnson',
      publishDate: '2026-02-09',
      imageUrl: 'https://images.unsplash.com/photo-1427097829427-56a905bf7004?w=800&q=80'
    },
    {
      id: '4',
      title: 'Federal Reserve Holds Interest Rates Steady',
      excerpt: 'Central bank maintains current rates while signaling potential adjustments later this year based on inflation data.',
      category: 'Business',
      author: 'Alexandra Wright',
      publishDate: '2026-02-09',
      imageUrl: 'https://images.unsplash.com/photo-1541354329998-f4d9a9f9297f?w=800&q=80'
    },
    {
      id: '5',
      title: 'Super Bowl LX Delivers Record-Breaking Viewership',
      excerpt: 'Championship game draws 130 million viewers, making it the most-watched television event in U.S. history.',
      category: 'Sports',
      author: 'Marcus Thompson',
      publishDate: '2026-02-07',
      imageUrl: 'https://images.unsplash.com/photo-1508098682722-e99c43a406b2?w=800&q=80'
    },
    {
      id: '6',
      title: 'Apple Unveils Next-Generation AR Glasses',
      excerpt: 'Tech giant enters augmented reality market with lightweight glasses featuring advanced AI integration.',
      category: 'Technology',
      author: 'Lisa Anderson',
      publishDate: '2026-02-08',
      imageUrl: 'https://images.unsplash.com/photo-1592478411213-6153e4ebc07d?w=800&q=80'
    }
  ];
  
  return newsArticles;
}

// Render news grid
function renderNewsGrid(articles, containerId) {
  const container = document.getElementById(containerId);
  if (!container) return;
  
  container.innerHTML = articles.map(article => `
    <a href="article.html?id=${article.id}" class="news-card">
      <img src="${article.imageUrl}" alt="${article.title}" class="news-card-image" loading="lazy">
      <div class="news-card-content">
        <div class="news-card-meta">
          <span class="news-category">${article.category}</span>
          <span class="news-date">${formatDate(article.publishDate)}</span>
        </div>
        <h3 class="news-card-title">${article.title}</h3>
        <p class="news-card-excerpt">${article.excerpt}</p>
        <p class="news-card-author">By ${article.author}</p>
      </div>
    </a>
  `).join('');
}

// Initialize on page load
document.addEventListener('DOMContentLoaded', function() {
  // Start slider if on homepage
  if (document.querySelector('.hero-slider')) {
    startSliderAutoPlay();
  }
  
  // Load news articles if news grid exists
  const newsGrid = document.getElementById('newsGrid');
  if (newsGrid) {
    const articles = loadNewsArticles();
    renderNewsGrid(articles, 'newsGrid');
  }
});

// Stop slider when page is hidden
document.addEventListener('visibilitychange', function() {
  if (document.hidden) {
    stopSliderAutoPlay();
  } else if (document.querySelector('.hero-slider')) {
    startSliderAutoPlay();
  }
});
