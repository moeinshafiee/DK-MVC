<div class="product-igallery">
    <?php
    if ($row['offer'] == 1) { ?>
      <div class="product-gallery__offer">
        <img src="/digikala/public/images/product/eccdcccd.png" alt="">
      </div>
    <?php } ?>


  <div class="gallery">
    <div class="gallery-item">
      <div class="gallery-img">
        <img src="<?= $row['b-image']; ?>" alt="">
      </div>
    </div>
    <ul class="gallery-items">
        <?php
        $gallery = $data[1];
        foreach ($gallery as $image) {
            ?>
          <li data-img-src="/digikala/public/images/products/gallery/large/<?= $image['name']; ?>">
            <div class="thumb-wrapper">
              <img src="/digikala/public/images/products/gallery/thumb/<?= $image['name']; ?>" alt="">
            </div>
          </li>
        <?php } ?>
      <!--      <li data-img-src="/digikala/public/images/product/gallery/main/113563203.jpg">-->
      <!--        <div class="thumb-wrapper">-->
      <!--          <img src="/digikala/public/images/product/gallery/113563203.jpg" alt="">-->
      <!--          <span class="more-bullets"></span>-->
      <!--        </div>-->
      <!--      </li>-->
    </ul>
  </div>
</div>