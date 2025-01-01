The solution involves explicitly checking for `NULL` before performing any operation on the retrieved value.  This ensures that your code gracefully handles cases where the key is missing.

```php
<?php
$myArray = ['a' => 1, 'b' => 2];

//Check if the key exists before accessing it
$value = $myArray['c'] ?? null; //Null coalescing operator 

if ($value === null) {
  echo 'Key not found';
} else {
  echo $value * 2; 
}

//Alternative using isset
$value = isset($myArray['c']) ? $myArray['c'] : 0; 

?>
```

This revised code uses the null coalescing operator (`??`) to assign a default value (null in this case) if the key 'c' is not found. Alternatively, using `isset()` provides a concise way to check for the key's existence.