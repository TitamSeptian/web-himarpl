@extends('landing.master', [$title = "| Badan Eksutif", $active = "be"])
@section('hero-text')
    <span class="text-color-1">Badan</span>
    <span class="text-color-2">Eksekutif</span>
@endsection
@section('content')

    <section id="struktur">
        @foreach ($bio as $b)
            <h2 class="font-weight-bold my-4 text-center display-4">{{ $b['departemen'] }}</h2>
            <div class="big-line-1"></div>
            <div class="row d-flex flex-row justify-content-md-center" style="width: 100%;">
                @foreach ($b['member'] as $m)
                    <div
                        class="{{ $m['membership'] == 'Ketua' ? 'col-md-4' : 'col-md-4' }} mt-4 align-items-center text-center">
                        <div class="gallery-wrap">
                            <div class="description" style="display:none;">
                                <div class="title">
                                    <h3 style="line-height:50px;">{{ $m['name'] }}</h3>
                                </div>
                                <div class="text">
                                    <p>{!! $m['bio'] !!}</p>
                                    @foreach ($m['sosmed'] as $s)
                                        <a href="{{ $s['url'] }}" class="btn btn-danger">{{ $s['label'] }}</a>
                                    @endforeach
                                </div>
                            </div>
                            <div class="caption">
                                <button href="#" class="btn btn-color-1 btn-sm action" data-gallery="sample16-9">
                                    Tentang
                                </button>
                            </div>
                            <img src="/foto/{{ $m['img'] }}" alt="foto-be" class="img-fluid">
                        </div>
                        <div class="mt-2">
                            <h4 class="font-weight-bold">{{ $m['name'] }}</h4>
                            <h6>{{ $m['membership'] . ' ' . $m['departemen'] }}</h6>
                        </div>
                    </div>
                @endforeach
            </div>
            {{-- @endif --}}
        @endforeach
    </section>
@endsection
