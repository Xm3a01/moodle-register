<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class GetUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    //    $datas = DB::table('mdl_user')->get();

    //    return view('')
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request , [
            'firstname'=>'required',
            'lastname'=>'required',
            'email'=>'required',
            'username'=>'required',
            'password'=>'required|max:6',
        ]);
        $user = DB::table('mdl_user')->insert(
            [
                'firstname' =>$request->firstname, 
                'lastname'  =>$request->lastname,
                'email'     =>$request->email,
                'username'  =>$request->username,
                'confirmed' => 1,
                'mnethostid'  => 1,
                // 'sysrole1'  => $request->sysrole1,
                'password'  =>Hash::make($request->password),
            ]
        );
        
        if($user)
        {
            return redirect('/')->with('success', 'Data saved');
        }
        else
        {
            return redirect('/')->with('erorr', 'Data not saved'); 
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $course = DB::table('mdl_user')
          ->where('mdl_user.id' , $id)->first();

      return view('showcourse')->withCourse($course);
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
        //
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
}
