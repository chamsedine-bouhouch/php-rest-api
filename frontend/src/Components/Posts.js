import React from "react";

import { Component } from "react";

class Posts extends Component {
 

  state = { posts: [] };
  componentDidMount() {
    fetch("http://localhost:8080/post")
      .then((res) => res.json())
      .then((data) => {
        this.setState({
          posts: data,
        });
        // console.log(data[0]);
      });
  }

  componentWillUnmount() {}
  render() {
    return (
      <>
        <h1> My Posts List</h1>
        <ul>
        {/* {this.posts.map((post,ind) =>  <div key={ind} >{post} </div>)} */}
        {this.state.posts.map((item, ind) => (
          <li key={ind}>{item.title} : {item.body}</li>
        ))}
        </ul>
      </>
    );
  }
}

export default Posts;
