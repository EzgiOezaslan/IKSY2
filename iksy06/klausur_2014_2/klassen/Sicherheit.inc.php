<?php

class Sicherheit {

	static function isNumericalInBoundary($str, $min, $max) {
		if (is_numeric($str) && floatval($str) >= $min && floatval($str) <= $max) {
			return true;
		}
		return false;
	}
}
?>