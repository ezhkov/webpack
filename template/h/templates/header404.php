<!DOCTYPE html>
<!--[if IE 9]><!--> <html class="no-js ie9"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?=$title?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">
    <script>
        document.onload = function () {
            document.body.className = document.body.className.replace('loading', '');
        };
    </script>
    <style>
        @import url("//hello.myfonts.net/count/355078");
        /* html5doctor.com Reset v1.6.1 - http://cssreset.com */
        html,body,div,span,object,iframe,h1,h2,h3,h4,h5,h6,p,blockquote,pre,abbr,address,cite,code,del,dfn,em,img,ins,kbd,q,samp,small,strong,sub,sup,var,b,i,dl,dt,dd,ol,ul,li,fieldset,form,label,legend,table,caption,tbody,tfoot,thead,tr,th,td,article,aside,canvas,details,figcaption,figure,footer,header,hgroup,menu,nav,section,summary,time,mark,audio,video{margin:0;padding:0;border:0;outline:0;font-size:100%;vertical-align:baseline;background:transparent}body{line-height:1}article,aside,details,figcaption,figure,footer,header,hgroup,menu,nav,section,main{display:block}nav ul{list-style:none}blockquote,q{quotes:none}blockquote:before,blockquote:after,q:before,q:after{content:none}a{margin:0;padding:0;font-size:100%;vertical-align:baseline;background:transparent}ins{background-color:#ff9;color:#000;text-decoration:none}mark{background-color:#ff9;color:#000;font-style:italic;font-weight:bold}del{text-decoration:line-through}abbr[title],dfn[title]{border-bottom:1px dotted;cursor:help}table{border-collapse:collapse;border-spacing:0}hr{display:block;height:1px;border:0;border-top:1px solid #ccc;margin:1em 0;padding:0}input,select{vertical-align:middle}
        ul, li { list-style: none; }
        hr { display: block; height: 1px; border: 0; border-top: 1px solid #ccc; margin: 1em 0; padding: 0; }

        i { font-style: normal; }
        a { text-decoration: none; color: inherit}

        html {
            min-height: 100%;
            height: 100%;
            font-size: 62.5%;
            background-color: #F7F7F7;
        }

        @font-face {
            font-family: 'PFCentroSlabPro-Thin';
            src: url('/static/fonts/355078_0_0.woff2') format('woff2'),
            url('/static/fonts/355078_0_0.woff') format('woff');
        }

        @font-face {
            font-family: 'FFMetaWebProNormal';
            src: url('/static/fonts/355078_1_0.woff2') format('woff2'),
            url('/static/fonts/355078_1_0.woff') format('woff'),url('/static/fonts/355078_1_0.ttf') format('truetype');
        }

        @font-face {
            font-family: 'FFMetaWebProMedium';
            src: url('/static/fonts/355078_2_0.woff2') format('woff2'),
            url('/static/fonts/355078_2_0.woff') format('woff'),url('/static/fonts/355078_2_0.ttf') format('truetype');
        }


        body {
            height: 100vh;
            font-size: 1.6rem;
            line-height: 2.4rem;
            color: #262626;
            font-family: 'FFMetaWebProNormal', sans-serif;
            -webkit-font-smoothing: antialiased;
            min-width: 121.6rem;
            font-variant-numeric: lining-nums;
            -moz-font-feature-settings: 'lnum';
            -webkit-font-feature-settings: 'lnum';
            font-feature-settings: 'lnum' on;

        }

        .wrapper {
            width: 121.6rem;
            margin-left: auto;
            margin-right: auto;
            box-sizing: border-box;
        }

        .wrapper--footer {
            padding-left: 7.2rem;
            padding-right: 8rem;
        }
        .site-header {
            background: #F7F7F7;
            height: 8rem;
            text-transform: uppercase;
            position: relative;
            z-index: 100;
            font-size: 0;
            text-align: center;
            line-height: 8rem;
            flex-grow: 0;
        }

        .site-header + .wrapper {
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }

        .site-header__logo {
            display: inline-block;
            line-height: 8rem;
        }
        .site-header__logo img {
            display: inline-block;
            vertical-align: middle;
        }
        #app {
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            align-items: stretch;
            height: 100vh;
            min-height: 80rem;
        }

        .global-page {
            height: 100%;
        }
        
        .global-page-content {
            height: 100%;
            display: flex;
            flex-direction: column;
            align-items: stretch;
        }
        .page-content {
            margin-top: 1.6rem;
            flex: 1;
            display: flex;
            flex-direction: column;
        }
        .page-content > .wrapper {
            flex: 1 1 auto;
            display: flex;
            flex-direction: column;
        }

        h4 {
            font-size: 2.4rem;
            line-height: 2.4rem;
            letter-spacing: -0.3px;
            margin-bottom: 2.4rem;
            font-weight: normal;
        }

        h5 {
            font-size: 1.6rem;
            line-height: 24px;
            text-transform: uppercase;
            font-weight: normal;
            text-align: center;
        }

        .content {
            background: #ffffff;
            box-shadow: 0 1px 0 0 rgba(0, 0, 0, 0.05);
            border-radius: 4px;
            flex: 1 1 auto;
            display: flex;
            justify-content: flex-start;
            align-items: stretch;
            height: 100%;
        }
        .content__inner {
            width: 80rem;
            margin-left: auto;
            margin-right: auto;
            padding-top: 6.4rem;
        }
        
        .page404-top {
            text-align: center;
        }
        
        .action {
            margin-top: 3.2rem;
            position: relative;
        }
        
        .error-text {
            font-family: "MetaPro-Norm", Arial, sans-serif;
            font-size: 1.6rem;
            color: #262626;
            line-height: 2.4rem;
            text-transform: uppercase;
        }
        .text404 {
            /* 404: */
            font-family: "PFCentroSlabPro-Thin", serif;
            font-size: 25vh;
            color: #A0A0A0;
            letter-spacing: 6px;
            line-height: 1;
        }

        a.btn,
        label.btn,
        button.btn,
        input[type=submit],
        input[type=button], .policy-name__text[contenteditable=true] + button {
            font-family: inherit;
            display: inline-block;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            background: #F36C21 -webkit-gradient(linear, left top, left bottom, from(rgba(241, 241, 241, 0.1)), to(rgba(230, 230, 230, 0.1)));
            background: #F36C21 -o-linear-gradient(top, rgba(241, 241, 241, 0.1) 0%, rgba(230, 230, 230, 0.1) 100%);
            background: #F36C21 linear-gradient(-180deg, rgba(241, 241, 241, 0.1) 0%, rgba(230, 230, 230, 0.1) 100%);
            border-radius: 4px;
            text-align: center;
            font-size: 1.6rem;
            line-height: 2.4rem;
            color: #ffffff;
            letter-spacing: -0.5px;
            padding: 1.2rem 2.4rem;
            -webkit-transition: background-color 0.3s, background-image 0.3s, color 0.3s;
            -o-transition: background-color 0.3s, background-image 0.3s, color 0.3s;
            transition: background-color 0.3s, background-image 0.3s, color 0.3s;
            -webkit-appearance: none;
            border: none;
            white-space: nowrap; }
        a.btn:hover,
        label.btn:hover,
        button.btn:hover,
        input[type=submit]:hover,
        input[type=button]:hover, .policy-name__text[contenteditable=true] + button:hover {
            cursor: pointer;
            background: #F36C21 -webkit-gradient(linear, left top, left bottom, from(rgba(241, 241, 241, 0)), to(rgba(230, 230, 230, 0)));
            background: #F36C21 -o-linear-gradient(top, rgba(241, 241, 241, 0) 0%, rgba(230, 230, 230, 0) 100%);
            background: #F36C21 linear-gradient(-180deg, rgba(241, 241, 241, 0) 0%, rgba(230, 230, 230, 0) 100%); }
        a.btn:focus,
        label.btn:focus,
        button.btn:focus,
        input[type=submit]:focus,
        input[type=button]:focus, .policy-name__text[contenteditable=true] + button:focus {
            outline: none; }

        a.btn.btn--secondary,
        label.btn.btn--secondary,
        button.btn.btn--secondary,
        input[type=submit].btn--secondary,
        input[type=button].btn--secondary {
            background: #F2F2F2 -webkit-gradient(linear, left top, left bottom, from(rgba(242, 242, 242, 0.1)), to(rgba(242, 242, 242, 0.1)));
            background: #F2F2F2 -o-linear-gradient(top, rgba(242, 242, 242, 0.1) 0%, rgba(242, 242, 242, 0.1) 100%);
            background: #F2F2F2 linear-gradient(-180deg, rgba(242, 242, 242, 0.1) 0%, rgba(242, 242, 242, 0.1) 100%);
            color: #262626; }
        a.btn.btn--secondary:hover,
        label.btn.btn--secondary:hover,
        button.btn.btn--secondary:hover,
        input[type=submit].btn--secondary:hover,
        input[type=button].btn--secondary:hover {
            background: #E6E6E6 -webkit-gradient(linear, left top, left bottom, from(rgba(242, 242, 242, 0)), to(rgba(242, 242, 242, 0)));
            background: #E6E6E6 -o-linear-gradient(top, rgba(242, 242, 242, 0) 0%, rgba(242, 242, 242, 0) 100%);
            background: #E6E6E6 linear-gradient(-180deg, rgba(242, 242, 242, 0) 0%, rgba(242, 242, 242, 0) 100%); }

        .page404-bottom {
            border-top: 1px solid rgba(160, 160, 160, 0.24);
            display: flex;
            flex-wrap: nowrap;
            margin-top: 8vh;
        }
        
        .bottom-section {
            padding-top: 4rem;
            padding-bottom: 4rem;
            width: 50%;
            box-sizing: border-box;
        }
        .bottom-section.left {
            padding-right: 4.8rem;
            padding-left: 7.2rem;
        }
        .bottom-section.right {
            padding-right: 7.2rem;
            padding-left: 4.8rem;
            border-left: 1px solid rgba(160, 160, 160, 0.24);
        }
        .info-text {
            font-size: 1.4rem;
            line-height: 1.6rem;
            display: flex;
            position: absolute;
            left: 18rem;
            top: 0.7rem;
            flex-wrap: nowrap;
            width: 20rem;
            align-items: center;
        }
        .info-text span {
            margin-left: 1rem;
        }
        @media (max-height: 800px) {
            .text404 {
                font-size: 20rem;
            }
        }
        @media (min-height: 1200px) {
            .text404 {
                font-size: 25rem;
            }
        }
    </style>
</head>
<body data-page="<?=$page?>" class="<?=$page?>">
<div id="app">
    <div class="global-page">
        <div class="global-page-content">
            <header class="site-header">
                <a href="/" class="site-header__logo"><img src="/static/img/logo.svg" alt="Логотип"></a>
            </header>
