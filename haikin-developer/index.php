<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Front-end Developer Slava Haikin</title>
    <meta name="description" content="A personal website about a front-end developer, who loves to create fast websites and webapps and learn something new everyday">
    <meta name="theme-color" content="#fff">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="viewport" content="width=device-width initial-scale=1.0 maximum-scale=5.0 minimum-scale=1.0">
    <link rel="shortcut icon" href="images/favicons/favicon.ico" type="image/x-icon">
    <link rel="icon" sizes="16x16" href="images/favicons/favicon-16x16.png" type="image/png">
    <link rel="icon" sizes="32x32" href="images/favicons/favicon-32x32.png" type="image/png">
    <link rel="apple-touch-icon-precomposed" href="images/favicons/apple-touch-icon-precomposed.png">
    <link rel="apple-touch-icon" href="images/favicons/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="57x57" href="images/favicons/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="images/favicons/apple-touch-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/favicons/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="images/favicons/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/favicons/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="images/favicons/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="images/favicons/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="images/favicons/apple-touch-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="167x167" href="images/favicons/apple-touch-icon-167x167.png">
    <link rel="apple-touch-icon" sizes="180x180" href="images/favicons/apple-touch-icon-180x180.png">
    <link rel="apple-touch-icon" sizes="1024x1024" href="images/favicons/apple-touch-icon-1024x1024.png">
    <link rel="stylesheet" href="<?php echo esc_url( get_stylesheet_uri() ); ?>">
    <?php wp_head(); ?>
</head>
<body>
<header class="header"><a class="logo"><span class="logo__content">S</span><span class="logo__content logo__content--accent">H</span></a>
    <button class="header__toggle" type="button" aria-label="Mobile menu button"><span class="header__toggle-line"></span><span class="header__toggle-line"></span><span class="header__toggle-line"></span></button>
    <nav class="header__navbar">
        <ul class="header__nav list">
            <li class="header__nav-item"><a class="header__nav-link header__nav-link--active" href="about.html">About</a></li>
            <li class="header__nav-item"><a class="header__nav-link" href="services.html">Services</a></li>
            <li class="header__nav-item"><a class="header__nav-link" href="projects.html">Projects</a></li>
            <li class="header__nav-item"><a class="header__nav-link" href="contacts.html">Contacts</a></li>
            <li class="header__nav-item"><a class="header__nav-link" href="today-i-learned.html">TIL</a></li>
            <li class="header__nav-item"><a class="header__nav-link" href="blog.html">Blog</a></li>
        </ul>
        <div class="header__divider"></div>
        <ul class="header__socials list list--horizontal">
            <li class="header__socials-item"><a class="header__socials-link" href="https://twitter.com/vyachowski" target="_blank" aria-label="Link to author's Twitter profile">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="21" viewBox="0 0 24 21" stroke="currentColor" fill="none">
                        <path d="M23 2.00005C22.0424 2.67552 20.9821 3.19216 19.86 3.53005C19.2577 2.83756 18.4573 2.34674 17.567 2.12397C16.6767 1.90121 15.7395 1.95724 14.8821 2.2845C14.0247 2.61176 13.2884 3.19445 12.773 3.95376C12.2575 4.71308 11.9877 5.61238 12 6.53005V7.53005C10.2426 7.57561 8.50127 7.18586 6.93101 6.39549C5.36074 5.60513 4.01032 4.43868 3 3.00005C3 3.00005 -1 12 8 16C5.94053 17.398 3.48716 18.099 1 18C10 23 21 18 21 6.50005C20.9991 6.2215 20.9723 5.94364 20.92 5.67005C21.9406 4.66354 22.6608 3.39276 23 2.00005V2.00005Z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg></a></li>
            <li class="header__socials-item"><a class="header__socials-link" href="https://github.com/vyachowski" target="_blank" aria-label="Link to author's Github profile">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke="currentColor" fill="none">
                        <g clip-path="url(#clip0_1_39362)">
                            <path d="M9 18.9999C4 20.4999 4 16.4999 2 15.9999M16 21.9999V18.1299C16.0375 17.6531 15.9731 17.1737 15.811 16.7237C15.6489 16.2737 15.3929 15.8634 15.06 15.5199C18.2 15.1699 21.5 13.9799 21.5 8.51994C21.4997 7.12376 20.9627 5.78114 20 4.76994C20.4559 3.54844 20.4236 2.19829 19.91 0.999938C19.91 0.999938 18.73 0.649938 16 2.47994C13.708 1.85876 11.292 1.85876 9 2.47994C6.27 0.649938 5.09 0.999938 5.09 0.999938C4.57638 2.19829 4.54414 3.54844 5 4.76994C4.03013 5.78864 3.49252 7.1434 3.5 8.54994C3.5 13.9699 6.8 15.1599 9.94 15.5499C9.611 15.8899 9.35726 16.2953 9.19531 16.7399C9.03335 17.1844 8.96681 17.658 9 18.1299V21.9999" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <defs>
                                    <clippath id="clip0_1_39362">
                                        <rect width="24" height="24" fill="white"></rect>
                                    </clippath>
                                </defs>
                            </path>
                        </g>
                    </svg></a></li>
            <li class="header__socials-item"><a class="header__socials-link" href="https://www.linkedin.com/in/vyachowski/" target="_blank" aria-label="Link to author's Linkedin profile">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke="currentColor" fill="none">
                        <path d="M16 8C17.5913 8 19.1174 8.63214 20.2426 9.75736C21.3679 10.8826 22 12.4087 22 14V21H18V14C18 13.4696 17.7893 12.9609 17.4142 12.5858C17.0391 12.2107 16.5304 12 16 12C15.4696 12 14.9609 12.2107 14.5858 12.5858C14.2107 12.9609 14 13.4696 14 14V21H10V14C10 12.4087 10.6321 10.8826 11.7574 9.75736C12.8826 8.63214 14.4087 8 16 8V8Z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M6 9H2V21H6V9Z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M4 6C5.10457 6 6 5.10457 6 4C6 2.89543 5.10457 2 4 2C2.89543 2 2 2.89543 2 4C2 5.10457 2.89543 6 4 6Z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg></a></li>
        </ul>
    </nav>
