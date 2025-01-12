function foo(array $arr) {
  foreach ($arr as $key => $value) {
    if ($value === 'bar') {
      unset($arr[$key]);
    }
  }
  return $arr;
}

$arr = ['foo', 'bar', 'baz'];
$result = foo($arr);
print_r($result); // Output: Array ( [0] => foo [2] => baz )

//This is the incorrect way to unset elements in array while looping in PHP. This is because PHP will re-index the array after each unset, so the index you're trying to remove might not be accurate after unset.

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
//Correct way to unset elements in array while looping in PHP by passing the array by reference.