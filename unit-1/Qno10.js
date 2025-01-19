// 10. Write a JavaScript program that accept n number of integers into array and display the larger.

function findLargestNumber(numbers) {
    let largest = numbers[0];
  
    for (let i = 1; i < numbers.length; i++) {
      if (numbers[i] > largest) {
        largest = numbers[i];
      }
    }
  
    return largest;
  }
  
  function getInputAndDisplayLargest() {
    // let input = prompt("Enter list of numbers separated by comma eg: 1,2,3");
    let input = "1,3,2,4,5,6,6,10303,10,-2";
  
    let numbers = input.split(",").map(Number);
  
    if (numbers.some(isNaN)) {
      console.log("Please enter valid integers only.");
      return;
    }
  
    let largest = findLargestNumber(numbers);
    console.log("The largest number is:", largest);
  }
  
  getInputAndDisplayLargest();