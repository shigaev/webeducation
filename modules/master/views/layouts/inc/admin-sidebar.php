<?php

use yii\helpers\Url;

?>
<div class="sidebar-admin d-flex flex-column h-100">

    <div class="sidebar-admin__header">
        <div class="user-admin"></div>
        <div class="user-admin__name">
            Admin
        </div>
    </div>
    <!-- /.sidebar-admin__header -->

    <div class="sidebar-admin__content">
        <div class="sidebar-admin__menu">

            <div class="sidebar-admin__list">
                <a class="sidebar-admin__item" href="<?= Url::to(['main/index']) ?>">
                    <i class="fa-solid fa-feather-pointed sidebar-admin__icon"></i>
                    <span class="sidebar-admin__link">
                        Статистика
                    </span>
                </a>
                <a class="sidebar-admin__item" href="<?= Url::to(['category/index']) ?>">
                    <i class="fa-solid fa-file sidebar-admin__icon"></i>
                    <span class="sidebar-admin__link">
                        Категории
                    </span>
                </a>
                <a class="sidebar-admin__item" href="<?= Url::to(['post/index']) ?>">
                    <i class="fa-solid fa-boxes-stacked sidebar-admin__icon"></i>
                    <span class="sidebar-admin__link">
                        Посты
                    </span>
                </a>
                <a class="sidebar-admin__item" href="<?= Url::to(['articles/index']) ?>">
                    <i class="fa-solid fa-boxes-stacked sidebar-admin__icon"></i>
                    <span class="sidebar-admin__link">
                        Статьи
                    </span>
                </a>
                <a class="sidebar-admin__item" href="<?= Url::to(['chapter/index']) ?>">
                    <i class="fa-solid fa-boxes-stacked sidebar-admin__icon"></i>
                    <span class="sidebar-admin__link">
                        Разделы
                    </span>
                </a>
            </div>

        </div>
        <!-- /.sidebar-admin__menu -->
    </div>
    <!-- /.sidebar-admin__content -->

    <!--<div class="sidebar-admin__footer mt-auto">
        <h4>Sidebar footer</h4>
    </div>-->
    <!-- /.sidebar-admin__footer -->
</div>
<!-- /.sidebar-admin -->