<?php

namespace App\Http\Controllers;

use App\Flyer;
use App\Photo;
use Illuminate\Http\Request;
use App\Http\Requests\FlyerRequest;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\AuthorisesUsers;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class FlyersController extends Controller
{

    use AuthorisesUsers;

    public function __construct()
    {
        $this->middleware('auth', ['except' => 'show']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $flyers = Flyer::where('user_id',\Auth::id())->get();
        return view('flyers.index', compact('flyers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('flyers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(FlyerRequest $request)
    {
        $data= [];

        Flyer::create(array_merge($request->all(),['user_id'=>\Auth::id()]));

        flash()->success('Woohoo', 'Flyer successfully created!');

        return redirect()->route('home_path');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        
        $flyer = Flyer::locatedAt($id);

        return view('flyers.show', compact('flyer'));
    }

    public function addPhoto($id, Request $request)
    {

        $this->validate($request, [
            'photo' => 'required|mimes:jpg,jpeg,png,bmp'
        ]);

        if ( ! $this->userCreatedFlyer($id) ) {
            return $this->unauthorised($id);
        }

        $photo = $this->makePhoto($request->file('photo'));

        Flyer::locatedAt($id)->addPhoto($photo);

    }

    protected function makePhoto(UploadedFile $file)
    {
        return Photo::named($file->getClientOriginalName())->move($file);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(FlyerRequest $request, $id)
    {
        Flyer::locatedAt($id)->update($request->all());
        flash()->success('Woohoo', 'Flyer successfully updated!');
        return redirect()->route('flyers.show',$id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

}
