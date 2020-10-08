<?php
require('config.php');


?>

<form action="submit.php" method="POST">

<script
		src="https://checkout.stripe.com/checkout.js" class="stripe-button"
		data-key="<?php echo $publishablekey?>"
		data-amount="10000"
		data-name="Payment with stripe"
		data-description="Payment with stripe"
		data-currency="BDT"
		data-email="yourEmail@gmail.com"
	>
</script>

</form>