<x-layout>
    <div class="about">
        <section class="hero-default">
            <h2>
                QR Code Generator
            </h2>
        </section>

        <section class="info">
            <div class="info__box">
                <div>
                    <h6>
                        <div class="flex text-gray-800">
                            <div class="bg-gray-500 p-2 md:p-0 md:rounded-full mr-3 flex items-center h-auto">
                                <i class="icon icon--github"></i>
                            </div>
                            This is an online DEMO of the qr code library
                        </div>
                    </h6>

                    <h6>
                        <a href="https://github.com/2amigos/qrcode-library" target="_blank"
                           class="text-tred hover:text-black transition duration-150 font-bold flex">
                            2amigos/qrcode-library
                        </a>
                    </h6>

                    <livewire:qr-code-builder/>
                </div>

                <div class='dots'>
                    <span class='dot'></span>
                    <span class='dot'></span>
                    <span class='dot'></span>
                    <span class='dot'></span>
                    <span class='dot'></span>
                    <span class='dot'></span>
                </div>
            </div>
        </section>

        <section class='work-with-us mt-20'>
            <div class='build-products'>
                <h2>Build better products with us</h2>
                <p>
                    We provide the highest quality and most beneficial experience to your
                    product's users
                </p>

                <Link href='/contact'>
                    <a href="/contact" class='btn btn--default btn--red'>Start your project</a>
                </Link>
            </div>
        </section>
    </div>
</x-layout>
