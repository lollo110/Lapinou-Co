<?php
require_once '../inc/haut.inc.php';
?>

<div class="container py-4" id="cart-app">
  <div class="row">
    <div class="col-12 col-lg-8">
      <h3 class="mb-3">Your Cart</h3>

      <div class="list-group">
        <!-- Cart item template: copy / repeat for each product -->
        <div class="list-group-item d-flex gap-3 p-3 align-items-center cart-item" data-id="p1" data-price="19.99">
          <img src="https://via.placeholder.com/80" alt="Product image" class="flex-shrink-0 rounded" style="width:80px;height:80px;object-fit:cover">

          <div class="d-flex flex-column flex-grow-1">
            <div class="d-flex align-items-center justify-content-between">
              <div>
                <h6 class="mb-1">Classic Tee</h6>
                <small class="text-muted">Size: M — Color: Navy</small>
              </div>
              <div class="text-end">
                <div class="fs-6 fw-semibold item-price">€19.99</div>
                <button class="btn btn-sm btn-outline-danger ms-2 remove-item" aria-label="Remove Classic Tee">Remove</button>
              </div>
            </div>

            <div class="mt-3 d-flex align-items-center justify-content-between">
              <div class="input-group input-group-sm" style="width:130px">
                <button class="btn btn-outline-secondary decrement" type="button" aria-label="Decrease quantity">-</button>
                <input type="number" class="form-control text-center quantity" value="1" min="1" aria-label="Quantity for Classic Tee">
                <button class="btn btn-outline-secondary increment" type="button" aria-label="Increase quantity">+</button>
              </div>

              <div class="text-muted small">Subtotal: <span class="item-subtotal">€19.99</span></div>
            </div>
          </div>
        </div>

        <div class="list-group-item d-flex gap-3 p-3 align-items-center cart-item" data-id="p2" data-price="34.50">
          <img src="https://via.placeholder.com/80" alt="Product image" class="flex-shrink-0 rounded" style="width:80px;height:80px;object-fit:cover">

          <div class="d-flex flex-column flex-grow-1">
            <div class="d-flex align-items-center justify-content-between">
              <div>
                <h6 class="mb-1">Premium Hoodie</h6>
                <small class="text-muted">Size: L — Color: Black</small>
              </div>
              <div class="text-end">
                <div class="fs-6 fw-semibold item-price">€34.50</div>
                <button class="btn btn-sm btn-outline-danger ms-2 remove-item" aria-label="Remove Premium Hoodie">Remove</button>
              </div>
            </div>

            <div class="mt-3 d-flex align-items-center justify-content-between">
              <div class="input-group input-group-sm" style="width:130px">
                <button class="btn btn-outline-secondary decrement" type="button" aria-label="Decrease quantity">-</button>
                <input type="number" class="form-control text-center quantity" value="2" min="1" aria-label="Quantity for Premium Hoodie">
                <button class="btn btn-outline-secondary increment" type="button" aria-label="Increase quantity">+</button>
              </div>

              <div class="text-muted small">Subtotal: <span class="item-subtotal">€69.00</span></div>
            </div>
          </div>
        </div>

      </div>

    </div>

    <div class="col-12 col-lg-4 mt-4 mt-lg-0">
      <div class="card shadow-sm">
        <div class="card-body">
          <h5 class="card-title">Order Summary</h5>

          <dl class="row mb-2">
            <dt class="col-6">Items</dt>
            <dd class="col-6 text-end" id="summary-items">3</dd>

            <dt class="col-6">Subtotal</dt>
            <dd class="col-6 text-end" id="summary-subtotal">€88.99</dd>

            <dt class="col-6">Shipping</dt>
            <dd class="col-6 text-end" id="summary-shipping">€5.00</dd>

            <dt class="col-6">Tax</dt>
            <dd class="col-6 text-end" id="summary-tax">€0.00</dd>
          </dl>

          <hr>

          <div class="d-flex justify-content-between align-items-center mb-3">
            <strong>Total</strong>
            <div class="fs-5 fw-bold" id="summary-total">€93.99</div>
          </div>

          <div class="mb-2">
            <input type="text" class="form-control form-control-sm" id="coupon" placeholder="Promo code">
            <div class="invalid-feedback">Invalid code</div>
          </div>

          <div class="d-grid">
            <button class="btn btn-primary" id="checkout">Proceed to Checkout</button>
          </div>

        </div>
      </div>

      <div class="mt-3 text-muted small">Tip: quantities update instantly. This is a front-end-only demo — wire up to your cart API to persist changes.</div>
    </div>
  </div>
