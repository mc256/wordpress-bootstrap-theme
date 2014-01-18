<?php
/**
 * @package mc_bs
 */
?>
        <div class="col-lg-4">
          <h2><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
          <?php the_excerpt(); ?>
          <p><a class="btn btn-primary" href="<?php the_permalink(); ?>" role="button">Read More &raquo;</a></p>
        </div>



