// Pre-ES6

function login(name) {
  if (typeof name == undefined) {
    name = "Anderson";
  }

  // or a little bit more modern

  name = name || "Anderson";
  console.log("Welcome back, Mr. " + name);
}

// ES6

const login = (name = "Anderson") => {
  console.log(`Welcome back, Mr. ${name})`);
};

login("Duhovnikov"); // Welcome back, Mr. Duhovnikov
login(); // Welcome back, Mr. Anderson
login(" "); // Welcome back, Mr.

// we can also use a function as a default value

const defaultNum = () => 5;
const square = (num = defaultNum()) => num * num;

square(10); // 100
square(); // 25

// we can use this if we e.g. expect undefined or some further parameters

const logNumbers = (a = 10, b, c = 100, d) => console.log(a, b, c, d);

logNumbers(undefined, 10, undefined, 100); // 10 10 100 100
logNumbers(100, 10, 10); // 100 10 10 undefined
logNumbers(undefined, 10); // 10 10 100 undefined
logNumbers(100); // 100 undefined 100 undefined
logNumbers(); // 10 undefined 100 undefined
