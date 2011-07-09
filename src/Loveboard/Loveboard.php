<?php

namespace Loveboard;

use Pusher\Pusher;

class Loveboard extends \Sqlite3
{

	public function __construct($db_file)
	{
		$this->open($db_file);
	}
	
	public function addLove($data)
	{
		$id = uniqid();
		
		$stmt = $this->prepare('INSERT INTO loves VALUES(:id, :action, :page, :user_agent, datetime(\'now\'))');
		$stmt->bindValue(':id', $id);
		$stmt->bindValue(':action', $data['action']);
		$stmt->bindValue(':page', $data['page']);
		$stmt->bindValue(':user_agent', $data['user_agent']);
		$result = $stmt->execute();
		
		if (false === $result)
		{
			return array('success' => false);
		}
		
		$stmt = $this->prepare('SELECT * FROM loves WHERE id = :id');
		$stmt->bindValue(':id', $id);
		$result = $stmt->execute();
		
		if (false === $result)
		{
			return array('success' => false);
		}
		
		$data = $result->fetchArray(SQLITE3_ASSOC);
		
		$pusher = new Pusher(PUSHER_KEY, PUSHER_SECRET, PUSHER_APP_ID);
		$pusher->trigger('love', 'create', $data);
		
		return array('success' => true);
	}
	
	public function getLoves()
	{
		$rows = array();
		
		$stmt = $this->prepare('SELECT * FROM loves ORDER BY created_at DESC');
		$result = $stmt->execute();
		while ($row = $result->fetchArray(SQLITE3_ASSOC))
		{
			$rows[] = $row;
		}
		return $rows;
	}

}
