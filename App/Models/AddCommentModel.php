<?php
namespace App\Models;

class AddCommentModel
{
	private $name;
	private $comment;

	public function __construct($name, $comment)
	{
		$this->name = $name;
		$this->comment = $comment;
	}

	public function comment()
	{
		if ($this->validateEmptyFields() == false)
		{
			return false;
		}
		if ($this->validateFilledFields() == false)
		{
			return false;
		}
		return true;
	}

	public function validateEmptyFields()
	{
		if(empty($this->name) || empty($this->comment))
		{
			return false;
		}
		else
		{
			return true;
		}

	}

	public function validateFilledFields()
	{
		$nameLenght = strlen($this->name);
		$commentLenght = strlen($this->comment);

		if($nameLenght < 2 && $commentLenght < 2)
		{
			return false;
		} 
		return true;
	}

	public function insertCommentsInDb()
	{
		$app = \Yee\Yee::getInstance();

		$data = array(
			"name" => $this->name,
			"comment" => $this->comment
			);

		$app->db['db1']->insert('comments', $data);
	}


}

