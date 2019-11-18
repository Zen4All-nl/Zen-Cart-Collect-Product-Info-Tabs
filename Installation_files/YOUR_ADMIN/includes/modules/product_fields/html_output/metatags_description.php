<?php
if (zen_not_null($_POST)) {
  $metatags_title = (isset($_POST['metatags_description']) ? $_POST['metatags_description'] : '');
}
?>
<?php echo zen_draw_label(TEXT_META_TAGS_DESCRIPTION, 'metatags_description[' . $languages[$i]['id'] . ']', 'class="col-sm-3 control-label"'); ?>
<div class="col-sm-9 col-md-6">
    <?php for ($i = 0, $n = sizeof($languages); $i < $n; $i++) { ?>
    <div class="input-group">
      <span class="input-group-addon">
        <?php echo zen_image(DIR_WS_CATALOG_LANGUAGES . $languages[$i]['directory'] . '/images/' . $languages[$i]['image'], $languages[$i]['name']); ?>
      </span>
      <?php echo zen_draw_textarea_field('metatags_description[' . $languages[$i]['id'] . ']', 'soft', '100%', '10', htmlspecialchars((isset($metatags_description[$languages[$i]['id']])) ? stripslashes($metatags_description[$languages[$i]['id']]) : zen_get_metatags_description($productInfo['products_id']['value'], $languages[$i]['id']), ENT_COMPAT, CHARSET, TRUE), 'class="noEditor form-control"'); ?>
    </div>
    <br>
  <?php } ?>
</div>