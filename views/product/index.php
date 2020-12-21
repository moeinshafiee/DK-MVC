<?php $row = $data[0]; ?>
<div class="container-fluid product-container">

    <?php require 's-breadcrumb.php'; ?>
  <div class="product-row">
      <?php require 'product-igallery.php'; ?>

    <div class="product-info">
      <div class="product-headline">
        <h1 class="product-title"><?= $row['name'] ?></h1>
      </div>
      <div class="product-attributes">
          <?php require 'product-config.php'; ?>
          <?php require 'seller-info.php'; ?>
      </div>
    </div>

  </div>
    <?php require 'tabs.php' ?>
</div>
<?php require 'product-modal.php' ?>
<!--<script src="js/jquery-3.4.1.slim.min.js"></script>-->
<script src="/digikala/public/js/jquery-3.4.1.min.js"></script>
<script src="/digikala/public/js/popper.min.js"></script>
<script src="/digikala/public/js/bootstrap.min.js"></script>
<script src="/digikala/public/js/script.js"></script>
<!--<script src="js/scriptt.js" async></script>-->
<script>
    // $(document).ready(function () {});
    var productGallery = $('.product-modal-content');
    var galleryItems = productGallery.find('.modal-main-img');

    function showGallery(imageUrl, index) {
        galleryThumbs.removeClass('active');
        galleryThumbs.eq(index).addClass('active');
        productGallery.find('.main-gimage').attr('src', imageUrl);
    }

    var galleryThumbs = productGallery.find('.modal-gallery-images .modal-gallery-thumbs .modal-gallery-thumb');

    galleryThumbs.click(function () {
        var index = $(this).index();
        var imageSrc = $(this).attr('data-img-src');
        showGallery(imageSrc, index);
    });

    var productModal = $('.product-gallery-modal');

    productModal.find('.close-modal').click(function () {
        $('.product-modal-overlay').fadeOut(200);
        productModal.fadeOut(200);

    });

    $('.product-modal-overlay').click(function () {
        $('.product-modal-overlay').fadeOut(200);
        productModal.fadeOut(200);

    });

    $('.product-igallery ul li').click(function () {

        var index = $(this).index();
        var imageSrc = $(this).attr('data-img-src');
        showGallery(imageSrc, index);

        $('.product-modal-overlay').fadeIn(200);
        productModal.fadeIn(200);
    });

</script>

<script>
    $('.study-articles .article-items .more-btn').click(function () {

        var item = $(this).parents('.article-items');
        $(this).toggleClass('active');
        $('.article-item-text', item).slideToggle(300);
    });

    $('.tabs .tabs-heading .tabs-item').click(function () {

        var tabContent = ('.tabs-content > div');
        var tabsItem = ('.tabs-heading li');
        $(tabsItem).removeClass('is-active');
        $(this).addClass('is-active');
        var index = $(this).index();
        var contentNumber = $(tabContent).eq(index);

        var url = 'http://localhost/digikala/product/tab/<?= $row['id'] ?>/<?= $row['id_category'] ?>';
        var data = {'num':index};

        $.post(url, data, function (msg) {
            contentNumber.html(msg);
            // alert(msg);
        });

        $(tabContent).fadeOut(0);

        contentNumber.fadeIn(200);

    });
</script>

