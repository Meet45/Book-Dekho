<?php

$conn = mysqli_connect("localhost", "root", "", "ecom");

function row_count($result)
{
	return mysqli_num_rows($result);
}

function escape($string)
{
	global $conn;
	return mysqli_real_escape_string($conn, $string);
}

function query($sql)
{
	global $conn;
	return mysqli_query($conn, $sql);
}

function confirm($result)
{
	global $conn;
	if (!$result) {
		die("QUERY FAILED" . mysqli_error($conn));
	}
}

function fetch_array($result)
{
	global $conn;
	return mysqli_fetch_array($result);
}
