<form action="/upgrade" method="POST">
    <script
            src="//checkout.stripe.com/checkout.js" class="stripe-button"
            data-key="{{ env('STRIPE_PUB_KEY') }}"
            data-amount="1250"
            data-currency="eur"
            data-name="Room4Rent Premium"
            data-label="Upgrade je Account voor € 12,50"
            data-description="Upgrade naar premium"
            data-image="//stripe.com/img/documentation/checkout/marketplace.png"
            data-locale="auto">
    </script>
    {{ csrf_field() }}
</form>
