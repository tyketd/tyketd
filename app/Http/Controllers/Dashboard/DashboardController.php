<?php

namespace App\Http\Controllers\Dashboard;

use App\User;
use Illuminate\Auth\AuthManager;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

/**
 * Class DashboardController
 * @package App\Http\Controllers\Dashboard
 */
class DashboardController extends Controller
{

    /**
     * @var AuthManager
     */
    private $auth;
    /**
     * @var User
     */
    private $user;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(AuthManager $auth, User $user)
    {
        $this->middleware('auth');
        $this->auth = $auth;
        $this->user = $user;
    }

    /**
     * @return mixed
     */
    public function index()
    {
        // every page must have a withPage attribute to make any menu link get active class on his page in the render Dashboard.menu
        $user = $this->about();
        return view('Dashboard.index', [
            'user' => $user
        ])->withPage('home');
    }

    /**
     * @return mixed
     */
    public function account()
    {
        /*
         * add the select array to send more informations about the user to the view
         */
        $user = $this->about();
        return view('Dashboard.account', [
            'user' => $user
        ])->withPage('account');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Builder|\Illuminate\Database\Eloquent\Model|null|object
     */
    public function about()
    {
        return $this->user->newQuery()
            ->select('name', 'id', 'email')
            ->where('id', $this->auth->user()->id)
            ->first();
    }

    public function update(Request $request)
    {
//        return redirect('/dashboard/account/general')->with('error', 'Fonctionnalite non disponible pour le moment');
        return view('Dashboard.account')->with('error', 'Fonctionnalite non disponible pour le moment')->with('user', $this->about());
    }


}

