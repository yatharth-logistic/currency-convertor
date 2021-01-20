<?php

namespace Currency;

class Converter{
	public static function inrToUsd($inr){
		return ($inr / 72);
	}

	public static function usdToInr($usd){
		return ($usd * 72);
	}

}