</header>
<main></main>
<section class="hero">
    <div class="hero__wrapper container">
        <div class="hero__content">
            <picture class="hero__image">
                <!-- Изображение для ширины экрана до 600px и ретина-дисплеев-->
                <source srcset="images/hero-mobile-2x.webp 2x, images/hero-mobile.webp" type="image/webp" media="(max-width: 600px)">
                <source srcset="images/hero-mobile-2x.png 2x, images/hero-mobile.png" type="image/png" media="(max-width: 600px)">
                <!-- Изображение для ширины экрана от 601px до 1200px и ретина-дисплеев-->
                <source srcset="images/hero-tablet-2x.webp 2x, images/hero-tablet.webp" type="image/webp" media="(min-width: 601px) and (max-width: 1200px)">
                <source srcset="images/hero-tablet-2x.png 2x, images/hero-tablet.png" type="image/png" media="(min-width: 601px) and (max-width: 1200px)">
                <!-- Изображение для ширины экрана более 1200px и ретина-дисплеев-->
                <source srcset="images/hero-desktop-2x.webp 2x, images/hero-desktop.webp" type="image/webp" media="(min-width: 1201px)">
                <source srcset="images/hero-desktop-2x.png 2x, images/hero-desktop.png" type="image/png" media="(min-width: 1201px)">
                <!-- Базовое изображение, которое будет отображаться, если браузер не поддерживает тег <picture>--><img src="images/hero-mobile.png" width="200" height="211" srcset="images/hero-mobile-2x.png 2x" alt="Slava Haikin – Front-End Developer">
            </picture>
            <div class="hero__text-content">
                <p class="subtitle hero__subtitle">Hi, my name is</p>
                <p class="title hero__title">Slava Haikin <br><span>I create lighting-fast web sites</span></p>
                <p class="hero__text">
                    I am a T-shaped web developer, with a speciality in Front-end
                    and also familiar with a backend (Python and Node.js) and also databases.
                    My focus is in understanding business purposes and provide a decisions
                    that can hugely increase them
                </p>
                <div class="hero__button-wrapper"> <a class="button button--accent" href="#">Hire </a><a class="button button--secondary" href="resume.html">Resume</a></div>
            </div>
        </div>
        <div class="hero__techstack"> <span class="hero__techstack-text">Tech stack:</span>
            <ul class="hero__techstack-list list list--horizontal">
                <li class="hero__techstack-item">
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewbox="0 0 22 22" fill="currentColor">
                        <g clip-path="url(#clip0_1_31489)">
                            <path d="M1.02699 0C0.458265 0 0 0.458265 0 1.02699V20.8821C0 21.4508 0.458265 21.9091 1.02699 21.9091H20.8821C21.4508 21.9091 21.9091 21.4508 21.9091 20.8821V1.02699C21.9091 0.458265 21.4508 0 20.8821 0H1.02699ZM16.8773 8.90057C17.436 8.90057 17.9308 8.93434 18.3626 9.0019C18.7698 9.06292 19.1695 9.16696 19.5548 9.31228V11.5561C19.3698 11.4282 19.1733 11.3179 18.9678 11.2266C18.7559 11.1312 18.5371 11.0519 18.3133 10.9892C17.8893 10.8711 17.4516 10.8097 17.0115 10.8067C16.7376 10.8067 16.4884 10.8322 16.2638 10.8852C16.0637 10.928 15.8717 11.0026 15.6951 11.1061C15.5399 11.201 15.4213 11.3151 15.3364 11.4475C15.251 11.5809 15.2065 11.7364 15.2086 11.8948C15.2086 12.0737 15.2569 12.2353 15.351 12.3777C15.4459 12.5201 15.581 12.6552 15.7554 12.783C15.9297 12.9108 16.1415 13.035 16.3907 13.1573C16.64 13.2806 16.922 13.4075 17.2361 13.5371C17.6651 13.7169 18.0504 13.9086 18.3918 14.1104C18.7332 14.313 19.0262 14.5422 19.2709 14.7978C19.5155 15.0525 19.7017 15.3437 19.8314 15.6714C19.961 15.9991 20.0267 16.3798 20.0267 16.8152C20.0267 17.415 19.9126 17.9198 19.6862 18.327C19.465 18.7285 19.1476 19.0688 18.7624 19.3174C18.3472 19.5807 17.887 19.7651 17.4049 19.8615C16.8883 19.971 16.3433 20.0258 15.7709 20.0258C15.2076 20.0283 14.6452 19.9782 14.0912 19.8761C13.6119 19.7932 13.147 19.6416 12.7109 19.4261V17.0252C13.536 17.7273 14.5826 18.1153 15.6659 18.1206C15.9699 18.1206 16.2355 18.0933 16.4619 18.0385C16.6893 17.9837 16.8782 17.907 17.0307 17.8103C17.1822 17.7117 17.2954 17.5966 17.3712 17.4634C17.4549 17.3082 17.493 17.1325 17.4811 16.9565C17.4691 16.7806 17.4076 16.6117 17.3036 16.4692C17.168 16.2898 17.0021 16.1353 16.8134 16.0128C16.5794 15.8577 16.333 15.7221 16.0767 15.6075C15.7729 15.4688 15.4665 15.3361 15.1574 15.2095C14.3194 14.8598 13.695 14.4317 13.2833 13.9269C12.8725 13.4221 12.6662 12.8113 12.6662 12.0966C12.6662 11.536 12.7785 11.055 13.003 10.6524C13.2276 10.2498 13.5325 9.91843 13.9196 9.65826C14.329 9.38818 14.7835 9.1937 15.2615 9.08406C15.791 8.95923 16.3333 8.89763 16.8773 8.90057ZM3.08097 9.07219H11.8108V11.0495H8.67782V19.8551H6.19753V11.0495H3.08097V9.07219Z" fill="currentColor"></path>
                        </g>
                        <defs>
                            <clippath id="clip0_1_31489">
                                <rect width="21.9091" height="21.9091" fill="white"></rect>
                            </clippath>
                        </defs>
                    </svg>
                </li>
                <li class="hero__techstack-item">
                    <svg xmlns="http://www.w3.org/2000/svg" width="23" height="22" viewBox="0 0 23 22" fill="currentColor">
                        <g clip-path="url(#clip0_1_31491)">
                            <path d="M13.8993 10.9581C13.8993 11.4993 13.6844 12.0184 13.3018 12.4012C12.9192 12.7839 12.4002 12.9991 11.859 12.9993C11.3177 12.9993 10.7985 12.7843 10.4157 12.4015C10.0329 12.0187 9.81784 11.4995 9.81784 10.9581C9.81784 10.4169 10.0328 9.89789 10.4154 9.51512C10.798 9.13234 11.3169 8.91718 11.8581 8.91694C12.3995 8.91694 12.9187 9.13199 13.3015 9.51479C13.6843 9.89759 13.8993 10.4168 13.8993 10.9581ZM16.3166 1.19946C15.0879 1.19946 13.4803 2.07583 11.8545 3.59303C10.2295 2.08404 8.62106 1.21772 7.39324 1.21772C7.01896 1.21772 6.67845 1.30262 6.38359 1.4715C5.12838 2.19541 4.84722 4.45114 5.49536 7.28197C2.71656 8.14008 0.909058 9.51214 0.909058 10.9581C0.909058 12.4096 2.72569 13.7853 5.51271 14.637C4.87004 17.4788 5.15668 19.7382 6.41463 20.4612C6.70675 20.6319 7.04452 20.7122 7.42062 20.7122C8.64844 20.7122 10.2569 19.8359 11.8828 18.3169C13.5077 19.8268 15.1162 20.6931 16.344 20.6931C16.7183 20.6931 17.0588 20.6109 17.3537 20.442C18.608 19.719 18.89 17.4633 18.2419 14.6316C21.0106 13.7808 22.8181 12.406 22.8181 10.9581C22.8181 9.50666 21.0015 8.13095 18.2145 7.27741C18.8572 4.43836 18.5705 2.17716 17.3126 1.45324C17.0223 1.28527 16.6845 1.20038 16.3157 1.19946H16.3166ZM16.3121 2.1945V2.19998C16.5175 2.19998 16.6827 2.24014 16.8214 2.31591C17.4294 2.66463 17.6932 3.99105 17.4878 5.69722C17.4386 6.11714 17.3582 6.55989 17.2596 7.01176C16.3833 6.79632 15.4284 6.63109 14.4233 6.52428C13.8208 5.69813 13.1955 4.94774 12.5656 4.29047C14.0189 2.93941 15.3837 2.19815 16.313 2.19541L16.3121 2.1945ZM7.39324 2.21276C8.31707 2.21276 9.68821 2.95036 11.1452 4.29412C10.5189 4.95139 9.89452 5.69722 9.30115 6.52337C8.2906 6.63018 7.33481 6.79541 6.45936 7.0145C6.35712 6.56719 6.28135 6.13449 6.22749 5.71821C6.01753 4.01296 6.27678 2.68746 6.87928 2.33417C7.05273 2.25201 7.24444 2.21824 7.39324 2.21367V2.21276ZM11.8499 4.99704C12.2653 5.42427 12.6806 5.90261 13.0914 6.42478C12.6898 6.40652 12.279 6.39374 11.8636 6.39374C11.4437 6.39374 11.0283 6.40287 10.6221 6.42478C11.0238 5.90261 11.4391 5.42427 11.8499 4.99613V4.99704ZM11.8636 7.39426C12.5391 7.39426 13.2119 7.4253 13.8738 7.47916C14.2444 8.01045 14.6059 8.57735 14.9537 9.17711C15.2933 9.76135 15.6018 10.3547 15.883 10.9536C15.6018 11.5515 15.2933 12.1494 14.9583 12.7337C14.6114 13.3362 14.2526 13.9095 13.8811 14.4408C13.2165 14.4983 12.5428 14.5302 11.8636 14.5302C11.1881 14.5302 10.5153 14.4983 9.85344 14.4453C9.48281 13.914 9.12132 13.3462 8.77351 12.7474C8.43392 12.1631 8.12536 11.5698 7.8442 10.9709C8.1208 10.3712 8.43392 9.77231 8.76894 9.18715C9.11584 8.58465 9.4746 8.01319 9.84614 7.48189C10.5107 7.42347 11.1844 7.39243 11.8636 7.39243V7.39426ZM8.54529 7.62613C8.3262 7.97028 8.10711 8.32266 7.90262 8.68507C7.69722 9.04109 7.50552 9.39894 7.32294 9.75679C7.08103 9.15794 6.87563 8.56092 6.70584 7.97941C7.29008 7.84248 7.90627 7.72107 8.54529 7.62704V7.62613ZM15.1728 7.62613C15.8072 7.72016 16.4189 7.83609 17.004 7.97941C16.8397 8.55635 16.6343 9.14972 16.4015 9.74401C16.2189 9.38799 16.0272 9.02922 15.8173 8.67229C15.6119 8.31444 15.3928 7.96572 15.1737 7.62613H15.1728ZM17.9689 8.24232C18.4108 8.37925 18.8307 8.53171 19.2241 8.69694C20.8053 9.37247 21.8277 10.2561 21.8277 10.9572C21.8231 11.6583 20.8007 12.5456 19.2196 13.2166C18.8362 13.3809 18.4162 13.5288 17.9826 13.6666C17.727 12.7921 17.3929 11.8811 16.9785 10.9463C17.3893 10.0179 17.7179 9.11138 17.9689 8.2405V8.24232ZM5.74092 8.24597C5.99471 9.12234 6.32973 10.0325 6.74509 10.9664C6.3343 11.8948 6.00383 12.8012 5.75371 13.6721C5.31187 13.5352 4.89195 13.3818 4.50306 13.2157C2.92196 12.5429 1.89953 11.6583 1.89953 10.9572C1.89953 10.2561 2.92196 9.36699 4.50306 8.69694C4.88647 8.53262 5.30639 8.38473 5.74092 8.24597ZM16.4015 12.1531C16.6434 12.7529 16.8488 13.3508 17.0186 13.9314C16.4344 14.0747 15.8173 14.1961 15.1783 14.2874C15.3974 13.9451 15.6164 13.5918 15.8218 13.2303C16.0272 12.8743 16.2189 12.5109 16.4024 12.1531H16.4015ZM7.32294 12.1714C7.50552 12.5292 7.69722 12.8861 7.90719 13.244C8.11715 13.6 8.33168 13.9487 8.55077 14.2874C7.91632 14.1943 7.30469 14.0774 6.71953 13.935C6.88385 13.3599 7.09016 12.7647 7.32203 12.1704L7.32294 12.1714ZM17.2678 14.8981C17.3701 15.3482 17.4504 15.7818 17.4997 16.1971C17.7097 17.9024 17.4504 19.2279 16.8479 19.5821C16.7137 19.6643 16.5394 19.699 16.334 19.699C15.4101 19.699 14.039 18.9623 12.582 17.6176C13.2083 16.9603 13.8327 16.2154 14.4261 15.3902C15.4366 15.2824 16.3924 15.1163 17.2678 14.8972V14.8981ZM6.46849 14.9073C7.34485 15.1209 8.29972 15.2861 9.3048 15.3929C9.9073 16.2191 10.5326 16.9694 11.1625 17.6258C9.70647 18.9796 8.33989 19.7209 7.41058 19.7209C7.20975 19.7163 7.03995 19.6752 6.90576 19.6004C6.29778 19.2535 6.03396 17.9261 6.23936 16.22C6.28865 15.8 6.36899 15.3582 6.46758 14.9073H6.46849ZM10.6312 15.4915C11.0329 15.5098 11.4437 15.5225 11.859 15.5225C12.279 15.5225 12.6943 15.5134 13.1006 15.4915C12.6989 16.0137 12.2835 16.4911 11.8727 16.9201C11.4574 16.4911 11.042 16.0137 10.6312 15.4915Z" fill="currentColor">
                                <defs>
                                    <clippath id="clip0_1_31491">
                                        <rect width="21.9091" height="21.9091" fill="white" transform="translate(0.909058)"></rect>
                                    </clippath>
                                </defs>
                            </path>
                        </g>
                    </svg>
                </li>
                <li class="hero__techstack-item">
                    <svg xmlns="http://www.w3.org/2000/svg" width="23" height="22" viewBox="0 0 23 22" fill="currentColor">
                        <g clip-path="url(#clip0_1_31493)">
                            <path d="M11.7736 4.38184C8.85242 4.38184 7.02667 5.84244 6.29636 8.76365C7.39182 7.30305 8.66985 6.75532 10.1305 7.12047C10.9639 7.32861 11.5591 7.93293 12.2191 8.60299C13.2936 9.69296 14.536 10.9546 17.2509 10.9546C20.1721 10.9546 21.9979 9.49396 22.7282 6.57274C21.6327 8.03335 20.3547 8.58108 18.8941 8.21593C18.0606 8.00779 17.4654 7.40346 16.8054 6.73341C15.7319 5.64343 14.4895 4.38184 11.7736 4.38184ZM6.29636 10.9546C3.37515 10.9546 1.54939 12.4152 0.819092 15.3364C1.91455 13.8758 3.19258 13.328 4.65318 13.6932C5.48664 13.9013 6.08184 14.5057 6.74185 15.1757C7.81631 16.2657 9.05874 17.5273 11.7736 17.5273C14.6948 17.5273 16.5206 16.0667 17.2509 13.1455C16.1555 14.6061 14.8774 15.1538 13.4168 14.7887C12.5834 14.5805 11.9882 13.9762 11.3282 13.3061C10.2546 12.2162 9.01218 10.9546 6.29636 10.9546Z" fill="currentColor">
                                <defs>
                                    <clippath id="clip0_1_31493">
                                        <rect width="21.9091" height="21.9091" fill="white" transform="translate(0.818115)"></rect>
                                    </clippath>
                                </defs>
                            </path>
                        </g>
                    </svg>
                </li>
                <li class="hero__techstack-item">
                    <svg xmlns="http://www.w3.org/2000/svg" width="23" height="22" viewBox="0 0 23 22" fill="currentColor">
                        <g clip-path="url(#clip0_1_31495)">
                            <path d="M11.2921 0C11.1312 0 11.0093 0.00118674 10.965 0.00611629C10.9179 0.0109545 10.7679 0.0252867 10.633 0.0360587C7.52122 0.316586 4.60648 1.99537 2.76037 4.57562C1.73238 6.01039 1.07492 7.63769 0.826618 9.36157C0.738799 9.96316 0.728027 10.1409 0.728027 10.9567C0.728027 11.7726 0.738982 11.9503 0.826618 12.5521C1.42182 16.6655 4.34951 20.1216 8.32017 21.402C9.03121 21.6312 9.78077 21.7875 10.6331 21.8817C10.9651 21.9182 12.3999 21.9182 12.7318 21.8817C14.2031 21.7189 15.4497 21.355 16.6789 20.7276C16.8674 20.6312 16.9038 20.6055 16.8781 20.584C16.861 20.5713 16.0577 19.4942 15.0941 18.1922L13.3423 15.826L11.1471 12.5777C9.93925 10.7918 8.94549 9.33154 8.93691 9.33154C8.92833 9.32916 8.91984 10.7727 8.91545 12.5348C8.90934 15.6205 8.90697 15.7447 8.86835 15.8175C8.81266 15.9225 8.76976 15.9652 8.67993 16.0124C8.61147 16.0465 8.5514 16.053 8.22806 16.053H7.85743L7.75902 15.9909C7.69799 15.9527 7.64842 15.8987 7.61552 15.8346L7.57051 15.7382L7.57535 11.4449L7.58147 7.14948L7.64774 7.06596C7.68207 7.02095 7.75491 6.96326 7.80622 6.93541C7.89404 6.89251 7.92836 6.88822 8.29881 6.88822C8.7358 6.88822 8.80856 6.90529 8.92203 7.02944C8.95425 7.06386 10.1428 8.85401 11.5648 11.0103C13.0046 13.1929 14.4452 15.3748 15.8867 17.5562L17.6214 20.1837L17.709 20.1259C18.4866 19.6205 19.3089 18.901 19.9599 18.1516C21.3456 16.5605 22.2387 14.6206 22.5385 12.552C22.6263 11.9503 22.6369 11.7724 22.6369 10.9567C22.6369 10.1409 22.626 9.96316 22.5385 9.36139C21.9431 5.24796 19.0155 1.79189 15.045 0.511486C14.3446 0.284453 13.5993 0.128077 12.7642 0.0338678C12.6099 0.0178011 11.775 0.000456439 11.2923 9.12879e-05L11.2921 0ZM15.0062 6.58825C15.3232 6.58825 15.3788 6.59308 15.4496 6.63115C15.5524 6.68246 15.6358 6.78105 15.6659 6.88374C15.6829 6.93943 15.6873 8.1301 15.6829 10.8131L15.6768 14.6632L14.998 13.6225L14.3169 12.5818V9.78296C14.3169 7.97363 14.3254 6.95641 14.3382 6.90721C14.3725 6.78734 14.4474 6.69304 14.5503 6.63745C14.638 6.59235 14.6702 6.58815 15.0065 6.58815L15.0062 6.58825Z" fill="currentColor">
                                <defs>
                                    <clippath id="clip0_1_31495">
                                        <rect width="21.9091" height="21.9091" fill="white" transform="translate(0.727295)"></rect>
                                    </clippath>
                                </defs>
                            </path>
                        </g>
                    </svg>
                </li>
                <li class="hero__techstack-item">
                    <svg xmlns="http://www.w3.org/2000/svg" width="23" height="22" viewBox="0 0 23 22" fill="currentColor">
                        <g clip-path="url(#clip0_1_31497)">
                            <path d="M15.1073 8.19856H10.919V0H15.1073C17.3676 0 19.2061 1.83854 19.2061 4.09883C19.2061 6.35911 17.3676 8.19856 15.1073 8.19856ZM12.2618 6.85572H15.1073C16.6272 6.85572 17.8633 5.61877 17.8633 4.09974C17.8633 2.58071 16.6263 1.34376 15.1073 1.34376H12.2618V6.85572ZM12.2618 8.19856H8.07447C5.81418 8.19856 3.97564 6.36003 3.97564 4.09974C3.97564 1.83945 5.81418 0 8.07447 0H12.2628V8.19856H12.2618ZM8.07447 1.34284C6.55453 1.34284 5.31849 2.5798 5.31849 4.09883C5.31849 5.61786 6.55453 6.85572 8.07447 6.85572H10.9199V1.34284H8.07447ZM12.2618 15.0534H8.07447C5.81418 15.0534 3.97564 13.2148 3.97564 10.9545C3.97564 8.69426 5.81418 6.85572 8.07447 6.85572H12.2628V15.0534H12.2618ZM8.07447 8.19856C6.55453 8.19856 5.31849 9.43551 5.31849 10.9545C5.31849 12.4736 6.55544 13.7105 8.07447 13.7105H10.9199V8.19856H8.07447ZM8.09638 21.9091C5.82422 21.9091 3.97473 20.0706 3.97473 17.8103C3.97473 15.55 5.81327 13.7114 8.07356 13.7114H12.2618V17.7655C12.2618 20.0505 10.3932 21.9091 8.09638 21.9091ZM8.07447 15.0534C7.34383 15.0543 6.6434 15.345 6.12676 15.8616C5.61013 16.3783 5.31946 17.0787 5.31849 17.8094C5.31849 19.3293 6.56457 20.5653 8.09729 20.5653C9.65375 20.5653 10.9208 19.3092 10.9208 17.7646V15.0534H8.07447ZM15.1073 15.0534H15.0178C12.7575 15.0534 10.919 13.2148 10.919 10.9545C10.919 8.69426 12.7575 6.85572 15.0178 6.85572H15.1073C17.3676 6.85572 19.2061 8.69426 19.2061 10.9545C19.2061 13.2148 17.3676 15.0534 15.1073 15.0534ZM15.0187 8.19856C13.4988 8.19856 12.2628 9.43551 12.2628 10.9545C12.2628 12.4736 13.4997 13.7105 15.0187 13.7105H15.1082C16.6281 13.7105 17.8642 12.4736 17.8642 10.9545C17.8642 9.43551 16.6272 8.19856 15.1082 8.19856H15.0187Z" fill="currentColor">
                                <defs>
                                    <clippath id="clip0_1_31497">
                                        <rect width="21.9091" height="21.9091" fill="white" transform="translate(0.636353)"></rect>
                                    </clippath>
                                </defs>
                            </path>
                        </g>
                    </svg>
                </li>
                <li class="hero__techstack-item">
                    <svg xmlns="http://www.w3.org/2000/svg" width="23" height="22" viewBox="0 0 23 22" fill="currentColor">
                        <g clip-path="url(#clip0_1_31499)">
                            <path d="M7.54362 13.5754C7.75998 13.7096 11.029 14.3742 11.8278 14.5066C12.1044 14.565 11.9081 14.8498 11.5265 15.0424C10.6657 15.2715 6.49016 13.5754 7.54362 13.5754ZM12.6986 1.46699L15.8983 4.71684C16.2023 5.02722 16.1977 5.62789 16.0279 5.80043L14.4395 4.5297L14.1273 6.41114L12.7991 5.71096L10.6739 7.0529L9.97006 4.22297L8.82804 6.19844H7.08171C6.36966 6.19844 6.28659 5.29469 6.93291 4.64837C8.06214 3.42968 9.35843 2.18725 10.0632 1.46699C10.7716 0.743078 12.0049 0.764074 12.6986 1.46699ZM9.47893 0.885487L1.39082 9.16165C-1.34142 12.5457 3.25127 12.1522 5.21943 13.1263C5.926 13.8484 2.51275 14.3815 3.21932 15.1036C3.92497 15.8257 7.48976 16.4948 8.19725 17.216C8.9029 17.9381 6.75125 18.704 7.45781 19.4251C8.16347 20.1481 9.79752 19.4635 10.1033 21.1304C10.3206 22.3208 13.0465 21.6416 14.3793 20.6667C15.0858 19.9446 13.0282 20.0121 13.7348 19.29C15.4902 17.4944 17.1261 18.6382 17.7268 16.838C18.0235 15.9489 15.1415 15.4678 15.849 14.7457C17.8811 13.559 24.9038 12.7867 21.5709 9.45468L13.1889 0.885487C12.1637 -0.0985966 10.4521 -0.109551 9.47984 0.885487H9.47893ZM18.7693 16.838C18.7693 17.2488 21.7946 17.5181 21.7946 16.7413C21.3637 15.4943 19.1271 15.5783 18.7693 16.838ZM5.14184 19.0198C5.85754 19.6397 6.96486 18.8655 7.29623 18.0011C6.60245 17.079 4.00348 18.0348 5.14184 19.0198ZM18.3895 17.6815C17.4666 18.5104 18.4936 19.3503 19.4037 18.8153C19.6064 18.6099 19.3983 17.8879 18.3904 17.6815H18.3895Z" fill="currentColor">
                                <defs>
                                    <clippath id="clip0_1_31499">
                                        <rect width="21.9091" height="21.9091" fill="white" transform="translate(0.54541)"></rect>
                                    </clippath>
                                </defs>
                            </path>
                        </g>
                    </svg>
                </li>
            </ul>
        </div>
    </div>
