

		{{$anggota->nama}}<br>
		{{$anggota->id}}
				alamat: {{$anggota->alamat}}
			@foreach($anggota->hobis as $gue)
			<li>{{$gue->hobi}}</li>
			@endforeach

			@foreach($anggota->barang as $au)
			<br>
			{{$au->id_barang}}
			<li>nama barang: {{$au->nama_barang}}</li>
			<li>harga barang: {{$au->harga_barang}}</li>
			@endforeach

				

<form action="/awe" method="post" >
@foreach($anggota->barang as $au)
<input type="hidden" name="id_barang" value="{{$au->id_barang}}">
@endforeach
<input type="hidden" name="id_anggota" value="{{$anggota->id}}">
<br>
<input type="submit" name="submit" value="Submit">{{csrf_field()}}

<
</form>