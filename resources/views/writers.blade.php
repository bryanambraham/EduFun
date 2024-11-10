@extends('layout.navbar')

@section('content')
    <h1 style="margin-left: 5%;">Our Writers</h1>
    <!-- Konten lain dari halaman Writers -->
        <div class="writer_container" style="display: flex; margin: 2.5%; gap: 12%; justify-content: center; margin: 5%">
        @foreach($writers as $writer)
            <div class="writer_content" style="width: 150px; height: 150px; text-align: center;">
                <a href=""><img class="img-fluid img-thumbnail" style="border-radius: 100%;" src="{{$writer->image}}" alt="writer_profile"></a>
                <h6>{{$writer->name}}</h6>
            </div>
        @endforeach
        </div>

@endsection
