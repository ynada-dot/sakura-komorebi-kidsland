<?php if ( is_page('concept') ): ?>
<div class="breadcrumbs">
  <div class="breadcrumb__inner">
    <?php 
    if ( function_exists( 'bcn_display' ) ) {
        bcn_display();
    }
    ?>
  </div>
</div>
<?php else : ?>
<div class="breadcrumbs">
  <div class="breadcrumb__inner">
    <?php 
    if ( function_exists( 'bcn_display' ) ) {
        bcn_display();
    }
    ?>
  </div>
</div>
<?php endif; ?>