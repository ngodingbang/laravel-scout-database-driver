<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource using Eloquent query.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function indexUsingQuery(Request $request)
    {
        $users = User::query()
            ->when($request->filled('search'), function (Builder $query) use ($request) {
                $query->where('username', 'like', '%' . $request->query('search') . '%')
                    ->orWhere('name', 'like', '%' . $request->query('search') . '%')
                    ->orWhere('email', 'like', '%' . $request->query('search') . '%');
            })->paginate($request->query('limit', 10))->withQueryString();

        return view('user.index', compact('users'));
    }

    /**
     * Display a listing of the resource using Laravel Scout.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function indexUsingScout(Request $request)
    {
        $users = User::search($request->query('search'))
            ->paginate($request->query('limit', 10))->withQueryString();

        return view('user.index', compact('users'));
    }
}
