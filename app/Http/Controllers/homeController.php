<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;

class homeController extends Controller
{
    public function index()
    {
        // Ambil semua menu dan submenu
        $menus = Menu::whereNull('parent_id')->with('children')->orderBy('order')->get();

        // Dummy services dan pricing plans
        $services = [
            [
                'icon' => 'ion-ios-pulse',
                'title' => 'Keep Pulse Going',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
            ],
            [
                'icon' => 'ion-ios-infinite-outline',
                'title' => 'Unlimited Options',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
            ],
        ];

        $pricingPlans = [
            [
                'title' => 'Basic',
                'price' => '$35.99 monthly',
                'features' => ['Feature 1', 'Feature 2', 'Feature 3'],
            ],
            [
                'title' => 'Advanced',
                'price' => '$55.99 monthly',
                'features' => ['Feature 1', 'Feature 2', 'Feature 3'],
            ],
        ];

        return view('home.index', compact('menus', 'services', 'pricingPlans'));
    }
}
