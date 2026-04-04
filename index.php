<?php include 'header.php'; ?>
<?php include 'navbar.php'; ?>

<header id="home" class="hero">
    <h1>Welcome to Ghazi Arms Industries</h1>
    <p>Premium Firearms Manufacturing & Defence Equipment</p>
    <a href="#products" class="btn">Explore Products</a>
</header>

<!-- ===========================
     WEAPONS SLIDER SECTION
=========================== -->
    <section class="weapons-slider-section">
    <h2 class="slider-title">Featured Weapons</h2>

    <div class="slider-wrapper">

        <!-- ARROWS -->
        <button class="slider-btn prev">&#10094;</button>
        <button class="slider-btn next">&#10095;</button>

        <div class="slider-container">
            <div class="slider-track">

                <img src="images/austin.jpg" alt="Weapon">
                <img src="images/benelli.jpg" alt="Weapon">
                <img src="images/bexar-arms-unsplash.jpg" alt="Weapon">
                <img src="images/bexar1-arms-unsplash.jpg" alt="Weapon">
                <img src="images/bexar2-arms-unsplash.jpg" alt="Weapon">
                <img src="images/david.jpg" alt="Weapon">
                <img src="images/jay.jpg" alt="Weapon">
                <img src="images/kemal.jpg" alt="Weapon">
                <img src="images/martin.jpg" alt="Weapon">
                <img src="images/scott.jpg" alt="Weapon">
                <img src="images/stngr.jpg" alt="Weapon">
                <img src="images/thomas.jpg" alt="Weapon">

            </div>
        </div>
    </div>
<!-- POPUP MODAL -->
<div id="imageModal" class="modal">
    <span class="close">&times;</span>
    <img class="modal-content" id="popupImg">
</div>

</section>

<main class="content">

    <section class="main-section">
        <h2>Our Legacy</h2>
        <p>
            Ghazi Arms Industries is a leading defence manufacturer delivering precision firearms, 
            tactical equipment, and custom solutions for military and law enforcement agencies.
        </p>
        <img src="images/martin.jpg" alt="Arms Industry">
    </section>

    <aside class="sidebar">
        <h3>Quick Links</h3>
        <ul>
            <li><a href="#products">Latest Products</a></li>
            <li><a href="#about">Company Profile</a></li>
            <li><a href="#contact">Become a Dealer</a></li>
        </ul>

        <img src="images/stngr-llc.jpg" alt="Factory Image">
    </aside>

</main>

<section id="about" class="page-content about-section">
    <div class="about-main">
        <h2>Who We Are</h2>
        <p>
            We specialize in crafting high-performance rifles, pistols, shotguns, and tactical 
            combat equipment — built with dedication and precision engineering.
        </p>
        <p>
            Ghazi Arms Industries combines decades of defence manufacturing experience with 
            modern design, strict quality control, and responsive support for military, law enforcement, 
            and tactical professionals.
        </p>
        <p>
            Our focus is on precision, reliability, and innovation across every product line — from 
            custom small arms to complete tactical systems.
        </p>
    </div>

    <aside class="about-aside">
        <h3>Company Highlights</h3>
        <ul>
            <li>Established in 1985 with over 35 years of industry leadership</li>
            <li>Certified defence manufacturing and export-ready production</li>
            <li>In-house engineering, testing, and assembly</li>
            <li>Trusted by agencies and dealers across the region</li>
        </ul>
        <p><strong>Location:</strong> Peshawar, Pakistan</p>
        <p><strong>Specialties:</strong> Firearms, tactical equipment, custom systems, training support</p>
        <img src="images/about.jpg" alt="Company Image">
    </aside>
</section>

<section id="products" class="products-grid">
    <?php
    $weapons = [
        "benelli.jpg" => "Benelli Shotgun Set",
        "bexar-arms-unsplash.jpg" => "Rifle",
        "bexar1-arms-unsplash.jpg" => "AR Platform Rifle",
        "bexar unsplash.jpg" => "Rifle Setup",
        "david.jpg" => "Scoped Rifle",
        "dusty.jpg" => "Hunting Rifle",
        "jay.jpg" => "9mm Handgun",
        "jay-rembert.jpg" => "Pistol with Magazine",
        "jay-rembert-x.jpg" => "Gold Tactical Pistol",
        "martin.jpg" => "Assault Rifle",
        "scott.jpg" => "Shotgun A",
        "scott-s.jpg" => "Shotgun B",
        "scott-sz.jpg" => "Shotgun C",
        "steve.jpg" => "Pistol and Holsters",
        "stngr.jpg" => "AR-15 Tactical",
        "stngr-llc.jpg" => "Sniper Rifle",
        "stngr-llc-q.jpg" => "Long Range AR",
        "stngr-llc-Y.jpg" => "Marksman Rifle",
        "tom-def-M.jpg" => "Pistol Display",
        "thomas-tucker-l.jpg" => "Thomas Tucker Rifle",
        "thomas-tucker-NFh.jpg" => "Thomas Tucker Rifle",
        "thomas-tucker-V.jpg" => "Shotgun Thomas Tucker",
        "austin.jpg" => "Tactical Rifle",
        "jay-r.jpg" => "Modern Pistol",
        "bexar2-arms-unsplash.jpg" => "Tactical Carbine",
        "kemal.jpg" => "Operator Rifle",
        "thomas.jpg" => "Battle Pistol",
    ];

    foreach ($weapons as $file => $name) {
        echo "
        <div class='product-card'>
            <img src='images/$file' alt='$name'>
            <h3>$name</h3>
            <p>High-quality tactical firearm designed for professional use.</p>
        </div>";
    }
    ?>
</section>

<section id="contact" class="contact-section">
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

<!-- ===========================
     WEAPONS SLIDER SCRIPT
=========================== -->
<script>
    const track = document.querySelector('.slider-track');
    const clone = track.innerHTML;
    track.innerHTML += clone; // duplicate for smooth infinite loop

    
let sliderTrack = document.querySelector(".slider-track");

// Duplicate images for infinite effect
sliderTrack.innerHTML += sliderTrack.innerHTML;

// ARROW BUTTONS
const nextBtn = document.querySelector(".next");
const prevBtn = document.querySelector(".prev");

let position = 0;

nextBtn.onclick = () => {
    position -= 300;
    sliderTrack.style.transform = `translateX(${position}px)`;
};

prevBtn.onclick = () => {
    position += 300;
    sliderTrack.style.transform = `translateX(${position}px)`;
};

// IMAGE MODAL POPUP
const modal = document.getElementById("imageModal");
const modalImg = document.getElementById("popupImg");
const closeBtn = document.querySelector(".close");

document.querySelectorAll(".slider-track img").forEach(img => {
    img.addEventListener("click", () => {
        modal.style.display = "block";
        modalImg.src = img.src;
    });
});

closeBtn.onclick = () => modal.style.display = "none";
window.onclick = (e) => { if (e.target === modal) modal.style.display = "none"; }

const navLinks = document.querySelectorAll('.navbar ul li a');

function updateNavActive() {
    const currentHash = window.location.hash || '#home';
    navLinks.forEach(link => {
        const targetHash = link.getAttribute('href').includes('#')
            ? '#' + link.getAttribute('href').split('#').pop()
            : '#home';
        link.classList.toggle('active', targetHash === currentHash);
    });
}

updateNavActive();
window.addEventListener('hashchange', updateNavActive);
</script>

