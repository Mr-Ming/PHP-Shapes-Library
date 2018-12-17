<?php

class ValidationHelper {

	static public function validateNumber($number) {
		if ($number <= 0) {
			throw new Exception("Invalid Number:". $number);
		} elseif (!is_int($number) && !is_float($number)) {
			throw new Exception("Invalid Type:". gettype($number));
		}
	}
	
}