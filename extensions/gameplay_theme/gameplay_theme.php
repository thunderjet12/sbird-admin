<?php
/**
 * @package game play theme
 * @author SBird Themes
 */

 namespace Sbird_Admin\Gameplay_Theme;

//  spl_autoload_register( function($className) {
    //  namespace prefix
    // $widget_main_class = $className . '.php' ;
    // $prefix = 'Gameplay_Admin\\Widgets\\';
    // $len = strlen()
    // if(file_exists($widget_main_class)) {
    // }

        // $widgets_classes_paths = glob('widgets/*/'. $className .'_component.php', GLOB_BRACE );
        // $className = str_replace("\\", DIRECTORY_SEPARATOR, $className);

        // foreach($widgets_classes_paths as $widget) {
            include_once plugin_dir_path( realpath( dirname( __FILE__ ) ) ) . 'extensions/gameplay_theme/widgets/Hero/Hero_Component.php';
            // new Hero_Component();
        // }
        
//  } );

