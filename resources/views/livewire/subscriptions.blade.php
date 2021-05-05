<div class="w-full">

    @if (auth()->user()->hasDefaultPaymentMethod())

        @if (auth()->user()->subscribed($name))

            @if (auth()->user()->subscribedToPlan($price, $name))

                @if (auth()->user()->subscription($name)->onGracePeriod())

                    <div>
                        <button wire:click="resumingSubscription" wire:loading.attr="disabled"
                            wire:target="resumingSubscription"
                            class="font-bold bg-red-600 hover:bg-red-700 text-white rounded-md px-10 py-2 transition-colors w-full flex items-center justify-center">
                            <x-spinner wire:loading wire:target="resumingSubscription" size="6" class="mr-2" />
                            Reanudar plan
                        </button>
                    </div>

                @else

                    <article>

                        <button wire:click="cancelingSubscription" wire:loading.attr="disabled"
                            wire:target="cancelingSubscription"
                            class="font-bold bg-red-600 hover:bg-red-700 text-white rounded-md px-10 py-2 transition-colors w-full flex items-center justify-center">
                            <x-spinner wire:loading wire:target="cancelingSubscription" size="6" class="mr-2" />
                            Cancelar

                        </button>

                    </article>

                @endif


            @else

                <button wire:click="changingPlans" wire:loading.attr="disabled" wire:target="changingPlans"
                    class="font-bold bg-gray-600 hover:bg-gray-700 text-white rounded-md px-10 py-2 transition-colors w-full flex items-center justify-center">
                    <x-spinner wire:loading wire:target="changingPlans" size="6" class="mr-2" />
                    Cambiar de plan
                </button>


            @endif



        @else
            <a wire:click="newSubscription" wire:loading.attr="disabled" wire:target="newSubscription"
                class="cursor-pointer font-bold bg-gray-600 hover:bg-gray-700 text-white rounded-md px-10 py-2 transition-colors w-full flex items-center justify-center">
                <x-spinner wire:loading wire:target="newSubscription" size="6" class="mr-2" />
                Suscribirse
            </a>

        @endif

    @else

        <button
            class="font-bold bg-gray-600 hover:bg-gray-700 text-white rounded-md px-10 py-2 transition-colors w-full flex items-center justify-center">
            Agregar método de pago
        </button>

    @endif

</div>
