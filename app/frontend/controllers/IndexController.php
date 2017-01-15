<?php
class IndexController extends ControllerBase
{
    public function indexAction()
    {
		$this->viewPage();
    }
	
	private function viewPage(){
		
		if (!$this -> request -> isPost()) {
			// get data from user
			// find user in database
			$theather = 'Eastern';
			$army = Army::findFirst(array("theater = :theater:", "bind" => array("theater" => $theather, )));
		
		$this->view->post = $army;
	}

}
}

