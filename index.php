<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>

<form>
	<input type="number" name="amount" id="amount" placeholder="Enter Amount"><br>
	<input type="button" name="pay" value="pay now" onclick="pay_now()"><br>
</form>

<script>
	
function pay_now(){

var amt = jQuery('#amount').val();
var options = {
    "key": "rzp_test_wQbKRoQujIX4QC", 
    "amount": amt*100, 
    "currency": "INR",
    "name": "Acme Corp",
    "description": "Test Transaction",
    "image": "https://example.com/your_logo",
    "handler": function (response){
        console.log(response);
    }
};
var rzp1 = new Razorpay(options);

    rzp1.open();

}

</script>
