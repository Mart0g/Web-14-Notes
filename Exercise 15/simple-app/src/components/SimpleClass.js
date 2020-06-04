import React from "react";
// older approach for writing React

// React elements need a parent one if more than one
// This is done using React fragments
// They wrap the elements up but don't create an element in the DOM tree
// i.e. no need of empty divs if we only use them as a container
// Standard syntax: <Fragment> content </Fragment>
// Short syntax: <> content </>

// Function calls are only references, hence the lack of ()
// Otherwise they will be called when the component is mounted

class ToDoPageClass extends React.Component {
  state = {
    value: "",
  };

  handleOnClick = () => alert(`Ping, ${this.state.value}!`);

  handleOnChange = (event) => {
    event.persist();
    this.setState(() => {
      return { value: event.target.value };
    });
  };

  componentDidMount() {
    console.log("Mounted!");
  }

  componentDidUpdate() {
    console.log("Updated!");
  }

  componentWillUnmount() {
    console.log("Unmounted!");
  }

  render() {
    return (
      <>
        <p>
          {this.props.loggedIn
            ? `Hi, ${this.props.name}!`
            : `Bye, ${this.props.name}!`}
        </p>
        <input
          type="text"
          onChange={this.handleOnChange}
          value={this.state.value}
        />
        <button onClick={this.handleOnClick}>Submit</button>
      </>
    );
  }
}

export default ToDoPageClass;
