import React, { Component } from "react";
import ReactDOM from "react-dom/client";
import axios from "axios";

class AxioPost extends Component {
    constructor(props) {
        super(props);
        this.state = {
            pcd: "",
            pname: "",
        };
    }

    changeHandler = (e) => {
        this.setState({ [e.target.name]: e.target.value });
    };
    submitHandler = (e) => {
        e.preventDefault();
        this.setState();
        console.log(this);
        axios
            .post("http://localhost:8000/api/product/list", this.state)
            .then((response) => {
                console.log(response);
            })
            .catch((error) => {
                console.log(error);
            });
    };

    render() {
        return (
            <div>
                <div className="vh-150">
                    <div className="container h-100">
                        <br />
                        <br />
                        <br />
                        <br />
                        <div className="row d-flex justify-content-center align-items-center h-100">
                            <div className="col-lg-12 col-xl-11">
                                <div className="card text-black">
                                    <div className="card-body p-md-5">
                                        <div className="row justify-content-center">
                                            <div className="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
                                                <p className="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">
                                                    Sign up as a Driver
                                                </p>

                                                <form
                                                    action="reactaxiospost"
                                                    method="POST"
                                                    className="mx-1 mx-md-4"
                                                >
                                                    <div className="d-flex flex-row align-items-center mb-4">
                                                        <i className="fas fa-user fa-lg me-3 fa-fw"></i>
                                                        <div className="form-outline flex-fill mb-0">
                                                            <input
                                                                type="text"
                                                                id="form3Example1c"
                                                                name="name"
                                                                className="form-control"
                                                                value=""
                                                                readOnly
                                                            />
                                                            <label
                                                                className="form-label"
                                                                htmlFor="form3Example1c"
                                                            >
                                                                Your Name
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div className="d-flex flex-row align-items-center mb-4">
                                                        <i className="fas fa-envelope fa-lg me-3 fa-fw"></i>
                                                        <div className="form-outline flex-fill mb-0">
                                                            <input
                                                                type="email"
                                                                id="form3Example3c"
                                                                name="email"
                                                                className="form-control"
                                                                value=""
                                                                readOnly
                                                            />
                                                            <label
                                                                className="form-label"
                                                                htmlFor="form3Example3c"
                                                            >
                                                                Your Email
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div className="d-flex flex-row align-items-center mb-4">
                                                        <i className="fas fa-lock fa-lg me-3 fa-fw"></i>
                                                        <div className="form-outline flex-fill mb-0">
                                                            <input
                                                                type="password"
                                                                id="form3Example4c"
                                                                name="password"
                                                                className="form-control"
                                                                value=""
                                                                readOnly
                                                            />
                                                            <label
                                                                className="form-label"
                                                                htmlFor="form3Example4c"
                                                            >
                                                                Password
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div className="d-flex flex-row align-items-center mb-4">
                                                        <i className="fas fa-user fa-lg me-3 fa-fw"></i>
                                                        <div className="form-outline flex-fill mb-0">
                                                            <input
                                                                type="text"
                                                                id="form3Example1c"
                                                                name="phone"
                                                                className="form-control"
                                                                value=""
                                                                readOnly
                                                            />
                                                            <label
                                                                className="form-label"
                                                                htmlFor="form3Example1c"
                                                            >
                                                                Phone Number
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div className="d-flex flex-row align-items-center mb-4">
                                                        <i className="fas fa-user fa-lg me-3 fa-fw"></i>
                                                        <div className="form-outline flex-fill mb-0">
                                                            <input
                                                                type="text"
                                                                id="form3Example1c"
                                                                name="nid"
                                                                className="form-control"
                                                                value=""
                                                                readOnly
                                                            />
                                                            <label
                                                                className="form-label"
                                                                htmlFor="form3Example1c"
                                                            >
                                                                NID
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div className="d-flex flex-row align-items-center mb-4">
                                                        <i className="fas fa-user fa-lg me-3 fa-fw"></i>
                                                        <div className="form-outline flex-fill mb-0">
                                                            <input
                                                                type="text"
                                                                id="form3Example1c"
                                                                name="address"
                                                                className="form-control"
                                                                value=""
                                                                readOnly
                                                            />
                                                            <label
                                                                className="form-label"
                                                                htmlFor="form3Example1c"
                                                            >
                                                                Address
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <button
                                                        type="submit"
                                                        className="btn btn-primary btn-lg"
                                                    >
                                                        Register
                                                    </button>
                                                    <button
                                                        type="button"
                                                        className="btn btn-success btn-lg"
                                                    >
                                                        <a href="home">Back</a>
                                                    </button>
                                                </form>
                                            </div>
                                            <div className="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">
                                                <img
                                                    src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/draw1.webp"
                                                    className="img-fluid"
                                                    alt="Sample image"
                                                ></img>
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

export default AxioPost;

if (document.getElementById("axiopost")) {
    const Index = ReactDOM.createRoot(document.getElementById("axiopost"));

    Index.render(
        <React.StrictMode>
            <AxioPost />
        </React.StrictMode>
    );
}
