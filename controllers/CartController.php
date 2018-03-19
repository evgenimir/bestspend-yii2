<?php
/**
 * Created by PhpStorm.
 * User: Zheka1
 * Date: 20.02.2018
 * Time: 16:58
 */

namespace app\controllers;
use app\models\Product;
use app\models\Cart;
use app\models\Order;
use app\models\OrderItems;
use Yii;


class CartController extends AppController
{

    /**
     * Add action.
     *
     * @return string
     */
    public function actionAdd()
    {
        $id = Yii::$app->request->get('id');
        $qty = (int)Yii::$app->request->get('qty');
        $qty = !$qty ? 1 : $qty; // Если передалось false, то добавляем один товар, если пришло integer то добавляем число товаров qty
        $product = Product::findOne($id);
        if (empty($product)) return false;
        $session = Yii::$app->session;
        $session->open();
        $cart = new Cart();
        $cart->addToCart($product, $qty);
        $this->layout = false;
        return $this->render('cart-modal', [
            'session' => $session,
        ]);
    }

    /**
     * Clear action.
     *
     * @return string
     */
    public function actionClear()
    {
        $session = Yii::$app->session;
        $session->open();
        $session->remove('cart');
        $session->remove('cart.qty');
        $session->remove('cart.sum');
        $this->layout = false;
        return $this->render('cart-modal', [
            'session' => $session,
        ]);
    }

    /**
     * DelItem action.
     *
     * @return string
     */
    public function actionDelItem()
    {
        $id = Yii::$app->request->get('id');
        // debug($id);
        $session = Yii::$app->session;
        $session->open();
        $cart = new Cart();
        $cart->reCalc($id);
        $this->layout = false;
        return $this->render('cart-modal', [
            'session' => $session,
        ]);
    }

    /**
     * Show action.
     *
     * @return string
     */
    public function actionShow()
    {
        $id = Yii::$app->request->get('id');
        $session = Yii::$app->session;
        $session->open();
        $this->layout = false;
        return $this->render('cart-modal', [
            'session' => $session,
        ]);
    }

    /**
     * Displays cart page.
     *
     * @return string
     */
    public function actionView()
    {
        $session = Yii::$app->session;
        $session->open();
        $this->setMeta('Корзина');
        $order = new Order();

        // if form is submit get request and save order
        if ($order->load(Yii::$app->request->post())) {
            $order->qty = $session['cart.qty'];
            $order->sum = $session['cart.sum'];

            if ($order->save()) {
                Order::saveOrderItems($session['cart'], $order->id);

                Yii::$app->mailer->compose('order',
                    ['session' => $session])
                    ->setFrom(['username@mail.ru' => 'BestSpend.ru'])
                    ->setTo($order->email)
                    ->setSubject('Заказ')
                    ->send();

                Yii::$app->session->setFlash('success', 'Ваш заказ принят, менеджер скоро свяжется с Вами');
                // clear session if it is success
                $session->remove('cart');
                $session->remove('cart.qty');
                $session->remove('cart.sum');
                return $this->refresh();
            } else {
                Yii::$app->session->setFlash('error', 'Извините, произошла ошибка');
            }
        }
        return $this->render('view', [
            'session' => $session,
            'order' => $order,
        ]);
    }

    /**
     * Function saves each product to order_item table
     *
     * @param $items array
     * @param $order_id string
     *
     */
    protected function saveOrderItems($items, $order_id)
    {
        foreach($items as $id => $item){
            $order_items = new OrderItems();
            $order_items->order_id = $order_id;
            $order_items->product_id = $id;
            $order_items->name = $item['name'];
            $order_items->price = $item['price'];
            $order_items->qty_item = $item['qty'];
            $order_items->sum_item = $item['qty'] * $item['price'];
            $order_items->save();
        }
    }

}