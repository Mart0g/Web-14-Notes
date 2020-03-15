/* NOTE:
    JavaScript objects' prototypes shouldn't be modified!
    Modify only your own created prototypes!
*/

/* ---------------------------------------------------------------------------------------- */
/*                                  Prototype-based inheritance                             */
/* ---------------------------------------------------------------------------------------- */

function Student(name, age, facNum) {
  this.name = name;
  this.age = age;
  this.facNum = facNum;
}

var studentOne = new Student("John Doe", 21, 12345);
var studentTwo = new Student("Jane Doe", 20, 54321);

// this won't work
Student.birthPlace = "Sofia";

// we need to add it to the constructor first
function Student(name, age, facNum, birthPlace) {
  this.name = name;
  this.age = age;
  this.facNum = facNum;
  this.birthPlace = birthPlace;
}

// or we can do it through the object's prototype
Student.prototype.birthPlace = "Sofia";

// we can also add functions through the prototype
Student.prototype.stringifyData = function() {
  return this.name + ", " + this.age + ", " + this.facNum;
};

/* ---------------------------------------------------------------------------------------- */
/*                                    First-class functions                                 */
/* ---------------------------------------------------------------------------------------- */
/* "the ability to be saved in variables, passed around as arguments or even returned from other functions" */

// all of these are valid samples
let fn = function doSomething() {};
let obj = { doSomething: function() {} };
let arr;
arr.push(function doSomething() {});

// function as a parameter
let fn2 = function(callback) {
  return callback();
};

// and then we can call it as an anonymous one
fn2(() => console.log("called"));

/* ---------------------------------------------------------------------------------------- */
/*                                  Values considered falsy                                 */
/* ---------------------------------------------------------------------------------------- */
const falsyValues = [false, 0, "", '', ``, null, undefined, NaN];

/* ---------------------------------------------------------------------------------------- */
/*                                  Looping through objects                                 */
/* ---------------------------------------------------------------------------------------- */
const student = { name: "John Doe", age: 25, facNum: 12345 };
Object.keys(student); // ["name", "age", "facNum"]
Object.values(student); // ["John Doe", 25, 12345]
Object.entries(student); // [["name", "John Doe"], ["age", 25], ["facNum", 12345]]
