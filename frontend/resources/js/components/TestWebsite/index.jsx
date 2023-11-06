import React, { useEffect } from 'react'; 
import "./style.scss"; 
import * as jokesServices from '../../apiServices/jokesServices';
import Header from '../Header';
import Title from '../Title';
import ContentJokes from '../ContentJokes';
import { useDispatch, useSelector } from 'react-redux'; 
import { getJokes } from '../../Actions/jokesActions';
import Final from '../Final';

function TestWebsite () { 
  
    const dispatch = useDispatch();    
    const filters = useSelector((state) => state.jokes);   
    const link= filters.link; 
    useEffect(() => {     
        const getJOKES = async () => { 
        const result = await jokesServices.get(link);
        dispatch(getJokes(result.jokes));    
      }
      getJOKES();  
  }, []);  
    return (
        <>
            <Header/>
            <Title />
            <ContentJokes Data={filters.listJokes[filters.id-1]} id={filters.id} length={filters.listJokes.length}/>
            <Final/>
    </>
    );
}

export default TestWebsite;
