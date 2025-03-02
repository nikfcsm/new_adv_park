

<?php include ("header.php") ?>

        <section class="baner">
            <div class="container">
                <div class="home__baner">
                    <div class="baner-showcase__content">
                        <div class="baner-showcase__title">Добро пожаловать</div>
                        <h1 class="baner-showcase__heading">Парк приключений Хотьково</h1>
                        <div class="baner-showcase__txt">Самый большой веревочный парк Москвы и Подмосковья </div>
                        <div class="baner-showcase__btns">
                            <a class="schema-btn" href="">Схема парка</a>
                            <a class="loc-btn" href=""><img src="/img/location.svg" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>

        </section>


        <section id="activity">
            <div class="container">
                <h2>Вот, что вас ждет в <span>Парке приключений</span></h2>
                <div class="activity-grid">
                    <div class="activity1">
                        <img class="activity_icon" src="/img/home/activity1-ico.svg" alt="">
                        <img src="/img/home/activity1-bg.png" alt="">
                        <div class="activity_descr">Веревочный парк</div>

                        <!-- <img src="/img/home/activity1.png" alt=""> -->
                    </div>
                    <div class="activity2">

                        <img class="activity_icon" src="/img/home/activity2-ico.svg" alt="">
                        <picture>
                            <source srcset="/img/home/activity2-bg_mob.png" media="(max-width: 768px)">
                            <img src="/img/home/activity2-bg.png" alt="Абстрактное изображение">
                        </picture>



                        <div class="activity_descr">Анимация</div>

                    </div>
                    <div class="activity3">
                        <img class="activity_icon" src="/img/home/activity3-ico.svg" alt="">
                        <picture>
                            <source srcset="/img/home/activity3-bg_mob.png" media="(max-width: 768px)">
                            <img src="/img/home/activity3-bg.png" alt="Абстрактное изображение">
                        </picture>
                        <div class="activity_descr">Аренда беседок</div>
                    </div>
                    <div class="activity4">
                        <img class="activity_icon" src="/img/home/activity4-ico.svg" alt="">
                        <img src="/img/home/activity4-bg.png" alt="">
                        <div class="activity_descr">Лазертаг</div>

                    </div>
                    <div class="activity5">
                        <img class="activity_icon" src="/img/home/activity5-ico.svg" alt="">
                        <picture>
                            <source srcset="/img/home/activity5-bg_mob.png" media="(max-width: 768px)">
                            <img src="/img/home/activity5-bg.png" alt="Абстрактное изображение">
                        </picture>
                        <div class="activity_descr"><span class="d-mob-none">Гигантский батут</span><span
                                class="d-pc-none">Батут</span> “Замок приключений”</div>
                    </div>
                </div>
                <div class="activity_wrapper">
                    <div class="activity_item">
                        <div> <img src="/img/home/activity5.svg" alt=""></div>
                        <div> <img src="/img/home/activity6.svg" alt=""></div>
                        <div><img src="/img/home/activity7.svg" alt=""></div>
                        <div><img src="/img/home/activity8.svg" alt=""></div>
                        <div> <img src="/img/home/activity9.svg" alt=""></div>
                        <div> <img src="/img/home/activity10.svg" alt=""></div>
                        <div><img src="/img/home/activity11.svg" alt=""></div>
                        <div> <img src="/img/home/activity12.svg" alt=""></div>

                    </div>

                </div>





            </div>

        </section>


        <section id="celebration">
            <div class="container">
                <h2><span>Праздники</span> на все случаи жизни</h2>
                <div class="celebration_wrapper">
                    <a href="/park" class="celebration_item">
                        <div class="celeb-ico">
                            <img src="/img/celeb-ico1.svg" alt="">
                        </div>
                        <span>Отдых с семьей</span>
                    </a>
                    <a href="/lazertag/" class="celebration_item">
                        <div class="celeb-ico">
                            <img src="/img/celeb-ico2.svg" alt="">
                        </div>
                        <span>Отдых с друзьями</span>
                    </a>
                    <a href="/corporate/" class="celebration_item">
                        <div class="celeb-ico">
                            <img src="/img/celeb-ico3.svg" alt="">
                        </div>
                        <span>Корпоративы</span>
                    </a>
                    <a href="/vypusknoj-i-poslednij-zvonok/" class="celebration_item">
                        <div class="celeb-ico">
                            <img src="/img/celeb-ico4.svg" alt="">
                        </div>
                        <span>Выпускные мероприятия</span>
                    </a>
                </div>
            </div>

        </section>
        <?php include ("inc/about.php") ?>
        <?php include ("inc/gallery.php") ?>

        <?php include ("inc/contact_us.php") ?>

    <?php include ("footer.php") ?>
    