<?php
/*
Template Name: Página básica Post
*/
?>
<?php
get_header(); ?>

<main>
<section class="primary section">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/banner-1-home.png" alt="banner">
          <div class="search-container">
          <?php get_search_form(); ?>

              </form>
          </div>
      </section>
      <section>
</main>
                                                              <?php
 
 // checks if there are any posts that match the query
 if (have_posts()) :
  
   // If there are posts matching the query then start the loop
   while ( have_posts() ) : the_post();
  
     // the code between the while loop will be repeated for each post
     ?>

  <div class="post">
  <h3 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>"style="color:black" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h3>
    <?php the_content(); ?>
  <p class="date-author">Posted: <?php the_date(); ?> by <?php the_author(); ?></p>

</div>



  

  
    
<?php
 
 // Stop the loop when all posts are displayed
endwhile;

// Se nenhum post for enccontrado
else :
?>
<p style="color:#223155;padding: 2.6vw;text-align:center; font-size: 32px">Desculpe, não foi encontrado nenhum post relacionado à busca<br> tente um titulo de post, ou uma letra, no momento temos pouco conteúdo.</p>
<?php
endif;
?>

<?php get_footer();