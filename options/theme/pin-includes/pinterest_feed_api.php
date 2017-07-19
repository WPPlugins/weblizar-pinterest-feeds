<?php 
if ( ! defined( 'ABSPATH' ) ) exit;
if ( !class_exists('PFFREE_pinterest_feed_api') ):	
/**
 * A Pinterest feed api. 
 * 
 * @author Deepak Jain
 * @copyright 2016
 * @version 1.0
 * @access public
 */
class PFFREE_pinterest_feed_api {
	private $PFFREE_Access_Token = '';              //The Plugin associated with this update checker instance.
	//private $PFFREE_pinterest_user_id = '';    
	//public $metadataUrl = '';       //The URL of the Plugin's metadata file.	
	//protected static $filterPrefix = 'tuc_request_update_';	                                 
	/**
	 * Class constructor.
	 *
	 * @param string $Plugin Plugin slug, e.g. "twentyten".
	 * @param string $metadataUrl The URL of the Plugin metadata file.
	 */
	public function __construct($PFFREE_Access_Token){
		$this->PFFREE_Access_Token = $PFFREE_Access_Token;
	}	
	// Get profile 
	public function add_pffree_profile_result(){
		if ( ! defined( 'ABSPATH' ) ) exit;
		$all_roles = array('id','username','first_name','last_name','bio','created_at','counts','image','account_type','url');
		$user_fields_value = $all_roles; 
		$values = '';
		foreach($user_fields_value as $fields_value){ 
			$values .= $fields_value.',';							 							
		} 	
		$values =  rtrim($values, ",");	
		$get_users = 'https://api.pinterest.com/v1/me/?access_token='.$this->PFFREE_Access_Token.'&limit=100&fields='.$values;
		$profile_result = $this->pffree_get_results($get_users);
		return $profile_result;
	}
	// Create board 
	public function add_pffree_profile_pins_result($pins_limits_value){	
		$all_boards_fields_value = array('id','link','url','creator','board','created_at','note','color','counts','media','attribution','image','metadata');
		$all_boards_values = '';
		foreach($all_boards_fields_value as $fields_value){ 
			$all_boards_values .= $fields_value.',';				
		}
		$all_boards_values =  rtrim($all_boards_values, ",");
		$get_all_boards_values = 'https://api.pinterest.com/v1/me/pins/?access_token='.$this->PFFREE_Access_Token .'&limit='.$pins_limits_value.'&fields='.$all_boards_values;
		$board_result = $this->pffree_get_results($get_all_boards_values);
		return $board_result;
	}
	
	// Get board 
	public function add_pffree_board_result(){	
		$all_boards_fields_value = array('id','name','url','description','counts','creator','created_at','image');
		$all_boards_values = '';
		foreach($all_boards_fields_value as $fields_value){ 
			$all_boards_values .= $fields_value.',';				
		}
		$all_boards_values =  rtrim($all_boards_values, ",");
		$get_all_boards_values = 'https://api.pinterest.com/v1/me/boards/?access_token='.$this->PFFREE_Access_Token.'&limit=2&fields='.$all_boards_values;
		$board_result = $this->pffree_get_results($get_all_boards_values);
		return $board_result;
	}

	// Get pins 
	public function add_pffree_pins_result($boards_name,$pins_limits_value,$PFFREE_pinterest_user_id){
		$pins_fields_value = array('id','link','url','creator','board','created_at','note','color','counts','media','attribution','image','metadata');
			$board_pins_values = '';
			foreach($pins_fields_value as $fields_value){ 
				$board_pins_values .= $fields_value.',';				
			} 	
			$board_pins_values =  rtrim($board_pins_values, ",");
			$get_board_pins_values = 'https://api.pinterest.com/v1/boards/'.$PFFREE_pinterest_user_id.'/'.$boards_name.'/pins/?access_token='.$this->PFFREE_Access_Token.'&limit='.$pins_limits_value.'&fields='.$board_pins_values;
			$get_result = $this->pffree_get_results($get_board_pins_values);
			return $get_result; 
	}
	// Get result by curl 
	public function pffree_get_results($get_results){
		$get_all_values_results = curl_init($get_results);
		curl_setopt($get_all_values_results, CURLOPT_FAILONERROR, true);
		curl_setopt($get_all_values_results, CURLOPT_FOLLOWLOCATION, true);
		curl_setopt($get_all_values_results, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($get_all_values_results, CURLOPT_SSL_VERIFYHOST, false);
		curl_setopt($get_all_values_results, CURLOPT_SSL_VERIFYPEER, false);  
		$get_results = curl_exec($get_all_values_results);		
		$get_results = json_decode($get_results);		 
		return $get_results;
	}	
}
endif;
?>