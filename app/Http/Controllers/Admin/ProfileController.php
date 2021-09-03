<?php
namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Profile;
use App\Profilehistory;
use Carbon\Carbon;

class ProfileController extends Controller
{
  
public function add()
  {
    return view('admin.profile.create');
  }
  
   public function create(Request $request)
  {
    //Varidationを行う
    $this->validate($request, Profile::$rules);
    $profile = new Profile;
    $form = $request->all();
      
      //フォームから送信されてきたtokenを削除する
      unset($form['_token']);
      
      //データベースに保存する
      $profile->fill($form);
      $profile->save();
      return redirect('admin/profile/create');
  }

//以下を追加
public function index(Request $request)
{
  $cond_title = $request -> cond_title;
  if ($cond_title != '') {
    $posts = Profile::where('name', $cond_title)->get();
  } else { 
  $posts = Profile::all();
}
  return view('admin.profile.index', ['posts' => $posts,'cond_title' => $cond_title]);
}

// 以下を追記
public function edit(Request $request)
{
      $profile = Profile::find($request->id);
      if (empty($profile)) {
        abort(404);    
      }
      return view('admin.profile.edit', ['profile_form' => $profile]);
  }
  
   public function update(Request $request)
  {
      $this->validate($request, Profile::$rules);
      $profile = Profile::find($request->id);
      $profile_form = $request->all();
     
      $profile->fill($profile_form)->save();

 // 以下を追記
        $profilehistory = new Profilehistory;
        $profilehistory->profile_id = $profile->id;
        $profilehistory->edited_at = Carbon::now('Asia/Tokyo');
        $profilehistory->save();

      return redirect('admin/profile');
  }
}
