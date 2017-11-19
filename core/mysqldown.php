<?php
	//  MySQLの切断
	if(!mysqli_close($Link)){
		exit("MySQL：DB切断失敗");
	}
?>
