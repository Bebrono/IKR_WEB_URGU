<?php
/**
 * The template for displaying the footer
 */
?>

    </div><!-- .container -->
</main><!-- .site-content -->

<?php get_template_part('template-parts/feedback-form'); ?>

<footer class="site-footer">
    <div class="container">
        <div class="footer-content">
            <div class="footer-info">
                <div class="copyright">
                    <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. Все права защищены.</p>
                </div>
            </div>
        </div>
    </div>
</footer>

<style>
.site-footer {
    background-color: #1f2937;
    padding: 2rem 0;
    color: #fff;
}

.footer-content {
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
}

.copyright {
    font-size: 0.95rem;
    line-height: 1.5;
}

.company-name {
    font-weight: 600;
    color: #60a5fa;
}

@media (max-width: 768px) {
    .site-footer {
        padding: 1.5rem 0;
    }
    
    .copyright {
        font-size: 0.9rem;
    }
}
</style>

<?php wp_footer(); ?>
</body>
</html> 