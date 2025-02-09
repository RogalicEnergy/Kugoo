<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/swiper-bundle.min.css">
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/style.css">
  <title>Kugoo</title>
  <link rel="apple-touch-icon" sizes="57x57" href="img/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="img/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="img/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="img/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="img/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="img/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="img/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="img/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="img/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192"  href="img/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="img/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">
  <link rel="manifest" href="img/manifest.json">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="img/ms-icon-144x144.png">
  <meta name="theme-color" content="#ffffff">
</head>
  <body class="front-page">
    <div class="mobile-menu">
      <ul class="mobile-menu-nav">
        <li class="mobile-menu-nav-item">
          <a href="#" class="mobile-menu-link">Сервис</a>
        </li>
        <li class="mobile-menu-nav-item">
          <a href="#" class="mobile-menu-link">Сотрудничество</a>
        </li>
        <li class="mobile-menu-nav-item">
          <a href="#" class="mobile-menu-link">Корзина</a>
        </li>
        <li class="mobile-menu-nav-item">
          <a href="#" class="mobile-menu-link">Избранное</a>
        </li>
      </ul>
      <hr class="mobile-seporator">
      <div class="mobile-phone-info">
        <p class="mobali-info-text">Заказать звонок</p>
        <a href="tel:+7(499)686-10-14" class="mobile-phone">+7 (499) 686-10-14</a>
      </div>
      <div class="mobile-info">
        <a href="#" class="mobile-info-viber">
          <svg class="vk-icon" width="12" height="12">
            <use href="img/sprite.svg#viber"></use>
          </svg>
        </a>
        <a href="#" class="mobile-info-whatsapp">
          <svg class="inst-icon" width="12" height="12">
            <use href="img/sprite.svg#whatsapp"></use>
          </svg>
        </a>
        <a href="#" class="mobile-info-telegram">
          <svg class="inst-icon" width="12" height="12">
            <use href="img/sprite.svg#telegram"></use>
          </svg>
        </a>
      </div>
    </div>
    <div class="container container-navbar">
      <nav class="navbar">
          <a href="" class="mobile-menu-toggle-navbar">
            <div class="mobile-menu-line-navbar"></div>
            <div class="mobile-menu-line-navbar"></div>
            <div class="mobile-menu-line-navbar"></div>
          </a>
        <ul class="header-nav">
          <li class="header-navar-block">
            <ul class="header-nav-item">
              <a href="#" class="header-nav-link">Сервис</a>
            </ul>
            <ul class="header-nav-item">
              <a href="#" class="header-nav-link">Сотрудничество</a>
            </ul>
            <ul class="header-nav-item">
              <a href="#" class="header-nav-link">Заказать звонок</a>
            </ul>
            <ul class="navbar-icon">
              <svg class="header-icon" width="12" height="12">
                <use href="img/sprite.svg#viber"></use>
              </svg>
              <svg class="header-icon" width="12" height="12">
                <use href="img/sprite.svg#whatsapp"></use>
              </svg>
              <svg class="header-icon" width="12" height="12">
                <use href="img/sprite.svg#telegram"></use>
              </svg>
            </ul>
          </li>
        </ul>
        <div class="header-phone">
          <a href="tel:+78005055461" class="header-phone-link">+7 (800) 505-54-61</a>
        </div>
      </nav>
    </div>

    <!-- <hr class="header-seporator"> -->
    <div class="navbar-header">
      <picture  class="navbar-header-logo">
        <source type="image/webp" srcset="img/logo.webp">
        <source type="image/png" srcset="img/logo.png">
        <img src="img/logo.png" alt="logo">
      </picture>
      <div class="block-header">
        <div class="select-menu active">
          <ul class="menu-toggle select-btn">
            <li class="mobile-menu-toggle">
              <div class="mobile-menu-line"></div>
              <div class="mobile-menu-line"></div>
              <div class="mobile-menu-line" id="menu-line-end"></div>
            </li>
            <p class="button-toggle-text">Каталог</p>
          </ul>
          <ul class="options">
            <li class="option">
              <i class="bx bxl-instagram-alt"></i>
              <span class="option-text">Сервис</span>
            </li>
            <li class="option">
              <i class="bx bxl-linkedin-square"></i>
              <span class="option-text">Сотрудничество</span>
            </li>
            <li class="option">
              <i class="bx bxl-linkedin-square"></i>
              <span class="option-text">Корзина</span>
            </li>
            <li class="option">
              <i class="bx bxl-linkedin-square"></i>
              <span class="option-text">Избранное</span>
            </li>
          </ul>
        </div>
        <div class="input-navbar-header modal-input-navbar-header">
          <input id="modal-user-name" type="text" class="modal-input modal-mask" name="username" placeholder="Искать самокат KUGO">
          <label class="input-navbar-header-label" for="modal-user-name"></label>
          <svg class="input-icon" width="20" height="20">
            <use href="img/sprite.svg#lupa"></use>
          </svg>
        </div>
        <div class="header-block-icon">
          <svg class="phone-icon balance" width="20" height="11">
            <use href="img/sprite.svg#balance"></use>
          </svg>
          <svg class="phone-icon" width="20" height="20">
            <use href="img/sprite.svg#heart"></use>
          </svg>
          <svg class="phone-icon" width="20" height="20">
            <use href="img/sprite.svg#shopping"></use>
          </svg>
          <p class="header-text">Корзина</p>
        </div>
      </div>
    </div>
    <section class="section scooters">
      <div class="container">
        <div class="block-scooters">
          <div class="block-location">
            <svg class="location-icon" width="15" height="15">
              <use href="img/sprite.svg#group"></use>
            </svg>
            <p class="location-text">Восточно-Кругликовская улица, 86</p>
            <p class="location-text-data">Вт - Сб 10:00 - 20:00</p>
          </div>
          <h1 class="location-title">Запишитесь на бесплатный тест-драйв электросамокатов</h1>
          <p class="location-text-p">в Москве без ограничения по времени</p>
          <div class="block-choice">
            <div class="block-group">
              <div class="group-image">
                <svg class="choice-icon" width="16" height="16">
                  <use href="img/sprite.svg#scooter"></use>
                </svg>
              </div>
              <p class="block-group-text">Поймете, какая модель вам подходит</p>
            </div>
            <div class="block-group">
              <div class="group-image">
                <svg class="choice-icon" width="10" height="16">
                  <use href="img/sprite.svg#energy"></use>
                </svg>
              </div>
              <p class="block-group-text">Проверите лучшие самокаты в деле</p>
            </div>
          </div>
          <button type="submit" class="button scooters-form-button" data-toggle="modal" data-target="#feedback-modal">Записаться</button>
        </div>
      </div>
    </section>
    <section class="section model">
      <div class="container">
        <div class="modal-block">
          <div class="container-modal">
            <h2 class="section-title">Определите максимально подходящую вам модель
              не теоретически, а на практике</h2>
            <div class="model-container-wrapper">
              <div class="model-container-content">
                <p class="model-container-text">Тест-драйв поможет:</p>
                <ul class="model-container-list">
                  <li class="model-container-list-item">
                    <svg width="30" height="30" class="model-container-list-icon">
                      <use href="/img/sprite.svg#outlined"></use>
                    </svg>
                    <span class="bold">Понять</span>  подходит ли вам конкретная модель;
                  </li>
                  <li class="model-container-list-item">
                    <svg width="30" height="30" class="model-container-list-icon">
                      <use href="img/sprite.svg#outlined"></use>
                    </svg>
                    <span class="bold">Испытать</span> самокат в «реальной жизни»;
                  </li>
                  <li class="model-container-list-item">
                    <svg width="30" height="30" class="model-container-list-icon">
                      <use href="img/sprite.svg#outlined"></use>
                    </svg>
                    <span class="bold">Оценить</span> удобство хранения и эксплуатации;
                  </li>
                  <li class="model-container-list-item">
                    <svg width="30" height="30" class="model-container-list-icon">
                      <use href="img/sprite.svg#outlined"></use>
                    </svg>
                    <span class="bold">Узнать</span> реальные характеристики и возможности модели.
                  </li>
                </ul>
              </div>
              <!-- /.model-content -->
            </div>
          </div>
        </div>
      </div>
      <picture  class="model-container-photo">
        <source type="image/webp" srcset="img/E-Scooters.webp">
        <source type="image/jpg" srcset="img/E-Scooters.jpg">
        <img src="img/E-Scooters.jpg" alt="E-Scooters_Thumb">
      </picture>
    </section>
    <section class="section safety">
      <picture  class="safety-container-photo">
        <source type="image/webp" srcset="img/safety2.webp">
        <source type="image/png" srcset="img/safety2.png">
        <img src="img/safety2.png" alt="safety">
      </picture>
      <div class="container">
        <div class="content-wrapper">
          <div class="container-safety">
            <h2 class="section-title">Научим правильной и безопасной езде в городе вас или вашего ребенка</h2>
            <div class="safety-container-wrapper">
              <div class="safety-container-content">
                <p class="safety-container-text">На обучении специалист расскажет:</p>
                <ul class="safety-container-list">
                  <li class="safety-container-list-item">
                    <svg width="30" height="30" class="safety-container-list-icon">
                      <use href="/img/sprite.svg#outlined"></use>
                    </svg>
                    Как подготовить самокат к поездке;
                  </li>
                  <li class="safety-container-list-item">
                    <svg width="30" height="30" class="safety-container-list-icon">
                      <use href="img/sprite.svg#outlined"></use>
                    </svg>
                    Как «завести» самокат;
                  </li>
                  <li class="safety-container-list-item">
                    <svg width="30" height="30" class="safety-container-list-icon">
                      <use href="img/sprite.svg#outlined"></use>
                    </svg>
                    Как вести себя во время поездки и обезопасить себя и окружающих;
                  </li>
                  <li class="safety-container-list-item">
                    <svg width="30" height="30" class="safety-container-list-icon">
                      <use href="img/sprite.svg#outlined"></use>
                    </svg>
                    Как складывать и раскладывать электросамокат;
                  </li>
                  <li class="safety-container-list-item">
                    <svg width="30" height="30" class="safety-container-list-icon">
                      <use href="img/sprite.svg#outlined"></use>
                    </svg>
                    Как ухаживать за своим девайсом.
                  </li>
                </ul>
              </div>
                <!-- /.safety-content -->
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="section test">
      <div class="container">
        <div class="test-title">
          <h2 class="section-title">Сейчас для тест-драйва и обучения доступны следующие модели</h2>
        </div>
        <!-- Slider main container -->
        <div class="swiper steps-slider">
          <!-- Additional required wrapper -->
          <ol class="swiper-wrapper test-card">
            <!-- Slides -->
            <li class="swiper-slide test-cards">
              <div class="test-status">
                <div class="test-status-block">
                  <p class="test-text">ХИТ</p>
                  <div class="block-icon">
                    <svg width="20" height="12" class="test-status-icon">
                      <use href="img/sprite.svg#balance"></use>
                    </svg>
                  </div>
                </div>
              </div>
              <div class="block-description">
                <h3 class="cards-title">Kugoo Kirin M4</h3>
                <ul class="cards-container-list">
                  <li class="cards-container-item">
                    <svg width="18" height="18" class="cards-container-list-icon">
                      <use href="img/sprite.svg#accumulator"></use>
                    </svg>
                    <p class="cards-item-text">2000 mAh</p>
                  </li>
                  <li class="cards-container-item">
                    <svg width="18" height="18" class="cards-container-list-icon">
                      <use href="img/sprite.svg#speedometer"></use>
                    </svg>
                    <p class="cards-item-text">60 км/ч</p>
                  </li>
                  <li class="cards-container-item">
                    <svg width="18" height="18" class="cards-container-list-icon">
                      <use href="img/sprite.svg#power"></use>
                    </svg>
                    <p class="cards-item-text">1,2 л.с.</p>
                  </li>
                  <li class="cards-container-item">
                    <svg width="18" height="18" class="cards-container-list-icon">
                      <use href="img/sprite.svg#timer"></use>
                    </svg>
                    <p class="cards-item-text">5 часов</p>
                  </li>
                </ul>
                <div class="test-block">
                  <div class="test-price">
                    <p class="text-price">39 900 ₽</p>
                    <h3 class="title-price">29 900 ₽</h3>
                  </div>
                  <div class="test-shopping-cart">
                    <div class="block-cart">
                      <svg width="20" height="20" class="price-icon">
                        <use href="img/sprite.svg#shopping-cart"></use>
                      </svg>
                    </div>
                    <div class="block-cart">
                      <svg width="20" height="20" class="price-icon">
                        <use href="img/sprite.svg#heart"></use>
                      </svg>
                    </div>
                  </div>
                </div>
                <button type="submit" class="button test-form-button">Записаться на тест-драйв</button>
              </div>
            </li>
            <li class="swiper-slide test-cards">
              <div class="test-status">
                <div class="test-status-block">
                  <p class="test-text" id="new">Новинка</p>
                  <div class="block-icon">
                    <svg width="20" height="12" class="test-status-icon">
                      <use href="img/sprite.svg#balance"></use>
                    </svg>
                  </div>
                </div>
              </div>
              <div class="block-description">
                <h3 class="cards-title">Kugoo Kirin M4</h3>
                <ul class="cards-container-list">
                  <li class="cards-container-item">
                    <svg width="18" height="18" class="cards-container-list-icon">
                      <use href="img/sprite.svg#accumulator"></use>
                    </svg>
                    <p class="cards-item-text">2000 mAh</p>
                  </li>
                  <li class="cards-container-item">
                    <svg width="18" height="18" class="cards-container-list-icon">
                      <use href="img/sprite.svg#speedometer"></use>
                    </svg>
                    <p class="cards-item-text">60 км/ч</p>
                  </li>
                  <li class="cards-container-item">
                    <svg width="18" height="18" class="cards-container-list-icon">
                      <use href="img/sprite.svg#power"></use>
                    </svg>
                    <p class="cards-item-text">1,2 л.с.</p>
                  </li>
                  <li class="cards-container-item">
                    <svg width="18" height="18" class="cards-container-list-icon">
                      <use href="img/sprite.svg#timer"></use>
                    </svg>
                    <p class="cards-item-text">5 часов</p>
                  </li>
                </ul>
                <div class="test-block">
                  <div class="test-price">
                    <p class="text-price">39 900 ₽</p>
                    <h3 class="title-price">29 900 ₽</h3>
                  </div>
                  <div class="test-shopping-cart">
                    <div class="block-cart">
                      <svg width="20" height="20" class="price-icon">
                        <use href="img/sprite.svg#shopping-cart"></use>
                      </svg>
                    </div>
                    <div class="block-cart">
                      <svg width="20" height="20" class="price-icon">
                        <use href="img/sprite.svg#heart"></use>
                      </svg>
                    </div>
                  </div>
                </div>
                <button type="submit" class="button test-form-button">Записаться на тест-драйв</button>
              </div>
            </li>
            <li class="swiper-slide test-cards">
              <div class="test-status">
                <div class="test-status-block">
                  <p class="test-text">ХИТ</p>
                  <div class="block-icon">
                    <svg width="20" height="12" class="test-status-icon">
                      <use href="img/sprite.svg#balance"></use>
                    </svg>
                  </div>
                </div>
              </div>
              <div class="block-description">
                <h3 class="cards-title">Kugoo Kirin M4</h3>
                <ul class="cards-container-list">
                  <li class="cards-container-item">
                    <svg width="18" height="18" class="cards-container-list-icon">
                      <use href="img/sprite.svg#accumulator"></use>
                    </svg>
                    <p class="cards-item-text">2000 mAh</p>
                  </li>
                  <li class="cards-container-item">
                    <svg width="18" height="18" class="cards-container-list-icon">
                      <use href="img/sprite.svg#speedometer"></use>
                    </svg>
                    <p class="cards-item-text">60 км/ч</p>
                  </li>
                  <li class="cards-container-item">
                    <svg width="18" height="18" class="cards-container-list-icon">
                      <use href="img/sprite.svg#power"></use>
                    </svg>
                    <p class="cards-item-text">1,2 л.с.</p>
                  </li>
                  <li class="cards-container-item">
                    <svg width="18" height="18" class="cards-container-list-icon">
                      <use href="img/sprite.svg#timer"></use>
                    </svg>
                    <p class="cards-item-text">5 часов</p>
                  </li>
                </ul>
                <div class="test-block">
                  <div class="test-price">
                    <p class="text-price">39 900 ₽</p>
                    <h3 class="title-price">29 900 ₽</h3>
                  </div>
                  <div class="test-shopping-cart">
                    <div class="block-cart">
                      <svg width="20" height="20" class="price-icon">
                        <use href="img/sprite.svg#shopping-cart"></use>
                      </svg>
                    </div>
                    <div class="block-cart">
                      <svg width="20" height="20" class="price-icon">
                        <use href="img/sprite.svg#heart"></use>
                      </svg>
                    </div>
                  </div>
                </div>
                <button type="submit" class="button test-form-button">Записаться на тест-драйв</button>
              </div>
            </li>
            <li class="swiper-slide test-cards">
              <div class="test-status">
                <div class="test-status-block">
                  <p class="test-text" id="new">Новинка</p>
                  <div class="block-icon">
                    <svg width="20" height="12" class="test-status-icon">
                      <use href="img/sprite.svg#balance"></use>
                    </svg>
                  </div>
                </div>
              </div>
              <div class="block-description">
                <h3 class="cards-title">Kugoo Kirin M4</h3>
                <ul class="cards-container-list">
                  <li class="cards-container-item">
                    <svg width="18" height="18" class="cards-container-list-icon">
                      <use href="img/sprite.svg#accumulator"></use>
                    </svg>
                    <p class="cards-item-text">2000 mAh</p>
                  </li>
                  <li class="cards-container-item">
                    <svg width="18" height="18" class="cards-container-list-icon">
                      <use href="img/sprite.svg#speedometer"></use>
                    </svg>
                    <p class="cards-item-text">60 км/ч</p>
                  </li>
                  <li class="cards-container-item">
                    <svg width="18" height="18" class="cards-container-list-icon">
                      <use href="img/sprite.svg#power"></use>
                    </svg>
                    <p class="cards-item-text">1,2 л.с.</p>
                  </li>
                  <li class="cards-container-item">
                    <svg width="18" height="18" class="cards-container-list-icon">
                      <use href="img/sprite.svg#timer"></use>
                    </svg>
                    <p class="cards-item-text">5 часов</p> 
                  </li>
                </ul>
                <div class="test-block">
                  <div class="test-price">
                    <p class="text-price">39 900 ₽</p>
                    <h3 class="title-price">29 900 ₽</h3>
                  </div>
                  <div class="test-shopping-cart">
                    <div class="block-cart">
                      <svg width="20" height="20" class="price-icon">
                        <use href="img/sprite.svg#shopping-cart"></use>
                      </svg>
                    </div>
                    <div class="block-cart">
                      <svg width="20" height="20" class="price-icon">
                        <use href="img/sprite.svg#heart"></use>
                      </svg>
                    </div>
                  </div>
                </div>
                <button type="submit" class="button test-form-button">Записаться на тест-драйв</button>
              </div>
            </li>
          </ol>
        </div>
      </div>
    </section>
    <section class="cta">
      <div class="bg-grey">
        <div class="section-cta">
          <picture class="cta-image">
            <source type="image/webp" srcset="img/woman.webp">
            <source type="image/jpeg" srcset="img/woman.png">
            <img src="img/woman.png" alt="call to action" width="100%" height="100%">
          </picture>
          <div class="container">
            <div class="cta-form-wrapper">
              <form action="handler.php" method="POST" class="cta-form">
                <h2 class="section-title cta-form-title">Нет нужной модели, которую хотите протестировать?</h2>
                <p class="cta-form-text">Оставьте заявку, и менеджер подберет нужный самокат</p>
                <div class="input-group-wrapper">
                  <div class="input-group-modal">
                    <input id="user-phone" type="tel" class="input phone-mask" name="userphone" placeholder=" ">
                    <label class="input-group-label" for="user-phone">+7 (___) __ - __ - __</label>
                  </div>
                  <button type="submit" class="cta-form-button">Оставить заявку на тест-драйв</button>
                </div>
                <div class="cta-form-footer">
                  <div class="notify">
                    <input type="checkbox" class="custom-checkbox" name="notify" id="notify">
                    <label for="notify" class="notify-text">Нажимая на кнопку, вы соглашаетесь на обработку персональных данных и <u>политикой конфиденциальности</u></label>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
    <footer class="footer">
      <div class="bg-purple">
        <div class="container">
          <div class="mail">
            <p class="mail-text">Оставьте свою почту и станьте первым, кто получит скидку на новые самокаты</p>
          <div class="input-group-wrapper-mail">
            <div class="input-group-mail">
              <input id="user-mail" type="mail" class="input mail-mask" name="usermail" placeholder=" ">
              <label class="input-group-label-mail" for="user-mail">Введите Ваш email</label>
            </div>
            <button type="submit" class="mail-form-button">Подписаться</button>
          </div>
          </div>
        </div>
      </div>
      <div class="bg-gray">
        <div class="container">
          <div class="mail-block">
            <div class="footer-bottom">
              <div class="footer-menu-wrapper">
                <h2 class="footer-menu-title">Каталог товаров</h2>
                <ul class="footer-menu-list ">
                  <li class="footer-menu-item">
                    <a href="" class="footer-menu-link">Электросамокатыя</a>
                  </li>
                  <li class="footer-menu-item">
                    <a href="" class="footer-menu-link">Электроскутеры</a>
                  </li>
                  <li class="footer-menu-item">
                    <a href="" class="footer-menu-link">Электровелосипеды</a>
                  </li>
                  <li class="footer-menu-item">
                    <a href="" class="footer-menu-link">Электровелосипеды</a>
                  </li>
                </ul>
              </div>
              <!-- /.footer-menu-wrapper -->
              <div class="footer-menu-wrapper">
                <h2 class="footer-menu-title">Покупателям</h2>
                <ul class="footer-menu-list footer-menu-column-2">
                  <li class="footer-menu-item">
                    <a href="" class="footer-menu-link">Сервисный центр</a>
                  </li>
                  <li class="footer-menu-item">
                    <a href="" class="footer-menu-link">Доставка и оплата</a>
                  </li>
                  <li class="footer-menu-item">
                    <a href="" class="footer-menu-link">Рассрочка</a>
                  </li>
                  <li class="footer-menu-item">
                    <a href="" class="footer-menu-link">Тест-драйв</a>
                  </li>
                  <li class="footer-menu-item">
                    <a href="" class="footer-menu-link">Блог</a>
                  </li>
                  <li class="footer-menu-item">
                    <a href="" class="footer-menu-link">Сотрудничество</a>
                  </li>
                  <li class="footer-menu-item">
                    <a href="" class="footer-menu-link">Контакты</a>
                  </li>
                  <li class="footer-menu-item">
                    <a href="" class="footer-menu-link">Акции</a>
                  </li>
                </ul>
              </div>
              <div class="footer-menu-wrapper">
                <h2 class="footer-menu-title">Контакты</h2>
                <ul class="footer-menu-list footer-menu-column-2">
                  <li class="footer-menu-item">
                    <p class="footer-menu-text">Call-центр</p>
                  </li>
                  <li class="footer-menu-item">
                    <a href="tel:+78005055461" class="footer-phone">+7 (800) 505-54-61</a>
                  </li>
                  <li class="footer-menu-item">
                    <p class="footer-copyright">Пн-Вс 10:00 - 20:00</p>
                  </li>
                  <li class="footer-menu-item">
                    <p class="footer-menu-text">Сервисный центр</p>
                  </li>
                  <li class="footer-menu-item">
                    <a href="tel:+74993507692" class="footer-phone">+7 (499) 350-76-92</a>
                  </li>
                  <li class="footer-menu-item">
                    <p class="footer-copyright">Пн-Вс 10:00 - 20:00</p>
                  </li>
                </ul>
              </div>
              <div class="bell">
                <a href="" class="footer-menu-link-bell">Заказать звонок</a>
              </div>
              <!-- /.footer-menu-wrapper -->
            </div>
            <div class="social">
              <picture  class="navbar-header-logo">
                <source type="image/webp" srcset="img/logo.webp">
                <source type="image/png" srcset="img/logo.png">
                <img src="img/logo.png" alt="logo" width="100%" height="100%">
              </picture>
              <div class="social-store">
                <button type="submit" class="social-form-button-store">
                  <picture  class="footer-social">
                    <source type="image/webp" srcset="img/google.webp">
                    <source type="image/png" srcset="img/google.png">
                    <img src="img/google.png" alt="google" width="100%" height="100%">
                  </picture>
                </button>
                <button type="submit" class="social-form-button-store">
                  <picture  class="footer-social">
                    <source type="image/webp" srcset="img/app.webp">
                    <source type="image/png" srcset="img/app.png">
                    <img src="img/app.png" alt="app" width="100%" height="100%">
                  </picture>
                </button>
              </div>
              <div class="social-block">
                <button type="submit" class="social-form-button">
                  <svg width="20" height="20" class="social-icon-button">
                    <use href="img/sprite.svg#vk"></use>
                  </svg>
                  <div class="colums-text">
                    <p class="social-icon-text">Вконтакте</p>
                    <p class="social-icon-cent">3 300</p>
                  </div>
                </button>
                <button type="submit" class="social-form-button">
                  <svg width="20" height="20" class="social-icon-button">
                    <use href="img/sprite.svg#yotube"></use>
                  </svg>
                  <div class="colums-text">
                    <p class="social-icon-text">YouTube</p>
                    <p class="social-icon-cent">3 603</p>
                  </div>
                </button>
                <button type="submit" class="social-form-button">
                  <svg width="20" height="20" class="social-icon-button">
                    <use href="img/sprite.svg#telegram1"></use>
                  </svg>
                  <div class="colums-text">
                    <p class="social-icon-text">Telegram</p>
                    <p class="social-icon-cent">432</p>
                  </div>
                </button>
              </div>
            </div>
            <!-- /.social -->
            <!-- <hr class="footer-seporator"> -->
            <div class="footer-political">
              <ul class="footer-text-list">
                <li class="footer-text-item">Реквизиты</li>
                <li class="footer-text-item">Политика конфиденциальности</li>
              </ul>
              <div class="footer-bank">
                <picture  class="footer-bank-logo">
                  <source type="image/webp" srcset="img/gpay.webp">
                  <source type="image/png" srcset="img/gpay.png">
                  <img src="img/gpay.png" alt="gpay" width="35" height="24">
                </picture>
                <picture  class="footer-bank-logo">
                  <source type="image/webp" srcset="img/apay.webp">
                  <source type="image/png" srcset="img/apay.png">
                  <img src="img/apay.png" alt="apay" width="35" height="24">
                </picture>
                <picture  class="footer-bank-logo">
                  <source type="image/webp" srcset="img/visa.webp">
                  <source type="image/png" srcset="img/visa.png">
                  <img src="img/visa.png" alt="visa" width="35" height="24">
                </picture>
                <picture  class="footer-bank-logo">
                  <source type="image/webp" srcset="img/mc.webp">
                  <source type="image/png" srcset="img/mc.png">
                  <img src="img/mc.png" alt="mc" width="35" height="24">
                </picture>
                <picture  class="footer-bank-logo">
                  <source type="image/webp" srcset="img/card.webp">
                  <source type="image/png" srcset="img/card.png">
                  <img src="img/card.png" alt="card" width="35" height="24">
                </picture>
                <picture  class="footer-bank-logo">
                  <source type="image/webp" srcset="img/wm.webp">
                  <source type="image/png" srcset="img/wm.png">
                  <img src="img/wm.png" alt="wm" width="35" height="24">
                </picture>
                <picture  class="footer-bank-logo">
                  <source type="image/webp" srcset="img/qivi.webp">
                  <source type="image/png" srcset="img/qivi.png">
                  <img src="img/qivi.png" alt="qivi" width="35" height="24">
                </picture>
              </div>
              <div class="social-online">
                <p class="online-text">Online чат:</p>
                <svg width="16" height="16" class="social-icon">
                  <use href="img/sprite.svg#viber2"></use>
                </svg>
                <svg width="16" height="16" class="social-icon">
                  <use href="img/sprite.svg#whatsapp2"></use>
                </svg>
                <svg width="16" height="16" class="social-icon">
                  <use href="img/sprite.svg#telegram2"></use>
                </svg>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <div class="modal" id="feedback-modal">
      <div class="modal-dialog">
        <div class="modal-body-block">
          <h2 class="modal-title">Запишитесь на тест-драйв электросамоката</h2>
          <p class="modal-title-text">и подберите модель для себя</p>
          <p class="modal-text-menedjer">Менеджер свяжется с вами в течение 5 минут, чтобы согласовать время.</p>
          <a href="#" class="modal-close" data-toggle="modal" data-target="#feedback-modal">
            <svg class="close-icon" width="24" height="24">
              <use href="img/sprite.svg#close"></use>
            </svg>
          </a>
          <p class="modal-text">Как с вами удобнее связаться?</p>
          <form action="handler.php" method="POST" class="modal-form">
            <div class="input-group-wrapper input-group-vertical">
              <div class="input-group modal-input-group">
                <input id="modal-user-phone" type="tel" class="input phone-modal phone-mask" name="userphone" placeholder=" ">
                <label class="input-group-label modal-input-label" for="modal-user-phone">+7 (___) __ - __ - __</label>
              </div>
              <button type="submit" class="button cta-modal-form-button">Оформить предзаказ</button>
            </div>
            <div class="cta-form-footer-modal">
              <div class="notify-modal">
                <input type="checkbox" class="custom-checkbox" name="notify" id="notify">
                <label for="notify" class="notify-text">Нажимая на кнопку, вы соглашаетесь на обработку персональных данных и <u class="text-purple">политикой конфиденциальности</u></label>
              </div>
            </div> 
          </form>
        </div>
          <div class="modal-block-logo">
            <picture class="modal-logo">
              <source type="image/webp" srcset="img/woman2.webp">
              <source type="image/jpeg" srcset="img/woman2.png">
              <img src="img/woman2.png" alt="Запишитесь">
            </picture>
          </div>
      </div>
    </div>
    <script src="js/swiper-bundle.min.js"></script>
    <script src="js/just-validate.production.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>