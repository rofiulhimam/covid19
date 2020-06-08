<input type="hidden" name="id" value="{{$id}}">
<div class="row">
  <div class="col-lg-6">
    <div class="form-group has-error">
      <label class="form-control-label">NIK : </label>
      <br>
      <label>{{$nik}}</label>
      <span class="has-error help-block"></span>
    </div>
  </div>
  <div class="col-lg-6">
    <div class="form-group has-error">
      <label class="form-control-label">Nama : </label>
      <br>
      <label>{{$nama}}</label>
      <span class="has-error help-block"></span>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-lg-6">
    <div class="form-group has-error">
      <label class="form-control-label">Umur : </label>
      <br>
      <label>{{$umur}}</label>
      <span class="has-error help-block"></span>
    </div>
  </div>
  <div class="col-lg-6">
    <div class="form-group has-error">
        <label class="form-control-label">Jenis Kelamin : </label>
        <br>
        <label>{{$jenis_kelamin == 'laki' ? 'laki - laki' : 'perempuan' }}</label>
        <span class="has-error help-block"></span>
    </div>
  </div>
</div>
<div class="row mg-b-25">
  <div class="col-lg-12">
    <div class="form-group">
      <label class="form-control-label">Alamat : </label>
      <br>
      <label>{{$alamat}}</label>
      <span class="has-error help-block"></span>
    </div>
  </div>
</div>
<div class="row mg-b-25">
  <div class="col-lg-12">
    <div class="form-group has-error">
        <label class="form-control-label">Status : </label>
          <select type="text" name="status" class="form-control">
            @if(isset($status) && $status == '1')
              <option value="2" {{ isset($status) && $status == '2' ? 'selected' : '' }}>PDP</option>
              <option value="3" {{ isset($status) && $status == '3' ? 'selected' : '' }}>Positif</option>
              <option value="4" {{ isset($status) && $status == '4' ? 'selected' : '' }}>Sembuh</option>
              <option value="5" {{ isset($status) && $status == '5' ? 'selected' : '' }}>Meninggal</option>
            @endif
            @if(isset($status) && $status == '2')
              <option value="3" {{ isset($status) && $status == '3' ? 'selected' : '' }}>Positif</option>
              <option value="4" {{ isset($status) && $status == '4' ? 'selected' : '' }}>Sembuh</option>
              <option value="5" {{ isset($status) && $status == '5' ? 'selected' : '' }}>Meninggal</option>
            @endif
            @if(isset($status) && $status == '3')
              <option value="4" {{ isset($status) && $status == '4' ? 'selected' : '' }}>Sembuh</option>
              <option value="5" {{ isset($status) && $status == '5' ? 'selected' : '' }}>Meninggal</option>
            @endif
        </select>
        <span class="has-error help-block"></span>
    </div>
  </div>
  </div>
</div>