<?
function parcelJson($key, $type) {
    $url = json_decode(file_get_contents($_SERVER['DOCUMENT_ROOT'].'/dist/assets.json'), true)[$key][$type];
    return (!empty($url) ? $url : false);
}
?>
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
        /* PubSub */
        window.PS=(function(){var topics={};var hOP=topics.hasOwnProperty;return{subscribe:function(topic,listener){if(!hOP.call(topics,topic))topics[topic]=[];var index=topics[topic].push(listener)-1;return{remove:function(){delete topics[topic][index];}};},publish:function(topic,info){if(!hOP.call(topics,topic))return;topics[topic].forEach(function(item){item(info!==undefined?info:{});});}};})();
    </script>
    <style>
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

        body {
            min-height: 100vh;
            font-size: 1.6rem;
            line-height: 2.4rem;
            /*color: #595959;*/
            color: #262626;
            font-family: 'FFMetaWebProNormal', sans-serif;
            -webkit-font-smoothing: antialiased;
            min-width: 121.6rem;
            font-variant-numeric: lining-nums;     /* high-level property          */
            -moz-font-feature-settings: 'lnum';    /* low-level (old Firefox)      */
            -webkit-font-feature-settings: 'lnum'; /* low-level (old Webkit)       */
            font-feature-settings: 'lnum' on;      /* low-level (all new browsers) */

        }

        body.show-fs-modal {
            position: fixed;
            left: 0;
            right: 0;
            top: 0;
            bottom: 0;
            overflow: hidden;
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

    </style>
    <link rel="stylesheet" href="<?= parcelJson("app", "css") ?>">
</head>
<body data-page="<?=$page?>" class="<?=$page?>">
<div style="display:none;">
    <svg xmlns="http://www.w3.org/2000/svg">
        <symbol id="phone" viewBox="0 0 17 16"><path stroke="inherit" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.286 11.444v2.1c.002.394-.166.771-.463 1.037-.296.266-.694.398-1.094.363-2.198-.234-4.309-.97-6.164-2.149-1.726-1.075-3.189-2.509-4.286-4.2-1.207-1.826-1.958-3.905-2.193-6.069-.036-.391.097-.78.368-1.07.27-.29.653-.456 1.054-.456h2.143c.717-.007 1.328.508 1.429 1.204.09.672.258 1.332.5 1.967.196.512.071 1.088-.321 1.477l-.907.889c1.017 1.752 2.497 3.204 4.286 4.2l.907-.889c.397-.384.985-.507 1.507-.315.648.237 1.321.401 2.007.49.718.099 1.247.71 1.229 1.421z" fill="none"></path></symbol>
        <symbol id="pin" viewBox="0 0 14 16"><g stroke="inherit" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" transform="translate(1 1)" fill="none"><path d="M12 5.727c0 4.455-6 8.273-6 8.273s-6-3.818-6-8.273c0-3.163 2.686-5.727 6-5.727s6 2.564 6 5.727z"></path><circle cx="6" cy="5" r="1"></circle></g></symbol>
        <symbol id="search" viewBox="0 0 14 14"><g stroke="inherit" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" transform="translate(1 1)" fill="none"><circle cx="5" cy="5" r="5"></circle><path d="M12 12l-2.369-2.369"></path></g></symbol>
        <symbol id="user" viewBox="0 0 14 16"><g stroke="inherit" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" transform="translate(1 1)" fill="none"><path d="M12 14v-1c0-2.209-1.791-4-4-4h-4c-2.209 0-4 1.791-4 4v1"></path><circle cx="6" cy="3" r="3"></circle></g></symbol>
        
        <symbol id="car" viewBox="0 0 20 15"><g stroke="#A0A0A0" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" fill="none"><path d="M18 13.316c0 .376-.313.684-.696.684h-1.496c-.348 0-.626-.239-.696-.582l-.243-1.471h-9.739l-.243 1.471c-.07.342-.348.582-.696.582h-1.496c-.383 0-.696-.308-.696-.684v-3.661c0-.753.243-1.471.696-2.053l1.391-1.813.904-2.703c.313-.924 1.113-1.642 2.087-1.813.8-.137 1.809-.274 2.922-.274 1.113 0 2.122.137 2.887.274.974.171 1.774.889 2.087 1.813l.939 2.703 1.391 1.813c.452.582.696 1.3.696 2.053v3.661zM16.322 5.079h1.287c.487 0 .87.376.87.855s-.383.855-.87.855h-.696m-13.235-1.711h-1.287c-.487 0-.87.376-.87.855s.383.855.87.855h.696m.13 2.211h3m8 0h3"></path></g></symbol>
        <symbol id="check-circle" viewBox="0 0 34 33"><g stroke="#F36C21" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" fill="none"><path d="M31.476 15.345v1.417c-.004 6.748-4.446 12.691-10.918 14.604-6.472 1.913-13.431-.658-17.104-6.319s-3.185-13.064 1.2-18.194c4.385-5.13 11.621-6.765 17.785-4.018M33 3.048l-16.762 16.762-4.571-4.572"></path></g></symbol>
        <symbol id="chevron-right" viewBox="0 0 6 9"><path stroke="inherit" stroke-linecap="round" stroke-linejoin="round" fill="none" d="M1 9l4-4.5-4-4.5"></path></symbol>
        <symbol id="documents" viewBox="0 0 18 19"><path fill="#7B7B7B" fill-rule="evenodd" d="M17.203 4.029c.219.198.406.467.563.806.156.339.234.65.234.933v12.214c0 .283-.109.523-.328.721-.219.198-.484.297-.797.297h-15.75c-.313 0-.578-.099-.797-.297-.219-.198-.328-.438-.328-.721v-16.964c0-.283.109-.523.328-.721.219-.198.484-.297.797-.297h10.5c.313 0 .656.071 1.031.212.375.141.672.311.891.509l3.656 3.308zm-5.203-2.587v3.987h4.406c-.078-.205-.164-.35-.258-.435l-3.668-3.319c-.094-.085-.254-.163-.48-.233zm4.5 16.201v-10.857h-4.875c-.313 0-.578-.099-.797-.297-.219-.198-.328-.438-.328-.721v-4.411h-9v16.286h15zm-12-9.161c0-.099.035-.18.105-.244.07-.064.16-.095.27-.095h8.25c.109 0 .199.032.27.095.07.064.105.145.105.244v.679c0 .099-.035.18-.105.244-.07.064-.16.095-.27.095h-8.25c-.109 0-.199-.032-.27-.095-.07-.064-.105-.145-.105-.244v-.679zm8.625 2.375c.109 0 .199.032.27.095.07.064.105.145.105.244v.679c0 .099-.035.18-.105.244-.07.064-.16.095-.27.095h-8.25c-.109 0-.199-.032-.27-.095-.07-.064-.105-.145-.105-.244v-.679c0-.099.035-.18.105-.244.07-.064.16-.095.27-.095h8.25zm0 2.714c.109 0 .199.032.27.095.07.064.105.145.105.244v.679c0 .099-.035.18-.105.244-.07.064-.16.095-.27.095h-8.25c-.109 0-.199-.032-.27-.095-.07-.064-.105-.145-.105-.244v-.679c0-.099.035-.18.105-.244.07-.064.16-.095.27-.095h8.25z"></path></symbol>
        <symbol id="family" viewBox="0 0 18 14"><g stroke="#A0A0A0" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" transform="translate(1 1)" fill="none"><path d="M16 12c0-2.209-1.791-4-4-4h-1m-.589-3.249c.329.159.698.249 1.089.249 1.381 0 2.5-1.119 2.5-2.5s-1.119-2.5-2.5-2.5c-.326 0-.638.062-.924.176m-1.576 11.824c0-2.209-1.791-4-4-4h-1c-2.209 0-4 1.791-4 4"></path><circle cx="4.5" cy="2.5" r="2.5"></circle></g></symbol>
        <symbol id="house" viewBox="0 0 14 16"><g stroke="#A0A0A0" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" fill="none"><path d="M1 6l6-5 6 5v7c0 1.105-.895 2-2 2h-8c-1.105 0-2-.895-2-2v-7zM5 15v-6h4v6"></path></g></symbol>
        <symbol id="message" viewBox="0 0 20 20"><g transform="translate(1 1)" fill="none"><path stroke="#F36C21" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 8.5c.003 1.32-.305 2.622-.9 3.8-1.439 2.879-4.381 4.699-7.6 4.7-1.32.003-2.622-.305-3.8-.9l-5.7 1.9 1.9-5.7c-.595-1.178-.903-2.48-.9-3.8.001-3.219 1.821-6.161 4.7-7.6 1.178-.595 2.48-.903 3.8-.9h.5c4.316.238 7.762 3.684 8 8v.5z"></path><circle cx="5.5" cy="8.5" r="1.5" fill="#F16C2F"></circle><circle cx="9.5" cy="8.5" r="1.5" fill="#F16C2F"></circle><circle cx="13.5" cy="8.5" r="1.5" fill="#F16C2F"></circle></g></symbol>
        <symbol id="polis" viewBox="0 0 53 66"><g fill="none"><path stroke="#A0A0A0" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 1h26.5l22.5 22v40c0 1.105-.895 2-2 2h-47c-1.105 0-2-.895-2-2v-60c0-1.105.895-2 2-2z"></path><g fill="#F36C21"><path d="M18.765 17.4c-.121.175-.266.341-.425.496-.322.308-.713.568-1.152.742-.445.181-.909.271-1.383.304-.474.028-.953-.015-1.409-.127-.456-.113-.881-.306-1.252-.551-.372-.244-.679-.555-.904-.893-.226-.338-.357-.71-.39-1.061-.039-.352.027-.676.135-.935.106-.262.253-.46.383-.607.131-.149.252-.247.334-.313l.128-.096-.015.016c.173-.132.37-.236.582-.306-.274.059-.549.16-.814.296-.35.179-.673.43-.959.722-.287.294-.528.637-.712 1.008-.187.37-.333.77-.387 1.16-.057.396-.051.797.034 1.17.083.372.234.717.435 1.008.204.29.452.527.712.709.261.182.531.313.78.407l.243.082c.417.109.855.168 1.306.168 2.316 0 4.27-1.53 4.854-3.606l-.123.206M13.003 11.162c.218.013.437.054.654.11.435.116.863.317 1.237.6.383.284.696.631.962 1.014.262.385.464.811.592 1.251.128.441.168.895.135 1.331-.031.436-.153.851-.342 1.209-.187.36-.453.657-.748.86-.294.207-.615.314-.899.353-.286.042-.535.018-.732-.019-.198-.037-.345-.089-.445-.126l-.15-.059.013.002c-.205-.082-.392-.197-.556-.337.189.202.418.384.672.54.334.205.719.352 1.122.447.403.094.83.126 1.253.096.422-.028.851-.105 1.226-.254.381-.15.735-.355 1.024-.613.29-.257.52-.555.679-.871.156-.316.242-.645.275-.955.032-.311.014-.603-.028-.861l-.047-.237c-.572-2.095-2.536-3.643-4.866-3.643-.442 0-.87.056-1.278.161l.247.001M10.335 19.138c-.097-.19-.172-.395-.229-.607-.115-.425-.15-.885-.086-1.341.062-.465.214-.903.422-1.319.212-.413.489-.797.817-1.124.328-.327.712-.59 1.116-.78.404-.191.835-.295 1.247-.316.414-.022.811.054 1.14.201.331.144.586.362.764.581.179.22.282.442.348.627.067.185.094.335.111.437l.022.157-.009-.027.022.273c0 .128-.013.253-.038.375.085-.26.131-.542.144-.833.015-.385-.046-.782-.163-1.169-.118-.388-.302-.764-.542-1.105-.235-.342-.518-.666-.838-.907-.324-.245-.683-.442-1.057-.556-.374-.116-.755-.161-1.114-.136-.36.026-.696.117-.988.245-.293.128-.545.29-.753.454l-.134.112c-.947.891-1.537 2.139-1.537 3.52 0 1.339.554 2.553 1.452 3.439l-.117-.201"></path></g><path stroke="#A0A0A0" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 41h15m-15 7h10m-10 7h13m-13-21h28M29 1v22h22"></path><g stroke="#F36C21" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" transform="translate(1 1) translate(27 40)"><circle cx="7.5" cy="7.5" r="7.5"></circle><path d="M18 18l-5.2-5.2"></path></g></g></symbol>
        <symbol id="incident" viewBox="0 0 53 66"><g fill="none" fill-rule="evenodd"><path stroke="#A0A0A0" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 1h26.5L52 23v40c0 1.105-.895 2-2 2H3c-1.105 0-2-.895-2-2V3c0-1.105.895-2 2-2z"></path><g fill="#F36C21"><path d="M18.765 17.4c-.12.176-.265.34-.425.496-.322.308-.714.568-1.152.742-.445.18-.91.272-1.383.304-.474.028-.954-.014-1.41-.127-.455-.113-.88-.306-1.25-.55-.373-.245-.68-.555-.906-.894-.226-.337-.357-.71-.39-1.06-.04-.352.027-.675.134-.934.106-.26.253-.46.383-.607.13-.15.252-.247.334-.314l.13-.096-.016.017c.173-.133.37-.236.582-.307-.274.06-.55.16-.814.296-.35.18-.673.43-.96.722-.286.294-.527.637-.71 1.008-.188.37-.334.77-.39 1.16-.056.397-.05.798.035 1.17.083.373.234.717.435 1.008.204.29.452.527.712.71.262.182.53.313.78.406.085.032.165.058.244.082.416.11.855.168 1.306.168 2.316 0 4.27-1.53 4.854-3.605-.04.07-.078.137-.123.205"></path><path d="M13.003 11.162c.218.013.437.054.654.11.435.117.862.317 1.237.6.383.284.695.63.962 1.014.262.386.464.81.59 1.25.13.442.17.896.137 1.33-.03.437-.154.853-.343 1.21-.187.36-.453.658-.748.86-.294.208-.616.315-.9.354-.285.04-.534.017-.73-.02-.198-.036-.346-.088-.446-.125-.097-.04-.15-.06-.15-.06l.014.003c-.205-.082-.392-.197-.556-.337.19.203.418.385.672.54.334.206.718.353 1.122.448.404.094.83.127 1.253.097.423-.03.852-.105 1.227-.254.38-.15.735-.354 1.023-.612.29-.257.52-.556.68-.87.155-.317.242-.646.274-.956.032-.31.014-.604-.028-.862-.014-.08-.03-.16-.047-.237C18.327 12.55 16.362 11 14.033 11c-.442 0-.87.056-1.278.16.082 0 .164-.002.247.002"></path><path d="M10.335 19.138c-.097-.19-.172-.395-.23-.606-.113-.425-.15-.886-.085-1.342.063-.465.214-.903.422-1.32.212-.412.49-.795.817-1.123.327-.327.712-.59 1.115-.78.404-.19.835-.295 1.247-.316.414-.02.81.055 1.14.202.33.145.586.362.764.582.18.22.282.442.348.627s.094.336.11.437l.023.157-.01-.027c.014.09.023.18.023.273 0 .128-.014.253-.038.375.085-.26.13-.542.143-.833.016-.384-.045-.78-.163-1.168-.118-.388-.302-.765-.542-1.105-.234-.343-.517-.667-.837-.908-.325-.245-.684-.442-1.057-.556-.374-.116-.755-.16-1.115-.137-.358.025-.694.116-.986.245-.293.128-.545.29-.753.453l-.133.112C9.59 13.27 9 14.52 9 15.9c0 1.34.554 2.553 1.452 3.44-.04-.067-.08-.132-.117-.202"></path></g><path stroke="#A0A0A0" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 41h15m-15 7h10m-10 7h13M10 34h28M29 1v22h22"></path><path stroke="#F36C21" stroke-width="2" d="M39.063 40.43l7.76 15.506c.302.6.06 1.33-.54 1.63-.17.085-.356.13-.545.13H30.215c-.67 0-1.215-.545-1.215-1.216 0-.19.044-.375.13-.544l7.76-15.507c.3-.6 1.03-.844 1.63-.544.235.118.425.308.543.543z"></path><path fill="#F36C21" d="M38.86 46.712v2.736l-.192 2.975h-1.562l-.194-2.975-.01-2.736h1.96zm-.98 6.304c.32 0 .575.097.765.29.19.195.285.432.285.713 0 .265-.095.497-.285.695-.19.197-.445.296-.764.296-.326 0-.582-.098-.77-.295-.185-.198-.278-.43-.278-.696 0-.274.097-.51.29-.708.195-.197.447-.296.76-.296z"></path></g></symbol>
        <symbol id="shield" viewBox="0 0 18 22"><path stroke="#F36C21" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 21s8-4 8-10v-8l-8-2-8 2v8c0 6 8 10 8 10z" fill="none"></path></symbol>
        <symbol id="success" viewBox="0 0 24 22"><g stroke="#7EBD1B" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" fill="none"><path d="M21.147 9.923v.914c-.003 4.354-2.939 8.187-7.217 9.422-4.278 1.234-8.879-.424-11.307-4.077-2.428-3.652-2.105-8.429.793-11.738 2.898-3.31 7.682-4.365 11.757-2.593M22.718 1.833l-11.081 10.814-3.022-2.949"></path></g></symbol>
        <symbol id="success-big" viewBox="0 0 52 50"><g fill="none" fill-rule="evenodd" stroke="#7EBD1B" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><path d="M48.619 22.93v2.22c-.006 10.562-6.947 19.863-17.059 22.858-10.111 2.994-20.985-1.03-26.724-9.891A23.884 23.884 0 0 1 6.71 9.639a23.782 23.782 0 0 1 27.79-6.29"/><path d="M51 3.683L24.81 29.919l-7.143-7.155"/></g></symbol>
        <symbol id="warning" viewBox="0 0 21 22"><g fill="none"><path stroke="#F32121" stroke-width="2" d="M11.496 2.533l8.073 16.299c.313.633.055 1.4-.578 1.713-.176.087-.371.133-.568.133h-16.146c-.706 0-1.279-.572-1.279-1.279 0-.197.045-.391.133-.568l8.073-16.299c.313-.633 1.081-.892 1.713-.578.251.124.454.327.578.578z"></path><path fill="#F32121" d="M9.771 8.739l.1 5.648h.973l.1-5.648h-1.172zm.592 8.566c.238 0 .433-.076.583-.229.15-.152.226-.348.226-.586 0-.242-.075-.439-.226-.592-.15-.152-.345-.229-.583-.229s-.434.076-.586.229c-.152.152-.229.35-.229.592 0 .238.076.434.229.586.152.152.348.229.586.229z"></path></g></symbol>
        <symbol id="remove" viewBox="0 0 8 6"><path d="M7 0l-6 6m0-6l6 6" stroke="#A0A0A0" stroke-linecap="round" stroke-linejoin="round" fill="none"></path></symbol>
        <symbol id="filter-all" viewBox="0 0 14 14"><g fill="none" fill-rule="evenodd" stroke="#A0A0A0" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><path d="M9 1h4v4H9zM1 1h4v4H1zM1 9h4v4H1zM9 9h4v4H9z"></path></g></symbol>
        <symbol id="soc-gosuslugi" viewBox="0 0 19 20"><path fill="#0066B2" fill-rule="evenodd" d="M9.5 20c-.755 0-1.486-.14-2.057-.393-.052-.023-1.299-.575-2.692-1.38a31.25 31.25 0 0 1-2.545-1.643C1.172 15.828.287 14.297.151 13.023.145 12.967 0 11.61 0 10c0-1.61.145-2.966.15-3.023.138-1.274 1.022-2.805 2.057-3.562.047-.034 1.149-.837 2.544-1.64C6.144.969 7.391.415 7.443.392 8.014.139 8.745 0 9.5 0c.535 0 1.325.068 2.058.393.051.023 1.298.576 2.693 1.382a31.22 31.22 0 0 1 2.542 1.64c1.035.757 1.92 2.288 2.057 3.562.006.057.15 1.413.15 3.023s-.144 2.966-.15 3.023c-.137 1.275-1.022 2.805-2.057 3.561-.046.035-1.149.838-2.542 1.643-1.395.805-2.642 1.357-2.694 1.381-.732.324-1.522.392-2.057.392m0-17.12c-.414 0-.732.077-.891.147-.012.006-1.163.517-2.417 1.242-1.257.725-2.276 1.466-2.286 1.473-.39.284-.84 1.064-.89 1.544A28.5 28.5 0 0 0 2.88 10c0 1.449.133 2.702.135 2.714.05.481.5 1.26.89 1.544.01.008 1.03.75 2.285 1.474a28.601 28.601 0 0 0 2.418 1.241c.16.07.477.146.891.146.415 0 .732-.076.891-.146a28.698 28.698 0 0 0 2.42-1.24 29.19 29.19 0 0 0 2.283-1.475c.39-.284.84-1.064.891-1.544.001-.011.134-1.265.134-2.714s-.133-2.703-.134-2.715c-.051-.478-.502-1.26-.892-1.544-.008-.006-1.028-.747-2.283-1.472-1.256-.725-2.407-1.236-2.419-1.242-.16-.07-.476-.146-.891-.146"/></symbol>
        <symbol id="soc-fb" viewBox="0 0 18 18"><path fill="#3B5998" fill-rule="evenodd" d="M17.007 0H.993A.993.993 0 0 0 0 .993v16.014c0 .548.445.993.993.993h8.621v-6.97H7.27V8.312h2.345V6.31c0-2.325 1.42-3.591 3.494-3.591.994 0 1.848.074 2.096.107v2.43h-1.438c-1.128 0-1.346.536-1.346 1.322v1.735h2.69l-.35 2.716h-2.34V18h4.587a.993.993 0 0 0 .993-.993V.993A.993.993 0 0 0 17.007 0"/></symbol>
        <symbol id="soc-vk" viewBox="0 0 18 18"><path fill="#4D75A3" d="M18 16V2c0-1.1-.903-2-2.005-2H2.005C.855 0 0 .853 0 2v14c0 1.148.855 2 2.005 2h13.99A2.008 2.008 0 0 0 18 16zm-3.816-5.393s1.132 1.117 1.411 1.635c.008.011.011.021.014.025.113.19.142.34.085.45-.094.183-.414.275-.523.283h-1.999c-.14 0-.43-.036-.782-.279-.27-.188-.537-.499-.797-.802-.388-.45-.724-.84-1.062-.84a.383.383 0 0 0-.126.021c-.257.082-.583.447-.583 1.422 0 .305-.24.479-.41.479h-.916c-.312 0-1.937-.109-3.376-1.628-1.766-1.86-3.352-5.591-3.366-5.624-.1-.241.107-.372.332-.372h2.02c.271 0 .358.164.42.311.07.167.334.841.766 1.599.703 1.233 1.136 1.735 1.481 1.735a.378.378 0 0 0 .184-.049c.451-.249.367-1.857.347-2.189 0-.063-.001-.719-.231-1.034-.166-.228-.447-.315-.617-.348a.738.738 0 0 1 .266-.226C7.031 5.022 7.588 5 8.142 5h.308c.601.008.757.047.974.102.439.105.448.39.409 1.36-.011.276-.023.589-.023.956 0 .079-.003.166-.003.256-.014.496-.03 1.057.32 1.287a.289.289 0 0 0 .151.044c.122 0 .487 0 1.476-1.697.435-.749.77-1.633.793-1.699a.528.528 0 0 1 .148-.183.347.347 0 0 1 .166-.039h2.375c.26 0 .436.039.469.138.057.159-.011.644-1.096 2.11l-.483.64c-.984 1.288-.984 1.354.058 2.332z"/></symbol>
        <symbol id="soc-gplus" viewBox="0 0 22 15"><g fill="#DC4E41" fill-rule="evenodd"><path d="M7 6v2.4h3.97c-.16 1.03-1.2 3.02-3.97 3.02-2.39 0-4.34-1.98-4.34-4.42S4.61 2.58 7 2.58c1.36 0 2.27.58 2.79 1.08l1.9-1.83C10.47.69 8.89 0 7 0 3.13 0 0 3.13 0 7s3.13 7 7 7c4.04 0 6.72-2.84 6.72-6.84 0-.46-.05-.81-.11-1.16H7z"/><path d="M7 6.12h6.61c.07.33.11.68.11 1.1v-.07c0-.46-.05-.81-.11-1.16H7v.13zm0-6c1.85 0 3.41.67 4.61 1.77l.07-.07C10.47.69 8.89 0 7 0 3.13 0 0 3.13 0 7v.06C.04 3.23 3.16.12 7 .12zm0 11.42c2.77 0 3.81-1.98 3.97-3.02h-.03c-.22 1.06-1.27 2.89-3.94 2.89-2.37 0-4.3-1.95-4.33-4.35 0 .02-.01.04-.01.06 0 2.44 1.95 4.42 4.34 4.42z" opacity=".4"/><g opacity=".1"><path d="M7 2.58C4.61 2.58 2.66 4.56 2.66 7c0 .02.01.04.01.06C2.7 4.65 4.63 2.71 7 2.71c1.36 0 2.27.58 2.79 1.08l1.9-1.83c-.02-.02-.05-.04-.07-.06L9.79 3.67C9.27 3.17 8.36 2.58 7 2.58zM7 8.4v.12h3.94c.01-.04.02-.09.03-.12H7z"/><path d="M7 14c-3.84 0-6.96-3.1-7-6.94v.06c0 3.87 3.13 7 7 7 4.04 0 6.72-2.84 6.72-6.84v-.06C13.69 11.19 11.02 14 7 14z"/></g><path d="M22 6h-2V4h-2v2h-2v2h2v2h2V8h2"/><path d="M20 6h2v.12h-2V6zm-2-2h2v.12h-2V4zm-2 2h2v.12h-2V6z" opacity=".4"/><path d="M16 8h2v.12h-2V8zm4 0h2v.12h-2V8zm-2 2h2v.12h-2V10z" opacity=".1"/></g></symbol>
        <symbol id="soc-mail" viewBox="0 0 19 18"><path fill="#168DE2" d="M12.613 8.909c-.106-2.073-1.645-3.32-3.504-3.32h-.07c-2.144 0-3.333 1.687-3.333 3.603 0 2.144 1.438 3.5 3.325 3.5 2.103 0 3.487-1.542 3.587-3.364l-.005-.42zM9.05 3.734c1.433 0 2.78.634 3.77 1.625v.004c0-.476.32-.835.764-.835h.113c.696 0 .839.658.839.866l.003 7.403c-.05.484.5.735.805.423 1.189-1.221 2.61-6.28-.74-9.21-3.12-2.732-7.31-2.282-9.537-.746-2.369 1.633-3.884 5.248-2.412 8.644 1.605 3.703 6.196 4.807 8.925 3.705 1.382-.557 2.02 1.31.585 1.921-2.168.923-8.204.83-11.023-4.054C-.763 10.182-.662 4.38 4.39 1.374c3.865-2.3 8.961-1.664 12.034 1.545 3.212 3.355 3.024 9.637-.108 12.08-1.42 1.109-3.528.03-3.515-1.588l-.015-.528a5.273 5.273 0 0 1-3.736 1.553c-2.831 0-5.323-2.49-5.323-5.322 0-2.86 2.492-5.38 5.323-5.38z"/></symbol>
        
        <symbol id="money" viewBox="0 0 26 18"><g fill="none" fill-rule="evenodd" stroke="#F36C21" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" transform="translate(1 1)"><path d="M0 3h21v13H0z"/><path d="M3 3V0h21v13h-3"/><circle cx="10.5" cy="9.5" r="2.5"/></g></symbol>
        <symbol id="send" viewBox="0 0 22 18"><g fill="none" fill-rule="evenodd" stroke="#FFF" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><path d="M5.545 10.511V17l3.637-3.156"/><path d="M12.591 17L21 1 1 6.333zM21 1L5.545 10.511"/></g></symbol>
        <symbol id="dots" viewBox="0 0 20 4"><g fill="inherit" fill-rule="evenodd"><circle cx="2" cy="2" r="2"/><circle cx="10" cy="2" r="2"/><circle cx="18" cy="2" r="2"/></g></symbol>
        <symbol id="wrench" viewBox="0 0 22 22"><path fill="none" stroke="#F36C21" stroke-width="2" d="M20.348 4.438c-.062-.167-.187-.271-.332-.292a.46.46 0 0 0-.396.125l-3.182 3.208c-.52.521-1.414.521-1.913 0a1.375 1.375 0 0 1-.396-.958c0-.354.146-.708.396-.958l3.182-3.188a.461.461 0 0 0 .125-.396.459.459 0 0 0-.25-.333A6.345 6.345 0 0 0 14.816 1a6.148 6.148 0 0 0-4.368 1.813A6.193 6.193 0 0 0 8.846 8.77L1.92 15.646A3.135 3.135 0 0 0 4.125 21c.832 0 1.622-.333 2.205-.917l6.905-6.895c.52.124 1.04.208 1.58.208a6.113 6.113 0 0 0 4.369-1.813 6.193 6.193 0 0 0 1.164-7.146z"/></symbol>
        <symbol id="plusminus" viewBox="0 0 22 18"><g fill="none" fill-rule="evenodd"><g fill="#F36C21"><rect width="8" height="2" y="3" rx="1"/><rect width="8" height="2" y="3" rx="1" transform="rotate(90 4 4)"/></g><path stroke="#F36C21" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.718 2.075L4.575 16.218 18.718 2.075z"/><rect width="8" height="2" fill="#F36C21" rx="1" transform="translate(14 14)"/></g></symbol>
        <symbol id="search_action" viewBox="0 0 22 23"><path fill="none" stroke="#F36C21" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.917 16.873C4.544 16.873 1 13.32 1 8.937 1 4.553 4.544 1 8.917 1c4.372 0 7.916 3.553 7.916 7.937 0 4.383-3.544 7.936-7.916 7.936zm5.676-1.293l6.113 6.128-6.113-6.128z"/></symbol>
        <symbol id="star" viewBox="0 0 24 23"><path fill="none" stroke="#F36C21" stroke-width="2" d="M22.503 10.576c.45-.437.61-1.079.416-1.675a1.628 1.628 0 0 0-1.325-1.112l-5.442-.787a.328.328 0 0 1-.247-.179L13.47 1.911A1.63 1.63 0 0 0 12 1a1.63 1.63 0 0 0-1.47.91L8.094 6.824a.328.328 0 0 1-.247.179l-5.442.787c-.623.09-1.13.517-1.324 1.112a1.62 1.62 0 0 0 .415 1.675L5.435 14.4a.326.326 0 0 1 .094.29l-.93 5.398a1.62 1.62 0 0 0 .653 1.598c.509.368 1.17.416 1.728.125l4.867-2.55a.33.33 0 0 1 .306 0l4.868 2.55a1.638 1.638 0 0 0 1.727-.125 1.62 1.62 0 0 0 .653-1.598l-.93-5.399a.326.326 0 0 1 .094-.29l3.938-3.823z"/></symbol>
        <symbol id="pencil" viewBox="0 0 20 20"><path fill="inherit" d="M18.088 5.17l-1.32 1.32-3.3-3.304 1.32-1.32a.728.728 0 0 1 1.006 0l2.294 2.297a.713.713 0 0 1 0 1.006zM7.06 16.207l-3.3-3.303 8.53-8.542 3.3 3.303-8.53 8.542zM3 14.498l2.468 2.472-3.438.97.97-3.443zM19.265 2.985L16.97.69c-.448-.448-2.065-1.296-3.356 0L1.994 12.318a.8.8 0 0 0-.212.363L.03 18.917a.848.848 0 0 0 .212.814c.212.216.636.253.815.212l6.232-1.755a.8.8 0 0 0 .363-.212l11.613-11.63a2.382 2.382 0 0 0 0-3.36z"/></symbol>
        
        <symbol id="services-medicine" viewBox="0 0 50 50"><g fill="none" fill-rule="evenodd" stroke="#814C9E" stroke-width="2" transform="translate(1 1)"><circle cx="24" cy="24" r="24" opacity=".2"/><path d="M21.5 34.5h6a1 1 0 0 0 1-1v-5h5a1 1 0 0 0 1-1v-6a1 1 0 0 0-1-1h-5v-5a1 1 0 0 0-1-1h-6a1 1 0 0 0-1 1v5h-5a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h5v5a1 1 0 0 0 1 1z"/></g></symbol>
        <symbol id="services-lawyer" viewBox="0 0 50 50"><g fill="none" fill-rule="evenodd" stroke="#814C9E" stroke-width="2" transform="translate(1 1)"><circle cx="24" cy="24" r="24" opacity=".2"/><path d="M23.455 19.662h12.364c.1 0 .181.082.181.182v3.164c0 .1-.081.182-.181.182H23.455v-3.528zm-1.838-1.949H18.13a1.857 1.857 0 1 1 0-3.713h4.65a1.857 1.857 0 1 1 0 3.713h-4.65a1.857 1.857 0 1 1 0-3.713h4.65a1.857 1.857 0 1 1 0 3.713h-1.162zm-5.115 14.574h7.905c.43 0 .801.303.888.724L25.91 36H15l.614-2.989a.907.907 0 0 1 .888-.724z"/></g></symbol>
        <symbol id="pagination-prev" viewBox="0 0 6 10"><path fill="none" stroke="inherit" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.8 8.2L1.6 5l3.2-3.2"></path></symbol>
        <symbol id="pagination-next" viewBox="0 0 6 10"><path fill="none" stroke="inherit" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1.2 8.2L4.4 5 1.2 1.8"></path></symbol>

        <symbol id="search-big" viewBox="0 0 24 24"><g fill="none" fill-rule="evenodd" stroke="inherit" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" transform="translate(1 1)"><circle cx="10" cy="10" r="10"/><path d="M22 22l-4.738-4.738"/></g></symbol>
    </svg>
</div>
<script>
    window.GELIOS = window.GELIOS || {}
    window.GELIOS = {
      // isMenuVisible: false,
      isSearchActive: false,
      isCitySelectVisible: false,
      isModalVisible: false,
      // isModalVisible: true,
      isAuthorized: true,
      city: {
        id: 1,
        name: 'Благовещенск'
      },
      phone: {
        raw: '+74162990142',
        formatted: '+7&nbsp;4162&nbsp;99&nbsp;01&nbsp;42'
      },
      workTimes:[
        {
          id: 1,
          text: '10:00 – 10:30'
        },
        {
          id: 2,
          text: '10:30 – 11:00'
        },
        {
          id: 3,
          text: '11:00 – 11:30'
        },
        {
          id: 4,
          text: '11:30 – 12:00'
        },
        {
          id: 5,
          text: '12:00 – 12:30'
        },
        {
          id: 6,
          text: '12:30 – 13:00'
        },
        {
          id: 7,
          text: '13:00 – 13:30'
        },
        {
          id: 8,
          text: '13:30 – 14:00'
        },
        {
          id: 9,
          text: '14:00 – 14:30'
        },
        {
          id: 10,
          text: '14:30 – 15:00'
        },
        {
          id: 11,
          text: '15:00 – 15:30'
        },
        {
          id: 11,
          text: '15:30 – 16:00'
        },
      ],
      specialists: [
        {
          id: 1,
          image: '/static/img/specialists/1.png',
          name: 'Пыстогов Андрей Сергеевич',
          job: 'Терапевт, Эндокринолог',
          experience: '6 лет',
          description: 'Владеет современными методами лечения пациентов с патологией внутренних органов.',
          isChild: false,
          busyTimes: [
            {
              date: '16.01.2018',
              timeIds: [1, 3]
            },
            {
              date: '17.01.2018',
              timeIds: [1, 2, 6]
            }
          ]
        },
        {
          id: 2,
          image: '/static/img/specialists/2.png',
          name: 'Колягин Дмитрий Владимирович',
          job: 'Педиатр, Детский хирург',
          experience: '8 лет',
          description: 'Проводит консультации пациентов по заболеваниям нервной системы различной этиологии.',
          isChild: false,
          busyTimes: []
        },
        {
          id: 3,
          image: '/static/img/specialists/2.png',
          name: 'Колягин Дмитрий Владимирович',
          job: 'Педиатр, Детский хирург',
          experience: '8 лет',
          description: 'Проводит консультации пациентов по заболеваниям нервной системы различной этиологии.',
          isChild: false,
          busyTimes: [
            {
              date: '17.01.2018',
              timeIds: [8, 9]
            }
          ]
        },
        {
          id: 1,
          image: '/static/img/specialists/1.png',
          name: 'Пыстогов Андрей Сергеевич',
          job: 'Терапевт, Эндокринолог',
          experience: '6 лет',
          description: 'Владеет современными методами лечения пациентов с патологией внутренних органов.',
          isChild: false,
          busyTimes: []
        },
        {
          id: 2,
          image: '/static/img/specialists/2.png',
          name: 'Колягин Дмитрий Владимирович',
          job: 'Педиатр, Детский хирург',
          experience: '8 лет',
          description: 'Проводит консультации пациентов по заболеваниям нервной системы различной этиологии.',
          isChild: true,
          busyTimes: [
            {
              date: '15.01.2018',
              timeIds: '10:00'
            },
          ]
        },
        {
          id: 3,
          image: '/static/img/specialists/2.png',
          name: 'Колягин Дмитрий Владимирович',
          job: 'Педиатр, Детский хирург',
          experience: '8 лет',
          description: 'Проводит консультации пациентов по заболеваниям нервной системы различной этиологии.',
          isChild: false,
          busyTimes: [
            {
              date: '16.01.2018',
              timeIds: '10:00'
            },
            {
              date: '16.01.2018',
              timeIds: '12:00'
            },
            {
              date: '16.01.2018',
              timeIds: '14:00'
            }
          ]
        },
        {
          id: 1,
          image: '/static/img/specialists/1.png',
          name: 'Пыстогов Андрей Сергеевич',
          job: 'Терапевт, Эндокринолог',
          experience: '6 лет',
          description: 'Владеет современными методами лечения пациентов с патологией внутренних органов.',
          isChild: false,
          busyTimes: [
            {
              date: '15.01.2018',
              timeIds: '10:00'
            },
            {
              date: '16.01.2018',
              timeIds: '10:00'
            },
            {
              date: '17.01.2018',
              timeIds: '12:00'
            }
          ]
        },
        {
          id: 2,
          image: '/static/img/specialists/2.png',
          name: 'Колягин Дмитрий Владимирович',
          job: 'Педиатр, Детский хирург',
          experience: '8 лет',
          description: 'Проводит консультации пациентов по заболеваниям нервной системы различной этиологии.',
          isChild: false,
          busyTimes: [
            {
              date: '15.01.2018',
              timeIds: '10:00'
            },
          ]
        },
        {
          id: 3,
          image: '/static/img/specialists/2.png',
          name: 'Колягин Дмитрий Владимирович',
          job: 'Педиатр, Детский хирург',
          experience: '8 лет',
          description: 'Проводит консультации пациентов по заболеваниям нервной системы различной этиологии.',
          isChild: true,
          busyTimes: [
            {
              date: '16.01.2018',
              timeIds: '10:00'
            },
            {
              date: '16.01.2018',
              timeIds: '12:00'
            },
            {
              date: '16.01.2018',
              timeIds: '14:00'
            }
          ]
        },
      ],
      programsTable: {
        columns: [
          {
            name: 'Программа 1',
            text: '1 000 руб.'
          },
          {
            name: 'Программа 2',
            text: '1 500 руб.'
          },
          {
            name: 'Программа 3',
            text: '3 000 руб.'
          },
          {
            name: 'Программа 4',
            text: '5 000 руб.'
          },
          {
            name: 'Программа 5',
            text: '7 500 руб.'
          },
          {
            name: 'Программа 6',
            text: '10 000 руб.'
          },
          {
            name: 'Программа 7',
            text: '15 000 руб.'
          },
          {
            name: 'Программа 8',
            text: '20 000 руб.'
          },
        ],
        rows: [
          {
            name: 'Общая страховая сумма',
            columns: ['100 000', '140 000', '200 000', '290 000', '390 000', '440 000', '540 000', '790 000'],
            isPrimary: true
          },
          {
            name: 'Несчастный случай',
            columns: ['20 000', '30 000', '60 000', '100 000', '150 000', '200 000', '300 000', '400 000']
          },
          {
            name: 'Конструктив',
            columns: ['80 000', '80 000', '80 000', '80 000', '80 000', '80 000', '80 000', '80 000']
          },
          {
            name: 'Отделка',
            columns: ['—', '30 000', '30 000', '30 000', '30 000', '30 000', '30 000', '30 000']
          },
          {
            name: 'Движимое имущество',
            columns: ['—', '—', '30 000', '30 000', '30 000', '30 000', '30 000', '30 000']
          },
          {
            name: 'Гражданская ответственность',
            columns: ['—', '—', '—', '50 000', '50 000', '50 000', '50 000', '50 000']
          },
          {
            name: 'Потеря работы',
            columns: ['—', '—', '—', '—', '50 000', '50 000', '50 000', '50 000']
          },
          {
            name: '«Домашний юрист»',
            columns: ['—', '—', '—', '—', '—', 'есть', 'есть', 'есть'],
            info: ''
          },
          {
            name: 'Телемедицина',
            columns: ['—', '—', '—', '—', '—', '—', 'есть', 'есть'],
            info: ''
          },
          {
            name: 'Критические заболевания',
            columns: ['—', '—', '—', '—', '—', '—', '—', '150 000']
          },
        ]
      }
    }
</script>
<div id="app">
    <div class="global-page" is="page" id="page" inline-template >
        <div class="global-page-content">
            <site-header :page-data="pageData" @showmodal="showModal"></site-header>
