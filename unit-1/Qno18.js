// 18. Write a JavaScript function to get difference between two dates in days.
/*
const date1 = prompt("Enter the 1st date in the year-month-date format separated by - sign no spaces");
const date2 = prompt("Enter the 2nd date in the year-month-date format separated by - sign no spaces");

let [year1, month1, day1] = date1.split("-").map(Number);
let [year2, month2, day2] = date2.split("-").map(Number);

const firstDay = new Date(year1, month1 - 1, day1);
const secondDay = new Date(year2, month2 - 1, day2);

const diffMilliseconds = Math.abs(firstDay - secondDay);
const diffDays = Math.floor(diffMilliseconds / (1000 * 60 * 60 * 24));
console.log(diffDays);

*/

let day1 = Math.floor(Math.random() * 12);
let month1 = Math.floor(Math.random() * 12);
let year1 = Math.floor(Math.random() * 12);

let day2 = Math.floor(Math.random() * 12);
let month2 = Math.floor(Math.random() * 12);
let year2 = Math.floor(Math.random() * 12);

const date = new Date();

const firstDay = new Date(date.getFullYear(), month1, day1);
const secondDay = new Date(date.getFullYear(), month2, day2);

console.log(firstDay, "->firstDay  ", secondDay, "->SecondDay");
const diff = firstDay - secondDay;

console.log(Math.ceil(diff / (1000 * 3600 * 24)));