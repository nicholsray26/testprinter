<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Printer Experts Pro - printerexpertspro.vercel.app</title>
  <link rel="icon" type="image/png" href="/images/favicon.png">
  <link rel="stylesheet" href="style.css" />
  <style>
    .hero {
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 40px;
      padding: 60px 20px;
      background: #f5f5f5;
      flex-wrap: wrap;
    }
    .hero-text {
      max-width: 500px;
    }
    .hero-text h1 {
      font-size: 32px;
      margin-bottom: 15px;
    }
    .hero-text p {
      margin: 10px 0;
    }
    .search-box {
      background: #fff;
      padding: 12px;
      border-radius: 6px;
      border: 1px solid #ccc;
      margin: 15px 0;
      width: 100%;
      max-width: 350px;
      font-size: 16px;
    }
    .search-btn {
      padding: 12px 24px;
      font-size: 16px;
      border: none;
      border-radius: 4px;
      background: #333;
      color: #fff;
      cursor: pointer;
    }
    .hero img {
      max-width: 450px;
      height: auto;
    }
    .header-container {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 10px 20px;
    }
    .logo img {
      height: 50px;
    }
  </style>
</head>
<body>

<!-- Header Wrapper -->
<div class="header-wrapper">
  <div class="header-container">
    <!-- Logo on the left -->
    <div class="logo">
      <img src="images/logs.png" alt="Printer Experts Pro Logo" style="width: 100%; max-width: 500px;" />
    </div>

    <!-- Actions on the right -->
    <div class="header-actions">
      <input type="text" placeholder="Type and Search.." class="search-input" />
      <span class="cart-icon">🛒</span>
      <button class="signin">Sign in</button>
    </div>
  </div>

  <nav class="main-nav">
    <a href="#">Printer Offline</a>
    <a href="#">Printer Setup</a>
    <a href="#">Scanner Setup</a>
    <a href="#">Support Home</a>
    <a href="#">Ink Cartridges Issue</a>
    <a href="#">Diagnostics</a>
    <a href="#">Business Support</a>
  </nav>
</div>

<!-- Hero -->
<section class="hero">
  <div class="hero-text">
    <h1>Get Started with Your Printer Setup</h1>
    <p>Easily get your printer ready with our step-by-step guidance.</p>
    <p>Just enter your printer model number to begin.</p>

<div style="display: flex; flex-direction: column; align-items: flex-start;">
<!-- Load Font Awesome (place in <head> once) -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

<!-- Your updated search wrapper -->
<div class="search-input-wrapper" style="display: flex; align-items: center; gap: 10px;">
  <i class="fas fa-hand-point-right animate-icon"></i>
  <input type="text" id="printerSearchBox" class="search-box" placeholder="Please Search Your Printer" />
</div>

  <button class="search-btn" style="margin-top: 10px; margin-left: 35px;">SEARCH</button>
</div>


    <p style="margin-top: 10px; font-size: 16px; color: #444;">
      Ensure your printer is powered on and properly connected.
    </p>
  </div>
  <img src="images/best-service.png" alt="Banner Image" />
</section>

 <!-- Tab Navigation -->
<div class="tabs">
  <span id="printerTab" class="tab active">🖨️ Printer Issues</span>
  <span id="computerTab" class="tab">💻 Computer Issues</span>
</div>

<!-- Printer Issues Grid -->
<div id="printerGrid" class="grid">
  <div class="card"><img src="images/image12.svg" alt=""><p>Printer setup issues</p></div>
  <div class="card"><img src="images/image13.svg" alt=""><p>Printer offline</p></div>
  <div class="card"><img src="images/image14.svg" alt=""><p>Wireless printer issues</p></div>
  <div class="card"><img src="images/image15.svg" alt=""><p>Scanner issues</p></div>
  <div class="card"><img src="images/image16.svg" alt=""><p>Color or black ink not printing</p></div>
  <div class="card"><img src="images/image17.svg" alt=""><p>Cartridge issues</p></div>
  <div class="card"><img src="images/image18.svg" alt=""><p>Print job stuck in queue</p></div>
  <div class="card"><img src="images/image19.svg" alt=""><p>Paper jam issues</p></div>
  <div class="card"><img src="images/image20.svg" alt=""><p>Instant Ink issues</p></div>
  <div class="card"><img src="images/image21.svg" alt=""><p>Carriage is jammed</p></div>
