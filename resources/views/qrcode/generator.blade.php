<x-layout>
    <div class="about">
        <section class="hero-default">
            <h2>
                QR Code Generator DEMO
            </h2>
        </section>

        <section class="info">
            <div class="info__box">
                <div>
                    <h5>
                        This is a DEMO to Open Source Library
                        <a href="https://github.com/2amigos/qrcode-library" target="_blank">
                            2amigos/qrcode-library
                        </a>.
                    </h5>

                    <livewire:qr-code-builder/>

                    <Link href='/contact'>
                    <a class='btn btn--default btn--red'>Talk to us!</a>
                    </Link>
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
