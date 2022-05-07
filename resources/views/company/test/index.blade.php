@extends('layouts.company')

@section('content')
<div class="row">
    <div class="col-lg-12 mb-10">
        <div class="d-flex justify-content-between mb-10">
            <h2>Tes Assessment</h2>
            <a href="http://talentics.test/tests/add" class="btn btn-primary btn-sm">
                <i class="las la-plus"></i>
                Tambah Tes Assessment
            </a>
        </div>
        <div class="row">
            <div class="col-lg-12 mb-7">
                <div class="card border border-primary bg-primary min-h-200px">
                    <div class="card-body">
                        <div class="d-flex justify-content-between mb-7">
                            <div class="symbol symbol-circle symbol-20px mb-5">
                                <div class="symbol-label fs-7 fw-bold bg-light">1</div>
                            </div>
                            <div>
                                <span class="badge badge-success">Sedang Berjalan</span>
                            </div>
                        </div>
                        <h5 class="text-light fs-7 mb-3">Tes 001</h5>
                        <table class="table gy-1 text-light">
                            <tbody>
                                <tr>
                                    <td style="width: 250px;">Waktu Pengerjaan</td>
                                    <td style="width: 0px;">:</td>
                                    <td>18-04-2022 23:05 s.d 03-06-2022 23:59</td>
                                </tr>
                                <tr>
                                    <td style="width: 250px;">Jumlah Orang Yang Diundang</td>
                                    <td style="width: 0px;">:</td>
                                    <td>6 Orang</td>
                                </tr>
                                <tr>
                                    <td style="width: 250px;">Jumlah Yang Sudah Mengikuti Tes</td>
                                    <td style="width: 0px;">:</td>
                                    <td>0 Orang</td>
                                </tr>
                            </tbody>
                        </table>
                        <a href="http://talentics.test/tests/1/detail" class="text-light">
                            Lihat Detail
                            <span class="svg-icon svg-icon-5 svg-icon-light">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="white" />
                                    <path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="white" />
                                </svg>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 mb-7">
                <div class="card border border-primary bg-primary min-h-200px">
                    <div class="card-body">
                        <div class="d-flex justify-content-between mb-7">
                            <div class="symbol symbol-circle symbol-20px mb-5">
                                <div class="symbol-label fs-7 fw-bold bg-light">2</div>
                            </div>
                            <div>
                                <span class="badge badge-success">Sedang Berjalan</span>
                            </div>
                        </div>
                        <h5 class="text-light fs-7 mb-3">Tes 002</h5>
                        <table class="table gy-1 text-light">
                            <tbody>
                                <tr>
                                    <td style="width: 250px;">Waktu Pengerjaan</td>
                                    <td style="width: 0px;">:</td>
                                    <td>21-04-2022 12:18 s.d 25-05-2022 23:59</td>
                                </tr>
                                <tr>
                                    <td style="width: 250px;">Jumlah Orang Yang Diundang</td>
                                    <td style="width: 0px;">:</td>
                                    <td>2 Orang</td>
                                </tr>
                                <tr>
                                    <td style="width: 250px;">Jumlah Yang Sudah Mengikuti Tes</td>
                                    <td style="width: 0px;">:</td>
                                    <td>0 Orang</td>
                                </tr>
                            </tbody>
                        </table>
                        <a href="http://talentics.test/tests/2/detail" class="text-light">
                            Lihat Detail
                            <span class="svg-icon svg-icon-5 svg-icon-light">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="black" />
                                    <path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="black" />
                                </svg>
                            </span>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="col-lg-12">
        <h2 class="mb-10">Master Data</h2>
        <div class="card border">
            <div class="card-body">
                <table class="table align-middle table-row-dashed fs-6 gy-5 datatable gs-7">
                    <thead>
                        <tr class="fw-bold fs-6 text-gray-800">
                            <th class="min-w-50px">No</th>
                            <th class="min-w-400px">Nama Data</th>
                            <th class="min-w-100px">Terakhir Diubah</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>
                                <a href="http://talentics.test/libraries" class="fw-bolder text-primary">Daftar Modul</a>
                            </td>
                            <td>18 April 2022 11:04</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>
                                <a href="{{ Route('company.test-management.grade.index') }}" class="fw-bolder text-primary">Daftar Peringkat</a>
                            </td>
                            <td>18 April 2022 11:03</td>
                        </tr>
                        <!-- <tr>
                                <td>3</td>
                                <td>
                                    <a href="http://talentics.test/libraries" class="fw-bolder text-primary">Daftar Kategori Modul Pertanyaan</a>
                                </td>
                                <td>18 April 2022 11:04</td>
                            </tr> -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection