<?php
/**
 * Front Page Template
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?><title><?php bloginfo('name'); ?> | <?php bloginfo('description'); ?></title>
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Poppins:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Tailwind config (must be a script for the CDN to pick it up) -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        brand: {
                            50: '#fffaf0',
                            100: '#feebc8',
                            200: '#fbd38d',
                            300: '#f6ad55',
                            400: '#ed8936',
                            500: '#f39c12',
                            600: '#e67e22',
                            primary: '#F2994A',
                            dark: '#E07A1E',
                            accent: '#F9A01B',
                            lightBg: '#FDFBF7',
                            cream: '#FBE8D3',
                        }
                    },
                    fontFamily: {
                        sans: ['"Poppins"', 'sans-serif'],
                        heading: ['"Bebas Neue"', 'sans-serif'],
                        display: ['"Bebas Neue"', 'sans-serif'],
                    },
                    boxShadow: {
                        'polaroid': '0 20px 35px -10px rgba(0, 0, 0, 0.15), 0 8px 16px -6px rgba(0, 0, 0, 0.08)',
                        'polaroid-hover': '0 30px 50px -12px rgba(242, 153, 74, 0.25), 0 15px 25px -8px rgba(0, 0, 0, 0.12)',
                        'glow': '0 0 25px rgba(242, 153, 74, 0.35)',
                    }
                }
            }
        };
    </script>

    <!-- Lucide Icons -->

    <!-- Custom styles -->
    <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/styles.css">

    <!-- Locomotive Scroll (smooth scrolling) -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/locomotive-scroll/bundled/locomotive-scroll.css">
</head>
<body <?php body_class(); ?> class="bg-[#FCFAF6] text-[#222222] font-sans antialiased overflow-x-hidden selection:bg-[#F2994A] selection:text-white">

    <!-- ============================================== -->
    <!-- 1. NAVIGATION BAR                              -->
    <!-- ============================================== -->
    <header class="fixed top-0 left-0 right-0 z-50 transition-all duration-300" id="main-nav">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-16 lg:h-20 flex items-center justify-between">

            <!-- Brand Logo -->
            <a href="<?php echo esc_url(home_url("/index/")); ?>" class="flex items-center gap-2 group">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/Otharo B_Y Logo 1.png" alt="Otharo Logo" class="h-12 lg:h-[68px] w-auto" />
            </a>

            <!-- Actions: Apply Button (far right) + Mobile Toggle -->
            <div class="flex items-center gap-3">
                <a href="<?php echo esc_url(home_url("/apply/")); ?>" class="inline-flex items-center justify-center px-10 py-3 rounded-full bg-[#F2994A] text-white text-sm leading-none tracking-tight font-medium transition-all duration-300 hover:bg-[#E07A1E] hover:shadow-glow">
                    Apply Now
                </a>

                <!-- Mobile Menu Button -->
                <button id="mobile-menu-btn" class="p-2 rounded-lg text-stone-900 hover:text-[#F2994A] focus:outline-none" aria-label="Toggle Menu">
                    <i data-lucide="menu" class="w-7 h-7" id="menu-icon"></i>
                </button>
            </div>
        </div>

        <!-- Mobile Drawer Menu -->
        <div id="mobile-menu" class="hidden bg-white border-t border-stone-200 px-6 py-6 space-y-4 shadow-lg">
            <a href="<?php echo esc_url(home_url("/index/")); ?>" class="block text-stone-800 hover:text-[#F2994A] text-base font-semibold py-1">Home</a>
            <a href="<?php echo esc_url(home_url("/aboutus/")); ?>" class="block text-stone-800 hover:text-[#F2994A] text-base font-semibold py-1">About Us</a>
            <a href="<?php echo esc_url(home_url("/programs/")); ?>" class="block text-stone-800 hover:text-[#F2994A] text-base font-semibold py-1">Programs</a>
            <a href="<?php echo esc_url(home_url("/incubation/")); ?>" class="block text-stone-800 hover:text-[#F2994A] text-base font-semibold py-1">Incubation</a>
            <a href="<?php echo esc_url(home_url("/innovationKitchen/")); ?>" class="block text-stone-800 hover:text-[#F2994A] text-base font-semibold py-1">Innovation Kitchen</a>
            <a href="<?php echo esc_url(home_url("/cohort/")); ?>" class="block text-stone-800 hover:text-[#F2994A] text-base font-semibold py-1">Cohort</a>
            <div class="pt-2">
                <a href="<?php echo esc_url(home_url("/apply/")); ?>" class="block text-center w-full py-2.5 rounded-full bg-[#F2994A] text-white font-bold text-sm uppercase">Apply for Incubation</a>
            </div>
        </div>
    </header>

    <!-- ============================================== -->
    <!-- 2. HERO SECTION                                -->
    <!-- ============================================== -->
    <section id="hero" class="relative min-h-[90vh] sm:min-h-screen flex items-center justify-center bg-black overflow-hidden pt-20">
        <!-- Background Video with Overlay -->
        <div class="absolute inset-0 z-0">
            <video
                id="hero-video"
                class="w-full h-full object-cover object-center"
                autoplay
                muted
                loop
                playsinline
                preload="auto"
            >
                <source src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/Kings Video.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <div id="hero-video-trigger" class="hero-video-trigger absolute inset-0 z-10 cursor-hero-muted"></div>
            <div class="absolute inset-0 bg-black/60 pointer-events-none"></div>
            <div class="absolute inset-0 bg-radial-gradient from-transparent via-black/40 to-black/90 pointer-events-none"></div>
        </div>

        <!-- Hero Content -->
        <div class="relative z-10 max-w-5xl mx-auto px-4 sm:px-6 text-center text-white py-16">
            <h1 class="font-sans leading-[0.95] drop-shadow-2xl">
                <span class="block font-semibold text-[64px] tracking-[-5px] text-white uppercase">Nurturing ideas</span>
                <span class="block font-normal text-[72px] tracking-[-5px] text-white">into <span class="uppercase">businesses</span></span>
            </h1>
        </div>

        <!-- Floating scroll indicator -->
        <div class="absolute bottom-6 left-1/2 -translate-x-1/2 z-10 text-white/50 text-xs flex flex-col items-center gap-2">
            <span class="uppercase tracking-widest text-[10px]">Explore Otharo</span>
            <div class="w-5 h-8 border-2 border-white/30 rounded-full flex justify-center p-1">
                <div class="w-1 h-2 bg-[#F2994A] rounded-full animate-bounce"></div>
            </div>
        </div>
    </section>

    <!-- ============================================== -->
    <!-- 3. ABOUT OTHARO SECTION                        -->
    <!-- ============================================== -->
    <section id="about" class="py-24 px-4 sm:px-6 lg:px-8 max-w-4xl mx-auto text-center">
        <?php
        $about_heading = get_field('about_heading');
        $about_description = get_field('about_description');
        $about_button_text = get_field('about_button_text');
        $about_button_link = get_field('about_button_link');
        if ( !$about_heading ) { $about_heading = 'OTHARO - ओथारो'; }
        if ( !$about_button_text ) { $about_button_text = 'Get to Know More'; }
        if ( !$about_button_link ) { $about_button_link = '#offerings'; }
        $heading_html = str_replace('ओथारो', '<span class="font-normal font-sans text-stone-900">ओथारो</span>', $about_heading);
        ?>
        <!-- Title -->
        <div class="inline-block relative mb-6">
            <h2 class="text-5xl sm:text-7xl font-black font-condensed uppercase tracking-normal text-[#F2994A]">
                <?php echo $heading_html; ?>
            </h2>
            <div class="w-16 h-1 bg-[#F2994A] mx-auto mt-2 rounded-full"></div>
        </div>

        <?php if ( $about_description ) : ?>
            <div class="text-gray-700 text-base sm:text-lg leading-relaxed mb-8 max-w-3xl mx-auto">
                <?php echo wp_kses_post( $about_description ); ?>
            </div>
        <?php else : ?>
            <p class="text-gray-700 text-base sm:text-lg leading-relaxed mb-8 max-w-3xl mx-auto">
                "Otharo" (ओथारो) is the Nepali word for <strong>incubation / brooding</strong> — the gentle, dedicated care given to nurture an egg until it hatches into life. At Otharo, King's College incubation wing, we provide early-stage dreamers, students, and founders with seed-bed resources, rigorous validation, workspace, and 1-on-1 industry mentorship to build sustainable companies.
            </p>
        <?php endif; ?>

        <a href="<?php echo esc_url( $about_button_link ); ?>" class="inline-flex items-center gap-2 px-8 py-3 rounded-full bg-[#F2994A] hover:bg-[#E07A1E] text-white text-[21px] leading-none tracking-[-1px] font-medium shadow-lg hover:shadow-xl transition-all transform hover:scale-105">
            <?php echo esc_html( $about_button_text ); ?>
            <i data-lucide="arrow-right" class="w-4 h-4"></i>
        </a>
    </section>

    <!-- ============================================== -->
    <!-- 4. MORE THAN NUMBERS (SCROLL-STICKY LAYOUT)  -->
    <!-- ============================================== -->
    <section id="impact" class="numbers-section bg-[#FCFAF6]">
        <?php
        $impact_heading = get_field('impact_heading');
        $impact_subheading = get_field('impact_subheading');
        $impact_stats = get_field('impact_stats');
        if (!$impact_heading) { $impact_heading = 'More Than Numbers'; }
        if (!$impact_subheading) { $impact_subheading = 'Behind each metric lies countless late nights, breakthrough pivots, and resilient entrepreneurs building Nepal\'s economic future.'; }
        if (empty($impact_stats)) {
            $impact_stats = array(
                array('icon' => 'calendar', 'number' => '2013', 'suffix' => '', 'label' => 'Year Established', 'description' => 'Over a decade of nurturing Nepal\'s brightest founders from raw idea to funded venture.', 'card_style' => 'nc-white-orange'),
                array('icon' => 'users', 'number' => '25', 'suffix' => '+', 'label' => 'Expert Mentors', 'description' => 'Industry veterans and serial founders guiding every cohort from concept to market.', 'card_style' => 'nc-orange'),
                array('icon' => 'clock', 'number' => '100', 'suffix' => '+', 'label' => 'Mentorship Hours', 'description' => 'Dedicated one-on-one coaching hours delivered every incubation cycle.', 'card_style' => 'nc-dark'),
                array('icon' => 'rocket', 'number' => '50', 'suffix' => '+', 'label' => 'Startups Incubated', 'description' => 'Ventures launched, funded, and scaling across Nepal\'s startup ecosystem.', 'card_style' => 'nc-terracotta'),
            );
        }
        $heading_parts = explode(' ', $impact_heading);
        $first_part = isset($heading_parts[0]) ? $heading_parts[0] : 'More';
        $rest_parts = array_slice($heading_parts, 1);
        $rest = implode(' ', $rest_parts);
        ?>
        <!-- Sticky wrapper: left text stays fixed, right cards scroll up -->
        <div class="numbers-inner max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <!-- LEFT: Sticky text panel -->
            <div class="numbers-left">
                <!-- Accent label -->
                <span class="inline-block text-xs font-bold uppercase tracking-widest text-[#F2994A] mb-0">Our Impact</span>

                <h2 class="text-5xl sm:text-7xl font-black font-condensed uppercase tracking-normal text-gray-900">
                        <?php echo esc_html($first_part); ?><br/><span class="text-[#F2994A]"><?php echo esc_html($rest ? $rest : 'Numbers'); ?></span>
                    </h2>

                <p class="mt-0 text-gray-500 text-sm sm:text-base leading-relaxed max-w-xs">
                    <?php echo esc_html($impact_subheading); ?>
                </p>

                <!-- Decorative bar -->
                <div class="mt-8 w-12 h-1.5 bg-[#F2994A] rounded-full"></div>
            </div>

            <!-- RIGHT: Cards stack on top of each other as you scroll -->
            <div class="numbers-right">

                <?php $idx = 0; foreach ($impact_stats as $stat) : 
                    $icon = isset($stat['icon']) ? $stat['icon'] : 'calendar';
                    $number = isset($stat['number']) ? $stat['number'] : '';
                    $suffix = isset($stat['suffix']) ? $stat['suffix'] : '';
                    $label = isset($stat['label']) ? $stat['label'] : '';
                    $desc = isset($stat['description']) ? $stat['description'] : '';
                    $style = isset($stat['card_style']) ? $stat['card_style'] : 'nc-white-orange';
                    $is_last = ($idx === count($impact_stats) - 1);
                ?>
                <div class="card-slot<?php echo $is_last ? ' card-slot--last' : ''; ?>">
                    <div class="numbers-card <?php echo esc_attr($style); ?>">
                        <div class="nc-header">
                            <?php if ($style === 'nc-orange') : ?>
                            <div class="nc-badge nc-badge-white-on-orange">
                                <i data-lucide="<?php echo esc_attr($icon); ?>" class="w-5 h-5 text-[#F2994A]"></i>
                            </div>
                            <?php elseif ($style === 'nc-terracotta') : ?>
                            <div class="nc-badge nc-badge-white-on-terracotta">
                                <i data-lucide="<?php echo esc_attr($icon); ?>" class="w-5 h-5 text-[#C2410C]"></i>
                            </div>
                            <?php else : ?>
                            <div class="nc-badge nc-badge-orange">
                                <i data-lucide="<?php echo esc_attr($icon); ?>" class="w-5 h-5 text-white"></i>
                            </div>
                            <?php endif; ?>
                        </div>
                        <?php if ($style === 'nc-white-orange' && $suffix === '') : ?>
                            <div class="nc-stat counter" data-target="<?php echo esc_attr($number); ?>"><?php echo esc_html($number); ?></div>
                        <?php else : ?>
                            <div class="nc-stat">
                                <?php if ($suffix === '') : ?>
                                    <span class="counter" data-target="<?php echo esc_attr($number); ?>"><?php echo esc_html($number); ?></span>
                                <?php else : ?>
                                    <span class="counter" data-target="<?php echo esc_attr($number); ?>"><?php echo esc_html($number); ?></span><span class="nc-plus"><?php echo esc_html($suffix); ?></span>
                                <?php endif; ?>
                            </div>
                        <?php endif; ?>
                        <div class="nc-sublabel"><?php echo esc_html($label); ?></div>
                        <p class="nc-desc"><?php echo esc_html($desc); ?></p>
                    </div>
                </div>
                <?php $idx++; endforeach; ?>

            </div><!-- /numbers-right -->
        </div><!-- /numbers-inner -->
    </section>

    <!-- ============================================== -->
    <!-- 5. OUR INCUBATEES / LOGOS MARQUEE             -->
    <!-- ============================================== -->
    <section id="incubatees" class="py-20 bg-white border-b border-gray-100 overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center mb-12">
            <h3 class="text-5xl sm:text-7xl font-black font-condensed uppercase tracking-normal text-gray-900">
                OUR INCUBATEES
            </h3>
            <p class="text-gray-500 text-sm mt-2 font-sans">Proud startups & ventures incubated through the Otharo ecosystem</p>
        </div>

        <!-- Marquee Track Row 1 (leftward) -->
        <div class="relative w-full overflow-hidden mb-6">
            <div class="animate-marquee flex items-center gap-6">
                <!-- Batch of logos (repeated for continuous loop) -->
                <div class="flex items-center gap-6 shrink-0">
                    <div class="px-6 py-3 bg-gray-50 hover:bg-white border border-gray-200 rounded-full flex items-center gap-3 shadow-sm hover:shadow-md transition-all">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/logo/ather.png" alt="Ather" class="h-8 sm:h-9 w-auto object-contain">
                        <span class="font-semibold text-gray-800 text-sm tracking-wide">Ather</span>
                    </div>
                    <div class="px-6 py-3 bg-gray-50 hover:bg-white border border-gray-200 rounded-full flex items-center gap-3 shadow-sm hover:shadow-md transition-all">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/logo/eSahara_Nepal - Baibhav Shrestha 1.png" alt="eSahara Nepal" class="h-8 sm:h-9 w-auto object-contain">
                        <span class="font-semibold text-gray-800 text-sm tracking-wide">eSahara Nepal</span>
                    </div>
                    <div class="px-6 py-3 bg-gray-50 hover:bg-white border border-gray-200 rounded-full flex items-center gap-3 shadow-sm hover:shadow-md transition-all">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/logo/logo-kapp - Sangam Uprety 1.png" alt="Kapp" class="h-8 sm:h-9 w-auto object-contain">
                        <span class="font-semibold text-gray-800 text-sm tracking-wide">Kapp</span>
                    </div>
                    <div class="px-6 py-3 bg-gray-50 hover:bg-white border border-gray-200 rounded-full flex items-center gap-3 shadow-sm hover:shadow-md transition-all">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/logo/ather.png" alt="Ather" class="h-8 sm:h-9 w-auto object-contain">
                        <span class="font-semibold text-gray-800 text-sm tracking-wide">Ather</span>
                    </div>
                    <div class="px-6 py-3 bg-gray-50 hover:bg-white border border-gray-200 rounded-full flex items-center gap-3 shadow-sm hover:shadow-md transition-all">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/logo/eSahara_Nepal - Baibhav Shrestha 1.png" alt="eSahara Nepal" class="h-8 sm:h-9 w-auto object-contain">
                        <span class="font-semibold text-gray-800 text-sm tracking-wide">eSahara Nepal</span>
                    </div>
                    <div class="px-6 py-3 bg-gray-50 hover:bg-white border border-gray-200 rounded-full flex items-center gap-3 shadow-sm hover:shadow-md transition-all">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/logo/logo-kapp - Sangam Uprety 1.png" alt="Kapp" class="h-8 sm:h-9 w-auto object-contain">
                        <span class="font-semibold text-gray-800 text-sm tracking-wide">Kapp</span>
                    </div>
                </div>

                <!-- Duplicate for loop -->
                <div class="flex items-center gap-6 shrink-0">
                    <div class="px-6 py-3 bg-gray-50 hover:bg-white border border-gray-200 rounded-full flex items-center gap-3 shadow-sm hover:shadow-md transition-all">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/logo/ather.png" alt="Ather" class="h-8 sm:h-9 w-auto object-contain">
                        <span class="font-semibold text-gray-800 text-sm tracking-wide">Ather</span>
                    </div>
                    <div class="px-6 py-3 bg-gray-50 hover:bg-white border border-gray-200 rounded-full flex items-center gap-3 shadow-sm hover:shadow-md transition-all">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/logo/eSahara_Nepal - Baibhav Shrestha 1.png" alt="eSahara Nepal" class="h-8 sm:h-9 w-auto object-contain">
                        <span class="font-semibold text-gray-800 text-sm tracking-wide">eSahara Nepal</span>
                    </div>
                    <div class="px-6 py-3 bg-gray-50 hover:bg-white border border-gray-200 rounded-full flex items-center gap-3 shadow-sm hover:shadow-md transition-all">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/logo/logo-kapp - Sangam Uprety 1.png" alt="Kapp" class="h-8 sm:h-9 w-auto object-contain">
                        <span class="font-semibold text-gray-800 text-sm tracking-wide">Kapp</span>
                    </div>
                    <div class="px-6 py-3 bg-gray-50 hover:bg-white border border-gray-200 rounded-full flex items-center gap-3 shadow-sm hover:shadow-md transition-all">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/logo/ather.png" alt="Ather" class="h-8 sm:h-9 w-auto object-contain">
                        <span class="font-semibold text-gray-800 text-sm tracking-wide">Ather</span>
                    </div>
                    <div class="px-6 py-3 bg-gray-50 hover:bg-white border border-gray-200 rounded-full flex items-center gap-3 shadow-sm hover:shadow-md transition-all">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/logo/eSahara_Nepal - Baibhav Shrestha 1.png" alt="eSahara Nepal" class="h-8 sm:h-9 w-auto object-contain">
                        <span class="font-semibold text-gray-800 text-sm tracking-wide">eSahara Nepal</span>
                    </div>
                    <div class="px-6 py-3 bg-gray-50 hover:bg-white border border-gray-200 rounded-full flex items-center gap-3 shadow-sm hover:shadow-md transition-all">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/logo/logo-kapp - Sangam Uprety 1.png" alt="Kapp" class="h-8 sm:h-9 w-auto object-contain">
                        <span class="font-semibold text-gray-800 text-sm tracking-wide">Kapp</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Marquee Track Row 2 (rightward) -->
        <div class="relative w-full overflow-hidden mb-6">
            <div class="animate-marquee-rev flex items-center gap-6">
                <!-- Batch of logos (repeated for continuous loop) -->
                <div class="flex items-center gap-6 shrink-0">
                    <div class="px-6 py-3 bg-gray-50 hover:bg-white border border-gray-200 rounded-full flex items-center gap-3 shadow-sm hover:shadow-md transition-all">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/logo/Mr.Waffles logo-01 1.png" alt="Mr. Waffles" class="h-8 sm:h-9 w-auto object-contain">
                        <span class="font-semibold text-gray-800 text-sm tracking-wide">Mr. Waffles</span>
                    </div>
                    <div class="px-6 py-3 bg-gray-50 hover:bg-white border border-gray-200 rounded-full flex items-center gap-3 shadow-sm hover:shadow-md transition-all">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/logo/samparka.png" alt="Samparka" class="h-8 sm:h-9 w-auto object-contain">
                        <span class="font-semibold text-gray-800 text-sm tracking-wide">Samparka</span>
                    </div>
                    <div class="px-6 py-3 bg-gray-50 hover:bg-white border border-gray-200 rounded-full flex items-center gap-3 shadow-sm hover:shadow-md transition-all">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/logo/studioBrianta.png" alt="Studio Brianta" class="h-8 sm:h-9 w-auto object-contain">
                        <span class="font-semibold text-gray-800 text-sm tracking-wide">Studio Brianta</span>
                    </div>
                    <div class="px-6 py-3 bg-gray-50 hover:bg-white border border-gray-200 rounded-full flex items-center gap-3 shadow-sm hover:shadow-md transition-all">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/logo/Mr.Waffles logo-01 1.png" alt="Mr. Waffles" class="h-8 sm:h-9 w-auto object-contain">
                        <span class="font-semibold text-gray-800 text-sm tracking-wide">Mr. Waffles</span>
                    </div>
                    <div class="px-6 py-3 bg-gray-50 hover:bg-white border border-gray-200 rounded-full flex items-center gap-3 shadow-sm hover:shadow-md transition-all">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/logo/samparka.png" alt="Samparka" class="h-8 sm:h-9 w-auto object-contain">
                        <span class="font-semibold text-gray-800 text-sm tracking-wide">Samparka</span>
                    </div>
                    <div class="px-6 py-3 bg-gray-50 hover:bg-white border border-gray-200 rounded-full flex items-center gap-3 shadow-sm hover:shadow-md transition-all">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/logo/studioBrianta.png" alt="Studio Brianta" class="h-8 sm:h-9 w-auto object-contain">
                        <span class="font-semibold text-gray-800 text-sm tracking-wide">Studio Brianta</span>
                    </div>
                </div>

                <!-- Duplicate for loop -->
                <div class="flex items-center gap-6 shrink-0">
                    <div class="px-6 py-3 bg-gray-50 hover:bg-white border border-gray-200 rounded-full flex items-center gap-3 shadow-sm hover:shadow-md transition-all">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/logo/Mr.Waffles logo-01 1.png" alt="Mr. Waffles" class="h-8 sm:h-9 w-auto object-contain">
                        <span class="font-semibold text-gray-800 text-sm tracking-wide">Mr. Waffles</span>
                    </div>
                    <div class="px-6 py-3 bg-gray-50 hover:bg-white border border-gray-200 rounded-full flex items-center gap-3 shadow-sm hover:shadow-md transition-all">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/logo/samparka.png" alt="Samparka" class="h-8 sm:h-9 w-auto object-contain">
                        <span class="font-semibold text-gray-800 text-sm tracking-wide">Samparka</span>
                    </div>
                    <div class="px-6 py-3 bg-gray-50 hover:bg-white border border-gray-200 rounded-full flex items-center gap-3 shadow-sm hover:shadow-md transition-all">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/logo/studioBrianta.png" alt="Studio Brianta" class="h-8 sm:h-9 w-auto object-contain">
                        <span class="font-semibold text-gray-800 text-sm tracking-wide">Studio Brianta</span>
                    </div>
                    <div class="px-6 py-3 bg-gray-50 hover:bg-white border border-gray-200 rounded-full flex items-center gap-3 shadow-sm hover:shadow-md transition-all">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/logo/Mr.Waffles logo-01 1.png" alt="Mr. Waffles" class="h-8 sm:h-9 w-auto object-contain">
                        <span class="font-semibold text-gray-800 text-sm tracking-wide">Mr. Waffles</span>
                    </div>
                    <div class="px-6 py-3 bg-gray-50 hover:bg-white border border-gray-200 rounded-full flex items-center gap-3 shadow-sm hover:shadow-md transition-all">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/logo/samparka.png" alt="Samparka" class="h-8 sm:h-9 w-auto object-contain">
                        <span class="font-semibold text-gray-800 text-sm tracking-wide">Samparka</span>
                    </div>
                    <div class="px-6 py-3 bg-gray-50 hover:bg-white border border-gray-200 rounded-full flex items-center gap-3 shadow-sm hover:shadow-md transition-all">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/logo/studioBrianta.png" alt="Studio Brianta" class="h-8 sm:h-9 w-auto object-contain">
                        <span class="font-semibold text-gray-800 text-sm tracking-wide">Studio Brianta</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Marquee Track Row 3 (leftward, slower) -->
        <div class="relative w-full overflow-hidden">
            <div class="animate-marquee-slow flex items-center gap-6">
                <!-- Batch of logos (repeated for continuous loop) -->
                <div class="flex items-center gap-6 shrink-0">
                    <div class="px-6 py-3 bg-gray-50 hover:bg-white border border-gray-200 rounded-full flex items-center gap-3 shadow-sm hover:shadow-md transition-all">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/logo/Yarsa Logo 1.png" alt="Yarsa" class="h-8 sm:h-9 w-auto object-contain">
                        <span class="font-semibold text-gray-800 text-sm tracking-wide">Yarsa</span>
                    </div>
                    <div class="px-6 py-3 bg-gray-50 hover:bg-white border border-gray-200 rounded-full flex items-center gap-3 shadow-sm hover:shadow-md transition-all">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/logo/3 half-transparent 1.png" alt="Tumlet" class="h-8 sm:h-9 w-auto object-contain">
                        <span class="font-semibold text-gray-800 text-sm tracking-wide">Tumlet</span>
                    </div>
                    <div class="px-6 py-3 bg-gray-50 hover:bg-white border border-gray-200 rounded-full flex items-center gap-3 shadow-sm hover:shadow-md transition-all">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/logo/Yarsa Logo 1.png" alt="Yarsa" class="h-8 sm:h-9 w-auto object-contain">
                        <span class="font-semibold text-gray-800 text-sm tracking-wide">Yarsa</span>
                    </div>
                    <div class="px-6 py-3 bg-gray-50 hover:bg-white border border-gray-200 rounded-full flex items-center gap-3 shadow-sm hover:shadow-md transition-all">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/logo/3 half-transparent 1.png" alt="Tumlet" class="h-8 sm:h-9 w-auto object-contain">
                        <span class="font-semibold text-gray-800 text-sm tracking-wide">Tumlet</span>
                    </div>
                    <div class="px-6 py-3 bg-gray-50 hover:bg-white border border-gray-200 rounded-full flex items-center gap-3 shadow-sm hover:shadow-md transition-all">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/logo/Yarsa Logo 1.png" alt="Yarsa" class="h-8 sm:h-9 w-auto object-contain">
                        <span class="font-semibold text-gray-800 text-sm tracking-wide">Yarsa</span>
                    </div>
                    <div class="px-6 py-3 bg-gray-50 hover:bg-white border border-gray-200 rounded-full flex items-center gap-3 shadow-sm hover:shadow-md transition-all">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/logo/3 half-transparent 1.png" alt="Tumlet" class="h-8 sm:h-9 w-auto object-contain">
                        <span class="font-semibold text-gray-800 text-sm tracking-wide">Tumlet</span>
                    </div>
                </div>

                <!-- Duplicate for loop -->
                <div class="flex items-center gap-6 shrink-0">
                    <div class="px-6 py-3 bg-gray-50 hover:bg-white border border-gray-200 rounded-full flex items-center gap-3 shadow-sm hover:shadow-md transition-all">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/logo/Yarsa Logo 1.png" alt="Yarsa" class="h-8 sm:h-9 w-auto object-contain">
                        <span class="font-semibold text-gray-800 text-sm tracking-wide">Yarsa</span>
                    </div>
                    <div class="px-6 py-3 bg-gray-50 hover:bg-white border border-gray-200 rounded-full flex items-center gap-3 shadow-sm hover:shadow-md transition-all">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/logo/3 half-transparent 1.png" alt="Tumlet" class="h-8 sm:h-9 w-auto object-contain">
                        <span class="font-semibold text-gray-800 text-sm tracking-wide">Tumlet</span>
                    </div>
                    <div class="px-6 py-3 bg-gray-50 hover:bg-white border border-gray-200 rounded-full flex items-center gap-3 shadow-sm hover:shadow-md transition-all">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/logo/Yarsa Logo 1.png" alt="Yarsa" class="h-8 sm:h-9 w-auto object-contain">
                        <span class="font-semibold text-gray-800 text-sm tracking-wide">Yarsa</span>
                    </div>
                    <div class="px-6 py-3 bg-gray-50 hover:bg-white border border-gray-200 rounded-full flex items-center gap-3 shadow-sm hover:shadow-md transition-all">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/logo/3 half-transparent 1.png" alt="Tumlet" class="h-8 sm:h-9 w-auto object-contain">
                        <span class="font-semibold text-gray-800 text-sm tracking-wide">Tumlet</span>
                    </div>
                    <div class="px-6 py-3 bg-gray-50 hover:bg-white border border-gray-200 rounded-full flex items-center gap-3 shadow-sm hover:shadow-md transition-all">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/logo/Yarsa Logo 1.png" alt="Yarsa" class="h-8 sm:h-9 w-auto object-contain">
                        <span class="font-semibold text-gray-800 text-sm tracking-wide">Yarsa</span>
                    </div>
                    <div class="px-6 py-3 bg-gray-50 hover:bg-white border border-gray-200 rounded-full flex items-center gap-3 shadow-sm hover:shadow-md transition-all">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/logo/3 half-transparent 1.png" alt="Tumlet" class="h-8 sm:h-9 w-auto object-contain">
                        <span class="font-semibold text-gray-800 text-sm tracking-wide">Tumlet</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 6. POWER UP YOUR POTENTIAL (SCROLL TRIGGER)   -->
    <!-- ============================================== -->
        <!-- ============================================== -->
    <!-- 6. POWER UP YOUR POTENTIAL (SCROLL TRIGGER)   -->
    <!-- ============================================== -->
    <section id="offerings" class="power-section border-b border-gray-100">
        <div class="power-sticky-wrapper">
            
            <div class="power-header">
                <span class="inline-block text-xs font-bold uppercase tracking-widest text-[#F2994A] mb-3">Our Pathways</span>
                <h2 class="text-5xl sm:text-6xl lg:text-7xl font-black font-condensed uppercase tracking-normal text-gray-900 leading-[0.95]">
                    POWER UP YOUR POTENTIAL, <span class="text-[#F2994A]">COMPLETELY FREE!</span>
                </h2>
                <p class="text-gray-500 mt-3 text-sm sm:text-base max-w-xl mx-auto font-sans leading-relaxed">
                    Tailored incubation pathways built to take you from raw whiteboard sketches to revenue-generating companies.
                </p>
            </div>

            <!-- Scroll-Triggered Cards Stage -->
            <div class="power-cards-stage">
                <?php
                $programs_query = new WP_Query(array(
                    'post_type' => 'program',
                    'posts_per_page' => -1,
                    'orderby' => array('menu_order' => 'ASC', 'date' => 'ASC'),
                    'post_status' => 'publish',
                ));
                $align_map = array('left' => 'power-card-left', 'center' => 'power-card-center', 'right' => 'power-card-right');
                if ($programs_query->have_posts()) :
                    while ($programs_query->have_posts()) : $programs_query->the_post();
                        $badge = get_field('program_badge');
                        $short_desc = get_field('program_short_description');
                        $card_image = get_field('program_card_image');
                        $alignment = get_field('program_card_alignment');
                        $primary_text = get_field('program_primary_button_text');
                        $primary_url = get_field('program_primary_button_url');
                        $secondary_text = get_field('program_secondary_button_text');
                        $secondary_url = get_field('program_secondary_button_url');
                        if (!$badge) { $badge = 'Open'; }
                        if (!$primary_text) { $primary_text = 'Apply Now'; }
                        if (!$primary_url) { $primary_url = home_url('/apply/'); }
                        if (!$secondary_text) { $secondary_text = 'Know More'; }
                        if (!$secondary_url) { $secondary_url = get_permalink(); }
                        if (!$alignment || !isset($align_map[$alignment])) { $alignment = 'center'; }
                        $card_class = $align_map[$alignment];
                ?>
                <div class="power-card-wrap <?php echo esc_attr($card_class); ?>" id="card-<?php echo esc_attr(sanitize_title(get_the_title())); ?>">
                    <div class="potential-card">
                        <div class="pc-image-wrapper">
                            <?php if ($card_image && isset($card_image['url'])) : ?>
                                <img src="<?php echo esc_url($card_image['url']); ?>" alt="<?php the_title_attribute(); ?>" class="pc-img" loading="eager" />
                            <?php elseif (has_post_thumbnail()) : ?>
                                <?php the_post_thumbnail('large', array('class' => 'pc-img', 'loading' => 'eager')); ?>
                            <?php else : ?>
                                <div class="pc-img bg-gradient-to-br from-[#F2994A]/20 to-[#E07A1E]/10"></div>
                            <?php endif; ?>
                            <div class="pc-badge"><?php echo esc_html($badge); ?></div>
                        </div>
                        <div class="pc-content">
                            <h3 class="pc-title"><?php the_title(); ?></h3>
                            <p class="pc-desc"><?php echo esc_html($short_desc ? $short_desc : wp_trim_words(get_the_excerpt() ? get_the_excerpt() : wp_strip_all_tags(get_the_content()), 30)); ?></p>
                        </div>
                        <div class="pc-actions">
                            <a href="<?php echo esc_url($primary_url); ?>" class="pc-action pc-action-primary"><?php echo esc_html($primary_text); ?></a>
                            <a href="<?php echo esc_url($secondary_url); ?>" class="pc-action pc-action-ghost"><?php echo esc_html($secondary_text); ?></a>
                        </div>
                    </div>
                </div>
                <?php endwhile; wp_reset_postdata(); else : ?>
                <div class="power-card-wrap power-card-left" id="card-innovation">
                    <div class="potential-card">
                        <div class="pc-image-wrapper">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/innovationKitchen.jpg" alt="Innovation Kitchen" class="pc-img" loading="eager" />
                            <div class="pc-badge">Open</div>
                        </div>
                        <div class="pc-content">
                            <h3 class="pc-title">Innovation Kitchen</h3>
                            <p class="pc-desc">A creative sandbox for King's College students. Bring your raw ideas, and we'll help you refine the product, validate the concept, and provide initial feedback.</p>
                        </div>
                        <div class="pc-actions">
                            <a href="<?php echo home_url('/apply/'); ?>" class="pc-action pc-action-primary">Apply Now</a>
                            <a href="#faq" class="pc-action pc-action-ghost">Know More</a>
                        </div>
                    </div>
                </div>

                <div class="power-card-wrap power-card-center" id="card-garage">
                    <div class="potential-card">
                        <div class="pc-image-wrapper">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/startupGarage.jpg" alt="Startup Garage" class="pc-img" loading="eager" />
                            <div class="pc-badge">Open</div>
                        </div>
                        <div class="pc-content">
                            <h3 class="pc-title">Startup Garage</h3>
                            <p class="pc-desc">Can't wait 6 months? Get 1-day end-to-end intensive sessions with mentors right now. Perfect for solving immediate bottlenecks in legal, finance, or product.</p>
                        </div>
                        <div class="pc-actions">
                            <a href="<?php echo home_url('/apply/'); ?>" class="pc-action pc-action-primary">Apply Now</a>
                            <a href="#faq" class="pc-action pc-action-ghost">Know More</a>
                        </div>
                    </div>
                </div>

                <div class="power-card-wrap power-card-right" id="card-incubation">
                    <div class="potential-card">
                        <div class="pc-image-wrapper">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/otharoIncubation.jpg" alt="Othāro Incubation" class="pc-img" loading="eager" />
                            <div class="pc-badge">Open</div>
                        </div>
                        <div class="pc-content">
                            <h3 class="pc-title">Othāro Incubation</h3>
                            <p class="pc-desc">Our intense 6-month workshop-based incubation for growth and scalability. Tailored cohorts, 1-on-1 mentorship, seed access, and zero equity taken.</p>
                        </div>
                        <div class="pc-actions">
                            <a href="<?php echo home_url('/apply/'); ?>" class="pc-action pc-action-primary">Apply Now</a>
                            <a href="#faq" class="pc-action pc-action-ghost">Know More</a>
                        </div>
                    </div>
                </div>
                <?php endif; ?>

            </div>
        </div>
    </section>

    <!-- ============================================== -->
    <!-- 7. INITIATIVE OF KING'S COLLEGE & FEATURES     -->
    <!-- ============================================== -->
    <section class="py-20 bg-white border-y border-stone-200/80">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
                
                <!-- Left Banner Box: AN INITIATIVE OF -->
                <div class="lg:col-span-5 bg-[#F2994A] p-8 sm:p-12 rounded-3xl text-white shadow-xl flex flex-col justify-center gap-6 min-h-[470px] relative overflow-hidden">
                    <div class="absolute -right-8 -top-8 w-40 h-40 bg-white/10 rounded-full blur-2xl"></div>
                    
                    <div class="text-center">
                        <h3 class="text-2xl sm:text-4xl font-condensed uppercase tracking-normal text-white">
                            AN INITIATIVE OF
                        </h3>
                    </div>

                    <!-- King's College Logo Card -->
                    <div class="bg-white p-8 sm:p-10 rounded-2xl shadow-md flex items-center justify-center text-center">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/logo/kings-new-logo-main 1.png" alt="King's College" class="mx-auto w-auto max-h-36 object-contain" />
                    </div>

                    <p class="text-xs sm:text-sm text-white/90 leading-relaxed text-center">
                        Access research-driven resources, top student talent, startup mentors, and leaders from across industries.
                    </p>
                </div>

                <!-- Right Column: MORE THAN JUST WORKSPACE -->
                <div class="lg:col-span-7 lg:pl-6 space-y-6">
                    <div>
                        <h3 class="text-5xl sm:text-6xl text-center font-black font-condensed uppercase tracking-normal text-gray-900 leading-[0.85]">
                            MORE THAN JUST WORKSPACE
                        </h3>
                        <p class="text-gray-500 text-sm mt-1 text-center">We provide the critical support structure that early-stage ventures often lack.</p>
                    </div>

                    <div class="space-y-6 pt-2">
                        <!-- Feature 1 -->
                        <div class="flex items-start gap-4 p-4 rounded-2xl bg-stone-50 hover:bg-[#F2994A]/10 border border-stone-200/60 transition-all">
                            <div class="w-12 h-12 rounded-xl bg-[#F2994A]/10 text-[#F2994A] flex items-center justify-center shrink-0">
                                <i data-lucide="compass" class="w-6 h-6"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-900 text-base">Tailored Mentorship</h4>
                                <p class="text-xs sm:text-sm text-gray-600 mt-1 leading-relaxed">
                                    Access to 50+ mentors across legal, finance, marketing, and tech sectors.
                                </p>
                            </div>
                        </div>

                        <!-- Feature 2 -->
                        <div class="flex items-start gap-4 p-4 rounded-2xl bg-stone-50 hover:bg-[#F2994A]/10 border border-stone-200/60 transition-all">
                            <div class="w-12 h-12 rounded-xl bg-[#F2994A]/10 text-[#F2994A] flex items-center justify-center shrink-0">
                                <i data-lucide="shield-check" class="w-6 h-6"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-900 text-base">Investment Ready</h4>
                                <p class="text-xs sm:text-sm text-gray-600 mt-1 leading-relaxed">
                                    Our goal is to make you investable. We help structure your business for scale.
                                </p>
                            </div>
                        </div>

                        <!-- Feature 3 -->
                        <div class="flex items-start gap-4 p-4 rounded-2xl bg-stone-50 hover:bg-[#F2994A]/10 border border-stone-200/60 transition-all">
                            <div class="w-12 h-12 rounded-xl bg-[#F2994A]/10 text-[#F2994A] flex items-center justify-center shrink-0">
                                <i data-lucide="users" class="w-6 h-6"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-900 text-base">Community Access</h4>
                                <p class="text-xs sm:text-sm text-gray-600 mt-1 leading-relaxed">
                                    Join a network of alumni, students, and industry leaders.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ============================================== -->
    <!-- 8. FAQ & VALUE PROP SECTION                    -->
    <!-- ============================================== -->
    <section id="faq" class="py-24 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-start">
            
            <!-- Left Side Pitch -->
            <div class="lg:col-span-5 space-y-4 pt-20">
                
                <h3 class="text-gray-900 leading-tight text-right">
                    <span class="block text-2xl font-small tracking-tight">Still wondering if Otharo is for you?</span>
                    <span class="block text-7xl font-black font-condensed uppercase tracking-normal text-[#F2994A] mt-0">You bring the idea.</span>
                    <span class="block text-2xl font-small tracking-tight mt-0">We help you give it wings.</span>
                </h3>
            </div>

            <!-- Right Side Accordions -->
            <div class="lg:col-span-7 space-y-4" id="faq-container">
                
                <!-- FAQ Item 1 -->
                <div class="border border-stone-200 rounded-2xl bg-white overflow-hidden transition-all duration-200">
                    <button class="w-full px-6 py-5 text-left flex items-center justify-between text-gray-900 focus:outline-none faq-btn" aria-expanded="false">
                        <span class="text-base sm:text-lg">Who is eligible to apply for Otharo?</span>
                        <i data-lucide="chevron-down" class="w-5 h-5 text-gray-400 transition-transform duration-300"></i>
                    </button>
                    <div class="faq-content hidden px-6 pb-5 text-sm text-gray-600 leading-relaxed border-t border-stone-100 pt-3">
                        Anyone with an early-stage idea, prototype, or registered startup can apply! While King's College students and alumni receive dedicated support, our incubation cohorts are open to innovators, tech enthusiasts, and social entrepreneurs across Nepal.
                    </div>
                </div>

                <!-- FAQ Item 2 -->
                <div class="border border-stone-200 rounded-2xl bg-white overflow-hidden transition-all duration-200">
                    <button class="w-full px-6 py-5 text-left flex items-center justify-between text-gray-900 focus:outline-none faq-btn" aria-expanded="false">
                        <span class="text-base sm:text-lg">Is the incubation program truly 100% free?</span>
                        <i data-lucide="chevron-down" class="w-5 h-5 text-gray-400 transition-transform duration-300"></i>
                    </button>
                    <div class="faq-content hidden px-6 pb-5 text-sm text-gray-600 leading-relaxed border-t border-stone-100 pt-3">
                        Yes! As part of King's College's non-profit entrepreneurship mission, core incubation, workspace access, workshops, and mentorship are provided with zero tuition fees and zero equity dilution.
                    </div>
                </div>

                <!-- FAQ Item 3 -->
                <div class="border border-stone-200 rounded-2xl bg-white overflow-hidden transition-all duration-200">
                    <button class="w-full px-6 py-5 text-left flex items-center justify-between  text-gray-900 focus:outline-none faq-btn" aria-expanded="false">
                        <span class="text-base sm:text-lg">Do I need a complete registered company to join?</span>
                        <i data-lucide="chevron-down" class="w-5 h-5 text-gray-400 transition-transform duration-300"></i>
                    </button>
                    <div class="faq-content hidden px-6 pb-5 text-sm text-gray-600 leading-relaxed border-t border-stone-100 pt-3">
                        No, an incorporated company is not mandatory at the ideation stage. In fact, our legal advisors and mentors will help you with entity structuring and formal registration when you are ready.
                    </div>
                </div>

                <!-- FAQ Item 4 -->
                <div class="border border-stone-200 rounded-2xl bg-white overflow-hidden transition-all duration-200">
                    <button class="w-full px-6 py-5 text-left flex items-center justify-between  text-gray-900 focus:outline-none faq-btn" aria-expanded="false">
                        <span class="text-base sm:text-lg">What kind of workspace facilities are provided?</span>
                        <i data-lucide="chevron-down" class="w-5 h-5 text-gray-400 transition-transform duration-300"></i>
                    </button>
                    <div class="faq-content hidden px-6 pb-5 text-sm text-gray-600 leading-relaxed border-t border-stone-100 pt-3">
                        Incubated teams get access to high-speed fiber internet, collaborative desks, private conference rooms for client pitches, whiteboarding zones, and event spaces at the King's College Babarmahal campus.
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- ============================================== -->
    <!-- 9. QUICK CTA STRIP                             -->
    <!-- ============================================== -->
    <div class="bg-[#F2994A] text-white py-5 px-4 shadow-md">
        <div class="max-w-7xl mx-auto flex flex-col sm:flex-row items-center justify-between gap-4">
            <div class="flex items-center gap-3 text-center sm:text-left">
                <div class="p-2 bg-white/20 rounded-xl">
                    <i data-lucide="message-square" class="w-9 h-9 text-white"></i>
                </div>
                <div>
                    <h4 class="font-black font-condensed uppercase tracking-normal text-5xl">GOT QUESTIONS?</h4>
                    <p class="text-[17px] text-white/90">We’re here to help and would love to hear from you</p>
                </div>
            </div>
            <a href="mailto:otharo@kingscollege.edu.np" class="px-8 py-3.5 rounded-full bg-white text-[#F2994A] font-bold text-sm uppercase tracking-wider hover:bg-stone-100 transition-all flex items-center gap-2 shadow-md">
                <span>Contact Us</span>
                <i data-lucide="arrow-right" class="w-5 h-5"></i>
            </a>
        </div>
    </div>

    <!-- ============================================== -->
    <!-- 10. FINAL HERO FOOTER CTA & COHORT BANNER     -->
    <!-- ============================================== -->
    <section id="apply" class="relative bg-[#FDF2E7] pt-24 pb-0 overflow-hidden text-center border-t border-amber-100">
        
        <div class="max-w-4xl mx-auto px-4 sm:px-6 relative z-10 mb-14 flex flex-col items-center">
            <!-- Text Hierarchy Lockup -->
            <div class="inline-block relative text-center">
                <!-- 1. Small top-left subtitle -->
                <span class="block text-[#855523] font-sans font-medium text-lg sm:text-2xl md:text-3xl leading-none mb-1 sm:mb-1.5">
                    Ready to
                </span>

                <!-- 2. Main prominent headline -->
                <h2 class="text-6xl sm:text-7xl md:text-8xl lg:text-[156px] font-condensed font-black uppercase tracking-normal text-[#F59E0B] leading-[0.95]">
                    TAKE FLIGHT?
                </h2>

                <!-- 3. Bottom-right status indicator -->
                <div class="flex justify-center items-center gap-2 mt-0 sm:mt-1">
                    <span class="text-[#855523] text-lg sm:text-2xl md:text-3xl font-sans font-medium tracking-normal">
                        Applications are Open
                    </span>
                    <span class="w-2.5 h-2.5 sm:w-3.5 sm:h-3.5 rounded-full bg-[#10B981] inline-block shadow-sm"></span>
                </div>
            </div>

            <!-- 4. Pill CTA Button centered below -->
            <div class="mt-7 sm:mt-9">
                <a href="<?php echo esc_url(home_url("/apply/")); ?>" class="inline-block px-8 sm:px-10 py-3 sm:py-3.5 rounded-full bg-[#E5A956] hover:bg-[#D99A43] text-white font-sans font-semibold text-lg sm:text-xl shadow-md hover:shadow-lg transition-all transform hover:-translate-y-0.5">
                    Apply Now!
                </a>
            </div>
        </div>

        <!-- Group Photo of Alumni/Founders attached to the black footer -->
        <div class="relative w-full mt-8">
            <div class="relative px-4 sm:px-2">
                
                 <!-- <div class="absolute inset-0 bg-[#F2994A]" style="border-radius: 160px; height: 500px;"></div> -->
                <!-- Group Image -->
                <img 
                    src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/footer_group.png" 
                    alt="Otharo Community Cohort of Founders and Mentors" 
                    class="relative w-full h-auto block rounded-2xl"
                />
                
                </div>
        </div>
        <footer class="bg-stone-950 text-stone-400 py-8 px-4 text-xs">
            <div class="max-w-7xl mx-auto flex flex-col sm:flex-row items-center justify-between gap-4 text-center sm:text-left">
                <div>
                    <span class="text-white font-bold font-condensed text-base tracking-wider">OTHARO</span>
                    <span class="text-stone-500 ml-2">© 2026 King's College Incubation Center. All rights reserved.</span>
                </div>
                <div class="flex items-center gap-6">
                    <a href="<?php echo esc_url(home_url("/aboutus/")); ?>" class="hover:text-white transition-colors">About</a>
                    <a href="<?php echo esc_url(home_url("/programs/")); ?>" class="hover:text-white transition-colors">Programs</a>
                    <a href="<?php echo esc_url(home_url("/incubation/")); ?>" class="hover:text-white transition-colors">Incubation</a>
                    <a href="<?php echo esc_url(home_url("/cohort/")); ?>" class="hover:text-white transition-colors">Cohorts</a>
                    <a href="<?php echo esc_url(home_url("/apply/")); ?>" class="text-[#F2994A] hover:underline">Apply</a>
                </div>
            </div>
        </footer>

        <!-- Bottom Copyright / Footer Links -->

    </section>

    <!-- ============================================== -->
    <!-- APPLICATION MODAL                              -->
    <!-- ============================================== -->
    <div id="apply-modal" class="fixed inset-0 z-50 bg-black/70 backdrop-blur-sm hidden flex items-center justify-center p-4">
        <div class="bg-white rounded-3xl max-w-lg w-full p-8 shadow-2xl relative animate-in fade-in zoom-in duration-300">
            <button onclick="closeApplyModal()" class="absolute top-6 right-6 p-2 rounded-full text-gray-400 hover:text-gray-700 bg-stone-100">
                <i data-lucide="x" class="w-5 h-5"></i>
            </button>
            
            <div class="text-center mb-6">
                <span class="text-[#F2994A] font-bold text-xs uppercase tracking-widest">Join Cohort</span>
                <h3 class="text-2xl font-black font-condensed uppercase tracking-normal text-gray-900 mt-1">Apply for Incubation</h3>
                <p class="text-xs text-gray-500 mt-1">Fill out the quick form below. Our incubation committee reviews rolling applications.</p>
            </div>

            <form id="incubator-form" onsubmit="handleFormSubmit(event)" class="space-y-4 text-left">
                <div>
                    <label class="block text-xs font-bold uppercase text-gray-700 mb-1">Founder / Team Lead Name</label>
                    <input type="text" required placeholder="e.g., Aarav Sharma" class="w-full px-4 py-2.5 rounded-xl border border-stone-200 text-sm focus:outline-none focus:border-[#F2994A] focus:ring-1 focus:ring-[#F2994A]" />
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-xs font-bold uppercase text-gray-700 mb-1">Email</label>
                        <input type="email" required placeholder="name@email.com" class="w-full px-4 py-2.5 rounded-xl border border-stone-200 text-sm focus:outline-none focus:border-[#F2994A] focus:ring-1 focus:ring-[#F2994A]" />
                    </div>
                    <div>
                        <label class="block text-xs font-bold uppercase text-gray-700 mb-1">Phone</label>
                        <input type="tel" required placeholder="+977 98XXXXXXXX" class="w-full px-4 py-2.5 rounded-xl border border-stone-200 text-sm focus:outline-none focus:border-[#F2994A] focus:ring-1 focus:ring-[#F2994A]" />
                    </div>
                </div>
                <div>
                    <label class="block text-xs font-bold uppercase text-gray-700 mb-1">Startup / Idea Name</label>
                    <input type="text" required placeholder="e.g., SolarClean Nepal" class="w-full px-4 py-2.5 rounded-xl border border-stone-200 text-sm focus:outline-none focus:border-[#F2994A] focus:ring-1 focus:ring-[#F2994A]" />
                </div>
                <div>
                    <label class="block text-xs font-bold uppercase text-gray-700 mb-1">Brief Description (1-2 sentences)</label>
                    <textarea rows="3" required placeholder="Tell us what problem you are solving..." class="w-full px-4 py-2.5 rounded-xl border border-stone-200 text-sm focus:outline-none focus:border-[#F2994A] focus:ring-1 focus:ring-[#F2994A]"></textarea>
                </div>
                <button type="submit" class="w-full py-3.5 rounded-full bg-[#F2994A] hover:bg-[#E07A1E] text-white font-black text-sm uppercase tracking-widest shadow-lg hover:shadow-xl transition-all">
                    Submit Application
                </button>
            </form>
            
            <div id="form-success" class="hidden text-center py-8 space-y-3">
                <div class="w-14 h-14 bg-emerald-100 text-emerald-600 rounded-full flex items-center justify-center mx-auto">
                    <i data-lucide="check" class="w-8 h-8"></i>
                </div>
                <h4 class="text-xl font-black font-condensed uppercase text-gray-900">Application Received!</h4>
                <p class="text-xs text-gray-600 max-w-xs mx-auto">Thank you for applying. We will review your submission and reach out within 3-5 business days.</p>
                <button onclick="closeApplyModal()" class="px-6 py-2 rounded-full bg-stone-900 text-white text-xs font-bold uppercase">Close</button>
            </div>
        </div>
    </div>

    <!-- ============================================== -->
    <!-- APPLICATION SCRIPT                             -->
    <!-- ============================================== -->
</body>
<?php wp_footer(); ?></body></html>



