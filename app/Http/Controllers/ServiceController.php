<?php

namespace App\Http\Controllers;

use App\Models\Region;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    // Definir el array de imágenes como una propiedad del controlador
    protected $images = [
        'assets/img/servicio1.jpg',
        'assets/img/servicio2.jpg',
        'assets/img/servicio3.jpg',
        'assets/img/servicio4.jpg',
        'assets/img/servicio5.jpg',
        'assets/img/servicio6.jpg',
    ];

    // Método para seleccionar una imagen aleatoria
    protected function getRandomImage()
    {
        return $this->images[array_rand($this->images)];
    }

    // Obtener categorías y contar servicios
    protected function getCategories()
    {
        return Service::selectRaw('categories.name, COUNT(services.id) as count')
            ->join('categories', 'services.category_id', '=', 'categories.id')
            ->groupBy('categories.name')
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
        $randomImage = $this->getRandomImage();

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

    public function search(Request $request)
    {
        dd($request->all());
        // Seleccionar una imagen aleatoria usando el método
        $randomImage = $this->getRandomImage();

        $search = $request->input('search');

        // Obtener servicios que coincidan con la búsqueda
        $services = Service::where('title', 'LIKE', '%' . $search . '%')
            ->orWhere('description', 'LIKE', '%' . $search . '%')
            ->get();

        // Obtener últimos servicios publicados y categorías
        $lastPublished = $this->getLastPublished();
        $categories = $this->getCategories();

        // Retornar la vista de búsqueda con la imagen aleatoria y los resultados
        return view('web.services.search', compact('services', 'randomImage', 'categories', 'lastPublished'));
    }
}
