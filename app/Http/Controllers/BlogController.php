<?php

namespace App\Http\Controllers;

use App\Repositories\BlogRepository;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    protected $blogRepository;

    public function __construct(BlogRepository $blogRepository)
    {
        $this->blogRepository = $blogRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = $this->blogRepository->getAll();
        return view('blog.index',compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blog.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'titre'=> 'required|string',
            'detail'=> 'required|string',
            'ia'=> 'required',

        ],[
            'titre.required' => 'image obligatoire',
            'detail.required'=> 'detail obligatoire',
            'ia.required'=> 'Image obligatoire',

        ]);

        if($request['ia']){
            $destinationPath = 'blog/'; // upload path
            $file = $request['ia'];
            $docName = time().".". $file->getClientOriginalExtension();
            $file->move($destinationPath, $docName);
            $request->merge(['image'=>$docName]);
        }
        $blog =$this->blogRepository->store($request->all());

           return redirect('article');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $blog = $this->blogRepository->getById($id);
        return view('blog.show',compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blog = $this->blogRepository->getById($id);
        return view('blog.edit',compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if($request['ia']){
            $destinationPath = 'images/'; // upload path
            $file = $request['ia'];
            $docName = time().".". $file->getClientOriginalExtension();
            $file->move($destinationPath, $docName);
            $request->merge(['photo'=>$docName,'etat'=>'non cloturé']);
        }

        $this->blogRepository->update($id,$request->all());
        return redirect('article');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function  getLastArticle(){
        $blogs = $this->blogRepository->lastTreeArticle();
        //return view('')
    }
    public function listes(){
        $blogs = $this->blogRepository->listes();
        return view('front.article',compact('blogs'));
    }
    public function getBlogById($id){
        $blog = $this->blogRepository->getById($id);
        return view('front.blog-detail',compact('blog'));
    }
}
