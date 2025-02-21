# Unexpected Result Due to Early Return in PHP Loop

This example demonstrates a common, yet easily overlooked, error in PHP: unexpected behavior caused by an early return within a loop and implicit type juggling. The function `myFunc` calculates the sum of numbers from 0 to 9. However, an early return within the loop at `$i == 5` prematurely terminates the calculation, resulting in a sum of 15 instead of the expected 45.  The solution involves removing the early return and allowing the loop to complete its intended iterations.