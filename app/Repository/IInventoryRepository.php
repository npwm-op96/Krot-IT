<?
namespace App\Repository;

interface IInventoryRepository 
{
    public function getAllInventory();

    public function getInventoryById($id);

    public function createOrUpdate( $id = null, $collection = [] );

    public function deleteInventory($id);
}