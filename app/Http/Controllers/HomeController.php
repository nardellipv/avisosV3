<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Helpers\ImageHelper;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $randomImage = ImageHelper::getRandomImage();

        $topVisits = Service::with(['region'])
            ->orderBy('visit', 'desc')
            ->limit(6)
            ->get();

        $lastServices = Service::with(['region'])
            ->orderBy('created_at', 'desc')
            ->limit(12)
            ->get();

        return view('web.index', compact('topVisits', 'lastServices', 'randomImage'));
    }
}
