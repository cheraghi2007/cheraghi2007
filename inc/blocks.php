<?php

/**
 * Container
 */
add_action('acf/init', 'containerBlock');
function containerBlock()
{

    // Check function exists.
    if (function_exists('acf_register_block_type')) {

        // Register Container block.
        acf_register_block_type(array(
            'name'                => 'container',
            'title'                => __('Container'),
            'description'        => __('Container block'),
            'category'            => 'formatting',
            'mode'                => 'preview',
            'icon'                => '',
            'supports'            => array(
                'align'         => true,
                'align_content' => true,
                'full_height'   => true,
                'mode'          => false,
                'jsx'           => true
            ),
            'render_template' => 'template-parts/blocks/block-container.php',
        ));
    }
}

/**
 * Row
 */
add_action('acf/init', 'mainRowBlock');
function mainRowBlock()
{

    // Check function exists.
    if (function_exists('acf_register_block_type')) {

        // Register Main Row block.
        acf_register_block_type(array(
            'name'                => 'mainrow',
            'title'                => __('Row'),
            'description'        => __('Row block'),
            'category'            => 'formatting',
            'mode'                => 'preview',
            'icon'                => '<svg width="24px" height="24px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M21.5897 8.97442C21.7949 8.25647 22 7.23083 22 6.41032C22 5.5898 21.7949 4.56416 21.5897 3.84621C21.4872 3.0257 20.7692 2.51288 20.0513 2.41032C18.5128 2.30775 14.6154 2.00006 11.9487 2.00006C9.28205 2.00006 5.38461 2.30775 3.84615 2.41032C3.02564 2.51288 2.41026 3.0257 2.30769 3.74365C2.10256 4.4616 2 5.48724 2 6.30775C2 7.12826 2.20513 8.15391 2.30769 8.87185C2.51282 9.5898 3.1282 10.2052 3.84615 10.2052C5.38461 10.3078 9.28205 10.6154 11.9487 10.6154C14.6154 10.6154 18.5128 10.3078 20.0513 10.2052C20.7692 10.3078 21.4872 9.79493 21.5897 8.97442Z" fill="#030D45"/>
            <path d="M20.0512 21.6923C20.8717 21.5898 21.4871 21.077 21.5896 20.359C21.7948 19.6411 21.8973 18.6154 21.8973 17.7949C21.8973 16.9744 21.7948 15.8462 21.5896 15.1282C21.3845 14.4103 20.7691 13.7949 20.0512 13.7949C18.5127 13.6923 14.6153 13.3847 11.9486 13.3847C9.28195 13.3847 5.38451 13.6923 3.84605 13.7949C3.02554 13.8975 2.41015 14.4103 2.30759 15.1282C2.10246 15.8462 1.9999 16.8718 1.9999 17.6923C1.9999 18.5129 2.20503 19.5385 2.30759 20.2564C2.51272 20.9744 3.1281 21.5898 3.84605 21.5898C5.38451 21.6923 9.28195 22 11.9486 22C14.6153 22 18.5127 21.7949 20.0512 21.6923Z" fill="#030D45"/>
            </svg>',
            'supports'            => array(
                'align'         => true,
                'align_content' => true,
                'full_height'   => true,
                'mode'          => false,
                'jsx'           => true
            ),
            'render_template' => 'template-parts/blocks/block-mainRow.php',
        ));
    }
}

/**
 * Heading With Animation
 */
add_action('acf/init', 'headingWithAnimationBlock');
function headingWithAnimationBlock()
{
    // Check function exists.
    if (function_exists('acf_register_block_type')) {

        // Register Heading With Animation
        acf_register_block_type(array(
            'name'              => 'headingWithAnimation',
            'title'             => __('Heading With Animation'),
            'description'       => __('Display Heading With Animation'),
            'render_template'   => 'template-parts/blocks/block-headingWithAnimation.php',
            'icon'              => '<svg width="24px" height="24px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M18 20V4h-3v6H9V4H6v16h3v-7h6v7z"/></svg>',
            'supports'            => array(
                'align'         => true,
                'align_content' => true,
                'full_height'   => false,
                'mode'          => false,
                'jsx'           => false
            ),
        ));
    }
}


/**
 * Paragraph With Animation
 */
add_action('acf/init', 'paragraphWithAnimationBlock');
function paragraphWithAnimationBlock()
{
    // Check function exists.
    if (function_exists('acf_register_block_type')) {

        // Register Paragraph With Animation
        acf_register_block_type(array(
            'name'              => 'paragraphWithAnimation',
            'title'             => __('Paragraph With Animation'),
            'description'       => __('Display Paragraph With Animation'),
            'render_template'   => 'template-parts/blocks/block-paragraphWithAnimation.php',
            'icon'              => '<svg width="24px" height="24px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M18 20V4h-3v6H9V4H6v16h3v-7h6v7z"/></svg>',
            'supports'            => array(
                'align'         => true,
                'align_content' => true,
                'full_height'   => false,
                'mode'          => false,
                'jsx'           => false
            ),
        ));
    }
}

