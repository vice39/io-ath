<?php

namespace App\Http\Controllers;

use App\Models\Meeting;
use App\Models\User;
use Carbon\Carbon;
use Carbon\Exceptions\Exception;
use Illuminate\Http\Request;

class MeetingController extends Controller
{

    public function __construct()
    {
//        $this->middleware('auth')->except(['index', 'show']);
    }

    public function index(Meeting $meeting)
    {
        $meetings = Meeting::query()->simplePaginate();

        return view('index', ['meetings' => $meetings]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('meeting-form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     */
    public function store(Request $request)
    {

        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'short_description' => 'required',
            'image_url' => 'required',
            'location_description' => 'required',
            'lat' => 'required',
            'lng' => 'required'
        ]);

        // TODO Once auth is added, change user to auth()->user()
        // $user = auth()->user();

        /** @var User $user */
        $user = User::query()->first();

        $meeting = new Meeting();
        $meeting->fill($request->all());

        // Temporary. Wait for UI
        $meeting->start_date = Carbon::now();
        $meeting->end_date = Carbon::now();

        $meeting->author()->associate($user);
        $meeting->save();


        return redirect()->action(
            [MeetingController::class, 'show'],
            ['meeting' => $meeting]
        );
    }

    public function show(Meeting $meeting)
    {
        return view('meeting', ['meeting' => $meeting]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
