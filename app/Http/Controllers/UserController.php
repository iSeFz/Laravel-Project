<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use App\Mail\SendEmail;
use Illuminate\Support\Facades\Mail;

use Illuminate\Support\Facades\Log;

class UserController extends Controller
{
    function store(Request $req){
        $user = new Users;
        $user->username = $req->username;
        $user->email = $req->email;
        $user->fullname = $req->fullname;
        $user->password = bcrypt($req->password);
        $user->address = $req->address;
        $user->phone = $req->phone;
        $user->imageName = $this->uploadImage();
        $user->birthdate = $req->birthdate;
        $user->save();
        return redirect('/');
    }

    function show(){
        return Users::all();
    }

    public function validateUsername(Request $request)
    {
        $username = $request->get('name');
        Log::info('Request object: ', ['request' => $request->all()]);
        
        if ($this->checkUserExists($username)) {
            return response()->json(['valid' => false]);
        }
        
        return response()->json(['valid' => true]);
    }

    public function checkUserExists($username) {
        $user = Users::where('username', $username)->first();
        Log::info('User object: ', ['user' => $user]);
        if ($user) {
            return true;
        }
        return false;
    }

    public function uploadImage()
    {
        $imagesFolderName = public_path('assets/photos/');
        $check = getimagesize($_FILES['photo']['tmp_name']);
        if ($check === false) {
            echo "not an Image";
        } else {
            $image = $_FILES["photo"]["tmp_name"];
            $data = file_get_contents($image);
            $name = $_FILES["photo"]["name"];
            while ($this->checkImageExists($name)) {
                $name = $this->incrementImageNameIfExists($name);
            }
            $temp = $imagesFolderName . $name;
            file_put_contents($temp, $data);
            return $name;
        }
    }

    public function checkImageExists($name)
    {
        $imagesFolderName = public_path('assets/photos/');
        if (file_exists($imagesFolderName . $name)) {
            return true;
        }
        return false;
    }

    public function incrementImageNameIfExists($name)
    {
        $imageName = $this->getNameFromImageName($name);
        $extension = $this->getExtensionFromImageName($name);
        $imageName++;
        return $imageName . $extension;
    }

    public function getNameFromImageName($name)
    {
        $newName = "";
        for ($i = 0; $i < strlen($name); $i++) {
            if ($name[$i] == ".") {
                break;
            }
            $newName .= $name[$i];
        }
        return $newName;
    }

    public function getExtensionFromImageName($name)
    {
        $extension = "";
        $found = false;
        for ($i = 0; $i < strlen($name); $i++) {
            if ($name[$i] == '.') {
                $found = true;
            }
            if ($found) {
                $extension .= $name[$i];
            }
        }
        return $extension;
    }

    function sendEmail(Request $request) {
        Mail::to("adham.kh.fahmy@gmail.com")->send(new SendEmail($request->username));
    }
}