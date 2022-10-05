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
            background-color: #001E88;
            height: 100%;
            display: flex;
            flex-direction: column;
            z-index: -1;
        }

        .appbar {
            height: 30px;
            background-color: #001E88;
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

            color: #ADADAD;

            backdrop-filter: blur(35.5px);
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

            color: #C7C7C7;
            margin-bottom: 12px;
        }

        .topinstudents {
            margin-left: auto;
            margin-right: auto;
            width: fit-content;
            font-style: normal;
            font-weight: 600;
            font-size: 36px;
            line-height: 80%;
            /* or 29px */

            letter-spacing: -0.04em;

            color: #FFFFFF;
            margin-bottom: 2px;
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

            letter-spacing: -0.04em;

            color: #C1C1C1;
        }

        header {
            background-color: #001E88;
            height: fit-content;
            margin-bottom: 25px;
            position: relative;
            z-index: -1;

        }

        .front {
            position: relative;
            z-index: 100;
        }

        .nisbg {
            /* background: url('https://psv4.userapi.com/c240331/u197674088/docs/d5/ce37d7b73bab/nis.png?extra=7Vo5gE9gMngxrqPLdAY1EpeZLlqqq3SrYagtQxNjxmCtu6PA7YVTGnvhBytp2N2BimtYSFBwmMwZ0o205_-Q8RjPvptqkkWjxQcB3auP1Qfllwy3TdJ-ZJoHkS7aQkWgzW4NO4Xc9XoXe88fuIzT2XQ'); */

            /* on the backlground */
            position: absolute;
            top: 0;
            left: 0;
            z-index: -100;
            width:100vw;
            overflow: hidden;
            height: 120%;
        }
        .nisbg > img{
            position: absolute;
            top: 0;
            right: -70px;
        }

        .maincontent {
            background-color: #FFFFFF;
            height: 100%;
            width: auto;
            border-top-left-radius: 3%;
            border-top-right-radius: 3%;
        }

        .navigation-buttons {
            width: 100%;
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            grid-row-gap: 45px;
            grid-column-gap: 30px;

            align-items: center;
            justify-items: center;
            margin-top: -20px;
        }

        .button-icon>i {
            font-size: 50px;
        }

        .mainmenu-card {
            background-color: #001B5F;
            height: 150px;
            width: 150px;
            border-radius: 10px;
            margin: 10px;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        .button-label {
            margin-top: 15px;
            font-style: normal;
            font-weight: 500;
            font-size: 18px;
            line-height: 80%;
            /* or 14px */

            text-align: center;
            letter-spacing: -0.04em;

            color: #FFFFFF;

            text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
            padding-left: 10px;
            padding-right: 10px;
        }
    </style>
@endsection

@section('content')
<div class="content mb-auto">
  <header>
      <div class="front">
          <div class="profilephotodiv"><img src="{{$student[0]['photo']}}"
                  class="profilephoto"></div>
          <div class="studentid">#{{$student[0]['id']}}</div>
          <div class="studentname">{{$student[0]['name']}}</div>
          <div class="shanyraqclass">{{$student[0]['shanyraqName'].' Shanyraqy | '.$student[0]['grade']}}</div>
          <div class="topinstudents">#{{$student[0]['rank']}}</div>
          <div class="understtoplable">IN NIS PTR students rating</div>
      </div>
      <div class="nisbg">
          <img
              src="https://psv4.userapi.com/c240331/u197674088/docs/d5/ce37d7b73bab/nis.png?extra=7Vo5gE9gMngxrqPLdAY1EpeZLlqqq3SrYagtQxNjxmCtu6PA7YVTGnvhBytp2N2BimtYSFBwmMwZ0o205_-Q8RjPvptqkkWjxQcB3auP1Qfllwy3TdJ-ZJoHkS7aQkWgzW4NO4Xc9XoXe88fuIzT2XQ">
      </div>
  </header>
  <div class="maincontent">
      {{-- grid of 4 card with size 150px background color 001B5F with icon 50x50px size in center and Shanyraq Rating label under icon --}}
      <div class="navigation-buttons">
          <a href="/shanyraqsrating">
              <div class="mainmenu-card">
                  <div class="button-icon"><i class="fas fa-fist-raised"></i></div>
                  <span class="button-label">Shanyraqs Rating</span>
              </div>
          </a>
          <a href="/studentsrating">
              <div class="mainmenu-card">
                  <div class="button-icon"><i class="fas fa-fist-raised"></i></div>
                  <span class="button-label">Students Rating</span>
              </div>
          </a>
          <a href="/myachievements">
              <div class="mainmenu-card">
                  <div class="button-icon"><i class="fas fa-fist-raised"></i></div>
                  <span class="button-label">My Achievements</span>
              </div>
          </a>
          <form action="exit" method="post">
            @csrf
            <input class="btn btn-primary" type="submit" name="exit" value="Exit">
          </form>
      </div>
  </div>
</div>

@endsection