/**
 * Why Agapi Boat Club?
 */

add_action('acf/init', 'whyAgapiBoatClubBlock');
function whyAgapiBoatClubBlock()
{
    // Check function exists.
    if (function_exists('acf_register_block_type')) {

        // Register Why Agapi Boat Club
        acf_register_block_type(array(
            'name'              => 'block_whyAgapiBoatClubBlock',
            'title'             => __('Why Agapi Boat Club'),
            'description'       => __('Display Why Agapi Boat Club'),
            'render_template'   => 'template-parts/blocks/block-why-Agapi-Boat-Club.php',
            'icon'              => '<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                 viewBox="0 0 504 504" style="enable-background:new 0 0 504 504;" xml:space="preserve">
            <circle style="fill:#FFD05B;" cx="252" cy="252" r="252"/>
            <polygon style="fill:#324A5E;" points="75.7,201.9 168.8,312.3 357.6,312.3 365,246.9 "/>
            <polygon style="fill:#FF7058;" points="168.1,162.7 134.7,211.1 270.5,232.2 "/>
            <g>
                <polygon style="fill:#2B3B4E;" points="365,232.8 357.6,312.3 383.2,312.3 396.5,238.6 	"/>
                <path style="fill:#2B3B4E;" d="M404.9,216.5l-41.6-6.6c-2.4-0.4-4.7,1.3-5.1,3.7l-2.3,14.5c-0.4,2.4,1.3,4.7,3.7,5.1l41.6,6.6
                    c2.4,0.4,4.7-1.3,5.1-3.7l2.3-14.5C409,219.2,407.3,216.9,404.9,216.5z"/>
            </g>
            <path style="fill:#4CDBC4;" d="M373,291.9c-16.1,0-30.5,7.6-37.5,19.4c-7-11.8-21.4-19.4-37.5-19.4s-30.5,7.6-37.5,19.4
                c-7-11.8-21.4-19.4-37.5-19.4c-15.9,0-30.2,7.5-37.3,19.2c-7.1-11.6-21.4-19.2-37.3-19.2c-23.1,0-41.9,15.8-41.9,35.2
                c0,3.8,0.8,7.6,2.3,11.3l2.3,5.7l2.3-5.7c5.2-12.8,19.3-21.4,35.1-21.4c15.3,0,28.9,7.9,34.5,20.1l0.1,0.4c0.1,0.3,0.2,0.6,0.3,0.9
                l2.4,5.8l2.3-5.8c0.1-0.3,0.2-0.6,0.3-0.9l0.1-0.3c5.6-12.3,19.2-20.2,34.5-20.2c15.8,0,29.9,8.6,35.1,21.4l2.5,5.7l2.3-5.7
                c5.2-12.8,19.3-21.4,35.1-21.4c15.8,0,29.9,8.6,35.1,21.4l2.5,5.7l2.3-5.7c5.2-12.8,19.3-21.4,35.1-21.4c15.8,0,29.9,8.6,35.1,21.4
                l2.3,5.7l2.3-5.7c1.5-3.7,2.3-7.5,2.3-11.3C414.9,307.7,396.1,291.9,373,291.9z"/>
            </svg>
            ',
        ));
    }
}


/**
 * Gallery
 */

