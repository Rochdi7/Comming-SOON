<?php

namespace App\Http\Controllers\Backoffice;

use App\Http\Controllers\Controller;
use App\Models\Car;
use App\Models\Reservation;

class DashboardController extends Controller
{
    public function index()
    {
        // Stats (adapte si tes models/colonnes diffèrent)
        $totalCars = Car::count();

        // adapte selon tes vrais status
        $inRental = Reservation::where('status', 'in_rental')->count();
        $upcoming = Reservation::where('status', 'upcoming')->count();

        return view('backoffice.dashboard.index', compact('totalCars', 'inRental', 'upcoming'));
    }
}
