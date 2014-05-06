<?php defined('DOC_ROOT') or die;
class test extends gobligo_core
{
	public function index()
	{
		$this->data = "I have created an MVC";
		echo $this->render_partial("test/index");
	}
}