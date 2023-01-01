<?php 
namespace App\Filters;

use Illuminate\Http\Request;

class LocalFilter{
    protected $pair_arr = [];
    protected $map_col = [];
    protected $map_ops = [];
    public function transform(Request $request){
        $eloQue = [];
        foreach($this->pair_arr as $keys => $values){
            $query = $request->query($keys);
            if(!isset($query)){
                continue;
            }
            $column = $this->map_col[$keys] ?? $keys;
            foreach($values as $value){
                if(isset($query[$value])){
                    $eloQue[] = [$column, $this->map_ops[$value], $query[$value]];
                }
            }
        }
        return $eloQue;
    }
}