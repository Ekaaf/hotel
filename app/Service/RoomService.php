<?php

namespace App\Service;

use App\Models\FileModel;

class RoomService{
    
    public function getImages($id, $types){
        $images = FileModel::where('element_id',$id)->whereIn('type', $types)->get();
        $data = [];
        foreach($types as $type){
            $data[$type] = [];
        }
        foreach($images as $image){
            $data[$image->type][] = $image;
        }
        return $data;
    }
}
?>
