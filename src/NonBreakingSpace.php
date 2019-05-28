<?php

namespace Ksadam\Latte;

class NonBreakingSpace
{

	/**
	 * @param $text
	 *
	 * @return string
	 */
	public function __invoke($text) : string
	{
		return preg_replace('|(\s[ksvzouiaKSVZOUIA])\s|', '$1&nbsp;', $text);
	}
}