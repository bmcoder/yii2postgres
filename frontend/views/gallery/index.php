<?php
namespace common\models;
/* @var $this yii\web\View */
use yii;
use yii\yii\base\Model;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
?>

<h1>Галерея</h1>

<?php
$this->title = 'Галерея';
$this->params['breadcrumbs'][] = $this->title;

?>

<div class="site-about"></div>

<?php foreach ($varInView as $item): ?>
  <div class="row">
    <div class="col-sm-6 col-md-4">
      <div class="thumbnail">
        <img src="<?= Yii::$app->params['backendUrl'] .'/'. $item->img; ?>">
        <div class="caption">
          <h3><?php echo $item->description; ?></h3>
          <p>
              <b>Теги:</b>
              <?php $tags = $item->tags ?>
                <?php foreach ($tags as $tag => $val): ?>
                  <?= $val ?>
                <?php endforeach ?>
          </p>
        </div>
      </div>
    </div>
  </div>
<?php endforeach ?>
