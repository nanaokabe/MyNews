<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\profiles;

class ProfileController extends Controller
{
  
public function add()
  {
    return view('admin.profile.create');
  }

  public function edit()
  {
    return view('admin.profile.edit');
  }
  
  public function update()
  {
    return redirect('admin/profile/edit');
  }


public function create(Request $request)
    {
    //Validationを行う
    $this->validate($request, Profile::$rules);
    $Profile = new Profile;
    $form = $request->all();
      
      //フォームから送信されてきたtokenを削除する
      unset($form['_token']);



      //データベースに保存する
      $profile->fill($form);
      $profile->save();
      return redirect('admin/profile/create');
  }
}

