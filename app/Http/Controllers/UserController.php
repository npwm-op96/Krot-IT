<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use DataTables;

class UserController extends Controller
{
    public function index()
    {
      return view('admin.user.index');
    }

    public function getalluser(Request $requset)
    {
      if($requset->ajax()){
         $data = User::latest()->get();
         return Datatables::of($data)
         ->addIndexColumn()
         ->addColumn('action', function($row){
             $actionBtn = '<a href="javascript:void(0)" class="edit btn btn-success btn-sm">Edit</a> <a href="javascript:void(0)" class="delete btn btn-danger btn-sm">Delete</a>';
             return $actionBtn;
         })
         ->rawColumns(['action'])
         ->make(true);
      }
    }
}
