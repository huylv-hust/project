<?php
class ControllerEventTheme extends Controller {
	public function index(&$view, &$data) {
		if (!$this->config->get($this->config->get('config_theme') . '_status')) {
			exit('Error: A theme has not been assigned to this store!');
		}
		
		// This is only here for compatibility with old themes.
		if (substr($view, -4) == '.tpl') {
			$view = substr($view, 0, -4);
		}

		if (is_file(DIR_TEMPLATE .'/template/' . $view . '.tpl')) {
			$view = 'template/' . $view;
		} else {
			$view = 'template/' . $view;
		}			
	}
}
