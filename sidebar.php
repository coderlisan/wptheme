<div class="notice-board">
  <div class="notice-box">
    <h2>Notice Board</h2>
    <hr />
    <ul>
      <?php
      $lsNotice = new WP_Query(['post_type' => 'notice']);
      while ($lsNotice->have_posts()) : $lsNotice->the_post();
      ?>
        <li><i class="fa fa-chevron-right"></i><a href="#"><?php the_title() ?></a></li>
      <?php endwhile ?>
    </ul>
  </div>
  <?php get_sidebar() ?>
</div>