<?php
/**
 * Mithra Consulting — Blog Archive
 */
get_header();
?>

<!-- BLOG HERO -->
<section class="blog-hero">
  <div class="container">
    <div style="position:relative;max-width:700px">
      <span class="eyebrow"><?php esc_html_e( 'Mithra Insights', 'mithra' ); ?></span>
      <h1 style="font-size:clamp(2.4rem,4vw,3.4rem);color:#fff;margin-bottom:18px;">
        <?php esc_html_e( 'Blog &amp; ', 'mithra' ); ?><em><?php esc_html_e( 'Insights', 'mithra' ); ?></em>
      </h1>
      <p style="font-size:1.05rem;color:rgba(255,255,255,.72);line-height:1.8;max-width:580px">
        <?php
        if ( is_category() ) {
            echo esc_html( sprintf(
                /* translators: %s: category name */
                __( 'Posts in the %s category', 'mithra' ),
                single_cat_title( '', false )
            ) );
        } elseif ( is_tag() ) {
            echo esc_html( sprintf(
                /* translators: %s: tag name */
                __( 'Posts tagged %s', 'mithra' ),
                single_tag_title( '', false )
            ) );
        } elseif ( is_author() ) {
            echo esc_html( sprintf(
                /* translators: %s: author name */
                __( 'Posts by %s', 'mithra' ),
                get_the_author()
            ) );
        } else {
            esc_html_e( 'Cybersecurity insights, compliance guidance, and expert perspectives from the Mithra Consulting team.', 'mithra' );
        }
        ?>
      </p>
    </div>
  </div>
</section>

<!-- POST GRID -->
<section class="section">
  <div class="container">

    <?php if ( have_posts() ) : ?>
      <div class="post-grid">
        <?php
        $post_index = 0;
        while ( have_posts() ) : the_post();
        $post_index++;
        ?>
          <article id="post-<?php the_ID(); ?>" <?php post_class( 'post-card reveal' ); ?>>

            <?php if ( has_post_thumbnail() ) : ?>
              <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail( 'mithra-card', array( 'class' => 'post-card-img', 'alt' => esc_attr( get_the_title() ) ) ); ?>
              </a>
            <?php else : ?>
              <a href="<?php the_permalink(); ?>">
                <img class="post-card-img"
                     src="<?php $blog_imgs=['blog-1.jpg','blog-2.jpg','blog-3.jpg','blog-4.jpg','blog-5.jpg','blog-6.jpg']; $idx=(get_the_ID()-1)%6; echo esc_url(content_url('uploads/mithra/').$blog_imgs[$idx]); ?>"
                     alt="<?php echo esc_attr( get_the_title() ); ?>"
                     loading="lazy">
              </a>
            <?php endif; ?>

            <div class="post-card-body">
              <div class="post-meta">
                <?php
                $cats = get_the_category();
                if ( $cats ) echo esc_html( $cats[0]->name ) . ' &bull; ';
                echo esc_html( get_the_date() );
                $word_count   = str_word_count( strip_tags( get_the_content() ) );
                $reading_time = max( 1, (int) ceil( $word_count / 200 ) );
                echo ' &bull; ' . esc_html( $reading_time ) . ' ' . esc_html__( 'min read', 'mithra' );
                ?>
              </div>

              <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

              <p><?php echo esc_html( wp_trim_words( get_the_excerpt(), 22, '&hellip;' ) ); ?></p>

              <a href="<?php the_permalink(); ?>" class="read-more">
                <?php esc_html_e( 'Read article &rarr;', 'mithra' ); ?>
              </a>
            </div>

          </article>
        <?php endwhile; ?>
      </div><!-- .post-grid -->

      <!-- PAGINATION -->
      <div class="pagination">
        <?php
        echo paginate_links( array(
            'prev_text' => '&larr;',
            'next_text' => '&rarr;',
        ) );
        ?>
      </div>

    <?php else : ?>
      <div class="post-empty">
        <strong><?php esc_html_e( 'No posts found', 'mithra' ); ?></strong>
        <?php esc_html_e( 'Check back soon for cybersecurity insights and industry news.', 'mithra' ); ?>
      </div>
    <?php endif; ?>

  </div>
</section>

<?php get_footer(); ?>
