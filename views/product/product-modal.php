<div class="product-modal-overlay"></div>
<div class="product-gallery-modal">
    <div class="top-bar">
        <div class="modal-headline ">تصاویر</div>
        <span class="close-modal"></span>
    </div>
    <div class="product-modal-content ">
        <div class="modal-main-img">
            <img class="main-gimage" src="" alt="main image of gallery">
        </div>

        <div class="modal-gallery-images">
            <?php
            $gallery = $data[1];
            foreach ($gallery as $image) {
            ?>
            <div class="modal-gallery-thumbs">
                <div class="modal-gallery-thumb" data-img-src="/digikala/public/images/products/gallery/large/<?= $image['name']; ?>">
                    <img src="/digikala/public/images/products/gallery/thumb/<?= $image['name']; ?>" alt="thumb image">
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</div>
