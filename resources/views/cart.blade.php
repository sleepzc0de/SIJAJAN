@extends('layouts.master')

@section('css')
@endsection

@section('js')
@endsection

@section('content')


    <table id="cart" class="table table-bordered">
        <thead>
            <tr>
                <th>Product</th>
                <th>JenisFood</th>
                <th>harga</th>
                <th>ActionMenu</th>
            </tr>
        </thead>
        <tbody>
            @php $total = 0 @endphp
            @if (session('addcart'))
                @foreach (session('addcart') as $id => $details)
                    <tr rowId="{{ $id }}">
                        <td data-th="Product">
                            <div class="row">
                                <div class="col-sm-3 hidden-xs"><img src="{{ asset('image') }}/{{ $details['images'] }}"
                                        class="card-img-top">
                                </div>
                                <div class="col-sm-9">
                                    <h4 class="nomargin">{{ $details['name'] }}</h4>
                                </div>
                            </div>
                        </td>
                        <td data-th="JenisFood">{{ $details['makanan'] }}</td>
                        <td data-th="harga">{{ $details['harga'] }}</td>
                        <td class="actions" style="font-family: Comic Sans MS, cursive;">
                            <a class="btn btn-outline-danger btn-sm delete-product"><i class="fa fa-trash"
                                    aria-hidden="true"></i></a>
                        </td>

                    </tr>
                @endforeach
            @endif
        </tbody>
        <tfoot>
            <tr>
                <td colspan="5" class="text-right">
                    <a href="{{ url('/order') }}" class="btn btn-primary"><i class="fa fa-angle-left"></i> Continue
                        Shopping</a>
                    <button class="btn btn-primary">Checkout</button>
                </td>
            </tr>
        </tfoot>
    </table>

@section('scripts')
    <script type="text/javascript">
        $(document).ready(function() {
            $(".delete-product").click(function(e) {
                e.preventDefault();

                var ele = $(this);

                if (confirm("Do you really want to delete?")) {
                    $.ajax({
                        url: '{{ route('delete.cart.product') }}', // Mengubah href menjadi url
                        method: "DELETE",
                        data: {
                            _token: '{{ csrf_token() }}',
                            id: ele.parents("tr").attr("rowId")
                        },
                        success: function(response) {
                            window.location.reload();
                        }
                    });
                }
            });
        });
    </script>
@endsection
