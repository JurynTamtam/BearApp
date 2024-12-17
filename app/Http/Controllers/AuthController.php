<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;
  
class AuthController extends Controller
{
    // Displays the registration view.
    public function register()
    {
        return view('auth/register'); // Returns the 'register' view located in the 'auth' directory.
    }

    // Handles user registration and saving user data.
    public function registerSave(Request $request)
    {
        // Validates the request input fields: name (required) and password (required & confirmed).
        Validator::make($request->all(), [
            'name' => 'required',
            'password' => 'required|confirmed'
        ])->validate();

        // Creates a new user in the database with hashed password and 'Admin' level.
        User::create([
            'name' => $request->name, // Saves the name field from the request.
            'password' => Hash::make($request->password), // Hashes the password before saving.
            'level' => 'Admin' // Sets the user level to 'Admin' by default.
        ]);

        return redirect()->route('login'); // Redirects to the login page after successful registration.
    }

    // Displays the login view.
    public function login()
    {
        return view('auth/login'); // Returns the 'login' view located in the 'auth' directory.
    }

    // Handles the login process.
    public function loginAction(Request $request)
    {
        // Validates the input fields: name and password (both required).
        Validator::make($request->all(), [
            'name' => 'required',
            'password' => 'required'
        ])->validate();

        // Attempts to authenticate the user using the provided credentials.
        if (!Auth::attempt($request->only('name', 'password'), $request->boolean('remember'))) {
            // Throws a validation exception if authentication fails.
            throw ValidationException::withMessages([
                'name' => trans('auth.failed') // Returns a failure message.
            ]);
        }

        // Regenerates the session ID to prevent session fixation attacks.
        $request->session()->regenerate();

        return redirect()->route('products'); // Redirects to the 'products' page upon successful login.
    }

    // Handles the logout process.
    public function logout(Request $request)
    {
        Auth::guard('web')->logout(); // Logs out the authenticated user.

        $request->session()->invalidate(); // Invalidates the session to clear session data.

        return redirect('/login'); // Redirects to the login page after logout.
    }

    // Displays the user's profile page.
    public function profile()
    {
        return view('profile'); // Returns the 'profile' view.
    }
}