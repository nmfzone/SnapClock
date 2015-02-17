<?php  namespace SnapClock\Http\Controllers\Snappy;

use Illuminate\Auth\Guard;
use Illuminate\Http\Request;
use SnapClock\Http\Controllers\Controller;

class SessionController extends Controller {
    protected $auth;

    public function __construct(Guard $guard)
    {
        $this->auth = $guard;

        $this->middleware('guest', ['except' => 'logout']);
    }

    public function index()
    {
        return view('login.index');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'username' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('username', 'password');

        if ($this->auth->attempt($credentials))
        {
            return redirect()->intended('home');
        }

        return redirect('login')
            ->withInput($request->only('username'))
            ->withErrors([
                'username' => 'These credentials do not match our records.',
            ]);
    }
}