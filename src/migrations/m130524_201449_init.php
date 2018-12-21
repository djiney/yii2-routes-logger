<?php use yii\db\Migration;

class m130524_201449_init extends Migration
{
	/**
	 * {@inheritdoc}
	 */
	public function up()
	{
		$this->createTable('{{%routes_log}}', [
			'id'      => $this->primaryKey(),
			'route'   => $this->text(),
			'user_id' => $this->bigInteger()->notNull(),
			'date'    => $this->dateTime()->notNull()->defaultExpression('NOW()'),
		]);
	}

	/**
	 * {@inheritdoc}
	 */
	public function down()
	{
		$this->dropTable('{{%routes_log}}');
	}
}
