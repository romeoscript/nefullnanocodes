@extends('visitorslayout.layout')
@section('body')


<section class="buyflex">
    <div class="buyflex1">
   <section class="buytext">
    <h1>we buy all</h1>
    <h2>currencies</h2>
   </section>
    <section class="buy-image">
        <img src="./assets/images/doge-svgrepo-com 1.png" alt="">
        <img src="./assets/images/bitcoin-svgrepo-com (2) 1.png" alt="">
        <img src="./assets/images/usdt-svgrepo-com (1) 1.png" alt="">
        <img src="./assets/images/eth-svgrepo-com 1.png" alt="">
        <img src="./assets/images/ltc.png" alt="">
    </section>
    <div class="buycont-image">
        <img src="./assets/images/6617 1.png" alt="">
    </div>
    </div>
    <div class="buyflex2">
        <div>sell your coins for us</div>
        <select name="" id="">
            <option value="">select currency</option>
            <option value="">btc</option>
            <option value="">eth</option>
            <option value="">doge</option>
            <option value="">solana</option>
            <option value="">luna</option>
        </select>
        <label for="btc">1BTC:23421</label>
        <input type="number" name="" placeholder="value you have">
        <label for="usd">1USD:$6003</label>
        <input type="number" name="" placeholder="value you get">
        <button>sell now!</button>
    </div>
  </section>

  @endsection