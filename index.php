<?php 
    get_header();
?>

<main class="content w-full py-11 lg:w-10/12 m-auto flex flex-col gap-8">
    <section class="hero h-auto rounded-lg overflow-hidden">
        <img src="<?php echo get_template_directory_uri() .'/assets/images/bg-qatar-hero.jpeg'; ?>" alt="Latina" width="100%" height="420" class="object-cover" role="img">
    </section>

    <section class="section p-4">
        <h2 class="font-bold text-white text-2xl text-slate-600 flex items-center gap-4 py-4">
            <p class="rounded-full" style="width: 8px; height: 8px; background: orange;"></p>
            <span>Mira los partidos de Qatar 2022 por Latina Play:</span>
        </h2>

        <article>
            <p class="text-white text-md">No te pierdas la gran fiesta de fultbol mundial a traves de Latina y nuestras plataformas digitales.</p>
        </article>
    </section>

    <!-- Finish Play -->
    <section class="section px-4">
        <h2 class="font-bold text-white text-2xl text-slate-600 flex items-center gap-4 py-4">
            <p class="rounded-full" style="width: 8px; height: 8px; background: orange;"></p>
            <span>Partidos Completos:</span>
        </h2>

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

<?php
    get_footer();
?> 