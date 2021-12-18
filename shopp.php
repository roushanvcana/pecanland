<?php include('common/header.php');?>
<style>
  .item {
  display: flex;
  align-items: center;
  flex-wrap: wrap;
}

.btn-pay {
  background-color: #C800Da;
  border: 0;
  color: #fff;
  font-weight: 600;
}

.fa-ticket {
  color: #0e1fa1;
}
</style>
<div class="container mt-5 mb-5">
  <div class="row justify-content-center">
    <div class="col-xl-7 col-lg-8 col-md-7">
      <div class="border border-gainsboro p-3">

        <h2 class="h6 text-uppercase mb-0">Cart Total (2 Items): <strong class="cart-total">98.60</strong></h2>
      </div>

      <div class="border border-gainsboro p-3 mt-3 clearfix item">
        <div class="text-lg-left">
          <i class="fa fa-ticket fa-2x text-center" aria-hidden="true"></i>
        </div>
        <div class="col-lg-5 col-5 text-lg-left">
          <h3 class="h6 mb-0">SpaceJet Flex ticket<br>
            <small>Cost: $50.00/ea</small>
          </h3>
        </div>
        <div class="product-price d-none">50</div>
        <div class="pass-quantity col-lg-3 col-md-4 col-sm-3">
          <label for="pass-quantity" class="pass-quantity">Quantity</label>
          <input class="form-control" type="number" value="1" min="1">
        </div>
        <div class="col-lg-2 col-md-1 col-sm-2 product-line-price pt-4">
          <span class="product-line-price">50
          </span>
        </div>
        <div class="remove-item pt-4">
          <button class="remove-product btn-light">
            Delete
          </button>
        </div>
      </div>

      <div class="border border-gainsboro p-3 mt-3 clearfix item">
        <div class="text-lg-left">
          <i class="fa fa-ticket fa-2x text-center" aria-hidden="true"></i>
        </div>
        <div class="col-lg-5 col-5 text-lg-left">
          <h3 class="h6 mb-0">SpaceJet Flex ticket 2<br><small><small>Cost: $45.00/ea</small></small></h3>
        </div>
        <div class="product-price d-none">45.00</div>
        <div class="pass-quantity col-lg-3 col-md-4 col-sm-3">
          <label for="pass-quantity" class="pass-quantity">Quantity</label>
          <input class="form-control" type="number" value="1" min="1">
        </div>
        <div class="col-lg-2 col-md-1 col-sm-2 product-line-price pt-4">
          <span class="product-line-price">45.00</span>
        </div>
        <div class="remove-item pt-4">
          <button class="remove-product btn-light">
            Delete
          </button>
        </div>
      </div><!-- item -->
    </div>

    <div class="col-xl-3 col-lg-4 col-md-5 totals">
      <div class="border border-gainsboro px-3">
        <div class="border-bottom border-gainsboro">
          <p class="text-uppercase mb-0 py-3"><strong>Order Summary</strong></p>
        </div>
        <div class="totals-item d-flex align-items-center justify-content-between mt-3">
          <p class="text-uppercase">Subtotal</p>
          <p class="totals-value" id="cart-subtotal">95</p>
        </div>
        <div class="totals-item d-flex align-items-center justify-content-between">
          <p class="text-uppercase">Estimated Tax</p>
          <p class="totals-value" id="cart-tax">3.60</p>
        </div>
        <div class="totals-item totals-item-total d-flex align-items-center justify-content-between mt-3 pt-3 border-top border-gainsboro">
          <p class="text-uppercase"><strong>Total</strong></p>
          <p class="totals-value font-weight-bold cart-total">98.60</p>
        </div>
      </div>
      <a href="#" class="mt-3 btn btn-pay w-100 d-flex justify-content-between btn-lg rounded-0">Pay Now <span class="totals-value cart-total">98.60</span></a>
    </div>
  </div>
</div><!-- container -->
<?php include('common/footer.php');?>
<script>
  $(document).ready(function() {

   /* Set rates */
   var taxRate = 0.05;
   var fadeTime = 300;

   /* Assign actions */
   $('.pass-quantity input').change(function() {
     updateQuantity(this);
   });

   $('.remove-item button').click(function() {
     removeItem(this);
   });


   /* Recalculate cart */
   function recalculateCart() {
     var subtotal = 0;

     /* Sum up row totals */
     $('.item').each(function() {
       subtotal += parseFloat($(this).children('.product-line-price').text());
     });

     /* Calculate totals */
     var tax = subtotal * taxRate;
     var total = subtotal + tax;

     /* Update totals display */
     $('.totals-value').fadeOut(fadeTime, function() {
       $('#cart-subtotal').html(subtotal.toFixed(2));
       $('#cart-tax').html(tax.toFixed(2));
       $('.cart-total').html(total.toFixed(2));
       if (total == 0) {
         $('.checkout').fadeOut(fadeTime);
       } else {
         $('.checkout').fadeIn(fadeTime);
       }
       $('.totals-value').fadeIn(fadeTime);
     });
   }


   /* Update quantity */
   function updateQuantity(quantityInput) {
     /* Calculate line price */
     var productRow = $(quantityInput).parent().parent();
     var price = parseFloat(productRow.children('.product-price').text());
     var quantity = $(quantityInput).val();
     var linePrice = price * quantity;

     /* Update line price display and recalc cart totals */
     productRow.children('.product-line-price').each(function() {
       $(this).fadeOut(fadeTime, function() {
         $(this).text(linePrice.toFixed(2));
         recalculateCart();
         $(this).fadeIn(fadeTime);
       });
     });
   }

   /* Remove item from cart */
   function removeItem(removeButton) {
     /* Remove row from DOM and recalc cart total */
     var productRow = $(removeButton).parent().parent();
     productRow.slideUp(fadeTime, function() {
       productRow.remove();
       recalculateCart();
     });
   }

 });
  </script>