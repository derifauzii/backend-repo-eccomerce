<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function CategoryPage(){
        return view('user_template.category');
    }

    public function SingleProduct() {
        return view('user_template.product');
    }

    public function AddToCart() {
        return view('user_template.addtocart');
    }

    public function Checkout() {
        return view('user_template.checkout');
    }

    public function UserProfile() {
        return view('user_template.userprofile');
    }

    public function TodayDeals() {
        return view('user_template.todaydeals');
    }

    public function NewRelease() {
        return view('user_template.newrelease');
    }

    public function CustomerService() {
        return view('user_template.customerservice');
    }
}
