function countVowels(str) {
  const vowels = str.match(/[aeiouAEIOU]/g);
  return vowels ? vowels.length : 0;
}

console.log(countVowels('hello world'));  // Output: 3
console.log(countVowels('javascript'));   // Output: 3
console.log(countVowels('rhythm'));       // Output: 0
