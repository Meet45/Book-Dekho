<?php 

function safe_data($con,$str) {
	return mysqli_real_escape_string($con,$str);
}
