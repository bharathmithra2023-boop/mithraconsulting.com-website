<?php
/**
 * Mithra Consulting — Index (Blog Fallback)
 */
get_header();
?>

<section class="blog-hero">
  <div class="container">
    <span class="eyebrow"><?php esc_html_e( 'Mithra Insights', 'mithra' ); ?></span>
    <h1 style="font-size:clamp(2.4rem,4vw,3.4rem);color:#fff;margin-bottom:18px;position:relative;">
      <?php esc_html_e( 'Blog &amp; ', 'mithra' ); ?><em><?php esc_html_e( 'Insights', 'mithra' ); ?></em>
    </h1>
    <p style="font-size:1.05rem;color:rgba(255,255,255,.72);line-height:1.8;max-width:620px;position:relative;">
      <?php esc_html_e( 'Cybersecurity insights, compliance guidance, and expert perspectives from the Mithra Consulting team.', 'mithra' ); ?>
    </p>
  </div>
</section>

<section class="section">
  <div class="container">
    <?php if ( have_posts() ) : ?>
      <div class="post-grid">
        <?php while ( have_posts() ) : the_post(); ?>
          <article id="post-<?php the_ID(); ?>" <?php post_class( 'post-card' ); ?>>
            <?php if ( has_post_thumbnail() ) : ?>
              <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail( 'mithra-card', array( 'class' => 'post-card-img', 'alt' => esc_attr( get_the_title() ) ) ); ?>
              </a>
            <?php else : ?>
              <a href="<?php the_permalink(); ?>">
                <img class="post-card-img"
                     src="<?php $blog_imgs=['blog-1.jpg','blog-2.jpg','blog-3.jpg','blog-4.jpg','blog-5.jpg','blog-6.jpg'];$idx=(get_the_ID()-1)%6;echo esc_url(content_url('uploads/mithra/').$blog_imgs[$idx]); ?>"
                     alt="<?php esc_attr( get_the_title() ); ?>">
              </a>
            <?php endif; ?>

            <div class="post-card-body">
              <div class="post-meta">
                <?php
                $cats = get_the_category();
                if ( $cats ) echo esc_html( $cats[0]->name ) . ' &bull; ';
                echo esc_html( get_the_date() );
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
      </div>

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
        <strong><?php esc_html_e( 'No posts yet', 'mithra' ); ?></strong>
        <?php esc_html_e( 'Check back soon for cybersecurity insights and industry news.', 'mithra' ); ?>
      </div>
    <?php endif; ?>
  </div>
</section>

<?php get_footer(); ?>
