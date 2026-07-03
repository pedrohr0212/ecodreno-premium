<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="site-header">
    <div class="container header-inner">

        <a href="<?php echo esc_url(home_url('/')); ?>" class="brand">
            <?php if (has_custom_logo()) : ?>
                <?php the_custom_logo(); ?>
            <?php else : ?>
                <span class="brand-mark">ED</span>
                <span class="brand-name">EcoDreno</span>
            <?php endif; ?>
        </a>

        <nav class="main-nav" id="mainNav">
            <a href="<?php echo esc_url(home_url('/')); ?>">Home</a>
            <a href="#servicos">Serviços</a>
            <a href="#limpeza-fossa">Limpeza de Fossa</a>
            <a href="#areas">Áreas Atendidas</a>
            <a href="#contato">Contato</a>
        </nav>

        <a href="<?php echo esc_url(ecodreno_whatsapp_url()); ?>" class="header-cta" target="_blank" rel="noopener">
            Fale no WhatsApp
        </a>

        <button class="menu-toggle" id="menuToggle" aria-label="Abrir menu">
            ☰
        </button>

    </div>
</header>