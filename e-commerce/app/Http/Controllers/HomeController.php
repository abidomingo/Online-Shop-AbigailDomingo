<?php
namespace App\Http\Controllers;

use illuminate\Support\Facades\Auth;
use illuminate\Http\Request;
use App\Models\Users;

class HomeController extends Controller {
    public function index(){
        return view('home.homepage');
    }
}
?>