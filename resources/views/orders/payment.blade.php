<x-AppLayout>

    {{-- MercadoPago --}}
    @php
        // SDK de Mercado Pago
        require base_path('/vendor/autoload.php');
        // Agrega credenciales
        MercadoPago\SDK::setAccessToken(config('services.mercadopago.token'));

        // Crea un objeto de preferencia
        $preference = new MercadoPago\Preference();

        // Crea un ítem en la preferencia
        $item = new MercadoPago\Item();
        $item->title = 'Plan Básico Guiamath';
        $item->quantity = 1;
        $item->unit_price = 10;

        $preference->back_urls = array(
            "success" => route('orders.pay', $order),
            "failure" => "http://localhost:8000/planbasico",
            "pending" => "http://localhost:8000/planbasico"
        );
        $preference->auto_return = "approved";
        
        $preference->items = array($item);
        $preference->save();
    @endphp

    <div class="div-ampliar mx-auto max-w-7xl px-2 sm:px-6 lg:px-8 py-8"> 
        <div class="mb-4">
            <h1 class="text-2xl">Plan Basico Mensual</h1>
        </div>   
        <div class="mb-4">
            <h1 class="text-2xl">Resumen</h1>
        </div>
        <div class="mb-4">
            <h1 class="text-2xl pb-4">Métodos de Pago</h1>
            <div id="wallet_container"></div>
            <div class="space-y-2">
                <label class="flex items-center">
                  <input type="radio" name="metodo_pago" value="webpay" class="mr-2">
                  Webpay 
                </label>
                <label class="flex items-center">
                  <input type="radio" name="metodo_pago" value="mercadopago" class="mr-2">
                  MercadoPago
                </label>
                <label class="flex items-center">
                  <input type="radio" name="metodo_pago" value="deposito" class="mr-2">
                  Depósito/Transferencia
                </label>
                <label class="flex items-center">
                  <input type="radio" name="metodo_pago" value="paypal" class="mr-2">
                  Paypal
                </label>
                <label class="flex items-center">
                  <input type="radio" name="metodo_pago" value="stripe" class="mr-2">
                  Stripe
                </label>
              </div>
        </div>
    </div>

{{-- SDK MercadoPago.js --}}
<script src="https://sdk.mercadopago.com/js/v2"></script>

<script>
const mp = new MercadoPago("{{config('services.mercadopago.key')}}");
const bricksBuilder = mp.bricks();
mp.bricks().create("wallet", "wallet_container", {
   initialization: {
       preferenceId: '{{$preference->id}}',
   },
});
</script>

</x-AppLayout>