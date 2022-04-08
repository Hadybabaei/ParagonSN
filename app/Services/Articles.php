<?php 
namespace App\Services;

use App\Http\Requests\StoreArticleRequest;
use App\Models\Article;
use Illuminate\Support\Facades\Auth;
trait Articles 
{
    public function get()
    {
        return Article::get();
    }
    public function dashGet()
    {
        return Article::where('user_id',Auth::user()->id)->orderby('id');
    }
    public function store(StoreArticleRequest $request)
    {
        $user=Auth::user()->id;
        $imageName = $request->file('image')->getClientOriginalName();
        $request->image->move(public_path("images/$user"), $imageName);
        return 
                Article::create([
                    'title'=>$request->title,
                    'caption'=>$request->caption,
                    'image'=>"/images/".$user."/".$imageName,
                    'user_id'=>Auth::user()->id,
                ]);
    }
    public function like($id)
    {
        $article=Article::findOrFail($id);
        $user_like=explode(",", $article->like_id);
        $like=$article->likes;
        if (in_array(Auth::user()->id, $user_like))
            { 
                $article->likes=$like-1;
                $article->like_id=implode(",",array_filter(str_replace(Auth::user()->id,"",$user_like)));
                $article->save();
        }elseif(!in_array(Auth::user()->id, $user_like))
        {
            $article->like_id=$article->like_id.",".Auth::user()->id;
            $article->likes=$like+1;
            $article->save();
        }else{
            return "sth Wrong happend";
        }
    }
}