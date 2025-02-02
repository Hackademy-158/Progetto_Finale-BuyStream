<div class="container-fluid ">
    <footer class="row row-cols-1 row-cols-sm-2 row-cols-md-5 py-5 my-5 border-top">
        <div class="col mb-3">
            <a href="/" class="d-flex align-items-center mb-3 link-body-emphasis text-decoration-none">
                <svg class="bi me-2" width="40" height="32">
                    <use xlink:href="#bootstrap"></use>
                </svg>
            </a>
            <p class="text-body-secondary">© 2024</p>
        </div>

        <div class="col mb-3">

        </div>

        <div class="col mb-3">
            <h5>Section</h5>
            <ul class="nav flex-column">
                <li class="nav-item mb-2"><a href="/" class="nav-link p-0 text-body-secondary">Home</a></li>
                <li class="nav-item mb-2"><a href="/features" class="nav-link p-0 text-body-secondary">Features</a></li>
                <li class="nav-item mb-2"><a href="/pricing" class="nav-link p-0 text-body-secondary">Pricing</a></li>
                <li class="nav-item mb-2"><a href="/faqs" class="nav-link p-0 text-body-secondary">FAQs</a></li>
                <li class="nav-item mb-2"><a href="/about" class="nav-link p-0 text-body-secondary">About</a></li>
            </ul>
        </div>

        <div class="col mb-3">
            <h5>Social</h5>
            <ul class="nav flex-column">
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Facebook</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Instagram</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">X</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">LinkedIn</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">TikTok</a></li>
            </ul>
        </div>

        <div class="col mb-3">
            <h5>Privileges</h5>
            <ul class="nav flex-column">
                <h5>Vuoi diventare revisore?</h5>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Accedi</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Registrati</a></li>
                <li class="nav-item mb-2"><a href="{{ route('become.revisor') }}" class="btn btnRevBuy">Diventa
                        revisore</a></li>
            </ul>

            {{-- errore riservato a chi è gia revisore --}}
            <div class="mt-3 " style="width: 450px">
                @if (session()->has('errorMessage'))
                    <div class="alert alert-danger text-center rounded w-50">
                        {{ session('errorMessage') }}
                    </div>
                @endif
            </div>
        </div>
    </footer>
</div>
