<?php get_header(); ?>

<main class="site-main">
    <section class="default-page">
        <div class="container">
            <?php
            if (have_posts()) :
                while (have_posts()) :
                    the_post();
                    the_content();
                endwhile;
            else :
                echo '<h1>EcoDreno Desentupidora</h1>';
                echo '<p>Atendimento 24 horas em São Paulo, Grande São Paulo e Interior.</p>';
            endif;
            ?>
        </div>
    </section>
</main>

<?php get_footer(); ?>
