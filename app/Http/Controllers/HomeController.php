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
            return view('home');
        }
        return redirect("/startup");
    }

    public function startup()
    {
        if (optional(Auth::user()->profile)->startup_skip) {
            return redirect("/");
        }
        $users = User::where('id', '!=', Auth::user()->id)->limit(14)->latest()->get();
        $getFriendRequests = Auth::user()->getFriendRequests();
        $friendRequests = array();
        foreach ($getFriendRequests as $key => $getFriendRequest) {
            $senderUser = User::find($getFriendRequest->sender_id);
            $friendRequests[$key]['id'] = $senderUser->id;
            $friendRequests[$key]['name'] = $senderUser->name;
            $friendRequests[$key]['image'] = $senderUser->image;
            $friendRequests[$key]['gender'] = $senderUser->gender;
            $friendRequests[$key]['mutual'] = Auth::user()->getMutualFriendsCount($senderUser);
        }
        return view('startup', compact('users', 'friendRequests'));
    }

    public function profile()
    {
        return view('profile');
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

    public function addToFriend(Request $request)
    {
        try {
            $user = User::find(Auth::id());
            $recipient = User::find($request->user_id);
            if ($user->befriend($recipient)) {
                return response()->json([
                    'status'  => true,
                    'data'    => '',
                    'message' => 'Request sent.',
                ]);
            }
            return response()->json([
                'status'  => false,
                'data'    => '',
                'message' => 'Request failed',
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status'  => false,
                'data'    => '',
                'message' => $e->getMessage(),
            ]);
        }
    }

    public function acceptFriendRequest(Request $request)
    {
        try {
            $user = User::find(Auth::id());
            $sender = User::find($request->user_id);;
            if ($user->acceptFriendRequest($sender)) {
                return response()->json([
                    'status'  => true,
                    'data'    => '',
                    'message' => 'Request accepted.',
                ]);
            }
            return response()->json([
                'status'  => false,
                'data'    => '',
                'message' => 'Request accepted failed',
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status'  => false,
                'data'    => '',
                'message' => $e->getMessage(),
            ]);
        }
    }

    public function denyFriendRequest(Request $request)
    {
        try {
            $user = User::find(Auth::id());
            $sender = User::find($request->user_id);;
            if ($user->denyFriendRequest($sender)) {
                return response()->json([
                    'status'  => true,
                    'data'    => '',
                    'message' => 'Request denied.',
                ]);
            }
            return response()->json([
                'status'  => false,
                'data'    => '',
                'message' => 'Request denied failed',
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status'  => false,
                'data'    => '',
                'message' => $e->getMessage(),
            ]);
        }
    }
}
