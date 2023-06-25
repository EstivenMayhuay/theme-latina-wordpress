<?php get_header(); ?>
<main class="content w-full py-11 lg:w-10/12 m-auto flex flex-col gap-8">
    <section class="p-4">
        <h2 class="text-white capitalize font-bold text-2xl py-4"><?php single_cat_title(); ?></h2>

        <?php if (have_posts()) : ?>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                <?php while (have_posts()) : the_post(); ?>
                <?php get_template_part('template-parts/post-card'); ?>
                <?php endwhile; ?>
            </div>
        <?php else : ?>
                <p>No se encontraron posts en esta categoría.</p>
        <?php endif; ?>
    </section>
</main>
<?php get_footer(); ?>