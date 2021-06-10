<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();

        return view('user_list', compact('users'));
    }

    public function changeProfilePicture(Request $request){

        $this->validate($request,[
            'profilePicture' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        if($request->file('profilePicture')){
            try{
                $user = $request->user();

                $old_file = str_replace('storage', 'public', $user->profile_picture);
                $path = '/public/' .$request->user()->id .'/profile_picture';
                $new_file = $request->file('profilePicture')->store( $path );

                if($old_file){
                    Storage::delete($old_file);
                }

                $new_path = str_replace('public', 'storage', $new_file);
                $user->profile_picture = $new_path;
                $user->save();

                return redirect('dashboard');
            }
            catch (Exception $e){
                alert('error');
            }
        }
    }

    public function changeResume(Request $request){

        $this->validate($request,[
            'resume' => 'required|mimes:pdf'
        ]);
        
        if($request->file('resume')){
            try{
                $user = $request->user();

                $old_file = str_replace('storage', 'public', $user->resume);
                $path = '/public/' .$request->user()->id .'/resume';
                $new_file = $request->file('resume')->store( $path );

                if($old_file){
                    Storage::delete($old_file);
                }

                $new_path = str_replace('public', 'storage', $new_file);
                $user->resume = $new_path;
                $user->save();  

                return redirect('dashboard');
            }
            catch (Exception $e){
                alert('error');
            }
        }
    }

    public function downloadUserResume(Request $request){
        return response()->download($request->user()->resume);
    }


}


//FILE UPLOAD NOTES
// $file = $request->file('profilePicture')->getClientOriginalName();
// $fileName = pathinfo($file, PATHINFO_FILENAME);
// $fileType = $request->file('profilePicture')->extension(); //pathinfo($file, PATHINFO_EXTENSION);
// $fileSize = $request->file('profilePicture')->getSize();        
// $path = $request->file('profilePicture')->store(
//     'profile_picture/'.$request->user()->id
// );
// $user = $request->user();
