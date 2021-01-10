<?php

namespace App\Http\Controllers;

use App\Artical;
use App\Tag;
use Illuminate\Http\Request;

class articalsOperation extends Controller
{

    public function index()
    {
        if(request('tag'))
        {
            $articals = Tag::where('name', request('tag'))->firstOrFail()->articals;
        }
        else{
            $articals = Artical::all();
        }
        return view('articals.index',compact('articals'));
    }

    public function create()
    {
        $tags = Tag::all();
        return view('articals.create', compact('tags'));
    }

    public function store()
    {
        $this->getValidate();
        $artical = new Artical(\request(['title','excerpt','body']));
        $artical->user_id= 1;
        $artical->save();
       $artical->tags()->attach(\request('tags'));
        return redirect('/artical');
    }


    public function show(Artical $artical)
    {
        return view('articals/articalShow',compact('artical'));

    }


    public function edit(Artical $artical)
    {
        return view('articals.edit',compact('artical'));
    }

    public function update(Artical $artical)
    {
          $validate= $this->getValidate();

          $artical->update($validate);
          return redirect('/artical');
    }

    public function destroy(Artical $artical)
    {
        $artical->delete();
        return redirect('/artical');
    }

    /**
     * @return array
     */
    public function getValidate(): array
    {
        return Request()->validate([
            'title' => ['required', 'min:3'],
            'excerpt' => ['required', 'min:20'],
            'body' => ['required', 'min:25'],
            'tags'=> 'exists:tags,id',
        ]);
    }
}
