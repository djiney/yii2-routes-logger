<?php namespace djiney\routes\models;

use Yii;

/**
 * This is the model class for table "routes_log".
 *
 * @property int $id
 * @property string $route
 * @property int $user_id
 * @property string $date
 */
class RoutesLog extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'routes_log';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['route'], 'string'],
            [['user_id'], 'required'],
            [['user_id'], 'default', 'value' => null],
            [['user_id'], 'integer'],
            [['date'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id'      => 'ID',
            'route'   => 'Route',
            'user_id' => 'User ID',
            'date'    => 'Date',
        ];
    }
}
