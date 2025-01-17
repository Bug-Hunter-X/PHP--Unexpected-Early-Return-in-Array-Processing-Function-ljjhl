# PHP: Unexpected Early Return in Array Processing Function

This repository demonstrates a common error in PHP involving an unexpected early return from a function iterating over an array. The function `foo` prematurely exits when a `null` value is encountered, ignoring the rest of the array. This can lead to data loss and unexpected program behavior.

The `bug.php` file contains the erroneous code, while `bugSolution.php` provides the corrected version.

## Bug Description:
The `foo` function is designed to process an array of values. However, the inclusion of a premature `return []` statement when a `null` value is encountered causes the function to terminate early, returning an empty array regardless of the remaining elements in the input array. This unexpected behavior can be difficult to debug if not carefully considered.

## Solution:
The solution modifies the function to continue processing the array even when encountering `null` values.  Appropriate handling of `null` values is incorporated, ensuring that the function processes all elements correctly.