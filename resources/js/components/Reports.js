import React, { Component } from 'react';
import ReactDOM from 'react-dom';

    

 function getReports() {
    fetch('http://localhost:8000/api/reports')
        .then(function(response) {
            return response.json();
        })
        .then(function(res) {
            alert(res[0].title)
            return res
        });           
}

export default class Reports extends Component {
    constructor() {
        super();
        this.state = {
            reports
        };
    }  


    render() {
        let formReports = document.getElementById('form-reports');
        formReports.addEventListener("submit", function(event) {
            event.preventDefault()
            getReports()
        });

        let reportsList = this.state.reports.map( data => {
            return(
                <tr key={data.id} className="text-center">
                    <td>{data.title}</td>
                    <td>{data.created_at}</td>
                </tr>
            )
        })

        return ( 
            <table className="table table-hover">
                <thead className="thead-dark">
                    <tr className="text-center">
                        <th scope="col">Title</th>
                        <th scope="col">Creation date</th>
                    </tr>
                </thead>
                <tbody>
                    { reportsList }
                </tbody>
            </table>
        );
    }
}


if (document.getElementById('reports')) {
    ReactDOM.render( <Reports/> , document.getElementById('reports'));
}