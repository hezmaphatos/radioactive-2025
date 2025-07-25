@extends('layouts.main')

@section('container')

    <style>
.scroll-list__wrp .scrollbar-track {
  display: none !important;
}

@media screen and (max-width: 768px) {
  .is-hidden {
  display: none !important;
}
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
    </style>

    <body class="min-h-screen text-black">
            <div class="cart-container flex flex-col gap-1 justify-between w-[90%] mx-[5%] md:flex-row pt-[30px] overflow-hidden">
                <div class="scroll-list w-3/4 w-full max-w-[1500px] p-[25px] mt-[50px] max-h-[70vh] md:mt-[50px] mt-[20px] md:h-auto h-[24vh]">
                  <h1 class="text-center text-[#f6e79c]" style="text-shadow: 0 0 10px #f6e79c, 0 0 20px #f6e79c;">Cart</h1>
                  <div class="scroll-list__wrp js-scroll-content js-scroll-list w-full h-[24vh] md:h-[70vh] overflow-auto p-[25px] md:p-[50px] shadow-[0px_7px_46px_0px_rgba(0,0,0,0.3)] bg-[#a3b18a7c] rounded-[8px] border-2 border-solid border-[#f6e79c]">
                        <div id="veryUniqueItems">
                            @php
                              $cumulative_price = 0;
                              $cumulative_additional_price = 0;
                            @endphp
                            @foreach ($carts as $cart)
                            <div class="scroll-list__item js-scroll-list-item @if ($cart->variation()->stock < $cart->quantity) text-red-800 @endif w-full h-[16vh] flex mb-[15px] rounded-[8px] bg-[#DFF0D8] transition-all duration-[350ms] ease-in-out opacity-0 scale-[0.7] shadow-[0px_7px_16px_0px_rgba(0,0,0,0.2)] p-[10px]">
                            
                              <img src="{{ asset('storage/' . $cart->merch->image) }}" alt="" class="max-w-[20%] h-full rounded-[10px]">
                                <div class="details block ml-[20px] w-full">
                                  <!-- if preorder then h1 Product 1 (Preorder) else baru h1 product 1 aja !-->
                                    <h4 id="name">{{ $cart->merch->name }}</h4>
                                        <i class="fa-solid fa-tag text-[11px] text-[#3a862d]"></i><span id="detail-merch "> {{ $cart->variation }}</span> 
                                        <br>
                                        <i class="fa-solid fa-money-bill text-[11px] text-[#3a862d]"></i><span id="detail-merch " data-id="{{ $cart->id }}"> Rp {{ number_format($cart->total_price, 0, ',', '.') }}</span>

                                        <div class="flex items-center gap-2 quantity-cart">
                                          <button
                                          class="qty-decrease w-8 h-8 flex items-center justify-center rounded-full bg-red-500 text-white disabled:opacity-50 mt-[3px] rounded-[100px] h-[25px] w-[7%] outline-none hover:opacity-100 transition-all duration-[350ms] ease-in-out"
                                          data-id="{{ $cart->id }}"
                                          @if ($cart->quantity == 1) disabled @endif
                                        >
                                          <p class="text-lg leading-none text-[1.3em]">-</p>
                                        </button>

                                          <input type="number" class="qty-input w-12 no-spinner text-center mt-[3px] rounded-[50px] h-[25px] outline-none border-none" value="{{ $cart->quantity }}" min="1" max="{{ $cart->variation()->stock }}" data-id="{{ $cart->id }}" disabled>
                                          <button
                                          class="qty-increase w-8 aspect-square flex items-center justify-center rounded-full bg-green-500 text-white text-lg leading-none disabled:opacity-50 mt-[3px] rounded-[100px] h-[25px] w-[7%] outline-none hover:opacity-100 transition-all duration-[350ms] ease-in-out"
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
                                            <button class="flex items-center delete-item text-white px-5 bg-red-600/60 hover:bg-red-600 rounded-full h-1/2 mt-[5%] mr-[2%] outline-none transition-all duration-[350ms] ease-in-out" onclick="return confirm('Ingin menghapus item dari cart?')"> <i class="fa-solid fa-trash"></i> </button>
                                      </form>
                                @php
                                    $cumulative_price += $cart->total_price;
                                    $cumulative_additional_price +=  ($cart->merch_variation->additional_price * $cart->quantity);
                                @endphp

                                </div>
                                @endforeach
                               <div id="cart-check" data-cart-count="{{ $carts->count() }}"></div>
                               @if ($carts->count() > 3)
                                <div class="scroll-list__item js-scroll-list-item is-hidden w-full h-[16vh] flex mb-[15px] rounded-[8px] bg-[#DFF0D8] transition-all duration-[350ms] ease-in-out opacity-0 scale-[0.7] shadow-[0px_7px_16px_0px_rgba(0,0,0,0.2)] p-[10px]">No aitems in  the cart.</div>
                                @endif
                                @if ($carts->count() == 0)
                                <div class="scroll-list__item js-scroll-list-item w-full h-[16vh] flex mb-[15px] rounded-[8px] bg-[#DFF0D8] transition-all duration-[350ms] ease-in-out opacity-0 scale-[0.7] shadow-[0px_7px_16px_0px_rgba(0,0,0,0.2)] p-[10px]">
                                  <h1>No items in  the cart.</h1>
                                </div>
                                @endif
                        </div>
                    </div>
                </div>
                  <div class="cart-checkout-container w-1/4 w-full max-w-[700px] p-[25px] mt-[50px] mr-auto">
                    <h1 class="text-center text-[#f6e79c]" style="text-shadow: 0 0 10px #f6e79c#f6e79c, 0 0 20px #f6e79c;">Summary</h1>
                    <div class="card bg-[#a3b18a7c] h-full border-2 border-solid border-[#f6e79c]">
                      <div class="card-content p-[10px]">
                            <form action="/merch/checkout" method="POST" enctype="multipart/form-data"
                            class="font-ltmuseumreg">
                            @csrf
                            <div class="flex flex-col">
                                <label class="text-[#F1F5F9]" for="name" class="">Nama</label>
                                <input required type="text" name="name" id="name" placeholder="Iggy"
                                    class="bg-white text-[#1F2937] border-black" value="{{ auth()->user()->name }}">
                            </div>
                            <div class="flex flex-col">
                                <label class="text-[#F1F5F9]" for="email" class="">Email</label>
                                <input required type="email" name="email" id="email" value="{{auth()->user()->email}}" placeholder="iggy@gmail.com"
                                    class="bg-white text-[#1F2937] border-black">
                            </div>
                            <div class="flex flex-col">
                                <label class="text-[#F1F5F9]" for="phone" class="">Phone</label>
                                <input required type="number" name="phone" id="phone" placeholder="081710771077"
                                    class="bg-white text-[#1F2937] border-black">
                            </div>
                            <div class="flex flex-col">
                                <label class="text-[#F1F5F9]" for="line" class="">ID Line</label>
                                <input required type="text" name="line" id="line" placeholder="ID Line"
                                    class="bg-white text-[#1F2937] border-black">
                            </div>

                        <div class="price-calculation my-3 bg-[#FDF6E3] rounded-[10px] p-[10px]">
                          <p>Subtotal Rp <span id="subtotal">{{ number_format($cumulative_price, 0, ',', '.') }}</span></p>
                          <p>Additional Rp <span id="additional">{{ number_format($cumulative_additional_price, 0, ',', '.') }}</span></p>
                          <p>Total Rp <span id="total">{{ number_format($cumulative_price + $cumulative_additional_price,0, ',', '.') }}</span></p>
                        </div>

                            <div class="flex flex-col">
                                <label for="cumulative_price" class="text-black">Upload Payment Proof</label>
                                <p class="text-black">Transfer to BCA <text class="text-blue-500">6600448160</text> a/n Helena Hanna Haryadi in the right amount (Rp
                                  <span id="total2">{{ number_format($cumulative_price + $cumulative_additional_price,0, ',', '.') }}</span>) add information <text class="text-[#f6e79c]">(Nama Merch/Bundle)-(Quantity)</text></p>
                                <input class="text-white my-2 rounded-lg" type="file" accept="image/*" name="payment_image" id="payment_image"
                                    onchange="previewImage()">
                                <img src="" alt="" class="hidden img-preview h-100 my-2">
                            </div>

                            @if ($flag)
                                <p>Kurangi jumlah atau hapus item untuk melanjutkan checkout (Lakukan refresh setelah mengurangi jumlah)</p>
                            @else
                          
<button class="bg-[#926C15] text-[#f6e79c] rounded-md px-4 py-2 font-bold border-2 border-[#f6e79c] 
               hover:bg-[#f6e79c] hover:text-white hover:border-white transition-colors duration-500"
        style="box-shadow: 0 0 10px #f6e79c, 0 0 20px #f6e79c;">
  Create Order!
</button>

                            @endif
                     </div>
                          </form>
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
              _method: "PUT",
              quantity: newQty
          },
          success: function (response) {
              input.val(response.new_quantity);
              $(`span[data-id="${cartId}"]`).text(" Rp " + Number(response.new_total).toLocaleString('id-ID'));

              $('#subtotal').text(response.subtotal);
              $('#additional').text(response.additional);
              $('#total').text(response.total);
              $('#total2').text(response.total);
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