add_action('acf/init', 'galleryBlock');
function galleryBlock()
{
    // Check function exists.
    if (function_exists('acf_register_block_type')) {

        // Register Gallery
        acf_register_block_type(array(
            'name'              => 'galleryBlock',
            'title'             => __('Gallery'),
            'description'       => __('Display Gallery'),
            'render_template'   => 'template-parts/blocks/galleryBlock.php',
            'icon'              => '<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                 viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
            <path style="fill:#0091EA;" d="M17.067,123.733v194.304l139.435-123.904c3.157-2.816,8.107-2.816,11.264,0l147.2,130.816
                l54.101-61.781c3.243-3.669,9.557-3.669,12.8,0l44.8,51.2V123.733H17.067z M307.2,243.2c-18.859,0-34.133-15.275-34.133-34.133
                s15.275-34.133,34.133-34.133c18.859,0,34.133,15.275,34.133,34.133S326.059,243.2,307.2,243.2z"/>
            <path style="fill:#4CAF50;" d="M426.667,340.309v116.224h-409.6V340.907l145.067-128.939l147.968,131.499
                c1.621,1.451,3.925,2.133,6.144,2.133c2.304-0.171,4.437-1.195,5.888-2.901l53.333-60.928L426.667,340.309z"/>
            <path d="M494.933,38.4h-409.6c-9.387,0-17.067,7.68-17.067,17.067v17.067H51.2c-9.387,0-17.067,7.68-17.067,17.067v17.067H17.067
                C7.68,106.667,0,114.347,0,123.733v332.8C0,465.92,7.68,473.6,17.067,473.6h409.6c9.387,0,17.067-7.68,17.067-17.067v-17.067H460.8
                c9.387,0,17.067-7.68,17.067-17.067v-17.067h17.067c9.387,0,17.067-7.68,17.067-17.067v-332.8C512,46.08,504.32,38.4,494.933,38.4z
                 M426.667,456.533h-409.6V340.907l145.067-128.939l147.968,131.499c1.621,1.451,3.925,2.133,6.144,2.133
                c2.304-0.171,4.437-1.195,5.888-2.901l53.333-60.928l51.2,58.539V456.533z M426.667,314.368l-44.8-51.2
                c-3.243-3.669-9.557-3.669-12.8,0l-54.101,61.781l-147.2-130.816c-3.157-2.816-8.107-2.816-11.264,0L17.067,318.037V123.733h409.6
                V314.368z M460.8,422.4h-17.067V123.733c0-9.387-7.68-17.067-17.067-17.067H51.2V89.6h409.6V422.4z M494.933,388.267h-17.067V89.6
                c0-9.387-7.68-17.067-17.067-17.067H85.333V55.467h409.6V388.267z"/>
            <g>
                <path style="fill:#2979FF;" d="M494.933,55.467v332.8h-17.067V89.6c0-9.387-7.68-17.067-17.067-17.067H85.333V55.467H494.933z"/>
                <path style="fill:#2979FF;" d="M460.8,89.6v332.8h-17.067V123.733c0-9.387-7.68-17.067-17.067-17.067H51.2V89.6H460.8z"/>
            </g>
            <path d="M307.2,174.933c-18.859,0-34.133,15.275-34.133,34.133S288.341,243.2,307.2,243.2c18.859,0,34.133-15.275,34.133-34.133
                S326.059,174.933,307.2,174.933z M307.2,226.133c-9.387,0-17.067-7.68-17.067-17.067S297.813,192,307.2,192
                s17.067,7.68,17.067,17.067S316.587,226.133,307.2,226.133z"/>
            <circle style="fill:#FFC107;" cx="307.2" cy="209.067" r="17.067"/>
            <polygon style="fill:#2979FF;" points="401.067,123.733 401.067,285.107 426.667,314.368 426.667,123.733 "/>
            <polygon style="fill:#388E3C;" points="401.067,311.04 401.067,456.533 426.667,456.533 426.667,340.309 "/>
            </svg>
            ',
        ));
    }
}


/**
 * Club Glance
 */

