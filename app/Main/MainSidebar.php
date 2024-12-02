<?php

namespace App\Main;

class MainSidebar
{
    public static function all()
    {
        return [
            'dashboard' => [
                'title' => 'Início',
                'route_name' => 'dashboard',
                'default_route' => 'home/index',
                'icon' => 'home'
            ],
            /* 'registers' => [
                 'title'         => 'Cadastros',
                 'route_name'    => 'registers',
                 'default_route' => 'registers/persons',
                 'icon'          => 'register'
             ],
             */
            'settings' => [
                'title' => 'Configurações',
                'route_name' => 'settings',
                'default_route' => 'settings/profile',
                'icon' => 'setting'
            ],
        ];
    }
}
