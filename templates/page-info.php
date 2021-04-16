<?php /* Template Name: Information */ get_header(); ?>
<?php while (have_posts()) : the_post(); ?>


    <?php the_content(); ?>


  <?php endwhile; ?>


  <?php
$args = array( 'posts_per_page' => -1, 'post_type' => 'news' ); // аргументы и атрибуты для вывода постов. напр. значение -1 позволяет выводить все посты.
$myposts = get_posts( $args ); // в этой переменной мы храним массив постов с необходимыми для нас аргументами.

foreach ( $myposts as $post ) :  // выводим циклом посты и объявляем что единичный пост из массива постов будет называться $post
  setup_postdata( $post ); // объявляем что в данном цикле данные для поста берутся из объекта $post ?> 

        <div><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>

        <div><?php the_content(); ?></div>

<?php endforeach; wp_reset_postdata(); ?>

<?php get_footer(); ?>

