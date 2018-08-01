<?php get_header();?>
        <section class="content col-9">
            <section class="category">
                <h3 class="category_title b-black t-white">Música</h3>
                <div class="category_list row">
                    <!-- php Programming to view new entries -->
                    <?php
                        $args = array( 'post_type' => 'post', 'category_name' => 'musica', 'posts_per_page' => 3 );
                        $col_the_query = new WP_Query( $args );
                        if ( $col_the_query->have_posts() ) :
                        while ( $col_the_query->have_posts() ) : $col_the_query->the_post(); ?>
                            <a href="<?php the_permalink() ?>" class="col-4 t-black category_link">
                                <div class="card">
                                    <figure class="card-img-top">
                                    <?php
                                        if ( has_post_thumbnail() ) :
                                        the_post_thumbnail();
                                        endif;
                                    ?>                
                                    </figure>
                                    <div class="card-body">
                                        <h5 class="card-title"><?php the_title(); ?></h5>
                                        <p class="card-text"><?php the_excerpt(); ?></p>
                                    </div>
                                </div>
                            </a> 
                    <?php endwhile; endif; wp_reset_postdata(); ?>                       
                </div>
            </section>    
            <section class="category">
                <h3 class="category_title b-black t-white">Entrenenimiento</h3>
                <div class="category_list row">
                    <!-- php Programming to view new entries -->
                    <?php
                        $args = array( 'post_type' => 'post', 'category_name' => 'entretenimiento', 'posts_per_page' => 3 );
                        $col_the_query = new WP_Query( $args );
                        if ( $col_the_query->have_posts() ) :
                        while ( $col_the_query->have_posts() ) : $col_the_query->the_post(); ?>
                            <a href="<?php the_permalink() ?>" class="col-4 t-black category_link">
                                <div class="card">
                                    <figure class="card-img-top">
                                    <?php
                                        if ( has_post_thumbnail() ) :
                                        the_post_thumbnail();
                                        endif;
                                    ?>                
                                    </figure>
                                    <div class="card-body">
                                        <h5 class="card-title"><?php the_title(); ?></h5>
                                        <p class="card-text"><?php the_excerpt(); ?></p>
                                    </div>
                                </div>
                            </a> 
                    <?php endwhile; endif; wp_reset_postdata(); ?>                       
                </div>
            </section>  
            
        </section>
        <aside class="sidebar col-3">
            side bar
        </aside>
<?php get_footer();?>
