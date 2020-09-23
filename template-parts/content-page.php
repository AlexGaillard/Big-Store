<article class="col">
    <h1><?php the_title(); ?></h2>
    <div><?php the_content(); ?></div>
    <?php
      if( comments_open() || get_comments_number() ):
        comments_template();
      endif;
     ?>
</article>
