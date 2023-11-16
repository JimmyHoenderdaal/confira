<x-rapidez-ct::card class="relative">
    <x-rapidez-ct::title.lg class="mb-4">
        @lang('Order overview')
    </x-rapidez-ct::title.lg>
    <x-rapidez-ct::separated-listing class="border-b pb-4 mb-4">
        <li v-for="item in cart.items">
            @{{ item.qty }}x @{{ item.name }}
        </li>
    </x-rapidez-ct::separated-listing>
    <x-rapidez-ct::separated-listing tag="dl">
        <template v-for="segment in checkout.totals.total_segments" v-if="segment.title">
            @include('rapidez-ct::checkout.partials.sidebar.segment')
        </template>
    </x-rapidez-ct::separated-listing>
</x-rapidez-ct::card>