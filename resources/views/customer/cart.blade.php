@extends('customer.layout')

@section('content')
<table id="cart" class="table table-hover table-condensed">
    <thead>
        <tr>
            <th style="width:50%">Product</th>
            <th style="width:10%">Price</th>
            <th style="width:8%">Quantity</th>
            <th style="width:22%" class="text-center">Subtotal</th>
            <th style="width:10%"></th>
        </tr>
    </thead>
    <tbody>
        @php $total = 0 @endphp
        @if(session('cart'))
        @foreach(session('cart') as $id => $details)
        @php $total += $details['harga'] * $details['quantity'] @endphp
        <tr data-id="{{ $id }}">
            <td data-th="Product">
                <div class="row">
                    <div class="col-sm-3 hidden-xs"><img src="{{ asset(Storage::url($details['gambar'])) }}" width="100"
                            height="100" class="img-responsive" /></div>
                    <div class="col-sm-9">
                        <h4 class="nomargin">{{ $details['nama_menu'] }}</h4>
                    </div>
                </div>
            </td>

            <td data-th="Price">Rp{{ $details['harga'] }}</td>
            <td data-th="Quantity">
                <input type="number" value="{{ $details['quantity'] }}" class="form-control quantity cart_update"
                    min="1" />
            </td>
            <td data-th="Subtotal" class="text-center subtotal">Rp{{ $details['harga'] * $details['quantity'] }}</td>
            <td class="actions" data-th="">
                <button class="btn btn-danger btn-sm cart_remove"><i class="fa fa-trash-o"></i> Delete</button>
            </td>
        </tr>
        @endforeach
        @endif
    </tbody>
    <tfoot>
        <tr>
            <td colspan="5" style="text-align:right;">
                <h3><strong>Total Rp<span id="total">{{ $total }}</span></strong></h3>
            </td>
        </tr>
        <tr>
            <td colspan="5" style="text-align:right;">
                <form action="{{ route('checkout') }}" method="POST">
                    @csrf
                    <a href="{{ url('/') }}" class="btn btn-danger"> <i class="fa fa-arrow-left"></i> Continue
                        Shopping</a>
                    <button class="btn btn-success" type="submit" id="checkout-live-button"><i class="fa fa-money"></i>
                        Checkout</button>
                </form>
            </td>
        </tr>
    </tfoot>
</table>
@endsection

@section('scripts')
<script type="text/javascript">
$(".cart_update").change(function(e) {
    e.preventDefault();

    var ele = $(this);
    var quantity = ele.val();
    var price = ele.parents("tr").find("td[data-th='Price']").text().replace("Rp", "");
    var subtotal = quantity * price;

    ele.parents("tr").find("td[data-th='Subtotal']").text("Rp" + subtotal);

    var total = 0;
    $(".subtotal").each(function() {
        total += parseFloat($(this).text().replace("Rp", ""));
    });

    $("#total").text(total);
});

//
$(".cart_remove").click(function(e) {
    e.preventDefault();

    var ele = $(this);

    if (confirm("Do you really want to remove?")) {
        $.ajax({
            url: '{{ route("remove_from_cart") }}',
            method: "DELETE",
            data: {
                _token: '{{ csrf_token() }}',
                id: ele.parents("tr").attr("data-id")
            },
            success: function(response) {
                window.location.reload();
            }
        });
    }
});
</script>
@endsection