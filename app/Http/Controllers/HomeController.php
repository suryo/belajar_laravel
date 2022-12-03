<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

use Spatie\Permission\Traits\HasRole;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class HomeController extends Controller
{

    public function index(Request $request)
    {


        $code = '
        function findSequence(goal) {
  function find(start, history) {
    if (start == goal)
      return history;
    else if (start > goal)
      return null;
    else
      return find(start + 5, "(" + history + " + 5)") ||
             find(start * 3, "(" + history + " * 3)");
  }
  return find(1, "1");
}
        ';
        return view('home', compact('code'));
    }

    public function root()
    {
        return view('index');
    }

    /*Language Translation*/
    public function lang($locale)
    {
        if ($locale) {
            App::setLocale($locale);
            Session::put('lang', $locale);
            Session::save();
            return redirect()->back()->with('locale', $locale);
        } else {
            return redirect()->back();
        }
    }

    public function FormSubmit(Request $request)
    {
        return view('form-repeater');
    }

    public function loadslider()
    {
        return 'Load Slider';
    }
}