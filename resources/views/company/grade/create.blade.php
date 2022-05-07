@extends('layouts.company')

@section('script')
<script>
    tagify(document.getElementById('group'), {maxTags: 1});
</script>
@endsection

@section('content')
<div class="row">
    <div class="col-lg-12">
        <form method="POST" action="{{ Route('company.test-management.grade.store') }}">
            @csrf
            <div class="card card-flush mb-5 border">
                <div class="card-header">
                    <div class="card-title">
                        <h4>Tambah Peringkat</h4>
                    </div>
                </div>
                <div class="card-body pt-0">
                    <div class="mb-10 fv-row">
                        <label class="required form-label">Pilih Group</label>
                        <input class="form-control form-control-sm @error('group') is-invalid @enderror" name="group" id="group" value="{{ old('group') }}" placeholder="Ketik baru nama group atau pilih yang sudah ada">
                        @error('group')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-10 fv-row">
                        <label class="required form-label">Tampilan Peringkat</label>
                        <input type="text" class="form-control form-control-sm @error('name') is-invalid @enderror" name="name" placeholder="Tampilan Peringkat" value="{{ old('name') }}" autocomplete="off">
                        @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-10 fv-row">
                        <label class="required form-label">Nilai</label>
                        <div class="input-group input-group-sm mb-5">
                            <input type="text" class="form-control @error('value_start') is-invalid @enderror" name="value_start" placeholder="Nilai Awal" value="{{ old('value_start') }}">
                            <span class="input-group-text">-</span>
                            <input type="text" class="form-control @error('value_end') is-invalid @enderror" name="value_end" placeholder="Nilai Akhir" value="{{ old('value_end') }}">
                            @if($errors->has('value_start') || $errors->has('value_end'))
                            <div class="invalid-feedback">{{ $errors->first('value_start') }}</div>
                            <div class="invalid-feedback">{{ $errors->first('value_end') }}</div>
                            @endif
                        </div>
                    </div>
                    <div class="mb-10 fv-row">
                        <label class="form-label">Hasil Peringkat</label>
                        <textarea class="form-control form-control-sm @error('result') is-invalid @enderror" name="result" placeholder="Hasil Peringkat">{{ old('result') }}</textarea>
                        @error('result')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-10 fv-row">
                        <label class="form-label">Warna Peringkat</label>
                        <select class="form-select form-select-sm @error('color') is-invalid @enderror" name="color" data-control="select2" data-hide-search="true" data-placeholder="Pilih Warna Peringkat">
                            <option value="red">Merah</option>
                            <option value="yellow">Kuning</option>
                            <option value="green">Hijau</option>
                            <option value="blue">Biru</option>
                        </select>
                        @error('color')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mt-7">
                        <a href="{{ Route('company.test-management.grade.index') }}" class="btn btn-sm btn-dark">
                            <span class="svg-icon svg-icon-5"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path d="M9.60001 11H21C21.6 11 22 11.4 22 12C22 12.6 21.6 13 21 13H9.60001V11Z" fill="white" />
                                    <path opacity="0.3" d="M9.6 20V4L2.3 11.3C1.9 11.7 1.9 12.3 2.3 12.7L9.6 20Z" fill="white" />
                                </svg>
                            </span>
                            Batalkan dan Kembali
                        </a>
                        <button type="submit" class="btn btn-primary btn-sm px-10">Buat Peringkat</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection