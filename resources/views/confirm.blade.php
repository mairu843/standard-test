<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>内容確認</title>
</head>
<style>
    /* 以下リセットCSS */
    html, body, div, span, object, iframe,
    h1, h2, h3, h4, h5, h6, p, blockquote, pre,
    abbr, address, cite, code,
    del, dfn, em, img, ins, kbd, q, samp,
    small, strong, sub, sup, var,
    b, i,
    dl, dt, dd, ol, ul, li,
    fieldset, form, label, legend,
    table, caption, tbody, tfoot, thead, tr, th, td,
    article, aside, canvas, details, figcaption, figure,
    footer, header, hgroup, menu, nav, section, summary,
    time, mark, audio, video {
        margin:0;
        padding:0;
        border:0;
        outline:0;
        font-size:100%;
        vertical-align:baseline;
        background:transparent;
    }
    body {
        line-height:1;
    }
    article,aside,details,figcaption,figure,
    footer,header,hgroup,menu,nav,section {
        display:block;
    }
    nav ul {
        list-style:none;
    }
    blockquote, q {
        quotes:none;
    }
    blockquote:before, blockquote:after,
    q:before, q:after {
        content:'';
        content:none;
    }
    a {
        margin:0;
        padding:0;
        font-size:100%;
        vertical-align:baseline;
        background:transparent;
    }
    /* change colours to suit your needs */
    ins {
        background-color:#ff9;
        color:#000;
        text-decoration:none;
    }
    /* change colours to suit your needs */
    mark {
        background-color:#ff9;
        color:#000;
        font-style:italic;
        font-weight:bold;
    }
    del {
        text-decoration: line-through;
    }
    abbr[title], dfn[title] {
        border-bottom:1px dotted;
        cursor:help;
    }
    table {
        border-collapse:collapse;
        border-spacing:0;
    }
    /* change border colour to suit your needs */
    hr {
        display:block;
        height:1px;
        border:0;
        border-top:1px solid #cccccc;
        margin:1em 0;
        padding:0;
    }
    input, select {
        vertical-align:middle;
    }
    /* ここまでリセットCSS */

    h1 {
        margin-top: 50px;
        margin-bottom: 50px;
        text-align: center;
        font-size: 40px;
    }

    .confirm-list {
        width: 80%;
        margin: 0 auto;
    }
    .label-ttl {
        margin-top: 50px;
        font-size: 20px;
        font-weight: bold;
        display: flex;
        align-items: center;
    }
    .label-ttl label {
        width: 30%;
    }
    .input-text {
        width: 70%;
        font-weight: normal;
    }
    .send-btn button {
        display: flex;
        justify-content: center;
        padding: 10px 50px;
        color: #fff;
        background-color: #000;
        border-radius: 5px;
        border: none;
        font-size: 18px;
        font-weight: bold;
        margin: 50px auto 10px;
        cursor: pointer;
    }
    .back-btn a {
        display: flex;
        justify-content: center;
        color: #000;
    }
</style>
<body>
    <div class="confirm-page">
        <h1>内容確認</h1>
        <div class="confirm-list">
            <form action="/contact/thanks" method="POST">
                @csrf
                <div class="label-ttl">
                    <label for="">お名前</label>
                    <div class="input-text">
                        {{ $inputs['last_name'] }}
                        {{ $inputs['first_name'] }}
                        {{ $this->full_name }}
                        {{-- <input type="hidden" value="{{ $inputs['last_name'] }}">
                        <input type="hidden" value="{{ $inputs['first_name'] }}"> --}}
                    </div>
                </div>
                <div class="label-ttl">
                    <label for="">性別</label>
                    <div class="input-text">
                        {{ $inputs['radio-btn'] }}
                        <input type="hidden" value="{{ $inputs['radio-btn'] }}">
                    </div>
                </div>
                <div class="label-ttl">
                    <label for="">メールアドレス</label>
                    <div class="input-text">
                        {{ $inputs['email'] }}
                        <input type="hidden" value="{{ $inputs['email'] }}">
                    </div>
                </div>
                <div class="label-ttl">
                    <label for="">郵便番号</label>
                    <div class="input-text">
                        {{ $inputs['postcode'] }}
                        <input type="hidden" value="{{ $inputs['postcode'] }}">
                    </div>
                </div>
                <div class="label-ttl">
                    <label for="">住所</label>
                    <div class="input-text">
                        {{ $inputs['address'] }}
                        <input type="hidden" value="{{ $inputs['address'] }}">
                    </div>
                </div>
                <div class="label-ttl">
                    <label for="">建物名</label>
                    <div class="input-text">
                        {{ $inputs['building-name'] }}
                        <input type="hidden" value="{{ $inputs['building-name'] }}">
                    </div>
                </div>
                <div class="label-ttl">
                    <label for="">ご意見</label>
                    <div class="input-text">
                        {!! nl2br(e($inputs['opinion'])) !!}
                        <input type="hidden" value="{{ $inputs['opinion'] }}">
                    </div>
                </div>
                <div class="send-btn">
                    <button value="submit">送信</button>
                </div>
                <div class="back-btn">
                    <a href="javascript:history.back()">修正する</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>