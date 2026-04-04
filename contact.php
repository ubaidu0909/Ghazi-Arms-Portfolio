<?php include 'header.php'; ?>
<?php include 'navbar.php'; ?>

<header class="page-header">
    <h1>Contact Us</h1>
</header>

<section class="contact-section">
    
    <form class="contact-form" method="POST" action="">
        <label>Your Name</label>
        <input type="text" name="name" required>

        <label>Email</label>
        <input type="email" name="email" required>

        <label>Message</label>
        <textarea name="message" required></textarea>

        <button type="submit">Send Message</button>
    </form>

    <div class="contact-info">
        <h3>Our Office</h3>
        <p><b>Address:</b> Plot 16/17-A Small Industrial Estate (S.I.E) Kohat Road, Peshawar, Pakistan</p>
        <p><b>Phone:</b> +92 3339429962</p>
        <p><b>Email:</b> info@ghaziarms.com</p>
        <p><b>Email for Inquiries:</b> gk376643@gmail.com</p>
        
        <img src="https://images.pexels.com/photos/3184308/pexels-photo-3184308.jpeg" alt="Office">

    </div>

</section>

<?php include 'footer.php'; ?>
