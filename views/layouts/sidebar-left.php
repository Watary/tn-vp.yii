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

        ['label' => 'Інваріативні модулі', 'url' => ['invmodules'],
            'template' => '<a href="#" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-1">{label}</a>',
            'items' => [
                ['label' => '5 клас', 'url' => ['invmodule/1']],
                ['label' => '6 клас', 'url' => ['invmodule/2']],
                ['label' => '7 клас', 'url' => ['invmodule/3']],
                ['label' => '8 клас', 'url' => ['invmodule/4']],
                ['label' => '9 клас', 'url' => ['invmodule/5']],
            ],
            'submenuTemplate' => "\n<ul class='collapse' id='navbar-1'>\n{items}\n</ul>\n",
        ],

        ['label' => 'Варіативні модулі', 'url' => ['modules'],
            'template' => '<a href="#" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-2">{label}</a>',
            'items' => [
                ['label' => '5 - 6 клас', 'url' => ['module/1']],
                ['label' => '7 - 9 клас', 'url' => ['module/2']],
                ['label' => '10 - 11 клас', 'url' => ['module/3']],
            ],
            'submenuTemplate' => "\n<ul class='collapse' id='navbar-2'>\n{items}\n</ul>\n",
        ],

        ['label' => 'Електронні посібники', 'url' => ['books'],
            'template' => '<a href="#" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-3">{label}</a>',
            'items' => [
                ['label' => 'Трудове навчання 5 клас', 'url' => ['book/1']],
                ['label' => 'Трудове навчання 6 клас', 'url' => ['book/2']],
                ['label' => 'Трудове навчання 7 клас', 'url' => ['book/3']],
                ['label' => 'Трудове навчання 8 клас', 'url' => ['book/4']],
                ['label' => 'Трудове навчання 9 клас', 'url' => ['book/5']],
                ['label' => 'Технології 10 клас', 'url' => ['book/6']],
                ['label' => 'Технології 11 клас', 'url' => ['book/7']],
            ],
            'submenuTemplate' => "\n<ul class='collapse' id='navbar-3'>\n{items}\n</ul>\n",
        ],

        ['label' => 'Тести', 'url' => ['tests'],
            'template' => '<a href="#" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-4">{label}</a>',
            'items' => [
                ['label' => 'Трудове навчання 5 клас', 'url' => ['tests/1']],
                ['label' => 'Трудове навчання 6 клас', 'url' => ['tests/2']],
                ['label' => 'Трудове навчання 7 клас', 'url' => ['tests/3']],
                ['label' => 'Трудове навчання 8 клас', 'url' => ['tests/4']],
                ['label' => 'Трудове навчання 9 клас', 'url' => ['tests/5']],
                ['label' => 'Технології 10 клас', 'url' => ['test/6']],
                ['label' => 'Технології 11 клас', 'url' => ['test/7']],
            ],
            'submenuTemplate' => "\n<ul class='collapse' id='navbar-4'>\n{items}\n</ul>\n",
        ],

        ['label' => 'Проекти', 'url' => ['projects'],
            'template' => '<a href="#" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-5">{label}</a>',
            'items' => [
                ['label' => 'Трудове навчання 5 клас', 'url' => ['project/1']],
                ['label' => 'Трудове навчання 6 клас', 'url' => ['project/2']],
                ['label' => 'Трудове навчання 7 клас', 'url' => ['project/3']],
                ['label' => 'Трудове навчання 8 клас', 'url' => ['project/4']],
                ['label' => 'Трудове навчання 9 клас', 'url' => ['project/5']],
                ['label' => 'Технології 10 клас', 'url' => ['project/6']],
                ['label' => 'Технології 11 клас', 'url' => ['project/7']],
            ],
            'submenuTemplate' => "\n<ul class='collapse' id='navbar-5'>\n{items}\n</ul>\n",
        ],

        ['label' => 'Мої відео', 'url' => ['videos/index'],
            'template' => '<a href="#" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-6">{label}</a>',
            'items' => [
                ['label' => '5 клас', 'url' => ['videos/1']],
            ],
            'submenuTemplate' => "\n<ul class='collapse' id='navbar-6'>\n{items}\n</ul>\n",
        ],

        ['label' => 'Мої фото', 'url' => ['gallery']],
    ],

]);