<div class="uk-card uk-card-default login_form">
    <form
        class="uk-form-stacked uk-padding"
        method="POST"
        action="{{ route('login') }}"
        data-payment-form
    >
        <legend class="uk-legend">Checkout</legend>
        @csrf
        <div class="uk-margin">
            @error('email')
            <div class="invalid-feedback uk-margin color-danger" role="alert">
                <span>{{ $message }}</span>
            </div>
            @enderror
            <label class="uk-form-label" for="form-stacked-text">{{ __('Name on card') }}</label>
            <div class="uk-form-controls uk-inline uk-width-1-1">
                <span class="uk-form-icon" uk-icon="icon: user"></span>
                <input oninput="this.value = this.value.toUpperCase()"
                       id="card-holder-name"
                       type="text"
                       class="uk-input @error('card-holder-name') is-invalid @enderror uk-width-1-1"
                       name="card-holder-name"
                       required
                       autocomplete="card-holder-name"
                       autofocus>
            </div>
        </div>

        <div class="uk-margin uk-margin-bottom">
            @error('password')
            <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

            <label class="uk-form-label" for="form-stacked-text">{{ __('Card details') }}</label>
            <div class="uk-form-controls uk-inline uk-width-1-1" id="card_element"></div>
        </div>

        <div class="uk-margin">
            <button
                class="uk-button uk-button-default uk-width-1-1"
                id="card-button"
                data-secret="{{ $intent }}"
                type="submit">Pay</button>
        </div>

    </form>
</div>

<script>
    const stripe = new Stripe('{{ config('cashier.key') }}');
    const elements = stripe.elements();
    const cardElement = elements.create('card');
    const cardButton = document.querySelector('#card-button');
    const cardHolderName = document.querySelector('#card-holder-name');
    const form = document.querySelector('[data-payment-form]');

    cardElement.mount('#card_element');

    form.addEventListener('submit', function() {
        // Create a new Checkout Session using the server-side endpoint you
        // created in step 3.
        fetch('/create-checkout-session', {
            method: 'POST',
        })
            .then(function(response) {
                return response.json();
            })
            .then(function(session) {
                return stripe.redirectToCheckout({ sessionId: session.id });
            })
            .then(function(result) {
                // If `redirectToCheckout` fails due to a browser or network
                // error, you should display the localized error message to your
                // customer using `error.message`.
                if (result.error) {
                    alert(result.error.message);
                }
            })
            .catch(function(error) {
                console.error('Error:', error);
            });
    });

</script>