add_action('acf/init', 'clubGlanceBlock');
function clubGlanceBlock()
{
    // Check function exists.
    if (function_exists('acf_register_block_type')) {

        // Register Club Glance
        acf_register_block_type(array(
            'name'              => 'clubGlanceBlock',
            'title'             => __('Club Glance'),
            'description'       => __('Display Club Glance'),
            'render_template'   => 'template-parts/blocks/clubGlance.php',
            'icon'              => '<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                 viewBox="0 0 476 476" style="enable-background:new 0 0 476 476;" xml:space="preserve">
            <g>
                <polygon style="fill:#EFEFEF;" points="279,94.99 279,299.995 426.001,299.995 	"/>
                <polygon style="fill:#EFEFEF;" points="84.272,299.995 199,299.995 199,139.99 	"/>
                <path style="fill:#3E81C8;" d="M53.996,335.995l6.338,41.221l4.216,1.705c5.134,2.077,8.854,5.635,12.45,9.074
                    c5.651,5.408,11.496,11,23.01,11c11.505,0,17.35-5.592,23.004-11.003c5.646-5.406,11.482-10.997,22.996-10.997
                    c11.494,0,17.08,5.34,23,11c5.651,5.408,11.496,11,23,11c11.505,0,17.35-5.592,23.004-11.003
                    c5.646-5.406,11.482-10.997,22.986-10.997c11.513,0,17.351,5.591,23,11c5.651,5.408,11.496,11,23,11s17.349-5.592,23.007-11.006
                    c5.913-5.654,11.499-10.994,22.993-10.994s17.08,5.34,23.001,11.001c5.354,5.121,10.89,10.415,21.248,10.948l1.295,0.067
                    l1.249-0.346c24.993-6.914,43.309-27.967,46.659-53.635l1.18-9.036H53.996V335.995z"/>
                <path style="fill:#F8A805;" d="M236.192,41.449c-8.238-7.027-16.999-10.444-26.782-10.444c-13.495,0-26.573,6.313-40.415,12.994
                    c-6.751,3.256-13.732,6.622-20.688,9.1c-7.344,2.615-13.796,3.886-19.727,3.886c-6.431,0-12.276-1.422-17.873-4.349L99,46.514
                    v42.628l2.803,2.395c8.229,7.03,16.987,10.448,26.777,10.448h0.01c13.506,0,26.574-6.313,40.48-13.03
                    c13.223-6.367,26.895-12.95,40.34-12.95c6.429,0,12.279,1.423,17.887,4.352L239,86.468V43.844L236.192,41.449z"/>
                <g>
                    <path d="M432.21,294.925L285.5,90.335c-2.03-2.83-5.64-4.02-8.95-2.96c-3.31,1.07-5.55,4.14-5.55,7.62v205c0,4.42,3.58,8,8,8h147
                        c0,0,0.01,0,0.02,0c4.42,0,8-3.58,8-8C434.02,298.075,433.34,296.305,432.21,294.925z M376.74,291.995
                        c-0.24-0.91-0.63-1.8-1.21-2.62l-46-65c-2.55-3.61-7.55-4.46-11.15-1.91c-3.61,2.55-4.46,7.54-1.91,11.15l41.31,58.38H287v-172.12
                        l123.42,172.12H376.74z"/>
                    <path d="M201.45,132.375c-3.31-1.06-6.93,0.13-8.95,2.96l-114.74,160c-1.74,2.44-1.98,5.65-0.61,8.31
                        c1.37,2.67,4.12,4.35,7.12,4.35H199c4.42,0,8-3.58,8-8v-160C207,136.515,204.75,133.445,201.45,132.375z M191,291.995H99.85
                        l12.23-17.06c0.3,0.04,0.61,0.06,0.92,0.06h61c4.42,0,8-3.58,8-8s-3.58-8-8-8h-50.49l67.49-94.12V291.995z"/>
                    <path d="M468,390.995c-8.29,0-12.14-3.68-17.47-8.78c-5.83-5.57-13.01-12.43-26.23-13.15c4.92-9.76,7.7-20.77,7.7-32.42v-0.65
                        c0-4.42-3.58-8-8-8H247v-284c0-1.39-0.36-2.7-0.99-3.84c-0.01-0.02-0.02-0.03-0.02-0.05c-0.12-0.21-0.25-0.42-0.38-0.62
                        c-0.05-0.07-0.11-0.13-0.16-0.2c-0.1-0.14-0.2-0.28-0.32-0.42c-0.06-0.08-0.14-0.16-0.21-0.23c-0.11-0.12-0.21-0.24-0.32-0.35
                        c-0.02-0.01-0.03-0.03-0.05-0.05c-10.63-10.25-22.12-15.23-35.14-15.23c-15.3,0-29.83,7.01-43.89,13.78
                        c-13.01,6.28-25.29,12.2-36.94,12.2c-4.39,0-8.5-0.85-12.46-2.63c-3.95-1.77-7.77-4.46-11.57-8.12c-2.31-2.23-5.73-2.86-8.68-1.6
                        c-2.95,1.25-4.87,4.15-4.87,7.36v45c0,2.17,0.88,4.25,2.44,5.76c10.63,10.25,22.13,15.23,35.14,15.23c0,0,0,0,0.01,0
                        c15.29,0,29.83-7.01,43.88-13.78c13.01-6.28,25.3-12.2,36.94-12.2c7.85,0,14.78,2.73,21.59,8.54v235.45H54
                        c-2.34,0-4.55,1.02-6.07,2.79c-1.52,1.77-2.19,4.12-1.84,6.43l4.91,31.9c-12.77,0.92-19.81,7.63-25.53,13.1
                        c-5.33,5.1-9.18,8.78-17.47,8.78c-4.42,0-8,3.58-8,8s3.58,8,8,8c14.71,0,22.37-7.33,28.53-13.22c5.33-5.1,9.18-8.78,17.47-8.78
                        s12.15,3.68,17.48,8.78c6.15,5.89,13.82,13.22,28.53,13.22s22.37-7.33,28.53-13.22c5.33-5.1,9.18-8.78,17.47-8.78
                        s12.14,3.68,17.47,8.78c6.15,5.89,13.82,13.22,28.53,13.22s22.37-7.33,28.53-13.22c5.32-5.1,9.18-8.78,17.46-8.78
                        c8.29,0,12.14,3.68,17.47,8.78c6.16,5.89,13.82,13.22,28.53,13.22s22.37-7.33,28.53-13.22c5.33-5.1,9.18-8.78,17.47-8.78
                        s12.14,3.68,17.47,8.78c6.16,5.89,13.82,13.22,28.53,13.22s22.37-7.33,28.53-13.22c5.33-5.1,9.18-8.78,17.47-8.78
                        s12.14,3.68,17.47,8.78c6.16,5.89,13.82,13.22,28.53,13.22c4.42,0,8-3.58,8-8S472.42,390.995,468,390.995z M209.41,68.005
                        c-15.3,0-29.83,7.01-43.89,13.78c-13,6.28-25.29,12.2-36.93,12.2h-0.01c-7.85,0-14.78-2.72-21.58-8.53v-25.73
                        c6.75,3.53,13.9,5.26,21.58,5.26c7.65,0,15.11-1.75,22.41-4.35s14.45-6.04,21.48-9.43c13.01-6.28,25.3-12.2,36.94-12.2
                        c7.85,0,14.78,2.72,21.59,8.53v25.73C224.24,69.735,217.09,68.005,209.41,68.005z M374.66,390.955
                        c-7.38-0.38-11.1-3.93-16.13-8.74c-6.16-5.89-13.82-13.22-28.53-13.22s-22.37,7.33-28.53,13.22c-5.33,5.1-9.18,8.78-17.47,8.78
                        s-12.14-3.68-17.47-8.78c-6.15-5.89-13.82-13.22-28.53-13.22c-14.7,0-22.37,7.33-28.52,13.22c-5.33,5.1-9.18,8.78-17.47,8.78
                        s-12.14-3.68-17.47-8.78c-6.16-5.89-13.82-13.22-28.53-13.22s-22.38,7.33-28.53,13.22c-5.33,5.1-9.18,8.78-17.47,8.78
                        s-12.15-3.68-17.48-8.78c-3.91-3.74-8.43-8.06-14.98-10.71l-4.23-27.51h352.2C412.57,366.585,396.17,385.005,374.66,390.955z"/>
                    <path d="M376,436.995c-8.289,0-12.14-3.683-17.469-8.781c-6.157-5.89-13.819-13.219-28.529-13.219s-22.373,7.33-28.53,13.219
                        c-5.33,5.098-9.18,8.781-17.47,8.781c-8.289,0-12.14-3.683-17.469-8.781c-6.157-5.89-13.819-13.219-28.528-13.219
                        c-4.418,0-8,3.582-8,8c0,4.419,3.582,8,8,8c8.289,0,12.14,3.683,17.469,8.781c6.157,5.89,13.819,13.219,28.528,13.219
                        c14.71,0,22.373-7.33,28.53-13.219c5.33-5.098,9.18-8.781,17.47-8.781s12.14,3.683,17.469,8.781
                        c6.157,5.89,13.819,13.219,28.529,13.219c4.419,0,8-3.581,8-8C384,440.577,380.418,436.995,376,436.995z"/>
                </g>
            </g>
            </svg>
            ',
        ));
    }
}


