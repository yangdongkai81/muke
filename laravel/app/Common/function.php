<?php

function lastSql()
{
	DB::connection()->enableQueryLog();
	
	$sql = DB::getQueryLog();

	$query = end($sql);

	return $query;
}