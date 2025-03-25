<x-layout>
    <x-slot:title>{{ $title->slug }}</x-slot:title>

    <!-- Header -->
    <header class="bg-dark py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="text-center text-white">
                <h1 class="display-4 fw-bolder">Arkan Shop in style</h1>
                <p class="lead fw-normal text-white-50 mb-0">Style Masa Kini</p>
            </div>
        </div>
    </header>

    <!-- Product Section -->
    <section class="py-5">
        <div class="container px-4 px-lg-5 mt-5">
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                
                @foreach(range(1, 8) as $index)
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Sale badge untuk beberapa produk -->
                        @if($index % 2 == 0)
                        <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                        @endif
                        <!-- Product image -->
                        <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="Product Image" />
                        <!-- Product details -->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <h5 class="fw-bolder">Product {{ $index }}</h5>
                                @if($index % 2 == 0)
                                <span class="text-muted text-decoration-line-through">$50.00</span> $25.00
                                @else
                                $40.00 - $80.00
                                @endif
                            </div>
                        </div>
                        <!-- Product actions -->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center">
                                <button class="btn btn-outline-dark mt-auto" onclick="showModal()">Add to cart</button>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </section>

    <!-- Modal Alert -->
    <div id="myModal" class="modal fade">
        <div class="modal-dialog modal-confirm">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="icon-box">
                        <i class="material-icons">&#xE876;</i>
                    </div>
                    <h4 class="modal-title w-100">Mantap</h4>
                </div>
                <div class="modal-body">
                    <p class="text-center">Barang kamu sudah di masukkan keranjang</p>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-success btn-block" data-bs-dismiss="modal">OK</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap & Script -->
    <script>
        function showModal() {
            var myModal = new bootstrap.Modal(document.getElementById('myModal'));
            myModal.show();
        }
    </script>

</x-layout>
