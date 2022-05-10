<?php
namespace App\Repositories;

use App\Blog;
use Illuminate\Support\Facades\DB;

class BlogRepository extends RessourceRepository{
  public function __construct(Blog $blog)
  {
     $this->model = $blog;
  }

  public function lastTreeArticle(){
      return DB::table('blogs')
      ->orderBy('id','desc')
      ->limit(3)
      ->get();
  }
  public function listes(){
      return DB::table('blogs')
      ->orderBy('id','desc')
      ->paginate(10);

  }
}
