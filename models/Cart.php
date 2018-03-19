<?php
/**
 * Created by PhpStorm.
 * User: Zheka1
 * Date: 18.02.2018
 * Time: 13:18
 */

namespace app\models;

use yii\db\ActiveRecord;

class Cart extends ActiveRecord
{

    public function behaviors()
    {
        return [
            'image' => [
                'class' => 'rico\yii2images\behaviors\ImageBehave',
            ]
        ];
    }

    public function addToCart($product, $qty = 1)
    {
        $mainImg = $product->getImage();
        if(isset($_SESSION['cart'][$product->id])) {
            $_SESSION['cart'][$product->id]['qty'] += $qty;
        } else {
            $_SESSION['cart'][$product->id] = [
                'qty' => $qty,
                'name' => $product['name'],
                'price' => $product['price'],
                'img' => $mainImg->getUrl('x100'),
                'alias' => $product['alias'],
            ];
        }

        /*
         * Помещаем количество каждого товара в сессию и если товар уже в сессии, то прибавляем количество
         */
        $_SESSION['cart.qty'] = isset($_SESSION['cart.qty']) ? $_SESSION['cart.qty'] + $qty : $qty;

        /*
         * Помещаем стоимость количества товаров в сессию и если стоимость уже в сессии, то прибавляем цену товара умноженную на количество
         */
        $_SESSION['cart.sum'] = isset($_SESSION['cart.sum']) ? ($_SESSION['cart.sum']) + $qty * $product['price'] : $qty * $product['price'];

    }

    /*
     * Подсчет корзины после удаления позиции
     */
    public function reCalc($id)
    {
        /*
         * Если элемент существует, отнимаем количество этого товара и сумму
         */
        if(isset($_SESSION['cart'][$id])) {
            $qtyMinus = $_SESSION['cart'][$id]['qty'];
            $sumMinus = $qtyMinus * $_SESSION['cart'][$id]['price'];
            $_SESSION['cart.qty'] -= $qtyMinus;
            $_SESSION['cart.sum'] -= $sumMinus;
            unset($_SESSION['cart'][$id]);
        } else {
            return false;
        }
    }

}