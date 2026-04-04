<?php include 'header.php'; ?>
<?php include 'navbar.php'; ?>

<header class="page-header">
    <h1>Our Firearms Collection</h1>
</header>

<section class="products-grid">

<?php

$weapons = [

    
    "benelli.jpg" => "Benelli Shotgun Set",

    "bexar-arms-unsplash.jpg" => " Rifle",
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

    "steve.jpg" => "pistol and Holsters",

    "stngr.jpg" => "AR-15 Tactical",
    "stngr-llc.jpg" => "Sniper Rifle",
    "stngr-llc-q.jpg" => "Long Range AR",
    "stngr-llc-Y.jpg" => "Marksman Rifle",
    "tom-def-M.jpg" => "pistol Display",
    
    
    "thomas-tucker-l.jpg" => "thomas-tucker Rifle",
    "thomas-tucker-NFh.jpg" => "thomas-tucker-NFh Rifle",
    "thomas-tucker-V.jpg" => "Shotgun thomas-tucker",
    "austin.jpg" => "Tactical Rifle",
    "jay-r.jpg" => "Modern Pistol",
    "bexar2-arms-unsplash.jpg" => "Tactical Carbine",
    
    "kemal.jpg" => "Operator Rifle",
    "thomas.jpg" => "Battle pistol",
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

<?php include 'footer.php'; ?>
