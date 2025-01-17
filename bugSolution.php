function foo(array $arr): array {
  $result = [];
  foreach ($arr as $value) {
    if ($value !== null) {
      // Process non-null values
      $result[] = $value * 2; // Example processing
    }
  }
  return $result;
}