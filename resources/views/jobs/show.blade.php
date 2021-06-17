@extends('layouts.main')

@section('banner', 'Job: '.$job->title)

@section('content')
<div class="col-lg-8 post-list">
    <div class="single-post d-flex flex-row">
        <div class="thumb">
            @if($job->company && $job->company->logo)
                <img src="{{ $job->company->logo->getUrl() }}" alt="{{ $job->company->name }}">
            @endif
        </div>
        <div class="details">
            <div class="title d-flex flex-row justify-content-between">
                <div class="titles">
                    <a href="#"><h4>{{ $job->title }}</h4></a>
                    @if($job->company)
                        <h6>{{ $job->company->name }}</h6>		
                    @endif			
                </div>
            </div>
            <p>
                {{ $job->short_description }}
            </p>
            <h5>Sifat Pekerjaan: {{ $job->job_nature }}</h5>
            <p class="address"><span class="lnr lnr-map"></span> {{ $job->address }}</p>
            <p class="address"><span class="lnr lnr-database"></span> {{ $job->salary }}</p>
        </div>
    </div>	
    <div class="single-post job-details">
        <h4 class="single-title">Deskripsi Pekerjaan</h4>
        <p>
            {!!$job->full_description !!}
        </p>
    </div>
    <div class="single-post job-experience">
        <h4 class="single-title">Informasi Perusahaan</h4>
        <p>
            {!! $job->requirements !!}
        </p>
    </div>	
    <div id="disqus_thread"></div>
<script>
    /**
    *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
    *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables    */
    /*
    var disqus_config = function () {
    this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
    this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
    };
    */
    (function() { // DON'T EDIT BELOW THIS LINE
    var d = document, s = d.createElement('script');
    s.src = 'https://derranurman.disqus.com/embed.js';
    s.setAttribute('data-timestamp', +new Date());
    (d.head || d.body).appendChild(s);
    })();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>												
</div>

@endsection