<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('admin_theme.index');
    }
    public function aboutUs()
    {
        return view('theme.about');
    }
    public function Commodity()
    {
        return view('theme.trade.commodity');
    }
    public function Metal()
    {
        return view('theme.trade.metal');
    }
    public function Energy()
    {
        return view('theme.trade.energy');
    }
    public function Currency()
    {
        return view('theme.trade.currency');
    }
    public function Indices()
    {
        return view('theme.trade.indices');
    }
    public function Agriculture()
    {
        return view('theme.trade.agriculture');
    }
    public function careerWithUs(){
        return view('theme.career');
    }

    public function AccountOpening(){
        return view('theme.invest.account-opening');
    }

    public function DosAndDonts(){
        return view('theme.invest.dos-and-donts');
    }
    public function IndividualJointAccount(){
        return view('theme.invest.individual-joint-trading-account');
    }
    public function CorporateTradingAccount(){
        return view('theme.invest.corporate-trading-account');
    }

    public function InvestorsComplaintForm(){
        return view('theme.invest.investors-complaint-form');
    }
}

