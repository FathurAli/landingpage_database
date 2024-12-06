<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\Services;

class servicesController extends Controller
{
    public function index()
    {

        $services1 = Services::find(1);
        $services2 = Services::find(2);
        $services3 = Services::find(3);
        $services4 = Services::find(4);
        $services5 = Services::find(5);
        $services6 = Services::find(6);
        $services7 = Services::find(7);
        $services8 = Services::find(8);
        $services9 = Services::find(9);
        $services10 = Services::find(10);
        $services11 = Services::find(11);
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

        return view('services.index', compact(
            'services1',
            'services2',
            'services3',
            'services4',
            'services5',
            'services6',
            'services7',
            'services8',
            'services9',
            'services10',
            'services11',
            'menus',
            'services',
            'pricingPlans'
        ));
    }
}
