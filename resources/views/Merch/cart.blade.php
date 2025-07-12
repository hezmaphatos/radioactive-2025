@extends('layouts.main')

@section('container')

    <style>
.cart-container {
  padding-top: 30px;
  overflow: hidden;
}

.scroll-list {
  width: 100%;
  max-width: 1500px;
  padding: 25px;
  margin-top: 50px;
  max-height: 70vh;
}

.cart-checkout-container {
  width: 100%;
  max-width: 700px;
  padding: 25px;
  margin-top: 50px;
  margin-right: auto;
}

.cart-checkout-container .card {
  background-color: #fff;
  height: 100%;
}

.cart-checkout-container .card .card-content{
  padding: 10px;
}

@media screen and (max-width: 768px) {
  .scroll-list {
      margin-top: 20px;
  }
}


.scroll-list__wrp {
  width: 100%;
  height: 70vh;
  overflow: auto;
  padding: 50px;
  box-shadow: 0px 7px 46px 0px rgba(0, 0, 0, 0.3);
  background: rgba(255, 255, 255, 0.286);
  border-radius: 8px;
}


.scroll-list__wrp .scrollbar-track {
  display: none !important;
}

@media screen and (max-width: 768px) {
  .scroll-list {
    height: 24vh;
  }
  .scroll-list__wrp {
      padding: 25px;
      height: 24vh;
  }
  .is-hidden {
  display: none !important;
}
}

.scroll-list__item {
  width: 100%;
  height: 16vh;
  display: flex;
  margin-bottom: 15px;
  border-radius: 8px;
  background-image: linear-gradient(147deg, #D9E4B2 0%, #A8CBA0 74%);
  background-color: #fff;
  transition: all 0.35s ease-in-out;
  opacity: 0;
  transform: scale(0.7);
  box-shadow: 0px 7px 16px 0px rgba(0, 0, 0, 0.2);
  padding: 10px;
}

.scroll-list__item .details {
  display: block;
  margin-left: 20px;
  width: 100%;
}

.scroll-list__item .details p {
  font-size: 1.3em;
}
.quantity-cart input{
  margin-top: 3px;
  border-radius: 50px;
  height: 25px;
  outline: none;
  border: none;
}

.quantity-cart button {
  margin-top: 3px;
  border-radius: 100px;
  height: 25px;
  width: 7%;
}

.quantity-cart button:focus {
  outline: none;
}

.quantity-cart .qty-decrease {
  background-color: rgb(223, 70, 70);
  opacity: 0.5;
  transition:all 0.35s ease-in-out;
}

.quantity-cart .qty-increase {
  background-color: rgb(70, 223, 70);
  opacity: 0.5;
  transition:all 0.35s ease-in-out;
}

.quantity-cart button:hover {
  opacity: 1;
  transition:all 0.35s ease-in-out;
}

.cart-container .delete-item {
  background-color: rgb(223, 70, 70);
  border-radius: 500px;
  height: 50%;
  margin-top: 5%;
  margin-right: 2%;
  outline: none;
}

.cart-container .delete-item:hover {
  background-color: red;
    transition: all 0.35s ease-in-out;
}

.details #detail-merch {
  font-size: 11px;
}

.details i {
  font-size: 10px !important;
  color: red;
}

.scroll-list__item a{
  display: flex;
  flex-direction: column;
  width: 20%;
  align-items: center;
  justify-content: center;
  font-size: 40px;
  background-color: brown
  color: rgba(255, 255, 255, 0.6);
}

.scroll-list__item a:hover {
  background-color: white;
  color: red;
}

.scroll-list__item img {
  max-width: 20%;
  height: 100%;
  border-radius: 10px;
}

.scroll-list__item.item-hide {
  opacity: 0;
  transform: scale(0.7);
}

.scroll-list__item.item-focus {
  opacity: 1;
  transform: scale(1);
}

.scroll-list__item.item-next {
  opacity: 1;
  transform: scale(1);
}

.scroll-list__item.item-next+.scroll-list__item {
  opacity: 1;
  transform: scale(1);
}

.scroll-list__item:last-child {
  margin-bottom: 20vh;
}


