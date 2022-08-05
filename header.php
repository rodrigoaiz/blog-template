<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="robots" content="index, follow" />
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-ES9QS7BKLV"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-ES9QS7BKLV');
  </script>
  <?php
    wp_head();
  ?>
  <meta name="title" content="Rodrigo Aizpuru - Front-End Web Designer Portfolio">
  <meta name="description" content="My name is Rodrigo Aizpuru, I'm a mexican designer working on Front-End Web.">
  <meta name="keywords" content="front-end, web, desing, porfolio, diseño">
  <meta name="robots" content="index, follow">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="language" content="English">
  <meta name="author" content="Rodrigo Aizpuru">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Open Graph / Facebook -->
  <meta property="og:type" content="website">
  <meta property="og:url" content="https://rodrigoaizpuru.com/">
  <meta property="og:title" content="Rodrigo Aizpuru - Front-End Web Designer">
  <meta property="og:description" content="My name is Rodrigo Aizpuru, I'm a mexican designer working on Front-End Web. ">
  <meta property="og:image" content="https://rodrigoaizpuru.com/assets/socials.jpg">

  <!-- Twitter -->
  <meta property="twitter:card" content="summary_large_image">
  <meta property="twitter:url" content="https://rodrigoaizpuru.com/">
  <meta property="twitter:title" content="Rodrigo Aizpuru - Front-End Web Designer">
  <meta property="twitter:description" content="My name is Rodrigo Aizpuru, I'm a mexican designer working on Front-End Web. ">
  <meta property="twitter:image" content="https://rodrigoaizpuru.com/assets/socials.jpg">

</head>
<body>
    <header id="header" class="header">
      <h1 class="header__h1"><a href="rodrigoaizpuru.com/blog" class="a"><?php echo get_bloginfo('name');?></a></h1>
      <?php
        wp_nav_menu(
          array(
            'menu' => 'primary',
            'container' => '',
            'theme_location' => 'primary',
            'items_wrap' => '<nav class="header__nav"><ul class="header__nav__ul">%3$s</ul></nav>',
          )
        );
      ?>
      <!-- <nav class="header__nav">
          <ul class="header__nav__ul">
              <li class="li"><a href="#works" class="btn a">Portafolio</a></li>
              <li class="li"><a href="#about" class="btn a">Entradas</a></li>
          </ul>
      </nav> -->
    </header>
    <main>
      <div class="redes animate__animated animate__bounceInLeft animate__delay-0s" id="redes">
        <ul class="redes__ul ">
            <li class="redes__ul__li">
              <a href="https://www.linkedin.com/in/rodrigo-aizpuru/" target="_blank" class="redes__a">
                <svg xmlns="http://www.w3.org/2000/svg"
                  fill="currentColor" class="redes__svg" viewBox="0 0 16 16">
                  <path
                    d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z" />
                </svg>
              </a>
            </li>
            <li class="redes__ul__li">
              <a href="https://www.behance.net/rodrigo-aizpuru" target="_blank" class="redes__a">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="redes__svg"
                  viewBox="0 0 16 16">
                  <path
                    d="M4.654 3c.461 0 .887.035 1.278.14.39.07.711.216.996.391.286.176.497.426.641.747.14.32.216.711.216 1.137 0 .496-.106.922-.356 1.242-.215.32-.566.606-.997.817.606.176 1.067.496 1.348.922.281.426.461.957.461 1.563 0 .496-.105.922-.285 1.278a2.317 2.317 0 0 1-.782.887c-.32.215-.711.39-1.137.496a5.329 5.329 0 0 1-1.278.176L0 12.803V3h4.654zm-.285 3.978c.39 0 .71-.105.957-.285.246-.18.355-.497.355-.887 0-.216-.035-.426-.105-.567a.981.981 0 0 0-.32-.355 1.84 1.84 0 0 0-.461-.176c-.176-.035-.356-.035-.567-.035H2.17v2.31c0-.005 2.2-.005 2.2-.005zm.105 4.193c.215 0 .426-.035.606-.07.176-.035.356-.106.496-.216s.25-.215.356-.39c.07-.176.14-.391.14-.641 0-.496-.14-.852-.426-1.102-.285-.215-.676-.32-1.137-.32H2.17v2.734h2.305v.005zm6.858-.035c.286.285.711.426 1.278.426.39 0 .746-.106 1.032-.286.285-.215.46-.426.53-.64h1.74c-.286.851-.712 1.457-1.278 1.848-.566.355-1.243.566-2.06.566a4.135 4.135 0 0 1-1.527-.285 2.827 2.827 0 0 1-1.137-.782 2.851 2.851 0 0 1-.712-1.172c-.175-.461-.25-.957-.25-1.528 0-.531.07-1.032.25-1.493.18-.46.426-.852.747-1.207.32-.32.711-.606 1.137-.782a4.018 4.018 0 0 1 1.493-.285c.606 0 1.137.105 1.598.355.46.25.817.532 1.102.958.285.39.496.851.641 1.348.07.496.105.996.07 1.563h-5.15c0 .58.21 1.11.496 1.396zm2.24-3.732c-.25-.25-.642-.391-1.103-.391-.32 0-.566.07-.781.176-.215.105-.356.25-.496.39a.957.957 0 0 0-.25.497c-.036.175-.07.32-.07.46h3.196c-.07-.526-.25-.882-.497-1.132zm-3.127-3.728h3.978v.957h-3.978v-.957z" />
                </svg>
              </a>
            </li>
            <li class="redes__ul__li">
              <a href="https://github.com/rodrigoaiz" target="_blank" class="redes__a">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="redes__svg"
                  viewBox="0 0 16 16">
                  <path
                    d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z" />
                </svg>
              </a>
            </li>
            <li>
              <a href="#" class="redes__a" id="cerrar-redes">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="redes__svg last" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M3.5 10a.5.5 0 0 1-.5-.5v-8a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 .5.5v8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 0 0 1h2A1.5 1.5 0 0 0 14 9.5v-8A1.5 1.5 0 0 0 12.5 0h-9A1.5 1.5 0 0 0 2 1.5v8A1.5 1.5 0 0 0 3.5 11h2a.5.5 0 0 0 0-1h-2z"/>
                  <path fill-rule="evenodd" d="M7.646 4.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V14.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3z"/>
                </svg>
              </a>
            </li>
        </ul>
        <a class="redes__a" href="mailto:info@rodrigoaizpuru.com">info@rodrigoaizpuru.com</a>
      </div>
