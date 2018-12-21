<?php namespace djiney\routes\components;

use djiney\routes\components\interfaces\RoutesLoggerFilterInterface;
use Yii;

class RoutesLoggerFilter implements RoutesLoggerFilterInterface
{
	public function enableLogging(string $url)
	{
		return !Yii::$app->user->isGuest;
	}
}