import React from 'react';
import { createRoot } from 'react-dom/client';

import './index.css';

import Products from './products.js';

const root = createRoot(document.querySelector('#root'));

root.render(
  <React.StrictMode>
    <div id="header">
      <h1>Rainbow Sweets</h1>
    </div>

    <div id="content">
      <div className="products">
        <Products
          src="https://cdn.shopify.com/s/files/1/0549/9456/7357/products/Cupcakes_Sprinkles_FNL_1080x.png?v=1619748980"
          alt="Cupcake"
          name="Rainbow Cupcake (1)"
          price="$5"
        />
      </div>

      <div className="products">
        <Products
          src="https://cdn.shopify.com/s/files/1/0573/9714/9811/products/SLJ_Vanilla-Creme_6_inch_1000x1000.jpg?v=1655204442"
          alt="Cake"
          name="Vanilla Creme Cake (6 in)"
          price="$65"
        />
      </div>

      <div className="products">
        <Products
          src="https://cdn.shopify.com/s/files/1/0002/1187/7945/products/Mayas-Cookies-2048x2048-birthday-cake_1500x.jpg?v=1626293184"
          alt="Cookie"
          name="Birthday Cake Cookies (6)"
          price="$26"
        />
      </div>

      <div className="products">
        <Products
          src="https://icecreamfromscratch.com/wp-content/uploads/2021/11/Birthday-Cake-Ice-Cream-1.2-720x720.jpg"
          alt="Ice Cream"
          name="Birthday Cake Ice Cream (1.5qt)"
          price="$7"
        />
      </div>
    </div>

    <div id="footer">
      <p>&copy; 2023 University of Southern California</p>
    </div>
  </React.StrictMode>
);
