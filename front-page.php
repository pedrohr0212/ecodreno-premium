<?php get_header(); ?>

<main id="home">

    <section class="hero">
        <div class="hero-bg"></div>

        <div class="container hero-grid">
            <div class="hero-content">
                <span class="eyebrow">Atendimento 24h • São Paulo, Grande SP e Interior</span>

                <h1>Desentupidora 24 Horas em São Paulo</h1>

                <p>
                    Especialistas em limpeza de fossa, hidrojateamento e desentupimentos
                    para residências, condomínios, comércios e indústrias.
                </p>

                <div class="hero-actions">
                    <a class="btn btn-primary" href="<?php echo esc_url(ecodreno_whatsapp_url()); ?>" target="_blank" rel="noopener">
                        Solicitar orçamento
                    </a>

                    <a class="btn btn-outline" href="tel:+551152867420">
                        Ligar agora
                    </a>
                </div>
            </div>

            <div class="hero-panel">
                <div class="stars">★★★★★</div>
                <h3>Atendimento emergencial</h3>
                <p>Capital • Grande São Paulo • Interior</p>
                <strong>Resposta rápida pelo WhatsApp</strong>
            </div>
        </div>
    </section>

    <section class="trust-bar">
        <div class="container trust-grid">
            <span>✔ Atendimento 24 horas</span>
            <span>✔ Equipe especializada</span>
            <span>✔ Equipamentos modernos</span>
            <span>✔ Orçamento rápido</span>
        </div>
    </section>

    <section class="section about">
        <div class="container split">
            <div>
                <span class="section-label">EcoDreno</span>
                <h2>Soluções profissionais em saneamento e desentupimento</h2>
                <p>
                    A EcoDreno oferece atendimento técnico, rápido e seguro para limpeza de fossa,
                    desentupimentos, hidrojateamento e manutenção preventiva.
                </p>
                <p>
                    Atendemos residências, empresas, condomínios e indústrias durante 24 horas por dia.
                </p>
            </div>

            <div class="visual-card">
                <div class="visual-placeholder">Equipe EcoDreno</div>
            </div>
        </div>
    </section>

    <section class="section services" id="servicos">
        <div class="container">
            <div class="section-heading">
                <span class="section-label">Nossos Serviços</span>
                <h2>Atendimento completo para limpeza, desentupimento e manutenção</h2>
            </div>

            <div class="services-grid">
                <?php
                $services = [
                    'Limpeza de Fossa',
                    'Desentupimento de Pia',
                    'Desentupimento de Vaso',
                    'Desentupimento de Ralo',
                    'Desentupimento de Esgoto',
                    'Limpeza de Caixa de Gordura',
                    'Hidrojateamento',
                    'Vídeo Inspeção'
                ];

                foreach ($services as $service) :
                ?>
                    <article class="service-card">
                        <div class="service-icon">◎</div>
                        <h3><?php echo esc_html($service); ?></h3>
                        <p>Serviço profissional com atendimento rápido e equipe especializada.</p>
                        <a href="<?php echo esc_url(ecodreno_whatsapp_url()); ?>" target="_blank" rel="noopener">
                            Solicitar orçamento →
                        </a>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="section fossa" id="limpeza-fossa">
        <div class="container split">
            <div class="visual-card large">
                <div class="visual-placeholder">Limpeza de Fossa</div>
            </div>

            <div>
                <span class="section-label">Serviço Principal</span>
                <h2>Limpeza de Fossa com atendimento 24 horas</h2>
                <p>
                    Realizamos limpeza de fossa com equipamentos adequados, garantindo eficiência,
                    segurança e destinação responsável dos resíduos.
                </p>

                <ul class="check-list">
                    <li>Evita transbordamentos</li>
                    <li>Reduz mau cheiro</li>
                    <li>Previne problemas sanitários</li>
                    <li>Atendimento emergencial</li>
                </ul>

                <a class="btn btn-primary" href="<?php echo esc_url(ecodreno_whatsapp_url()); ?>" target="_blank" rel="noopener">
                    Solicitar limpeza de fossa
                </a>
            </div>
        </div>
    </section>

    <section class="section areas" id="areas">
        <div class="container">
            <div class="section-heading">
                <span class="section-label">Áreas Atendidas</span>
                <h2>Atendimento em São Paulo, Grande São Paulo e Interior</h2>
            </div>

            <div class="areas-grid">
                <div class="area-card">
                    <h3>Capital de São Paulo</h3>
                    <p>Zona Norte, Zona Sul, Zona Leste, Zona Oeste e Centro.</p>
                </div>

                <div class="area-card">
                    <h3>Grande São Paulo</h3>
                    <p>ABC, Guarulhos, Osasco, Barueri, Alphaville e região.</p>
                </div>

                <div class="area-card">
                    <h3>Interior de São Paulo</h3>
                    <p>Atendimento sob consulta para cidades do interior paulista.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="final-cta">
        <div class="container">
            <h2>Precisando de atendimento imediato?</h2>
            <p>Fale agora com a EcoDreno pelo WhatsApp e solicite seu orçamento.</p>

            <a class="btn btn-primary" href="<?php echo esc_url(ecodreno_whatsapp_url()); ?>" target="_blank" rel="noopener">
                Chamar no WhatsApp
            </a>
        </div>
    </section>

</main>

<?php get_footer(); ?>
