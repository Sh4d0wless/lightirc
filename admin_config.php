<?php

// Generated e107 Plugin Admin Area 

require_once('../../class2.php');
if (!getperms('P')) 
{
	e107::redirect('admin');
	exit;
}



class lightirc_adminArea extends e_admin_dispatcher
{

	protected $modes = array(	
	
		'main'	=> array(
			'controller' 	=> 'lightirc_ui',
			'path' 			=> null,
			'ui' 			=> 'lightirc_form_ui',
			'uipath' 		=> null
		),
		

	);	
	
	
	protected $adminMenu = array(
			
		'main/prefs' 		=> array('caption'=> LAN_PREFS, 'perm' => 'P'),	

		// 'main/custom'		=> array('caption'=> 'Custom Page', 'perm' => 'P')
	);

	protected $adminMenuAliases = array(
		'main/edit'	=> 'main/list'				
	);	
	
	protected $menuTitle = 'lightirc';
}

 
				
class lightirc_ui extends e_admin_ui
{
			
		protected $pluginTitle		= 'lightirc into e107';
		protected $pluginName		= 'lightirc';
	//	protected $eventName		= 'lightirc-'; // remove comment to enable event triggers in admin. 		
		protected $table			= '';
		protected $pid				= '';
		protected $perPage			= 10; 
		protected $batchDelete		= true;
	//	protected $batchCopy		= true;		
	//	protected $sortField		= 'somefield_order';
	//	protected $orderStep		= 10;
	//	protected $tabs				= array('Tabl 1','Tab 2'); // Use 'tab'=>0  OR 'tab'=>1 in the $fields below to enable. 
		
	//	protected $listQry      	= "SELECT * FROM `#tableName` WHERE field != '' "; // Example Custom Query. LEFT JOINS allowed. Should be without any Order or Limit.
	
		protected $listOrder		= ' DESC';
	
		protected $fields 		= NULL;		
		
		protected $fieldpref = array();
		

