<?php

$APP_URL = 'https://freeqrcodes.baijid.com.bd';

// Get the current page name
$current_page = basename($_SERVER['PHP_SELF']);
$current_page = preg_replace('/\.(html|php)$/', '', $current_page);
$current_page = preg_replace('/\.(html)$/', '', $current_page);

// Set default values
$page_title = 'home | Free QR Codes';
$meta_description = 'Generate free QR codes instantly for URLs, text, email, and more. No sign-up required. Create custom QR codes with our easy-to-use online tool.';
$meta_keywords = 'QR code generator, free QR codes, custom QR codes, URL to QR, text to QR, email QR code';

// Change metadata based on the page
switch ($current_page) {
  case 'index':
    $page_title = 'Home | Free QR Codes';
    $meta_description = 'Welcome to Free QR Codes - the ultimate QR code generator. Generate custom QR codes instantly.';
    $meta_keywords = 'QR code generator, free QR codes, online QR generator, custom QR codes, generate QR codes, QR codes for business';
    break;

  case 'about':
    $page_title = 'About Us | Free QR Codes';
    $meta_description = 'Learn about Free QR Codes, the ultimate tool for creating custom QR codes effortlessly.';
    $meta_keywords = 'about free QR codes, QR code tool, QR code generator mission, free online QR codes, QR code benefits';
    break;

  case 'contact':
    $page_title = 'Contact Us | Free QR Codes';
    $meta_description = 'Reach out to Free QR Codes for support and inquiries. We are here to help!';
    $meta_keywords = 'contact Free QR Codes, QR code generator support, free QR code tool contact, QR code inquiries';
    break;

  case 'faq':
    $page_title = 'FAQ | Free QR Codes';
    $meta_description = 'Have questions? Find answers to common queries about our free QR code generator.';
    $meta_keywords = 'FAQ Free QR Codes, QR code questions, how to generate QR codes, free QR code guide, custom QR code help';
    break;

  case 'brands':
    $page_title = 'Brands | Free QR Codes';
    $meta_description = 'Discover top brands using Free QR Codes for innovative solutions. Generate QR codes tailored to your business needs.';
    $meta_keywords = 'top brands, business QR codes, trusted brands, QR code solutions, brand innovation, free QR codes for business';
    break;

  default:
    $page_title = 'Home | Free QR Codes';
    $meta_description = 'Generate free QR codes instantly for various purposes, including URLs, text, and more.';
    $meta_keywords = 'free QR codes, generate QR codes online, QR code generator, easy QR codes, QR codes for all uses';
    break;
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $page_title ?></title>

  <!-- favicon -->
  <link rel="icon" href="/public/images/icons/favicon.ico" type="image/x-icon">

  <!-- SEO Meta Tags -->
  <meta name="description" content="<?= $meta_description ?>">
  <meta name="keywords" content="<?= $meta_keywords ?>">

  <meta name="robots" content="index, follow">

  <!-- Open Graph / Facebook -->
  <meta property="og:type" content="website">
  <meta property="og:url" content="<?= $APP_URL . '/' . $current_page ?>.html">
  <meta property="og:title" content="<?= $page_title ?>">
  <meta property="og:description" content="<?= $meta_description ?>">
  <meta property="og:image" content="<?= $APP_URL ?>/public/images/og-image.png">

  <!-- Twitter -->
  <meta property="twitter:card" content="image">
  <meta property="twitter:url" content="<?= $APP_URL . '/' . $current_page ?>.html">
  <meta property="twitter:title" content="<?= $page_title ?>">
  <meta property="twitter:description" content="<?= $meta_description ?>">
  <meta property="twitter:image" content="<?= $APP_URL ?>/public/images/og-image.png">

  <!-- no index meta tag -->
  <!-- <meta name="robots" content="noindex"> -->

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />
  <script src="https://cdn.tailwindcss.com/?plugins=forms"></script>

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com/">
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&amp;display=swap" rel="stylesheet">
  
  <link rel="stylesheet" href="./public/css/style.css">
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>

</head>

<body class="flex flex-col min-h-screen bg-gray-100">

  <!-- Header -->
  <header class="z-[9999]">
    <nav class="max-w-7xl mx-auto px-4">
      <div class="flex justify-between items-center">

        <a href="<?= $APP_URL ?>" class="flex items-center">
          <img src="public/images/freeqrcodes.png" fetchpriority="high" width="210" height="30" alt="Free QR Codes"
            class="mr-2 logo" decoding="async">
        </a>

        <ul class="hidden fixed top-0 right-0 px-10 py-16 bg-gray-800 z-50
                    md:relative md:flex md:p-0 md:bg-transparent md:flex-row font-semibold" id="menu">
          <li class="md:hidden z-90 fixed top-4 right-6">
            <a href="javascript:void(0)" class="text-right text-white text-4xl" onclick="toggleMenu()">×</a>
          </li>

          <li class="my-5 md:my-0 py-2.5 px-3 lg:py-5 xl:px-5"><a href="<?= $APP_URL ?>"
              class="text-white md:text-gray-700 hover:text-violet-600">Home</a></li>
          <li class="my-5 md:my-0 py-2.5 px-3 lg:py-5 xl:px-5"><a href="<?= $APP_URL ?>/about.html"
              class="text-white md:text-gray-700 hover:text-violet-600 ">About</a></li>

          <li class="my-5 md:my-0 py-2.5 px-3 lg:py-5 xl:px-5"><a href="<?= $APP_URL ?>/brands.html"
              class="text-white md:text-gray-700 hover:text-violet-600">Brands</a></li>

          <li class="my-5 md:my-0 py-2.5 px-3 lg:py-5 xl:px-5"><a href="<?= $APP_URL ?>/faq.html"
              class="text-white md:text-gray-700 hover:text-violet-600">FAQ</a></li>

        </ul>

        <div class="flex items-center gap-4 min-w-52 justify-end">
          <a href="<?= $APP_URL ?>/contact.html"
            class="px-4 py-2 text-white font-semibold bg-violet-600 hover:bg-violet-700 rounded-md">Contact<i
              class="fa fa-arrow-right ml-1 transform -rotate-45"></i></a>

          <!-- This is used to open the menu on mobile devices -->
          <div class="flex items-center md:hidden">
            <button class="duration-300 hover:opacity-100 opacity-70" aria-label="Open Menu" onclick="toggleMenu(this)"
              style="width: 30px;font-size: 18px;">
              <i class="fa-solid fa-bars"></i>
            </button>
          </div>
        </div>

      </div>
    </nav>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="hidden bg-violet-100 p-4 space-y-4">
      <a href="<?= $APP_URL ?>/index.html" class="block hover:text-violet-400">Home</a>
      <a href="<?= $APP_URL ?>/about.html" class="block hover:text-violet-400">About</a>
      <a href="<?= $APP_URL ?>/brand.html" class="block hover:text-violet-400">Brands</a>
      <a href="<?= $APP_URL ?>/faq.html" class="block hover:text-violet-400">FAQ</a>
      <a href="<?= $APP_URL ?>/contact.html" class="block hover:text-violet-400">Contact</a>
    </div>
  </header>