<?php

namespace App\Controllers\User;

use App\Controllers\BaseController;
use App\Models\ProfileModel;

class Profile extends BaseController
{
    public function index()
    {
        $user = auth()->user();
        $profileModel = new ProfileModel();
        $profile = $profileModel->where('id_user', auth()->id())->first() ?? [];
        return view('User/profile', [
            'profilePicture' => $user->profile_picture ?? null,
            'user' => $user,   
            'profile' => $profile,
        ]);
    }

    public function updateUser(){

        // If only username is updated
        if($this->request->getPost('username') 
        && !$this->request->getPost('password')
        && !$this->request->getPost('new_password')
        && !$this->request->getPost('confirm_new_password')){
            // Validate New Username
            $validation = \Config\Services::validation();
            $validation->setRules([
                'username' => 'required|min_length[3]|max_length[20]|is_unique[users.username]',
            ]);

            if(! (auth()->user()->username == $this->request->getPost('username'))){
                if (!$validation->run(['username' => $this->request->getPost('username')])) {
                    return redirect()->back()->withInput()->with('error', "Invalid Username");
                }
            }

            // Get the User Provider (UserModel by default)
            $users = auth()->getProvider();

            // Get Current User ID
            $current_user_id = auth()->id();

            // Set New User Data
            $user = $users->findById($current_user_id);
            $user->fill([
                'username' => $this->request->getPost('username')
            ]);
            try{
                $users->save($user);
            }
            catch(\Exception $e){
                return redirect()->back()->with('error', "Failed to Update Username");
            }

            return redirect()->back()->with('success', 'User Updated Successfully');

        }

        $credentials = [
            'email'    => $this->request->getPost('email'),
            'password' => $this->request->getPost('password')
        ];
        
        // Try to validate the credentials
        $validCreds = auth()->check($credentials);

        if (! $validCreds->isOK()) {
            return redirect()->back()->with('error', "Invalid Password");
        }

        // Validate New User Data
        $new_user_data = [
            'username' => $this->request->getPost('username'),
            'password' => $this->request->getPost('new_password'),
            'confirm_password' => $this->request->getPost('confirm_new_password'),
        ];

        // Validate Username
        $validation = \Config\Services::validation();
        $validation->setRules([
            'username' => 'required|min_length[3]|max_length[20]|is_unique[users.username]',
        ]);

        if(! (auth()->user()->username == $new_user_data['username'])){
            if (!$validation->run(['username' => $new_user_data['username']])) {
                return redirect()->back()->withInput()->with('error', "Invalid Username");
            }
        }

        // Validate New Password
        $validation = \Config\Services::validation();
        $validation->setRules([
            'password' => 'required|min_length[8]|max_length[255]',
            'confirm_password' => 'matches[password]',
        ]);

        if (!$validation->run(['password' => $new_user_data['password'], 'confirm_password' => $new_user_data['confirm_password']])) {
            return redirect()->back()->withInput()->with('error', "Invalid Password");
        }

        // Get the User Provider (UserModel by default)
        $users = auth()->getProvider();

        // Get Current User ID
        $current_user_id = auth()->id();

        // Set New User Data
        $user = $users->findById($current_user_id);
        $user->fill([
            'username' => $new_user_data['username'],
            'email' => auth()->user()->email,
            'password' => $new_user_data['password'],
        ]);
        try{
            $users->save($user);
        }
        catch(\Exception $e){
            return redirect()->back()->with('error', "Failed to Update User");
        }

        return redirect()->back()->with('success', 'User Updated Successfully');
    }

    public function updateProfile(){
        // Get Profile Model
        $profileModel = new ProfileModel();

        $profile = $profileModel->where('id_user', auth()->id())->first();

        // If Profile is not created yet
        if($profile == NULL){
            $data = [
                'id_user' => auth()->id(),
                'nama_lengkap' => $this->request->getPost('nama_lengkap'),
                'npm' => $this->request->getPost('npm'),
                'kelas' => $this->request->getPost('kelas'),
                'jenis_kelamin' => $this->request->getPost('jenis_kelamin') ?? '',
                'fakultas' => $this->request->getPost('fakultas') ?? '',
                'jurusan' => $this->request->getPost('jurusan') ?? '',
                'alamat' => $this->request->getPost('alamat'),
                'no_hp' => $this->request->getPost('no_hp'),
            ];

            // insert new profile    
            $result = $profileModel->insert($data);
            
            if(!$result){
                return redirect()->back()->with('error', "Failed to Update Profile");
            }

            return redirect()->back()->with('success', 'Profile Updated Successfully');
        }

        // If Profile is already created
        $data = [
            'nama_lengkap' => $this->request->getPost('nama_lengkap'),
            'npm' => $this->request->getPost('npm'),
            'kelas' => $this->request->getPost('kelas'),
            'jenis_kelamin' => $this->request->getPost('jenis_kelamin'),
            'fakultas' => $this->request->getPost('fakultas'),
            'jurusan' => $this->request->getPost('jurusan'),
            'alamat' => $this->request->getPost('alamat'),
            'no_hp' => $this->request->getPost('no_hp'),
        ];

        $result = $profileModel->update($profile['id'], $data);

        if(!$result){
            return redirect()->back()->with('error', "Failed to Update Profile");
        }

        return redirect()->back()->with('success', 'Profile Updated Successfully');   
    }

    public function updateProfilePicture(){
        $validation = \Config\Services::validation();
        $validation->setRules([
            'profile_picture' => 'uploaded[profile_picture]|max_size[profile_picture,10024]|is_image[profile_picture]|mime_in[profile_picture,image/jpg,image/jpeg,image/png]',
        ]);

        if (!$validation->run(['profile_picture' => $this->request->getFile('profile_picture')])) {
            return redirect()->back()->withInput()->with('error', "Invalid Profile Picture");
        }

        $file = $this->request->getFile('profile_picture');
        $rand_name = $file->getRandomName();
        $file->move(ROOTPATH . 'public/uploads/images/', $rand_name);

        // Get the User Provider (UserModel by default)
        $users = auth()->getProvider();

        // Get Current User ID
        $current_user_id = auth()->id();

        // Set New User Data
        $user = $users->findById($current_user_id);
        $user->fill([
            'profile_picture' => $rand_name,
        ]);
        try{
            $users->save($user);
        }
        catch(\Exception $e){
            return redirect()->back()->with('error', "Failed to Update Profile Picture");
        }

        return redirect()->back()->with('success', 'Profile Picture Updated Successfully');
    }
}