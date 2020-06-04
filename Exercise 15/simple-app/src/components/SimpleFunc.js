import React, { useState, useEffect } from "react";
// modern approach for writing React

// Issue 1 : no state originally
// Issue 2 : no didMount, didUpdate, willUnmount methods
// this has changed with introducing hooks
// Issue 1 -> useState
// Issue 2 -> useEffect

// no 'this' object
// props are provided as function parameters
// they can be destructured directly
// direct return, without a render() method

const ToDoPageFunc = ({ loggedIn, name }) => {
  const [value, setValue] = useState("");

  const handleOnClick = () => alert(`Ping, ${value}!`);

  const handleOnChange = (event) => {
    event.persist();
    setValue(event.target.value);
  };

  useEffect(() => {
    console.log("Updated!");
    return () => console.log("Unmounted!");
  });

  return (
    <>
      <p>{loggedIn ? `Hi, ${name}!` : `Bye, ${name}!`}</p>
      <input type="text" onChange={handleOnChange} value={value} />
      <button onClick={handleOnClick}>Submit</button>
    </>
  );
};

export default ToDoPageFunc;