/**
 * How to become an Agapi Boat Club member
 */

add_action('acf/init', 'becomeClubMember');
function becomeClubMember()
{
    // Check function exists.
    if (function_exists('acf_register_block_type')) {

        // Register How to become an Agapi Boat Club member
        acf_register_block_type(array(
            'name'              => 'becomeClubMemberBlock',
            'title'             => __('Become Club Member'),
            'description'       => __('Display Become Club Member'),
            'render_template'   => 'template-parts/blocks/becomeClubMember.php',
            'icon'              => '<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                 viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
            <circle style="fill:#006775;" cx="255.917" cy="255.999" r="255.917"/>
            <path style="fill:#055661;" d="M511.506,241.335c0.329,4.779,0.494,9.723,0.494,14.666c0,141.389-114.528,255.917-255.917,255.917
                c-4.944,0-9.887-0.165-14.666-0.494L121.615,391.622l270.583-269.76l119.473,119.473L511.506,241.335L511.506,241.335z"/>
            <path style="fill:#00CC96;" d="M128.865,117.579h254.269c6.28,0,11.37,5.091,11.37,11.37v254.269c0,6.28-5.091,11.37-11.37,11.37
                H128.865c-6.28,0-11.37-5.091-11.37-11.37V128.949C117.494,122.669,122.585,117.579,128.865,117.579z"/>
            <rect x="124.577" y="158.449" style="fill:#EFEFF0;" width="262.842" height="229.061"/>
            <g>
                <path style="fill:#FFFFFF;" d="M213.237,130.762h155.232c1.274,0,2.307,1.033,2.307,2.307v6.592c0,1.274-1.033,2.307-2.307,2.307
                    H213.237c-1.274,0-2.307-1.033-2.307-2.307v-6.592C210.93,131.795,211.963,130.762,213.237,130.762z"/>
                <path style="fill:#FFFFFF;" d="M143.861,128.125c4.45,0,8.075,3.625,8.075,8.075s-3.625,8.075-8.075,8.075
                    c-4.45,0-8.075-3.625-8.075-8.075S139.412,128.125,143.861,128.125z M186.377,128.125c4.45,0,8.075,3.625,8.075,8.075
                    s-3.625,8.075-8.075,8.075c-4.45,0-8.075-3.625-8.075-8.075S181.927,128.125,186.377,128.125z M165.119,128.125
                    c4.45,0,8.075,3.625,8.075,8.075s-3.625,8.075-8.075,8.075c-4.45,0-8.075-3.625-8.075-8.075S160.67,128.125,165.119,128.125z"/>
            </g>
            <path style="fill:#E31E24;" d="M265.146,314.337c8.075,0,16.808-1.977,22.412-4.614l4.285-2.142
                c10.876-5.768,17.797-13.348,23.235-24.224c2.637-5.438,3.79-9.558,4.944-15.655c2.472-14.831-2.307-29.991-11.041-41.692
                c-2.307-3.131-4.285-4.614-6.427-6.756c-8.733-8.239-21.752-14.007-33.947-14.007c-13.348,0-19.939,1.483-30.816,7.745
                c-6.427,3.79-13.183,10.052-17.303,16.479c-3.79,5.768-6.427,12.194-7.91,18.951c-2.307,11.37-1.154,23.235,3.625,33.453
                c0.329,0.823,0.659,1.319,0.989,1.977c0.329,0.823,0.824,1.319,1.154,2.142c3.79,7.25,13.018,16.973,20.104,20.599
                c5.438,2.637,6.921,4.285,14.666,5.933c3.131,0.659,8.239,1.648,12.029,1.648L265.146,314.337L265.146,314.337z"/>
            <path style="fill:#E84F4F;" d="M204.998,188.273c-7.25,0-10.217,8.075-10.712,14.502c-0.824,11.7-2.966,7.745-13.018,12.689
                c-1.977,0.989-3.625,1.813-5.108,3.46c-4.285,4.779-2.142,11.7-0.165,16.973c2.802,7.25,1.154,7.086-3.296,11.7
                c-6.756,7.086-9.723,12.854-2.966,21.093c6.097,7.581,9.393,5.438,6.427,14.502c-1.977,5.933-5.273,14.172,1.813,18.951
                l-32.628,32.793l35.595,0.165v35.428c1.977-1.319,29.826-29.497,34.605-34.276c1.483-1.483,3.296-4.12,5.273-4.614
                c1.483,0.989,2.307,2.472,3.46,4.285c2.637,4.285,6.097,10.712,12.854,10.712c6.592,0,13.677-7.745,17.468-7.745
                c5.933,0,16.643,15.985,27.19,1.977c1.319-1.648,1.977-2.802,3.131-4.614c0.989-1.813,1.977-3.625,3.625-4.614
                c1.319,0.329,3.296,2.637,5.273,4.614l19.61,19.775c0.659,0.659,1.648,1.319,2.471,2.142l7.416,7.581
                c1.813,1.648,3.131,3.46,5.108,4.779v-35.43h35.1c-0.659-2.307-9.558-9.887-12.029-12.36l-16.149-16.314
                c-1.483-1.154-2.802-2.802-3.79-4.285c9.393-6.262,0.494-19.28,0.494-23.895c0-4.45,11.535-8.239,11.535-19.28
                c0-6.097-6.756-10.052-9.723-13.843c-4.779-6.262,1.977-8.733,1.977-19.939c0-10.546-16.808-11.37-19.116-14.666
                c-2.142-3.296-0.494-14.337-5.933-19.28c-6.592-6.097-18.456,0-22.247-2.966c-4.285-3.46-6.592-13.677-14.337-14.666h-2.637
                c-2.307,0.329-4.944,1.319-8.239,3.296c-2.966,1.813-5.768,3.954-8.733,3.954c-3.131,0-9.723-6.592-16.314-7.25h-2.142
                c-1.319,0.165-2.472,0.494-3.625,1.319c-5.768,3.625-6.592,9.064-10.546,13.018c-1.648,1.648-1.813,1.154-4.779,1.154
                c-4.12,0-7.086-0.494-11.535-0.494L204.998,188.273z"/>
            <path style="fill:#FFD630;" d="M253.281,331.31c10.547,0,22.082-2.472,29.332-5.933l5.602-2.802
                c14.172-7.581,23.235-17.468,30.486-31.805c3.625-7.086,5.108-12.524,6.427-20.434c3.296-19.445-2.966-39.384-14.337-54.71
                c-2.966-3.954-5.602-6.097-8.569-8.898c-11.535-10.712-28.343-18.291-44.328-18.291c-17.468,0-26.201,1.977-40.373,10.052
                c-8.569,4.944-17.139,13.183-22.741,21.587c-4.944,7.581-8.569,15.985-10.381,24.883c-3.131,14.831-1.483,30.486,4.779,43.834
                c0.494,0.989,0.824,1.813,1.154,2.637c0.494,0.989,0.989,1.813,1.648,2.966c4.944,9.558,17.139,22.412,26.366,26.861
                c7.086,3.46,9.064,5.602,19.116,7.745c4.12,0.823,10.876,2.142,15.82,2.142L253.281,331.31L253.281,331.31z"/>
            <path style="fill:#00CC96;" d="M253.446,317.139c8.404,0,17.633-1.977,23.4-4.779l4.45-2.307
                c11.37-6.097,18.621-14.007,24.389-25.378c2.802-5.602,4.12-10.052,5.108-16.314c2.637-15.491-2.307-31.474-11.535-43.834
                c-2.472-3.131-4.45-4.779-6.756-7.086c-9.229-8.569-22.741-14.666-35.595-14.666c-14.007,0-20.928,1.648-32.299,8.075
                c-6.756,3.954-13.843,10.546-18.127,17.303c-3.954,6.097-6.756,12.689-8.239,19.939c-2.472,11.865-1.154,24.389,3.79,35.1
                c0.329,0.824,0.659,1.483,0.989,2.142c0.494,0.824,0.824,1.319,1.318,2.307c3.955,7.581,13.677,17.797,21.093,21.587
                c5.602,2.802,7.25,4.45,15.325,6.097c3.296,0.659,8.733,1.813,12.524,1.813h0.165V317.139z"/>
            <path style="fill:#FBFBFB;" d="M254.435,221.396l9.558,29.497h30.98l-25.048,18.127l9.558,29.497l-25.048-18.291l-25.048,18.291
                l9.558-29.497l-25.048-18.127h30.98L254.435,221.396z"/>
            <path style="fill:#D9DADA;" d="M254.435,221.396l9.558,29.497h30.98l-25.048,18.127l9.558,29.497l-25.048-18.291v-58.665v-0.165
                H254.435z"/>
            </svg>
            ',
        ));
    }
}


