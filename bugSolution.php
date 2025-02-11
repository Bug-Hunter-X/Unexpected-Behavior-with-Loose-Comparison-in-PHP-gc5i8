function foo(a, b) {
  if (a === b) {
    return true;
  }
  return false;
}

//This will return false because of the strict equality operator
var result = foo(0, "0");
console.log(result); // Output: false

function bar(a, b) {
  if (a == b) {
    return true;
  }
  return false;
}
//This will return true because of the loose equality operator
var result = bar(0, "0");
console.log(result); // Output: true