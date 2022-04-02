<?php

class Sicherheit {

	static function isCorrectNumericalString($str) {
		if (is_numeric($str)) {
			return true;
		}
		return false;
	}

	static function isNumericalInBoundary($str, $min, $max) {
		if (is_numeric($str) && floatval($str) >= $min && floatval($str) <= $max) {
			return true;
		}
		return false;
	}

	static function isNumericalMin($str, $min) {
		if (is_numeric($str) && floatval($str) >= $min) {
			return true;
		}
		return false;
	}

	static function isCorrectAusstattung($str) {
		if ($str == "gehoben" || $str == "mittel" || $str == "einfach") {
			return true;
		}
		return false;
	}
}
?>