.cart-checkout-container .price-calculation {
  background-color: red;
  border-radius: 10px;
  padding: 10px;
}


    </style>

    <body class="min-h-screen text-black">

            {{-- <h1 class="w-full text-center font-ltmuseum-bold text-white pt-30"> Cart</h1> --}}

            <div class="cart-container flex flex-col gap-1 justify-between w-[90%] mx-[5%] md:flex-row">
                <div class="scroll-list w-3/4">
                  <h1 class="text-white text-center">Cart</h1>
                  <div class="scroll-list__wrp js-scroll-content js-scroll-list">
                        <div id="veryUniqueItems">
                            <!-- <div class="scroll-list__item js-scroll-list-item">
                                <img src="../images/logo.png" alt="">
                                <div class="details">
                                  {{-- <!-- if preorder then h1 Product 1 (Preorder) else baru h1 product 1 aja !--> --}}
                                    <h1 id="name">Product 1</h1>
                                    <p> 
                                        <i class="fa-solid fa-user"></i><span id="tes">Variant/Size</span> 
                                        <br>
                                        <i class="fa-solid fa-money-bill"></i>Rp. <span id="tes">100.0000</span>
                                    </p>
                                </div>
                                    <div class="flex items-center gap-2">
                                      <button class="qty-decrease bg-red-500 text-white px-2" {{-- data-id="{{ $item->id }}" --}}>-</button>
                                      <input type="number" class="qty-input w-12 text-center" value="1" min="1" {{-- data-id="{{ $item->id }}" --}}>
                                      <button class="qty-increase bg-green-500 text-white px-2" {{-- data-id="{{ $item->id }}" --}}>+</button>
                                    </div>
                            </div> !-->
                            @php
                              $cumulative_price = 0;
                              $cumulative_additional_price = 0;
                            @endphp
                            @foreach ($carts as $cart)
                            <div class="scroll-list__item js-scroll-list-item @if ($cart->variation()->stock < $cart->quantity) text-red-800 @endif">
                            
                              <img src="{{ asset('storage/' . $cart->merch->image) }}" alt="">
                                <div class="details">
                                  <!-- if preorder then h1 Product 1 (Preorder) else baru h1 product 1 aja !-->
                                    <h4 class="text-white" id="name">{{ $cart->merch->name }}</h4>
                                        <i class="fa-solid fa-tag"></i><span id="detail-merch"> {{ $cart->variation }}</span> 
                                        <br>
                                        <i class="fa-solid fa-money-bill"></i><span id="detail-merch" data-id="{{ $cart->id }}"> Rp {{ number_format($cart->total_price, 0, ',', '.') }}</span>

                                        <div class="flex items-center gap-2 quantity-cart">
                                          <button
                                          class="qty-decrease w-8 h-8 flex items-center justify-center rounded-full bg-red-500 text-white disabled:opacity-50"
                                          data-id="{{ $cart->id }}"
                                          @if ($cart->quantity == 1) disabled @endif
                                        >
                                          <p class="text-lg leading-none">-</p>
                                        </button>

                                          <input type="number" class="qty-input w-12 no-spinner text-center" value="{{ $cart->quantity }}" min="1" max="{{ $cart->variation()->stock }}" data-id="{{ $cart->id }}" disabled>
                                          <button
                                          class="qty-increase w-8 aspect-square flex items-center justify-center rounded-full bg-green-500 text-white text-lg leading-none disabled:opacity-50"
                                          data-id="{{ $cart->id }}"
                                          @if ($cart->variation()->stock <= $cart->quantity) disabled @endif
                                        >
                                          +
                                        </button>

                                        </div>
                                      </div>
                                      <form action="/cart/{{ $cart->id }}/remove" method="POST" enctype="multipart/form-data">
                                            @method('delete')
                                            @csrf
                                            <button class="flex items-center delete-item text-white px-5" onclick="return confirm('Ingin menghapus item dari cart?')"> <i class="fa-solid fa-trash"></i> </button>
                                      </form>
                                @php
                                    $cumulative_price += $cart->total_price;
                                    $cumulative_additional_price +=  ($cart->merch_variation->additional_price * $cart->quantity);
                                @endphp

                                </div>
                                @endforeach
                               <div id="cart-check" data-cart-count="{{ $carts->count() }}"></div>
                                <div class="scroll-list__item js-scroll-list-item is-hidden"></div>
                                <!-- bikin if carts is 0 !-->
                        </div>
                    </div>
                </div>
                  <div class="cart-checkout-container w-1/4">
                    <h1 class="text-white text-center">Summary</h1>
                    <div class="card">
                      <div class="card-content">
                            <form action="/merch/checkout" method="POST" enctype="multipart/form-data"
                            class="font-ltmuseumreg">
                            @csrf
                            <div class="flex flex-col">
                                <label for="name" class="text-white">Nama</label>
                                <input type="text" name="name" id="name" placeholder="Iggy"
                                    class="bg-white text-black border border-black" value="{{ auth()->user()->name }}">
                            </div>
                            <div class="flex flex-col">
                                <label for="email" class="text-white">Email</label>
                                <input type="email" name="email" id="email" value="{{auth()->user()->email}}" placeholder="iggy@gmail.com"
                                    class="bg-white text-black border border-black">
                            </div>
                            <div class="flex flex-col">
                                <label for="phone" class="text-white">Phone</label>
                                <input type="number" name="phone" id="phone" placeholder="081710771077"
                                    class="bg-white text-black border border-black">
                            </div>
                            <div class="flex flex-col">
                                <label for="line" class="text-white">ID Line</label>
                                <input type="text" name="line" id="line" placeholder="ID Line"
                                    class="bg-white text-black border border-black">
                            </div>

                        <div class="price-calculation my-3">
                          <p>Subtotal Rp <span id="subtotal">{{ $cumulative_price }}</span></p>
                          <p>Additional Rp <span id="additional">{{ $cumulative_additional_price }}</span></p>
                          <p>Total Rp <span id="total">{{ $cumulative_price + $cumulative_additional_price }}</span></p>
                        </div>

                            <div class="flex flex-col">
                                <label for="cumulative_price" class="text-black">Upload Payment Proof</label>
                                <p class="text-black">Transfer to BCA <text class="text-blue-500">6600448160</text> a/n Helena Hanna Haryadi in the right amount (Rp
                                    {{ number_format($cumulative_price, 0, ',', '.') }}) add information <text class="text-red-500">(Nama Merch/Bundle)-(Quantity)</text></p>
                                <input class="text-white my-2 rounded-lg" type="file" accept="image/*" name="payment_image" id="payment_image"
                                    onchange="previewImage()">
                                <img src="" alt="" class="hidden img-preview h-100 my-2">
                            </div>

                            @if ($flag)
                                <p>Kurangi jumlah atau hapus item untuk melanjutkan checkout (Lakukan refresh setelah mengurangi jumlah)</p>
                            @else
                          
                                <button type="submit" class="bg-red-600 text-white rounded-md px-2 py-2">Create Order!</button>
                            @endif
                        </form>
                      </div>
                    </div>
                  </div>
            </div>

    </body>
        <!-- jQuery -->
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/smooth-scrollbar/8.3.1/smooth-scrollbar.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/smooth-scrollbar/8.3.1/plugins/overscroll.js"></script>

        <script>
            // INI BUAT SCROLLABLE LIST CART //

    $(document).ready(function () {

        var Scrollbar = window.Scrollbar;

        Scrollbar.use(window.OverscrollPlugin);

        var customScroll = Scrollbar.init(document.querySelector('.js-scroll-list'), {
            plugins: {
                overscroll: true
            }
        });

        customScroll.update();

    var listItem = $('.js-scroll-list-item');
    listItem.eq(0).addClass('item-focus');
    listItem.eq(1).addClass('item-next');

    customScroll.addListener(function (status) {

        var $content = $('.js-scroll-content');
        var viewportScrollDistance = 0;
        viewportScrollDistance = status.offset.y;
        var viewportHeight = $content.height();
        var listHeight = 0;
        var $listItems = $content.find('.js-scroll-list-item');
        for (var i = 0; i < $listItems.length; i++) {
            listHeight += $($listItems[i]).height();
        }
        var top = status.offset.y;
        var visibleCenterVertical = 0;
        visibleCenterVertical = top;
        var parentTop = 1;
        var $lis = $('.js-scroll-list-item');
        var $focusLi;
        for (var i = 0; i < $lis.length; i++) {
            var $li = $($lis[i]);
            var liTop = $li.position().top;
            var liRelTop = liTop - parentTop;
            var distance = 0;
            var distance = Math.abs(top - liRelTop);
            var maxDistance = $('.js-scroll-content').height() / 2;
            var distancePercent = distance / (maxDistance / 100);
            if (liRelTop + $li.parent().scrollTop() > top - 30) {
                if (!$li.hasClass('item-focus')) {
                    $li.prev().addClass('item-hide');
                    $lis.removeClass('item-focus');
                    $lis.removeClass('item-next');
                }
                $li.removeClass('item-hide');
                $li.addClass('item-focus');
                $li.next().addClass('item-next');
                break;
            }
        }
    });
    });

  $('.qty-decrease, .qty-increase').on('click', function () {
      let cartId = $(this).data('id');
      let input = $('input[data-id="' + cartId + '"]');
      let currentQty = parseInt(input.val());

      let isIncrease = $(this).hasClass('qty-increase');
      let newQty = isIncrease ? currentQty + 1 : currentQty - 1;

      // Jangan kurang dari 1
      if (newQty < 1) newQty = 1;

      $.ajax({
          url: `/cart/${cartId}/updateqty`,
          type: 'POST',
          data: {
              _token: "{{ csrf_token() }}",
              _method: "PUT", // Laravel butuh ini karena HTML form gak bisa native PUT
              quantity: newQty
          },
          success: function (response) {
              input.val(response.new_quantity);
              $(`span[data-id="${cartId}"]`).text(" Rp " + Number(response.new_total).toLocaleString('id-ID'));

              $('#subtotal').text(response.subtotal);
              $('#additional').text(response.additional);
              $('#total').text(response.total);
          },
          error: function () {
              alert('Gagal update quantity');
          }
      });
  });

  // preview image

          function previewImage() {
            const image = document.querySelector('#payment_image')
            const imgPreview = document.querySelector(".img-preview")

            imgPreview.style.display = 'block'
            const oFReader = new FileReader()

            oFReader.readAsDataURL(image.files[0])
            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }
        </script>
@endsection
