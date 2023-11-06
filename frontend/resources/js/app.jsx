 import React from 'react';
import { createRoot } from "react-dom/client";
import { configureStore } from "@reduxjs/toolkit" 
import { Provider } from 'react-redux';
import thunk from 'redux-thunk'   
import App from './pages/App';
import "./app.scss";   
import jokesReducers from './Reducers/jokesReducers';

const store = configureStore({
  reducer: {
    jokes: jokesReducers, 
  },
  middleware: [thunk]
})

createRoot(document.getElementById('root')).render(
  <Provider store={store}>
    <App/>
  </Provider>
);
 
