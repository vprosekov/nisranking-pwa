@extends('template/template')

@section('styles')
    <style>
        html{
            /* height: 100vh; */
        }
        a {
            text-decoration: none;
            color: white;
        }

        a:hover {
            text-decoration: none;
            color: white;
        }

        body {
            overflow: hidden;
            color: #fff;
            display: flex;
            flex-direction: column;
        }

        content {
            /* background color yellowe */
            height: 100%;
            display: flex;
            flex-direction: column;
        }

        .appbar {
            height: 30px;
            color: #ffffff;
        }

        .white-head {
            color: #ffffff;
        }

        .profilephotodiv {
            margin-left: auto;
            margin-right: auto;
            width: fit-content;
        }

        .profilephoto {
            width: 100px;
            height: 100px;
            border: 3px solid #FFFFFF;
            border-radius: 50%;
        }

        .studentid {
            margin-left: 70%;
            margin-right: 30%;
            width: fit-content;
            font-style: normal;
            font-weight: 400;
            font-size: 14px;
            line-height: 80%;
            /* or 11px */

            letter-spacing: -0.04em;

            color: #FFFFFF;
			margin-bottom:2px;
        }

        .studentname {
            margin-left: auto;
            margin-right: auto;
            width: fit-content;
            font-style: normal;
            font-weight: 400;
            font-size: 24px;
            line-height: 80%;
            text-align: center;
            letter-spacing: -0.04em;

            color: #FFFFFF;
            margin-bottom: 8px;
        }

        .shanyraqclass {
            margin-left: auto;
            margin-right: auto;
            width: fit-content;
            font-style: normal;
            font-weight: 400;
            font-size: 14px;
            line-height: 80%;
            /* or 11px */

            letter-spacing: -0.04em;

            color: rgba(255, 255, 255, 0.54);
            margin-bottom: 12px;
        }

        .topinstudents {
			margin-top:20px;
            margin-left: auto;
            margin-right: auto;
            width: fit-content;
            font-style: normal;
			font-weight: 700;
			font-size: 54px;
			line-height: 80%;
			/* or 29px */

			text-align: center;
			letter-spacing: -0.04em;

			color: #372370;
            margin-bottom: 4px;
			text-align:center;
            font-family: 'Montserrat-Bold';
        }

        .understtoplable {
            margin-left: auto;
            margin-right: auto;
            width: fit-content;
            font-style: normal;
			font-weight: 400;
			font-size: 8.5px;
			line-height: 80%;
			/* or 7px */

			text-align: center;
			letter-spacing: -0.04em;

			color: #372370;
			text-align:center;

        }

        header {
            height: fit-content;
            margin-bottom: 25px;

        }

        .maincontent {
            height: 100%;
            width: auto;
			display:flex;
			flex-direction:column;
			background: #FFFFFF;
			box-shadow: 0px 1px 25px #331C74;
			border-radius: 50px 50px 0px 0px;
        }
		.achievements-buttons{
			margin-top:15px;
			display:flex;
			flex-direction:row;
		}
		.achievement-control-btn{
			width:80%;
			background: #FFFFFF;
			box-shadow: 0px 0px 4px rgba(0, 0, 0, 0.25);
			border-radius: 15px;
			font-style: normal;
			font-weight: 400;
			font-size: 16px;
			line-height: 80%;
			/* or 10px */

			letter-spacing: -0.04em;

			color: #000000;
			padding: 10px;
			margin-left:auto;
			margin-right: auto;
			text-align:center
		}
    </style>
@endsection

@section('content')
  <header>
      <div class="front">
          <div class="profilephotodiv"><img src="{{$student[0]['photo']}}"
                  class="profilephoto"></div>
          <div class="studentid">#{{$student[0]['id']}}</div>
          <div class="studentname">{{$student[0]['name']}}</div>
          <div class="shanyraqclass">{{$student[0]['shanyraqName'].' Shanyraqy | '.$student[0]['grade']}}</div>
      </div>
  </header>
  <div class="maincontent">
          <div class="topinstudents">#{{$student[0]['rank']}}</div>
          <div class="understtoplable">IN {{env('SCHOOL_NAME')}} students rating</div>
      <div class="achievements-buttons">
		  <div class="achievement-control-btn" id="suggest-achievement">
			  Предложить достижение
		  </div>
	  </div>
	  
  </div>

@endsection
