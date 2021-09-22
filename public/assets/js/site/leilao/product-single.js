$(document).ready(function () {
    $(".thumbs li").click(function () {
        var thumbs = $(this).find("img").attr("src");
        var cover = $(".cover img");

        cover.fadeTo("200", "0", function () {
            cover.attr("src", thumbs).fadeTo("150", "1");
        });

        $(".thumbs li").removeClass("active");
        $(this).addClass("active");
    });
});

$(document).ready(function() {
    $('.cookies-save').on('click', function(){
        $('.cookies-container').addClass('accept');
        setCookie('leilosoc_cookie', 'Aceito');
    });

    $(function(){
        if(!getCookie('leilosoc_cookie')){
            $('.cookies-container').removeClass('accept');
        }
    })
});

function setCookie(name, value, duration) {
    var cookie = name + "=" + escape(value) +
    ((duration) ? "; duration=" + duration.toGMTString() : "");

    document.cookie = cookie;
}

function getCookie(name) {
    var cookies = document.cookie;
    var prefix = name + "=";
    var begin = cookies.indexOf("; " + prefix);

    if (begin == -1) {

        begin = cookies.indexOf(prefix);

        if (begin != 0) {
            return null;
        }

    } else {
        begin += 2;
    }

    var end = cookies.indexOf(";", begin);

    if (end == -1) {
        end = cookies.length;                        
    }

    return unescape(cookies.substring(begin + prefix.length, end));
}

function deleteCookie(name) {
    if (getCookie(name)) {
        document.cookie = name + "=" + "; expires=Thu, 01-Jan-70 00:00:01 GMT";
    }
}

// function cookies(functions) {
//     const container = document.querySelector(".cookies-container");
//     const save = document.querySelector(".cookies-save");
//     if (!container || !save) return null;

//     const localPref = JSON.parse(window.localStorage.getItem("cookies-pref"));
//     if (localPref) activateFunctions(localPref);

//     function getFormPref() {
//         return [...document.querySelectorAll("[data-function]")]
//             .filter((el) => el.checked)
//             .map((el) => el.getAttribute("data-function"));
//     }

//     function activateFunctions(pref) {
//         pref.forEach((f) => functions[f]());
//         container.style.display = "none";
//         window.localStorage.setItem("cookies-pref", JSON.stringify(pref));
//     }

//     function handleSave() {
//         const pref = getFormPref();
//         activateFunctions(pref);
//     }

//     save.addEventListener("click", handleSave);
// }

// function marketing() {
//     console.log("Função de marketing");
// }

// function analytics() {
//     console.log("Função de analytics");
// }

// cookies({
//     marketing,
//     analytics,
// });