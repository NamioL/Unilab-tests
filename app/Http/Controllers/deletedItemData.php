<?php


namespace App\Http\Controllers;


use App\Models\deletedItemsData;
use http\Env\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Products;

class deletedItemData extends Products
{

    public function saveData($id)
    {
        $dltData = new deletedItemsData();
        $dltData->user_id = Auth::User()->id;
        $dltData->product_id = $id;
        $dltData->save();
        $this->storeDelete($id);
        $this->delete($id);
        return redirect('/products');
    }
}