</section>
<section class="key-projects">
    <div class="key-projects__wrapper container">
        <p class="subtitle key-projects__subtitle">Some things I have built</p>
        <h2 class="title title--secondary key-projects__title">Key projects</h2>
        <div class="key-projects__list">
            <article class="key-projects__card">
                <div class="key-projects__image-wrapper key-projects__image-wrapper--first"></div>
                <div class="key-projects__inner-wrapper">
                    <h3 class="title title--third key-projects__card-title">Git Cheatsheet</h3>
                    <p class="key-projects__text">
                        The git cheatsheet site offers a concise reference for commonly
                        used Git commands. It provides a quick guide for version control
                        tasks, including repository management, commits, branching,
                        merging, and collaboration. The site presents commands,
                        descriptions, and usage examples in an organized format for easy
                        access.
                    </p>
                    <ul class="key-projects__techstack-list list list--horizontal">
                        <li class="key-projects__techstack-item">PUG</li>
                        <li class="key-projects__techstack-item">CSS3</li>
                        <li class="key-projects__techstack-item">Gulp</li>
                        <li class="key-projects__techstack-item">Bootstrap</li>
                    </ul>
                    <ul class="key-projects__demo-list list list--horizontal">
                        <li class="key-projects__demo-item"><a href="https://github.com/Vyachowski/vyachowski.com" aria-label="Link to Git-quickstart Github page">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke="currentColor" fill="none">
                                    <g clip-path="url(#clip0_1_39362)">
                                        <path d="M9 18.9999C4 20.4999 4 16.4999 2 15.9999M16 21.9999V18.1299C16.0375 17.6531 15.9731 17.1737 15.811 16.7237C15.6489 16.2737 15.3929 15.8634 15.06 15.5199C18.2 15.1699 21.5 13.9799 21.5 8.51994C21.4997 7.12376 20.9627 5.78114 20 4.76994C20.4559 3.54844 20.4236 2.19829 19.91 0.999938C19.91 0.999938 18.73 0.649938 16 2.47994C13.708 1.85876 11.292 1.85876 9 2.47994C6.27 0.649938 5.09 0.999938 5.09 0.999938C4.57638 2.19829 4.54414 3.54844 5 4.76994C4.03013 5.78864 3.49252 7.1434 3.5 8.54994C3.5 13.9699 6.8 15.1599 9.94 15.5499C9.611 15.8899 9.35726 16.2953 9.19531 16.7399C9.03335 17.1844 8.96681 17.658 9 18.1299V21.9999" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <defs>
                                                <clippath id="clip0_1_39362">
                                                    <rect width="24" height="24" fill="white"></rect>
                                                </clippath>
                                            </defs>
                                        </path>
                                    </g>
                                </svg></a></li>
                        <li class="key-projects__demo-item"><a href="https://vyachowski.com" rel="nofollow" aria-label="Link to this site">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke="currentColor" fill="none">
                                    <path d="M18 13V19C18 19.5304 17.7893 20.0391 17.4142 20.4142C17.0391 20.7893 16.5304 21 16 21H5C4.46957 21 3.96086 20.7893 3.58579 20.4142C3.21071 20.0391 3 19.5304 3 19V8C3 7.46957 3.21071 6.96086 3.58579 6.58579C3.96086 6.21071 4.46957 6 5 6H11" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M15 3H21V9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M10 14L21 3" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg></a></li>
                    </ul>
                </div>
            </article>
            <article class="key-projects__card key-projects__card--reversed">
                <div class="key-projects__image-wrapper key-projects__image-wrapper--second"></div>
                <div class="key-projects__inner-wrapper">
                    <h3 class="title title--third key-projects__card-title">Vyachowski.com</h3>
                    <p class="key-projects__text">
                        The personal front-end developer site showcases skills, projects,
                        and experience. It presents a portfolio of work, highlights
                        proficiency in HTML, CSS, JavaScript, and frameworks. The site
                        features a blog section for sharing insights, tips, and trends.
                        Visitors learn about the developer's background, expertise, and
                        contact information.
                    </p>
                    <ul class="key-projects__techstack-list list list--horizontal">
                        <li class="key-projects__techstack-item">PUG</li>
                        <li class="key-projects__techstack-item">CSS3</li>
                        <li class="key-projects__techstack-item">JS</li>
                        <li class="key-projects__techstack-item">NPM Scripts</li>
                    </ul>
                    <ul class="key-projects__demo-list list list--horizontal">
                        <li class="key-projects__demo-item"><a href="https://github.com/Vyachowski/git-quickstart" aria-label="Link to Git-quickstart Github page">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke="currentColor" fill="none">
                                    <g clip-path="url(#clip0_1_39362)">
                                        <path d="M9 18.9999C4 20.4999 4 16.4999 2 15.9999M16 21.9999V18.1299C16.0375 17.6531 15.9731 17.1737 15.811 16.7237C15.6489 16.2737 15.3929 15.8634 15.06 15.5199C18.2 15.1699 21.5 13.9799 21.5 8.51994C21.4997 7.12376 20.9627 5.78114 20 4.76994C20.4559 3.54844 20.4236 2.19829 19.91 0.999938C19.91 0.999938 18.73 0.649938 16 2.47994C13.708 1.85876 11.292 1.85876 9 2.47994C6.27 0.649938 5.09 0.999938 5.09 0.999938C4.57638 2.19829 4.54414 3.54844 5 4.76994C4.03013 5.78864 3.49252 7.1434 3.5 8.54994C3.5 13.9699 6.8 15.1599 9.94 15.5499C9.611 15.8899 9.35726 16.2953 9.19531 16.7399C9.03335 17.1844 8.96681 17.658 9 18.1299V21.9999" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <defs>
                                                <clippath id="clip0_1_39362">
                                                    <rect width="24" height="24" fill="white"></rect>
                                                </clippath>
                                            </defs>
                                        </path>
                                    </g>
                                </svg></a></li>
                        <li class="key-projects__demo-item"><a href="https://codebless.me" aria-label="Link to Git-quickstart site">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke="currentColor" fill="none">
                                    <path d="M18 13V19C18 19.5304 17.7893 20.0391 17.4142 20.4142C17.0391 20.7893 16.5304 21 16 21H5C4.46957 21 3.96086 20.7893 3.58579 20.4142C3.21071 20.0391 3 19.5304 3 19V8C3 7.46957 3.21071 6.96086 3.58579 6.58579C3.96086 6.21071 4.46957 6 5 6H11" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M15 3H21V9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M10 14L21 3" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg></a></li>
                    </ul>
                </div>
            </article>
        </div>
    </div>
