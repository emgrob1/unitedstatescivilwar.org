<?php


class BattlesController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {

    }

	public function virginiaAction()
	{
		echo $this->view->render('virginia', 'index');
	}
}

