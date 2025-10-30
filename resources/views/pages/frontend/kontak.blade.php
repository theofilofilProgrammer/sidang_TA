@extends('layouts.kontak')
@section('title-kontak')
Kontak | Program Studi D3 Teknologi Informasi PSDKU Politeknik Negeri Pontianak Di Kabupaten Sukamara
@endsection

@section('isi-kontak')
<!-- Bagian content (konten kiri : sidebar kiri dan konten kanan : main kontent)-->
<section class="main-content-section container py-5 pt-5 mx-auto col-lg-12">
    <div class="row justify-content-center">
        <div class="col-lg-10 col-md-12">
            <!-- Konten Hubungi Kami -->
            <div class="kontak-form-container col-lg-12 px-5">
                <h1 class="kontak-title text-center">Hubungi Kami</h1>

                <div class="contact-info-table">
                    <table class="table table-borderless">
                        <tbody>
                            <tr>
                                <td class="icon-cell py-3"><i class="fas fa-map-marker-alt contact-icon icon-orange mr-3"></i></td>
                                <td class="label-cell py-3">Alamat PSDKU Polnep Sukamara</td>
                                <td class="separator-cell py-3">:</td>
                                <td class="value-cell py-3">Jl. Tjilik Riwut Km.8 Desa Natai Sedawak, Kec. Sukamara, Kabupaten Sukamara, Kalimantan Tengah 74171.</td>
                            </tr>
                            <tr>
                                <td class="icon-cell py-3"><i class="fas fa-globe contact-icon icon-blue mr-3"></i></td>
                                <td class="label-cell py-3">Website Prodi</td>
                                <td class="separator-cell py-3">:</td>
                                <td class="value-cell py-3"><a href="https://sites.google.com/polnep.ac.id/ti-sukma" target="_blank">sites.google.com/polnep.ac.id/ti-sukma</a></td>
                            </tr>
                            <tr>
                                <td class="icon-cell py-3"><i class="fas fa-phone contact-icon icon-green mr-3"></i></td>
                                <td class="label-cell py-3">Kontak PSDKU Polnep Sukamara</td>
                                <td class="separator-cell py-3">:</td>
                                <td class="value-cell py-3 font-weight-bold">085175071570 (Riza)</td>
                            </tr>
                            <tr>
                                <td class="icon-cell py-3"><i class="fas fa-envelope contact-icon icon-navy mr-3"></i></td>
                                <td class="label-cell py-3">Email PSDKU Polnep Sukamara</td>
                                <td class="separator-cell py-3">:</td>
                                <td class="value-cell py-3">ti.psdkupolnepsukamara@gmail.com</td>
                            </tr>
                            <tr>
                                <td class="icon-cell py-3"><i class="fab fa-facebook contact-icon icon-blue mr-3"></i></td>
                                <td class="label-cell py-3">Facebook PSDKU Polnep Sukamara</td>
                                <td class="separator-cell py-3">:</td>
                                <td class="value-cell py-3">Psdku Polnep Sukamara</td>
                            </tr>
                            <tr>
                                <td class="icon-cell py-3"><i class="fab fa-youtube contact-icon icon-red mr-3"></i></td>
                                <td class="label-cell py-3">Youtube PSDKU Polnep Sukamara</td>
                                <td class="separator-cell py-3">:</td>
                                <td class="value-cell py-3">@psdkupolnepsukamara (PSDKU POLNEP Sukamara)</td>
                            </tr>
                            <tr>
                                <td class="icon-cell py-3"><i class="fab fa-instagram contact-icon icon-purple mr-3"></i></td>
                                <td class="label-cell py-3">Instagram PSDKU Polnep Sukamara</td>
                                <td class="separator-cell py-3">:</td>
                                <td class="value-cell py-3">ti.polnep.sukamara</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <p class="contact-text">Jangan ragu untuk menghubungi kami jika Anda memiliki pertanyaan atau membutuhkan informasi lebih lanjut.</p>

                <div class="google-maps-container">
                    <iframe class="col-lg-12" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2985.529836896704!2d111.18877702549044!3d-2.756663126833248!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e08d12fad4aafdb%3A0xb68feb25dc3aadbc!2sPSDKU%20Polnep%20Sukamara!5e0!3m2!1sid!2sid!4v1751892287341!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
