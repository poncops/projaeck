@extends('layouts.frontend')
@section('title', 'Order - ' . $order->code)
@section('content')
	<div class="breadcrumb-area breadcrumb-padding bg-breadcrumb" style="background-image: url({{ asset('frontend/assets/img/sakinah_mart.png') }})">
		<div class="container-fluid">
			<div class="breadcrumb-content text-center">
				<h2>Favorit Saya</h2>
				<ul>
					<li><a href="{{ url('/') }}">Beranda</a></li>
					<li>Favorit Saya</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="shop-page-wrapper shop-page-padding ptb-100">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-3">
                <h3 class="sidebar-title">Menu Pengguna</h3>
                    <div class="sidebar-categories">
                        <ul>
                            <li><a href="{{ url('profile') }}">Profil</a></li>
                            <li><a href="{{ url('orders') }}">Pesanan</a></li>
                            <li><a href="{{ url('favorite') }}">Favorit</a></li>
                        </ul>
                    </div>
				</div>
				<div class="col-lg-9">
					<div class="d-flex justify-content-between">
						<h2 class="text-dark font-weight-medium">Order ID #{{ $order->code }}</h2>
					</div>
					<div class="row pt-5">
						<div class="col-xl-4 col-lg-4">
							<p class="text-dark mb-2" style="font-weight: normal; font-size:16px; text-transform: uppercase;">Alamat Penagihan</p>
							<address>
								{{ $order->customer_first_name }} {{ $order->customer_last_name }}
								<br> {{ $order->customer_address1 }}
								<br> {{ $order->customer_address2 }}
								<br> Email: {{ $order->customer_email }}
								<br> Telepon: {{ $order->customer_phone }}
								<br> Kode Pos: {{ $order->customer_postcode }}
							</address>
						</div>
						@if ($order->shipment)
							<div class="col-xl-4 col-lg-4">
								<p class="text-dark mb-2" style="font-weight: normal; font-size:16px; text-transform: uppercase;">Alamat Pengiriman</p>
								<address>
									{{ $order->shipment->first_name }} {{ $order->shipment->last_name }}
									<br> {{ $order->shipment->address1 }}
									<br> {{ $order->shipment->address2 }}
									<br> Email: {{ $order->shipment->email }}
									<br> Telepon: {{ $order->shipment->phone }}
									<br> Kode Pos: {{ $order->shipment->postcode }}
								</address>
							</div>
						@endif
						<div class="col-xl-4 col-lg-4">
							<p class="text-dark mb-2" style="font-weight: normal; font-size:16px; text-transform: uppercase;">Detail</p>
							<address>
								ID: <span class="text-dark">#{{ $order->code }}</span>
								<br> {{ $order->order_date }}
								<br> Status: {{ $order->status }} {{ $order->isCancelled() ? '('. $order->cancelled_at .')' : null}}
								@if ($order->isCancelled())
									<br> Cancellation Note : {{ $order->cancellation_note}}
								@endif
								<br> Status Pembayaran: {{ $order->payment_status }}
								<br> Dikirim oleh: {{ $order->shipping_service_name }}
							</address>
						</div>
					</div>
					<div class="table-content table-responsive">
						<table class="table table-bordered table-striped">
							<thead>
								<tr>
									<th>#</th>
									<th>Barang</th>
									<th>Deskripsi</th>
									<th>Qty</th>
									<th>Biaya Satuan</th>
									<th>Total</th>
								</tr>
							</thead>
							<tbody>
								@forelse ($order->orderItems as $item)
									<tr>
										<td>{{ $item->sku }}</td>
										<td>{{ $item->name }}</td>
										<td>{{ $item->weight }} (gram)</td>
										<td>{{ $item->qty }}</td>
										<td>Rp.{{ number_format($item->base_price) }}</td>
										<td>Rp.{{ number_format($item->sub_total) }}</td>
									</tr>
								@empty
									<tr>
										<td colspan="6">Barang pesanan tidak ditemukan!</td>
									</tr>
								@endforelse
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection