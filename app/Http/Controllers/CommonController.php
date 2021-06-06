<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Common;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class CommonController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except(['show','logout']);
        $this->middleware('auth')->only(['show','logout']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $commons = Common::join('users as u', 'u.id', '=', 'commons.id')
            ->whereNull('left_indicated')->orWhereNull('right_indicated')
        ->pluck('u.name', 'commons.id');
        return view('home.index', compact('commons'));
    }

    public function show(Common $common)
    {
        /// Blocks the user to change the user number in the url
        $common = Auth::user()->profile;
        return view('show.index', compact('common'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
    */
    public function store(Request $request)
    {
        if ($request['indicator'] == '') {
            $request['indicator'] = null;
        }
        $data = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255', 'unique:users'],
            'points' => ['nullable', 'numeric'],
            'indicator' => ['nullable', 'exists:users,id'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ])->validate();
        $common = Common::create($data);
        Auth::loginUsingId($common->id);
        return redirect(route('common.show', $common));
    }

    public function login(Request $request)
    {
        $data = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'password' => ['required', 'string'],
        ])->validate();

        $user = User::where('name', $data['name'])->first();
        if ($user == null) {
            alert()->error('Usuário não encontrado');
            return redirect()->back();//->with('error', 'Usuário não encontrado');
        }
        if (!(Hash::check($data['password'], $user->password))) {
            alert()->error('Senha incorreta');
            return redirect()->back();//->with('error', 'Usuário não encontrado');
        }
        Auth::loginUsingId($user->id);
        
        return redirect(route('common.show', $user->profile));
    }
    
    public function logout(Request $request)
    {
        Auth::logout();
        return redirect(route('common.index'));
    }
}
