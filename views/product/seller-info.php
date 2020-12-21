<div class="seller-info">
    <div class="seller-details">
        <div class="seller-row">
            <div class="seller-row-inner seller-row-inner-arrow">
                <div class="seller-name">
                    فروشنده:
                    <span>دیجی‌کالا</span>
                </div>
            </div>
        </div>
        <div class="seller-row">
            <div class="seller-row-inner">
                گارانتی ۱۸ ماهه دیجی کالا
            </div>
        </div>
        <div class="seller-row">
            <div class="seller-row-inner seller-row-inner-arrow">
                موجود در انبار دیجی‌کالا
            </div>
        </div>

        <div class="seller-row seller-row-price">
          <div class="c-product__seller-price-info">
              <div class="c-product__seller-price-prev"><?= $row['price']?></div>
              <div class="c-product__seller-price-off"><?= $row['discount']?>%</div>
          </div>
            <div class="seller-row-inner-price"><?= $row['discountedPrice']?></div>
            تومان
        </div>

        <div class="seller-row">
            <a href="" class="add2cart-btn">افزودن به سبد خرید</a>
        </div>

    </div>
</div>