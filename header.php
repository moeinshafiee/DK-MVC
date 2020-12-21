<!DOCTYPE html>
<html lang="fa">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>index</title>
  <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <link rel="stylesheet" href="/digikala/public/css/bootstrap.min.css">
  <link rel="stylesheet" href="/digikala/public/css/style.css">
  <link rel="stylesheet" href="/digikala/public/css/product-style.css">
  <link rel="stylesheet" href="/digikala/public/css/cart-style.css">
  <link rel="stylesheet" href="public/css/profile-style.css">
  <link rel="stylesheet" href="/digikala/public/css/shipping-style.css">

  <link rel="stylesheet" href="/digikala/public/css/search-style.css">
  <link rel="stylesheet" href="/digikala/public/css/svg-style.css">
  <link rel="stylesheet" href="/digikala/public/css/fontiran.css">


</head>

<body>

<header>
  <aside id="aside-header">
    <a href="#" id="aside-a" style="background-image: url(/digikala/public/images/1111.jpg)"
       title="اقدامات دیجی‌کالا در دوران کرونا"></a>
  </aside>
  <div class="container-fluid ">
    <div class="row" id="header-row">
      <div class="col-8" id="right-header">
        <div class="c-header__logo">
          <a data-snt-event="dkHeaderClick"
             data-snt-params="{&quot;item&quot;:&quot;digikala-logo&quot;,&quot;item_option&quot;:null}"
             href="/?ref=nav_logo" class="c-header__logo-img">Digikala</a>
        </div>
        <div id="header-search">
          <img class="svg-icon" src="/digikala/public/icons/search.svg" alt="">
          <form class="form-inline ">
            <input class="form-control shadow-none" id="search-input" type="search" placeholder="جستجو در دیجی‌کالا ..."
                   aria-label="Search">
          </form>
        </div>
      </div>
      <div class="col-4" id="left-header">
        <div class="shopping-cart">
          <img class="cart-svg" src="/digikala/public/icons/cart.svg" alt="">
        </div>
        <a href="<?= URL ?>login" class="header-login-btn">ورود به حساب کاربری</a>

      </div>
    </div>
  </div>

  <nav class="nav-menu ">
    <div class="container-fluid">

      <ul class="nav header-nav-ul">
        <li class="nav-item level1-li" style="margin-left: 7px;">
          <a class="nav-link " href="#" style="padding-right: 9px;"><img class="menu-svg"
                                                                         src="/digikala/public/icons/menu.svg" alt="">دسته‌بندی
            کالاها</a>

          <div class="subnav-container" style="background: #cbff9e;margin-top: 2px;">
            <div class="list-group level2-nav">
              <a href="#" class="list-group-item list-group-item-action border-0 my-item is-hovered" cat-index="1"
                 id="first-ch">کالای دیجیتال</a>
              <a href="#" class="list-group-item list-group-item-action border-0 my-item" cat-index="2">آرایشی، بهداشتی
                و سلامت</a>
              <a href="#" class="list-group-item list-group-item-action border-0 my-item" cat-index="3">خودرو، ابزار و
                اداری</a>
              <a href="#" class="list-group-item list-group-item-action border-0 my-item" cat-index="4">مد و پوشاک</a>
              <a href="#" class="list-group-item list-group-item-action border-0 my-item" cat-index="5">خانه و
                آشپزخانه</a>

            </div>

            <div class="level3-nav is-active" id="cat-1">
              کالای دیجیتال
            </div>
            <div class="level3-nav " id="cat-2" style="background: #e5ffc7;">
              آرایشی، بهداشتی و سلامت
            </div>
            <div class="level3-nav" id="cat-3" style="background: yellow;">
              خودرو، ابزار و اداری
            </div>

          </div>

        </li>
        <li class="nav-item ">
          <a class="nav-link header-nav-padd border-right" href="#">سوپرمارکت</a>
        </li>
        <li class="nav-item">
          <a class="nav-link header-nav-padd" href="#">تخفیف‌ها و پیشنهادها</a>
        </li>
        <li class="nav-item">
          <a class="nav-link header-nav-padd" href="#">دیجی‌کالای من</a>
        </li>
        <li class="nav-item">
          <a class="nav-link header-nav-padd" href="#">دیجی‌کلاب</a>
        </li>
        <li class="nav-item">
          <a class="nav-link header-nav-padd" href="#">سوالی دارید؟</a>
        </li>
        <li class="nav-item">
          <a class="nav-link header-nav-padd" href="#">فروشنده شوید</a>
        </li>

      </ul>
    </div>
  </nav>

</header>
<div class="nav-overlay "></div>