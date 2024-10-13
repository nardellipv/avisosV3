<?php

namespace App\Http\Controllers;

use App\Models\Region;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    // Obtener categorías y contar servicios
    protected function getCategories()
    {
        return Service::selectRaw('categories.id, categories.name, COUNT(services.id) as count')
            ->join('categories', 'services.category_id', '=', 'categories.id')
            ->groupBy('categories.id', 'categories.name')
            ->get();

    }

    // Obtener los últimos servicios publicados
    protected function getLastPublished()
    {
        return Service::where('end_date', '>=', now())
            ->orderBy('created_at', 'desc')
            ->take(4)
            ->get();
    }

    protected function getRegion()
    {
        return Region::get();
    }

    public function list()
    {
        // Seleccionar una imagen aleatoria usando el método
        $randomImage = get_random_image();

        // Obtener servicios de forma aleatoria
        $services = Service::where('end_date', '>=', now())
            ->inRandomOrder()
            ->paginate(10);

        // Obtener últimos servicios publicados y categorías
        $lastPublished = $this->getLastPublished();
        $categories = $this->getCategories();
        $regions = $this->getRegion();

        // Retornar la vista con la imagen aleatoria y los datos
        return view('web.services.listServices', compact(
            'services',
            'lastPublished',
            'categories',
            'randomImage',
            'regions'
        ));
    }

    public function filter(Request $request)
    {
        // Seleccionar una imagen aleatoria usando el método
        $randomImage = get_random_image();

        // Access the category_id from the request
        $categoryId = $request->input('category_id');

        // Check if categoryId is not null or empty
        if (is_null($categoryId) || $categoryId === '') {
            // Handle the case where category_id is not provided
            return redirect()->back()->with('error', 'Category ID is required.');
        }

        // Obtener servicios filtrados por category_id
        $services = Service::where('category_id', $categoryId)
            ->where('end_date', '>=', now())
            ->orderBy('created_at', 'desc')
            ->paginate(10);

        // Obtener otros datos necesarios
        $lastPublished = $this->getLastPublished();
        $categories = $this->getCategories();
        $regions = $this->getRegion();

        // Retornar la vista con los servicios y otros datos
        return view('web.services.listServices', compact(
            'services',
            'lastPublished',
            'categories',
            'randomImage',
            'regions'
        ));
    }

}
