function fooCorrect(array &$arr) {
  foreach ($arr as $key => $value) {
    if ($value === 'bar') {
      unset($arr[$key]);
    }
  }
}

$arr = ['foo', 'bar', 'baz'];
fooCorrect($arr);
print_r($arr); // Output: Array ( [0] => foo [2] => baz )

//Alternatively, you can use array_filter or other functional approaches to filter array elements without modifying the array during iteration. This is generally considered safer and cleaner. 

$arr = ['foo', 'bar', 'baz'];
$result = array_filter($arr, function ($value) { return $value !== 'bar';});
print_r($result); // Output: Array ( [0] => foo [2] => baz )