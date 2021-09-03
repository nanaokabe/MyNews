<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profile;

class Profilecontroller extends Controller
{
  public function index(Request $request)
  {
    $posts = Profile::all()->sortByDesc('update_at'); //投稿記事を更新日時に並び替えてる
        return view('profile.index', ['posts' => $posts]);
    }
}
