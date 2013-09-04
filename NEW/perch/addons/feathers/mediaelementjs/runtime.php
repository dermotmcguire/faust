<?php
	
PerchSystem::register_feather('MediaElementJS');

class PerchFeather_MediaElementJS extends PerchFeather
{

	public function get_css($opts, $index, $count)
	{	
		$out = array();
		$out[] = $this->_single_tag('link', array(
					'rel'=>'stylesheet',
					'href'=>$this->path.'/build/mediaelementplayer.min.css',
					'type'=>'text/css'
				));
		
		return implode("\n\t", $out)."\n";
	}

	public function get_javascript($opts, $index, $count)
	{	
		$out = array();

		if (!$this->component_registered('jquery')) {
			$out[] = $this->_script_tag(array(
				'src'=>$this->path.'/build/jquery.js'
			));
			$this->register_component('jquery');
		}


		$out[] = $this->_script_tag(array(
					'src'=>$this->path.'/build/mediaelement-and-player.min.js'
				));

		$out[] = $this->_script_tag(array(), "$('audio').mediaelementplayer({
			audioWidth: 200,
   	    	audioHeight: 30,
   	    	features: ['playpause','progress','current','duration']
		});");

		return implode("\n\t", $out)."\n";
	}

}


?>