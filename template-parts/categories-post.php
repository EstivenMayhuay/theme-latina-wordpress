<article class="futballCard bg-black-primary rounded-lg overflow-hidden hover:scale-105">
    <div class="futballCard__img">
        <a href="<?php the_permalink(); ?>" title="<?php the_title() ?>">
            <?php the_post_thumbnail('my-post-thumbnail', ['class' => 'w-full']); ?>
        </a>
    </div>

    <div class="futballCard__info p-4">
        <h2 class="font-bold text-white hover:underline" role="heading">
            <a href="<?php the_permalink(); ?>" title="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </h2>
    </div>
</article>
