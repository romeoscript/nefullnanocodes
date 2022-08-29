@extends('visitorslayout.layout')
@section('body')


<section class="buyflex qr-flex">
    <main class="sell-form"  style="position: relative;z-index: 11;">
        <p class="sec-p">send cryptocurrencies</p>
        <form action="">
            <label for="">account number</label>
            <input type="text">
            <label for="">account name</label>
            <input type="number">
            <label for="">banking institution</label>
            <select name="" id="">
                <option value="first bank">first bank</option>
                <option value="access bank">access bank</option>
                <option value="union bank">union bank</option>
                <option value="fidelity bank">fidelity bank</option>
                <option value="zenith bank">zenith bank</option>
            </select>
          <div style="text-align: right;">  <button>proceed</button></div>
        </form>
        <img src="./assets/images/6617 1.png" alt="" class="qr-bg">
    </main>
  </section>



@endsection
