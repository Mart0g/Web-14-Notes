// Pre-ES6

const StudentES5 = {
  firstNameES5: "Ivan",
  lastNameES5: "Ivanov",
  ageES5: 20,
  facNumES5: 65000,
};

// property assignment

const firstNameES5 = StudentES5.firstNameES5;
const lastNameES5 = StudentES5.lastNameES5;
const ageES5 = StudentES5.ageES5;
const facNumES5 = StudentES5.facNumES5;

// ES6

const StudentES6 = {
  firstNameES6: "Ivan",
  lastNameES6: "Ivanov",
  ageES6: 20,
  facNumES6: 65000,
};

// destructuring

const { firstNameES6, lastNameES6, ageES6, facNumES6 } = StudentES6;

// also works if we define the variables before the actual destructuring

let obj1, obj2;
({ obj1, obj2 } = { obj1: 1, obj2: 2 });
console.log(obj1); // 1
console.log(obj2); // 2

// array destructuring

const names = ["Ivan", "Petrov", "Ivanov"];

const [first, second, last] = names; // we can name them in whatever way we want
console.log(last); // Ivanov
const [, name2] = names; // we might only need the element with a specific index in the array
console.log(name2); // Petrov
const [n, a, m, e] = first; // we can destructure any iterable - in this case the string "Ivan"
console.log(n, a, m, e); // I v a n
