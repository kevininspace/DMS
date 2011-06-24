<?php
/*

	Section: Content Sidebar
	Author: Andrew Powers
	Author URI: http://www.pagelines.com
	Description: Shows sidebar inside the main column content area
	Class Name: ContentSidebar
*/

class ContentSidebar extends PageLinesSection {

   function __construct( $registered_settings = array() ) {
	
		$name = __('Content Sidebar', 'pagelines');
		$id = 'content_sidebar';
		$this->handle = "Content Sidebar";
	
		
		$settings = array(
			'description' 	=> __('Displays a widgetized sidebar inside the main content area. Set it up in the widgets panel', 'pagelines'),
			'workswith' 	=> array('main-default', 'main-posts', 'main-single', 'main-404'),
			'folder' 		=> '', 
			'init_file' 	=> 'fullwidth_sidebar.php', 
			'icon'			=> PL_ADMIN_ICONS . '/sidebar.png'
		);
		

	   parent::__construct($name, $id, $settings);    
   }

   function section_persistent() { 
		$setup = pagelines_standard_sidebar($this->name, $this->settings['description']);
		register_sidebar($setup);
	}

   function section_template() { 
	 	pagelines_draw_sidebar($this->id, $this->name);
	}

}

/*
	End of section class
*/