<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "orders".
 *
 * @property int $id
 * @property string $status
 * @property string $fio_kl
 * @property string $description
 * @property string $time_stamp
 * @property string|null $dismiss
 * @property int $count
 * @property int $user_id
 *
 * @property ProductsOrder[] $productsOrders
 * @property User $user
 */
class Orders extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'orders';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['status', 'description'], 'string'],
            [['fio_kl', 'description', 'count', 'user_id'], 'required'],
            [['time_stamp'], 'safe'],
            [['count', 'user_id'], 'integer'],
            [['fio_kl', 'dismiss'], 'string', 'max' => 255],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::class, 'targetAttribute' => ['user_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'status' => 'Status',
            'fio_kl' => 'Fio Kl',
            'description' => 'Комментарий к заказу',
            'time_stamp' => 'Time Stamp',
            'dismiss' => 'Dismiss',
            'count' => 'Count',
            'user_id' => 'User ID',
        ];
    }


    public function addItems($basket) {
        // получаем товары в корзине
        $products = $basket['products'];
        // добавляем товары по одному
        foreach ($products as $product_id => $product) {
            $item = new ProductsOrder();
            $item->order_id = $this->id;
            $item->product_id = $product_id;
            $item->insert();
        }
    }


    /**
     * Gets query for [[ProductsOrders]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProductsOrders()
    {
        return $this->hasMany(ProductsOrder::class, ['order_id' => 'id']);
    }

    /**
     * Gets query for [[User]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::class, ['id' => 'user_id']);
    }
}
