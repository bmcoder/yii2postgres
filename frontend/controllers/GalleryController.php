<?php
namespace frontend\controllers;

use Yii;
//use yii\base\InvalidArgumentException;
//use yii\web\BadRequestHttpException;
use yii\web\Controller;
//use yii\filters\VerbFilter;
//use yii\filters\AccessControl;
//use common\models\LoginForm;
use common\models\Gallery;
//use frontend\models\PasswordResetRequestForm;
//use frontend\models\ResetPasswordForm;
//use frontend\models\SignupForm;

class GalleryController extends Controller
{
    public function actionIndex()
    {
      if(isset($_REQUEST['tag'])) // если выбран фильтр тегов
      {
        $array = Gallery::getTag($_REQUEST['tag']);
        return $this->render('index',['varInView' => $array]);
      }
      else
      {
        $array = Gallery::getAll();
        return $this->render('index',['varInView' => $array]);
      }
    }

}
