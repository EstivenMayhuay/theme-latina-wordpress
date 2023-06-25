<?php 
    get_header();
?>

<?php 
    $curr_category = get_the_category()[0];
    $categories = get_categories();
?>

<main class="content w-full py-11 lg:w-10/12 m-auto flex flex-col gap-8">
    <section class="section flex flex-col gap-11 p-4">
        <?php if (have_posts()) : ?>
            <article class="">
            <?php while (have_posts()) : the_post(); ?>
                <div class="video-live">
                    <img src="<?php echo get_template_directory_uri() . '/assets/images/bg-simple-poster.jpg'; ?>" alt="<?php the_title(); ?>" width="100%" role="img">
                </div>
                <div class="info py-4">
                    <h2 class="text-white font-bold text-xl"><?php the_title(); ?></h2>
                    <div class="text-white"><?php the_content(); ?></div>
                </div>
            <?php endwhile; ?>
            </article>
        <?php else : ?>
                <p>No se encontraron posts en esta categoría.</p>
        <?php endif; ?>

        <!-- Partidos Completos -->
        <article class="px-4">
            <h2 class="font-bold text-white text-2xl text-slate-600 flex items-center gap-4 py-4">
                <p class="rounded-full" style="width: 8px; height: 8px; background: orange;"></p>
                <span>Partidos Completos:</span>
            </h2>

            <?php foreach($categories as $category) :?>
                <?php if($curr_category->name !== $category->name) : ?>
                    <?php 
                        $args = array(
                            'category_name' => $category->name,
                            'post__not_in' => array(get_the_ID())
                        );

                        $post_related = new WP_Query($args);
                    ?>
                    <?php if($post_related->have_posts()) : ?>
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                            <?php while($post_related->have_posts()) : $post_related->the_post(); ?>
                                <?php get_template_part('template-parts/categories-post'); ?>
                            <?php endwhile; ?>                            
                        </div>
                        <div class="contentButton flex justify-center py-8">
                            <button class="bg-purple-dark text-white font-bold text-md px-14 py-2 w-full md:w-4/12 rounded">VER MAS</button>
                        </div>
                    <?php endif; ?>
                <?php endif; ?>
            <?php endforeach; ?>
        </article>
    </section>
</main>

<?php
    get_footer();
?> 