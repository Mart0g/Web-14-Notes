// Pre-ES6

// we need to specifically add new lines at the end

const string = "first line\n \
second line";

// or concatenate strings using the + sign

const str1 = "my text";
const str2 = "is here";
const oldResult = str1 + " " + str2 + "?";

// ES6

// renders as-is
// spacings we leave are meaningful and can impact our strings

const string = `Hey
this

string
is awesome!`;

// one of the best things about template literals is variable interpolation

const expression = "else";
const string = `something ${expression}`; // something else

// the one with the concatenation

const newResult = `${str1} ${str2}?`; // no extra symbols or whatsoever required

// we can also add expressions, functions, etc.

const sum = `sum: ${1 + 2 + 3}`;
const someFunc = () => true; // arrow function, btw
const funcResult = `something ${someFunc() ? "cool" : "old"}`;