</div>


<!-- Inline script to power quantity, totals and remove behavior -->
<script>
  (function(){
    const format = (v) => '€' + Number(v).toFixed(2);

    function recalc() {
      const items = Array.from(document.querySelectorAll('.cart-item'));
      let totalItems = 0;
      let subtotal = 0;

      items.forEach(item => {
        const price = parseFloat(item.dataset.price) || 0;
        const qtyEl = item.querySelector('.quantity');
        const qty = Math.max(1, parseInt(qtyEl.value) || 1);
        const itemSubtotal = price * qty;
        item.querySelector('.item-subtotal').textContent = format(itemSubtotal);
        subtotal += itemSubtotal;
        totalItems += qty;
      });

      const shipping = subtotal > 50 || subtotal === 0 ? 0 : 5; // free shipping over €50
      const tax = +(subtotal * 0.0).toFixed(2); // change tax logic here
      const total = subtotal + shipping + tax;

      document.getElementById('summary-items').textContent = totalItems;
      document.getElementById('summary-subtotal').textContent = format(subtotal);
      document.getElementById('summary-shipping').textContent = format(shipping);
      document.getElementById('summary-tax').textContent = format(tax);
      document.getElementById('summary-total').textContent = format(total);
    }

    // delegation for increment/decrement/remove
    document.getElementById('cart-app').addEventListener('click', function(e){
      if(e.target.matches('.increment')){
        const row = e.target.closest('.cart-item');
        const inp = row.querySelector('.quantity');
        inp.value = Math.max(1, parseInt(inp.value || 0) + 1);
        recalc();
      }
      if(e.target.matches('.decrement')){
        const row = e.target.closest('.cart-item');
        const inp = row.querySelector('.quantity');
        inp.value = Math.max(1, parseInt(inp.value || 0) - 1);
        recalc();
      }
      if(e.target.matches('.remove-item')){
        const row = e.target.closest('.cart-item');
        row.remove();
        recalc();
      }
    });

    // quantity manual input change handling
    document.getElementById('cart-app').addEventListener('input', function(e){
      if(e.target.matches('.quantity')){
        e.target.value = Math.max(1, parseInt(e.target.value || 1));
        recalc();
      }
    });

    // coupon (toy example)
    document.getElementById('cart-app').addEventListener('keydown', function(e){
      if(e.key === 'Enter' && e.target.id === 'coupon'){
        const code = e.target.value.trim().toUpperCase();
        if(code === 'SAVE10'){
          // simple 10% off
          const subtotalEl = document.getElementById('summary-subtotal');
          const subtotal = parseFloat(subtotalEl.textContent.replace('€','')) || 0;
          const discount = +(subtotal * 0.10).toFixed(2);
          // apply by lowering prices proportionally (demo)
          const items = document.querySelectorAll('.cart-item');
          items.forEach(it => {
            const price = parseFloat(it.dataset.price) || 0;
            it.dataset.price = (price * 0.9).toFixed(2);
          });
          e.target.classList.remove('is-invalid');
          recalc();
        } else {
          e.target.classList.add('is-invalid');
        }
      }
    });

    // initial calculation
    recalc();

    // checkout: example handler
    document.getElementById('checkout').addEventListener('click', function(){
      const items = Array.from(document.querySelectorAll('.cart-item')).map(it => ({
        id: it.dataset.id,
        price: parseFloat(it.dataset.price),
        qty: parseInt(it.querySelector('.quantity').value)
      }));
      // In real app: post items to server or redirect to payment
      console.log('Checkout payload', items);
      alert('Checkout — open console to see payload (demo)');
    });

  })();
</script>



<?php
require_once '../inc/bas.inc.php';
?>