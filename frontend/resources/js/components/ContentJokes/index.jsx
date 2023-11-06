import React  from 'react'; 
import "./style.scss";  
import { useDispatch } from 'react-redux';
import * as jokesServices from '../../apiServices/jokesServices'; 
import { getJokesID } from '../../Actions/jokesActions';

function ContentJokes ({Data,id,length}) { 
   
    const dispatch = useDispatch(); 
    const handleVote = async (a,b) => { 
        const vote = JSON.parse(localStorage.getItem("vote"));    

            if (vote==null) {

                localStorage.setItem("vote", JSON.stringify([{...Data,funnynew:a,nofunnynew:b}])); 

            } else { 
                const index = vote.findIndex((vote) => vote.id === Data.id); 
                if (index===-1)
                {    
                    localStorage.setItem("vote", JSON.stringify([...vote,{...Data,funnynew:a,nofunnynew:b}])); 
                }
                else
                {  
                        const newvote = [...vote];   
                        newvote[index] = {...vote[index],funnynew:a,nofunnynew:b};
                        localStorage.setItem ("vote", JSON.stringify ([...newvote]));  
                }
                 }
        dispatch(getJokesID(id+1)); 

        //  localStorage.removeItem("vote");
    }  
    const handleOK = async () => { 
        const vote = JSON.parse(localStorage.getItem("vote"));    
            for (let i = 0; i < vote.length; i++) {   
              const newDG = {
                         id:vote[i].id, 
                         content :vote[i].content,
                         funny:vote[i].funny+vote[i].funnynew,
                         nofunny:vote[i].nofunny+vote[i].nofunnynew }  
            await jokesServices.update(`jokes/${vote[i].id}`, newDG); 
          } 
        //   localStorage.removeItem("danhgia");

    }
    const handleSeeAgain=async ()=>{
        
        dispatch(getJokesID(1)); 

    }
    return ( 
        <>
         {id <= length ?
            <div className='content-jokes'>
                <div className='content'>
                    <p>{Data.content}</p> 
                </div>
                <div className='content-button'> 
                    <button onClick={ () => handleVote(1,0)} className='blueB'>This is funny</button>
                    <button onClick={ () => handleVote(0,1)} className='greenB'>This is not funny</button>
                </div>
            </div> 
        : 
            <div className='content-jokes'>
                <div className='content'>
                    <p>That's all the jokes for today! Come back another day!</p> 
                </div>
                <div className='content-button'> 
                    <button onClick={ () => handleOK()}  className='blueB'>OK</button>
                    <button onClick={ () => handleSeeAgain()}  className='greenB'>See Again</button>
                </div>
            </div>}
        </>
    );
}

export default ContentJokes;
