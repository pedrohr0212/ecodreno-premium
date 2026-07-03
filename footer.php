<footer class="site-footer" id="contato">
    <div class="container footer-grid">

        <div class="footer-brand">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="brand footer-logo-text">
                <span class="brand-mark">Eco</span><span class="brand-name">Dreno</span>
            </a>

            <p>
                Soluções profissionais em limpeza de fossa, desentupimentos e hidrojateamento.
                Atendimento 24 horas em São Paulo, Grande São Paulo e Interior.
            </p>
        </div>

        <div class="footer-column">
            <h3>Serviços</h3>
            <a href="#limpeza-fossa">Limpeza de Fossa</a>
            <a href="#servicos">Desentupimento</a>
            <a href="#servicos">Hidrojateamento</a>
            <a href="#servicos">Caixa de Gordura</a>
        </div>

        <div class="footer-column">
            <h3>Atendimento</h3>
            <p>24 horas por dia</p>
            <p>7 dias por semana</p>
            <p>Capital • Grande SP • Interior</p>
        </div>

        <div class="footer-column">
            <h3>Contato</h3>
            <a href="<?php echo esc_url(ecodreno_whatsapp_url()); ?>" target="_blank" rel="noopener">
                WhatsApp: (11) 5286-7420
            </a>
        </div>

    </div>

    <div class="footer-bottom">
        <p>© <?php echo esc_html(date('Y')); ?> EcoDreno Desentupidora. Todos os direitos reservados.</p>
    </div>
</footer>

<a href="<?php echo esc_url(ecodreno_whatsapp_url()); ?>" class="floating-whatsapp" target="_blank" rel="noopener">
    WhatsApp
</a>

<?php wp_footer(); ?>
</body>
</html>
