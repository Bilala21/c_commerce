<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index(){
        echo"fdfdssdf";
        $results = DB::select(
            "
            select  * from users t1
            inner join posts t2
            on t2.user_id = t1.id
            inner join comments t3
            on t3.post_id= t2.id
            order by title ASC limit 1
            "
        );

        return $results; 
        // $user=Post::with(["comment","user"])->get();
        // $user= DB::table("posts")
        // ->join('users', 'users.id', '=', 'posts.user_id')
        // ->join('comments', 'post_id', '=', 'posts.id')
        // ->get();

        // foreach($user as $user){
        //     echo $user->name,"<br>";
        //     echo $user->title,"<br>";
        //     echo $user->body,"<br>";
        // }

    }
}
