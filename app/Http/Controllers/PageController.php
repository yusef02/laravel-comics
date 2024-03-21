<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('partials.home');
    }


    public function about()
    {
        return view('partials.about');
    }

    public function comics()
    {
        $comics = config('comics');
        return view('partials.comics', compact('comics'));
    }

    public function comicDesc($index)
    {
        $comics = config('comics');
        $comic = $comics[$index];
        return view('pages.comic-detail', compact('comic'));
    }

    public function contacts()
    {
        return view('partials.contacts');
    }

    public function movies()
    {
        return view('partials.movies');
    }

    public function tv()
    {
        return view('partials.tv');
    }

    public function games()
    {
        return view('partials.games');
    }

    public function collectibles()
    {
        return view('partials.collectibles');
    }

    public function videos()
    {
        return view('partials.videos');
    }
    public function fans()
    {
        return view('partials.fans');
    }
    public function news()
    {
        return view('partials.news');
    }
    public function shop()
    {
        return view('partials.shop');
    }
    public function characters()
    {
        return view('partials.characters');
    }
}
