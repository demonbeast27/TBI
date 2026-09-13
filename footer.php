<!-- Footer -->
<footer class="footer">
    <div class="footer-container" style="display: flex; flex-wrap: wrap; gap: 40px; justify-content: space-between;">

        <!-- Col 1 -->
        <div class="footer-col" style="flex: 1 1 250px;">
            <div class="footer-logo">RCOEM TBI</div>
            <div class="footer-sub">Technology Business Incubator</div>
            <div class="footer-tagline">Dream Big, Deliver Bigger</div>

            <h4 style="margin-top: 20px;">Newsletter Subscribe</h4>
            <div class="newsletter-box">
                <input type="email" placeholder="Enter your email">
                <button><i class="fas fa-paper-plane"></i></button>
            </div>
        </div>

        <!-- Col 2 -->
        <div class="footer-col" style="flex: 1 1 150px; padding-left: 20px;">
            <h4>Quick Links</h4>
            <ul class="footer-links">
                <li><a href="<?php echo esc_url(home_url('/')); ?>">Home</a></li>
                <li><a href="<?php echo esc_url(home_url('/about-us/')); ?>">About</a></li>
                <li><a href="<?php echo esc_url(home_url('/contact/')); ?>">Contact</a></li>
                <li><a href="<?php echo esc_url(home_url('/e-cell/')); ?>">E-Cell</a></li>
                <li><a href="<?php echo esc_url(home_url('/services/')); ?>">Infrastructure</a></li>
            </ul>
        </div>

        <!-- Col 3 -->
        <div class="footer-col" style="flex: 1 1 150px;">
            <h4>Resources</h4>
            <ul class="footer-links">
                <li><a href="#">Funding</a></li>
                <li><a href="#">Mentor</a></li>
                <li><a href="#">Programs</a></li>
                <li><a href="#">Events</a></li>
                <li><a href="#">Blog</a></li>
            </ul>
        </div>

        <!-- Col 4 -->
        <div class="footer-col" style="flex: 1 1 200px;">
            <h4>Contact</h4>
            <ul class="contact-list">
                <li>
                    <i class="fas fa-map-marker-alt"></i>
                    <span>RCOEM Campus, Katol Road, Nagpur, Maharashtra 440013</span>
                </li>
                <li>
                    <i class="fas fa-envelope"></i>
                    <span>rcoemtbi@rknec.edu</span>
                </li>
                <li>
                    <i class="fas fa-phone-alt"></i>
                    <span>9168067277</span>
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