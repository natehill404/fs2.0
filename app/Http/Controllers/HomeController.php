<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth.api', 'verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (optional(Auth::user()->profile)->startup_skip) {
            $friends = Auth::user()->getFriends($perPage = 5);
            return view('home', compact('friends'));
        }
        return redirect("/startup");
    }

    public function startup()
    {
        if (optional(Auth::user()->profile)->startup_skip) {
            return redirect("/");
        }

        return view('startup');
    }

    public function profile()
    {
        return view('profile');
    }

    public function profileDetails($userName)
    {
        $user = User::where('username', $userName)->first();
        if (!$user) {
            return redirect()->back()->with('error', 'User not found!');
        }
        return view('profile-details', compact('user'));
    }

    public function timelineDetails($userName)
    {
        $user = User::where('username', $userName)->first();
        if (!$user) {

            return redirect()->back()->with('error', 'User not found!');
        }
        $friends = $user->getFriends($perPage = 5);
        return view('profile-timeline', compact('user', 'friends'));
    }

    public function editProfile(Request $request)
    {
        if ($request->isMethod('get')) {
            return view('edit-profile');
        } else if ($request->isMethod('put')) {
            $user = $request->user();
            $request->validate([
                'name'     => ['required', 'string', 'max:255'],
                'username' => ['required', 'string', 'max:255', Rule::unique('users')->ignore($user->id)]
            ]);
            $user->name = $request->input('name');
            if ($request->has('password') && $request->input('password')) {
                $request->validate([
                    'password' => ['required', 'string', 'min:8', 'confirmed'],
                ]);
                $user->password = Hash::make($request->input('password'));
            }
            if ($request->has('image') && $request->input('image')) {
                $user->deleteImage();
                try {
                    $image_parts = explode(";base64,", $request->input('image'));
                    $image_type = explode("image/", $image_parts[0])[1];
                    $image_base64 = base64_decode($image_parts[1]);

                    $fileName = str_replace(' ', '-', round(microtime(true) * 1000) . $user->name . '.' . $image_type);
                    $imageFullPath = public_path() . "/storage/images/users/" . $fileName;
                    file_put_contents($imageFullPath, $image_base64);

                    $user->image = $fileName;
                } catch (Exception $e) {
                    return redirect('/edit-profile')->with("error", "Image not able to upload");
                }
            }
            $user->save();
            return redirect('/edit-profile')->with("message", "Profile update successfuly");
        }
    }


    public function addFriend($userName)
    {
        try {
            $user = Auth::user();
            $friend = User::where('username', $userName)->first();
            if (!$friend) {
                return redirect()->back()->with('error', 'User not found!');
            }
            if ($user->befriend($friend)) {
                return redirect()->back()->with('success', 'Request has been sent!');
            }
            return redirect()->back()->with('error', 'Add friend failed!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function removeFriend($userName)
    {
        try {
            $user = Auth::user();
            $friend = User::where('username', $userName)->first();
            if (!$friend) {
                return redirect()->back()->with('error', 'User not found!');
            }
            if ($user->unfriend($friend)) {
                return redirect()->back()->with('success', 'Friend removed!');
            }
            return redirect()->back()->with('error', 'Friend remove failed!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
}
