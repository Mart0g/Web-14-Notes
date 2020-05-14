const varExample = () => {
  var exmp = 5;
  console.log(exmp); // logs 5
  if (true) {
    var exmp = 10;
    console.log(exmp); // logs 10
  }
  console.log(exmp); // logs 10
};

const varExample2 = () => {
  var exmp = 5;
  var exmp = 10;
  console.log(exmp); // logs 10
};

const letExample = () => {
  let exmp = 5;
  console.log(exmp); // logs 5
  if (true) {
    let exmp = 10;
    console.log(exmp); // logs 10
  }
  console.log(exmp); // logs 5
};

const letExample2 = () => {
  let exmp = 5;
  let exmp = 10; // logs error - Uncaught SyntaxError: Identifier 'exmp' has already been declared.
  console.log(exmp);
};

const constExample = () => {
  const EXAMPLE = 10;
  console.log(EXAMPLE); // logs 10
};

const constExample2 = () => {
  const EXAMPLE = 5;
  console.log(EXAMPLE); // logs 5
  EXAMPLE = 10; // logs error - TypeError: Assignment to constant variable.
  console.log(EXAMPLE);
};

// To sum it all up:
// if defined outside a function, all of them have a global scope
// if defined inside a function:
// var - in a condition/loop/etc. - function scope, can be rewritten, can be redefined
// let - in a condition/loop/etc. - block scope, can be rewritten, cannot be redefined
// const - in a condition/loop/etc. - block scope, cannot be rewritten, cannot be redefined
