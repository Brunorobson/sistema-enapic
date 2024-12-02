<?php

namespace App\Main;

class SidebarPanel
{
    public static function dashboard()
    {
        return [
            'title' => 'Início',
            'items' => [
                [
                    'home_index' => [
                        'title' => 'Início',
                        'route_name' => 'home/index',
                        'module' => 'dashboard',
                        'icon' => 'fa-solid fa-house'
                    ],
                    'dashboard_event' => [
                        'title' => 'Eventos',
                        'route_name' => 'dashboard/events',
                        'module' => 'events',
                        'icon' => 'fa-solid fa-calendar-days'
                    ],
                    'dashboard_submission' => [
                        'title' => 'Submissões',
                        'route_name' => 'dashboard/submissions',
                        'module' => 'submissions',
                        'icon' => 'fa-solid fa-file-lines',
                    ],
                    'dashboard_inscription' => [
                        'title' => 'Inscrições ',
                        'route_name' => 'dashboard/inscriptions',
                        'module' => 'inscriptions',
                        'icon' => 'fa-solid fa-user-plus'
                    ],
                    'dashboard_avaliation' => [
                        'title' => 'Avaliações',
                        'route_name' => 'dashboard/avaliations',
                        'module' => 'avaliantions',
                        'icon' => 'fa-solid fa-star'
                    ],

                ],
            ]
        ];
    }


    public static function settings(): array
    {
        return [
            'title' => 'Configurações',
            'items' => [
                [
                    'settings_profile' => [
                        'title' => 'Meu Perfil',
                        'route_name' => 'settings/profile',
                        'module' => 'profile',
                        'icon' => 'fa-solid fa-address-card',
                    ],
                    'settings_users' => [
                        'title' => 'Usuários',
                        'route_name' => 'settings/users',
                        'module' => 'users',
                        'icon' => 'fa-solid fa-users-gear',
                    ],
                    'settings_roles' => [
                        'title' => 'Tipos de Usuários',
                        'route_name' => 'settings/roles',
                        'module' => 'roles',
                        'icon' => 'fa-solid fa-circle-arrow-right',
                    ],
                    // 'dashboard_criterias' => [
                    //     'title' => 'Critérios',
                    //     'route_name' => 'dashboard/criterias',
                    //     'module' => 'criterias',
                    //     'icon' => 'fa-solid fa-star'
                    // ],
                ],
            ],
        ];
    }

    public static function all()
    {
        return [self::settings(), self::dashboard()];
    }
}
