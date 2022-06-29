// import React, { Component } from 'react';
import axios from "axios";
import { useState } from "react";
import React, { useEffect, useReducer } from "react";

const Car =() =>{
    const [listCars, setListCars] = useState([]);
    const getData = () => {
      axios
        .get(`http://127.0.0.1:8000/api/cars/`)
        .then((c) => {
          setListCars(c.data);
        });
    };
    useEffect(() => {
      getData();
    }, []);
    return (
        <div>
            <h1>Cars list</h1>
            <table className="table">
                <thead>
                    <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Image</th>
                    <th scope="col">Model</th>
                    <th scope="col">Make</th>
                    <th scope="col">Produced on</th>
                    <th scope="col">Manufacturer</th>
                    <th scope="col">EDIT</th>
                    <th scope="col">DELETE</th>
                    </tr>
                </thead>
                <tbody>
                    {!!listCars
                    ?
                    listCars.map((car,index)=>
                    <tr key={index}>
                        <th scope="row">{car.id}</th>
                        <td><a href=""><img style={{height: '50px', width: '50px'}} src={"http://127.0.0.1:8000/assets/images/"+car.image} className="rounded float-start" alt="..." /></a></td>
                        <td>{car.model}</td>
                        <td>{car.make}</td>
                        <td>{car.produced_on}</td>
                        <td>Then</td>
                        <td><a className="btn edit btn-primary active" data-confirm="Are you sure to edit this item?">EDIT</a></td>
                        <td>
                            <form>
                            {/* {'{'}{'{'}-- <a href="{{route('cars.delete', $car->id)}}" className="btn btn-danger" onclick="return confirm('Are you sure?')"><i className="fa fa-trash" /></a> --{'}'}{'}'} */}
                            {/* {'{'}{'{'}-- <a href="{{route('cars.delete', $car->id)}}" className="delete btn btn-danger" data-confirm="Are you sure to delete this item?">Delete</a> --{'}'}{'}'} */}
                            <button type="submit" className="btn delete btn-danger">DELETE</button>
                            </form>
                        </td>
                    </tr>
                    )
                    :
                    <tr><td>No data</td></tr> }
                </tbody>
            </table>
        </div>
    );
    
}
export default Car;