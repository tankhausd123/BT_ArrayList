<?php


class MyList
{
public $arrayList;
public $limit = 10;
public function __construct($arrayList = "")
{
    if (is_array($arrayList)){
        $this->arrayList = $arrayList;
    }else{
        $this->arrayList = array();
    }
}
public function addLastArray($item){
    if ( count($this->arrayList) < $this->limit)
    {
        array_push($this->arrayList, $item);
        return $this->arrayList;
    }
    echo "can't add!";

}
public function addIndex($index, $data){
    if ($index < count($this->arrayList) && (count($this->arrayList) < $this->limit)){
        foreach ($this->arrayList as $key => $item){
            if ($index == $key){
                $value = $data;
                for($key = $index; $key < count($this->arrayList); $key++){
                    $temp = $this->arrayList[$key];
                    $this->arrayList[$key] = $value;
                    $value = $temp;
                }
                array_push($this->arrayList, $value);
            }
        }
        return $this->arrayList;
    }else {
        echo "can't add!";
    }
}
public function deleteIndex($index){
    foreach ($this->arrayList as $key){
        if ($index == $key){
            array_splice($this->arrayList, $key);
        }
    }
    return $this->arrayList;
}

    public function getArrayList(): array
    {
        return $this->arrayList;
    }
}