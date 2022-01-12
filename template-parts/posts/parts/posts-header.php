<section id="post-title"
    class="h-96 flex flex-col justify-center items-center text-orange-900 bg-cover bg-no-repeat bg-center bg-fixed bg-yellow-300"
    style=' background-image: url("<?php echo esc_url(get_the_post_thumbnail_url()) ?>")'>
    <h1 class="text-4xl font-bold">
        <?php the_title(  ) ?>
    </h1>

    <!-- ?????????????????????????????????????????????????????????????????????? -->
    <p id="breadcrumbs">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
</section>

<?php
if(get_the_post_thumbnail_url()){ ?>


<section id="post-content-header">
    <p id="post-date" class="text-gray-400 text-sm font-bold mt-2 mb-4">
        <?php echo get_the_date( ); ?>
    </p>
</section>

<?php }
?>