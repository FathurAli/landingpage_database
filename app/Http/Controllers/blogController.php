<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\Blog;

class blogController extends Controller
{
    public function index()
    {
        $blog1 = Blog::find(1);
        $blog2 = Blog::find(2);
        $blog3 = Blog::find(3);
        $blog4 = Blog::find(4);
        $blog5 = Blog::find(5);
        $blog16 = Blog::find(16);
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

        return view('blog.index', compact(
            'blog1',
            'blog2',
            'blog3',
            'blog4',
            'blog5',
            'blog16',
            'menus',
            'services',
            'pricingPlans'
        ));
    }
}
