<?php $slider = $data[0];  ?>
<div class="col-8 carousel">
      <section class="car-section">
        <div class="car-div">

          <?php
            foreach ($slider as $row) {
                ?>

          <a href="<?= $row['link']; ?>" class="car-a active-slide">
            <img class="car-img " src="<?= $row['src']; ?>" alt="image of slider">
          </a>

          <?php 
            }
           ?>


        </div>
      </section>
      <div class="car-pagination">
        <span class="car-bullet "></span>
        <span class="car-bullet"></span>
        <span class="car-bullet"></span>
        <span class="car-bullet"></span>
        <span class="car-bullet"></span>
        <span class="car-bullet"></span>

      </div>
      <div class="nextSlide-btn"><img class="nextSlid-svg" src="/digikala/public/images/carousel/next.svg" alt=""></div>
      <div class="prevSlide-btn"><img class="prevSlid-svg" src="/digikala/public/images/carousel/prev.svg" alt=""></div>
    </div>