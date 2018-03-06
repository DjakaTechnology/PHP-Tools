function AddDots($value, $separator = "."){      
  $vals = explode($separator, $value);
  $result;
  foreach($vals as $key=>$val){
    if($result != "")
      $result .=',';
   #$result .= str_replace("..", ",", strrev(implode('.',str_split(strrev(strval($val)),3)))); //Use this when using SQL double
   $result .= strrev(implode('.',str_split(strrev(strval($val)),3)));
   }
  return $result;
}
