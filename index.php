<?php get_header(); ?>

			<div id="content">
							
				<div id="inner-content" class="wrap clearfix">
			
				    <div id="main" class="eightcol first clearfix" role="main">
						
						<?php # THE LOOP ?>
					    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>						
					
					    	<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">

						    	<header class="article-header">
					
							    	<h1><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
									<p class="byline vcard"><?php
										printf(__('<time class="updated" datetime="%1$s" pubdate>%2$s @ %3$s </time>', 'divtruth'), get_the_time('Y-m-j'), get_the_time(get_option('date_format')), get_the_time('g:iA'));
										printf(__('<span class="tags">%1$s</span', 'divtruth'), get_the_category_list(', '));
									?></p>
						
							    </header> <!-- end article header -->
					
							    <section class="entry-content clearfix">
									<?php if ($counter > 1): ?>
										<?php if (has_post_thumbnail()): ?>
											<div class="pad-left-200"><?php the_excerpt(); ?></div>
										<?php else : ?>
											<?php the_excerpt(); ?>
										<?php endif; ?>
									<?php elseif ($counter == 1): ?>
								    	<?php the_content(); ?>
								    	<hr>
									<?php endif; ?>
							    </section> <!-- end article section -->
						
							    <footer class="article-footer">
	    							<p class="tags"><?php the_tags('<span class="tags-title">' . __('Tags:', 'divtruth') . '</span> ', ', ', ''); ?></p>

							    </footer> <!-- end article footer -->
						    
					    </article> <!-- end article -->
					
					    <?php endwhile; ?>	
					
					        <div class="clearfix" style="width:100%;">
						    	<?php div_pagination(); ?>
						    </div>
					
					    <?php else : ?>
					    
					        <article id="post-not-found" class="hentry clearfix">
					            <header class="article-header">
					        	    <h1><?php _e("Post Not Found", "divtruth"); ?></h1>
					        	</header>
					            <section class="entry-content">
					        	    <p><?php _e("Please visit our homepage.", "divtruth"); ?></p>
 									<ul>
										<li><a href="/">Home</a></li>
									</ul>
					        	</section>
					        	<footer class="article-footer">
					        	</footer>
					        </article>
					
					    <?php endif; ?>
			
				    </div> <!-- end #main -->
    
				    <?php get_sidebar(); ?>
				    
				</div> <!-- end #inner-content -->
    
			</div> <!-- end #content -->

<?php get_footer(); ?>
