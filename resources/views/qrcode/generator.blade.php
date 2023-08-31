<x-layout>
    <div class="mt-10">
        <section class="hero-default hero-default--no-image" style="background-image:url(/images/404.svg)">
            <h2>QR Code Generator DEMO</h2>
            <!--<a class="btn btn--default btn--red" href="/">Go to Homepage</a>-->
        </section>
    </div>
    <div class="container px-4 mx-auto flex flex-wrap items-center justify-between">
        <livewire:qr-code-builder/>
    </div>
    <script>
        document.addEventListener('livewire:initialized', () => {
            Livewire.hook('component.init', ({ component }) => {
                initDateTimeComps()
            })
        })
    </script>
</x-layout>