</div>

<!-- Computer Issues Grid -->
<div id="computerGrid" class="grid" style="display: none;">
  <div class="card"><img src="images/image1.svg" alt="Windows OS"><p>Windows operating system issues</p></div>
  <div class="card"><img src="images/image2.svg" alt="Battery"><p>Battery and adapter issues</p></div>
  <div class="card"><img src="images/image3.svg" alt="Slow"><p>Computer is slow</p></div>
  <div class="card"><img src="images/image4.svg" alt="WiFi"><p>Wireless, wired, Bluetooth networking issues</p></div>
  <div class="card"><img src="images/image5.svg" alt="Mouse"><p>Keyboard, mouse, touch pad, and click pad issues</p></div>
  <div class="card"><img src="images/image6.svg" alt="Recovery"><p>Perform an System Recovery</p></div>
  <div class="card"><img src="images/image7.svg" alt="Display"><p>Display and touchscreen issues</p></div>
  <div class="card"><img src="images/image8.svg" alt="Sound"><p>Sound Issue</p></div>
  <div class="card"><img src="images/image9.svg" alt="Freeze"><p>Computer locks up or freezes</p></div>
  <div class="card"><img src="images/image10.svg" alt="Boot"><p>Computer doesn’t turn on or boot up</p></div>
  <div class="card"><img src="images/image11.svg" alt="Memory"><p>Low disk space or memory issues</p></div>
</div>

<!-- JavaScript to toggle tabs -->
<script>
  const printerTab = document.getElementById('printerTab');
  const computerTab = document.getElementById('computerTab');
  const printerGrid = document.getElementById('printerGrid');
  const computerGrid = document.getElementById('computerGrid');

  printerTab.onclick = () => {
    printerTab.classList.add('active');
    computerTab.classList.remove('active');
    printerGrid.style.display = 'grid';
    computerGrid.style.display = 'none';
  };

  computerTab.onclick = () => {
    computerTab.classList.add('active');
    printerTab.classList.remove('active');
    printerGrid.style.display = 'none';
    computerGrid.style.display = 'grid';
  };
</script>

  <!-- Footer -->
  <footer>
  <div class="footer-grid">
    <!-- Column 1 -->
    <div class="footer-col">
      <p>
        We provide fast and trustworthy solutions for all your printer requirements.
        Whether you need routine maintenance, urgent fix, or printer setup. Our experts
        are here to ensure your devices run smoothly.
      </p>
    </div>

    <!-- Column 2 -->
    <div class="footer-col">
      <h4>Quick Links</h4>
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="/about.html">About Us</a></li>
        <li><a href="/solutions.html">Printer </a></li>
        <li><a href="/contact.html">Contact</a></li>
      </ul>
    </div>

    <!-- Column 3 -->
    <div class="footer-col">
      <h4>Important Links</h4>
      <ul>
        <li><a href="/faq.html">FAQs</a></li>
        <li><a href="/disclaimer.html">Disclaimer</a></li>
        <li><a href="/privacy.html">Privacy Policy</a></li>
        <li><a href="/terms.html">Terms & Conditions</a></li>
      </ul>
    </div>

    <!-- Column 4 -->
    <div class="footer-col">
      <h4>Contact Details</h4>
      <ul>
        <li>📍 1445 Woodmont Ln NW #3092<br>Atlanta, GA 30318</li>
        <li>📧 info@printscares.com</li>
      </ul>
    </div>
  </div>

  <div class="footer-bottom">
    © Copyright Prints Cares - All rights Reserved
  </div>
</footer>
<script>
  const inputBox = document.getElementById('printerSearchBox');
  const suggestion = "Please Search Your Printer";

  let index = 0;

  function typeSuggestion() {
    if (index < suggestion.length) {
      inputBox.setAttribute("placeholder", suggestion.substring(0, index + 1));
      index++;
      setTimeout(typeSuggestion, 100);
    } else {
      inputBox.classList.remove("typing");
    }
  }

  window.addEventListener('DOMContentLoaded', () => {
    inputBox.classList.add("typing");
    setTimeout(typeSuggestion, 500); // delay before typing starts
  });
</script>
<?php include 'footer.php'; ?>
</body>
</html>