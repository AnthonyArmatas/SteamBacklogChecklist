<?php
	
	function getGameList($db){
	//Retives the entire list of game data from the table tag
	$retriveGameList = $db->prepare("SELECT * FROM SBCDatabase.game ORDER BY appid ASC");
	$retriveGameList->execute();
	return $gameArray = $retriveGameList->fetchAll(PDO::FETCH_ASSOC);
	}
	