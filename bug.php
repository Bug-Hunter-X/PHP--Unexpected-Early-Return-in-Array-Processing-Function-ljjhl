function foo(array $arr): array {
  foreach ($arr as $value) {
    if ($value === null) {
      return []; // Incorrect early return
    }
    // ... process $value ...
  }
  return $arr;
}