		protected $preftabs        = array('General', 'Other' );
		protected $prefs = array(
			'lightirc_name'		=> array('Server Options'=> LIRC_NAME, 'tab'=>1, 'type'=>'text', 'data' => 'str' ),
  		'lightirc_host'  => array(
  			'title'        =>  LIRC_CONF_CAPT_00,
  			'type'         => 'text',
  			'data'         => 'str',
  			'thclass'      => 'left',
        'help'         =>LIRC_CONF_NOTE_00,
  			'writeParms'   => array('size'=>'xxlarge' ),  
  			'tab'          => 1,
  		),
  		'lightirc_port'  => array(
  			'title'        =>  LIRC_CONF_CAPT_01,
  			'type'         => 'text',
  			'data'         => 'str',
  			'thclass'      => 'left',
        'help'         =>LIRC_CONF_NOTE_01,
  			'writeParms'   => array('size'=>'large' ),  
  			'tab'          => 1,
  		),      
  		'lightirc_policyPort'  => array(
  			'title'        =>  LIRC_CONF_CAPT_02,
  			'type'         => 'text',
  			'data'         => 'str',
  			'thclass'      => 'left',
        'help'         =>LIRC_CONF_NOTE_02,
  			'writeParms'   => array('size'=>'large' ),  
  			'tab'          => 1,
  		),
           'lightirc_language'  => array(
  			'title'        =>  LIRC_CONF_CAPT_03,
  			'type'         => 'dropdown',
  			'data'         => 'str',
  			'thclass'      => 'left',
        'help'         =>LIRC_CONF_NOTE_03,
  			'writeParms' => array(
  				'optArray' => array(
  					'sq' => 'Albanian',
                           'ar' => 'Arabic Syrian',                                                          
  					'bd' => 'Bengali',
  					'bg' => 'Bulgarian',    
  					'br' => 'Brazilian Portuguese',            
  					'cz' => 'Czech',
  					'da' => 'Danish',
                           'nl' => 'Dutch',                        
  					'de' => 'German',
  					'el' => 'Greek',            
  					'en' => 'English',
  					'es' => 'Spanish',            
  					'et' => 'Estonian',
  					'fi' => 'Finish', 
                           'fr' => 'French',
  					'hu' => 'Hungarian',
  					'hr' => 'Croation',    
  					'id' => 'Indonesian',            
  					'it' => 'Italian',
  					'ja' => 'Japanese',            
  					'lv' => 'Latvian',
  					'pl' => 'Polish',            
  					'pt' => 'Portuguese',
  					'ro' => 'Romainian',            
  					'ru' => 'Russian',
  					'sk' => 'Slovak', 
                           'sl' => 'Slovenian',            
  					'sr_cyr' => 'Serbian Cyrillic',
  					'sr_lat' => 'Serbian Latin',            
  					'sv' => 'Swedish',
  					'th' => 'Thai',            
  					'tr' => 'Turkish',
  					'uk' => 'Ukrainian',            
  					
  					
  				),
  			),   
  			'tab'          => 1,
  		),       
           'lightirc_showServerWindow'  => array(
  			'title'        =>  LIRC_CONF_CAPT_04,
  			'type'         => 'dropdown',
  			'data'         => 'str',
  			'thclass'      => 'left',
        'help'         =>LIRC_CONF_NOTE_04,
  			'writeParms' => array(
  				'optArray' => array(
  					'true' => 'Yes',
  					'false' => 'No',
  					
  				),
  			),  
  			'tab'          => 0,
  		), 
           'lightirc_showSecurityError'  => array(
  			'title'        =>  LIRC_CONF_CAPT_05,
  			'type'         => 'dropdown',
  			'data'         => 'str',
  			'thclass'      => 'left',
        'help'         =>LIRC_CONF_NOTE_05,
  			'writeParms' => array(
  				'optArray' => array(
  					'true' => 'Yes',
  					'false' => 'No',
  					
  				),
  			),  
  			'tab'          => 0,
  		),
           'lightirc_customSecurityErrorMessage'  => array(
  			'title'        =>  LIRC_CONF_CAPT_06,
  			'type'         => 'text',
  			'data'         => 'str',
  			'thclass'      => 'left',
        'help'         =>LIRC_CONF_NOTE_06,
  			'writeParms'   => array('size'=>'block-level' ),  
  			'tab'          => 1,
  		), 
           'lightirc_blockedCommands'  => array(
  			'title'        =>  LIRC_CONF_CAPT_07,
  			'type'         => 'text',
  			'data'         => 'str',
  			'thclass'      => 'left',
        'help'         =>LIRC_CONF_NOTE_07,
  			'writeParms'   => array('size'=>'block-level' ),  
  			'tab'          => 1,
  		), 
           'lightirc_autoReconnect'  => array(
  			'title'        =>  LIRC_CONF_CAPT_08,
  			'type'         => 'dropdown',
  			'data'         => 'str',
  			'thclass'      => 'left',
        'help'         =>LIRC_CONF_NOTE_08,
  			'writeParms' => array(
  				'optArray' => array(
  					'true' => 'Yes',
  					'false' => 'No',
  					
  				),
  			),  
  			'tab'          => 1,
  		), 
           'lightirc_showNickSelection'  => array(
  			'title'        =>  LIRC_CONF_CAPT_09,
  			'type'         => 'dropdown',
  			'data'         => 'str',
  			'thclass'      => 'left',
        'help'         =>LIRC_CONF_NOTE_09,
  			'writeParms' => array(
  				'optArray' => array(
  					'true' => 'Yes',
  					'false' => 'No',
  					
  				),
  			),  
  			'tab'          => 1,
  		), 
           'lightirc_nickAlternate'  => array(
  			'title'        =>  LIRC_CONF_CAPT_10,
  			'type'         => 'text',
  			'data'         => 'str',
  			'thclass'      => 'left',
        'help'         =>LIRC_CONF_NOTE_10,
  			'writeParms'   => array('size'=>'large' ),  
  			'tab'          => 1,
  		),                                   
           'lightirc_name'		=> array('Style Preferences'=> LIRC_NAME, 'tab'=>2, 'type'=>'text', 'data' => 'str' ),
                'lightirc_styleURL'  => array(
  			'title'        =>  LIRC_CONF_CAPT_11,
  			'type'         => 'dropdown',
  			'data'         => 'str',
  			'thclass'      => 'left',
        'help'         =>LIRC_CONF_NOTE_11,
  			'writeParms' => array(
  				'optArray' => array(
  					'background' => 'Background',
  					'black' => 'Black',
  					'blue' => 'Blue',    
  					'darkorange' => 'Darkorange',            
  					'green' => 'Green',  
                           'lightblue' => 'Lightblue',            
  					'yellow' => 'yellow',                                    
  				),
  			),  
  			'tab'          => 1,
  		), 
           'lightirc_nickPrefix'  => array(
  			'title'        =>  LIRC_CONF_CAPT_12,
  			'type'         => 'text',
  			'data'         => 'str',
  			'thclass'      => 'left',
        'help'         =>LIRC_CONF_NOTE_12,
  			'writeParms'   => array('size'=>'large' ),  
  			'tab'          => 1,
  		),
           'lightirc_nickPostfix'  => array(
  			'title'        =>  LIRC_CONF_CAPT_13,
  			'type'         => 'text',
  			'data'         => 'str',
  			'thclass'      => 'left',
        'help'         =>LIRC_CONF_NOTE_13,
  			'writeParms'   => array('size'=>'large' ),  
  			'tab'          => 1,
  		),
           'lightirc_showNavigation'  => array(
  			'title'        =>  LIRC_CONF_CAPT_14,
  			'type'         => 'dropdown',
  			'data'         => 'str',
  			'thclass'      => 'left',
        'help'         =>LIRC_CONF_NOTE_14,
  			'writeParms' => array(
  				'optArray' => array(
  					'true' => 'Yes',
  					'false' => 'No',
  					
  				),
  			),  
  			'tab'          => 1,
  		), 
           'lightirc_navigationPosition'  => array(
  			'title'        =>  LIRC_CONF_CAPT_15,
  			'type'         => 'dropdown',
  			'data'         => 'str',
  			'thclass'      => 'left',
        'help'         =>LIRC_CONF_NOTE_15,
  			'writeParms' => array(
  			'optArray' => array(
  					'top' => 'Top',
                           'bottom' => 'Bottom',
  					'left' => 'Left',    
  					'right' => 'Right',            
  					
  				),
  			),  
  			'tab'          => 1,
  		), 
  	  	'lightirc_fontSize'  => array(
  			'title'        =>  LIRC_CONF_CAPT_16,
  			'type'         => 'text',
  			'data'         => 'str',
  			'thclass'      => 'left',
        'help'         =>LIRC_CONF_NOTE_16,
  			'writeParms'   => array('size'=>'large' ),  
  			'tab'          => 1,
  		),
           'lightirc_userListWidth'  => array(
  			'title'        =>  LIRC_CONF_CAPT_17,
  			'type'         => 'text',
  			'data'         => 'str',
  			'thclass'      => 'left',
        'help'         =>LIRC_CONF_NOTE_17,  
  			'tab'          => 1,
  		), 
           'lightirc_soundAlerts'  => array(
  			'title'        =>  LIRC_CONF_CAPT_18,
  			'type'         => 'dropdown',
  			'data'         => 'str',
  			'thclass'      => 'left',
        'help'         =>LIRC_CONF_NOTE_18,
  			'writeParms' => array(
  				'optArray' => array(
  					'true' => 'Yes',
  					'false' => 'No',
  					
  				),
  			),  
  			'tab'          => 1,
  		), 
           'lightirc_showTimestamps'  => array(
  			'title'        =>  LIRC_CONF_CAPT_19,
  			'type'         => 'dropdown',
  			'data'         => 'str',
  			'thclass'      => 'left',
        'help'         =>LIRC_CONF_NOTE_19,
  			'writeParms' => array(
  				'optArray' => array(
  					'true' => 'Yes',
  					'false' => 'No',
  					
  				),
  			),  
  			'tab'          => 1,
  		), 
           'lightirc_showJoinPartMessages'  => array(
  			'title'        =>  LIRC_CONF_CAPT_20,
  			'type'         => 'dropdown',
  			'data'         => 'str',
  			'thclass'      => 'left',
        'help'         =>LIRC_CONF_NOTE_20,
  			'writeParms' => array(
  				'optArray' => array(
  					'true' => 'Yes',
  					'false' => 'No',
  					
  				),
  			),  
  			'tab'          => 1,
  		), 
           'lightirc_showNewQueriesInBackground'  => array(
  			'title'        =>  LIRC_CONF_CAPT_21,
  			'type'         => 'dropdown',
  			'data'         => 'str',
  			'thclass'      => 'left',
        'help'         =>LIRC_CONF_NOTE_21,
  			'writeParms' => array(
  				'optArray' => array(
  					'true' => 'Yes',
  					'false' => 'No',
  					
  				),
  			),  
  			'tab'          => 1,
  		), 
           'lightirc_enableQueries'  => array(
  			'title'        =>  LIRC_CONF_CAPT_22,
  			'type'         => 'dropdown',
  			'data'         => 'str',
  			'thclass'      => 'left',
        'help'         =>LIRC_CONF_NOTE_22,
  			'writeParms' => array(
  				'optArray' => array(
  					'true' => 'Yes',
  					'false' => 'No',
  					
  				),
  			),  
  			'tab'          => 1,
  		), 
           'lightirc_showChannelCentral'  => array(
  			'title'        =>  LIRC_CONF_CAPT_23,
  			'type'         => 'dropdown',
  			'data'         => 'str',
  			'thclass'      => 'left',
        'help'         =>LIRC_CONF_NOTE_23,
  			'writeParms' => array(
  				'optArray' => array(
  					'true' => 'Yes',
  					'false' => 'No',
  					
  				),
  			),  
  			'tab'          => 1,
  		), 
           'lightirc_showListButton'  => array(
  			'title'        =>  LIRC_CONF_CAPT_24,
  			'type'         => 'dropdown',
  			'data'         => 'str',
  			'thclass'      => 'left',
        'help'         =>LIRC_CONF_NOTE_24,
  			'writeParms' => array(
  				'optArray' => array(
  					'true' => 'Yes',
  					'false' => 'No',
  					
  				),
  			),  
  			'tab'          => 1,
  		),         
  		'lightirc_showRichTextControls'  => array(
  			'title'        =>  LIRC_CONF_CAPT_25,
  			'type'         => 'dropdown',
  			'data'         => 'str',
  			'thclass'      => 'left',
        'help'         =>LIRC_CONF_NOTE_25,
  			'writeParms' => array(
  				'optArray' => array(
  					'true' => 'Yes',
  					'false' => 'No',
  					
  				),
  			),  
  			'tab'          => 1,
  		), 
           'lightirc_showNickChangeButton'  => array(
  			'title'        =>  LIRC_CONF_CAPT_26,
  			'type'         => 'dropdown',
  			'data'         => 'str',
  			'thclass'      => 'left',
        'help'         =>LIRC_CONF_NOTE_26,
  			'writeParms' => array(
  				'optArray' => array(
  					'true' => 'Yes',
  					'false' => 'No',
  					
  				),
  			),  
  			'tab'          => 1,
  		), 
           'lightirc_name'		=> array('Webcam Options'=> LIRC_NAME, 'tab'=>3, 'type'=>'text', 'data' => 'str' ), 
           'lightirc_accessKey'  => array(
  			'title'        =>  LIRC_CONF_CAPT_27,
  			'type'         => 'text',
  			'data'         => 'str',
  			'thclass'      => 'left',
        'help'         =>LIRC_CONF_NOTE_27,
                 'writeParms'   => array('size'=>'large' ),    
  			'tab'          => 1,
  		), 
           'lightirc_webcam'  => array(
  			'title'        =>  LIRC_CONF_CAPT_28,
  			'type'         => 'dropdown',
  			'data'         => 'str',
  			'thclass'      => 'left',
        'help'         =>LIRC_CONF_NOTE_28,
  			'writeParms' => array(
  				'optArray' => array(
  					'true' => 'Yes',
  					'false' => 'No',
  					
  				),
  			),  
  			'tab'          => 1,
  		), 
           'lightirc_rtmp'  => array(
  			'title'        =>  LIRC_CONF_CAPT_29,
  			'type'         => 'text',
  			'data'         => 'str',
  			'thclass'      => 'left',
        'help'         =>LIRC_CONF_NOTE_29,
                 'writeParms'   => array('size'=>'large' ),    
  			'tab'          => 1,
  		), 
           'lightirc_webcamPreviewBox'  => array(
  			'title'        =>  LIRC_CONF_CAPT_30,
  			'type'         => 'dropdown',
  			'data'         => 'str',
  			'thclass'      => 'left',
        'help'         =>LIRC_CONF_NOTE_30,
  			'writeParms' => array(
  				'optArray' => array(
  					'true' => 'Yes',
  					'false' => 'No',
  					
  				),
  			),  
  			'tab'          => 1,
  		), 
           'lightirc_webcamPrivateOnly'  => array(
  			'title'        =>  LIRC_CONF_CAPT_31,
  			'type'         => 'dropdown',
  			'data'         => 'str',
  			'thclass'      => 'left',
        'help'         =>LIRC_CONF_NOTE_31,
  			'writeParms' => array(
  				'optArray' => array(
  					'true' => 'Yes',
  					'false' => 'No',
  					
  				),
  			),  
  			'tab'          => 1,
  		), 
           'lightirc_webcamPublicOnly'  => array(
  			'title'        =>  LIRC_CONF_CAPT_32,
  			'type'         => 'dropdown',
  			'data'         => 'str',
  			'thclass'      => 'left',
        'help'         =>LIRC_CONF_NOTE_32,
  			'writeParms' => array(
  				'optArray' => array(
  					'true' => 'Yes',
  					'false' => 'No',
  					
  				),
  			),  
  			'tab'          => 1,
  		), 
           'lightirc_webcamVideoOnly'  => array(
  			'title'        =>  LIRC_CONF_CAPT_33,
  			'type'         => 'dropdown',
  			'data'         => 'str',
  			'thclass'      => 'left',
        'help'         =>LIRC_CONF_NOTE_33,
  			'writeParms' => array(
  				'optArray' => array(
  					'true' => 'Yes',
  					'false' => 'No',
  					
  				),
  			),  
  			'tab'          => 1,
  		), 
           'lightirc_webcamAudioOnly'  => array(
  			'title'        =>  LIRC_CONF_CAPT_34,
  			'type'         => 'dropdown',
  			'data'         => 'str',
  			'thclass'      => 'left',
        'help'         =>LIRC_CONF_NOTE_34,
  			'writeParms' => array(
  				'optArray' => array(
  					'true' => 'Yes',
  					'false' => 'No',
  					
  				),
  			),  
  			'tab'          => 1,
  		), 
           'lightirc_webcamChannelBlacklist'  => array(
  			'title'        =>  LIRC_CONF_CAPT_35,
  			'type'         => 'text',
  			'data'         => 'str',
  			'thclass'      => 'left',
        'help'         =>LIRC_CONF_NOTE_35,
  			'writeParms'   => array('size'=>'xxlarge' ),  
  			'tab'          => 1,
  		),
           'lightirc_webcamChannelWhitelist'  => array(
  			'title'        =>  LIRC_CONF_CAPT_36,
  			'type'         => 'text',
  			'data'         => 'str',
  			'thclass'      => 'left',
        'help'         =>LIRC_CONF_NOTE_36,
  			'writeParms'   => array('size'=>'xxlarge' ),  
  			'tab'          => 1,
  		),
           
  		
		); 

	
		public function init()
		{
			// Set drop-down values (if any). 
	
		}

		
		// ------- Customize Create --------
		
		public function beforeCreate($new_data)
		{
			return $new_data;
		}
	
		public function afterCreate($new_data, $old_data, $id)
		{
			// do something
		}

		public function onCreateError($new_data, $old_data)
		{
			// do something		
		}		
		
		
		// ------- Customize Update --------
		
		public function beforeUpdate($new_data, $old_data, $id)
		{
			return $new_data;
		}

		public function afterUpdate($new_data, $old_data, $id)
		{
			// do something	
		}
		
		public function onUpdateError($new_data, $old_data, $id)
		{
			// do something		
		}		
		
			
	/*	
		// optional - a custom page.  
		public function customPage()
		{
			$text = 'Hello World!';
			return $text;
			
		}
	*/
			
}
				


class lightirc_form_ui extends e_admin_form_ui
{

}		
		
		
new lightirc_adminArea();

require_once(e_ADMIN."auth.php");
e107::getAdminUI()->runPage();

require_once(e_ADMIN."footer.php");
exit;

?>