<x-layout>
    <div class="about">
        <section class="hero-default">
            <h2>
                QR Code Generator demo
            </h2>
        </section>

        <section class="info">
            <div class="info__box">
                <div>
                    <h6>
                        <div class="flex">
                            <div class="bg-gray-300 rounded-full mr-5">
                                <i class="icon icon--github"></i>
                            </div>
                            This is a DEMO to the Open Source Library
                        </div>

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
    </div>

</x-layout>
