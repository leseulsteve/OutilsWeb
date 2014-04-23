<?php
class Configuration
{
	private static $instance;
	private $theme;

	private function __construct()
	{
		//$this->theme = new Themes_Defaut_Theme();	
		$this->theme = new Themes_BootStrap3_Theme();	
	}
	
	public static function get_instance()
	{
		if (!isset(self::$instance))
		{
			self::$instance = new self;
		}
		return self::$instance;

	}

	public function getTheme()
	{
		return $this->theme;
	}
}
?>