</section>
<section class="contact-form">
    <div class="contact-form__wrapper container">
        <div class="contact-form__text-wrapper">
            <p class="subtitle">Contacts</p>
            <h2 class="title">Keep in touch</h2>
            <p class="contact-form__text">
                I am totally open to a new job and new contacts so let’s discuss it in any
                convenient way.
            </p>
        </div>
        <form class="contact-form__form" action="#" method="get" autocomplete="on">
            <p class="contact-form__group">
                <label class="contact-form__label" for="contact-form__message">Message:</label>
                <textarea class="contact-form__field contact-form__textarea" id="contact-form__message" name="contact-form__message" cols="15" rows="5">Hi, Slava...</textarea>
            </p>
            <p class="contact-form__group">
                <label class="contact-form__label" for="contact-form__email">Your email:</label>
                <input class="contact-form__field" id="contact-form__email" type="email" name="contact-form__email" placeholder="your@mail.com">
            </p>
            <button class="button button--accent" type="submit">Build a bridge</button>
        </form>
    </div>
</section>
<footer class="footer">
    <div class="footer__wrapper">
        <nav class="footer__navbar">
            <ul class="footer__nav-list list list--horizontal">
                <li class="footer__nav-item"><a class="footer__nav-link footer__nav-link--active" href="about.html">About</a></li>
                <li class="footer__nav-item"><a class="footer__nav-link" href="services.html">Services</a></li>
                <li class="footer__nav-item"><a class="footer__nav-link" href="projects.html">Projects</a></li>
                <li class="footer__nav-item"><a class="footer__nav-link" href="contacts.html">Contacts</a></li>
                <li class="footer__nav-item"><a class="footer__nav-link" href="today-i-learned.html">TIL</a></li>
                <li class="footer__nav-item"><a class="footer__nav-link" href="blog.html">Blog</a></li>
            </ul>
        </nav>
        <p class="footer__author">Built by Slava Haikin</p>
    </div>
</footer>
<script src="js/main.min.js" async></script>
</body>
</html>