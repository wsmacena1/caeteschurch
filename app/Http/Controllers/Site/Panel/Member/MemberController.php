<?php

namespace App\Http\Controllers\Site\Panel\Member;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Member;
use App\Models\Address;


class MemberController extends Controller
{
    public function __construct(){
    	$this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $member = DB::table('members')
        ->join('congregations', 'congregations.id', 'members.congregation_id')
        ->select(
            'members.id', 
            'members.name', 
            'members.cpf', 
            'members.birthday',
            'members.created_at', 
            'congregations.name as congregation_name',
            )
        ->distinct()
        ->paginate(15);
        return view('site.panel.member.index')->with('member', $member);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $neighborhood = DB::table('neighborhoods')
        ->get();
        return view('site.panel.member.create')->with('neighborhood',$neighborhood);
    } 

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $membro = new Member();
        $membro->fname          = $request->fname;
        $membro->lname          = $request->lname;
        $membro->birthday       = $request->birthday;
        $membro->member_type    = null;
        $membro->user_id        = null;
        if($membro->save()){
            $address = new Address();
            $address->address           = $request->address;
            $address->number            = $request->number;
            $address->complement        = $request->complement;
            $address->neighborhood_id   = $request->neighborhood_id;
            $address->address           = $request->address;
            $address->address_type      = 1;
            
            return redirect()->route('site.panel.member.index', $membro->id)->with('alert-success', 'Product updated successfully!');
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
