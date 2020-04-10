/* ________________________________________________________________________________________________ */
/*                                                                                                  */
/*          Below is a list with a couple of tasks for practice and possible solutions              */
/* List is not extensive in any case and tasks below can be done in different ways - be creative :) */
/* ________________________________________________________________________________________________ */

/* ---------------------------------------------------------------------------------------- */
/*                                Hello World simple function                               */
/* ---------------------------------------------------------------------------------------- */

// old-school syntax (pre-ES6)
hello = function() {
  return "Hello World!";
};

// even more old-school but more recognizable
function hello() {
  return "Hello World!";
}

// new arrow function syntax (with no parameters)
const hello = () => {
  return "Hello World!";
};

// no need for keyword in case we return a single value
const hello = () => "Hello World!";

// arrow function with parameters
const hello = (val) => "Hello " + val;

// we can skip the braces if we have a single parameter
const hello = val => "Hello " + val;

/* ---------------------------------------------------------------------------------------- */
/*                            Arrows, Arrows, Template Literals 														*/
/* ---------------------------------------------------------------------------------------- */

// long syntax with explicit parameter check
const oneForAll = name => {
  if (!name) return "One for you, one for me.";
  return "One for " + name + ", one for me.";
};

// value returned with a template literal instead of concatenation
const oneForAll = name => {
  if (!name) return "One for you, one for me.";
  return `One for ${name}, one for me.`;
};

// check performed with a ternary operator
const oneForAll = name =>
  name ? `One for ${name}, one for me.` : `One for you, one for me.`;

// check performed with a single || operator (defaults to second value if not provided)
const oneForAll = name => `One for ${name || "you"}, one for me.`;

// default value provided in definition to avoid further boolean operators
const oneForAll = (name = "you") => `One for ${name}, one for me.`;

/* ---------------------------------------------------------------------------------------- */
/*                                Simple Leap Year calculation 															*/
/* ---------------------------------------------------------------------------------------- */

// ternary operator abuse - don't do it
const isLeap = year =>
  year % 400 ? (year % 100 ? (year % 4 ? false : true) : false) : true;

// a straight boolean condition which makes the function/variable true or false
const isLeap = year => year % 400 == 0 || (year % 100 != 0 && year % 4 == 0);

/* ---------------------------------------------------------------------------------------- */
/*                                    Reversing a string 																		*/
/* ---------------------------------------------------------------------------------------- */

// reverse by using a loop
const reverseString = str => {
  let reverseStr = "";
  for (let i = str.length - 1; i >= 0; i--) {
    reverseStr += str[i];
  }
  return reverseStr;
};

// reverse by using built-in functions
const reverseString = str => {
  let splitStr = str.split("");
  let reverseStr = splitStr.reverse();
  return reverseStr.join("");
};

// reverse by chaining functions for simplicity
const reverseString = str =>
  str
    .split("")
    .reverse()
    .join("");

/* ---------------------------------------------------------------------------------------- */
/*       Checking if a sentence has pangrams (they contain all letters from the alphabet)		*/
/* ---------------------------------------------------------------------------------------- */
/*                   Sample: "The quick brown fox jumps over the lazy dog." 								*/
/* ---------------------------------------------------------------------------------------- */

// solution with let and separate functions
let alphabet = "abcdefghijklmnopqrstuvwxyz";
let sentence = "";

function isPangram(sentence2) {
  sentence = sentence2.toLowerCase().split("");
  return alphabet.split("").every(isCharInSentence);
}

function isCharInSentence(currentChar) {
  return sentence.indexOf(currentChar) !== -1;
}

// solution with const and a single function
const alphabet = "abcdefghijklmnopqrstuvwxyz";
const alphabetArray = alphabet.split("");

const isPangram = sentence => {
  sentence = sentence
    .replace(/\s/g, "")
    .toLowerCase()
    .split("");
  let answer = true;
  alphabetArray.forEach(element => {
    if (!sentence.includes(element)) {
      answer = false;
    }
  });
  return answer;
};

// combined solution with skipping boolean checks and using a single function
const alphabet = "abcdefghijklmnopqrstuvwxyz";
const isPangram = sentence =>
  alphabet.split("").every(char => sentence.toLowerCase().includes(char));

/* ________________________________________________________________________________________________ */
/*                                                                                                  */
/*     Below are some extra tasks with arrays for practice - cooler solutions added afterwards :)   */
/* ________________________________________________________________________________________________ */

/* ---------------------------------------------------------------------------------------- */
/*            Duplicating Arrays - i.e. [1, 2, 3, 4] -> [1, 1, 2, 2, 3, 3, 4, 4] 						*/
/* ---------------------------------------------------------------------------------------- */

// standard way
let array = [1, 2, 3, 4];
let duplicated = [];

for (let i = 0; i < array.length; ++i) {
  duplicated.push(array[i]);
  duplicated.push(array[i]);
}

// with ES6 but kinda overkill (too complicated for this task)
let array = [1, 2, 3, 4];
let duplicated = array
  .map(function(item) {
    return [item, item];
  })
  .reduce(function(initial, result) {
    return initial.concat(result);
  });

// again with ES6 but much more readable
let array = [1, 2, 3, 4];
let duplicated = array.reduce((res, current) => {
  return res.concat([current, current]);
}, []);

/* ---------------------------------------------------------------------------------------- */
/*            Finding the square sum of array elements - i.e. [1, 2, 3, 4] -> 30 						*/
/* ---------------------------------------------------------------------------------------- */

// and again, normal vanilla way
const squareSum = array => {
  var sum = 0,
    i = array.length;
  while (i--) sum += Math.pow(array[i], 2);
  return sum;
};

// and again, a sample for a fancy ES6 way
const squareSum = array => array.reduce((arr, num) => arr + num ** 2, 0);
