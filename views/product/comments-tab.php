<style>
  .comments__filter {
    border-bottom: 1px solid #eee;
    display: flex;
    margin-top: 60px;
  }

  .comments__filter-title {
    font-size: 16px;
    line-height: 1.375;
    padding: 14px 19px 14px 17px;
    position: relative;
  }

  .comments__filter-items {
    display: flex;
    flex-flow: row wrap;
    font-size: 16px;
    line-height: 1.375;
    margin-right: auto;
    list-style: none;
    padding: 0;
  }

  .product-comments-list {
    list-style: none;
    padding: 0;
    margin-top: 18px;
    font-family: IRANSans, serif;
  }

  .comments__filter-items::before {
    display: inline-block;
    content: 'مرتب‌سازی بر اساس:';
    padding: 14px 10px;
  }

  .comments__filter-items li {
    /*display: inline-block;*/
    margin-right: 10px;
  }

  .comments__filter-items li a {
    display: block;
    position: relative;
    padding: 14px 17px;
    color: #4d4d4d;
  }

  .comments__filter-items li a.active {
    color: #00bfd6;
  }

  .comments__filter-items li a.active::after {
    left: 0;
    right: 0;
    top: 100%;
    height: 1px;
    content: "";
    position: absolute;
    background: #00bfd6;
  }

  .product-comments-list > li {
    border-bottom: 1px solid #f3f3f3;
    padding: 57px 30px 30px;
    margin-bottom: 36px;
  }

  .product-comments-list > li section {
    display: -ms-flexbox;
    display: -webkit-box;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    margin-right: -30px;
    margin-left: -30px;
    -ms-flex-wrap: nowrap;
    flex-wrap: nowrap;
  }

  .product-comments-list > li section .commentator {
    -ms-flex: 0 0 27%;
    -webkit-box-flex: 0;
    flex: 0 0 27%;
    max-width: 27%;
  }

  .product-comments-list > li section .article, .product-comments-list > li section .commentator {
    position: relative;
    width: 100%;
    min-height: 1px;
    padding-right: 30px;
    padding-left: 30px;
  }

  .comments-user-shopping {
    list-style: none;
    padding: 5px 0 0;
  }

  .comments-user-shopping > li {
    display: -ms-flexbox;
    display: -webkit-box;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    margin: 15px -10px;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
  }

  .comments-user-shopping > li:first-child {
    margin-top: 0;
  }

  .comments-user-shopping > li .cell {
    margin-top: 0;
    margin-bottom: 0;
    position: relative;
    width: 100%;
    min-height: 1px;
    padding-right: 10px;
    padding-left: 10px;
    width: auto;
    color: #777;
    margin: 5px 0;
  }

  .comments-user-shopping > li .cell-name {
    font-size: 16px;
    line-height: 1.375;
    font-weight: 700;
    margin-bottom: 8px;
  }

  .comments-buyer-badge {
    padding: 0 8px;
    background-color: #f0f0f1;
    border-radius: 8px;
    font-size: 10px;
    line-height: 16px;
    color: #81858b;
    margin-right: 8px;
    display: inline-block;
  }

  .product-comments-list > li section .article {
    padding-bottom: 50px;
  }

  .product-comments-list > li section .article .header {
    border-bottom: 1px solid #eee;
    padding-bottom: 20px;
    margin-bottom: 20px;
  }

  .product-comments-list > li section .article .header > div {
    font-size: 19px;
    line-height: 1.158;
    color: #5f5f5f;
    font-weight: 500;
  }

  .product-comments-list > li section .article p {
    font-size: 14px;
    line-height: 2.71;
    color: #505050;
  }

  .product-comments-list > li section .article .footer {
    margin-top: 15px;
    position: absolute;
    bottom: 0;
    right: 30px;
  }

  .comments-likes {
    text-align: left;
    color: #777;
    font-size: 13px;
    line-height: 1.692;
  }

  .comment-like-btn {
    border-radius: 8px;
    border: 1px solid #ededed;
    background: #fff;
    padding: 6px 13px;
    color: #8c8c8c;
    font-size: 13px;
    line-height: 16px;
    display: inline-block;
    background: none;
    outline: none;
    cursor: pointer;
    position: relative;
    text-align: center;
    white-space: nowrap;
    margin-right: 10px;
  }

  .comment-liked {
    border-color: #00a049;
  }

  .comment-disliked {
    border-color: #d32f2f;
  }

  .comment-like-btn[data-counter]::before {
    margin-left: 7px;
    color: #7a7a7a;
    font-size: 15px;
    line-height: inherit;
    content: attr(data-counter);
  }

  .comment-like-icon, .comment-dislike-icon {
    display: inline-block;
  }

  .comment-like-icon::before {
    display: inline-block;
    content: " ";
    /*position: absolute;*/
    background: url("/digikala/public/images/products/comments/likecomment.svg") no-repeat;
    width: 13px;
    height: 13px;
    background-size: 13px 13px;
    cursor: pointer;
    text-align: center;
    white-space: nowrap;
  }

  .comment-dislike-icon::before {
    display: inline-block;
    content: " ";
    /*position: absolute;*/
    background: url("/digikala/public/images/products/comments/dislikecomment.svg") no-repeat;
    width: 13px;
    height: 13px;
    background-size: 13px 13px;
    cursor: pointer;
    text-align: center;
    white-space: nowrap;
  }

  .comments-evaluation {
    margin: 20px 0;
  }

  .comments-advantage, .comments-disadvantage {
    position: relative;
    width: 100%;
    min-height: 1px;
    padding-right: 0;
    padding-left: 0;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: start;
    -ms-flex-align: start;
    align-items: flex-start;
  }

  .comments-advantage > span, .comments-disadvantage > span {
    width: 80px;
    -ms-flex-negative: 0;
    flex-shrink: 0;
    font-size: 14px;
    line-height: 1.571;
    white-space: nowrap;
  }

  .comments-advantage > span {
    color: #00bfd6;
  }

  .comments-disadvantage > span {
    color: #ff637d;
  }

  .comments-advantage ul, .comments-disadvantage ul {
    list-style: none;
    padding: 0;
  }

  .comments-advantage ul li, .comments-disadvantage ul li {
    margin-bottom: 12px;
    padding-right: 17px;
    color: #5f5f5f;
    position: relative;

  }

  .comments-advantage ul li::before, .comments-disadvantage ul li::before {
    width: 6px;
    height: 6px;
    background: #ccc;
    border-radius: 50%;
    content: "";
    position: absolute;
    top: 8px;
    right: 0;
  }

  .comments-advantage ul li::before {
    background-color: #00bfd6;
  }

  .comments-disadvantage ul li::before {
    background-color: #ff637d;
  }
