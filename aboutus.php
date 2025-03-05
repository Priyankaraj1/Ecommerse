<?php
include 'includes/header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>About Us | Life Style Store</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>
<body>
      <style> 
        /* About Us Page Styles */
.about-container {
    max-width: 900px;
    margin: 50px auto;
    padding: 20px;
    background: #fff;
    border-radius: 10px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    text-align: center;
}

.about-content h1 {
    color: #333;
    font-size: 32px;
    margin-bottom: 20px;
}

.about-content p {
    font-size: 18px;
    color: #555;
    line-height: 1.6;
    margin-bottom: 20px;
}

.about-content h2 {
    color: #007bff;
    font-size: 24px;
    margin-top: 30px;
}

.about-content ul {
    list-style: none;
    padding: 0;
}

.about-content ul li {
    font-size: 18px;
    color: #666;
    padding: 8px 0;
}

/* Responsive Design */
@media (max-width: 768px) {
    .about-container {
        margin: 20px;
        padding: 15px;
    }

    .about-content h1 {
        font-size: 28px;
    }

    .about-content p, .about-content ul li {
        font-size: 16px;
    }
}

      </style>
    <div class="about-container">
        <div class="about-content">
            <h1>About Life Style Store</h1>
            <p>Welcome to Life Style Store, your ultimate destination for fashion and lifestyle products. We bring you the latest trends in men's, women's, and kids' fashion, along with premium accessories.</p>
            
            <h2>Our Story</h2>
            <p>Founded with a passion for style and quality, Life Style Store has been delivering top brands and exclusive collections to customers worldwide. Our mission is to make fashion accessible to everyone.</p>

            <h2>Why Choose Us?</h2>
            <ul>
                <li>🛍️ Wide range of fashion products</li>
                <li>🚚 Fast and reliable shipping</li>
                <li>💯 100% authentic brands</li>
                <li>💳 Secure payments and easy returns</li>
                <li>👗 Trendy and stylish collections</li>
            </ul>

            <h2>Contact Us</h2>
            <p>📍 Address: 123, Fashion Street,Banglore,India</p>
            <p>📧 Email: support@lifestylestore.com</p>
            <p>📞 Phone: +1 234 567 890</p>
        </div>
    </div>

<?php
include 'includes/footer.php';
?>
</body>
</html>
