<?php
// Optional: PHP code to handle dynamic content or other logic can be added here
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="google-site-verification" content="ZwFoNypImBjm5Agh5kNB1q1d_PFXx7rmL5eoX7owPKo" />
  <title>Interior Car Detailing</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    /* General Reset */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    /* Body and Basic Styling */
    body {
      font-family: Arial, sans-serif;
      line-height: 1.6;
      background-color: #f4f4f4;
      color: #333;
    }

    /* Header styles */
    header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 20px;
      background-color: #333;
      color: #fff;
    }

    .logo {
      font-size: 1.5rem;
      font-weight: bold;
    }

    nav {
      display: flex;
      align-items: center;
      height: 50px;
    }

    nav ul {
      list-style: none;
      display: flex;
      margin-right: 20px;
    }

    nav ul li {
      margin: 0 15px;
      position: relative;
    }

    nav ul li a {
      color: #fff;
      text-decoration: none;
      font-size: 1rem;
    }

    /* Dropdown menu styles */
    nav ul li ul {
      display: none;
      position: absolute;
      top: 100%;
      left: 0;
      background-color: #000;
      padding: 0;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      z-index: 1000;
      min-width: 150px;
    }

    nav ul li:hover ul {
      display: block;
    }

    nav ul li ul li {
      margin: 0;
      padding: 10px;
      border-bottom: 1px solid #fff;
    }

    nav ul li ul li:last-child {
      border-bottom: none;
    }

    nav ul li ul li a {
      color: #fff;
      text-decoration: none;
      display: block;
      padding: 10px;
      transition: background-color 0.3s ease;
    }

    nav ul li ul li a:hover {
      background-color: #444;
    }

    /* Highlighted button */
    .highlight-btn {
      background-color: #ff5722;
      color: white;
      padding: 10px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    .highlight-btn:hover {
      background-color: #ff784e;
    }

    .highlight-btn a {
      color: white;
      text-decoration: none;
    }

    /* Main Content Section */
    .main-content {
      display: flex;
      padding: 50px;
      justify-content: space-between;
      align-items: center;
    }

    .main-content .left {
      width: 45%;
    }

    .main-content .left img {
      width: 100%;
      height: auto;
      border-radius: 10px;
    }

    .main-content .right {
      width: 45%;
    }

    .main-content .right h1 {
      font-size: 2rem;
      color: #00509e;
      margin-bottom: 20px;
    }

    .main-content .right p {
      font-size: 1.1rem;
      color: #555;
    }

    /* Article Section */
    h1, h2 {
      color: #0077c8;
    }

    h1 {
      text-align: center;
      font-size: 2.5rem;
      margin-top: 30px;
    }

    h2 {
      font-size: 2rem;
      margin-top: 30px;
      margin-bottom: 10px;
      border-bottom: 2px solid #0077c8;
      padding-bottom: 5px;
    }

    p {
      font-size: 1.2rem;
      margin: 10px 0;
    }

    ul {
      list-style-type: disc;
      margin-left: 20px;
      margin-bottom: 20px;
    }

    ul li {
      font-size: 1.1rem;
      margin: 5px 0;
    }

    /* Footer Section */
    footer {
      background-color: #333;
      color: #fff;
      padding: 20px;
      margin-top: 50px;
    }

    footer .footer-content {
      display: flex;
      justify-content: space-between;
    }

    footer .left, footer .right {
      width: 45%;
    }

    footer p {
      font-size: 1rem;
    }

    footer ul {
      list-style: none;
      padding: 0;
    }

    footer ul li {
      margin-bottom: 10px;
    }

    footer ul li a {
      color: #fff;
      text-decoration: none;
    }

    /* Mobile Responsiveness */
    @media (max-width: 768px) {
      .main-content {
        flex-direction: column;
        padding: 20px;
      }

      .main-content .left, .main-content .right {
        width: 100%;
      }

      h1 {
        font-size: 2rem;
      }

      h2 {
        font-size: 1.5rem;
      }
    }

    a {
      text-decoration: none;
    }
  </style>
</head>
<body>

  <!-- Header Section -->
  <header>
    <div class="logo"><img src="logo.png" width="200" alt="Company Logo"></div>
    <nav>
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="#">Services</a>
          <ul>
            <li><a href="Ceramic-coating-miami.php">Ceramic coating Miami</a></li>
            <li><a href="Paint-correction.php">Paint correction</a></li>
          </ul>
        </li>
        <li><a href="contact.php">Contact Us</a></li>
      </ul>
      <button class="highlight-btn"><a href="https://soflosuds.com/contact/#contact-form" target="_blank">BOOK ONLINE</a></button>
    </nav>
  </header>

  <!-- Main Content Section -->
  <section class="main-content">
    <div class="left">
      <img src="coverimage.jpg" alt="Cover Image">
    </div>
    <div class="right">
      <h1>Experts With Over 5 Years Of Experience</h1>
      <p>At SoFlo Suds Auto Detailing & Ceramic Coating, our passion is in the details. With 5 years of industry experience, we deliver exceptional mobile detailing services, using the latest products and techniques. Offering hand washes, interior/exterior detailing, paint correction, and ceramic coating, we cater to all budgets and needs. Whether it’s cars, boats, or RVs, we come to you for hassle-free, premium care. Need a custom service? We’ve got you covered. Trust SoFlo Suds for a vehicle that shines, wherever you are.</p>
    </div>
  </section>

  <h1>Soflo Suds <a href="https://soflosuds-mmjq.vercel.app/">Auto Detailing</a> and Ceramic Coating – Premier Car Detailing in Miami, FL</h1>
  <p>Welcome to Soflo Suds Auto Detailing and Ceramic Coating, your trusted partner for top-tier car detailing in Miami, FL. Our mission is to provide the highest level of care and protection for your vehicle, ensuring it looks and performs at its best, regardless of the Miami climate.</p>

  <h2>Expert Car Detailing in Miami, FL</h2>
  <img src="img.jpg" alt="Car Detailing">
  <p>Miami’s sun, humidity, and road conditions can take a toll on your vehicle’s appearance. At Soflo Suds, we specialize in professional car detailing services that protect your investment while enhancing its appearance. From thorough exterior washes to meticulous interior detailing, we handle every inch of your vehicle with precision and care.</p>

  <h3>Exterior Detailing</h3>
  <p>Keep your car’s paint pristine with our comprehensive exterior detailing services. We use premium products to wash, wax, and polish your vehicle, bringing out its natural shine while providing lasting protection against Miami’s elements.</p>
  <ul>
    <li>Hand Wash & Wax</li>
    <li>Clay Bar Treatment</li>
    <li>Scratch Removal</li>
    <li>Polishing & Paint Protection</li>
  </ul>

  <h3>Interior Detailing</h3>
  <p>Transform your car’s interior with our deep cleaning services. We restore the fresh, clean feel of your cabin by removing dirt, stains, and odors, leaving your vehicle feeling as good as new.</p>
  <ul>
    <li>Vacuuming & Carpet Cleaning</li>
    <li>Leather Conditioning</li>
    <li>Surface Sanitization</li>
    <li>Odor Removal</li>
  </ul>

  <h2><a href="https://soflosuds.com/">Ceramic Coating in Miami, FL</a></h2>
  <p>Looking for long-term protection? Our <a href="Ceramic-Coating-Miami.php">ceramic coating services</a> are designed to protect your vehicle’s paint from the harsh Miami environment. The durable coating forms a protective barrier that shields your car from UV rays, dirt, and water, all while providing a mirror-like finish that lasts for years.</p>

  <h2>Why Choose Soflo Suds?</h2>
  <ul>
    <li><strong>Experienced Technicians:</strong> With years of experience in the industry, our team is dedicated to providing superior detailing services.</li>
    <li><strong>Eco-Friendly Products:</strong> We use high-quality, eco-friendly products that are safe for your vehicle and the environment.</li>
    <li><strong>Customer Satisfaction:</strong> We’re committed to ensuring that every customer leaves with a car that looks better than ever.</li>
  </ul>

  <!-- Footer Section -->
  <footer>
    <div class="footer-content">
      <div class="left">
        <p>About Our Company</p>
        <p>Our company, SoFlo Suds, specializes in mobile auto detailing and ceramic coating services in Miami, FL. We offer top-tier exterior and interior detailing, paint correction, and ceramic coatings for cars, boats, and RVs, all delivered conveniently to your location.</p>
      </div>
      <div class="right">
        <p><strong>Our Location:</strong> 1299 W 72nd St, Hialeah, FL 33014, United States</p>
        <p><strong>Phone:</strong> +1 (305)912-9212</p>
        <p><strong>Email:</strong> support@soflosuds.com</p>
      </div>
    </div>
  </footer>

</body>
</html>
