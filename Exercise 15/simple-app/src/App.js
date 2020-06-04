import React from "react";
import { SimpleClass, SimpleFunc } from "./components";
import logo from "./logo.svg";
import "./App.css";

// loggedIn in this case is short for loggedIn={true}
// if not provided, it means that it's undefined
// therefore, since it's a boolean, it can be considered false

function App() {
  return (
    <div className="App">
      <header className="App-header">
        <img src={logo} className="App-logo" alt="logo" />
      </header>
      <SimpleClass name="Martin" loggedIn />
      <SimpleFunc name="Pesho" />
    </div>
  );
}

export default App;
