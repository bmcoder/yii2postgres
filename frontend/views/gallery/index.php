<?php
namespace common\models;
/* @var $this yii\web\View */
use yii;
use yii\yii\base\Model;
use yii\helpers\Html;
use yii\helpers\Url;
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
<div id="gallery">
<?php
//var_dump($varInView);
 foreach ($varInView as $item): ?>
  <!-- <div class="row"> -->
    <div class="col-sm-6 col-md-4">
     <div class="thumbnail">
          <a href="<?= 'http://yii2postgres/backend/web/uploads/'. $item->img ?>" data-lightbox-gallery="zenda-gallery"  class="thumbnail image">
              <img style="height: 250px;" src="<?= Yii::$app->params['backendUrl'] .'/'. $item->img; ?>">
          </a>
        <div class="caption">
         <h3><?php echo $item->description; ?></h3>
          <p>
              <b>Теги:</b>
              <?php $tags = $item->tags ?>
                <?php foreach ($tags as $tag => $val): ?>
                  <a href="<?= Yii::$app->getUrlManager()->createUrl(['gallery/index', 'tag' => $val]); ?>" class="btn btn-default"><?= $val ?></a>
                <?php endforeach ?>
          </p>
        </div>
      </div>
   </div>
  <!-- </div> -->
<?php endforeach ?>
</div>
