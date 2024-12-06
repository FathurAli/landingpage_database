<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\Contact;

class contactController extends Controller
{
    public function index()
    {
        $contact1 = Contact::find(1);
        $contact2 = Contact::find(2);
        $contact3 = Contact::find(3);
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

        return view('contact.index', compact(
            'contact1',
            'contact2',
            'contact3',
            'menus',
            'services',
            'pricingPlans'
        ));
    }
}
