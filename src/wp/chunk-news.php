<article class="news-article">
    <h1 class="news-article__title"><?php the_title(); ?></h1>
    <div class="news-article__text">
        <?php 
            the_post();
            the_content(); 
        ?>
    </div>
</article>