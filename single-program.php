<?php
/**
 * Single Program Template
 */
get_header();
?>

<main class="pt-24 pb-16">
    <?php while ( have_posts() ) : the_post(); 
        $hero_image = get_field('program_hero_image');
        $badge = get_field('program_badge');
        $overview = get_field('program_overview');
        $eligibility = get_field('program_eligibility');
        $benefits = get_field('program_benefits');
        $how_to_apply = get_field('program_how_to_apply');
        $apply_cta_text = get_field('program_apply_cta_text');
        $apply_cta_url = get_field('program_apply_cta_url');
        if (!$badge) { $badge = 'Open'; }
        if (!$apply_cta_text) { $apply_cta_text = 'Apply for this Program'; }
        if (!$apply_cta_url) { $apply_cta_url = home_url('/apply/'); }
    ?>
    <section class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="mb-10">
            <a href="<?php echo home_url('/'); ?>#offerings" class="inline-flex items-center gap-2 text-sm text-gray-600 hover:text-[#F2994A]">
                <i data-lucide="arrow-left" class="w-4 h-4"></i> Back to Programs
            </a>
        </div>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 items-center">
            <div>
                <span class="inline-block px-3 py-1 rounded-full bg-[#F2994A]/10 text-[#F2994A] text-xs font-bold uppercase tracking-widest"><?php echo esc_html($badge); ?></span>
                <h1 class="mt-4 text-5xl sm:text-6xl lg:text-7xl font-black font-condensed uppercase tracking-normal text-gray-900"><?php the_title(); ?></h1>
                <?php if (has_excerpt()) : ?>
                    <p class="mt-4 text-gray-600 text-base sm:text-lg leading-relaxed"><?php echo esc_html(get_the_excerpt()); ?></p>
                <?php endif; ?>
                <div class="mt-6">
                    <a href="<?php echo esc_url($apply_cta_url); ?>" class="inline-flex items-center gap-2 px-8 py-3 rounded-full bg-[#F2994A] hover:bg-[#E07A1E] text-white font-medium shadow-lg hover:shadow-xl transition-all">
                        <?php echo esc_html($apply_cta_text); ?>
                        <i data-lucide="arrow-right" class="w-4 h-4"></i>
                    </a>
                </div>
            </div>
            <div class="rounded-3xl overflow-hidden shadow-xl">
                <?php if ($hero_image && isset($hero_image['url'])) : ?>
                    <img src="<?php echo esc_url($hero_image['url']); ?>" alt="<?php the_title_attribute(); ?>" class="w-full h-[420px] object-cover" />
                <?php elseif (has_post_thumbnail()) : ?>
                    <?php the_post_thumbnail('large', array('class' => 'w-full h-[420px] object-cover')); ?>
                <?php else : ?>
                    <div class="w-full h-[420px] bg-gradient-to-br from-[#F2994A]/20 to-[#E07A1E]/10"></div>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <?php if ($overview) : ?>
    <section class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 mt-16">
        <h2 class="text-4xl sm:text-5xl font-black font-condensed uppercase tracking-normal text-gray-900">Overview</h2>
        <div class="mt-6 prose prose-lg max-w-none text-gray-700">
            <?php echo wp_kses_post($overview); ?>
        </div>
    </section>
    <?php endif; ?>

    <?php if ($benefits && is_array($benefits) && count($benefits) > 0) : ?>
    <section class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 mt-16">
        <h2 class="text-4xl sm:text-5xl font-black font-condensed uppercase tracking-normal text-gray-900">Benefits</h2>
        <div class="mt-8 grid grid-cols-1 md:grid-cols-2 gap-6">
            <?php foreach ($benefits as $benefit) : ?>
                <div class="p-6 rounded-2xl bg-white border border-stone-200 shadow-sm">
                    <?php if (!empty($benefit['title'])) : ?>
                        <h3 class="text-xl font-bold text-gray-900"><?php echo esc_html($benefit['title']); ?></h3>
                    <?php endif; ?>
                    <?php if (!empty($benefit['description'])) : ?>
                        <p class="mt-2 text-gray-600 text-sm leading-relaxed"><?php echo esc_html($benefit['description']); ?></p>
                    <?php endif; ?>
                </div>
            <?php endforeach; ?>
        </div>
    </section>
    <?php endif; ?>

    <?php if ($eligibility) : ?>
    <section class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 mt-16">
        <h2 class="text-4xl sm:text-5xl font-black font-condensed uppercase tracking-normal text-gray-900">Eligibility</h2>
        <div class="mt-6 prose prose-lg max-w-none text-gray-700">
            <?php echo wp_kses_post($eligibility); ?>
        </div>
    </section>
    <?php endif; ?>

    <?php if ($how_to_apply) : ?>
    <section class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 mt-16">
        <h2 class="text-4xl sm:text-5xl font-black font-condensed uppercase tracking-normal text-gray-900">How to Apply</h2>
        <div class="mt-6 prose prose-lg max-w-none text-gray-700">
            <?php echo wp_kses_post($how_to_apply); ?>
        </div>
    </section>
    <?php endif; ?>

    <section class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 mt-16 text-center">
        <div class="p-10 rounded-3xl bg-[#F2994A] text-white">
            <h2 class="text-4xl sm:text-5xl font-black font-condensed uppercase tracking-normal">Ready to Apply?</h2>
            <p class="mt-2 text-white/90">Take the first step towards building your venture with Otharo.</p>
            <div class="mt-6">
                <a href="<?php echo esc_url($apply_cta_url); ?>" class="inline-flex items-center gap-2 px-8 py-3 rounded-full bg-white text-[#F2994A] font-bold hover:bg-stone-100 transition-all">
                    <?php echo esc_html($apply_cta_text); ?>
                    <i data-lucide="arrow-right" class="w-4 h-4"></i>
                </a>
            </div>
        </div>
    </section>
    <?php endwhile; ?>
</main>

<?php get_footer(); ?>
