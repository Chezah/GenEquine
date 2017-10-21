<?php
header('content-type: text/html; charset=utf-8');
//error_reporting(0);
session_start();

ob_start();


require_once '/partials/header.php';
?>
<main>
    <section id="coverRB" class="valign-wrapper">
        <div class="container">
            <div class="row">
                <div class="col s12">
                    <h1 class="center valign">Les différtentes robes</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col s12">

                    <ul>Gène Extension :
                        <li><a href="n&a">Noir & Alezan</a></li></ul>
                    
                    <ul>Les robes diluées : 
                        <li>Agouti</li>
                        <li>Creme</li>
                        <li>Perle</li> 
                        <li>Champagne</li>
                        <li>Dun</li>
                        <li>Silver</li></ul>
                    
                    <ul>Les robes pies :
                        <li>Tobiano</li>
                        <li>Overo</li>
                        <li>Sabino</li>
                        <li>Dominant White</li></ul>
 
                    <ul>Complexe Leopard : 
                        <li>Few Spot</li>
                        <li>Leopard</li>
                        <li>Capé taché capé</li> 
                        <li>Varnish roan</li>
                        <li>Frost</li></ul>
 
                    <ul>Gène Roan : 
                        <li>Alezan Roan</li>
                        <li>Bai Roan</li>
                        <li>Noir Roan</li></ul>
 
                    <ul>Autres gènes : 
                        <li>Gris</li>
                        <li>Rabicano</li>
                        <li>Splash White</li> 
                        <li>Mushroom</li>
                        <li>Bringé</li></ul>
                    
                </div>
            </div>
        </div>
    </section>
</main>


<?php 
# Footer
require_once '/partials/footer.php';
?>