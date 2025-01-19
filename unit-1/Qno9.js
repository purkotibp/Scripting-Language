// 9. Write a JavaScript program that accept three integers and display the larger and smaller.

const num1 = prompt("Enter num1");
const num2 = prompt("Enter num2");
const num3 = prompt("Enter num3");

console.log(
  num1 > num2 ? (num1 > num3 ? num1 : num3) : num2 > num3 ? num2 : num3
);