{{--
  Title: Document
  Description: Belangrijke documenten
  Category: formatting
  Icon: media-text
  Keywords: document pdf
  Mode: edit
  Align: left
  ClassName: document
  SupportsAlign: left right center
  SupportsMode: true
  SupportsMultiple: true
--}}

@php
    $documents = get_field('documenten')
@endphp

@if($documents)
    <div class="files-post-container">
        @foreach($documents as $document)
            @php $file = $document['document'] @endphp
            <div class="file-block primary">
                <div class="row">
                    <div class="col-12 col-md-8 col-lg-8 col-xl-8 col-xxl-9">
                        <div class="float-left mt-1">
                            <a href="{!! $file['url'] !!}" target="_blank" title="Download: {!! $document['titel'] !!}">
                                <i class="fal fa-file-pdf text-primary font-size-p30"></i>
                            </a>
                        </div>
                        <p class="font-weight-semi-bold font-size-p18 font-size-md-p20 mb-md-0 pl-5">
                            <a href="{!! $file['url'] !!}" target="_blank" title="Download: {!! $document['titel'] !!}" class="text-decoration-none">
                                <span class="color-black">{!! $document['titel'] !!}</span>
                            </a>
                        </p>
                    </div>
                    <div class="col-12 col-md-4 col-lg-4 col-xl-4 col-xxl-3 text-md-right">
                        <a href="{!! $file['url'] !!}" target="_blank" title="Download: {!! $document['titel'] !!}" class="btn btn-m btn-primary btn-rounded pl-4 pr-4">Download<i class="fal fa-download ml-2"></i></a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endif