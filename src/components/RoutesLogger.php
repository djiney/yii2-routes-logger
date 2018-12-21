<?php namespace djiney\routes\components;

use djiney\routes\components\interfaces\RoutesLoggerFilterInterface;
use djiney\routes\models\RoutesLog;
use Yii;
use yii\base\BootstrapInterface;
use yii\web\Application;

class RoutesLogger implements BootstrapInterface
{
	public $filter = null;

	private $url = null;

	/**
	 * @param Application $app
	 */
	public function bootstrap($app)
	{
		$this->url = $app->request->url;

		if (!$this->enableLogging()) {
			return;
		}

		$this->log();
	}

	/**
	 * @return boolean
	 */
	private function log()
	{
		$model = new RoutesLog([
			'user_id' => Yii::$app->user->getId(),
			'route'   => $this->url,
		]);

		return $model->save();
	}

	/**
	 * @return bool
	 */
	private function enableLogging()
	{
		/** @var RoutesLoggerFilterInterface $filter */
		$filter = Yii::createObject($this->filter);

		if (!$filter instanceof RoutesLoggerFilterInterface) {
			return false;
		}

		return $filter->enableLogging($this->url);
	}
}