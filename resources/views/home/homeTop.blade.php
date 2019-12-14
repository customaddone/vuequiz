@extends('layouts.layouts')

@section('content')
    @component('components.navbar')
    @endcomponent

    <div id="home">
        <router-view></router-view>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>

    <section class="about" id="about">
        <h1>Explanation</h2>
        <p>
            ①SPA対応アプリの作成　②PHPUnit、Laravel duskを用いた単体テスト、E2Eテスト　③CircleCIを用いた自動テスト　④AWS EC2へのデプロイ
           を練習するために簡単な四択クイズアプリを作りました。<br />
           「Play Quiz」でクイズを開始します。Explanation（ヒント）を頼りに正解の択を選んでください。<br />
           任意のユーザー名、メールアドレス、パスワード（架空のもので可能）でログイン後、「ADD ITEMS」でItem（問題となる択）、ヒントを作成できます。
        </p>
    </section>
    <section class="works">
        <h1>MY WORKS</h1>
        <div class="works-wrapper">
            <div class="work-box">
                <p>
                    ひとつめの作品事例が入ります<br />
                    簡単な説明が入ります<br />
                    使用ツール： XXX XXX XXX<br />
                    <a href="#" class="button">READ MORE</a>
                </p>
            </div>
            <div class="work-box">
                <p>
                    ふたつめの作品事例が入ります<br />
                    簡単な説明が入ります<br />
                    使用ツール： XXX XXX XXX<br />
                    <a href="#" class="button">READ MORE</a>
                </p>
                <img class="work-image">
            </div>
            <div class="work-box">
                <p>
                    みっつめの作品事例が入ります<br />
                    簡単な説明が入ります<br />
                    使用ツール： XXX XXX XXX<br />
                    <a href="#" class="button">READ MORE</a>
                </p>
            </div>
            <div class="work-box">
                <p>
                    よっつめの作品事例が入ります<br />
                    簡単な説明が入ります<br />
                    使用ツール： XXX XXX XXX<br />
                    <a href="#" class="button">READ MORE</a>
                </p>
            </div>
        </div>
    </section>
    <section class="skills">
        <h1>SKILLS</h1>
        <div class="skill-wrapper">
            <div class="skill-box">
                <i class="fa fa-cogs"></i>
                <div class="skill-title">技術スタック</div>
                <p>
                    言語: PHP 7.3.9<br />
                    フロントエンド:  Vue.js2.6.10<br />
                    バックエンド: Laravel6.5.2<br />
                    DB: MySQL5.7<br />
                    テスト: PHPUnit,Laravel dusk<br />
                    インフラ:Laradock/CircleCI/AWS（EC2）<br />
                </p>
            </div>
            <div class="skill-box">
                <i class="fa fa-frown-o"></i>
                <div class="skill-title">苦労した点</div>
                <p>
                    ・「AWSへのデプロイ、やることが多すぎる」<br />
                    ・「テスト、インフラの勉強のためのアプリ作成だからアプリ本体は必要最小限に...と言いつつUIが少し気になるな。
                    Sassにも慣れたいし少し手入れるか...　→　...デザイン難しい...」<br />
                </p>
            </div>
            <div class="skill-box">
                <i class="fa fa-line-chart"></i>
                <div class="skill-title">改善していく事項</div>
                <p>
                    ・制限時間を設ける、状況により一問当たりの得点を変化させるなどの機能を実装していく<br />
                    ・機能を実装する際、テスト開発駆動の手法を意識する（そのためのテスト自動化）<br />
                    ・テストコードをしっかり書く<br />
                    ・CircleCIを用いた自動デプロイ機能を実装する<br />
                </p>
            </div>
        </div>
    </section>
    <section class="contact" id="contact">
        <h1>CONTACT</h1>
        <form class="contact-form">
            <input type="text" name="name" placeholder="NAME">
            <textarea name="message" placeholder="MESSAGE"></textarea>
            <input type="submit" value="SEND">
        </form>
    </section>
    <footer class="footer">
        a sample site
    </footer>

@endsection
