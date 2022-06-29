// import AddCar from "./components/addCar/AddCar";
// import Car from "./components/listCar/Car";
// import EditCar from "./components/editCar/EditCar";

import ReactDOM from "react-dom/client";
import { BrowserRouter, Routes, Route } from "react-router-dom";
import Layout from "./pages/Layout";
// import Home from "./pages/Home";
// import Blogs from "./pages/Blogs";
// import Contact from "./pages/Contact";
import NoPage from "./pages/NoPage";
import Cars from "./components/listCar/Car";
import AddCars from "./components/addCar/AddCar";
import EditCars from "./components/editCar/EditCar";
function App() {
  return (
    <div>
      <div className="container">
        <h1 className="m-5 text-center text-primary"><a className="mt-5 text-decoration-none" href="">Wellcome to admin page</a> </h1>
        <BrowserRouter>
       <Routes>
         <Route path="/" element={<Layout />}>
           <Route index element={<Cars />}/>
           <Route path="add" element={<AddCars />}/>
           <Route path="edit" element={<EditCars />}/>
           <Route path="*" element={<NoPage />} />
         </Route>
       </Routes>
     </BrowserRouter>
      </div>
    </div>
  );
}

export default App;
// import ReactDOM from "react-dom/client";
// import { BrowserRouter, Routes, Route } from "react-router-dom";
// import Layout from "./pages/Layout";
// import Home from "./pages/Home";
// import Blogs from "./pages/Blogs";
// import Contact from "./pages/Contact";
// import NoPage from "./pages/NoPage";

// export default function App() {
//   return (
//     <BrowserRouter>
//       <Routes>
//         <Route path="/" element={<Layout />}>
//           <Route index element={<Home />} />
//           <Route path="blogs" element={<Blogs />} />
//           <Route path="contact" element={<Contact />} />
//           <Route path="*" element={<NoPage />} />
//         </Route>
//       </Routes>
//     </BrowserRouter>
//   );
// }

// const root = ReactDOM.createRoot(document.getElementById('root'));
// root.render(<App />);