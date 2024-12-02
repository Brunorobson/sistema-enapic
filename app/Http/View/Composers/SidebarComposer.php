<?php

namespace App\Http\View\Composers;

use App\Main\MainSidebar;
use App\Main\SidebarPanel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\View\View;

class SidebarComposer
{
    /**
     * Bind data to the view.
     *
     * @param View $view
     * @return void
     */
    public function compose(View $view)
    {
        if (!is_null(request()->route())) {
            $pageName = request()->route()->getName();
            $pageNameExploded = explode('/', $pageName);
            $pageName = $pageNameExploded[0];
            if(isset($pageNameExploded[1])) {
                $pageName .= '/' . $pageNameExploded[1];
            }
            $routePrefix = $pageNameExploded[0] ?? '';

            $authorizedModules = [];
            $user = Auth::user();
            if ($user) {
                $authorizedModules = Cache::get('modules::of::user::' . $user->id) ?? [];
            }

            $mainSidebar = $this->mainAuthorize($authorizedModules);

            if(!empty($mainSidebar)) {
                if(in_array($routePrefix, array_keys($mainSidebar))) {
                    $view->with('sidebarMenu', $this->panelAuthorize(SidebarPanel::$routePrefix(), $authorizedModules));
                } else {
                    $first = $mainSidebar[array_key_first($mainSidebar)]['route_name'];
                    $view->with('sidebarMenu', $this->panelAuthorize(SidebarPanel::$first(), $authorizedModules));
                }
            }

            $view->with('mainSidebar', $mainSidebar);
            // $view->with('allSidebarItems', SidebarPanel::all());
            $view->with('pageName', $pageName);
            $view->with('routePrefix', $routePrefix);
        }
    }

    public function mainAuthorize($modules)
    {
        $mainSidebars = MainSidebar::all();
        $authorized = [];
        foreach($mainSidebars as $key => $sidebar) {
            $panel = SidebarPanel::$key();
            $panelAuthorized = $this->panelAuthorize($panel, $modules);
            if(!empty($panelAuthorized['items'])) {
                $authorized[$key] = $sidebar;
            }
        }
        return $authorized;
    }

    public function panelAuthorize($panel, $modules)
    {
        $authorized = [];
        foreach ($panel['items'] as $parts) {
            $authorizedPart = [];
            foreach($parts as $partKey => $item) {
                if(isset($item['submenu'])) {
                    $authorizedSubmenu = [];
                    foreach($item['submenu'] as $submenuKey => $subItem) {
                        if(in_array($subItem['module'], $modules)) {
                            $authorizedSubmenu[$submenuKey] = $subItem;
                        }
                    }
                    if(!empty($authorizedSubmenu)) {
                        $item['submenu'] = $authorizedSubmenu;
                        $authorizedPart[$partKey] = $item;
                    }
                } else {
                    if(in_array($item['module'], $modules)) {
                        $authorizedPart[$partKey] = $item;
                    }
                }

            }
            if(!empty($authorizedPart)) {
                $authorized[] = $authorizedPart;
            }
        }

        $panel['items'] = $authorized;

        return $panel;

    }
}
