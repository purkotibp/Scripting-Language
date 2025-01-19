// 15. Write a JavaScript program to display the colors in the
// following way:
// • Sample array: color = ["Blue", "Green", "Red", "Orange", "Violet", "Indigo",
// "Yellow "]
// order = ["th", "st", "nd", "rd"]
// • Output:
// • "1st choice is Blue."
// • "2nd choice is Green."
// • "3rd choice is Red."
// Sample data

const color = ["Blue", "Green", "Red", "Orange", "Violet", "Indigo", "Yellow"];
const order = ["st", "nd", "rd", "th", "th", "th", "th"];

for (let i = 0; i < color.length; i++) {
  let choice = i + 1 + `${i < 3 ? order[i] : "th"}`;
  console.log(`${choice} choice is ${color[i]}.`);
}