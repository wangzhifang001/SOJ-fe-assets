<?php
$ret = DB::selectAll("select username from user_info where (unix_timestamp(latest_login) < unix_timestamp(DATE_SUB(now(), INTERVAL 180 DAY))) or username not in (select username from contests_registrants)");
$result = json_encode($ret);
?>
