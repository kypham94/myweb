 @extends('layout.master')
 @section('title', 'Trực tiếp '.$data->name.'-'.$data->time.' | Duduatv.live')
 @section('kw',$data->name.' '.$data->time)
 @section('des', 'Xem đá bóng miễn phí chất lượng HD')
 @section('content')
 	<link href="https://unpkg.com/video.js/dist/video-js.css" rel="stylesheet">
    <script src="https://unpkg.com/video.js/dist/video.js"></script>
    <script src="https://unpkg.com/videojs-contrib-hls/dist/videojs-contrib-hls.js"></script>
    <style type="text/css">
    	.widget-box {
    		background-color: #1b1e24!important;

    	}

    	@media only screen and (max-width: 1080px) {
   			.chat {
        		display: none;
    		}
    	}

    	@media only screen and (max-width: 780px) {
   			.chat {
        		display: none;
    		}

    		.logo {
    			display: none!important;
    		}
		}
		@media only screen and (min-width: 1080px) {
   			video {
   				height: 600px;
   			}
		}
		button {
			margin: 3px;
		}
		button a {
			color: white;
			text-decoration: none;
		}
		#u_0_2 {
			display: none;
		}
    </style>

    <div class="demo-btn-space mb-4" style="margin: 80px">

            <div class="row" style="margin-bottom: 20px;">
            	<div class="col-md-1 col-lg-1"></div>
                <h3><i class="fas fa-align-left mr-2"></i> Trực tiếp {{$data->name}} | {{$data->time}} </h3>
            </div>
            <div class="clearfix"></div>
            <div class="row">
            	<div class="col-md-1 col-lg-1"></div>
            	@if($data->link_1 != '1')
            	<button type="button" class="btn btn-primary @if($current == 1) active @endif">
              		 <a href="{{ asset('/tructiep/'.$data->slug.'/1') }}">Link 1</a>
              	</button>
              	@endif
              	@if($data->link_2 != '2')
              	<button type="button" class="btn btn-primary @if($current == 2) active @endif">
              		 <a href="{{ asset('/tructiep/'.$data->slug.'/2') }}">Link 2</a>
              	</button>
              	@endif
              	@if($data->link_3 != '3')
              	<button type="button" class="btn btn-primary @if($current == 3) active @endif">
              		 <a href="{{ asset('/tructiep/'.$data->slug.'/3') }}">Link 3</a>
              	</button>
              	@endif
              	@if($data->link_4 != '4')
              	<button type="button" class="btn btn-primary @if($current == 4) active @endif">
              		 <a href="{{ asset('/tructiep/'.$data->slug.'/4') }}">Link 4</a>
              	</button>
              	@endif
        	</div>
            <div class="row">
            	<div class="col-md-1 col-lg-1"></div>
			  	<video  id="my_video_1" class="col-sm-12 col-md-8 col-lg-8 video-js vjs-default-skin" controls preload="auto" height="600" data-setup='{}'>
			    	<source src="{{$link}}" type="application/x-mpegURL">
				</video>
				
				<div class="col-md-3 col-lg-3 chat">
					<div id="chatwing-embedded-2bb40920-de4c-11e8-9d7e-e1742e584162"></div>
				</div>
			</div>			   
		</div>
	<script type="text/javascript">
        $( document ).ready(function() {
        	$(".video-js").append('<a class="logo" href="{{ asset('/') }}" style="top: 7%;left: 10%;display: block;position: absolute;z-index:999999999999;width: 150px;height: 67px;background-image: url(&quot;http://localhost:8000/assets/img/logo.png&quot;);"></a>');
        	$(".vjs-modal-dialog-content").text('Hiện tại trận đấu chưa diễn ra hoặc đã kết thúc, bạn vui lòng quay sau nhé :(')
        });
        (function(d) {
		    var cwjs, id='chatwing-js';  if(d.getElementById(id)) {return;}
		    cwjs = d.createElement('script'); cwjs.type = 'text/javascript'; cwjs.async = true; cwjs.id = id
		    cwjs.src = "//chatwing.com/code/2bb40920-de4c-11e8-9d7e-e1742e584162/embedded";
		    d.getElementsByTagName('head')[0].appendChild(cwjs);
	  	})(document);
	</script>
@endsection