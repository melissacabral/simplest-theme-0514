<?php 
//includes header.php if it exists
get_header(); ?>

	<main id="content">

		<?php //THE LOOP!  display the content of any 'page'
		if( have_posts() ):
			while( have_posts() ):
				the_post();
		 ?>
		<article id="post-<?php the_ID();?> class="post">
			<h2 class="entry-title"> 
				<a href="<?php the_permalink(); ?>"> 
					<?php the_title(); ?> 
				</a>
			</h2>
			<div class="entry-content">
				<?php the_content(); ?>
			</div>
			<div class="postmeta"> 
				<span class="author"> Posted by: <?php the_author(); ?> </span>
				<span class="date"> <?php the_time(); ?> </span>
				<span class="num-comments"> one comment </span>
				<span class="categories"> 
					<?php the_category(); ?>
				</span>
				<span class="tags"><?php the_tags(); ?></span> 
			</div><!-- end postmeta -->			
		</article><!-- end post -->
		<?php 
			endwhile; 
		endif; //end of the loop ?>

	</main><!-- end #content -->

<?php 
//includes sidebar.php if it exists
get_sidebar(); ?>
<?php 
//includes footer.php if it exists
get_footer(); ?>