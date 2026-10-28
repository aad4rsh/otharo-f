<?php
/**
 * The header for our theme
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Poppins:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Tailwind config -->
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

    <!-- Custom styles -->
    <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/styles.css">

    <!-- Locomotive Scroll -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/locomotive-scroll/bundled/locomotive-scroll.css">
</head>
<body <?php body_class(); ?> class="bg-[#FCFAF6] text-[#222222] font-sans antialiased overflow-x-hidden selection:bg-[#F2994A] selection:text-white">

    <!-- Navigation Bar -->
    <header class="fixed top-0 left-0 right-0 z-50 transition-all duration-300" id="main-nav">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-16 lg:h-20 flex items-center justify-between">

            <!-- Brand Logo -->
            <a href="<?php echo esc_url(home_url('/')); ?>" class="flex items-center gap-2 group">
                <?php 
                $logo = get_template_directory_uri() . '/assets/Otharo B_Y Logo 1.png';
                ?>
                <img src="<?php echo esc_url($logo); ?>" alt="<?php bloginfo('name'); ?> Logo" class="h-12 lg:h-[68px] w-auto" />
            </a>

            <!-- Actions: Apply Button + Mobile Toggle -->
            <div class="flex items-center gap-3">
                <a href="<?php echo esc_url(home_url('/apply/')); ?>" class="inline-flex items-center justify-center px-10 py-3 rounded-full bg-[#F2994A] text-white text-sm leading-none tracking-tight font-medium transition-all duration-300 hover:bg-[#E07A1E] hover:shadow-glow">
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
            <a href="<?php echo esc_url(home_url('/')); ?>" class="block text-stone-800 hover:text-[#F2994A] text-base font-semibold py-1">Home</a>
            <a href="<?php echo esc_url(home_url('/aboutus/')); ?>" class="block text-stone-800 hover:text-[#F2994A] text-base font-semibold py-1">About Us</a>
            <a href="<?php echo esc_url(home_url('/programs/')); ?>" class="block text-stone-800 hover:text-[#F2994A] text-base font-semibold py-1">Programs</a>
            <a href="<?php echo esc_url(home_url('/incubation/')); ?>" class="block text-stone-800 hover:text-[#F2994A] text-base font-semibold py-1">Incubation</a>
            <a href="<?php echo esc_url(home_url('/innovationKitchen/')); ?>" class="block text-stone-800 hover:text-[#F2994A] text-base font-semibold py-1">Innovation Kitchen</a>
            <a href="<?php echo esc_url(home_url('/cohort/')); ?>" class="block text-stone-800 hover:text-[#F2994A] text-base font-semibold py-1">Cohort</a>
            <div class="pt-2">
                <a href="<?php echo esc_url(home_url('/apply/')); ?>" class="block text-center w-full py-2.5 rounded-full bg-[#F2994A] text-white font-bold text-sm uppercase">Apply for Incubation</a>
            </div>
        </div>
    </header>
