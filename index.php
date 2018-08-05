<?php get_header();?>
        <section class="content col-9 main_pad" style="padding-right: 0;">
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
                                    <figure class="card-img-top post_image">
                                    <?php
                                        if ( has_post_thumbnail() ) :
                                        the_post_thumbnail();
                                        endif;
                                    ?>                
                                    </figure>
                                    <div class="card-body">
                                        <h5 class="card-title"><?php the_title(); ?></h5>
                                        <p class="card-text">
                                            <div class="textCard">
                                                <?php the_excerpt(); ?>
                                            </div>
                                        </p>
                                    </div>
                                </div>
                            </a> 
                    <?php endwhile; endif; wp_reset_postdata(); ?>                       
                </div>
            </section>    
            <section class="category">
                <h3 class="category_title b-black t-white">Farandula</h3>
                <div class="category_list row">
                    <!-- php Programming to view new entries -->
                    <?php
                        $args = array( 'post_type' => 'post', 'category_name' => 'farandula', 'posts_per_page' => 3 );
                        $col_the_query = new WP_Query( $args );
                        if ( $col_the_query->have_posts() ) :
                        while ( $col_the_query->have_posts() ) : $col_the_query->the_post(); ?>
                            <a href="<?php the_permalink() ?>" class="col-4 t-black category_link">
                                <div class="card">
                                    <figure class="card-img-top post_image">
                                    <?php
                                        if ( has_post_thumbnail() ) :
                                        the_post_thumbnail();
                                        endif;
                                    ?>                
                                    </figure>
                                    <div class="card-body">
                                        <h5 class="card-title"><?php the_title(); ?></h5>
                                        <p class="card-text">
                                            <div class="textCard">
                                                <?php the_excerpt(); ?>
                                            </div>
                                        </p>
                                    </div>
                                </div>
                            </a> 
                    <?php endwhile; endif; wp_reset_postdata(); ?>                       
                </div>
            </section>  
            <section class="team">
                <div class="headerMember row">
                    <h3 class="member_title b-white t-black t-bold">Equipo </h3>
                        <figure class="img_membertitle">
                            <img src="<?php echo get_stylesheet_directory_uri();?>/assets/img/viral.png" alt="Logo Viral" title="Logo Viral">   
                        </figure>
                </div>
                    <section class="memberDisplay">
                        <div class="member_list row">
                            <!-- php Programming to view new entries -->
                            <?php
                                $args = array( 'post_type' => 'miembro', 'posts_per_page' => 4 );
                                $col_the_query = new WP_Query( $args );
                                if ( $col_the_query->have_posts() ) :
                                while ( $col_the_query->have_posts() ) : $col_the_query->the_post(); ?>
                                    <a href="<?php the_field('link_del_miembro') ?>" class="t-black member_list" target="_blank">
                                        <div class="card card_member">
                                            <figure class="card-img-top radio_img">
                                                <figure class="img-member">
                                                   <?php
                                                            if (has_post_thumbnail()) :
                                                            the_post_thumbnail( 150, "style=border-radius: 75px;" );
                                                            endif;
                                                    ?> 
                                                </figure>                                                               
                                            </figure>
                                            <div class="card-body t-white b-black member_body">
                                                <p class="card-title"><?php the_title(); ?></p>
                                            </div>
                                        </div>
                                    </a> 
                            <?php endwhile; endif; wp_reset_postdata(); ?>
                        </div>
                    </section>
            </section>
        </section>
        <aside class="sidebar col-3">
            side bar
        </aside>
<?php get_footer();?>
