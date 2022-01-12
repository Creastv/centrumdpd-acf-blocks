<?php
add_filter( 'block_categories_all', 'inb_custome_blocks_cat', 10, 2 );

// Register Blocks
add_action('acf/init', 'inb_blocks');
function inb_blocks() {

    // check function exists.
    if( function_exists('acf_register_block_type') ) {

        // register a testimonial block.
        acf_register_block_type(array(
            'name'            => 'inb-full-section',
            'mode'				    => 'preview',
            'title'           => __('Full width section with image/icon'),
            'category'        => 'inb-category',
            'render_template' => plugin_dir_path(__FILE__) . 'acf-templates/inb-full-section.php',
            'icon'            => '<svg xml:space="preserve" viewBox="0 0 38 38"><path fill="#3b95d2" d="M28.1 14c0-2.3-1.7-4.1-4.1-4.2H14c-1.5 0-2.8.7-3.5 2.1-1.4 2.5-.2 5.3 2.7 6.1.6.2.6.3.2.7-.8.7-1.5 1.5-2.3 2.3-.9.9-1.4 2-1.2 3.3.2 1.7 1.1 2.9 2.7 3.5 1.7.6 3.2.2 4.4-1.1.7-.7 1.4-1.4 2.2-2.1.2-.2.3-.4.6-.4.3.1.2.4.3.6.5 2.2 2.4 3.4 4.7 3.1 1.9-.2 3.4-2 3.4-4.1v-4.9c-.1-1.6-.1-3.2-.1-4.9zm-2.5 9.8c0 1.1-.6 1.7-1.5 1.7-1 0-1.7-.6-1.7-1.6-.1-1.6 0-3.2 0-4.8 0-.3.1-.6-.1-.8-.3 0-.5.3-.7.5l-6.3 6.3c-.5.5-1 .7-1.7.5-.6-.2-1-.6-1.1-1.3-.2-.7.2-1.2.7-1.7l6.2-6.2c.2-.2.5-.3.5-.8h-5.6c-1.1 0-1.7-.6-1.7-1.5 0-1 .7-1.8 1.7-1.8h9.8c1.1 0 1.7.7 1.7 1.7-.2 3.3-.2 6.6-.2 9.8z" class="st0"/><path fill="#3b95d2" d="M19 38C8.5 38 0 29.4 0 19S8.5 0 19 0s19 8.5 19 19-8.5 19-19 19zm0-35.8C9.7 2.2 2.2 9.7 2.2 19S9.7 35.8 19 35.8 35.8 28.2 35.8 19 28.3 2.2 19 2.2z" class="st0"/></svg>',
             'mode'	=> 'edit',
            'supports'		=> array(
              'align' => false,
              'mode'  => false,
              'jsx'   => true
            ),
            'enqueue_assets'  => function(){
              wp_enqueue_style( 'inb-blocks-css', plugin_dir_url( __FILE__ ) . 'css/acf-blocks.min.css' );
            },
        ));
        acf_register_block_type(array(
            'name'            => 'inb-title',
            'mode'				    => 'preview',
            'title'           => __('Title'),
            'category'        => 'inb-category',
            'render_template' => plugin_dir_path(__FILE__) . 'acf-templates/inb-title.php',
            'icon'            => '<svg xml:space="preserve" viewBox="0 0 38 38"><path fill="#3b95d2" d="M28.1 14c0-2.3-1.7-4.1-4.1-4.2H14c-1.5 0-2.8.7-3.5 2.1-1.4 2.5-.2 5.3 2.7 6.1.6.2.6.3.2.7-.8.7-1.5 1.5-2.3 2.3-.9.9-1.4 2-1.2 3.3.2 1.7 1.1 2.9 2.7 3.5 1.7.6 3.2.2 4.4-1.1.7-.7 1.4-1.4 2.2-2.1.2-.2.3-.4.6-.4.3.1.2.4.3.6.5 2.2 2.4 3.4 4.7 3.1 1.9-.2 3.4-2 3.4-4.1v-4.9c-.1-1.6-.1-3.2-.1-4.9zm-2.5 9.8c0 1.1-.6 1.7-1.5 1.7-1 0-1.7-.6-1.7-1.6-.1-1.6 0-3.2 0-4.8 0-.3.1-.6-.1-.8-.3 0-.5.3-.7.5l-6.3 6.3c-.5.5-1 .7-1.7.5-.6-.2-1-.6-1.1-1.3-.2-.7.2-1.2.7-1.7l6.2-6.2c.2-.2.5-.3.5-.8h-5.6c-1.1 0-1.7-.6-1.7-1.5 0-1 .7-1.8 1.7-1.8h9.8c1.1 0 1.7.7 1.7 1.7-.2 3.3-.2 6.6-.2 9.8z" class="st0"/><path fill="#3b95d2" d="M19 38C8.5 38 0 29.4 0 19S8.5 0 19 0s19 8.5 19 19-8.5 19-19 19zm0-35.8C9.7 2.2 2.2 9.7 2.2 19S9.7 35.8 19 35.8 35.8 28.2 35.8 19 28.3 2.2 19 2.2z" class="st0"/></svg>',
            'enqueue_assets'  => function(){
              wp_enqueue_style( 'inb-blocks-css', plugin_dir_url( __FILE__ ) . 'css/acf-blocks.min.css' );
            },
        ));
        acf_register_block_type(array(
            'name'            => 'inb-person',
            'mode'				    => 'preview',
            'title'           => __('Team - person'),
            'category'        => 'inb-category',
            'render_template' => plugin_dir_path(__FILE__) . 'acf-templates/inb-person.php',
            'icon'            => '<svg xml:space="preserve" viewBox="0 0 38 38"><path fill="#3b95d2" d="M28.1 14c0-2.3-1.7-4.1-4.1-4.2H14c-1.5 0-2.8.7-3.5 2.1-1.4 2.5-.2 5.3 2.7 6.1.6.2.6.3.2.7-.8.7-1.5 1.5-2.3 2.3-.9.9-1.4 2-1.2 3.3.2 1.7 1.1 2.9 2.7 3.5 1.7.6 3.2.2 4.4-1.1.7-.7 1.4-1.4 2.2-2.1.2-.2.3-.4.6-.4.3.1.2.4.3.6.5 2.2 2.4 3.4 4.7 3.1 1.9-.2 3.4-2 3.4-4.1v-4.9c-.1-1.6-.1-3.2-.1-4.9zm-2.5 9.8c0 1.1-.6 1.7-1.5 1.7-1 0-1.7-.6-1.7-1.6-.1-1.6 0-3.2 0-4.8 0-.3.1-.6-.1-.8-.3 0-.5.3-.7.5l-6.3 6.3c-.5.5-1 .7-1.7.5-.6-.2-1-.6-1.1-1.3-.2-.7.2-1.2.7-1.7l6.2-6.2c.2-.2.5-.3.5-.8h-5.6c-1.1 0-1.7-.6-1.7-1.5 0-1 .7-1.8 1.7-1.8h9.8c1.1 0 1.7.7 1.7 1.7-.2 3.3-.2 6.6-.2 9.8z" class="st0"/><path fill="#3b95d2" d="M19 38C8.5 38 0 29.4 0 19S8.5 0 19 0s19 8.5 19 19-8.5 19-19 19zm0-35.8C9.7 2.2 2.2 9.7 2.2 19S9.7 35.8 19 35.8 35.8 28.2 35.8 19 28.3 2.2 19 2.2z" class="st0"/></svg>',
            'enqueue_assets'  => function(){
              wp_enqueue_style( 'inb-blocks-css', plugin_dir_url( __FILE__ ) . 'css/acf-blocks.min.css' );
            },
        ));

         acf_register_block_type(array(
            'name'            => 'inb-offert',
            'mode'				    => 'preview',
            'title'           => __('Offert - grid'),
            'category'        => 'inb-category',
            'render_template' => plugin_dir_path(__FILE__) . 'acf-templates/inb-offert-grid.php',
            'mode'	=> 'edit',
            'supports'		=> array(
              'align' => false,
              'mode'  => false,
              'jsx'   => false
            ),
            'icon'            => '<svg xml:space="preserve" viewBox="0 0 38 38"><path fill="#3b95d2" d="M28.1 14c0-2.3-1.7-4.1-4.1-4.2H14c-1.5 0-2.8.7-3.5 2.1-1.4 2.5-.2 5.3 2.7 6.1.6.2.6.3.2.7-.8.7-1.5 1.5-2.3 2.3-.9.9-1.4 2-1.2 3.3.2 1.7 1.1 2.9 2.7 3.5 1.7.6 3.2.2 4.4-1.1.7-.7 1.4-1.4 2.2-2.1.2-.2.3-.4.6-.4.3.1.2.4.3.6.5 2.2 2.4 3.4 4.7 3.1 1.9-.2 3.4-2 3.4-4.1v-4.9c-.1-1.6-.1-3.2-.1-4.9zm-2.5 9.8c0 1.1-.6 1.7-1.5 1.7-1 0-1.7-.6-1.7-1.6-.1-1.6 0-3.2 0-4.8 0-.3.1-.6-.1-.8-.3 0-.5.3-.7.5l-6.3 6.3c-.5.5-1 .7-1.7.5-.6-.2-1-.6-1.1-1.3-.2-.7.2-1.2.7-1.7l6.2-6.2c.2-.2.5-.3.5-.8h-5.6c-1.1 0-1.7-.6-1.7-1.5 0-1 .7-1.8 1.7-1.8h9.8c1.1 0 1.7.7 1.7 1.7-.2 3.3-.2 6.6-.2 9.8z" class="st0"/><path fill="#3b95d2" d="M19 38C8.5 38 0 29.4 0 19S8.5 0 19 0s19 8.5 19 19-8.5 19-19 19zm0-35.8C9.7 2.2 2.2 9.7 2.2 19S9.7 35.8 19 35.8 35.8 28.2 35.8 19 28.3 2.2 19 2.2z" class="st0"/></svg>',
            'enqueue_assets'  => function(){
              wp_enqueue_style( 'inb-blocks-css', plugin_dir_url( __FILE__ ) . 'css/acf-blocks.min.css' );
            },
        ));

        acf_register_block_type(array(
            'name'        => 'inb-contact',
            'mode'				=> 'preview',
            'title'       => __('Personal contact info'),
            'category'    => 'inb-category',
            'mode'	=> 'edit',
            'supports'		=> array(
              'align' => false,
              'mode'  => false,
              'jsx'   => false
            ),
            'render_template' => plugin_dir_path(__FILE__) . 'acf-templates/inb-contact-info.php',
            'icon'              => '<svg xml:space="preserve" viewBox="0 0 38 38"><path fill="#3b95d2" d="M28.1 14c0-2.3-1.7-4.1-4.1-4.2H14c-1.5 0-2.8.7-3.5 2.1-1.4 2.5-.2 5.3 2.7 6.1.6.2.6.3.2.7-.8.7-1.5 1.5-2.3 2.3-.9.9-1.4 2-1.2 3.3.2 1.7 1.1 2.9 2.7 3.5 1.7.6 3.2.2 4.4-1.1.7-.7 1.4-1.4 2.2-2.1.2-.2.3-.4.6-.4.3.1.2.4.3.6.5 2.2 2.4 3.4 4.7 3.1 1.9-.2 3.4-2 3.4-4.1v-4.9c-.1-1.6-.1-3.2-.1-4.9zm-2.5 9.8c0 1.1-.6 1.7-1.5 1.7-1 0-1.7-.6-1.7-1.6-.1-1.6 0-3.2 0-4.8 0-.3.1-.6-.1-.8-.3 0-.5.3-.7.5l-6.3 6.3c-.5.5-1 .7-1.7.5-.6-.2-1-.6-1.1-1.3-.2-.7.2-1.2.7-1.7l6.2-6.2c.2-.2.5-.3.5-.8h-5.6c-1.1 0-1.7-.6-1.7-1.5 0-1 .7-1.8 1.7-1.8h9.8c1.1 0 1.7.7 1.7 1.7-.2 3.3-.2 6.6-.2 9.8z" class="st0"/><path fill="#3b95d2" d="M19 38C8.5 38 0 29.4 0 19S8.5 0 19 0s19 8.5 19 19-8.5 19-19 19zm0-35.8C9.7 2.2 2.2 9.7 2.2 19S9.7 35.8 19 35.8 35.8 28.2 35.8 19 28.3 2.2 19 2.2z" class="st0"/></svg>',
            'enqueue_assets' => function(){
              wp_enqueue_style( 'inb-blocks-css', plugin_dir_url( __FILE__ ) . 'css/acf-blocks.min.css' );
            },
        ));

        acf_register_block_type(array(
            'name'        => 'inb-company-contact',
            'mode'				=> 'preview',
            'title'       => __('Company contact info'),
            'category'    => 'inb-category',
            'mode'	=> 'edit',
            'supports'		=> array(
              'align' => false,
              'mode'  => false,
              'jsx'   => false
            ),
            'render_template' => plugin_dir_path(__FILE__) . 'acf-templates/inb-company-contact-info.php',
            'icon'              => '<svg xml:space="preserve" viewBox="0 0 38 38"><path fill="#3b95d2" d="M28.1 14c0-2.3-1.7-4.1-4.1-4.2H14c-1.5 0-2.8.7-3.5 2.1-1.4 2.5-.2 5.3 2.7 6.1.6.2.6.3.2.7-.8.7-1.5 1.5-2.3 2.3-.9.9-1.4 2-1.2 3.3.2 1.7 1.1 2.9 2.7 3.5 1.7.6 3.2.2 4.4-1.1.7-.7 1.4-1.4 2.2-2.1.2-.2.3-.4.6-.4.3.1.2.4.3.6.5 2.2 2.4 3.4 4.7 3.1 1.9-.2 3.4-2 3.4-4.1v-4.9c-.1-1.6-.1-3.2-.1-4.9zm-2.5 9.8c0 1.1-.6 1.7-1.5 1.7-1 0-1.7-.6-1.7-1.6-.1-1.6 0-3.2 0-4.8 0-.3.1-.6-.1-.8-.3 0-.5.3-.7.5l-6.3 6.3c-.5.5-1 .7-1.7.5-.6-.2-1-.6-1.1-1.3-.2-.7.2-1.2.7-1.7l6.2-6.2c.2-.2.5-.3.5-.8h-5.6c-1.1 0-1.7-.6-1.7-1.5 0-1 .7-1.8 1.7-1.8h9.8c1.1 0 1.7.7 1.7 1.7-.2 3.3-.2 6.6-.2 9.8z" class="st0"/><path fill="#3b95d2" d="M19 38C8.5 38 0 29.4 0 19S8.5 0 19 0s19 8.5 19 19-8.5 19-19 19zm0-35.8C9.7 2.2 2.2 9.7 2.2 19S9.7 35.8 19 35.8 35.8 28.2 35.8 19 28.3 2.2 19 2.2z" class="st0"/></svg>',
            'enqueue_assets' => function(){
              wp_enqueue_style( 'inb-blocks-css', plugin_dir_url( __FILE__ ) . 'css/acf-blocks.min.css' );
            },
        ));
    
         acf_register_block_type(array(
            'name'        => 'inb-background',
            'mode'				=> 'preview',
            'title'       => __('Background'),
            'category'    => 'inb-category',
            'mode'	=> 'edit',
            'supports'		=> array(
              'align' => false,
              'mode'  => false,
              'jsx'   => true
            ),
            'render_template' => plugin_dir_path(__FILE__) . 'acf-templates/inb-background.php',
            'icon'            => '<svg xml:space="preserve" viewBox="0 0 38 38"><path fill="#3b95d2" d="M28.1 14c0-2.3-1.7-4.1-4.1-4.2H14c-1.5 0-2.8.7-3.5 2.1-1.4 2.5-.2 5.3 2.7 6.1.6.2.6.3.2.7-.8.7-1.5 1.5-2.3 2.3-.9.9-1.4 2-1.2 3.3.2 1.7 1.1 2.9 2.7 3.5 1.7.6 3.2.2 4.4-1.1.7-.7 1.4-1.4 2.2-2.1.2-.2.3-.4.6-.4.3.1.2.4.3.6.5 2.2 2.4 3.4 4.7 3.1 1.9-.2 3.4-2 3.4-4.1v-4.9c-.1-1.6-.1-3.2-.1-4.9zm-2.5 9.8c0 1.1-.6 1.7-1.5 1.7-1 0-1.7-.6-1.7-1.6-.1-1.6 0-3.2 0-4.8 0-.3.1-.6-.1-.8-.3 0-.5.3-.7.5l-6.3 6.3c-.5.5-1 .7-1.7.5-.6-.2-1-.6-1.1-1.3-.2-.7.2-1.2.7-1.7l6.2-6.2c.2-.2.5-.3.5-.8h-5.6c-1.1 0-1.7-.6-1.7-1.5 0-1 .7-1.8 1.7-1.8h9.8c1.1 0 1.7.7 1.7 1.7-.2 3.3-.2 6.6-.2 9.8z" class="st0"/><path fill="#3b95d2" d="M19 38C8.5 38 0 29.4 0 19S8.5 0 19 0s19 8.5 19 19-8.5 19-19 19zm0-35.8C9.7 2.2 2.2 9.7 2.2 19S9.7 35.8 19 35.8 35.8 28.2 35.8 19 28.3 2.2 19 2.2z" class="st0"/></svg>',
            'enqueue_assets'  => function(){
              wp_enqueue_style( 'inb-blocks-css', plugin_dir_url( __FILE__ ) . 'css/acf-blocks.min.css' );
            },
        ));
        acf_register_block_type(array(
            'name'        => 'inb-button',
            'mode'				=> 'preview',
            'title'       => __('Button'),
            'category'    => 'inb-category',
            'mode'	=> 'edit',
            'supports'		=> array(
              'align' => true,
              'mode'  => false,
              'jsx'   => false
            ),
            'render_template' => plugin_dir_path(__FILE__) . 'acf-templates/inb-button.php',
            'icon'            => '<svg xml:space="preserve" viewBox="0 0 38 38"><path fill="#3b95d2" d="M28.1 14c0-2.3-1.7-4.1-4.1-4.2H14c-1.5 0-2.8.7-3.5 2.1-1.4 2.5-.2 5.3 2.7 6.1.6.2.6.3.2.7-.8.7-1.5 1.5-2.3 2.3-.9.9-1.4 2-1.2 3.3.2 1.7 1.1 2.9 2.7 3.5 1.7.6 3.2.2 4.4-1.1.7-.7 1.4-1.4 2.2-2.1.2-.2.3-.4.6-.4.3.1.2.4.3.6.5 2.2 2.4 3.4 4.7 3.1 1.9-.2 3.4-2 3.4-4.1v-4.9c-.1-1.6-.1-3.2-.1-4.9zm-2.5 9.8c0 1.1-.6 1.7-1.5 1.7-1 0-1.7-.6-1.7-1.6-.1-1.6 0-3.2 0-4.8 0-.3.1-.6-.1-.8-.3 0-.5.3-.7.5l-6.3 6.3c-.5.5-1 .7-1.7.5-.6-.2-1-.6-1.1-1.3-.2-.7.2-1.2.7-1.7l6.2-6.2c.2-.2.5-.3.5-.8h-5.6c-1.1 0-1.7-.6-1.7-1.5 0-1 .7-1.8 1.7-1.8h9.8c1.1 0 1.7.7 1.7 1.7-.2 3.3-.2 6.6-.2 9.8z" class="st0"/><path fill="#3b95d2" d="M19 38C8.5 38 0 29.4 0 19S8.5 0 19 0s19 8.5 19 19-8.5 19-19 19zm0-35.8C9.7 2.2 2.2 9.7 2.2 19S9.7 35.8 19 35.8 35.8 28.2 35.8 19 28.3 2.2 19 2.2z" class="st0"/></svg>',
            'enqueue_assets'  => function(){
              wp_enqueue_style( 'inb-blocks-css', plugin_dir_url( __FILE__ ) . 'css/acf-blocks.min.css' );
            },
        ));
        acf_register_block_type(array(
            'name'        => 'inb-about-us',
            'mode'				=> 'preview',
            'title'       => __('About us'),
            'category'    => 'inb-category',
            'mode'	=> 'preview',
            'supports'		=> array(
              'align' => false,
              'mode'  => false,
              'jsx'   => true
            ),
            'render_template' => plugin_dir_path(__FILE__) . 'acf-templates/inb-about-us.php',
            'icon'            => '<svg xml:space="preserve" viewBox="0 0 38 38"><path fill="#3b95d2" d="M28.1 14c0-2.3-1.7-4.1-4.1-4.2H14c-1.5 0-2.8.7-3.5 2.1-1.4 2.5-.2 5.3 2.7 6.1.6.2.6.3.2.7-.8.7-1.5 1.5-2.3 2.3-.9.9-1.4 2-1.2 3.3.2 1.7 1.1 2.9 2.7 3.5 1.7.6 3.2.2 4.4-1.1.7-.7 1.4-1.4 2.2-2.1.2-.2.3-.4.6-.4.3.1.2.4.3.6.5 2.2 2.4 3.4 4.7 3.1 1.9-.2 3.4-2 3.4-4.1v-4.9c-.1-1.6-.1-3.2-.1-4.9zm-2.5 9.8c0 1.1-.6 1.7-1.5 1.7-1 0-1.7-.6-1.7-1.6-.1-1.6 0-3.2 0-4.8 0-.3.1-.6-.1-.8-.3 0-.5.3-.7.5l-6.3 6.3c-.5.5-1 .7-1.7.5-.6-.2-1-.6-1.1-1.3-.2-.7.2-1.2.7-1.7l6.2-6.2c.2-.2.5-.3.5-.8h-5.6c-1.1 0-1.7-.6-1.7-1.5 0-1 .7-1.8 1.7-1.8h9.8c1.1 0 1.7.7 1.7 1.7-.2 3.3-.2 6.6-.2 9.8z" class="st0"/><path fill="#3b95d2" d="M19 38C8.5 38 0 29.4 0 19S8.5 0 19 0s19 8.5 19 19-8.5 19-19 19zm0-35.8C9.7 2.2 2.2 9.7 2.2 19S9.7 35.8 19 35.8 35.8 28.2 35.8 19 28.3 2.2 19 2.2z" class="st0"/></svg>',
            'enqueue_assets'  => function(){
              wp_enqueue_style( 'inb-blocks-css', plugin_dir_url( __FILE__ ) . 'css/acf-blocks.min.css' );
            },
        ));
        acf_register_block_type(array(
            'name'        => 'inb-post',
            'mode'				=> 'preview',
            'title'       => __('Display posts'),
            'category'    => 'inb-category',
            'mode'	=> 'edit',
            'supports'		=> array(
              'align' => false,
              'mode'  => true,
              'jsx'   => false
            ),
            'render_template' => plugin_dir_path(__FILE__) . 'acf-templates/inb-post.php',
            'icon'            => '<svg xml:space="preserve" viewBox="0 0 38 38"><path fill="#3b95d2" d="M28.1 14c0-2.3-1.7-4.1-4.1-4.2H14c-1.5 0-2.8.7-3.5 2.1-1.4 2.5-.2 5.3 2.7 6.1.6.2.6.3.2.7-.8.7-1.5 1.5-2.3 2.3-.9.9-1.4 2-1.2 3.3.2 1.7 1.1 2.9 2.7 3.5 1.7.6 3.2.2 4.4-1.1.7-.7 1.4-1.4 2.2-2.1.2-.2.3-.4.6-.4.3.1.2.4.3.6.5 2.2 2.4 3.4 4.7 3.1 1.9-.2 3.4-2 3.4-4.1v-4.9c-.1-1.6-.1-3.2-.1-4.9zm-2.5 9.8c0 1.1-.6 1.7-1.5 1.7-1 0-1.7-.6-1.7-1.6-.1-1.6 0-3.2 0-4.8 0-.3.1-.6-.1-.8-.3 0-.5.3-.7.5l-6.3 6.3c-.5.5-1 .7-1.7.5-.6-.2-1-.6-1.1-1.3-.2-.7.2-1.2.7-1.7l6.2-6.2c.2-.2.5-.3.5-.8h-5.6c-1.1 0-1.7-.6-1.7-1.5 0-1 .7-1.8 1.7-1.8h9.8c1.1 0 1.7.7 1.7 1.7-.2 3.3-.2 6.6-.2 9.8z" class="st0"/><path fill="#3b95d2" d="M19 38C8.5 38 0 29.4 0 19S8.5 0 19 0s19 8.5 19 19-8.5 19-19 19zm0-35.8C9.7 2.2 2.2 9.7 2.2 19S9.7 35.8 19 35.8 35.8 28.2 35.8 19 28.3 2.2 19 2.2z" class="st0"/></svg>',
            'enqueue_assets'  => function(){
              wp_enqueue_style( 'inb-blocks-css', plugin_dir_url( __FILE__ ) . 'css/acf-blocks.min.css' );
            },
        ));

        acf_register_block_type(array(
            'name'        => 'inb-reference',
            'mode'				=> 'preview',
            'title'       => __('Reference'),
            'category'    => 'inb-category',
            'mode'	=> 'edit',
            'supports'		=> array(
              'align' => false,
              'mode'  => true,
              'jsx'   => false
            ),
            'render_template' => plugin_dir_path(__FILE__) . 'acf-templates/inb-reference.php',
            'icon'            => '<svg xml:space="preserve" viewBox="0 0 38 38"><path fill="#3b95d2" d="M28.1 14c0-2.3-1.7-4.1-4.1-4.2H14c-1.5 0-2.8.7-3.5 2.1-1.4 2.5-.2 5.3 2.7 6.1.6.2.6.3.2.7-.8.7-1.5 1.5-2.3 2.3-.9.9-1.4 2-1.2 3.3.2 1.7 1.1 2.9 2.7 3.5 1.7.6 3.2.2 4.4-1.1.7-.7 1.4-1.4 2.2-2.1.2-.2.3-.4.6-.4.3.1.2.4.3.6.5 2.2 2.4 3.4 4.7 3.1 1.9-.2 3.4-2 3.4-4.1v-4.9c-.1-1.6-.1-3.2-.1-4.9zm-2.5 9.8c0 1.1-.6 1.7-1.5 1.7-1 0-1.7-.6-1.7-1.6-.1-1.6 0-3.2 0-4.8 0-.3.1-.6-.1-.8-.3 0-.5.3-.7.5l-6.3 6.3c-.5.5-1 .7-1.7.5-.6-.2-1-.6-1.1-1.3-.2-.7.2-1.2.7-1.7l6.2-6.2c.2-.2.5-.3.5-.8h-5.6c-1.1 0-1.7-.6-1.7-1.5 0-1 .7-1.8 1.7-1.8h9.8c1.1 0 1.7.7 1.7 1.7-.2 3.3-.2 6.6-.2 9.8z" class="st0"/><path fill="#3b95d2" d="M19 38C8.5 38 0 29.4 0 19S8.5 0 19 0s19 8.5 19 19-8.5 19-19 19zm0-35.8C9.7 2.2 2.2 9.7 2.2 19S9.7 35.8 19 35.8 35.8 28.2 35.8 19 28.3 2.2 19 2.2z" class="st0"/></svg>',
            'enqueue_assets'  => function(){
              wp_enqueue_style( 'inb-blocks-css', plugin_dir_url( __FILE__ ) . 'css/acf-blocks.min.css' );
            },
        ));

         acf_register_block_type(array(
            'name'        => 'inb-hero',
            'mode'				=> 'eddit',
            'title'       => __('Hero section'),
            'category'    => 'inb-category',
            'mode'	=> 'edit',
            'supports'		=> array(
              'align' => false,
              'mode'  => true,
              'jsx'   => true
            ),
            'render_template' => plugin_dir_path(__FILE__) . 'acf-templates/inb-hero.php',
            'icon'            => '<svg xml:space="preserve" viewBox="0 0 38 38"><path fill="#3b95d2" d="M28.1 14c0-2.3-1.7-4.1-4.1-4.2H14c-1.5 0-2.8.7-3.5 2.1-1.4 2.5-.2 5.3 2.7 6.1.6.2.6.3.2.7-.8.7-1.5 1.5-2.3 2.3-.9.9-1.4 2-1.2 3.3.2 1.7 1.1 2.9 2.7 3.5 1.7.6 3.2.2 4.4-1.1.7-.7 1.4-1.4 2.2-2.1.2-.2.3-.4.6-.4.3.1.2.4.3.6.5 2.2 2.4 3.4 4.7 3.1 1.9-.2 3.4-2 3.4-4.1v-4.9c-.1-1.6-.1-3.2-.1-4.9zm-2.5 9.8c0 1.1-.6 1.7-1.5 1.7-1 0-1.7-.6-1.7-1.6-.1-1.6 0-3.2 0-4.8 0-.3.1-.6-.1-.8-.3 0-.5.3-.7.5l-6.3 6.3c-.5.5-1 .7-1.7.5-.6-.2-1-.6-1.1-1.3-.2-.7.2-1.2.7-1.7l6.2-6.2c.2-.2.5-.3.5-.8h-5.6c-1.1 0-1.7-.6-1.7-1.5 0-1 .7-1.8 1.7-1.8h9.8c1.1 0 1.7.7 1.7 1.7-.2 3.3-.2 6.6-.2 9.8z" class="st0"/><path fill="#3b95d2" d="M19 38C8.5 38 0 29.4 0 19S8.5 0 19 0s19 8.5 19 19-8.5 19-19 19zm0-35.8C9.7 2.2 2.2 9.7 2.2 19S9.7 35.8 19 35.8 35.8 28.2 35.8 19 28.3 2.2 19 2.2z" class="st0"/></svg>',
            'enqueue_assets'  => function(){
              wp_enqueue_style( 'inb-blocks-css', plugin_dir_url( __FILE__ ) . 'css/acf-blocks.min.css' );
            },
        ));
        
        acf_register_block(array(
          'name'              => 'inb-offert-slider',
          'mode'              => 'preview',
          'title'             => __('Offert - slider'),
          'render_template'   => plugin_dir_path(__FILE__) . 'acf-templates/inb-offert-slider.php',
          'category'          => 'inb-category',
          'icon'              => '<svg xml:space="preserve" viewBox="0 0 38 38"><path fill="#3b95d2" d="M28.1 14c0-2.3-1.7-4.1-4.1-4.2H14c-1.5 0-2.8.7-3.5 2.1-1.4 2.5-.2 5.3 2.7 6.1.6.2.6.3.2.7-.8.7-1.5 1.5-2.3 2.3-.9.9-1.4 2-1.2 3.3.2 1.7 1.1 2.9 2.7 3.5 1.7.6 3.2.2 4.4-1.1.7-.7 1.4-1.4 2.2-2.1.2-.2.3-.4.6-.4.3.1.2.4.3.6.5 2.2 2.4 3.4 4.7 3.1 1.9-.2 3.4-2 3.4-4.1v-4.9c-.1-1.6-.1-3.2-.1-4.9zm-2.5 9.8c0 1.1-.6 1.7-1.5 1.7-1 0-1.7-.6-1.7-1.6-.1-1.6 0-3.2 0-4.8 0-.3.1-.6-.1-.8-.3 0-.5.3-.7.5l-6.3 6.3c-.5.5-1 .7-1.7.5-.6-.2-1-.6-1.1-1.3-.2-.7.2-1.2.7-1.7l6.2-6.2c.2-.2.5-.3.5-.8h-5.6c-1.1 0-1.7-.6-1.7-1.5 0-1 .7-1.8 1.7-1.8h9.8c1.1 0 1.7.7 1.7 1.7-.2 3.3-.2 6.6-.2 9.8z" class="st0"/><path fill="#3b95d2" d="M19 38C8.5 38 0 29.4 0 19S8.5 0 19 0s19 8.5 19 19-8.5 19-19 19zm0-35.8C9.7 2.2 2.2 9.7 2.2 19S9.7 35.8 19 35.8 35.8 28.2 35.8 19 28.3 2.2 19 2.2z" class="st0"/></svg>',
           'mode'	=> 'edit',
            'supports'		=> array(
              'align' => false,
              'mode'  => false,
              'jsx'   => false
            ),
          'enqueue_assets' => function(){
            if(!is_admin() ) {
              wp_enqueue_style( 'inb-blocks-css', plugin_dir_url( __FILE__ ) . 'css/acf-blocks.min.css' );
              wp_enqueue_style( 'inb-team-slider-css', plugin_dir_url( __FILE__ ) . 'css/swiper.min.css' );

              wp_register_script( 'swiper.min-js-defer', plugin_dir_url( __FILE__ ) . 'js/swiper.min.js', [], false, true ); 
              wp_enqueue_script( 'swiper.min-js-defer' );

              wp_register_script( 'inb-offert-js-defer', plugin_dir_url( __FILE__ ) . 'js/inb-offert-slider.js', [], false, true ); 
              wp_enqueue_script( 'inb-offert-js-defer' );
            }
          },
        ));

        acf_register_block_type(array(
            'name'        => 'inb-map',
            'mode'				=> 'preview',
            'title'       => __('Map'),
            'category'    => 'inb-category',
            'mode'	=> 'edit',
            'supports'		=> array(
              'align' => false,
              'mode'  => false,
              'jsx'   => false
            ),
            'render_template' => plugin_dir_path(__FILE__) . 'acf-templates/inb-map.php',
            'icon'            => '<svg xml:space="preserve" viewBox="0 0 38 38"><path fill="#3b95d2" d="M28.1 14c0-2.3-1.7-4.1-4.1-4.2H14c-1.5 0-2.8.7-3.5 2.1-1.4 2.5-.2 5.3 2.7 6.1.6.2.6.3.2.7-.8.7-1.5 1.5-2.3 2.3-.9.9-1.4 2-1.2 3.3.2 1.7 1.1 2.9 2.7 3.5 1.7.6 3.2.2 4.4-1.1.7-.7 1.4-1.4 2.2-2.1.2-.2.3-.4.6-.4.3.1.2.4.3.6.5 2.2 2.4 3.4 4.7 3.1 1.9-.2 3.4-2 3.4-4.1v-4.9c-.1-1.6-.1-3.2-.1-4.9zm-2.5 9.8c0 1.1-.6 1.7-1.5 1.7-1 0-1.7-.6-1.7-1.6-.1-1.6 0-3.2 0-4.8 0-.3.1-.6-.1-.8-.3 0-.5.3-.7.5l-6.3 6.3c-.5.5-1 .7-1.7.5-.6-.2-1-.6-1.1-1.3-.2-.7.2-1.2.7-1.7l6.2-6.2c.2-.2.5-.3.5-.8h-5.6c-1.1 0-1.7-.6-1.7-1.5 0-1 .7-1.8 1.7-1.8h9.8c1.1 0 1.7.7 1.7 1.7-.2 3.3-.2 6.6-.2 9.8z" class="st0"/><path fill="#3b95d2" d="M19 38C8.5 38 0 29.4 0 19S8.5 0 19 0s19 8.5 19 19-8.5 19-19 19zm0-35.8C9.7 2.2 2.2 9.7 2.2 19S9.7 35.8 19 35.8 35.8 28.2 35.8 19 28.3 2.2 19 2.2z" class="st0"/></svg>',
            'enqueue_assets'  => function(){
              if(!is_admin() ) {
                wp_enqueue_style( 'inb-blocks-css', plugin_dir_url( __FILE__ ) . 'css/acf-blocks.min.css' );

                wp_register_script( 'jQuery-js-defer', 'https://code.jquery.com/jquery-3.6.0.min.js', [], false, true ); 
                wp_enqueue_script( 'jQuery-js-defer' );

                wp_register_script( 'map-api-js-defer', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyCIXFTZ5TWh5sJutqQeoiXH3aNRScmIxBw', [], false, true ); 
                wp_enqueue_script( 'map-api-js-defer' );

                wp_register_script( 'map-js-defer', plugin_dir_url( __FILE__ ) . 'js/inb-map.js', [], false, true ); 
                wp_enqueue_script( 'map-js-defer' );
              }
            },
        ));

    }
    
}