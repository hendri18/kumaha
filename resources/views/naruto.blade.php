{{$anggota->nama}}<br>
		@if ($anggota->barang->count() > 0)

			@foreach($anggota->barang as $au)
			<br>
			
			<li>nama barang: {{$au->nama_barang}}</li>
			<li>harga barang: {{$au->harga_barang}}</li>
			@endforeach
		@endif
