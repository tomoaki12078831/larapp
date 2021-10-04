<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $users = User::all();
        $query = User::query();

        $serch1 = $request->input('want_talk');
        $serch2 = $request->input('can_talk');

        if($request->has('want_talk') && $serch1 != ('指定なし')){
            $query->where('want_talk',$serch1)->get();
        }

        if($request->has('can_talk') && $serch2 != ('指定なし')){
            $query->where('can_talk', $serch2)->get();
        }

        $data = $query->paginate(10);
        
        return view('views.home',[
            'want_talks' =>$want_talks,'can_talks' =>$can_talks,'data' => $data
        ]);
    }
}
