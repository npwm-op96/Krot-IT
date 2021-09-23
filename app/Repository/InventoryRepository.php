<?
namespace App\Repository;

use App\Models\Inventory;
use App\Repository\IInventoryRepository;

class InventoryRepository implements IInventoryRepository
{   
    protected $inventory = null;

    public function getAllInventory()
    {
        return Inventory::all();
    }
    public function getInventoryById($id)
    {
        return Inventory::find($id);
    }
    public function createOrUpdate( $id = null, $collection = [] )
    {   
        if(is_null($id)) {
            $inventory = new Inventory;
            // $inventory->name = $collection['name'];
            // $inventory->email = $collection['email'];
            // $inventory->password = Hash::make('password');
            return $inventory->save();
        }
        $inventory = Inventory::find($id);
        // $inventory->name = $collection['name'];
        // $inventory->email = $collection['email'];
        return $inventory->save();
    }
    
    public function deleteInventory($id)
    {
        return Inventory::find($id)->delete();
    }
}