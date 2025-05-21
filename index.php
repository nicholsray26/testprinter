<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Printer Experts Pro - printerexpertspro.vercel.app</title>
  <link rel="icon" type="image/png" href="/images/favicon.png">
  <link rel="stylesheet" href="style.css" />
</head>
<body>

<!-- Header Wrapper -->
<div class="header-wrapper">
  <div class="header-container">
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
    <img src="images/banner.png" alt="Banner Image" />
    <div class="hero-text">
      <h1>Diagnose and solve</h1>
      <p><strong>Contact Support – Chat Live</strong></p>
      <p>In this support hub, you'll find quick access to live assistance for common computer and printer issues.</p>
      <p>Click the tabs to switch between <strong>Computer</strong> and <strong>Printer</strong> topics. Then start a live chat with a support agent.</p>
      <button>Click for Chat Assistance</button>
    </div>
  </section>

 <!-- Tab Navigation -->
<div class="tabs">
  <span id="printerTab" class="tab active">🖨️ Printer Issues</span>
  <span id="computerTab" class="tab">💻 Computer Issues</span>
</div>

<!-- Printer Issues Grid -->
<div id="printerGrid" class="grid">
  <div class="card"><img src="images/image12.svg" alt="Setup"><p>Printer setup issues</p></div>
  <div class="card"><img src="images/image13.svg" alt="Offline"><p>Printer offline</p></div>
  <div class="card"><img src="images/image14.svg" alt="Wireless"><p>Wireless printer issues</p></div>
  <div class="card"><img src="images/image15.svg" alt="Scanner"><p>Scanner issues</p></div>
  <div class="card"><img src="images/image16.svg" alt="Ink"><p>Color or black ink not printing</p></div>
  <div class="card"><img src="images/image17.svg" alt="Cartridge"><p>Cartridge issues</p></div>
  <div class="card"><img src="images/image18.svg" alt="Print Job Queue"><p>Print job stuck in queue</p></div>
  <div class="card"><img src="images/image19.svg" alt="Paper Jam"><p>Paper jam issues</p></div>
  <div class="card"><img src="images/image20.svg" alt="Instant Ink"><p>Instant Ink issues</p></div>
  <div class="card"><img src="images/image21.svg" alt="Carriage Jam"><p>Carriage is jammed</p></div>
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
<?php include 'footer.php'; ?>
</body>
</html>