<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QuickPOS - The Smartest POS for Your Business</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<!-- HEADER -->
<header>
    <div class="container">
        <div class="logo">QuickPOS</div>
        <nav>
            <a href="#hero">Home</a>
            <a href="#features">Features</a>
            <a href="#pricing">Pricing</a>
            <a href="#contact">Contact</a>
        </nav>
        <a href="#contact" class="btn-signup">Sign Up Free</a>
    </div>
</header>

<!-- HERO SECTION -->
<section id="hero">
    <div class="container">
        <h1>The Smartest POS for Your Business</h1>
        <p>Manage sales, inventory and staff from one place. Fast, simple, powerful.</p>
        <a href="#contact" class="btn-main">Get Started Free</a>
    </div>
</section>

<!-- FEATURES SECTION -->
<section id="features">
    <div class="container">
        <h2>Why Choose QuickPOS?</h2>
        <div class="features-grid">
            <div class="feature-card">
                <div class="icon">⚡</div>
                <h3>Fast Checkout</h3>
                <p>Process sales in seconds with our lightning fast checkout system.</p>
            </div>
            <div class="feature-card">
                <div class="icon">📊</div>
                <h3>Sales Analytics</h3>
                <p>Get detailed reports and insights about your business performance.</p>
            </div>
            <div class="feature-card">
                <div class="icon">📦</div>
                <h3>Inventory Management</h3>
                <p>Track your stock levels in real time and never run out again.</p>
            </div>
            <div class="feature-card">
                <div class="icon">👥</div>
                <h3>Staff Management</h3>
                <p>Manage your team, shifts and permissions all in one place.</p>
            </div>
        </div>
    </div>
</section>

<!-- PRICING SECTION -->
<section id="pricing">
    <div class="container">
        <h2>Simple Pricing</h2>
        <div class="pricing-grid">
            <div class="pricing-card">
                <h3>Basic</h3>
                <div class="price">$9<span>/month</span></div>
                <ul>
                    <li>1 Register</li>
                    <li>Basic Reports</li>
                    <li>Email Support</li>
                </ul>
                <a href="#contact" class="btn-main">Get Started</a>
            </div>
            <div class="pricing-card popular">
                <div class="popular-badge">Most Popular</div>
                <h3>Pro</h3>
                <div class="price">$29<span>/month</span></div>
                <ul>
                    <li>5 Registers</li>
                    <li>Advanced Reports</li>
                    <li>Priority Support</li>
                </ul>
                <a href="#contact" class="btn-main">Get Started</a>
            </div>
            <div class="pricing-card">
                <h3>Enterprise</h3>
                <div class="price">Custom</div>
                <ul>
                    <li>Unlimited Registers</li>
                    <li>Custom Reports</li>
                    <li>24/7 Support</li>
                </ul>
                <a href="#contact" class="btn-main">Contact Us</a>
            </div>
        </div>
    </div>
</section>

<!-- CONTACT FORM -->
<section id="contact">
    <div class="container">
        <h2>Contact Us</h2>
        <form action="process-form.php" method="POST">
            <input type="text" name="name" placeholder="Your Name" required>
            <input type="email" name="email" placeholder="Your Email" required>
            <textarea name="message" placeholder="Your Message" rows="5" required></textarea>
            <button type="submit" class="btn-main">Send Message</button>
        </form>
    </div>
</section>

<!-- FOOTER -->
<footer>
    <div class="container">
        <p>&copy; 2025 QuickPOS. All rights reserved.</p>
        <div class="social-links">
            <a href="#">Twitter</a>
            <a href="#">Instagram</a>
            <a href="#">LinkedIn</a>
        </div>
    </div>
</footer>

</body>
</html>