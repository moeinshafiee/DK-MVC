<!--scroller slider #1-->
<div class="container-fluid sc-slider-container">
  <div class="row sc-slider-row">

    <div href="" class="sc-slider-title">
      <img src="/digikala/public/images/slider/d9b15d68.png" alt="پیشنهاد شگفت‌انگیز">
      <button type="button" class="btn btn-outline-dark sc-special-btn">مشاهده همه</button>
    </div>

    <div class="sc-t-div">

      <ul class="sc-ul">
          <?php
          $offerSlider = $data[1];
          foreach ($offerSlider as $row) {
              ?>
            <li>
              <div class="scroller-slide">
                <a href="<?= URL ?>product/index/<?= $row['id']; ?>" class="c-product-box__box-link"></a>
                <div class="swiper-product">
                  <div class="c-swiper-product c-product-img">

                    <img src="<?= $row['b-image']?>" alt="" class="">
                  </div>
                  <div class="product-title"><?= $row['name']?></div>
                  <div class="product-box-row">
                    <div class="c-price">
                      <del><?= $row['price']?></del>
                      <div class="c-price-discount"><span><?= $row['discount']?>٪</span></div>
                      <div class="c-price__value">
                          <?= $row['discounted_price']?>
                        <span class="c-price__currency">تومان</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </li>
              <?php
          }
          ?>

      </ul>

      <div class="sc-prev-btn sc-btn-disabled" onclick="scroller('prev',this);">
        <img src="/digikala/public/images/slider/prev.svg" alt="" class="sc-prev-svg">
      </div>
      <div class="sc-next-btn" onclick="scroller('next',this);">
        <img src="/digikala/public/images/slider/next.svg" alt="" class="sc-next-svg">
      </div>


    </div>

  </div>
</div>
<!-- end of scroller slider #1-->