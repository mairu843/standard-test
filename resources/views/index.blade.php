<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>お問い合わせ</title>
    <style>
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

        span {
            color: #f00;
        }
        dl {
            height: 120px;
            margin-top: 20px;
        }
        dt {
            display: flex;
            align-items: center;
        }
        p {
            color: #b2b2b2;
            margin-top: 20px;
            margin-left: 23%;
        }
        p:nth-of-type(7) {
            color: #f00;
        }
        input {
            width: 80%;
            line-height: 2;
            display: block;
            border: 1px solid #b2b2b2;
            border-radius: 5px;
            font-size: 20px;
        }
        label {
            margin-right: 10px;
            width: 20%;
            font-size: 20px;
            font-weight: bold;
        }
        textarea {
            width: 80%;
            line-height: 2;
            display: block;
            border: 1px solid #b2b2b2;
            border-radius: 5px;
            font-size: 20px;
            resize: none;
        }


        .input-harf {
            width: 40%;
            margin-right: 20px;
        }
        .form-page h1{
            margin-top: 50px;
            margin-bottom: 50px;
            text-align: center;
            font-size: 40px;
        }
        .form-list {
            width: 80%;
            margin: 0 auto;
        }
        .post-mark {
            display: flex;
            align-items: center;
            margin-right: 20px;
            font-weight: bold;
            color: #000;
        }
        .name-example{
            display: flex;
            color: #b2b2b2;
        }
        .name-example p:nth-of-type(1) {
            margin-left: 22%;
        }
        .name-example p:nth-of-type(2) {
            margin-left: 35%;
        }

        /* 以下ラジオボタン */
        input[type=radio] {
            display: none;
        }
        .label-sex {
            box-sizing: border-box;
            cursor: pointer;
            display: inline-block;
            padding: 5px 70px;
            position: relative;
            width: auto;
            font-weight: 400;
        }
        .label-sex::before {
            background: #fff;
            border: 1px solid #b2b2b2;
            border-radius: 50%;
            content: '';
            display: block;
            height: 40px;
            left: 5px;
            margin-top: -8px;
            position: absolute;
            top: 0;
            width: 40px;
        }
        .label-sex::after {
            background: #000;
            border-radius: 50%;
            content: '';
            display: block;
            height: 10px;
            left: 21px;
            margin-top: -4px;
            opacity: 0;
            position: absolute;
            top: 40%;
            width: 10px;
        }
        input[type=radio]:checked + .label-sex::after {
            opacity: 1;
        }
        /* ここまでラジオボタン */

        .postcode p {
            margin-left: 25%;
        }
        .opinion {
            display: flex;
        }
        /* .verification-btn a {
            text-decoration: none;
        } */
        .verification-btn button{
            display: flex;
            justify-content: center;
            padding: 10px 50px;
            color: #fff;
            background-color: #000;
            border-radius: 5px;
            border: none;
            font-size: 18px;
            font-weight: bold;
            margin: 50px auto;
            cursor: pointer;
        }
        .error {
            display: flex;
            white-space: nowrap;
        }
        .error-message {
            color: #f00;
            font-weight: bold;
        }
        .error-message_first_name {
            margin-left: 30%;
        }
        </style>
</head>
<body>
    <div class="form-page">
        <h1>お問い合わせ</h1>
        <div class="form-list">
            <form action="{{ route('contact.confirm') }}" method="POST">
                @csrf
                <dl>
                    <dt>
                        <label for="">お名前<span>※</span></label>
                        <input type="text" name="last_name" class="input-harf" value="{{ old('last_name') }}">
                        <input type="text" name="first_name" class="input-harf" value="{{ old('first_name') }}">
                    </dt>
                    <dd>
                        <div class="error">
                            @if ($errors->has('last_name'))
                            <p class="error-message">{{ $errors->first('last_name') }}</p>
                            @endif
                            @if ($errors->has('first_name'))
                            <p class="error-message error-message_first_name">{{ $errors->first('first_name') }}</p>
                            @endif
                        </div>
                    </dd>
                    <dd>
                        <div class="name-example">
                            <p>姓）山田</p>
                            <p>名）太郎</p>
                        </div>
                    </dd>
                </dl>
                <dl>
                    <dt>
                        <label for="">性別<span>※</span></label>
                        <div class="radio-btns">
                            <input type="radio" id="radio-btn-men" name="radio-btn" checked value="男性">
                            <label for="radio-btn-men" class="label-sex">男性</label>
                            <input type="radio" id="radio-btn-woman" name="radio-btn" value="女性">
                            <label for="radio-btn-woman" class="label-sex">女性</label>
                        </div>
                    </dt>
                </dl>
                <dl>
                    <dt>
                        <label for="">メールアドレス<span>※</span></label>
                        <input type="email" name="email" autocomplete="email" value="{{ old('email') }}">
                    </dt>
                    <dd>
                        @if ($errors->has('email'))
                        <p class="error-message">{{ $errors->first('email') }}</p>
                        @endif
                    </dd>
                    <dd>
                        <p>例）test@example.com</p>
                    </dd>
                </dl>
                <dl>
                    <dt>
                        <label for="">郵便番号<span>※</span></label>
                        <div class="post-mark">〒</div><input type="tel" name="postcode" pattern="[0-9]{3}-[0-9]{4}" style="ime-mode:disabled" autocomplete="postal-code" maxlength="8" minlength="8" onkeyup="AjaxZip3.zip2addr(this,'','address','address');" value="{{ old('postcode') }}">
                    </dt>
                    <dd>
                        @if ($errors->has('postcode'))
                        <p class="error-message">{{ $errors->first('postcode') }}</p>
                        @endif
                    </dd>
                    <dd>
                        <div class="postcode">
                            <p>例）123-4567</p>
                        </div>
                    </dd>
                </dl>
                <dl>
                    <dt>
                        <label for="">住所<span>※</span></label>
                        <input type="text" name="address" size="60" value="{{ old('address') }}">
                    </dt>
                    <dd>
                        @if ($errors->has('address'))
                        <p class="error-message">{{ $errors->first('address') }}</p>
                        @endif
                    </dd>
                    <dd>
                        <p>例）東京都渋谷区千駄ヶ谷1-2-3</p>
                    </dd>
                </dl>
                <dl>
                    <dt>
                        <label for="">建物名</label>
                        <input type="text" name="building-name" value="{{ old('building-name') }}">
                    </dt>
                    <dd>
                        <p>例）千駄ヶ谷マンション101</p>
                    </dd>
                </dl>
                <dl>
                    <div class="opinion">
                        <label for="">ご意見<span>※</span></label>
                        {{-- <input type="text" name="opinion" maxlength="120"> --}}
                        <textarea name="opinion" cols="10" rows="3" maxlength="120">{{ old('opinion') }}</textarea>
                    </div>
                    <dd>
                        @if ($errors->has('opinion'))
                        <p class="error-message">{{ $errors->first('opinion') }}</p>
                        @endif
                    </dd>
                </dl>
                <div class="verification-btn">
                    <button>確認</button>
                </div>
                </form>
        </div>
    </div>
    <script src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>
</body>
</html>