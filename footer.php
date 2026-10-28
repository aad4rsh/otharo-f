<?php
/**
 * The footer for our theme
 */
?>
    <!-- Footer -->
    <footer class="bg-stone-950 text-stone-400 py-8 px-4 text-xs">
        <div class="max-w-7xl mx-auto flex flex-col sm:flex-row items-center justify-between gap-4 text-center sm:text-left">
            <div>
                <span class="text-white font-bold font-condensed text-base tracking-wider">OTHARO</span>
                <span class="text-stone-500 ml-2">© <?php echo date('Y'); ?> King's College Incubation Center. All rights reserved.</span>
            </div>
            <div class="flex items-center gap-6">
                <a href="<?php echo esc_url(home_url('/aboutus/')); ?>" class="hover:text-white transition-colors">About</a>
                <a href="<?php echo esc_url(home_url('/programs/')); ?>" class="hover:text-white transition-colors">Programs</a>
                <a href="<?php echo esc_url(home_url('/incubation/')); ?>" class="hover:text-white transition-colors">Incubation</a>
                <a href="<?php echo esc_url(home_url('/cohort/')); ?>" class="hover:text-white transition-colors">Cohorts</a>
                <a href="<?php echo esc_url(home_url('/apply/')); ?>" class="text-[#F2994A] hover:underline">Apply</a>
            </div>
        </div>
    </footer>

    <?php wp_footer(); ?>
</body>
</html>
