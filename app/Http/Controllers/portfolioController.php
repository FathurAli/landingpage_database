<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\Portfolio;

class portfolioController extends Controller
{
    public function index()
    {
        $portfolio1 = Portfolio::find(1);
        $portfolio2 = Portfolio::find(2);
        $portfolio3 = Portfolio::find(3);
        $portfolio4 = Portfolio::find(4);
        $portfolio5 = Portfolio::find(5);
        $portfolio6 = Portfolio::find(6);
        $portfolio7 = Portfolio::find(7);
        $portfolio8 = Portfolio::find(8);
        $portfolio9 = Portfolio::find(9);
        $portfolio10 = Portfolio::find(10);
        $portfolio11 = Portfolio::find(11);
        $portfolio12 = Portfolio::find(12);
        $portfolio13 = Portfolio::find(13);// Assuming you're going to use $portfolio12
        $portfolio14 = Portfolio::find(14);
        $portfolio15 = Portfolio::find(15);
        $portfolio16 = Portfolio::find(16);
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
    
        return view('Portfolio.index', compact(
            'portfolio1',
            'portfolio2',
            'portfolio3',
            'portfolio4',
            'portfolio5',
            'portfolio6',
            'portfolio7',
            'portfolio8',
            'portfolio9',
            'portfolio10',
            'portfolio11',
            'portfolio12',
            'portfolio13',
            'portfolio14', 
            'portfolio15',
            'portfolio16', // Include portfolio12 if you're passing it
            'menus',
            'services',
            'pricingPlans'
        ));
    }

    public function project()
    {
        $portfolio1 = Portfolio::find(1);
        $portfolio2 = Portfolio::find(2);
        $portfolio3 = Portfolio::find(3);
        $portfolio4 = Portfolio::find(4);
        $portfolio5 = Portfolio::find(5);
        $portfolio6 = Portfolio::find(6);
        $portfolio7 = Portfolio::find(7);
        $portfolio8 = Portfolio::find(8);
        $portfolio9 = Portfolio::find(9);
        $portfolio10 = Portfolio::find(10);
        $portfolio11 = Portfolio::find(11);
        $portfolio12 = Portfolio::find(12);
        $portfolio13 = Portfolio::find(13);
        $portfolio14 = Portfolio::find(14);
        $portfolio15 = Portfolio::find(15);
        $portfolio16 = Portfolio::find(16);
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

        return view('Portfolio.project', compact(
            'portfolio1',
            'portfolio2',
            'portfolio3',
            'portfolio4',
            'portfolio5',
            'portfolio6',
            'portfolio7',
            'portfolio8',
            'portfolio9',
            'portfolio10',
            'portfolio11',
            'portfolio12',
            'portfolio13',
            'portfolio14',
            'portfolio15',
            'portfolio16',
            'menus',
            'services',
            'pricingPlans'
        ));
    }

    public function project2()
    {
        $portfolio1 = Portfolio::find(1);
        $portfolio2 = Portfolio::find(2);
        $portfolio3 = Portfolio::find(3);
        $portfolio4 = Portfolio::find(4);
        $portfolio5 = Portfolio::find(5);
        $portfolio6 = Portfolio::find(6);
        $portfolio7 = Portfolio::find(7);
        $portfolio8 = Portfolio::find(8);
        $portfolio9 = Portfolio::find(9);
        $portfolio10 = Portfolio::find(10);
        $portfolio11 = Portfolio::find(11);
        $portfolio12 = Portfolio::find(12);
        $portfolio13 = Portfolio::find(13);
        $portfolio14 = Portfolio::find(14);
        $portfolio15 = Portfolio::find(15);
        $portfolio16 = Portfolio::find(16);      
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

        return view('Portfolio.project2', compact(
            'portfolio1',
            'portfolio2',
            'portfolio3',
            'portfolio4',
            'portfolio5',
            'portfolio6',
            'portfolio7',
            'portfolio8',
            'portfolio9',
            'portfolio10',
            'portfolio11',
            'portfolio12',
            'portfolio13',
            'portfolio14',
            'portfolio15',
            'portfolio16',
            'menus',
            'services',
            'pricingPlans'
        ));
    }
}
