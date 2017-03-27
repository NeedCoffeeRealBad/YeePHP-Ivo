<?php
namespace App\Models;

class RegisterModel
{
	protected $email;
	protected $password;
	protected $repeat_password;

	public function __construct($email, $password, $repeat_password)
	{
		$this->email = $email;	
		$this->password = $password;
		$this->repeat_password = $repeat_password;
	}

	public function register()
	{
		if($this->validateEmpty() == false){
			return false;
		}
		if($this->validatePassword() == false){
			return false; 
		}
		if($this->validateEMail() == false){
			return false;
		}
		return true;
	}

	public function validateEmpty()
	{
		if(empty($this->email) || empty($this->password) || empty($this->repeat_password))
		{
			return false;
		}
		else
		{
			return true;
		}
	}

	public function validatePassword()
	{
		$pass = strlen($this->password);
		$re_pass = strlen($this->repeat_password);
		$min = 8;
		$max = 20;

		if ($pass < $min && $re_pass < $min) 
		{
		
        	return false;
    	}
    	if($this->password != $this->repeat_password)
    	{
    		return false;
    	}
    	if($pass > $max && $re_pass > $max) 
    	{
    		return false;
    	}
	    if(!preg_match("#[0-9]+#", $this->password)) 
	    {
	        return false;
	    }
	    if(!preg_match("#[a-zA-Z]+#", $this->password)) 
	    {
	        return false;
	    }
	    	return true;	
	}

	public function validateEMail()
	{
		if((!filter_var($this->email, FILTER_VALIDATE_EMAIL))) 
		{
  			return false;
		}
		else
		{
			return true;
		}
	}

	public function insertInDb()
	{
		$app = \Yee\Yee::getInstance();

		$data = array(
			"email" => $this->email,
			"password" => password_hash($this->password, PASSWORD_DEFAULT),
			);

		$app->db['db1']->insert('users', $data);
	}
}