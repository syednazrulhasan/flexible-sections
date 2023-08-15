<?php
/**Template Name: Flexible Sections
 */
get_header();
?>
    <main class="site-main">
    <?php 

        $content_modules = get_field('flexible_sections');

           
        if ( (is_array($content_modules)) and (count($content_modules) > 0) ) {
            
            foreach ($content_modules as $module) {
               
                $template = $module['acf_fc_layout'];  
                
                $filePath = get_template_directory()."/template-parts/content-" . $template . '.php';   
                if (file_exists($filePath)) { 
                    require($filePath); 
                }
            }
        }; 

        ?>
    </main>

<?php
get_footer(); ?>