<?php

use yii\helpers\Url;

?>
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p><?= Yii::$app->getUser()->identity->username ?></p>
                <!-- Status -->
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- search form (Optional) -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
            </div>
        </form>
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu" data-widget="tree">
            <!-- Optionally, you can add icons to the links -->
            <li>
                <a href="<?= Url::to(['main/index']) ?>">
                    <i class="fa fa-bar-chart"></i>
                    <span>Статистика сайта</span>
                </a>
            </li>
            <li>
                <a href="<?= Url::to(['category/index']) ?>"><i class="fa fa-cubes">
                    </i> <span>Категории</span>
                </a>
            </li>
            <li>
                <a href="<?= Url::to(['post/index']) ?>"><i class="fa fa-edit">
                    </i> <span>Посты</span>
                </a>
            </li>
            <li>
                <a href="<?= Url::to(['chapter/index']) ?>"><i class="fa fa-inbox">
                    </i> <span>Разделы</span>
                </a>
            </li>
            <!--<li class="treeview">
                <a href="#">
                    <i class="fa fa-link">
                    </i> <span>Multilevel</span>
                    <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="#">Link in level 2</a></li>
                    <li><a href="#">Link in level 2</a></li>
                </ul>
            </li>-->
        </ul>
        <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>