/**
 * Smart Facts
 */

add_action('acf/init', 'smartFacts');
function smartFacts()
{
    // Check function exists.
    if (function_exists('acf_register_block_type')) {

        // Register Smart Facts
        acf_register_block_type(array(
            'name'              => 'smartFactsBlock',
            'title'             => __('Smart Facts'),
            'description'       => __('Display Smart Facts'),
            'render_template'   => 'template-parts/blocks/smartFacts.php',
            'icon'              => '<svg width="1024px" height="1024px" viewBox="0 0 1024 1024" xmlns="http://www.w3.org/2000/svg" class="icon">
              <path d="M872 394c4.4 0 8-3.6 8-8v-60c0-4.4-3.6-8-8-8H708V152c0-4.4-3.6-8-8-8h-64c-4.4 0-8 3.6-8 8v166H400V152c0-4.4-3.6-8-8-8h-64c-4.4 0-8 3.6-8 8v166H152c-4.4 0-8 3.6-8 8v60c0 4.4 3.6 8 8 8h168v236H152c-4.4 0-8 3.6-8 8v60c0 4.4 3.6 8 8 8h168v166c0 4.4 3.6 8 8 8h64c4.4 0 8-3.6 8-8V706h228v166c0 4.4 3.6 8 8 8h64c4.4 0 8-3.6 8-8V706h164c4.4 0 8-3.6 8-8v-60c0-4.4-3.6-8-8-8H708V394h164zM628 630H400V394h228v236z"/>
            </svg>',
        ));
    }
}


