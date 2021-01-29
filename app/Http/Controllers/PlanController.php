<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PlanController extends Controller
{
    //
    public function add()
  {
      return view('calendar.plan');
  }

    public function diary(Request $request)
    {
        // Varidationを行う
        $this->validate($request, News::$rules);
        $news = new News;
        $form = $request->all();
    }

    public function index()
  {
      return view('calendar.index');
  }
}
