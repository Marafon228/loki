<?php

namespace app\controllers;

use app\models\Basket;
use app\models\Blog;
use app\models\Orders;
use app\models\Product;
use app\models\RegForm;
use app\models\User;
use Yii;
use yii\data\Pagination;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::class,
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        $products = Product::find()->orderBy(['id'=>SORT_DESC])->limit(6)->all();
        return $this->render('index',['products'=>$products]);
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $modelLogin = new LoginForm();
        if ($modelLogin->load(Yii::$app->request->post()) && $modelLogin->login()) {
            return $this->goBack();
        }

        $modelLogin->password = '';



        $modelReg = new RegForm();

        if ($this->request->isPost) {
            if ($modelReg->load($this->request->post()) && $modelReg->save()) {
                Yii::$app->user->login($modelReg);
                return $this->redirect(['/']);
            }
        } else {
            $modelReg->loadDefaultValues();
        }
        return $this->render('login', [
            'modelReg' => $modelReg,
            'modelLogin' => $modelLogin,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }
    public function actionShop()
    {

        //$products = Product::find()->all();
        $query = Product::find();
        $pages = new Pagination(['totalCount'=> $query->count(), 'pageSize'=>9]);
        $products = $query->offset($pages->offset)->limit($pages->limit)->all();
        return $this->render('shop',compact('products','pages'));
    }
    public function actionMyaccount()
    {

        if (Yii::$app->user->isGuest){
            return $this->redirect('/web/site/login');
        }
        else{

            $orders = Orders::find()->where(['user_id'=>Yii::$app->user->identity->id])->all();
            return $this->render('myaccount',['orders'=>$orders]);
        }

    }

    public function actionCheckout1()
    {
        $basket = (new Basket())->getBasket();
        $content = $basket;
        $order = new Orders();
       // $order->amount = $content['amount'];
        // сохраняем заказ в базу данных
        $order->insert();
        $order->addItems($content);
        // очищаем содержимое корзины
        $basket->clearBasket();

        return $this->render('checkout', ['basket' => $basket, 'order'=>$order]);
    }
    public function actionCheckout() {
        $basket = (new Basket())->getBasket();
        //$this->setMetaTags('Оформление заказа');
        $order = new Orders();
        /*
         * Если пришли post-данные, загружаем их в модель...
         */
        if ($order->load(Yii::$app->request->post())) {
                $basket = new Basket();
                $content = $basket->getBasket();

                $order->insert();
                $order->addItems($content);

                $basket->clearBasket();
                return $this->refresh();
        }
        return $this->render('checkout', ['order' => $order,'basket' => $basket]);
    }
    public function actionBlog()
    {
        $blogs = Blog::find()->all();
        return $this->render('blog',['blogs'=>$blogs]);
    }
}
