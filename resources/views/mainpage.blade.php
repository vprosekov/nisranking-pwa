@extends('template/template')

@section('styles')
    <style>

        a{
            text-decoration: none;
            color: white;
        }
        a:hover{
            text-decoration: none;
            color: white;
        }

        body {
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
            height: 25vh;
            margin-bottom: 15px;
        }

        .maincontent {
            background-color: #FFFFFF;
            height: 100%;
            width: 100vw;
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
    <header>
        <div class="profilephotodiv"><img src="https://www.meme-arsenal.com/memes/738ff7e55fffc9bd05f6307c341a550e.jpg"
                class="profilephoto"></div>
        <div class="studentid">#0001</div>
        <div class="studentname">Prosekov Vladik</div>
        <div class="shanyraqclass">Keruen Shanyragy | 12C</div>
        <div class="topinstudents">#36</div>
        <div class="understtoplable">IN NIS PTR students rating</div>
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
        </div>
    </div>
@endsection
