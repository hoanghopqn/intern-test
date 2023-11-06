import React from "react";
import { BrowserRouter,Route, Routes } from "react-router-dom";    
 
import TestWebsite from "../components/TestWebsite";

export default function App(){
  
    return(
      
    <BrowserRouter>
      <React.Fragment>  
      <div className="App" > 
        <Routes>  
        <Route path="/" element={<TestWebsite/>} />       
        </Routes>  
      </div> 
    </React.Fragment>
    </BrowserRouter>
    )
};
