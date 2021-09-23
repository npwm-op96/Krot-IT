<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repository\IInventoryRepository;
use DataTables;

class InventoryController extends Controller
{
    public $inventory;

    public function __construct(IInventoryRepository $inventory )
    {
        $this->inventory = $inventory;

    }
    public function index(){
        return view('admin.inventory.index');
    }
    public function showInventory(Request $requset)
    {
        if($requset->ajax()){
           $inventories = $this->inventory->getAllInventory();
        //    $inventoriess =  $inventories->toJson();
        //    return $inventories;
           return Datatables::of($inventories)
           ->addIndexColumn()
           ->addColumn('action', function($row){
               $actionBtn = '<a href="javascript:void(0)" class="edit btn btn-success btn-sm">Edit</a> <a href="javascript:void(0)" class="delete btn btn-danger btn-sm">Delete</a>';
               return $actionBtn;
           })
           ->rawColumns(['action'])
           ->make(true);
        }
      }
    public function inventoryCreatePage(Request $request){
        
    }
    public function inventorypCreate(Request $request){
        
    }
    public function inventoryEditPage(Request $request){
        
    }
    public function inventoryEdite(Request $request){
        
    }
    public function inventoryDelete(Request $request){
        
    }
}
