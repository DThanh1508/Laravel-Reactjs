import React, { Component } from 'react';
import './AddCar.css';
const AddCar=()=> {
        return (
            // <form className="row g-3" action="{{route('cars.store')}}" method="post" encType="multipart/form-data">
            // <strong><h1>Thêm mới xe</h1></strong>
            // <div className="col-md-6">
            //     <label htmlFor className="form-label">Image</label>
            //     <img src="" alt="" id="newimage" />
            //     <input type="file" className="form-control" id="image" name="image" onchange="changeImage(event)" />
            // </div>
            // <label htmlFor>Manufacturer</label>
            // <select className="form-select select-mt3" name="mf_id">
            //     <option value={1}>Thanh</option>
            //     <option value={2}>Den</option>
            // </select>
            // <div className="col-md-6">
            //     <label htmlFor className="form-label">Make</label>
            //     <input type="text" className="form-control" id="inputMake" name="make" />
            // </div>
            // <div className="col-12">
            //     <label htmlFor className="form-label">Model</label>
            //     <input type="text" className="form-control" id="inputModel" placeholder="Braind" name="model" />
            // </div>
            // <div className="col-12">
            //     <label htmlFor className="form-label">Produced_on</label>
            //     <input className="form-control" type="date" id="inputProduced" placeholder="dd-mm-yyyy" name="produced_on" />
            // </div>
            // <div className="col-12">
            //     <button type="submit" className="btn btn-primary">Add new car</button>
            // </div>
            // </form>
            
            <form action="ptb1" method="POST">
        <div className="segment">
        </div>
        <label>
          <input type="text" placeholder="a" name="a" />
          <span>First Name</span>
        </label>
        <br />
        <br />
        <label>
          <input type="text" placeholder="b" name="b" />
          <span>First Name</span>
        </label>
        <br />
        <br />
        <label>
          <input type="text" name="ketQua" />
          <span>Model</span>
        </label>
        <br />
        <br />
        <button className="red" type="submit"><i className="icon ion-md-lock" />Giải</button>
      </form>
        );
}

export default AddCar;