<?php defined('DOC_ROOT') or die;
class gobligo_core
{
	public function render($view_path = NULL, $_return_ = false)
	{
		$view_file = $this->get_view_file($view_path);
		$_data_ = (array)$this;
		extract($_data_, EXTR_PREFIX_SAME, "data");
		if($_return_)
		{
			ob_start();
			ob_implicit_flush(false);
			require($view_file);
			return ob_get_clean();
		}
		else
		{
			require($view_file);
		}
	}
	public function render_partial($view_path = NULL, $_return_ = true)
	{
		return $this->render($view_path, $_data_, $_return_);
			
	}
	private function get_view_file($view_path = NULL)
	{
		if(empty($view_path))
		{
			return DOC_ROOT."/./mvc/view/$this->controller/$this->action.php";
		}
		else
		{
			return DOC_ROOT."/./mvc/view/$view_path.php";
		}
	}
}