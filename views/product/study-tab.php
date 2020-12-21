<!--    <h2 class="study-headline">-->
<!--        نقد و بررسی اجمالی-->
<!--        <span>Samsung Galaxy A20s SM-A207F/DS Dual SIM 32GB Mobile Phone</span>-->
<!--    </h2>-->
<!--    <div class="study-content"></div>-->
<!--    <div class="short-review">-->
<!--        <h2 class="review-headline">نقد و بررسی تخصصی</h2>-->
<!--        <p>گوشی های سامسونگ سری Galaxy A امسال به صورت متنوع تری وارد بازار شدند. شرکت سامسونگ در سال 2019 در کنار-->
<!--            معرفی پرچم دار خود یعنی Galaxy S10 از گوشی های میان رده خود هم غافل نشده است و گوشی هایی از سری Galaxy M و-->
<!--            Galaxy A نیز روانه بازار کرده است. گوشی های گلکسی A10 ،A30 ،A30s ،A50s ،A50 از گوشی هایی هستند که با تازگی-->
<!--            معرفی شده‎اند.</p>-->
<!--    </div>-->
<?php
$study = $data[0];
foreach ($study as $row) {
    ?>
  <div class="study-articles">
    <section class="article-items">
      <span class="more-btn"></span>
      <h2 class="article-title"><?= $row['title'] ?></h2>
      <div class="article-item-text">
        <p><?= $row['description'] ?></p>
      </div>
    </section>
    <!--        <section class="article-items">-->
    <!--            <div class="article-item-text">-->
    <!--                <div class="article-item-img">-->
    <!--                    <img src="/digikala/public//digikala/images/product/101467756.jpg" alt="image of article">-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </section>-->
  </div>
    <?php
}
?>

