function myFunc() {
  $result = 0;
  for ($i = 0; $i < 10; $i++) {
    $result += $i;
    if ($i == 5) {
      return $result; // Early return inside loop
    }
  }
  return $result;
}

$sum = myFunc();
echo "Sum: " . $sum; //output will be 15 instead of 45