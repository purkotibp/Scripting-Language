// 26. Write a function called tenMostFrequentWords which
// get the ten most frequent word from a string taking user
// input.

function tenMostFrequentWords(inp) {
  inp = inp.toLowerCase().replace(/[^a-z\s]/g, "");
  let words = inp.split(" ");

  let wordCount = {};

  words.forEach((word) => {
    if (wordCount[word]) {
      wordCount[word]++;
    } else {
      wordCount[word] = 1;
    }
  });
  wordCount = Object.entries(wordCount);
  console.log(wordCount);
  wordCount.sort((a, b) => b[1] - a[1]);
  console.log(wordCount);
}

let userInput =
  "The accountInfo method now returns both total income and total expenses in a more readable format.";

tenMostFrequentWords(userInput);