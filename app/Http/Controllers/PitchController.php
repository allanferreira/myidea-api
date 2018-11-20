<?php

namespace App\Http\Controllers;

use App\Pitch;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PitchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Pitch::where('user_id', Auth::id())->get();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pitch = new Pitch;

        $pitch->user_id = Auth::id();
        $pitch->subject = $request->subject;
        $pitch->text = $request->text;

        $pitch->save();
        return $pitch;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pitch  $pitch
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Pitch::where('id', $id)->where('user_id', Auth::id())->firstOrFail();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pitch  $pitch
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pitch $pitch)
    {
        $pitch->subject = $request->subject;
        $pitch->text = $request->text;

        $pitch->save();
        return $pitch;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pitch  $pitch
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleted = Pitch::where('id', $id)->where('user_id', Auth::id())->firstOrFail()->delete();
        return $deleted ? ['status' => 'OK'] : $deleted;
    }
}
