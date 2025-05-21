<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/png" href="/images/favicon.png">
  <section class="page-title-banner">
  <h1>About Us</h1>
  </section>
  <link rel="stylesheet" href="/style.css">
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      margin: 0;
      padding: 0;
      background: #fff;
      color: #333;
    }
    .container {
      max-width: 1200px;
      margin: auto;
      padding: 40px 20px;
    }
    .section {
      display: flex;
      flex-wrap: wrap;
      align-items: center;
      gap: 40px;
      margin-bottom: 60px;
    }
    .section.reverse {
      flex-direction: row-reverse;
    }
    .section img {
      max-width: 100%;
      border-radius: 12px;
    }
    .text {
      flex: 1;
    }
    .image {
      flex: 1;
      text-align: center;
    }
    .text h2 {
      font-size: 28px;
      margin-bottom: 20px;
    }
    .text h4 {
      color: #f26a2e;
      margin-bottom: 10px;
    }
    .text p {
      margin-bottom: 15px;
      line-height: 1.6;
    }
    .grid-boxes {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 12px;
    }
    .grid-boxes div {
      background: #f9f9f9;
      padding: 12px 18px;
      border: 1px solid #ddd;
      border-radius: 6px;
    }
    .stats-boxes {
      display: flex;
      gap: 20px;
      justify-content: space-between;
      flex-wrap: wrap;
    }
    .stats-box {
      flex: 1 1 30%;
      background: #fff;
      border: 1px solid #a1ce54;
      padding: 20px;
      text-align: center;
      border-radius: 10px;
    }
    .stats-box h3 {
      color: #f26a2e;
      font-size: 24px;
    }
    .testimonial-container {
      background: linear-gradient(#fff, #f0fff2);
      padding: 60px 20px;
      text-align: center;
    }
    .testimonial-container h2 {
      margin-bottom: 10px;
    }
    .testimonial-container p {
      margin-bottom: 40px;
    }
    .testimonials {
      display: flex;
      gap: 30px;
      flex-wrap: wrap;
      justify-content: center;
    }
    .testimonial {
      background: #f9f9f9;
      padding: 20px;
      border-radius: 10px;
      max-width: 400px;
      font-style: italic;
    }
    .testimonial small {
      display: block;
      margin-top: 10px;
      color: #f26a2e;
      font-weight: bold;
    }
    @media (max-width: 768px) {
      .grid-boxes, .stats-boxes {
        grid-template-columns: 1fr;
        flex-direction: column;
      }
      .section {
        flex-direction: column;
      }
    }
  </style>
</head>
  <div class="container">
    <div class="section">
      <div class="image">
        <img src="images/our_experts.png" alt="Expert Working" style="width: 60%; max-width: 500px;" />
      </div>
      <div class="text">
        <h4>Who We Are</h4>
        <h2>Printer Experts Pro Provide the Widest Range of Printer Solutions</h2>
        <p>We provide fast and trustworthy solutions for all your printer requirements. Our experts are here to ensure your devices run smoothly. We specialize in both home and office printer solutions, providing budget-friendly solutions curated to your specific needs.</p>
        <div class="grid-boxes">
          <div>Quick Printer Fix</div>
          <div>Ink and Toner Supplies</div>
          <div>Printer Maintenance</div>
          <div>Effective Blogs</div>
          <div>Printer Installation and Solutions</div>
          <div>Optimizing Printer Performance</div>
        </div>
      </div>
    </div>

    <div class="section reverse">
      <div class="image">
        <img src="images/onsite.png" alt="Stats" style="width: 60%; max-width: 500px;" />
      </div>
      <div class="text">
        <h4>Impressive Figures</h4>
        <h2>Your One-Stop Trusted Printer Solutions</h2>
        <p>We provide you with easy help via our blogs and experience the best results from our reliable solution from our experts.</p>
        <div class="stats-boxes">
          <div class="stats-box">
            <h3>34.5K+</h3>
            <p>Satisfied clients worldwide.</p>
          </div>
          <div class="stats-box">
            <h3>40K+</h3>
            <p>Projects completed with accuracy.</p>
          </div>
          <div class="stats-box">
            <h3>1K+</h3>
            <p>Blogs posted with fixes & tips.</p>
          </div>
        </div>
      </div>
    </div>

    <div class="section">
      <div class="image">
        <img src="images/best_service.png" alt="Printer Maintenance" style="width: 60%; max-width: 500px;" />
      </div>
      <div class="text">
        <h4>Why Choose Us</h4>
        <h2>Excellence Delivered for You</h2>
        <p>We offer a comprehensive range of one-stop printer maintenance and DIY Solutions blogs for domestic and commercial spaces.</p>
        <p><strong>Professional Assistance:</strong> Delivered with precision and effectiveness by our expert team.</p>
        <p><strong>Quick Help:</strong> Well-defined, professional, and meaningful solutions for printer performance.</p>
        <p><strong>On-time Fixes:</strong> We guide users with DIY support for fast resolution.</p>
      </div>
    </div>
  </div>
<?php include 'footer.php'; ?>
</body>
</html>