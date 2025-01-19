// 17. Write a JavaScript conditional statement to find the largest
// of five numbers. Display an alert box to show the result taking
// input using prompt.

// const numArr = prompt("Enter the numbers as a list");
// let numArr = [1, 2, 3, -4, -1];

numArr = numArr.sort((a, b) => a - b);

console.log(numArr[numArr.length - 1]);