/**
 * Main Wrapper
 */

add_action('acf/init', 'mainWrapper');
function mainWrapper()
{
    // Check function exists.
    if (function_exists('acf_register_block_type')) {

        // Register Main Wrapper
        acf_register_block_type(array(
            'name'              => 'mainWrapperBlock',
            'title'             => __('Main Wrapper'),
            'description'       => __('Display Main Wrapper'),
            'render_template'   => 'template-parts/blocks/mainWrapper.php',
            'icon'              => '',
        ));
    }
}



/**
 * FAQ Block
 */

add_action('acf/init', 'acf_faq_block');
function acf_faq_block()
{

    // Check function exists.
    if (function_exists('acf_register_block_type')) {

        // Register FAQ
        acf_register_block_type(array(
            'name'              => 'faq_block',
            'title'             => __('FAQ Block'),
            'description'       => __('Display FAQ'),
            'render_template'   => 'template-parts/blocks/faq.php',
            //'category'          => 'formatting',
            'icon'              => '<svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" width="48" height="48" role="img" aria-hidden="true" focusable="false"><path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zM5 4.5h14c.3 0 .5.2.5.5v8.4l-3-2.9c-.3-.3-.8-.3-1 0L11.9 14 9 12c-.3-.2-.6-.2-.8 0l-3.6 2.6V5c-.1-.3.1-.5.4-.5zm14 15H5c-.3 0-.5-.2-.5-.5v-2.4l4.1-3 3 1.9c.3.2.7.2.9-.1L16 12l3.5 3.4V19c0 .3-.2.5-.5.5z"></path></svg>',
            //'keywords'          => array( 'testimonial', 'quote' ),
        ));
    }
}


/**
 * Main Title
 */

add_action('acf/init', 'mainTitleBlock');
function mainTitleBlock()
{

    // Check function exists.
    if (function_exists('acf_register_block_type')) {

        // Register Main Title
        acf_register_block_type(array(
            'name'              => 'mainTitle',
            'title'             => __('Main Title Block'),
            'description'       => __('Display Main Title'),
            'render_template'   => 'template-parts/blocks/mainTitle.php',
            'icon'              => '',
        ));
    }
}


/**
 * Container Paragraph
 */

add_action('acf/init', 'containerParagraphBlock');
function containerParagraphBlock()
{

    // Check function exists.
    if (function_exists('acf_register_block_type')) {

        // Register Container Paragraph
        acf_register_block_type(array(
            'name'              => 'containerParagraph',
            'title'             => __('Container Paragraph Block'),
            'description'       => __('Display Container Paragraph'),
            'render_template'   => 'template-parts/blocks/block-containerParagraph.php',
            'icon'              => '',
        ));
    }
}


/**
 * Boat Category
 */

add_action('acf/init', 'boatCategoryBlock');
function boatCategoryBlock()
{

    // Check function exists.
    if (function_exists('acf_register_block_type')) {

        // Register Boat Category
        acf_register_block_type(array(
            'name'              => 'boatCategory',
            'title'             => __('Boat Category Block'),
            'description'       => __('Display Boat Category'),
            'render_template'   => 'template-parts/blocks/block-boatCategory.php',
            'icon'              => '',
        ));
    }
}



