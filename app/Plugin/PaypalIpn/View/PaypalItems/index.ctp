<html>
<html>
<head>
    <title></title>
</head>
<body>


<?php  //$this->Paypal->button(String tittle, Options array); 

    echo $this->Paypal->button('Pay Now', array('test' => true, 'amount' => '12.00', 'item_name' => 'test item'));
    echo $this->Paypal->button('Subscribe', array('test' => true, 'type' => 'subscribe', 'amount' => '60.00', 'term' => 'month', 'period' => '2'));
    echo $this->Paypal->button('Donate', array('test' => true, 'type' => 'donate', 'amount' => '60.00'));
    echo $this->Paypal->button('Add To Cart', array('test' => true, 'type' => 'addtocart', 'amount' => '15.00'));
    echo $this->Paypal->button('View Cart', array('test' => true, 'type' => 'viewcart', 'amount' => '15.00'));
    echo $this->Paypal->button('Unsubscribe', array('test' => true, 'type' => 'unsubscribe'));
    echo $this->Paypal->button('Checkout', array('test' => true, 
        'type' => 'cart',
        'items' => array(
            array('item_name' => 'Item 1', 'amount' => '120', 'quantity' => 2, 'item_number' => '1234'),
            array('item_name' => 'Item 2', 'amount' => '50'),
            array('item_name' => 'Item 3', 'amount' => '80', 'quantity' => 3),
        )
    ));
?>

<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post" >
<input type="hidden" name="cmd" value="_s-xclick">
<table>
<tr><td><input type="hidden" name="on0" value="Insurance">Insurance</td></tr><tr><td><select name="os0">
    <option value="Normal coverage">Normal coverage $50.00 SGD</option>
    <option value="Premium coverage">Premium coverage $100.00 SGD</option>
    <option value="Malaysia">Malaysia $200.00 SGD</option>
</select> </td></tr>
</table>
<input type="hidden" name="currency_code" value="SGD">
<input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----
">
<input type="image" src="https://www.paypalobjects.com/en_GB/i/btn/btn_cart_LG.gif" border="0" name="submit" alt="PayPal – The safer, easier way to pay online.">
<img alt="" border="0" src="https://www.paypalobjects.com/en_GB/i/scr/pixel.gif" width="1" height="1">
</form>

</body>
</html>
    