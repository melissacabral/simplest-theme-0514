<aside id="sidebar"> 
		<section id="categories" class="widget">
			<h3 class="widget-title"> Categories </h3>
			<ul>
				<?php 
				//show the most commonly used 15 categories
				wp_list_categories( array(
					'show_count'   	=> 1,
					'orderby'		=> 'count',
					'order'			=> 'DESC',
					'number'		=> 15,
					'title_li'		=> '',
				) ); ?>               
			</ul>
		</section>
		<section id="archives" class="widget">
			<h3 class="widget-title"> Archives </h3>
			<ul>
				<?php wp_get_archives( array(
					'type' 	=> 'yearly',
				) ); ?>
			</ul>
		</section>
		<section id="tags" class="widget">
			<h3 class="widget-title"> Tags </h3>
			
			<?php wp_tag_cloud(); ?>
		</section>
		<section id="meta" class="widget">
			<h3 class="widget-title"> Meta </h3>
			<ul>
				<li><a href="<?php echo admin_url(); ?>">Site Admin</a></li>
				<li><?php wp_loginout(); ?></li>
			</ul>

			<?php //wp_login_form(); ?>
		</section>
	</aside><!-- end #sidebar -->