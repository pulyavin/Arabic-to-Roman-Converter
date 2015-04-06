<?php
class String {
	public static function prepare($string) {
		$explode = explode(",", $string);
		
		$numbers = [];
		foreach ($explode as $number) {
			if (!is_numeric(trim($number))) {
				return;
			}

			$numbers[] = $number;
		}

		return $numbers;
	}
}