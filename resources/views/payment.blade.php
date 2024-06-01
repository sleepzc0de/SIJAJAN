@extends('layouts.appdashboard')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Payment</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('payment.process') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="payment_method" class="col-md-4 col-form-label text-md-right">Payment
                                    Method</label>

                                <div class="col-md-6">
                                    <div class="payment-options">
                                        @foreach ([
            'credit_card' => 'Credit Card',
            'bca' => 'BCA',
            'bni' => 'BNI',
            'bri' => 'BRI',
            'mandiri' => 'Mandiri',
            'cimb' => 'CIMB',
            'permata' => 'Permata',
            'dana' => 'DANA',
            'gopay' => 'GoPay',
            'ovo' => 'OVO',
            'linkaja' => 'LinkAja',
            'indomaret' => 'Indomaret',
            'alfamart' => 'Alfamart',
        ] as $value => $label)
                                            <label class="payment-option">
                                                <input type="radio" name="payment_method" value="{{ $value }}"
                                                    required>
                                                {{ $label }}
                                            </label>
                                        @endforeach
                                    </div>

                                    @error('payment_method')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div id="credit_card_fields" style="display: none;">
                                <div class="form-group row">
                                    <label for="card_name" class="col-md-4 col-form-label text-md-right">Nama Pemegang
                                        Kartu</label>
                                    <div class="col-md-6">
                                        <input id="card_name" type="text"
                                            class="form-control @error('card_name') is-invalid @enderror" name="card_name"
                                            value="{{ old('card_name') }}" autocomplete="card_name" autofocus>
                                        @error('card_name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="card_number" class="col-md-4 col-form-label text-md-right">Nomor
                                        Kartu</label>
                                    <div class="col-md-6">
                                        <input id="card_number" type="text"
                                            class="form-control @error('card_number') is-invalid @enderror"
                                            name="card_number" value="{{ old('card_number') }}" autocomplete="card_number">
                                        @error('card_number')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="expiry_date" class="col-md-4 col-form-label text-md-right">Tanggal
                                        Kadaluarsa</label>
                                    <div class="col-md-6">
                                        <input id="expiry_date" type="text"
                                            class="form-control @error('expiry_date') is-invalid @enderror"
                                            name="expiry_date" value="{{ old('expiry_date') }}" autocomplete="expiry_date">
                                        @error('expiry_date')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="cvc" class="col-md-4 col-form-label text-md-right">Card Verification
                                        Code(CVC)</label>
                                    <div class="col-md-6">
                                        <input id="cvc" type="text"
                                            class="form-control @error('cvc') is-invalid @enderror" name="cvc"
                                            value="{{ old('cvc') }}" autocomplete="cvc">
                                        @error('cvc')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">Submit Payment</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.querySelectorAll('input[name="payment_method"]').forEach(function(elem) {
            elem.addEventListener('change', function() {
                var creditCardFields = document.getElementById('credit_card_fields');
                if (this.value === 'credit_card') {
                    creditCardFields.style.display = 'block';
                } else {
                    creditCardFields.style.display = 'none';
                }
            });
        });
    </script>
@endsection
