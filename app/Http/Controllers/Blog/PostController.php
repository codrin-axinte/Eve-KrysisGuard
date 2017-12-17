<?php

namespace App\Http\Controllers\Blog;

use DebugBar\DebugBar;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;
use App\Category;

class PostController extends Controller
{

	public function index(Category $category = null) {

		$query = Post::published()->with('category')->latest();
		if($category != null){
			$query->where('category_id', $category->id);
		}
		$posts = $query->paginate(10);

		return view('posts.index', compact('posts'));
    }

	public function show(Category $category, Post $post) {
		$categories = $this->recentCategories();
		$recent_posts = $this->recentPosts();

		return view('posts.show', compact('post','recent_posts', 'categories'));
    }

	protected function recentCategories() {
		return Category::latest()->take(3)->get();
    }

	protected function recentPosts($amount = 3) {
		return Post::published()->latest()->take($amount)->get();
    }

}
