@extends('layouts.app')

@section('content')
<p>
<div class="container" style="margin-bottom:2%;">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">
          <h2><b>WIFI Pocket and Internet Card Registration / Pendaftaran Paket Internet dan Pocket Wifi</b></h2>
        </div>
        <div class="card-body">
          <p style="text-align:justify;">
            <h3>WIFI Pocket and Internet Card Registration / Pendaftaran Paket Internet dan Pocket Wifi</h3>
            <h5><br>-Shipping Cost is included on price bellow. / Harga di bawah sudah termasuk uang pengiriman.
            <br>-Payment is by Cash on Delivery / Pengiriman dan pembayaran melalui COD(Bayar ditempat)
            <br>-For Delivery date 1-10 First Payment include bill of the month, For 11-20 First Payment monthly bill will be half, For 21-31 First Payment include next month bill. / Untuk kedatangan tanggal 1-10 Pembayaran Pertama termasuk biaya bulanan bulan ini, Untuk 11-20 Pembayaran Pertama bulan ini jadi setengah harga, Untuk 21-31 Pembayaran Pertama termasuk uang bulanan untuk bulan depan.
            <br>-Monthly payment by convience store / Pembayaran bulanan melalui kombini.
            <br>-You will get complete instruction inside box / Intruksi lengkap akan didapatkan di dalam box.
            <br>-Minimum contract is 4 months using(you can use more), please make it return all item to our company when stop using. / Kontrak minimal adalah 4 bulan pemakaian(dapat digunakan lebih dari ini), Semua yang diterima harus dikembalikan kepada perusahaan saat berhenti berlangganan.
            <br>-Question please add FB @danielforce8 / Ada pertanyaan, langsung kontak FB @danielforce8
          </p></h5>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="container" style="margin-bottom:2%;">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                  <form class="" action="{{route('ProdukUser.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                      <label style="float:left;">Please select delivery date / Tolong dipilih tanggal kedatangan</label>
                      <select class="form-control" name="tgl_kedatangan">
                          <option value="1-10" {{(old('tgl_kedatangan') == '1-10') ? 'selected' : ''}}>1-10</option>
                          <option value="11-20" {{(old('tgl_kedatangan') == '11-20') ? 'selected' : ''}}>11-20</option>
                          <option value="21-30" {{(old('tgl_kedatangan') == '21-30') ? 'selected' : ''}}>21-30</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label style="float:left;"><b>POCKET WIFI and INTERNET CARD ORDER *</b>
                      (eng) For 2 Order or more please fill this form one more time with same shipping address(before 13.00 PM on the next day), we will reduce price for shipping cost / (ind) Untuk 2 order atau lebih tolong form ini di isi lagi dengan alamat tujuan yang sama(sebelum jam 1 siang di hari berikutnya), kami akan memotong ongkir.</label>
                      <select class="form-control" name="paket">
                          <option value="A1" {{(old('paket') == 'A1') ? 'selected' : ''}}>
                            (A1) 50GB / month Internet Card (Can Receive SMS) Softbank Monthly 3.400 Yen First Payment 6.600 Yen
                          </option>
                          <option value="B1" {{(old('paket') == 'B1') ? 'selected' : ''}}>
                            (B1) 50GB / month Internet Card (Can Receive SMS) + Number Japan Softbank Brastel Monthly 3.700 Yen First Payment 8.000 Yen
                          </option>
                          <option value="C1" {{(old('paket') == 'C1') ? 'selected' : ''}}>
                            (C1) 50Gb / Month Pocket WIFI Softbank JT 101 Monthly 3.400 Yen First Payment 8.600 Yen
                          </option>
                      </select>
                    </div>
                    <div class="form-group">
                        <label style="float:left;">Reciever Name / Nama Penerima </label>
                        <input name="nama" id="finish" type="text" class="form-control " placeholder="Your Answer..." value="{{old('nama')}}">
                    </div>
                    <div class="form-group">
                        <label style="float:left;">
                          Delivery Date (Shipping in 2 days) / Hari Sampai (Paling cepat besok lusa) *
                          NOTE : (Month, Day) Fastest shipping is 2 days after this day. / (BB = Bulan, HH= Hari Tanggal) Pengiriman tercepat adalah 2 hari dari hari ini.
                        </label>
                        <input name="tanggal" id="finish" type="date" class="form-control" placeholder="Your Answer..." value="{{old('tanggal')}}">
                    </div>
                    <div class="form-group">
                        <label style="float:left;">Address (You can upload bellow) / Alamat (bisa upload foto alamat dibawah)</label>
                        <input name="alamat" id="finish" type="text" class="form-control" placeholder="Your Answer..." value="{{old('alamat')}}">
                    </div>
                    <div class="form-group">
                        <label style="float:left;">Address Upload Here / Upload Alamat di Sini</label>
                        <input name="f_alamat" id="finish" type="file" class="form-control" value="{{old('f_alamat')}}">
                    </div>
                    <div class="form-group">
                        <label style="float:left;">Picture of ID(Alien Card or Pasport) / Foto Id (KTP Jepang atau Foto Pasport) *</label>
                        <input name="f_ktp" id="finish" type="file" class="form-control" value="{{old('f_ktp')}}">
                    </div>
                    <div class="form-group">
                      <label style="float:left;">Delivery Time / Jam Sampai *</label>
                      <select class="form-control" name="jam">
                          <option value="08.00-12.00" {{(old('jam') == '08.00-12.00') ? 'selected' : ''}}>08.00-12.00</option>
                          <option value="14.00-16.00" {{(old('jam') == '14.00-16.00') ? 'selected' : ''}}>14.00-16.00</option>
                          <option value="16.00-18.00" {{(old('jam') == '16.00-18.00') ? 'selected' : ''}}>16.00-18.00</option>
                          <option value="18.00-20.00" {{(old('jam') == '18.00-20.00') ? 'selected' : ''}}>18.00-20.00</option>
                          <option value="19.00-21.00" {{(old('jam') == '19.00-21.00') ? 'selected' : ''}}>19.00-21.00</option>
                      </select>
                    </div>
                    <div class="form-group">
                        <label style="float:left;">Phone Number(If any) / Nomor Telepon (Kalau ada)</label>
                        <input name="phone" id="finish" type="number" class="form-control" placeholder="Masukkan No.Telphone..." value="{{old('phone')}}">
                    </div>
                    <div class="form-group">
                        <label style="float:left;">Email Address / Alamat Email</label>
                        <input name="email" id="finish" type="email" class="form-control " placeholder="Your Answer..." value="{{old('email')}}">
                    </div>
                <div class="modal-footer">
                  <button type="submit" class="btn btn-custon-rounded-four btn-primary">Tambah</button>
                </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="table-responsive">
  <table class="table table-striped">
          <thead class="thead-dark">
            <tr>
              <th scope="col">no</th>
              <th scope="col">tgl_kedatangan</th>
              <th scope="col">paket</th>
              <th scope="col">nama</th>
              <th scope="col">tanggal</th>
              <th scope="col">alamat</th>
              <th scope="col">f_alamat</th>
              <th scope="col">f_ktp</th>
              <th scope="col">jam_sampai</th>
              <th scope="col">phone</th>
              <th scope="col">email</th>
            </tr>
          </thead>
          <tbody>
          @foreach($produk as $data)
          <th scope="row">{{$loop->iteration}}.</th>
          <td>{{ $data->tgl_kedatangan }}</td>
          <td>{{ $data->paket }}</td>
          <td>{{ $data->nama_penerima }}</td>
          <td>{{ $data->tanggal }}</td>
          <td>{{ $data->alamat }}</td>
          <td>
            <img style="width:50%;  margin-top:2%; margin-bottom:2%;" src="{{asset('storage/'.$data->foto_alamat)}}" alt="">
          </td>
          <td>
            <img style="width:50%;  margin-top:2%; margin-bottom:2%;" src="{{asset('storage/'.$data->foto_ktp)}}" alt="">
          </td>
          <td>{{ $data->jam_sampai }}</td>
          <td>{{ $data->phone }}</td>
          <td>{{ $data->email }}</td>
        </tr>
          @endforeach
          </tbody>
  </table>
</div>
@endsection
