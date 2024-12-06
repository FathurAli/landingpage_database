<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\About;

class AboutController extends Controller
{
    /**
     * Display the about page.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // Fetch the "About Us" information from the database
        $about1 = About::find(1); // Ambil data dengan id 1
        $about2 = About::find(2); // Ambil data dengan id 2

        // Fetch the menu structure
        $menus = Menu::whereNull('parent_id')->with('children')->orderBy('order')->get();

        // Static services array
        $services = [
            [
                'icon' => 'ion-ios-pulse',
                'title' => 'Keep Pulse Going',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.',
            ],
            [
                'icon' => 'ion-ios-infinite-outline',
                'title' => 'Unlimited Options',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.',
            ],
            [
                'icon' => 'ion-ios-lightbulb-outline',
                'title' => 'Great Ideas',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.',
            ],
            [
                'icon' => 'ion-ios-settings',
                'title' => 'Awesome Support',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.',
            ],
        ];

        // Static pricing plans array
        $pricingPlans = [
            [
                'title' => 'Basic',
                'price' => '$35.99 monthly',
                'features' => [
                    'Lorem ipsum dolor sit amet',
                    'Consectetuer adipiscing elit',
                    'Sed diam nonummy',
                    'Nibh euismod tincidunt',
                    'Ut laoreet dolore',
                    'Magna aliquam erat volutpat',
                ],
            ],
            [
                'title' => 'Advanced',
                'price' => '$55.99 monthly',
                'features' => [
                    'Lorem ipsum dolor sit amet',
                    'Consectetuer adipiscing elit',
                    'Sed diam nonummy',
                    'Nibh euismod tincidunt',
                    'Ut laoreet dolore',
                    'Magna aliquam erat volutpat',
                ],
            ],
            [
                'title' => 'Smart',
                'price' => '$75.99 monthly',
                'features' => [
                    'Lorem ipsum dolor sit amet',
                    'Consectetuer adipiscing elit',
                    'Sed diam nonummy',
                    'Nibh euismod tincidunt',
                    'Ut laoreet dolore',
                    'Magna aliquam erat volutpat',
                ],
            ],
        ];

        // Return the 'about.index' view with the necessary data
        return view('about.index', compact('about1', 'about2', 'services', 'pricingPlans', 'menus'));
    }
}
