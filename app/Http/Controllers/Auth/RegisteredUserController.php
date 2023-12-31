<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Notifications\NewSellerNotification;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Notification;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'address' => ['nullable'],
            'customer_address' => ['nullable'],
            'id_number' => ['nullable', 'unique:users,id_number'],
            'phone_number' => ['nullable'],
            'campus_role' => ['nullable'],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'address' => $request->address,
            'customer_address' => $request->customer_address,
            'id_number' => $request->id_number,
            'phone_number' => $request->phone_number,
            'campus_role' => $request->campus_role,
        ]);
        $user->addRole($request->role_id);


        if ($request->role_id === "seller") {
            // If the registered user has the role of a seller, notify the admin
            $admin = User::where('id', 2)->get();
            Notification::send($admin, new NewSellerNotification($user));
        }

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
    public function destroy($id): RedirectResponse
    {
        // Find the user by ID
        $user = User::find($id);
        $user->delete();
        // Check if the user exists
        return redirect()->back()->with('danger-message', 'User Deleted');
    }

}
