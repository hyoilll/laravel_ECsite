<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Owner; // Eloquent エロくアント式
use Illuminate\Support\Facades\DB; // QueryBuilder　クエリビルド式
use Carbon\Carbon;

class OwnersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');    
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $date_now = Carbon::now();
        $date_parse = Carbon::parse(now());
        echo $date_now, "\n";
        echo $date_parse;

        // エロくアント式の場合、'create_at'属性は最初からCarbon instanceになっている
        $e_all = Owner::all();

        // ビルドクエリ式の場合、'create_at'属性は最初からCarbon instanceになっていない
        $q_get = DB::table('owners')->select('name', 'created_at')->get();
        // $q_frist = DB::table('owners')->select('name')->first();

        // $c_test = collect([
        //     'name' => 'テスト'
        // ]);

        // dd($e_all, $q_get, $q_frist, $c_test);
        return view('admin.owners.index', compact('e_all', 'q_get'));
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
        //
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
