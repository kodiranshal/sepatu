<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Shoe;
use App\Services\FrontService;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    //
    protected $frontService;

    public function __construct(FrontService $frontService) //DIP dependecy injection
    {
        $this->frontService = $frontService;
    }

    public function index()
    {
        $data = $this->frontService->getFrontPageData(); // Calling the service method
        return view('front.index', $data); // Passing the data to the view
    }

    public function details(Shoe $shoe)
    {
        return view('front.details', compact('shoe'));
    }

    public function category(Category $category)
    {
        return view('front.category', compact('category'));
    }
}
