import React, { Component } from 'react';
import Box from './chatbox/Box';
import Form from './chatbox/Form';

export default class Chatbox extends Component {

    constructor(props) {
        super(props);
    }

    render() {
        return (
            <div className="container">
                <div className="chatbox">
                    <h1 className="form-header">Message Centre</h1>
                    <Box messages={this.props.messages}/>
                    <Form submit={this.props.submit} />
                </div>
            </div>
        )
    }
}