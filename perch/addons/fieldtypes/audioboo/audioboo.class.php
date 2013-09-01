<?php
/**
 * A field type for Audioboo... boos? Audio clips.
 *
 * @package default
 * @author Drew McLellan
 */
class PerchFieldType_audioboo extends PerchAPI_FieldType
{
    
    private $api_url = 'http://api.audioboo.fm/audio_clips/';
    
    /**
     * Output the form fields for the edit page
     *
     * @param array $details 
     * @return void
     * @author Drew McLellan
     */
    public function render_inputs($details=array())
    {
        $id = $this->Tag->input_id();
        $val = '';
        
        if (isset($details[$id]) && $details[$id]!='') {
            $json = $details[$id];
            $val  = $json['path']; 
        }else{
            $json = array();
        }
        
        $s = $this->Form->text($this->Tag->input_id(), $val);
        
        if (isset($json['audioclipID'])) {
            $s.= '<div class="preview">'.$json['embed'].'</div>';
        }
        
        return $s;
    }
    
    
    /**
     * Read in the form input, prepare data for storage in the database.
     *
     * @param string $post 
     * @param object $Item 
     * @return void
     * @author Drew McLellan
     */
    public function get_raw($post=false, $Item=false) 
    {
        $store = array();
                
        $id = $this->Tag->id();

        if ($post===false) {
            $post = $_POST;
        }
        
        if (isset($post[$id])) {
            $this->raw_item = trim($post[$id]);
            $url = $this->raw_item;
        }
        
		if ($url) {
	        $store['path'] = $url;
	        $store['audioclipID'] = $this->get_id($url);
        
	        $details = $this->get_details($store['audioclipID']);
        
	        if ($details) {
	            $store = array_merge($store, $details);
	            $store['_title'] = $details['title'];
	        }
		}     
        
        return $store;
    }
    
    /**
     * Take the raw data input and return process values for templating
     *
     * @param string $raw 
     * @return void
     * @author Drew McLellan
     */
    public function get_processed($raw=false)
    {    
        if (is_array($raw)) {
            
            $item = $raw;
                        
            if ($this->Tag->output() && $this->Tag->output()!='embed') {
                switch($this->Tag->output()) {        
                    case 'id':
                        return isset($item['audioclipID']) ? $item['audioclipID'] : false;
                        break;

                    default:
                        if (isset($item[$this->Tag->output()])) {
                            return $item[$this->Tag->output()];
                        }
                        break;
                }

                return false;
            }
    
            return $item['embed'];
        }
        return $raw;
    }
    
    /**
     * Get the value to be used for searching
     *
     * @param string $raw 
     * @return void
     * @author Drew McLellan
     */
    public function get_search_text($raw=false)
    {
        if ($raw===false) $raw = $this->get_raw();
        if (!PerchUtil::count($raw)) return false;

        if (isset($raw['title'])) return $raw['title'];

		return false;
    }
    
	
	
	/**
	 * Finds the Audioboo clip ID from an audioboo.fm URL
	 *
	 * @param string $url Audioboo clip page URL
	 * @return string audioclip ID
	 * @author Drew McLellan
	 */
    private function get_id($url)
	{
		$parts = explode('/', rtrim($url, '/'));
        $slug = array_pop($parts);
        $parts = explode('-', $slug, 2);
        $id = $parts[0];
        if (is_numeric($id)) return $id;
		return false;
	}
	
	
	/**
	 * Get information about the video with the given ID.
	 *
	 * @param string $audioclipID An audioclip ID
	 * @return array Assoc array of clip details
	 * @author Drew McLellan
	 */
	private function get_details($audioclipID)
	{
		$url = $this->api_url . $audioclipID;
		
		$ch 	= curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_TIMEOUT, 10);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
		$json = curl_exec($ch);
		curl_close($ch);
		
		if ($json) {

            $data = PerchUtil::json_safe_decode($json);

            //PerchUtil::debug($data);

			if ($data) {

                $clip  = $data->body->audio_clip;

			    $out = array();
                $out['title']       = (isset($clip->title) ? $clip->title : '');
                $out['description'] = (isset($clip->description) ? $clip->description : '');
                $out['user_name']   = (isset($clip->user->username) ? $clip->user->username : '');
                $out['user_url']    = (isset($clip->user->urls->profile) ? $clip->user->urls->profile : '');
                $out['user_img']    = (isset($clip->user->urls->image) ? $clip->user->urls->image : '');
                $out['url']         = (isset($clip->urls->detail) ? $clip->urls->detail : '');
                $out['thumb']       = (isset($clip->urls->image) ? $clip->urls->image : '');
                $out['views']       = (isset($clip->counts->plays) ? $clip->counts->plays : '');
                $out['duration']    = (isset($clip->duration) ? $clip->duration : '');
                $out['tags']        = (isset($clip->tags) ? $clip->tags : '');
                $out['date']        = (isset($clip->uploaded_at) ? date('Y-m-d H:i:s', strtotime($clip->uploaded_at)) : '');
                $out['mp3']         = (isset($clip->urls->high_mp3) ? $clip->urls->high_mp3 : '');

                $out['embed']       = '<div class="ab-player" data-boourl="'.$out['url'].'/embed"><a href="'.$out['url'].'">listen to &#x2018;'.PerchUtil::html($out['title']).'&#x2019; on Audioboo</a></div><script type="text/javascript">(function() { var po = document.createElement("script"); po.type = "text/javascript"; po.async = true; po.src = "http://d15mj6e6qmt1na.cloudfront.net/assets/embed.js"; var s = document.getElementsByTagName("script")[0]; s.parentNode.insertBefore(po, s); })();</script>';
                               
                //PerchUtil::debug($out);
		
    			return $out;
    		}
            
		}
		
		return false;
	}


}

?>