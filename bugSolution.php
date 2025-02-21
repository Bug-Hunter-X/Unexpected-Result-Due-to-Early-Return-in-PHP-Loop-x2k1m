function myFunc() {
  $result = 0;
  for ($i = 0; $i < 10; $i++) {
    $result += $i;
  }
  return $result;
}

$sum = myFunc();
echo "Sum: " . $sum; // Output: Sum: 45