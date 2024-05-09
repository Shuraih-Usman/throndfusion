<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Admin;

class AdminController extends Controller
{
    //

    public function loginPage() {
        return view('admin.login');
    }

    public function addUser() {
        return view('admin.users.add-user', ['admin']);
    }

    public function Users() {
        return view('admin.users.users');
    }

    public function editUser($id) {
        $user = User::find($id);
        return view('admin.users.edit-user', ['user' => $user]);
    }

    public function Profile() {
        return view('admin.profile.index');
    }

    public function Campaign_type() {
        return view('admin.campaigns.campaign-type');
    }

    public function serviceCats() {
        return view('admin.services.service-cat');
    }

     public function wishlistsCats() {
        return view('admin.wish.type');
    }

      public function wishesItems() {
        return view('admin.wish.items');
    }
}
