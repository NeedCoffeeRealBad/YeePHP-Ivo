<?php
namespace App\Models;

class LoginModel
{
	private $email;
	private $password;
	private $app;
	private $userEmailPass;

	public function __construct($email, $password)
	{
		$this->email = $email;	
		$this->password = $password;

		$this->app = \Yee\Yee::getInstance();

		$this->userEmailPass = $this->app->db['db1']->where('email', $this->email)->getOne('users');
	}

    public function login()
    {
        if($this->validateEmpty() == true)
        {
            return false;
        }
        if($this->validateLogin()  == false)
        {
            return false;
        }
        return true;
    }

	  /**
     * Validates the email and password from the login form with the Database.
     * @return boolean  TRUE -> If email and password match.
     * @return boolean  FALSE -> If email and password doesn't match.
     */
    public function validateLogin()
    {
        if ($this->checkUserExist()) 
        {
            if ($this->checkPasswordExist()) 
            {
                return true;
            }
        }
        return false;
    }

	 /**
     * Returns whether the password matches from the database or not.
     * @return boolean TRUE -> If the password is correct.
     * @return boolean FALSE -> If the password is incorrect.
     */
    public function checkPasswordExist()
    {
        $hash = $this->userEmailPass['password'];
        if (password_verify($this->password, $hash)) 
        {
        	return true;
        }
        else
        {
            return false;
        }
    }

	/**
     * Returns whether an user exists or not.
     * @return boolean TRUE -> If user exists.
     * @return boolean FALSE -> If user doesn't exist.
     */
	public function checkUserExist()
	{
        if ($this->userEmailPass['email'] === $this->email) 
        {
            return true;
        }
        else
        {
            return false;
        }
	}

    public function validateEmpty()
    {
        return empty($this->email) || empty($this->password);
    }
	    
}