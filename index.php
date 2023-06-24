<?php 
    get_header();
?>

<main class="content w-full py-11 lg:w-10/12 m-auto flex flex-col gap-8">
    <section class="hero h-auto rounded-lg overflow-hidden">
        <img src="<?php echo get_template_directory_uri() .'/assets/images/bg-qatar-hero.jpeg'; ?>" alt="Latina" width="100%" height="420" class="object-cover" role="img">
    </section>

    <section>
        <h1 class="text-white">data</h1>
    </section>
</main>

    <!-- if(have_posts()) {
        while(have_posts()) {
            the_post();
                the_title();
        }
    } -->

<?php
    get_footer();
?> 