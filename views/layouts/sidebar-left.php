<?php
/**
 * Created by PhpStorm.
 * User: ADMIN
 * Date: 2020-01-22
 * Time: 17:44
 */

echo \yii\widgets\Menu::widget([
    'items' => [
        ['label' => 'Критерії оцінювання навчальних досягнень учнів', 'url' => ['site/index']],
        ['label' => 'Інваріативні модулі', 'url' => ['product/index'], 'template' => '<a href="#" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-1">{label}</a>', 'items' => [
            ['label' => '5 клас', 'url' => ['invmodules/1']],
            ['label' => '6 клас', 'url' => ['invmodules/2']],
            ['label' => '7 клас', 'url' => ['invmodules/3']],
            ['label' => '8 клас', 'url' => ['invmodules/4']],
            ['label' => '9 клас', 'url' => ['invmodules/5']],
        ]],
        ['label' => 'Варіативні модулі', 'url' => ['site/index']],
        ['label' => 'Електронні посібники', 'url' => ['site/index']],
        ['label' => 'Тести', 'url' => ['site/index']],
        ['label' => 'Тести', 'url' => ['site/index']],
        ['label' => 'Мої відео', 'url' => ['site/index']],
        ['label' => 'Мої фото', 'url' => ['site/index']],
    ],
    'submenuTemplate' => "\n<ul class='collapse' id='navbar-1'>\n{items}\n</ul>\n",
]);