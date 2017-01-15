<?php

class ProfileController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {
			?>
			<form id='register'  method='post'
    accept-charset='UTF-8'>
<fieldset >
<legend>Register</legend>
<input type='hidden' name='submitted' id='submitted' value='1'/>
<label for='name' >Your Full Name*: </label>
<input type='text' name='name' id='name' maxlength="50" />
<label for='email' >Email Address*:</label>
<input type='text' name='email' id='email' maxlength="50" />
 
<label for='username' >UserName*:</label>
<input type='text' name='username' id='username' maxlength="50" />
 
<label for='password' >Password*:</label>
<input type='password' name='password' id='password' maxlength="50" />
<input type='submit' name='Submit' action='submit' value='Submit' />

</fieldset>
</form>
			<?php
			
		//echo $this->view->render('profile', 'index');
    }
	
	public function submitAction()
	{
		echo 'submit here';
	}
}