/**
 * Boat in Category
 */

add_action('acf/init', 'boatInCategoryBlock');
function boatInCategoryBlock()
{

    // Check function exists.
    if (function_exists('acf_register_block_type')) {

        // Register Boat in Category
        acf_register_block_type(array(
            'name'              => 'boatInCategory',
            'title'             => __('Boat In Category Block'),
            'description'       => __('Display Boat In Category'),
            'render_template'   => 'template-parts/blocks/block-boatInCategory.php',
            'icon'              => '',
        ));
    }
}


/**
 * Location Relation
 */

add_action('acf/init', 'locationRelationBlock');
function locationRelationBlock()
{

    // Check function exists.
    if (function_exists('acf_register_block_type')) {

        // Register Location Relation
        acf_register_block_type(array(
            'name'              => 'locationRelation',
            'title'             => __('Location Relation Block'),
            'description'       => __('Display Location Relation'),
            'render_template'   => 'template-parts/blocks/block-locationRelation.php',
            'icon'              => '',
        ));
    }
}



/**
 * Our Locations
 */

add_action('acf/init', 'ourLocationsBlock');
function ourLocationsBlock()
{

    // Check function exists.
    if (function_exists('acf_register_block_type')) {

        // Register Our Locations
        acf_register_block_type(array(
            'name'              => 'ourLocations',
            'title'             => __('Our Locations Block'),
            'description'       => __('Display Our Locations'),
            'render_template'   => 'template-parts/blocks/block-ourLocations.php',
            'icon'              => '',
        ));
    }
}


/**
 * Boats Relation
 */

add_action('acf/init', 'boatsRelationBlock');
function boatsRelationBlock()
{

    // Check function exists.
    if (function_exists('acf_register_block_type')) {

        // Register Boats Relation
        acf_register_block_type(array(
            'name'              => 'boatsRelation',
            'title'             => __('Boats Relation Block'),
            'description'       => __('Display Boats Relation'),
            'render_template'   => 'template-parts/blocks/block-boatsRelation.php',
            'icon'              => '',
        ));
    }
}



/**
 * Button
 */

add_action('acf/init', 'buttonBlock');
function buttonBlock()
{

    // Check function exists.
    if (function_exists('acf_register_block_type')) {

        // Register Button
        acf_register_block_type(array(
            'name'              => 'button',
            'title'             => __('Button Block'),
            'description'       => __('Display Button'),
            'render_template'   => 'template-parts/blocks/block-button.php',
            'icon'              => '',
        ));
    }
}


/**
 * Related
 */

add_action('acf/init', 'relatedBlock');
function relatedBlock()
{

    // Check function exists.
    if (function_exists('acf_register_block_type')) {

        // Register Related
        acf_register_block_type(array(
            'name'              => 'relatedBlock',
            'title'             => __('Related Block'),
            'description'       => __('Display Related'),
            'render_template'   => 'template-parts/blocks/block-relatedBlock.php',
            'icon'              => '',
        ));
    }
}

/**
 * Authur
 */

add_action('acf/init', 'authurBlock');
function authurBlock()
{

    // Check function exists.
    if (function_exists('acf_register_block_type')) {

        // Register Authur
        acf_register_block_type(array(
            'name'              => 'authurBlock',
            'title'             => __('Authur Block'),
            'description'       => __('Display Authur'),
            'render_template'   => 'template-parts/blocks/block-authurBlock.php',
            'icon'              => '',
        ));
    }
}


/**
 * Social
 */

add_action('acf/init', 'socialBlock');
function socialBlock()
{

    // Check function exists.
    if (function_exists('acf_register_block_type')) {

        // Register Social
        acf_register_block_type(array(
            'name'              => 'socialBlock',
            'title'             => __('Social Block'),
            'description'       => __('Display Social'),
            'render_template'   => 'template-parts/blocks/block-socialBlock.php',
            'icon'              => '',
        ));
    }
}



/**
 * Fancy box image
 */

add_action('acf/init', 'fancyBoxImage');
function fancyBoxImage()
{

    // Check function exists.
    if (function_exists('acf_register_block_type')) {

        // Register block
        acf_register_block_type(array(
            'name'              => 'fancy box image',
            'title'             => __('Fancy Box Image Block'),
            'description'       => __('Upload Fancy Box Image'),
            'render_template'   => 'template-parts/blocks/block-fancybox-image.php',
            'icon'              => '',
        ));
    }
}

/**
 * Post Gallery
 */

add_action('acf/init', 'postGalleryBlock');
function postGalleryBlock()
{
    // Check function exists.
    if (function_exists('acf_register_block_type')) {

        // Register Post Gallery
        acf_register_block_type(array(
            'name'              => 'postGalleryBlock',
            'title'             => __('Post Gallery'),
            'description'       => __('Display Post Gallery'),
            'render_template'   => 'template-parts/blocks/block-postGalleryBlock.php',
            'icon'              => '',
        ));
    }
}