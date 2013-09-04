<?php
/**
 * A field type for selecting a file from those already uploaded
 *
 * @package default
 * @author Rachel Andrew
 */
class PerchFieldType_filelist extends PerchAPI_FieldType
{
    /**
     * Output the form fields for the edit page
     *
     * @param array $details 
     * @return void
     * @author Rachel Andrew
     */
    public function render_inputs($details=array())
    {

        // The input_id is the ID to use for the field. It accounts for multiple items appearing in one edit form.
        $id  = $this->Tag->input_id();

        // Arbitrary attributes from the template tag (like 'extension' can be read using automatic getters on $this->Tag)
        $ext = $this->Tag->extension();

        // Set the current value of the field to nothing
        $val = '';
        
        // $details contains the previous data stored for this field. When editing, the field needs to be repopulated with the previous values.
        if (isset($details[$id]) && $details[$id]!='') {
            $json = $details[$id];
            $val  = $json['filename']; 
        }
        
        // Call a custom function to get the list of files to display
        $files = $this->_get_files($ext);
       
        // Create the field, or just output a dash if there are no results
        if(is_array($files)) {
        	$s = $this->Form->select($id, $files, $val);
        } else {
        	$s = '-';
        }
        
        // return a HTML string containing the form fields to display
        return $s;
    }
    
    
    /**
     * Read in the form input, prepare data for storage in the database.
     *
     * @param string $post 
     * @param object $Item 
     * @return void
     * @author Rachel Andrew
     */
    public function get_raw($post=false, $Item=false) 
    {
        // Pepare an array of the values we're going to store.
        $store = array();
        
        // Use $this->Tag->id() to get the ID at this point
        $id = $this->Tag->id();

        // $post should normally be set, but if it's not, try $_POST
        if ($post===false) {
            $post = $_POST;
        }
        
        // Find the data we need from the post
        if (isset($post[$id])) {
            $this->raw_item = trim($post[$id]);

            // Store the data as we want it
            $store['filename'] = $this->raw_item;
            $store['size']     = filesize(PerchUtil::file_path(PERCH_RESFILEPATH.'/'.$this->raw_item));

            // Also, set the special value '_default' which is used as the value when we don't know the fieldtype (e.g. in a <perch:if /> comparison.)
            $store['_default'] = PERCH_RESPATH.'/'.$this->raw_item;
        }else{

            /* 
                Some field types, such as images, need to persist the data even though it's not submitted with the form each time.
                If this were the case here, we could use $Item to get the previous value of the field and send it back as if it were new.

                $json = PerchUtil::json_safe_decode($Item->itemJSON());
                if (isset($json['file'])) {
                    $store = $json['file'];
                }
 
            */

        }
        
        // Return the data to store. Can be an array or just a string in the simplest case.
        return $store;
    }
    
    /**
     * Take the raw data input and return process values for templating
     *
     * @param string $raw 
     * @return void
     * @author Rachel Andrew
     */
    public function get_processed($raw=false)
    {    
        // Check we've got the array we're expecting
        if (is_array($raw) && isset($raw['filename'])) { 

            // Look at the 'output' attribute and see what we should return
            switch($this->Tag->output()) {

                // the full path
                case 'path':
                    return PERCH_RESPATH.'/'.$raw['filename'];
                    break;

                // the file size
                case 'size':
                    return $raw['size'];
                    break;

                // just the name of the file
                case 'filename':
                    return $raw['filename'];
                    break;


                // return the path by default
                default:
                    return PERCH_RESPATH.'/'.$raw['filename'];
                    break;

            }
         
            
        }

        // else just return what we were given
        return $raw;
    }
    
    /**
     * Get the value to be used for searching
     *
     * @param string $raw 
     * @return void
     * @author Rachel Andrew
     */
    public function get_search_text($raw=false)
    {
        if ($raw===false) $raw = $this->get_raw();
        if (!PerchUtil::count($raw)) return false;

        if (isset($raw['filename'])) return $raw['filename'];

		return false;
    }
    
       
    
	
	
	/**
	 * Get the list of available files by extension
	 *
	 * @param string $ext The file extension
	 * @return array $files
	 * @author Rachel Andrew
	 */
    private function _get_files($ext=false)
	{
		
		$files = PerchUtil::get_dir_contents(PERCH_RESFILEPATH);

		$returnfiles = array();
		if(PerchUtil::count($files) > 0) {
			foreach($files as $file) {
				// if a file extension has been provided only add files with that extension
				if($ext) {
					if(strtolower(trim($ext)) == strtolower(PerchUtil::file_extension($file))) {
						$returnfiles[] = array('label'=>$file, 'value'=>$file);
					}
				} else {
					// prepare all files for display
					$returnfiles[] = array('label'=>$file, 'value'=>$file);
				}
			}
		}
		if(PerchUtil::count($returnfiles) > 0) {
			return $returnfiles;
		} else {	
			return false;
		}
	}


}

?>