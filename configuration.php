<?php
require('vendor/autoload.php');

\Paydunya\Setup::setMasterKey("JG0bsnfg-8rNM-YzJW-LAZ7-k76ymif1ZlpA");
\Paydunya\Setup::setPublicKey("test_public_vnfCGPaMeaNJECAwoatqEqY5ZU9");
\Paydunya\Setup::setPrivateKey("test_private_8uUhyEohwCjh2xSDxDt6tK8UPOX");
\Paydunya\Setup::setToken("x4ycybJBF1ZJh4A8lndD");
\Paydunya\Setup::setMode("test");

//Configuration de la boutique

\Paydunya\Checkout\Store::setName("CrowdEdu Africa"); // Seul le nom est requis
\Paydunya\Checkout\Store::setTagline("Une éducation pour tous");
\Paydunya\Checkout\Store::setPhoneNumber("773627942");
\Paydunya\Checkout\Store::setPostalAddress("Dakar Plateau - Karack");
\Paydunya\Checkout\Store::setWebsiteUrl("http://www.crowdeduafrica.com/d2");
//URL apres annulation du paiement
\Paydunya\Checkout\Store::setCancelUrl("http://127.0.0.1:8000");
//\Paydunya\Checkout\Store::setReturnUrl("http://127.0.0.1:8000");
//Instant payment notification
\Paydunya\Checkout\Store::setCallbackUrl("http://127.0.0.1:8000/status");




//Configuration IPN





?>