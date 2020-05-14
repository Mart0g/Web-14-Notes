// let's have this function which logs a string after a random amount of time

function printString(string) {
  setTimeout(() => {
    console.log(string);
  }, Math.floor(Math.random() * 100) + 1);
}

// every time this is called, we receive the strings in a different/random order
// each one of them has their own and independent timeout which makes them asynchronous

function printStrings() {
  printString("Hey");
  printString("there");
  printString("beautiful");
}

// this means JS doesn't wait for one function to finish before running the next one, hence the results
// this can be handled in a couple of ways, let's take a look into them:

// Pre-ES6
// a.k.a Callbacks

// we now can get the same result every time (i.e. simulate synchronous code)
// the callback is a function which is run after the first one finishes
// this is in order to make sure we get the results in the right/expected order

function printString(string, callback) {
  setTimeout(() => {
    console.log(string);
    callback();
  }, Math.floor(Math.random() * 100) + 1);
}

// the main problem with this is called "callback hell"
// basically we're nesting functions and at some point it will become extremely unreadable
// we will also lose the main idea and get confused about which function does what

function printStrings() {
  printString("Hey", () => {
    printString("there", () => {
      printString("beautiful", () => {});
    });
  });
}

// ES6
// a.k.a Promises

// promises try to solve the problem of nesting and also make the code more readable
// they get resolved or rejected based on what we get from the function call

function printString(string) {
  return new Promise((resolve, reject) => {
    setTimeout(() => {
      console.log(string);
      resolve();
    }, Math.floor(Math.random() * 100) + 1);
  });
}

// we can also chain them for better readability and a more understandable flow of events
// the call after every function in the chain returns a Promise result which is being passed on to the next one

function printStrings() {
  printString("Hey")
    .then(() => printString("there"))
    .then(() => printString("beautiful"));
}

// ES7
// a.k.a Async / Await

// in its essence, the async/await is a syntactic sugar for promises
// still, it makes the code a lot more readable and simulates synchronous code pretty well

// this means we don't have to change our function at all

function printString(string) {
  return new Promise((resolve, reject) => {
    setTimeout(() => {
      console.log(string);
      resolve();
    }, Math.floor(Math.random() * 100) + 1);
  });
}

// however, we can make the call we want much more understandable
// i.e. no chaining and even with a lot of calls, it's quite clear which one does what

async function printStrings() {
  await printString("Hey");
  await printString("there");
  await printString("beautiful");
}

// or, to be even fancier with the syntax

const printStrings = async () => {
  await printString("Hey");
  await printString("there");
  await printString("beautiful");
};
