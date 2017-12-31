<?php

include("mysql.php");
//DELETE FROM `website` WHERE 1
 $sql = "delete from website where id = $_GET[id]";
 mysql_query($sql);

