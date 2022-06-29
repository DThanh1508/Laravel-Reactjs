import React, { Component } from 'react';

const EditCar=()=> {
        return (
            <form className="row g-3">
                <h1>Sửa thông tin xe</h1>
                <strong><a href="">Quay lại trang chủ</a></strong>
                <div className="col-md-6">
                    <label htmlFor className="form-label">Image</label>
                    <img src="" alt="" id="newimage" />
                    <input type="file" className="form-control" id="image" name="image" onchange="" />
                </div>
                <select className="form-select select-mt3" name="mf_id" value="">
                    <option value={1}>Thanh</option>
                    <option value={2}>Den</option>
                </select>
                <div className="col-md-6">
                    <label htmlFor className="form-label">Make</label>
                    <input type="text" className="form-control" id="inputMake" name="make" defaultValue="Make in..." />
                </div>
                <div className="col-12">
                    <label htmlFor className="form-label">Model</label>
                    <input type="text" className="form-control" id="inputModel" placeholder="Braind" name="model" defaultValue="Name car?" />
                </div>
                <div className="col-12">
                    <label htmlFor className="form-label">Produced_on</label>
                    <input className="form-control" type="date" id="inputProduced" placeholder="dd-mm-yyyy" name="produced_on" defaultValue="Make on date..." />
                </div>
                <div className="col-12">
                    <button type="submit" className="btn btn-primary">Update</button>
                </div>
            </form>
        );
}

export default EditCar;