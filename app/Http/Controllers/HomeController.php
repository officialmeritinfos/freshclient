<?php

namespace App\Http\Controllers;

use App\Models\Deposit;
use App\Models\GeneralSetting;
use App\Models\Investment;
use App\Models\Package;
use App\Models\Withdrawal;
use App\Models\Service;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $web = GeneralSetting::where('id',1)->first();

        $dataView = [
            'siteName'  => $web->name,
            'web'       => $web,
            'pageName'  => 'Home Page',
            'packages'  => Package::where('status',1)->where('isBonus','!=',1)->get(),
            'deposits'  => Investment::where('status',1)->orWhere('status',4) ->limit(10)->get(),
            'withdrawals'=>Withdrawal::where('status',1)->limit(10)->get(),
            'services'  =>Service::where('status',1)->get()
        ];

        return view('home.home',$dataView);
    }

    public function about()
    {
        $web = GeneralSetting::where('id',1)->first();

        $dataView = [
            'siteName'  => $web->name,
            'web'       => $web,
            'pageName'  => 'About Us',
            'packages'  => Package::where('status',1)->where('isBonus','!=',1)->get(),
            'services'  =>Service::where('status',1)->get()
        ];

        return view('home.about',$dataView);
    }
    public function plans()
    {
        $web = GeneralSetting::where('id',1)->first();

        $dataView = [
            'siteName'  => $web->name,
            'web'       => $web,
            'pageName'  => 'Packages',
            'packages'  => Package::where('status',1)->where('isBonus','!=',1)->get(),
        ];

        return view('home.plans',$dataView);
    }
    public function terms()
    {
        $web = GeneralSetting::where('id',1)->first();

        $dataView = [
            'siteName'  => $web->name,
            'web'       => $web,
            'pageName'  => 'Terms and Conditions',
            'packages'  => Package::where('status',1)->where('isBonus','!=',1)->get(),
        ];

        return view('home.terms',$dataView);
    }
    public function privacy()
    {
        $web = GeneralSetting::where('id',1)->first();

        $dataView = [
            'siteName'  => $web->name,
            'web'       => $web,
            'pageName'  => 'Privacy Policy',
            'packages'  => Package::where('status',1)->where('isBonus','!=',1)->get(),
        ];

        return view('home.privacy',$dataView);
    }
    public function faqs()
    {
        $web = GeneralSetting::where('id',1)->first();

        $dataView = [
            'siteName'  => $web->name,
            'web'       => $web,
            'pageName'  => 'Frequently Asked Questions',
            'packages'  => Package::where('status',1)->where('isBonus','!=',1)->get(),
        ];

        return view('home.faq',$dataView);
    }
    public function contact()
    {
        $web = GeneralSetting::where('id',1)->first();

        $dataView = [
            'siteName'  => $web->name,
            'web'       => $web,
            'pageName'  => 'Contact us',
            'packages'  => Package::where('status',1)->where('isBonus','!=',1)->get(),
        ];

        return view('home.contact',$dataView);
    }
    public function service()
    {
        $web = GeneralSetting::where('id',1)->first();

        $dataView = [
            'siteName'  => $web->name,
            'web'       => $web,
            'pageName'  => 'Services',
            'packages'  => Package::where('status',1)->where('isBonus','!=',1)->get(),
            'services'  =>Service::where('status',1)->get()
        ];

        return view('home.service',$dataView);
    }
    public function legal()
    {
        $web = GeneralSetting::where('id',1)->first();

        $dataView = [
            'siteName'  => $web->name,
            'web'       => $web,
            'pageName'  => 'Legal Information',
            'packages'  => Package::where('status',1)->where('isBonus','!=',1)->get(),
        ];

        return view('home.legal',$dataView);
    }

    public function serviceId($id)
    {
        $web = GeneralSetting::where('id',1)->first();

        $service = Service::where('id',$id)->first();

        $dataView = [
            'siteName'  => $web->name,
            'web'       => $web,
            'pageName'  => $service->title,
            'packages'  => Package::where('status',1)->where('isBonus','!=',1)->get(),
            'service'   =>$service,
            'services'  =>Service::where('status',1)->get()
        ];

        return view('home.page_detail',$dataView);
    }
}
