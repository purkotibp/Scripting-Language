// Write a JavaScript function to check whether an input is an array or not.

function isArray(arr) {
    return Array.isArray(arr);
  }
  
  console.log(isArray({}));
  console.log(isArray([]));