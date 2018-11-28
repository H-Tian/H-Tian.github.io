<?php 

class Common
{	
	var $conn;
	var $debug;
	
	var $server="database.cse.tamu.edu"; // that is good, don't touch
	var $dbname="username usually, watch, called internal name for TAMU students";
	var $user="tianh";
	var $pass="12345"; //Changing my password to a lame one
			
	function Common($debug)
	{
		$this->debug = $debug; 
		$rs = $this->connect("tianh-db4"); // db name really here
		//echo ("Connected to db3");
		return $rs;
	}

// %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% */
	
	function connect($db)// connect to MySQL DB Server
	{
		// Create connection
		$this->conn = new mysqli($this->server, $this->user, $this->pass);

		// Check connection
		if ($this->conn->connect_error) { die("Connection failed: " . $this->conn->connect_error . "<br>\n"); } 
		//echo "Connected successfully<br>\n";
	}


// %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% */

	function executeQuery($sql, $filename) // execute query
	{
		// AS OF 6/17, the DB must be apart of the query such as:
		// INSERT INTO `slupoli`.`wishlist` (`id`, `item`, `cost`) VALUES (NULL, 'airplane - G5', '200000')
		// notice 'slupoli' part

		if($this->debug == true) {} //echo("Query-> <br>$sql<br>\n"); }
		$rs = $this->conn->query($sql) or die("Could not execute query '$sql' in $filename<br>\n"); 
		return $rs;
	}			

} // ends class, NEEDED!!

?>