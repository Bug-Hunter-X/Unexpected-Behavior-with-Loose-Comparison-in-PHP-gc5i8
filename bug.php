function foo(a, b) {
  if (a === b) {
    return true;
  }
  return false;
}

//This will always return false because the strict equality operator will only return true if both operands are of the same type and have the same value. 
var result = foo(0, "0");
console.log(result); // Output: false