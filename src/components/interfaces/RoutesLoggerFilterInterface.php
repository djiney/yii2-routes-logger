<?php namespace djiney\routes\components\interfaces;

interface RoutesLoggerFilterInterface
{
	/**
	 * @param string $url
	 * @return boolean
	 */
	public function enableLogging(string $url);
}