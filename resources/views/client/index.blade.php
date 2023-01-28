<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kate Kisel - Full-stack web-developer</title>
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Kodchasan:wght@400;700&display=swap" rel="stylesheet">    <link rel="stylesheet" type="text/css" href="{{ asset('css/normalise.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
</head>
<body>
    <header class="header">
        <div class="container">
            <nav class="header__nav">
                <div class="logo">KatKis</div>
                <ul class="header__list">
                    <!-- <li class="header__item">
                        <a href="" class="header__nav-link header__nav-link_active">Home</a>
                    </li> -->
                    <li class="header__item">
                        <a href="#aboutme" class="header__nav-link">About me</a>
                    </li>
                    <li class="header__item">
                        <a href="#skills" class="header__nav-link">Skills</a>
                    </li>
                    <li class="header__item">
                        <a href="#portfolio" class="header__nav-link">Portfolio</a>
                    </li>
                    <li class="header__item">
                        <a href="#contact" class="header__nav-link">Contact</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
    <main>
        <section class="hero-section">
            <div class="container hero-section__container">
                <div class="hero-section__info">
                    <h1 class="hero-section__heading">
                        FULL-STACK 
                        <span class="section-heading__last-word">WEB-DEVELOPER</span>
                    </h1>
                    <div class="hero-section__work-btns">
                        <a href="#contact" class="btn">Hire me</a>
                        <a href="" class="btn hero-section__btn">Download CV</a>
                    </div>
                </div>
                <div class="down-arrow">
                    <a href="#aboutme" class="down-arrow__btn">
                        <img src="/img/arrow-down.svg" alt="down nav arrow" class="down-arrow__img">
                    </a>
                </div>
            </div>
        </section>
        <section class="about-me-section" id="aboutme">
            <div class="container about-me-section__container">
                <h2 class="section-heading">
                    About
                    <span class="section-heading__last-word">me</span>
                </h2>
                <div class="about-me-section__content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem at nisi alias architecto debitis, dolorum officiis voluptatibus iusto natus dolore perferendis, facilis dignissimos doloribus animi quas porro excepturi blanditiis nulla.</div>
            </div>
        </section>
        <section class="skills-section" id="skills">
            <div class="container skills-section__container">
                <h2 class="section-heading skills-section__heading">
                    What can I
                    <span class="section-heading__last-word">do?</span>
                </h2>
                <ul class="skills-section__list">
                    <li class="skills-section__item">
                        <img src="/img/layout.png" alt="" class="skills-section__item-img">
                        Layout
                    </li>
                    <li class="skills-section__item">
                        <img src="/img/backend.jpg" alt="backend" class="skills-section__item-img">
                        Backend
                    </li>
                    <li class="skills-section__item">
                        <img src="/img/database.png" alt="" class="skills-section__item-img">
                        Database</li>
                </ul>
            </div>
        </section>
        <section class="portfolio-section" id="portfolio">
            <div class="container portfolio-section__container">
                <h2 class="section-heading portfolio-section__heading">
                    My resent
                    <span class="section-heading__last-word">works</span>
                </h2>
                <ul class="portfolio-section__list">
                    <li class="work-item">
                        <a href="#top" class="work-item__link">
                            <img src="/img/project1.png" alt="" class="work-item__img">
                        </a>
                    </li>
                    <li class="work-item">
                        <img src="/img/project2.png" alt="" class="work-item__img">
                    </li>
                </ul>
            </div>
        </section>
        <section class="contact-section" id="contact">
            <div class="container contact-section__container">
                <h2 class="section-heading">
                    Contact
                    <span class="section-heading__last-word">me</span>
                </h2>
                {{ Form::model($client, ['route' => 'clients.store', 'class' => 'contact-form']) }}
                    {{ Form::token() }}

                    <div class="contact-form__first-line">
                        <div class="contact-form__field">
                            {{ Form::label('name', 'Your name', ['class' => 'contact-form__label']) }}
                            {{ Form::text('name', '', ['class' => 'contact-form__input']) }}
                        </div>
                        <div class="contact-form__field">
                            {{ Form::label('email', 'Your email', ['class' => 'contact-form__label']) }}
                            {{ Form::text('email', '', ['class' => 'contact-form__input', 'placeholder' => 'example@domain.com']) }}
                        </div>
                    </div>
                    {{ Form::label('message', 'Your message', ['class' => 'contact-form__label']) }}
                    {{ Form::textarea('message', '', ['class' => 'contact-form__input']) }}

                    {{ Form::submit('Send message', ['class' => ['btn', 'contact-form__btn']]) }}

                    @include('flash::message')

                {{ Form::close() }}
            </div>
        </section>
    </main>
    <footer class="footer">
        <div class="container footer__container">
            <nav class="footer__nav">
                <ul class="footer__nav-list">
                    <li class="footer__nav-item footer__nav-item-home">
                        <a href="#top" class="footer__link">Home</a>
                    </li>
                    <li class="footer__nav-item footer__nav-item-about-me">
                        <a href="#aboutme" class="footer__link">About me</a>
                    </li>
                    <li class="footer__nav-item footer__nav-item-skills">
                        <a href="#skills" class="footer__link">Skills</a>
                    </li>
                    <li class="footer__nav-item footer__nav-item-portfolio">
                        <a href="#portfolio" class="footer__link">Portfolio</a>
                    </li>
                    <li class="footer__nav-item footer__nav-item-contact">
                        <a href="#contact" class="footer__link">Contact</a>
                    </li>
                </ul>
            </nav>
            <ul class="contact-list">
                <li class="btn contact-list__item">
                    <a href="" class="contact-list__link">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#EEEEEE" class="bi bi-instagram" viewBox="0 0 16 16">
                            <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
                        </svg>
                    </a>
                </li>
                <li class="btn contact-list__item">
                    <a href="" class="contact-list__link">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#EEEEEE" class="bi bi-telegram" viewBox="0 0 16 16">
                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.287 5.906c-.778.324-2.334.994-4.666 2.01-.378.15-.577.298-.595.442-.03.243.275.339.69.47l.175.055c.408.133.958.288 1.243.294.26.006.549-.1.868-.32 2.179-1.471 3.304-2.214 3.374-2.23.05-.012.12-.026.166.016.047.041.042.12.037.141-.03.129-1.227 1.241-1.846 1.817-.193.18-.33.307-.358.336a8.154 8.154 0 0 1-.188.186c-.38.366-.664.64.015 1.088.327.216.589.393.85.571.284.194.568.387.936.629.093.06.183.125.27.187.331.236.63.448.997.414.214-.02.435-.22.547-.82.265-1.417.786-4.486.906-5.751a1.426 1.426 0 0 0-.013-.315.337.337 0 0 0-.114-.217.526.526 0 0 0-.31-.093c-.3.005-.763.166-2.984 1.09z"/>
                        </svg>
                    </a>
                </li>
            </ul>
            <div class="footer__rights">
                KatKis - All rights reserved
            </div>
        </div>
    </footer>
</body>
</html>
