function capitalizeFirstLetter(str) {
  return str
    .split(' ')
    .map(word => word.charAt(0).toUpperCase() + word.slice(1).toLowerCase())
    .join(' ');
}

console.log(capitalizeFirstLetter('hello world'));  // Output: 'Hello World'
console.log(capitalizeFirstLetter('javaScript is awesome'));  // Output: 'Javascript Is Awesome'
