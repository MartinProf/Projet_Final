<?php
echo'
<main>
    <div class="container-fluid d-inline-flex justify-content-center products">
      <div class="product-item">
        <div class="product-img">
          <img src="images/Mango.png" alt="apple" />
        </div>
        <div class="product-description">
          <h2 class="product-name"><a href="#">Apple</a></h2>
          <p id="applePrice">$10</p>
          <div class="buttons">
            <button class="btn-minus" onclick="decreaseItem("apple" , "applePrice")">-</button>
            <input type="text" id="apple" value="0" />
            <button class="btn-plus" onclick="increaseItem("apple" , "applePrice")">+</button>
          </div>
        </div>
      </div>

      <div class="product-item">
        <div class="product-img">
          <img src="images/Orange.png" alt="apple" />
        </div>
        <div class="product-description">
          <h2 class="product-name"><a href="#">Orange</a></h2>
          <p id="orangePrice">$20</p>
          <div class="buttons">
            <button class="btn-minus" onclick="decreaseItem("orange" , "orangePrice")">-</button>
            <input type="text" id="orange" value="0" />
            <button class="btn-plus" onclick="increaseItem("orange" , "orangePrice")">+</button>
          </div>
        </div>
      </div>

      <div class="product-item">
        <div class="product-img">
          <img src="images/Apple.png" alt="apple" />
        </div>
        <div class="product-description">
          <h2 class="product-name"><a href="#">Mango</a></h2>
          <p id="mangoPrice">$30</p>
          <div class="buttons">
            <button class="btn-minus" onclick="decreaseItem("mango" , "mangoPrice")">-</button>
            <input type="text" id="mango" value="0" />
            <button class="btn-plus" onclick="increaseItem("mango" , "mangoPrice")">+</button>
          </div>
        </div>
      </div>
    </div>
  </main>';
?>