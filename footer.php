<!-- Footer -->
<footer class="footer">
    <div class="footer-container" style="display: flex; flex-wrap: wrap; gap: 40px; justify-content: space-between;">

        <!-- Col 1 -->
        <div class="footer-col" style="flex: 1 1 250px;">
            <div class="footer-logo">RCOEM TBI</div>
            <div class="footer-sub">Technology Business Incubator</div>
            <div class="footer-tagline">Dream Big, Deliver Bigger</div>

            <h4 style="margin-top: 20px;">Mail Us</h4>
            <a class="footer-mail-link" href="mailto:rcoemtbi@rknec.edu">
                <i class="fas fa-envelope" aria-hidden="true"></i>
                <span>rcoemtbi@rknec.edu</span>
            </a>
        </div>

        <!-- Col 2: Quick Links (mirrors the "More" menu panel) -->
        <div class="footer-col footer-col-links">
            <h4>Quick Links</h4>
            <ul class="footer-links footer-links-split">
                <?php foreach ( tbi_primary_nav_items() as $tbi_item ) : ?>
                    <li>
                        <a href="<?php echo esc_url( tbi_primary_nav_url( $tbi_item['slug'] ) ); ?>"
                           <?php echo tbi_is_nav_current( $tbi_item['slug'] ) ? ' aria-current="page"' : ''; ?>>
                            <?php echo esc_html( $tbi_item['label'] ); ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>

        <!-- Col 3 -->
        <div class="footer-col" style="flex: 1 1 200px;">
            <h4>Contact</h4>
            <ul class="contact-list">
                <li>
                    <i class="fas fa-map-marker-alt"></i>
                    <span>RCOEM Campus, Katol Road, Nagpur, Maharashtra 440013</span>
                </li>
                <li>
                    <i class="fas fa-envelope"></i>
                    <a class="footer-contact-link" href="mailto:rcoemtbi@rknec.edu">rcoemtbi@rknec.edu</a>
                </li>
                <li>
                    <i class="fas fa-phone-alt"></i>
                    <a class="footer-contact-link" href="tel:+919168067277">9168067277</a>
                </li>
            </ul>
        </div>

    </div>

    <div class="footer-bottom">
        &copy;
        <?php echo date('Y'); ?> RCOEM TBI Foundation. All Rights Reserved.
    </div>
</footer>

<?php wp_footer(); ?>
</body>

</html>