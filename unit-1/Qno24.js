// 24. Write a JavaScript program to perform following task.

// a. Create an empty object called dog
let dog = {};

// b. Print the dog object on the console
console.log(dog);

// c. Add name, legs, color, age, and bark properties for the dog object
dog.name = "Buddy";
dog.legs = 4;
dog.color = "brown";
dog.age = 3;
dog.bark = function () {
  return "Woof Woof";
};

// d. Get name, legs, color, age, and bark value from the dog object
console.log("Dog Name:", dog.name);
console.log("Dog Legs:", dog.legs);
console.log("Dog Color:", dog.color);
console.log("Dog Age:", dog.age);
console.log("Dog Bark:", dog.bark());

// e. Set new properties for the dog object: breed, getDogInfo
dog.breed = "Golden Retriever";
dog.getDogInfo = function () {
  return `Name: ${this.name}, Breed: ${this.breed}, Age: ${this.age} years, Color: ${this.color}, Legs: ${this.legs}`;
};

// Test the new properties
console.log("Dog Breed:", dog.breed);
console.log("Dog Info:", dog.getDogInfo());