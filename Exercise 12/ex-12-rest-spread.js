// Pre-ES6

let args = [0, 1, 2];

function doSth(a, b, c) {
  /* your logic here */
}

// call the function by passing the args

doSth.apply(null, args);

// ES6

const doSthElse = (a, b, c) => {
  /* your logic here */
};

// just pass the args by spreading them

doSthElse(...args);

// how to combine arrays 101
// can also be used for e.g. copying arrays

let arr1 = ["Needed", "to", "complete"];
let arr2 = [...arr1, "my", "sentence"];

// what about using the rest operator as well?

let { a, b, ...rest } = { a: 1, b: 2, c: 3, d: 4 };
console.log(a); // 1
console.log(b); // 2
console.log(rest); // { c: 3, d: 4 }
