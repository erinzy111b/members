<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        // dd($request);
        // $input = new Member;
        // $input = $request->all();
        // $input = Member::create($request->all());
        // $allrequest = $request->all();
        // return $allrequest;
        $post = new Member;
        $post->m_name = $request->get('m_name');
        $post->m_username = $request->get('m_username');
        $post->m_passwd = $request->get('m_passwd');
        $post->m_sex = $request->get('m_sex');
        $post->m_birthday = $request->get('m_birthday');
        $post->m_level = $request->get('m_level');
        $post->m_email = $request->get('m_email');
        $post->m_url = $request->get('m_url');
        $post->m_phone = $request->get('m_phone');
        $post->m_address = $request->get('m_address');
        $post->m_jointime = $request->get('m_jointime');
        $post->save();

        return Redirect::to('index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        return 'editupdate';
        // $member = Member::find($id);
        // $member->m_name = $request->get('m_name');
        // $member->m_username = $request->get('m_username');
        // $member->m_passwd = $request->get('m_passwd');
        // $member->m_sex = $request->get('m_sex');
        // $member->m_birthday = $request->get('m_birthday');
        // $member->m_level = $request->get('m_level');
        // $member->m_email = $request->get('m_email');
        // $member->m_url = $request->get('m_url');
        // $member->m_phone = $request->get('m_phone');
        // $member->m_address = $request->get('m_address');
        // $member->m_jointime = $request->get('m_jointime');
        // $member->save();

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

    public function editupdate($id)
    {
        //
    }

}
