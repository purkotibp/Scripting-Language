function reverseNumber(num) {
  // Convert number to a string, split it into an array, reverse the array, and join it back to a string
  let reversed = num.toString().split('').reverse().join('');
  
  // Convert the reversed string back to a number
  return parseInt(reversed) * Math.sign(num); // Maintain the sign (positive or negative)
}

// Example usage:
console.log(reverseNumber(12345));  // Output: 54321
console.log(reverseNumber(-9876));  // Output: -6789
