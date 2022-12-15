import React, { Component } from "react";
import ReactDOM from "react-dom";
import axios from "axios";

class DriverGet extends Component {
    state = {
        posts: [],
    };

    componentDidMount() {
        axios
            .get("http://127.0.0.1:8000/api/driver/profile/1")
            .then((response) => {
                const posts = response.data;
                this.setState({ posts });
            });
    }

    render() {
        return (
            <div>
                <br /> <br /> <br /> <br />
                <div className="content">
                    <div className="container">
                        <div className="main-body">
                            <div className="row gutters-sm">
                                <div className="col-md-4 mb-3">
                                    <div className="card">
                                        <div className="card-body">
                                            <div className="d-flex flex-column align-items-center text-center">
                                                <h2>Welcome</h2>
                                                <hr></hr>
                                                <img
                                                    src="https://bootdey.com/img/Content/avatar/avatar7.png"
                                                    alt="Admin"
                                                    className="rounded-circle"
                                                    width="150"
                                                ></img>
                                                {this.state.posts &&
                                                    this.state.posts.map(
                                                        (post) => (
                                                            <div className="mt-3">
                                                                <hr></hr>
                                                                <h4>
                                                                    {post.name}
                                                                </h4>
                                                            </div>
                                                        )
                                                    )}
                                            </div>
                                        </div>
                                    </div>
                                    <div className="card mt-3"></div>
                                </div>
                                <div className="col-md-8">
                                    <div className="card mb-3">
                                        <div className="card-body">
                                            <div className="row">
                                                <div className="col-sm-3">
                                                    <h6 className="mb-0">
                                                        Full Name
                                                    </h6>
                                                </div>
                                                <div className="col-sm-9 text-secondary">
                                                    {/* {post.name} */}
                                                </div>
                                            </div>
                                            <hr></hr>
                                            <div className="row">
                                                <div className="col-sm-3">
                                                    <h6 className="mb-0">
                                                        Email
                                                    </h6>
                                                </div>
                                                <div className="col-sm-9 text-secondary">
                                                    {/* {post.email} */}
                                                </div>
                                            </div>
                                            <hr></hr>
                                            <div className="row">
                                                <div className="col-sm-3">
                                                    <h6 className="mb-0">
                                                        Phone
                                                    </h6>
                                                </div>
                                                <div className="col-sm-9 text-secondary">
                                                    {/* {post.phone} */}
                                                </div>
                                            </div>
                                            <hr></hr>
                                            <div className="row">
                                                <div className="col-sm-3">
                                                    <h6 className="mb-0">
                                                        NID
                                                    </h6>
                                                </div>
                                                <div className="col-sm-9 text-secondary">
                                                    {/* {post.nid} */}
                                                </div>
                                            </div>
                                            <hr></hr>
                                            <div className="row">
                                                <div className="col-sm-3">
                                                    <h6 className="mb-0">
                                                        Address
                                                    </h6>
                                                </div>
                                                <div className="col-sm-9 text-secondary">
                                                    {/* {post.address} */}
                                                </div>
                                            </div>
                                            <hr></hr>
                                            <div className="row">
                                                <div className="col-sm-12">
                                                    <a
                                                        className="btn btn-info "
                                                        href="#"
                                                    >
                                                        Edit
                                                    </a>
                                                    <a
                                                        className="btn btn-info "
                                                        href="/home"
                                                    >
                                                        Back
                                                    </a>
                                                    <a
                                                        className="btn btn-info "
                                                        href="3"
                                                    >
                                                        Logout
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        );
    }
}

export default DriverGet;

if (document.getElementById("axioget")) {
    const Index = ReactDOM.createRoot(document.getElementById("axioget"));

    Index.render(
        <React.StrictMode>
            <DriverGet />
        </React.StrictMode>
    );
}
