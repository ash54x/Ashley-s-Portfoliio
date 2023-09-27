import React from 'react';

import { useState } from 'react';

export default function Products(props) {
  const [count, setCount] = useState(0);

  const handlePlusClick = () => {
    setCount((prevCount) => prevCount + 1);
  };

  const handleMinusClick = () => {
    if (count > 0) {
      setCount((prevCount) => prevCount - 1);
    }
  };

  return (
    <div className="products">
      <img className="productimg" src={props.src} alt={props.alt} />
      <p>{props.name}</p>
      <p>{props.price}</p>
      <button className = "click" onClick={handleMinusClick}>-</button>
      <span id = "count">{count}</span>
      <button className = "click" onClick={handlePlusClick}>+</button>
    </div>
  );
}
