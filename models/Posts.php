<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "posts".
 *
 * @property integer $id_users
 * @property string $name_post
 * @property string $content
 * @property string $date_create
 * @property integer $id
 */
class Posts extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'posts';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_users'], 'integer'],
            [['name_post', 'date_create'], 'required'],
            [['date_create'], 'safe'],
            [['name_post'], 'string', 'max' => 30],
            [['content'], 'string', 'max' => 500],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_users' => 'Id Users',
            'name_post' => 'Name Post',
            'content' => 'Content',
            'date_create' => 'Date Create',
            'id' => 'ID',
        ];
    }
}
