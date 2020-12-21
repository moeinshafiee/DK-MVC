<?php $features = $data[0];
foreach ($features as $attrParent) {
$children = $attrParent['children']; ?>
<section>

      <h3 class="feature-title"><?= $attrParent['name'] ?> </h3>
      <ul class="feature-list">
        <?php foreach ($children as $child) { ?>
        <li>
          <div class="flist-key"><?= $child['name'] ?></div>
          <div class="flist-value">
              <?php if ($child['value']=='') echo '-'; else echo $child['value'];?>
          </div>
        </li>
        <?php } ?>
      </ul>


</section>
<?php } ?>