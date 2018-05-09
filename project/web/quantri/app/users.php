<?php
/**
* 
*/
class users extends db
{
	
	public function login($user,$pass)
	{
		$sql = "SELECT * FROM user WHERE username = '".$user."'";
		$result = self::$conn->query($sql);
		if ($result->num_rows < 1 ) {
			return false;
		}
		else
		{
			$row = $result->fetch_assoc();
			if($row['password'] != $pass)
			{
				return false;
			}
			else
			{
				return true;
			}
		}
	}
}
?>