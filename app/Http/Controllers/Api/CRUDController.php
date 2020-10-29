<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\CRUDRepository;

class CRUDController extends Controller
{
    protected $CRUDRepo;

    public function __construct(CRUDRepository $CRUDRepo)
    {
        $this->CRUDRepo=$CRUDRepo;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts=$this->CRUDRepo->index();
        return response()->json(['status'=>'success','posts'=>$posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=$request->only('title','content');
        $post=$this->CRUDRepo->create($data);
        return response()->json(['status'=>'success']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post=$this->CRUDRepo->find($id);
        return response()->json(['status'=>'success','post'=>$post]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $data=$request->only('title','content');
        $post=$this->CRUDRepo->update($id,$data);
        if($post){
            return response()->json(['status'=>'success']);
        }
        return response()->json(['status'=>'error','message'=>'Post Not Found'],404);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $result=$this->CRUDRepo->delete($id);
        if($result){
            return response()->json(['status'=>'success']);
        }
        return response()->json(['status'=>'error','message'=>'Post Not Found'],404);
    }
}