</style>

<div class="comments__filter">
  <div class="comments__filter-title">نظرات کاربران</div>
  <ul class="comments__filter-items">
    <li><a class="active" href="#/">نظر خریداران</a></li>
    <li><a class="" href="#/">مفیدترین نظرات</a></li>
    <li><a class="" href="#/">جدیدترین نظرات</a></li>
  </ul>

</div>
<div class="">
  <ul class="product-comments-list">
      <?php
      $comments = $data[0];
      foreach ($comments as $row) {

          ?>
        <li>
          <section>
            <div class="commentator">
              <ul class="comments-user-shopping">
                <li>
                  <div class="cell cell-name">مهدی رضائی</div>
                  <div class="comments-buyer-badge">خریدار</div>
                </li>
                <li>
                  <div class="cell">در تاریخ <?= $row['date'] ?></div>
                </li>
              </ul>
            </div>
            <div class="article">
              <div class="header">
                <div><?= $row['title'] ?></div>
              </div>
              <p><?= $row['text'] ?></p>
              <div class="comments-evaluation">
                <div class="comments-advantage">
                  <span>نقاط قوت</span>
                  <ul>
                    <li><?= $row['pros'] ?></li>
                  </ul>
                </div>
                <div class="comments-disadvantage">
                  <span>نقاط ضعف</span>
                  <ul>
                    <li><?= $row['cons'] ?></li>
                  </ul>
                </div>
              </div>
              <div class="footer">
                <div class="comments-likes">
                  آیا این نظر برایتان مفید بود؟
                  <div class="comment-like-btn comment-liked" data-counter="<?= $row['likenum'] ?>">
                    <div class="comment-like-icon"></div>
                  </div>
                  <div class="comment-like-btn comment-disliked" data-counter="<?= $row['dislikenum'] ?>">
                    <div class="comment-dislike-icon"></div>
                  </div>

                </div>
              </div>
            </div>
          </section>
        </li>
      <?php } ?>
  </ul>
</div>
