@if (isset($id))
<input type="hidden" name="id" value="{{$id}}">
@endif
<div class="row">
  <div class="col-lg-6">
    <div class="form-group has-error">
      <label class="form-control-label">NIK : <span style="color: red">*</span></label>
      <input class="form-control" type="text" name="nik" value="{{(isset($nik) ? $nik : '' )}}" placeholder="Masukan NIK" required>
      <span class="has-error help-block"></span>
    </div>
  </div>
  <div class="col-lg-6">
    <div class="form-group has-error">
      <label class="form-control-label">Nama : <span style="color: red">*</span></label>
      <input class="form-control" type="text" name="nama" value="{{(isset($nama) ? $nama : '' )}}" placeholder="Masukan Nama" required>
      <span class="has-error help-block"></span>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-lg-6">
    <div class="form-group has-error">
      <label class="form-control-label">Umur : <span style="color: red">*</span></label>
      <input class="form-control" type="text" name="umur" value="{{(isset($umur) ? $umur : '' )}}" placeholder="Masukan Umur" required>
      <span class="has-error help-block"></span>
    </div>
  </div>
  <div class="col-lg-6">
    <div class="form-group has-error">
        <label class="form-control-label">Jenis Kelamin : </label>
          <select type="text" name="jenis_kelamin" class="form-control">
            <option value="laki" {{ isset($jenis_kelamin) && $jenis_kelamin == 'laki' ? 'selected' : '' }}>Laki - Laki</option>
            <option value="perempuan" {{ isset($jenis_kelamin) && $jenis_kelamin == 'perempuan' ? 'selected' : '' }}>Perempuan</option>
        </select>
        <span class="has-error help-block"></span>
    </div>
  </div>
</div>
<div class="row mg-b-25">
  <div class="col-lg-12">
    <div class="form-group">
      <label class="form-control-label">Alamat : </label>
      <textarea class="form-control" type="text" name="alamat" placeholder="Alamat">{{(isset($alamat) ? $alamat : '' )}}</textarea>
      <span class="has-error help-block"></span>
    </div>
  </div>
</div>
@if(!isset($status))
<div class="row mg-b-25">
  <div class="col-lg-12">
    <div class="form-group has-error">
        <label class="form-control-label">Status : </label>
          <select type="text" name="status" class="form-control">
            <option value="1" {{ isset($status) && $status == '1' ? 'selected' : '' }}>ODP</option>
            <option value="2" {{ isset($status) && $status == '2' ? 'selected' : '' }}>PDP</option>
            <option value="3" {{ isset($status) && $status == '3' ? 'selected' : '' }}>Positif</option>
            <option value="4" {{ isset($status) && $status == '4' ? 'selected' : '' }}>Sembuh</option>
            <option value="5" {{ isset($status) && $status == '5' ? 'selected' : '' }}>Meninggal</option>
        </select>
        <span class="has-error help-block"></span>
    </div>
  </div>
  </div>
</div>
@endif