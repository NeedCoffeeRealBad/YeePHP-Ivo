<?php
namespace App\Models;

class DisplayCommentsModel
{
	private $name;
	private $comment;

	public function printComments()
	{
		$app = \Yee\Yee::getInstance();

		$cols = Array ("name", "comment");
		$comments = $app->db['db1']->get("comments", null, $cols);
		  
		if ($app->db['db1']->count > 0)
		{
			return $comments;
		}
	}
}