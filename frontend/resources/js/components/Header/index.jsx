import React, { useState } from 'react'; 
import "./style.scss"; 

function Header () { 
  
    return ( 
        <header className='header'> 
            <div className='header-title'>
                <img className='img-header' alt="" src="/images/hoa.jpg"/>
            </div> 
            <div className='header-product'>
                <div className='product'>
                    <a>Handicrafted by</a>
                    <a>Jim HLS</a>
                </div> 
                <img className='image-product' alt="aaa" src="/images/hoa.jpg"/> 
            </div> 
    </header> 
     
    );
}

export default Header;
