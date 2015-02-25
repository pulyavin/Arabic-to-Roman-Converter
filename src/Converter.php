<?php
class Converter {
	public static function getRoman($arabic) {
		if ($arabic > 3999 || $arabic < 1) {
			return false;
		}

		$prepare = [
			// единицы
			["I", "V"],
			// десятки
			["X", "L"],
			// сотни
			["C", "D"],
			// тысячи
			["M"],
		];

		$roman = null;

		for ($i = 0, $count = strlen($arabic); $i < $count; $i++) {
			$letter = (integer) substr($arabic, -(1 + $i), 1);

			// [0, 3]
			if ($letter <= 3) {
				$plus = str_repeat($prepare[$i][0], $letter);
			}
			// [4, 5)
			else if ($letter < 5) {
				$plus = str_repeat($prepare[$i][0], 5 - $letter) . $prepare[$i][1];
			}
			// [5, 8]
			else if ($letter <= 8) {
				$plus = $prepare[$i][1] . str_repeat($prepare[$i][0], $letter - 5);
			}
			// [9]
			else {
				$plus = $prepare[$i][0] . $prepare[$i + 1][0];
			}

			$roman = $plus . $roman;
		}

		return $roman;
	}
}