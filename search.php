<?php
get_header();
global $wp_query;
?>
<div class="wapper">
  <div class="contentarea clearfix">
    <div class="content">
		<div class="search-header">
		<h1 class="search-title"><?php esc_html_e( 'Suchresultate', 'slrg' ); ?></h1>
		<p><?php esc_html_e( 'Es wurden', 'slrg' ); ?> <?php echo $wp_query->found_posts; ?> <?php esc_html_e( 'Resultate zum Stichwort «', 'slrg' ); ?><?php the_search_query(); ?><?php esc_html_e( '» gefunden.', 'slrg' ); ?></p>
		</div>

        <?php if ( have_posts() ) { ?>

            <ul>

            <?php while ( have_posts() ) { the_post(); ?>

               <li>
                 <h3><a href="<?php echo get_permalink(); ?>">
                   <?php the_title();  ?>
                 </a></h3>
                 <?php echo substr(get_the_excerpt(), 0,240); ?>...
                 <div class="h-readmore"> <a href="<?php the_permalink(); ?>"><button><?php esc_html_e( 'weiterlesen', 'slrg' ); ?></button></a></div>
               </li>

            <?php } ?>

            </ul>
		   	<div class="search-pageing">
           		<?php echo paginate_links(); ?>
			</div>

        <?php } ?>
		
		<div class="search-footer">
			<p><?php esc_html_e( 'Nicht das gefunden, nach dem du gesucht hast?', 'slrg' ); ?></p>
			<h3><?php esc_html_e( 'Nochmals suchen...', 'slrg' ); ?></h3>
			<?php get_search_form(); ?>
		</div>

    </div>
  </div>
</div>
<?php get_footer(); ?>