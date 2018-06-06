<?php

class View
{
	public static function render($view, $data = "")
	{
		require "./App/Views/".$view.".php";
	}
}