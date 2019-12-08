@extends('layouts.layouts')

@section('content')
    @component('components.navbar')
    @endcomponent
    
    <div id="home">
        <router-view></router-view>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>

    <section class="about" id="about">
        <h1>ABOUT ME</h2>
        <p>
            クイズ (quiz) の英語での意味は、「（何か）質問すること」と 「知識をテストすること」
           と、これらの名詞としての意味であり、日本語では後者の「知識を問う問題」の意味で使われ
           ている。テレビ番組で、出題者が既知の事実に対して質問をし、解答者がその質問に答えると
           いう遊び、あるいはその質問の意で使われることが多い。英語のquizがそのままカタカナ語として使われている。
        </p>
    </section>
    <section class="works">
        <h1>WORKS</h1>
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
        <h1>MY SKILLS</h1>
        <div class="skill-wrapper">
            <div class="skill-box">
                <i class="fa fa-lightbulb-o"></i>
                <div class="skill-title">IDEA</div>
                <p>
                    何かを考えることが好きです<br />
                    新しいことを思いついては試しています<br />
                    ディレクションの経験もあります<br />
                </p>
            </div>
            <div class="skill-box">
                <i class="fa fa-paint-brush"></i>
                <div class="skill-title">DESIGN</div>
                <p>
                    何かを考えることが好きです<br />
                    新しいことを思いついては試しています<br />
                    ディレクションの経験もあります<br />
                </p>
            </div>
            <div class="skill-box">
                <i class="fa fa-code"></i>
                <div class="skill-title">CODING</div>
                <p>
                    何かを考えることが好きです<br />
                    新しいことを思いついては試しています<br />
                    ディレクションの経験もあります<br />
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
    <!-- @component('components.navbar')
    @endcomponent

    <div id="home">
        <router-view></router-view>
    </div>

    <script src="{{ asset('js/app.js') }}"></script> -->

@endsection
